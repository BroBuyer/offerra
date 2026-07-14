<?php

namespace App\Services;

use App\Jobs\ProvisionInfrastructureJob;
use App\Models\Offer;
use App\Models\UserSetting;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use RuntimeException;

class InfrastructureProvisioner
{
    public function __construct(
        private readonly HestiaClient $hestia,
        private readonly CloudflareClient $cloudflare,
        private readonly DynadotClient $dynadot,
    ) {}

    public static function settingsReady(?UserSetting $settings): bool
    {
        if ($settings === null) {
            return false;
        }

        return filled($settings->deploy_host)
            && filled($settings->deploy_username)
            && filled($settings->deploy_password)
            && filled($settings->cloudflare_api_token)
            && filled($settings->cloudflare_account_id)
            && filled($settings->dynadot_api_key);
    }

    public function enqueue(Offer $offer): void
    {
        if (! $offer->provision_infrastructure) {
            return;
        }

        if (in_array($offer->infra_status, ['provisioning', 'ready'], true)) {
            return;
        }

        $offer->update([
            'infra_status' => 'pending',
            'infra_error' => null,
        ]);

        ProvisionInfrastructureJob::dispatch($offer->id)->afterResponse();
    }

    public function provision(Offer $offer): void
    {
        $offer->loadMissing('user.settings');
        $settings = $offer->user?->settings;

        if (! $settings || ! self::settingsReady($settings)) {
            $offer->update([
                'infra_status' => 'failed',
                'infra_error' => 'Заповніть Hestia, Cloudflare і Dynadot у налаштуваннях.',
            ]);

            return;
        }

        $domain = strtolower(trim($offer->domain));
        $meta = $offer->infra_meta ?? [];

        $offer->update([
            'infra_status' => 'provisioning',
            'infra_error' => null,
        ]);

        try {
            $this->hestia->addWebDomain($settings, $domain);
            $meta['hestia'] = 'done';

            $zone = $this->cloudflare->ensureZone($settings, $domain);
            $meta['cloudflare'] = 'done';
            $meta['cloudflare_zone_id'] = $zone['zone_id'];
            $meta['nameservers'] = $zone['nameservers'];

            $serverIp = $this->hestia->serverIp($settings);
            $this->cloudflare->ensureRootARecord($settings, $zone['zone_id'], $domain, $serverIp);
            $meta['cloudflare_dns'] = 'done';

            if ($zone['nameservers'] !== []) {
                $this->dynadot->setNameservers($settings, $domain, $zone['nameservers']);
                $meta['dynadot_ns'] = 'done';
            } else {
                $meta['dynadot_ns'] = 'skipped';
            }

            $dnsReady = $this->dnsLooksReady($domain, $serverIp);

            if ($dnsReady) {
                $meta['dns'] = 'done';

                try {
                    $this->hestia->issueLetsEncrypt($settings, $domain);
                    $meta['ssl'] = 'done';
                } catch (\Throwable $e) {
                    $meta['ssl'] = 'pending';
                    Log::warning('SSL not ready yet', ['domain' => $domain, 'error' => $e->getMessage()]);
                }

                $offer->update([
                    'infra_status' => 'ready',
                    'infra_error' => null,
                    'infra_meta' => $meta,
                ]);

                return;
            }

            $meta['dns'] = 'pending';
            $meta['ssl'] = 'pending';

            $offer->update([
                'infra_status' => 'dns_propagating',
                'infra_error' => null,
                'infra_meta' => $meta,
            ]);
        } catch (\Throwable $e) {
            $offer->update([
                'infra_status' => 'failed',
                'infra_error' => $e->getMessage(),
                'infra_meta' => $meta,
            ]);

            throw $e;
        }
    }

    public function recheckDns(Offer $offer): void
    {
        $offer->loadMissing('user.settings');
        $settings = $offer->user?->settings;

        if (! $settings) {
            return;
        }

        $meta = $offer->infra_meta ?? [];
        $domain = strtolower(trim($offer->domain));
        $serverIp = $this->hestia->serverIp($settings);

        if (! $this->dnsLooksReady($domain, $serverIp)) {
            $offer->update([
                'infra_status' => 'dns_propagating',
                'infra_error' => null,
                'infra_meta' => array_merge($meta, ['dns' => 'pending']),
            ]);

            return;
        }

        $meta['dns'] = 'done';

        try {
            if (($meta['ssl'] ?? '') !== 'done') {
                $this->hestia->issueLetsEncrypt($settings, $domain);
                $meta['ssl'] = 'done';
            }
        } catch (\Throwable $e) {
            $meta['ssl'] = 'pending';
            $offer->update([
                'infra_status' => 'dns_propagating',
                'infra_error' => 'DNS готовий, SSL ще не видано: '.$e->getMessage(),
                'infra_meta' => $meta,
            ]);

            return;
        }

        $offer->update([
            'infra_status' => 'ready',
            'infra_error' => null,
            'infra_meta' => $meta,
        ]);
    }

    private function dnsLooksReady(string $domain, string $serverIp): bool
    {
        $records = @dns_get_record($domain, DNS_A);

        if (is_array($records)) {
            foreach ($records as $record) {
                if (($record['ip'] ?? '') === $serverIp) {
                    return true;
                }
            }
        }

        try {
            $response = Http::timeout(12)
                ->withOptions(['verify' => false])
                ->get('https://'.$domain.'/');

            return $response->status() > 0;
        } catch (\Throwable) {
            return false;
        }
    }
}
