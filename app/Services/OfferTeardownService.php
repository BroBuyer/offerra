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

        ArchiveOfferJob::dispatch($offer->id)->afterResponse();
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

        foreach ($this->cloudflareCandidates($offer) as $label => $settings) {
            try {
                $zoneId = $this->resolveZoneId($settings, $offer);
                if ($zoneId !== '') {
                    $this->cloudflare->deleteZone($settings, $zoneId);
                    $steps['cloudflare_'.$label] = 'deleted';
                } else {
                    $steps['cloudflare_'.$label] = 'skipped_not_found';
                }
            } catch (\Throwable $e) {
                $steps['cloudflare_'.$label] = 'error: '.$e->getMessage();
                $errors[] = 'Cloudflare ('.$label.'): '.$e->getMessage();
                Log::warning('Offer teardown Cloudflare failed', [
                    'offer_id' => $offer->id,
                    'domain' => $domain,
                    'host' => $label,
                    'error' => $e->getMessage(),
                ]);
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

    private function resolveZoneId(UserSetting $settings, Offer $offer): string
    {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $zoneId = trim((string) ($meta['cloudflare_zone_id'] ?? ''));

        if ($zoneId !== '') {
            return $zoneId;
        }

        $found = $this->cloudflare->findZone($settings, strtolower(trim($offer->domain)));

        return trim((string) ($found['zone_id'] ?? ''));
    }
}
