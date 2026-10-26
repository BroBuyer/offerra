<?php

namespace App\Support;

/**
 * Public DNS is ready when live NS match the expected pair.
 * Another Cloudflare pair is the previous account — not a cutover.
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

        // Account switch assigns a new CF NS pair. Another Cloudflare pair
        // means the old zone is still answering — cutover is not done.
        return $matched >= min(2, count($expected));
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
