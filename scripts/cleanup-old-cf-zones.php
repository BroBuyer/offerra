<?php

/**
 * Cleanup leftover Cloudflare zones on the OLD (primary) account after backup switch.
 *
 *   php scripts/cleanup-old-cf-zones.php
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Services\CloudflareClient;
use App\Models\UserSetting;

const DELAY_US = 700_000; // 0.7s between API calls

$cf = app(CloudflareClient::class);

function settingsWithSlot(UserSetting $base, array $creds): UserSetting
{
    $merged = $base->replicate();
    $merged->cloudflare_api_token = $creds['token'];
    $merged->cloudflare_account_id = $creds['account_id'] !== '' ? $creds['account_id'] : null;
    $merged->cloudflare_account_name = $creds['name'] !== '' ? $creds['name'] : null;

    return $merged;
}

$offers = Offer::query()
    ->with('user.settings')
    ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
    ->where(function ($q) {
        $q->where('infra_meta->cloudflare_slot', 'backup')
            ->orWhere('infra_meta->cloudflare_old_zone_delete', 'like', 'failed%')
            ->orWhereNotNull('infra_meta->cloudflare_old_zone_delete_error');
    })
    ->orderBy('id')
    ->get();

echo 'candidates='.$offers->count().PHP_EOL;

$stats = [
    'checked' => 0,
    'deleted' => 0,
    'already_missing' => 0,
    'active_is_primary_skip' => 0,
    'not_on_primary' => 0,
    'failed' => 0,
    'no_primary_creds' => 0,
];

foreach ($offers as $offer) {
    $settings = $offer->user?->settings;
    if (! $settings || ! $settings->hasCloudflareSlot('primary')) {
        $stats['no_primary_creds']++;
        continue;
    }

    $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
    $slot = (($meta['cloudflare_slot'] ?? '') === 'backup') ? 'backup' : 'primary';
    $activeZoneId = trim((string) ($meta['cloudflare_zone_id'] ?? ''));
    $domain = strtolower(trim((string) $offer->domain));

    // Only clean primary leftovers when offer already lives on backup.
    if ($slot !== 'backup') {
        $stats['active_is_primary_skip']++;
        continue;
    }

    $primaryCreds = $settings->cloudflareSlotCredentials('primary');
    $primarySettings = settingsWithSlot($settings, $primaryCreds);

    $stats['checked']++;
    usleep(DELAY_US);

    try {
        $zone = $cf->findZone($primarySettings, $domain);
    } catch (Throwable $e) {
        $stats['failed']++;
        echo "FIND_FAIL\t{$offer->id}\t{$domain}\t".$e->getMessage()."\n";
        continue;
    }

    if ($zone === null) {
        $stats['not_on_primary']++;
        $meta['cloudflare_old_zone_delete'] = 'already_missing';
        unset($meta['cloudflare_old_zone_delete_error']);
        $offer->update(['infra_meta' => $meta]);
        continue;
    }

    $oldZoneId = trim((string) ($zone['zone_id'] ?? ''));
    if ($oldZoneId === '' || ($activeZoneId !== '' && hash_equals($activeZoneId, $oldZoneId))) {
        // Same zone id as active backup zone — do not delete.
        $stats['active_is_primary_skip']++;
        echo "SKIP_SAME_ZONE\t{$offer->id}\t{$domain}\t{$oldZoneId}\n";
        continue;
    }

    usleep(DELAY_US);
    try {
        $result = $cf->deleteZone($primarySettings, $oldZoneId);
        $meta['cloudflare_old_zone_delete'] = $result === 'already_missing' ? 'already_missing' : 'deleted:cleanup';
        unset($meta['cloudflare_old_zone_delete_error']);
        $offer->update(['infra_meta' => $meta]);
        if ($result === 'already_missing') {
            $stats['already_missing']++;
            echo "MISSING\t{$offer->id}\t{$domain}\n";
        } else {
            $stats['deleted']++;
            echo "DELETED\t{$offer->id}\t{$domain}\t{$oldZoneId}\n";
        }
    } catch (Throwable $e) {
        $stats['failed']++;
        $meta['cloudflare_old_zone_delete'] = 'failed: '.$e->getMessage();
        $meta['cloudflare_old_zone_delete_error'] = $e->getMessage();
        $offer->update(['infra_meta' => $meta]);
        echo "FAIL\t{$offer->id}\t{$domain}\t".$e->getMessage()."\n";
    }
}

echo 'SUMMARY '.json_encode($stats).PHP_EOL;
