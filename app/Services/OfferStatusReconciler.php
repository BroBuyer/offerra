<?php

namespace App\Services;

use App\Models\Offer;
use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class OfferStatusReconciler
{
    public function __construct(
        private readonly DeployConnection $deploy,
        private readonly KeitaroClient $keitaro,
        private readonly string $offersPath,
    ) {}

    /**
     * @return list<array<string, mixed>>
     */
    public function reconcile(?int $userId = null, bool $apply = false): array
    {
        $user = User::query()->when($userId, fn ($q) => $q->where('id', $userId))->first();
        $settings = $user?->settings;

        if (! $settings) {
            throw new \RuntimeException('Налаштування користувача не знайдено.');
        }

        $deployConfig = $this->deployConfig($settings);
        $canProbeServer = filled($deployConfig['host'])
            && filled($deployConfig['username'])
            && filled($deployConfig['password']);

        $rows = [];

        foreach (Offer::query()->when($userId, fn ($q) => $q->where('user_id', $userId))->orderBy('id')->get() as $offer) {
            $rows[] = $this->reconcileOffer($offer, $settings, $deployConfig, $canProbeServer, $apply);
        }

        return $rows;
    }

    /**
     * @param  array{host: string, port: int, username: string, password: string, path_template: string|null}  $deployConfig
     * @return array<string, mixed>
     */
    private function reconcileOffer(
        Offer $offer,
        UserSetting $settings,
        array $deployConfig,
        bool $canProbeServer,
        bool $apply,
    ): array {
        $manifest = $this->readManifest($offer->folder);
        $onServer = false;
        $remotePath = $offer->remote_path;
        $marker = null;
        $liveHttp = $this->probeHttp($offer->domain, $offer->brand);

        if ($canProbeServer) {
            $probe = $this->deploy->probeRemote($deployConfig, $offer->domain);
            $onServer = $probe['deployed'];
            $remotePath = $probe['path'];
            $marker = $probe['marker'];
        }

        if (! $onServer && ($manifest['status'] ?? '') === 'deployed') {
            $onServer = true;
            $remotePath = $manifest['remote_path'] ?? $remotePath;
        }

        if (! $onServer && $liveHttp) {
            $onServer = true;
        }

        $keitaroId = $offer->keitaro_campaign_id ?: ($manifest['keitaro_campaign_id'] ?? null);
        $keitaroAlias = $offer->keitaro_alias ?: ($manifest['keitaro_alias'] ?? null);
        $inKeitaro = $keitaroId ? $this->keitaro->campaignExists($settings, (int) $keitaroId) : false;

        if (! $keitaroId) {
            $keitaroId = $this->parseKeitaroIdFromConfig($offer->folder);
            if ($keitaroId) {
                $inKeitaro = $this->keitaro->campaignExists($settings, (int) $keitaroId);
            }
        }

        $newStatus = $onServer ? 'deployed' : $offer->status;
        $wasStatus = $offer->status;
        $changed = false;
        $wouldChange = $onServer && $offer->status !== 'deployed';
        $wouldChange = $wouldChange
            || ($keitaroId && ! $offer->keitaro_campaign_id)
            || ($keitaroAlias && ! $offer->keitaro_alias);

        if ($apply) {
            $updates = [];

            if ($keitaroId && ! $offer->keitaro_campaign_id) {
                $updates['keitaro_campaign_id'] = (int) $keitaroId;
                $changed = true;
            }

            if ($keitaroAlias && ! $offer->keitaro_alias) {
                $updates['keitaro_alias'] = $keitaroAlias;
                $changed = true;
            }

            if ($onServer && $offer->status !== 'deployed') {
                $updates['status'] = 'deployed';
                $updates['deploy_panel_name'] = $settings->deploy_panel_name ?? 'Hestia';
                $updates['remote_path'] = $remotePath;
                $updates['deployed_at'] = $offer->deployed_at ?? now();
                $updates['deploy_error'] = null;
                $changed = true;
            }

            if ($updates !== []) {
                $offer->update($updates);
                $this->updateManifest($offer->folder, $offer->fresh(), $settings, $remotePath, $onServer);
            }
        }

        return [
            'id' => $offer->id,
            'domain' => $offer->domain,
            'brand' => $offer->brand,
            'was_status' => $wasStatus,
            'new_status' => $newStatus,
            'on_server' => $onServer,
            'server_marker' => $marker,
            'live_http' => $liveHttp,
            'keitaro_id' => $keitaroId,
            'in_keitaro' => $inKeitaro,
            'changed' => $apply ? $changed : $wouldChange,
        ];
    }

    /**
     * @return array{host: string, port: int, username: string, password: string, path_template: string|null}
     */
    private function deployConfig(UserSetting $settings): array
    {
        return [
            'host' => (string) $settings->deploy_host,
            'port' => (int) ($settings->deploy_port ?? 22),
            'username' => (string) $settings->deploy_username,
            'password' => (string) $settings->deploy_password,
            'path_template' => $settings->deploy_path_template,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function readManifest(string $folder): array
    {
        $path = rtrim($this->offersPath, DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR.$folder.'/manifest.json';

        if (! File::exists($path)) {
            return [];
        }

        $decoded = json_decode(File::get($path), true);

        return is_array($decoded) ? $decoded : [];
    }

    private function parseKeitaroIdFromConfig(string $folder): ?int
    {
        $path = rtrim($this->offersPath, DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR.$folder.'/includes/config.php';

        if (! File::exists($path)) {
            return null;
        }

        if (preg_match('/кампанія\s*#(\d+)/u', File::get($path), $matches)) {
            return (int) $matches[1];
        }

        return null;
    }

    private function probeHttp(string $domain, string $brand): bool
    {
        try {
            $response = Http::timeout(12)
                ->withOptions(['verify' => false])
                ->get('https://'.strtolower($domain).'/');

            if (! $response->successful()) {
                return false;
            }

            $body = $response->body();

            return str_contains($body, $brand) || str_contains($body, 'integration/default-integration.css');
        } catch (\Throwable) {
            return false;
        }
    }

    private function updateManifest(
        string $folder,
        Offer $offer,
        UserSetting $settings,
        ?string $remotePath,
        bool $onServer,
    ): void {
        $path = rtrim($this->offersPath, DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR.$folder.'/manifest.json';
        $manifest = $this->readManifest($folder);

        if ($onServer) {
            $manifest = array_merge($manifest, [
                'status' => 'deployed',
                'deploy_panel' => $settings->deploy_panel_name ?? 'Hestia',
                'deploy_host' => $settings->deploy_host,
                'remote_path' => $remotePath,
                'deployed_at' => ($offer->deployed_at ?? now())->toIso8601String(),
            ]);
        }

        if ($offer->keitaro_campaign_id) {
            $manifest['keitaro_campaign_id'] = $offer->keitaro_campaign_id;
        }

        if ($offer->keitaro_alias) {
            $manifest['keitaro_alias'] = $offer->keitaro_alias;
        }

        File::put(
            $path,
            json_encode($manifest, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)."\n",
        );
    }
}
