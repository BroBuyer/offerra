<?php

namespace App\Services;

use App\Jobs\ProvisionInfrastructureJob;
use App\Models\Offer;
use App\Models\UserSetting;
use App\Support\InfrastructureOptions;
use Illuminate\Support\Facades\Http;

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
            && self::hestiaApiReady($settings)
            && filled($settings->cloudflare_api_token)
            && filled($settings->cloudflare_account_id)
            && filled($settings->dynadot_api_key);
    }

    public static function hestiaApiReady(?UserSetting $settings): bool
    {
        if ($settings === null) {
            return false;
        }

        if (filled($settings->deploy_api_access_key) && filled($settings->deploy_api_secret_key)) {
            return true;
        }

        return filled($settings->deploy_password);
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
        $options = InfrastructureOptions::forOffer($offer);

        if (! $settings || ! self::settingsReady($settings)) {
            $offer->update([
                'infra_status' => 'failed',
                'infra_error' => 'Заповніть Hestia, Cloudflare і Dynadot у налаштуваннях.',
            ]);

            return;
        }

        if (! InfrastructureOptions::anyEnabled($options)) {
            $offer->update([
                'infra_status' => null,
                'infra_error' => null,
            ]);

            return;
        }

        $domain = strtolower(trim($offer->domain));
        $meta = array_merge($offer->infra_meta ?? [], ['options' => $options]);

        $offer->update([
            'infra_status' => 'provisioning',
            'infra_error' => null,
        ]);

        try {
            $this->runSteps($settings, $domain, $options, $meta);

            if (! InfrastructureOptions::needsDnsWait($options) || $this->dnsLooksReady($domain, $this->hestia->serverIp($settings))) {
                $meta['dns'] = InfrastructureOptions::needsDnsWait($options) ? 'done' : 'skipped';
                unset($meta['dns_error']);
            } else {
                $meta['dns'] = 'pending';
                unset($meta['dns_error']);
            }

            $offer->update([
                'infra_status' => 'ready',
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

        $options = InfrastructureOptions::forOffer($offer);
        $meta = array_merge($offer->infra_meta ?? [], ['options' => $options]);
        $domain = strtolower(trim($offer->domain));
        $serverIp = $this->hestia->serverIp($settings);

        try {
            $this->runSteps($settings, $domain, $options, $meta);
        } catch (\Throwable $e) {
            $meta['dns_error'] = $e->getMessage();

            $offer->update([
                'infra_status' => 'ready',
                'infra_error' => null,
                'infra_meta' => array_merge($meta, ['dns' => 'pending']),
            ]);

            return;
        }

        if (InfrastructureOptions::needsDnsWait($options) && ! $this->dnsLooksReady($domain, $serverIp)) {
            unset($meta['dns_error']);
            $offer->update([
                'infra_status' => 'ready',
                'infra_error' => null,
                'infra_meta' => array_merge($meta, ['dns' => 'pending']),
            ]);

            return;
        }

        $meta['dns'] = InfrastructureOptions::needsDnsWait($options) ? 'done' : ($meta['dns'] ?? 'skipped');
        unset($meta['dns_error']);

        $offer->update([
            'infra_status' => 'ready',
            'infra_error' => null,
            'infra_meta' => $meta,
        ]);
    }

    /**
     * @param  array<string, bool>  $options
     * @param  array<string, mixed>  $meta
     */
    private function runSteps(UserSetting $settings, string $domain, array $options, array &$meta): void
    {
        if ($options['hestia'] ?? false) {
            $this->hestia->addWebDomain($settings, $domain);
            $meta['hestia'] = 'done';
        }

        $zoneId = (string) ($meta['cloudflare_zone_id'] ?? '');
        $nameservers = is_array($meta['nameservers'] ?? null) ? $meta['nameservers'] : [];

        if (InfrastructureOptions::needsCloudflareZone($options)) {
            if ($options['cloudflare_zone'] ?? false) {
                $zone = $this->cloudflare->ensureZone($settings, $domain);
                $zoneId = $zone['zone_id'];
                $nameservers = $zone['nameservers'];
                $meta['cloudflare'] = 'done';
                $meta['cloudflare_zone_id'] = $zoneId;
                $meta['nameservers'] = $nameservers;
            } elseif ($zoneId === '') {
                $zone = $this->cloudflare->findZone($settings, $domain);

                if ($zone !== null) {
                    $zoneId = $zone['zone_id'];
                    $nameservers = $zone['nameservers'];
                    $meta['cloudflare_zone_id'] = $zoneId;
                    $meta['nameservers'] = $nameservers;
                }
            }
        }

        $serverIp = $this->hestia->serverIp($settings);

        if (($options['cloudflare_dns'] ?? false) && $zoneId !== '') {
            $this->cloudflare->ensureRootARecord($settings, $zoneId, $domain, $serverIp);
            $meta['cloudflare_dns'] = 'done';
            $meta['cloudflare_www_dns'] = 'done';
        }

        if (InfrastructureOptions::needsCloudflareEdge($options) && $zoneId !== '') {
            $this->applyCloudflareEdge($settings, $domain, $zoneId, $options, $meta);
        }

        if (($options['dynadot_ns'] ?? false) && $nameservers !== []) {
            $this->dynadot->setNameservers($settings, $domain, $nameservers);
            $meta['dynadot_ns'] = 'done';
        }
    }

    /**
     * @param  array<string, bool>  $options
     * @param  array<string, mixed>  $meta
     */
    private function applyCloudflareEdge(
        UserSetting $settings,
        string $domain,
        string $zoneId,
        array $options,
        array &$meta,
    ): void {
        $this->cloudflare->configureEdgeSecurity($settings, $zoneId, $domain, $options);

        $meta['cloudflare_edge'] = 'done';

        if ($options['cloudflare_ssl'] ?? false) {
            $meta['ssl'] = 'done';
        }

        if ($options['cloudflare_https'] ?? false) {
            $meta['ssl_force'] = 'done';
        }

        if ($options['cloudflare_www_redirect'] ?? false) {
            $meta['www_redirect'] = 'done';
        }

        $meta['ssl_hsts'] = 'skipped';
    }

    private function dnsLooksReady(string $domain, string $serverIp): bool
    {
        $records = @dns_get_record($domain, DNS_A);
        $hasRecords = is_array($records) && $records !== [];

        if ($hasRecords) {
            foreach ($records as $record) {
                if (($record['ip'] ?? '') === $serverIp) {
                    return true;
                }
            }

            return $this->siteResponds($domain);
        }

        return $this->siteResponds($domain);
    }

    private function siteResponds(string $domain): bool
    {
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
