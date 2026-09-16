<?php

namespace App\Services;

use App\Models\Offer;
use Illuminate\Http\Client\Pool;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OfferAvailabilityProbe
{
    private const TIMEOUT_SECONDS = 8;

    private const FAIL_STREAK_TO_DOWN = 2;

    /** @var list<int> */
    private const CF_EDGE_ERRORS = [521, 522, 523, 525, 526];

    /**
     * Probe a single offer and persist availability fields.
     *
     * @param  bool  $immediate  When true (manual UI check), mark down on first failure instead of soft-fail streak.
     * @return array{status: string, error: ?string, changed: bool}
     */
    public function checkAndUpdate(Offer $offer, bool $immediate = false): array
    {
        $result = $this->probeDomain((string) $offer->domain);

        return $this->applyResult($offer, $result['ok'], $result['error'], $immediate);
    }

    /**
     * @param  list<Offer>  $offers
     * @return array{ok: int, down: int, soft_fail: int}
     */
    public function checkAndUpdateMany(array $offers): array
    {
        $counts = ['ok' => 0, 'down' => 0, 'soft_fail' => 0];
        if ($offers === []) {
            return $counts;
        }

        $results = $this->probeDomains(array_map(
            static fn (Offer $offer) => (string) $offer->domain,
            $offers,
        ));

        foreach ($offers as $offer) {
            $domain = strtolower(trim((string) $offer->domain));
            $probe = $results[$domain] ?? ['ok' => false, 'error' => 'Probe missing'];
            $applied = $this->applyResult($offer, $probe['ok'], $probe['error']);

            if ($applied['status'] === 'ok') {
                $counts['ok']++;
            } elseif ($applied['status'] === 'down') {
                $counts['down']++;
            } else {
                $counts['soft_fail']++;
            }
        }

        return $counts;
    }

    /**
     * @return array{ok: bool, error: ?string}
     */
    public function probeDomain(string $domain): array
    {
        $domain = $this->normalizeDomain($domain);
        if ($domain === '') {
            return ['ok' => false, 'error' => 'Empty domain'];
        }

        $aRecords = $this->lookupARecords($domain);
        if ($aRecords === []) {
            $ns = $this->lookupNsRecords($domain);
            if ($ns === []) {
                return ['ok' => false, 'error' => 'NXDOMAIN / no public DNS'];
            }

            return ['ok' => false, 'error' => 'No A record (NS: '.implode(', ', array_slice($ns, 0, 2)).')'];
        }

        return $this->httpProbe($domain);
    }

    /**
     * @param  list<string>  $domains
     * @return array<string, array{ok: bool, error: ?string}>
     */
    public function probeDomains(array $domains): array
    {
        $normalized = [];
        foreach ($domains as $domain) {
            $host = $this->normalizeDomain($domain);
            if ($host !== '') {
                $normalized[$host] = true;
            }
        }

        $hosts = array_keys($normalized);
        $out = [];

        foreach ($hosts as $host) {
            $aRecords = $this->lookupARecords($host);
            if ($aRecords === []) {
                $ns = $this->lookupNsRecords($host);
                $out[$host] = [
                    'ok' => false,
                    'error' => $ns === []
                        ? 'NXDOMAIN / no public DNS'
                        : 'No A record (NS: '.implode(', ', array_slice($ns, 0, 2)).')',
                ];
            }
        }

        $httpHosts = array_values(array_filter(
            $hosts,
            static fn (string $host) => ! isset($out[$host]),
        ));

        foreach (array_chunk($httpHosts, 25) as $chunk) {
            try {
                $responses = Http::pool(function (Pool $pool) use ($chunk) {
                    foreach ($chunk as $host) {
                        $pool->as($host)
                            ->timeout(self::TIMEOUT_SECONDS)
                            ->connectTimeout(5)
                            ->withHeaders($this->browserHeaders())
                            ->withOptions([
                                'verify' => true,
                                'allow_redirects' => true,
                                'http_errors' => false,
                            ])
                            ->head('https://'.$host.'/');
                    }
                });
            } catch (\Throwable $e) {
                Log::warning('Offer availability pool failed', ['error' => $e->getMessage()]);
                foreach ($chunk as $host) {
                    $out[$host] = $this->httpProbe($host);
                }

                continue;
            }

            foreach ($chunk as $host) {
                $response = $responses[$host] ?? null;
                if ($response instanceof \Throwable) {
                    $out[$host] = ['ok' => false, 'error' => $this->shortConnectError($response->getMessage())];

                    continue;
                }

                if (! $response instanceof Response) {
                    // HEAD may have thrown; fall back to GET for this host.
                    $out[$host] = $this->httpProbe($host);

                    continue;
                }

                $classified = $this->classifyHttpResponse($host, $response, usedHead: true);
                if ($classified['retry_get'] ?? false) {
                    $out[$host] = $this->httpProbe($host, forceGet: true);
                } else {
                    $out[$host] = [
                        'ok' => $classified['ok'],
                        'error' => $classified['error'],
                    ];
                }
            }
        }

        return $out;
    }

    /**
     * @return array{status: string, error: ?string, changed: bool}
     */
    private function applyResult(Offer $offer, bool $ok, ?string $error, bool $immediate = false): array
    {
        $previous = (string) ($offer->availability_status ?: 'unchecked');
        $streak = (int) ($offer->availability_fail_streak ?? 0);

        if ($ok) {
            $nextStatus = 'ok';
            $streak = 0;
            $error = null;
        } else {
            $streak++;
            if ($immediate || $streak >= self::FAIL_STREAK_TO_DOWN || $previous === 'down') {
                $nextStatus = 'down';
            } elseif ($previous === 'ok') {
                // Soft fail: keep green until second consecutive failure.
                $nextStatus = 'ok';
            } else {
                $nextStatus = 'unchecked';
            }
        }

        $offer->forceFill([
            'availability_status' => $nextStatus,
            'availability_checked_at' => now(),
            'availability_error' => $error !== null ? substr($error, 0, 400) : null,
            'availability_fail_streak' => min($streak, 255),
        ])->save();

        if ($nextStatus === 'ok') {
            try {
                app(OfferGscSubmitter::class)->queue($offer->fresh() ?? $offer, 5);
            } catch (\Throwable $e) {
                Log::info('Auto GSC queue after availability skipped', [
                    'offer' => $offer->id,
                    'reason' => $e->getMessage(),
                ]);
            }
        }

        return [
            'status' => $nextStatus,
            'error' => $error,
            'changed' => $previous !== $nextStatus,
        ];
    }

    /**
     * @return array{ok: bool, error: ?string}
     */
    private function httpProbe(string $domain, bool $forceGet = false): array
    {
        try {
            $request = Http::timeout(self::TIMEOUT_SECONDS)
                ->connectTimeout(5)
                ->withHeaders($this->browserHeaders())
                ->withOptions([
                    'verify' => true,
                    'allow_redirects' => true,
                    'http_errors' => false,
                ]);

            $response = $forceGet
                ? $request->get('https://'.$domain.'/')
                : $request->head('https://'.$domain.'/');
        } catch (\Throwable $e) {
            if (! $forceGet) {
                return $this->httpProbe($domain, forceGet: true);
            }

            return ['ok' => false, 'error' => $this->shortConnectError($e->getMessage())];
        }

        $classified = $this->classifyHttpResponse($domain, $response, usedHead: ! $forceGet);
        if (($classified['retry_get'] ?? false) && ! $forceGet) {
            return $this->httpProbe($domain, forceGet: true);
        }

        return [
            'ok' => $classified['ok'],
            'error' => $classified['error'],
        ];
    }

    /**
     * @return array{ok: bool, error: ?string, retry_get?: bool}
     */
    private function classifyHttpResponse(string $domain, Response $response, bool $usedHead): array
    {
        $status = $response->status();

        if (in_array($status, self::CF_EDGE_ERRORS, true)) {
            return ['ok' => false, 'error' => 'Cloudflare HTTP '.$status];
        }

        if ($status >= 500) {
            return ['ok' => false, 'error' => 'HTTP '.$status];
        }

        // Some origins reject HEAD — retry with GET.
        if ($usedHead && in_array($status, [405, 501], true)) {
            return ['ok' => false, 'error' => 'HEAD not allowed', 'retry_get' => true];
        }

        if ($status >= 200 && $status < 400) {
            if ($this->looksLikeParking($response)) {
                return ['ok' => false, 'error' => 'Parking / for-sale page'];
            }

            return ['ok' => true, 'error' => null];
        }

        // 403/401 from CF WAF can still mean the domain resolves; treat as down for traffic.
        if ($status === 403 || $status === 401) {
            return ['ok' => false, 'error' => 'HTTP '.$status];
        }

        if ($status === 404) {
            return ['ok' => false, 'error' => 'HTTP 404'];
        }

        if ($status === 0 || $status >= 400) {
            return ['ok' => false, 'error' => 'HTTP '.$status];
        }

        return ['ok' => false, 'error' => 'Unexpected HTTP '.$status];
    }

    private function looksLikeParking(Response $response): bool
    {
        $body = strtolower((string) $response->body());
        if ($body === '') {
            return false;
        }

        return str_contains($body, 'domain is for sale')
            || str_contains($body, 'this domain is for sale')
            || str_contains($body, 'buy this domain')
            || str_contains($body, 'parked domain')
            || str_contains($body, 'sedo.com')
            || str_contains($body, 'dynadot parking');
    }

    /**
     * @return array<string, string>
     */
    private function browserHeaders(): array
    {
        return [
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36',
            'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
            'Accept-Language' => 'en-US,en;q=0.9',
        ];
    }

    private function normalizeDomain(string $domain): string
    {
        $domain = strtolower(trim($domain));
        $domain = preg_replace('#^https?://#', '', $domain) ?? $domain;
        $domain = explode('/', $domain)[0] ?? $domain;
        $domain = explode(':', $domain)[0] ?? $domain;

        return rtrim($domain, '.');
    }

    /**
     * @return list<string>
     */
    private function lookupARecords(string $domain): array
    {
        $records = @dns_get_record($domain, DNS_A);
        if (! is_array($records)) {
            return [];
        }

        $ips = [];
        foreach ($records as $record) {
            $ip = trim((string) ($record['ip'] ?? ''));
            if ($ip !== '' && filter_var($ip, FILTER_VALIDATE_IP)) {
                $ips[] = $ip;
            }
        }

        return array_values(array_unique($ips));
    }

    /**
     * @return list<string>
     */
    private function lookupNsRecords(string $domain): array
    {
        $records = @dns_get_record($domain, DNS_NS);
        if (! is_array($records)) {
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

    private function shortConnectError(string $message): string
    {
        $message = trim(preg_replace('/\s+/', ' ', $message) ?? $message);
        if (stripos($message, 'Could not resolve') !== false || stripos($message, 'getaddrinfo') !== false) {
            return 'DNS resolve failed';
        }
        if (stripos($message, 'timed out') !== false || stripos($message, 'timeout') !== false) {
            return 'Timeout';
        }
        if (stripos($message, 'SSL') !== false || stripos($message, 'certificate') !== false) {
            return 'TLS/SSL error';
        }

        return substr($message, 0, 160);
    }
}
