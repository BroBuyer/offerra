<?php

namespace App\Support;

/**
 * Public DNS is "ready" when the name is on Cloudflare (or the exact
 * expected pair), not when the panel cache has caught up to a new zone.
 */
final class InfrastructureDnsReadiness
{
    /**
     * @param  list<string>  $liveNs
     * @param  list<string>  $expectedNs
     */
    public static function nameserversAcceptable(array $liveNs, array $expectedNs): bool
    {
        $live = self::normalize($liveNs);
        $expected = self::normalize($expectedNs);

        if ($expected === []) {
            return true;
        }

        if ($live === []) {
            return false;
        }

        $liveSet = array_fill_keys($live, true);
        $matched = 0;
        foreach ($expected as $ns) {
            if (isset($liveSet[$ns])) {
                $matched++;
            }
        }

        if ($matched >= min(2, count($expected))) {
            return true;
        }

        $cloudflare = array_values(array_filter($live, self::isCloudflareNameserver(...)));

        return $cloudflare !== [] && count($cloudflare) >= min(2, count($live));
    }

    public static function isCloudflareNameserver(string $ns): bool
    {
        $ns = strtolower(rtrim(trim($ns), '.'));

        return str_ends_with($ns, '.ns.cloudflare.com');
    }

    /**
     * @param  list<string>  $hosts
     * @return list<string>
     */
    private static function normalize(array $hosts): array
    {
        $out = [];
        foreach ($hosts as $host) {
            $ns = strtolower(rtrim(trim((string) $host), '.'));
            if ($ns !== '') {
                $out[] = $ns;
            }
        }

        return array_values(array_unique($out));
    }
}
