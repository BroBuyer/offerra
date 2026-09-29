<?php

namespace App\Services;

use App\Jobs\ArchiveOfferJob;
use App\Models\Offer;
use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use RuntimeException;

class OfferTeardownService
{
    public function __construct(
        private readonly CloudflareClient $cloudflare,
        private readonly KeitaroClient $keitaro,
        private readonly GoogleSearchConsoleClient $gsc,
        private readonly OfferVerificationFileService $verificationFiles,
        private readonly OriginHostService $origin,
        private readonly DeployService $deploy,
        private readonly OriginPool $pool,
        private readonly string $offersPath,
    ) {}

    public function enqueueArchive(Offer $offer, User $initiatedBy): void
    {
        if (in_array($offer->status, ['archiving', 'archived'], true)) {
            throw new RuntimeException('Оффер вже архівується або в архіві.');
        }

        if ($offer->status === 'deploying') {
            throw new RuntimeException('Зачекайте завершення деплою перед архівацією.');
        }

        $offer->update([
            'status' => 'archiving',
            'archived_at' => null,
            'archived_by' => $initiatedBy->id,
            'teardown_meta' => [
                'started_at' => now()->toIso8601String(),
                'steps' => [],
            ],
        ]);

        // Archiving is user-initiated and must not be starved behind the
        // background DNS-recheck backlog on the "default" queue. Route it to the
        // "deploy" queue, which has dedicated workers (same as provisioning/deploy).
        ArchiveOfferJob::dispatch($offer->id)->onQueue('deploy');
    }

    public function run(Offer $offer): void
    {
        $offer->refresh();
        $offer->loadMissing('user.settings');

        $domain = strtolower(trim($offer->domain));
        $meta = is_array($offer->teardown_meta) ? $offer->teardown_meta : [];
        $steps = is_array($meta['steps'] ?? null) ? $meta['steps'] : [];
        $errors = [];

        $ownerSettings = $offer->user?->settings;

        // Drop from Search Console while Google OAuth still works — soft-fail like Keitaro.
        $steps['gsc'] = $this->removeFromSearchConsole($offer, $ownerSettings);

        // Delete from the offer's actual Server column host (infra_meta), not only
        // Settings.deploy_host — otherwise archive removes files from the wrong VPS
        // and the live lander keeps answering HTTP 200.
        $steps['origin'] = $this->removeOriginFiles($offer, $ownerSettings, $domain, $errors);

        $cloudflareOk = false;
        $cloudflareHardErrors = [];

        foreach ($this->cloudflareCandidates($offer) as $label => $settings) {
            try {
                $outcome = $this->removeCloudflareZone($settings, $offer);
                $steps['cloudflare_'.$label] = $outcome;

                if (in_array($outcome, ['deleted', 'already_gone', 'skipped_not_found'], true)) {
                    $cloudflareOk = true;
                    $this->forgetCloudflareZoneId($offer);
                }
            } catch (\Throwable $e) {
                if ($this->cloudflare->isUnauthorizedError($e)) {
                    $steps['cloudflare_'.$label] = 'skipped_unauthorized';
                    Log::warning('Offer teardown Cloudflare unauthorized (ignored if zone already gone)', [
                        'offer_id' => $offer->id,
                        'domain' => $domain,
                        'host' => $label,
                        'error' => $e->getMessage(),
                    ]);

                    continue;
                }

                $steps['cloudflare_'.$label] = 'error: '.$e->getMessage();
                $cloudflareHardErrors[] = 'Cloudflare ('.$label.'): '.$e->getMessage();
                Log::warning('Offer teardown Cloudflare failed', [
                    'offer_id' => $offer->id,
                    'domain' => $domain,
                    'host' => $label,
                    'error' => $e->getMessage(),
                ]);
            }
        }

        // Zone deleted / already missing for at least one account → do not fail on admin 403 etc.
        if (! $cloudflareOk) {
            foreach ($cloudflareHardErrors as $error) {
                $errors[] = $error;
            }
        }

        try {
            $this->verificationFiles->delete($offer);
            $steps['verification'] = 'deleted';
        } catch (\Throwable $e) {
            $steps['verification'] = 'error: '.$e->getMessage();
            $errors[] = 'Verification: '.$e->getMessage();
        }

        $steps['keitaro'] = $this->deleteKeitaroCampaign($offer);

        try {
            $localPath = rtrim($this->offersPath, DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR.$offer->folder;
            if (File::isDirectory($localPath)) {
                File::deleteDirectory($localPath);
            }
            $steps['local_folder'] = 'deleted';
        } catch (\Throwable $e) {
            $steps['local_folder'] = 'error: '.$e->getMessage();
            $errors[] = 'Local: '.$e->getMessage();
        }

        $meta['steps'] = $steps;
        $meta['finished_at'] = now()->toIso8601String();
        $meta['dynadot'] = 'kept';

        if ($errors !== []) {
            $meta['errors'] = $errors;
            $offer->update([
                'status' => 'teardown_failed',
                'teardown_meta' => $meta,
            ]);

            return;
        }

        $infraMeta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        unset($infraMeta['gsc'], $infraMeta['gsc_error']);

        $offer->update([
            'status' => 'archived',
            'archived_at' => now(),
            'remote_path' => null,
            'deploy_error' => null,
            'infra_status' => null,
            'infra_error' => null,
            'infra_meta' => $infraMeta,
            'submitted_for_indexing' => false,
            'indexed_at' => null,
            'google_index_status' => null,
            'google_indexed_at' => null,
            'google_index_checked_at' => null,
            'google_index_coverage' => null,
            'teardown_meta' => $meta,
        ]);
    }

    /**
     * Remove /var/www/offers/{domain} from every reachable host that may hold it:
     * primary = offer deploy host via OriginServer SSH; also Settings host as fallback.
     *
     * @param  list<string>  $errors
     */
    private function removeOriginFiles(Offer $offer, ?UserSetting $ownerSettings, string $domain, array &$errors): string
    {
        if (! $ownerSettings && ! $offer->user) {
            return 'skipped_no_settings';
        }

        /** @var array<string, UserSetting> $byHost */
        $byHost = [];

        if ($offer->user && $ownerSettings) {
            try {
                $resolved = $this->deploy->resolveDeploySettings($offer->user, $offer, allocate: false);
                $host = strtolower(trim((string) $resolved->deploy_host));
                if ($host !== '') {
                    $byHost[$host] = $resolved;
                }
            } catch (\Throwable $e) {
                Log::warning('Offer teardown could not resolve offer origin SSH', [
                    'offer_id' => $offer->id,
                    'domain' => $domain,
                    'error' => $e->getMessage(),
                ]);
            }
        }

        if ($ownerSettings) {
            $settingsHost = strtolower(trim((string) $ownerSettings->deploy_host));
            if ($settingsHost !== '' && ! isset($byHost[$settingsHost])) {
                $byHost[$settingsHost] = $ownerSettings;
            }
        }

        if ($byHost === []) {
            // No bound origin host means nothing was ever uploaded for this offer.
            if ($this->pool->boundHost($offer) === '') {
                return 'skipped_no_host';
            }

            $errors[] = 'Origin: немає SSH до привʼязаного сервера офера';

            return 'error: no_ssh_targets';
        }

        $results = [];
        $anyDeleted = false;

        foreach ($byHost as $host => $settings) {
            try {
                $this->origin->deleteWebRoot($settings, $domain);
                $results[] = $host.':deleted';
                $anyDeleted = true;
            } catch (\Throwable $e) {
                $results[] = $host.':error:'.$e->getMessage();
                Log::warning('Offer teardown origin failed', [
                    'offer_id' => $offer->id,
                    'domain' => $domain,
                    'host' => $host,
                    'error' => $e->getMessage(),
                ]);
            }
        }

        if (! $anyDeleted) {
            $msg = implode('; ', $results);
            $errors[] = 'Origin: '.$msg;

            return 'error: '.$msg;
        }

        return implode('; ', $results);
    }

    private function removeFromSearchConsole(Offer $offer, ?UserSetting $settings): string
    {
        if (! $settings || ! $settings->hasGoogleOAuth()) {
            return 'skipped_no_google';
        }

        if (! filled(config('services.google.client_id'))) {
            return 'skipped_no_oauth_config';
        }

        $wasSubmitted = (bool) $offer->submitted_for_indexing;
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $gscStatus = (string) (($meta['gsc']['status'] ?? null) ?: '');
        if (! $wasSubmitted && $gscStatus === '') {
            return 'skipped_not_submitted';
        }

        try {
            return $this->gsc->removeOffer($offer, $settings);
        } catch (\Throwable $e) {
            Log::warning('Offer teardown GSC failed', [
                'offer_id' => $offer->id,
                'domain' => $offer->domain,
                'error' => $e->getMessage(),
            ]);

            return 'error: '.$e->getMessage();
        }
    }

    /**
     * @return array<string, UserSetting>
     */
    private function cloudflareCandidates(Offer $offer): array
    {
        $candidates = [];
        $owner = $offer->user?->settings;

        $push = function (string $label, ?UserSetting $base, ?string $token, ?string $accountId = null, ?string $accountName = null) use (&$candidates): void {
            $token = CloudflareClient::normalizeApiToken($token);
            if ($token === '' || $base === null) {
                return;
            }

            // Deduplicate by token fingerprint so primary/backup/offer do not triple-delete.
            foreach ($candidates as $existing) {
                if (CloudflareClient::normalizeApiToken($existing->cloudflare_api_token) === $token) {
                    return;
                }
            }

            $probe = $base->replicate();
            $probe->cloudflare_api_token = $token;
            if ($accountId !== null && $accountId !== '') {
                $probe->cloudflare_account_id = $accountId;
            }
            if ($accountName !== null && $accountName !== '') {
                $probe->cloudflare_account_name = $accountName;
            }
            $candidates[$label] = $probe;
        };

        // 1) Token stored on the offer (last successful CF account after switch/migrate).
        if ($owner) {
            $push(
                'offer',
                $owner,
                $offer->cloudflare_api_token,
                $offer->cloudflare_account_id,
                $offer->cloudflare_account_name,
            );
        }

        // 2) Owner primary + backup slots from Settings.
        if ($owner) {
            $push('owner', $owner, $owner->cloudflare_api_token, $owner->cloudflare_account_id, $owner->cloudflare_account_name);
            $push(
                'owner_backup',
                $owner,
                $owner->cloudflare_backup_api_token,
                $owner->cloudflare_backup_account_id,
                $owner->cloudflare_backup_account_name,
            );
        }

        // 3) Admin primary + backup (shared / fallback accounts).
        $admin = $this->adminSettings();
        if ($admin) {
            $push('admin', $admin, $admin->cloudflare_api_token, $admin->cloudflare_account_id, $admin->cloudflare_account_name);
            $push(
                'admin_backup',
                $admin,
                $admin->cloudflare_backup_api_token,
                $admin->cloudflare_backup_account_id,
                $admin->cloudflare_backup_account_name,
            );
        }

        return $candidates;
    }

    private function adminSettings(): ?UserSetting
    {
        $admin = User::query()
            ->where('role', User::ROLE_ADMIN)
            ->orderBy('id')
            ->with('settings')
            ->first();

        return $admin?->settings;
    }

    /**
     * @return 'deleted'|'already_gone'|'skipped_not_found'
     */
    private function removeCloudflareZone(UserSetting $settings, Offer $offer): string
    {
        $domain = strtolower(trim($offer->domain));
        $storedZoneId = $this->storedCloudflareZoneId($offer);
        $hadStoredId = $storedZoneId !== '';

        if ($storedZoneId !== '') {
            try {
                $result = $this->cloudflare->deleteZone($settings, $storedZoneId);
                if ($result === 'deleted') {
                    return 'deleted';
                }
            } catch (\Throwable $e) {
                if (! $this->cloudflare->isUnauthorizedError($e) && ! $this->cloudflare->isZoneAbsentError($e)) {
                    throw $e;
                }
                // Stale ID or token cannot see this zone → resolve by domain for this account.
            }
        }

        $found = $this->cloudflare->findZone($settings, $domain);
        $foundZoneId = trim((string) ($found['zone_id'] ?? ''));

        if ($foundZoneId === '') {
            return $hadStoredId ? 'already_gone' : 'skipped_not_found';
        }

        $result = $this->cloudflare->deleteZone($settings, $foundZoneId);

        return $result === 'deleted' ? 'deleted' : 'already_gone';
    }

    private function storedCloudflareZoneId(Offer $offer): string
    {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];

        return trim((string) ($meta['cloudflare_zone_id'] ?? ''));
    }

    private function forgetCloudflareZoneId(Offer $offer): void
    {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];

        if (! array_key_exists('cloudflare_zone_id', $meta)) {
            return;
        }

        unset($meta['cloudflare_zone_id']);
        $offer->infra_meta = $meta;
        $offer->save();
    }

    private function deleteKeitaroCampaign(Offer $offer): string
    {
        $campaignId = (int) ($offer->keitaro_campaign_id ?? 0);

        if ($campaignId <= 0) {
            return 'skipped';
        }

        $inUse = Offer::query()
            ->where('keitaro_campaign_id', $campaignId)
            ->where('id', '!=', $offer->id)
            ->whereNotIn('status', ['archived', 'teardown_failed', 'archiving'])
            ->exists();

        if ($inUse) {
            Log::warning('Offer teardown skipped Keitaro: campaign still used by a live offer', [
                'offer_id' => $offer->id,
                'campaign_id' => $campaignId,
            ]);

            return 'skipped_in_use';
        }

        $settings = $offer->user?->settings;

        if (! $settings || ! filled($settings->keitaro_api_key)) {
            return 'skipped_no_key';
        }

        try {
            $outcome = $this->keitaro->deleteCampaign($settings, $campaignId);
            $offer->update([
                'keitaro_campaign_id' => null,
                'keitaro_alias' => null,
                'keitaro_campaign_token' => null,
            ]);

            return $outcome;
        } catch (\Throwable $e) {
            Log::warning('Offer teardown Keitaro failed', [
                'offer_id' => $offer->id,
                'campaign_id' => $campaignId,
                'error' => $e->getMessage(),
            ]);

            return 'error: '.$e->getMessage();
        }
    }
}
