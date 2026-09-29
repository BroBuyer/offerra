<?php

/**
 * Re-queue DNS rebinds for offers that hit Cloudflare 429.
 * Throttle heavily so CF API cools down.
 *
 *   php scripts/requeue-rebind-429.php
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Jobs\RebindOfferDnsJob;
use App\Models\Offer;
use Illuminate\Support\Facades\DB;

const DELAY_SEC = 3; // ~20/min — balance speed vs CF 429

$offers = Offer::query()
    ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
    ->where(function ($q) {
        $q->where('infra_meta->dns_error', 'like', '%429%')
            ->orWhere('infra_meta->dns_error', 'like', '%throttling%')
            ->orWhere('infra_meta->dns_error', 'like', '%rate limit%');
    })
    ->orderBy('id')
    ->get(['id', 'domain', 'infra_meta', 'deploy_panel_name']);

echo 'candidates='.$offers->count().PHP_EOL;

// Drop pending rebinds for these ids to avoid duplicates fighting unique lock.
$ids = $offers->pluck('id')->all();
$deletedPending = 0;
if ($ids !== []) {
    $pending = DB::table('jobs')
        ->where('queue', 'deploy')
        ->where('payload', 'like', '%RebindOfferDnsJob%')
        ->get(['id', 'payload']);
    foreach ($pending as $job) {
        $payload = json_decode($job->payload, true);
        $command = $payload['data']['command'] ?? '';
        // serialized job contains offerId
        foreach ($ids as $oid) {
            if (str_contains($command, 'offerId";i:'.$oid.';') || str_contains($command, 's:'.strlen((string) $oid).':"'.$oid.'"')) {
                DB::table('jobs')->where('id', $job->id)->delete();
                $deletedPending++;
                break;
            }
        }
    }
}
echo "cleared_pending_rebinds≈{$deletedPending}\n";

$n = 0;
$skipped = 0;
foreach ($offers as $offer) {
    $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
    $ip = trim((string) ($meta['deploy_host'] ?? ''));
    if ($ip === '' || ! filter_var($ip, FILTER_VALIDATE_IP)) {
        $ip = trim((string) ($offer->deploy_panel_name ?? ''));
    }
    if ($ip === '' || ! filter_var($ip, FILTER_VALIDATE_IP)) {
        $skipped++;
        echo "SKIP {$offer->id} {$offer->domain} no-ip\n";
        continue;
    }

    // Clear sticky error before retry so panel doesn't keep showing old 429 while queued.
    unset($meta['dns_error']);
    $offer->update(['infra_meta' => $meta]);

    RebindOfferDnsJob::dispatch($offer->id, $ip)
        ->delay(now()->addSeconds($n * DELAY_SEC))
        ->onQueue('deploy');
    $n++;
}

echo 'queued='.$n.' skipped='.$skipped.' delay='.DELAY_SEC.'s (~'.round($n * DELAY_SEC / 60).' min total)'."\n";
echo 'deploy_queue_now='.DB::table('jobs')->where('queue', 'deploy')->count().PHP_EOL;
