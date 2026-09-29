<?php

/**
 * Retry GSC submit for offers stuck on sitemaps.submit 403.
 *
 *   php scripts/retry-gsc-submit.php
 *   php scripts/retry-gsc-submit.php capitalheritage-fr.online capital-heritage-fr.online fenixvynostar-gpt.online
 *   php scripts/retry-gsc-submit.php --all-waiting
 *   php scripts/retry-gsc-submit.php --sync domain1 domain2
 */
require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Jobs\SubmitOfferToGscJob;
use App\Models\Offer;
use App\Services\OfferGscSubmitter;
use Illuminate\Support\Facades\DB;

$args = array_values(array_filter(array_slice($argv, 1), fn ($a) => $a !== '--'));
$sync = in_array('--sync', $args, true);
$allWaiting = in_array('--all-waiting', $args, true);
$domains = array_values(array_filter($args, fn ($a) => ! str_starts_with($a, '--')));

if ($domains === [] && ! $allWaiting) {
    $domains = [
        'capitalheritage-fr.online',
        'capital-heritage-fr.online',
        'fenixvynostar-gpt.online',
        'indexmaxaltlab-pt.online',
    ];
}

$query = Offer::query()
    ->with('user.settings')
    ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed']);

if ($allWaiting) {
    $offers = $query->orderBy('id')->get()->filter(function (Offer $o) {
        $meta = is_array($o->infra_meta) ? $o->infra_meta : [];
        $status = (string) ($meta['gsc']['status'] ?? '');
        $err = (string) ($meta['gsc_error'] ?? '');

        return in_array($status, ['waiting', 'failed', ''], true)
            || ($err !== '' && str_contains($err, 'sitemaps.submit'));
    })->values();
} else {
    $offers = $query->whereIn('domain', $domains)->orderBy('id')->get();
}

echo 'candidates='.$offers->count().PHP_EOL;
$submitter = app(OfferGscSubmitter::class);
$queued = 0;
$syncedOk = 0;
$syncedFail = 0;
$skipped = 0;

foreach ($offers as $offer) {
    $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
    $gscStatus = (string) ($meta['gsc']['status'] ?? '');
    $err = substr((string) ($meta['gsc_error'] ?? ''), 0, 120);
    echo "#{$offer->id} {$offer->domain} avail={$offer->availability_status} gsc={$gscStatus} submitted=".(int) $offer->submitted_for_indexing." err={$err}\n";

    if ($gscStatus === 'submitted' && empty($meta['gsc_error']) && $offer->submitted_for_indexing) {
        echo "  skip already submitted\n";
        $skipped++;
        continue;
    }

    // Clear sticky unique lock leftovers by deleting matching jobs if any, and reset gsc_error/status for retry.
    unset($meta['gsc_error']);
    $meta['gsc'] = [
        'status' => 'waiting',
        'updated_at' => now()->toIso8601String(),
        'retry_forced_at' => now()->toIso8601String(),
    ];
    $offer->update(['infra_meta' => $meta]);

    if ($sync) {
        try {
            $result = $submitter->submit($offer->fresh());
            echo "  SYNC_OK sitemap={$result['sitemap_url']}\n";
            $syncedOk++;
        } catch (Throwable $e) {
            echo '  SYNC_FAIL '.$e->getMessage()."\n";
            $syncedFail++;
        }
        continue;
    }

    // Drop pending unique job row if Laravel unique via cache; also bust failed jobs for this offer.
    DB::table('failed_jobs')
        ->where('payload', 'like', '%SubmitOfferToGscJob%')
        ->where('payload', 'like', '%'.$offer->id.'%')
        ->delete();

    SubmitOfferToGscJob::dispatch($offer->id)->onQueue('deploy');
    echo "  queued SubmitOfferToGscJob\n";
    $queued++;
}

echo "\nqueued={$queued} synced_ok={$syncedOk} synced_fail={$syncedFail} skipped={$skipped}\n";
echo 'deploy_pending='.DB::table('jobs')->where('queue', 'deploy')->count().PHP_EOL;
