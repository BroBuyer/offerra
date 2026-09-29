<?php

/**
 * Mark DNS as done for all active (non-archived) offers.
 * Run: php scripts/mark-active-dns-done.php [--dry]
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;

$dry = in_array('--dry', $argv, true);

$q = Offer::query()->whereNotIn('status', ['archived', 'archiving', 'teardown_failed']);
$total = (clone $q)->count();
$already = 0;
$updated = 0;

echo 'dry='.($dry ? '1' : '0')." active={$total}\n";

$q->orderBy('id')->chunkById(200, function ($chunk) use ($dry, &$already, &$updated): void {
    foreach ($chunk as $offer) {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $dns = $meta['dns'] ?? null;
        $hadError = isset($meta['dns_error']);

        if ($dns === 'done' && ! $hadError) {
            $already++;
            continue;
        }

        $meta['dns'] = 'done';
        unset($meta['dns_error']);

        $patch = ['infra_meta' => $meta];
        // Keep infra_status coherent when we claim DNS is ready
        if (in_array($offer->infra_status, [null, '', 'provisioning', 'dns_propagating', 'failed'], true)
            || $offer->infra_status === null) {
            // only bump to ready if provision was intended or already deployed
            if ($offer->status === 'deployed' || $offer->provision_infrastructure) {
                $patch['infra_status'] = 'ready';
                $patch['infra_error'] = null;
            }
        }

        if (! $dry) {
            $offer->forceFill($patch)->save();
        }
        $updated++;
    }
});

echo "already_done={$already}\n";
echo "updated={$updated}\n";

$ready = Offer::query()
    ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
    ->where('infra_meta->dns', 'done')
    ->count();
echo "active_with_dns_done_now={$ready}\n";
echo "DONE\n";
