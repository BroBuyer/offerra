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

            if (! InfrastructureOptions::needsDnsWait($options) || $this->dnsLooksReady(
                $domain,
                $this->hestia->serverIp($settings),
                is_array($meta['nameservers'] ?? null) ? $meta['nameservers'] : [],
            )) {
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

        // Спочатку лише перевірка DNS/HTTPS — без повторного проходження Cloudflare/Dynadot.
        // Інакше тимчасові таймаути API тримають статус «Очікується DNS», хоча сайт уже живий.
        if (! InfrastructureOptions::needsDnsWait($options)) {
            $meta['dns'] = $meta['dns'] ?? 'skipped';
            unset($meta['dns_error']);
            $offer->update([
                'infra_status' => 'ready',
                'infra_error' => null,
                'infra_meta' => $meta,
            ]);

            return;
        }

        $expectedNs = is_array($meta['nameservers'] ?? null) ? $meta['nameservers'] : [];

        if ($this->dnsLooksReady($domain, $serverIp, $expectedNs)) {
            $meta['dns'] = 'done';
            unset($meta['dns_error']);
            $offer->update([
                'infra_status' => 'ready',
                'infra_error' => null,
                'infra_meta' => $meta,
            ]);

            return;
        }

        try {
            $this->runSteps($settings, $domain, $options, $meta);
            $expectedNs = is_array($meta['nameservers'] ?? null) ? $meta['nameservers'] : $expectedNs;
        } catch (\Throwable $e) {
            $meta['dns_error'] = $e->getMessage();

            // Якщо DNS уже реально встав — не блокуємо статус через збій повторного provision.
            if ($this->dnsLooksReady($domain, $serverIp, $expectedNs)) {
                $meta['dns'] = 'done';
                unset($meta['dns_error']);
                $offer->update([
                    'infra_status' => 'ready',
                    'infra_error' => null,
                    'infra_meta' => $meta,
                ]);

                return;
            }

            $offer->update([
                'infra_status' => 'ready',
                'infra_error' => null,
                'infra_meta' => array_merge($meta, ['dns' => 'pending']),
            ]);

            return;
        }

        if (! $this->dnsLooksReady($domain, $serverIp, $expectedNs)) {
            unset($meta['dns_error']);
            $offer->update([
                'infra_status' => 'ready',
                'infra_error' => null,
                'infra_meta' => array_merge($meta, ['dns' => 'pending']),
            ]);

            return;
        }

        $meta['dns'] = 'done';
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

    /**
     * Fact-based DNS readiness: public NS must match Cloudflare (when known),
     * and A must point at the origin or a Cloudflare proxy IP.
     * Dynadot parking responses must never count as "ready".
     *
     * @param  list<string>  $expectedNameservers
     */
    private function dnsLooksReady(string $domain, string $serverIp, array $expectedNameservers = []): bool
    {
        $expectedNameservers = array_values(array_unique(array_filter(array_map(
            static fn ($ns) => strtolower(rtrim(trim((string) $ns), '.')),
            $expectedNameservers,
        ))));

        if ($expectedNameservers !== []) {
            $liveNs = $this->resolveNameservers($domain);
            if ($liveNs === []) {
                return false;
            }

            $liveSet = array_fill_keys($liveNs, true);
            $matched = 0;
            foreach ($expectedNameservers as $ns) {
                if (isset($liveSet[$ns])) {
                    $matched++;
                }
            }

            // Need the Cloudflare NS set to be visible publicly (usually 2).
            if ($matched < min(2, count($expectedNameservers))) {
                return false;
            }
        }

        return $this->aRecordPointsToTarget($domain, $serverIp);
    }

    /**
     * @return list<string>
     */
    private function resolveNameservers(string $domain): array
    {
        $records = @dns_get_record($domain, DNS_NS);
        if (! is_array($records) || $records === []) {
            return [];
        }

        $out = [];
        foreach ($records as $record) {
            $ns = strtolower(rtrim(trim((string) ($record['target'] ?? '')), '.'));
            if ($ns !== '') {
                $out[] = $ns;
            }
        }

        return array_values(array_unique($out));
    }

    private function aRecordPointsToTarget(string $domain, string $serverIp): bool
    {
        $records = @dns_get_record($domain, DNS_A);
        if (! is_array($records) || $records === []) {
            return false;
        }

        foreach ($records as $record) {
            $ip = (string) ($record['ip'] ?? '');
            if ($ip === '' || $this->isLikelyParkingIp($ip)) {
                continue;
            }

            if ($ip === $serverIp || $this->isCloudflareProxyIp($ip)) {
                return true;
            }
        }

        return false;
    }

    private function isLikelyParkingIp(string $ip): bool
    {
        // Common Dynadot / Sedo / aftermarket parking anycast ranges we have seen.
        return str_starts_with($ip, '185.53.')
            || str_starts_with($ip, '207.244.')
            || str_starts_with($ip, '173.236.');
    }

    private function isCloudflareProxyIp(string $ip): bool
    {
        // Типові anycast CF (proxied orange cloud); точний список не потрібен —
        // достатньо відрізнити від «DNS ще не встав» / NXDOMAIN.
        return str_starts_with($ip, '104.')
            || str_starts_with($ip, '172.64.')
            || str_starts_with($ip, '172.65.')
            || str_starts_with($ip, '172.66.')
            || str_starts_with($ip, '172.67.')
            || str_starts_with($ip, '188.114.');
    }

    private function siteResponds(string $domain): bool
    {
        try {
            // Не ходимо по redirect loop — дивимось першу відповідь.
            $response = Http::timeout(12)
                ->withOptions([
                    'verify' => false,
                    'allow_redirects' => false,
                ])
                ->get('https://'.$domain.'/');

            $status = $response->status();
            $location = strtolower((string) $response->header('Location'));

            // HTTPS → HTTP разом із Always Use HTTPS = ERR_TOO_MANY_REDIRECTS.
            if (str_starts_with($location, 'http://')) {
                return false;
            }

            // Самопереадресація на той самий HTTPS URL — теж loop.
            $self = 'https://'.strtolower($domain);
            if ($status >= 300 && $status < 400 && rtrim($location, '/') === rtrim($self, '/')) {
                return false;
            }

            // 4xx (incl. Dynadot parking 410 Gone) must not count as live.
            return $status >= 200 && $status < 400;
        } catch (\Throwable) {
            return false;
        }
    }
}
