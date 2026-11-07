<?php

namespace App\Support;

/**
 * Cloudflare account switch is two clocks: the new zone can be ready while
 * the registrar still points at the previous NS pair. Retiring the old zone
 * or treating Dynadot set_ns as done before that cutover leaves a live
 * nameserver pair with no A records.
 */
final class CloudflareZoneCutover
{
    /**
     * @param  list<string>  $liveNs
     * @param  list<string>  $expectedNs
     */
    public static function registrarNsMatch(array $liveNs, array $expectedNs): bool
    {
        return InfrastructureDnsReadiness::nameserversAcceptable($liveNs, $expectedNs);
    }

    /**
     * Ask Dynadot again when public NS are still the previous Cloudflare pair,
     * even if a earlier set_ns call returned success.
     *
     * @param  list<string>  $liveNs
     * @param  list<string>  $expectedNs
     */
    public static function shouldRetrySetNs(array $liveNs, array $expectedNs): bool
    {
        if ($expectedNs === []) {
            return false;
        }

        return ! self::registrarNsMatch($liveNs, $expectedNs);
    }

    /**
     * @param  list<string>  $liveNs
     * @param  list<string>  $expectedNs
     */
    public static function shouldDeleteOldZone(array $liveNs, array $expectedNs): bool
    {
        return self::registrarNsMatch($liveNs, $expectedNs);
    }

    public static function slotFromMeta(array $meta): string
    {
        return match ((string) ($meta['cloudflare_slot'] ?? '')) {
            'backup' => 'backup',
            'spare' => 'spare',
            default => 'primary',
        };
    }
}
