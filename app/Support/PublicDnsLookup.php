<?php

namespace App\Support;

use Illuminate\Support\Facades\Http;

/**
 * What the public internet sees — not the panel's recursive cache.
 *
 * php dns_get_record() uses glibc / systemd-resolved. After a restore the
 * new Cloudflare zone gets a new NS pair, but that stub can keep the old
 * pair until TTL dies. Asking 1.1.1.1 / 8.8.8.8 matches the spinner to
 * "is it registered globally".
 */
class PublicDnsLookup
{
    /** @var list<string> */
    private const ENDPOINTS = [
        'https://cloudflare-dns.com/dns-query',
        'https://dns.google/resolve',
    ];

    /**
     * @return list<string>
     */
    public function nameservers(string $domain): array
    {
        $fromPublic = $this->queryPublic($domain, 'NS');
        if ($fromPublic !== null) {
            return $this->normalizeNs($fromPublic);
        }

        return $this->localNs($domain);
    }

    /**
     * @return list<string>
     */
    public function aRecords(string $domain): array
    {
        $fromPublic = $this->queryPublic($domain, 'A');
        if ($fromPublic !== null) {
            return $this->normalizeA($fromPublic);
        }

        return $this->localA($domain);
    }

    /**
     * @return list<string>|null null = transport failure, try the local stub
     */
    private function queryPublic(string $domain, string $type): ?array
    {
        $domain = strtolower(trim($domain));
        if ($domain === '') {
            return [];
        }

        foreach (self::ENDPOINTS as $url) {
            try {
                $response = Http::timeout(4)
                    ->accept('application/dns-json')
                    ->get($url, [
                        'name' => $domain,
                        'type' => $type,
                    ]);

                if (! $response->successful()) {
                    continue;
                }

                $json = $response->json();
                if (! is_array($json) || ! isset($json['Status'])) {
                    continue;
                }

                $status = (int) $json['Status'];
                // 0 NOERROR, 3 NXDOMAIN — both are answers. Do not fall
                // back to a stale local cache after a public NXDOMAIN.
                if ($status !== 0 && $status !== 3) {
                    continue;
                }

                $answers = $json['Answer'] ?? [];
                if (! is_array($answers)) {
                    return [];
                }

                $out = [];
                foreach ($answers as $row) {
                    if (! is_array($row)) {
                        continue;
                    }
                    $data = trim((string) ($row['data'] ?? ''));
                    if ($data !== '') {
                        $out[] = $data;
                    }
                }

                return $out;
            } catch (\Throwable) {
                continue;
            }
        }

        return null;
    }

    /**
     * @param  list<string>  $raw
     * @return list<string>
     */
    private function normalizeNs(array $raw): array
    {
        $out = [];
        foreach ($raw as $value) {
            $ns = strtolower(rtrim(trim((string) $value), '.'));
            if ($ns !== '') {
                $out[] = $ns;
            }
        }

        return array_values(array_unique($out));
    }

    /**
     * @param  list<string>  $raw
     * @return list<string>
     */
    private function normalizeA(array $raw): array
    {
        $out = [];
        foreach ($raw as $value) {
            $ip = trim((string) $value);
            if ($ip !== '' && filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
                $out[] = $ip;
            }
        }

        return array_values(array_unique($out));
    }

    /**
     * @return list<string>
     */
    private function localNs(string $domain): array
    {
        $records = @dns_get_record($domain, DNS_NS);
        if (! is_array($records) || $records === []) {
            return [];
        }

        return $this->normalizeNs(array_map(
            static fn (array $record) => (string) ($record['target'] ?? ''),
            $records,
        ));
    }

    /**
     * @return list<string>
     */
    private function localA(string $domain): array
    {
        $records = @dns_get_record($domain, DNS_A);
        if (! is_array($records) || $records === []) {
            return [];
        }

        return $this->normalizeA(array_map(
            static fn (array $record) => (string) ($record['ip'] ?? ''),
            $records,
        ));
    }
}
