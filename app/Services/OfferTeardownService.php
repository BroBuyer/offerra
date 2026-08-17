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
        private readonly HestiaClient $hestia,
        private readonly CloudflareClient $cloudflare,
        private readonly OfferVerificationFileService $verificationFiles,
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

        ArchiveOfferJob::dispatch($offer->id);
    }

    public function run(Offer $offer): void
    {
        $offer->refresh();
        $offer->loadMissing('user.settings');

        $domain = strtolower(trim($offer->domain));
        $meta = is_array($offer->teardown_meta) ? $offer->teardown_meta : [];
        $steps = is_array($meta['steps'] ?? null) ? $meta['steps'] : [];
        $errors = [];

        foreach ($this->hestiaCandidates($offer) as $label => $settings) {
            try {
                $this->hestia->deleteWebDomain($settings, $domain);
                $steps['hestia_'.$label] = 'deleted';
            } catch (\Throwable $e) {
                $steps['hestia_'.$label] = 'error: '.$e->getMessage();
                $errors[] = 'Hestia ('.$label.'): '.$e->getMessage();
                Log::warning('Offer teardown Hestia failed', [
                    'offer_id' => $offer->id,
                    'domain' => $domain,
                    'host' => $label,
                    'error' => $e->getMessage(),
                ]);
            }
        }

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

        $offer->update([
            'status' => 'archived',
            'archived_at' => now(),
            'remote_path' => null,
            'deploy_error' => null,
            'infra_status' => null,
            'infra_error' => null,
            'teardown_meta' => $meta,
        ]);
    }

    /**
     * @return array<string, UserSetting>
     */
    private function hestiaCandidates(Offer $offer): array
    {
        $candidates = [];
        $seenHosts = [];

        $owner = $offer->user?->settings;
        if ($owner && InfrastructureProvisioner::hestiaApiReady($owner)) {
            $host = trim((string) $owner->deploy_host);
            if ($host !== '') {
                $candidates['owner'] = $owner;
                $seenHosts[$host] = true;
            }
        }

        $admin = $this->adminSettings();
        if ($admin) {
            $host = trim((string) $admin->deploy_host);
            if ($host !== '' && ! isset($seenHosts[$host])) {
                $candidates['admin'] = $admin;
            }
        }

        return $candidates;
    }

    /**
     * @return array<string, UserSetting>
     */
    private function cloudflareCandidates(Offer $offer): array
    {
        $candidates = [];
        $owner = $offer->user?->settings;

        if ($owner && filled($owner->cloudflare_api_token)) {
            $candidates['owner'] = $owner;
        }

        $admin = $this->adminSettings();
        if ($admin && filled($admin->cloudflare_api_token)) {
            $ownerToken = (string) ($owner?->cloudflare_api_token ?? '');
            if ($ownerToken === '' || $admin->cloudflare_api_token !== $ownerToken) {
                $candidates['admin'] = $admin;
            }
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
}
