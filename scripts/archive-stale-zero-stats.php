<?php

/**
 * Archive active offers: indexed > N months, 0 leads, 0 deps, 0 geo-clicks.
 *
 *   php scripts/archive-stale-zero-stats.php [--months=1] [--dry]
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\User;
use App\Services\OfferTeardownService;
use Illuminate\Support\Facades\DB;

$months = 1;
$dry = in_array('--dry', $argv, true);
foreach ($argv as $arg) {
    if (str_starts_with($arg, '--months=')) {
        $months = max(1, (int) substr($arg, 9));
    }
}

$cutoff = now()->subMonths($months);
$admin = User::query()->where('role', User::ROLE_ADMIN)->orderBy('id')->first()
    ?? User::query()->where('email', 'admin@offerra.local')->firstOrFail();

$ids = Offer::query()
    ->from('offers')
    ->leftJoin('offer_stats', 'offer_stats.offer_id', '=', 'offers.id')
    ->whereNotIn('offers.status', ['archived', 'archiving', 'teardown_failed'])
    ->whereNotNull('offers.indexed_at')
    ->where('offers.indexed_at', '<', $cutoff)
    ->where(function ($q) {
        $q->whereNull('offer_stats.leads_count')->orWhere('offer_stats.leads_count', '<=', 0);
    })
    ->where(function ($q) {
        $q->whereNull('offer_stats.deposits_count')->orWhere('offer_stats.deposits_count', '<=', 0);
    })
    ->where(function ($q) {
        $q->whereNull('offer_stats.clicks_geo_count')->orWhere('offer_stats.clicks_geo_count', '<=', 0);
    })
    ->orderBy('offers.id')
    ->pluck('offers.id')
    ->all();

echo 'cutoff='.$cutoff->toDateTimeString()."\n";
echo 'candidates='.count($ids).' dry='.($dry ? '1' : '0')." admin=#{$admin->id}\n";

if ($dry || $ids === []) {
    echo "DONE\n";
    exit(0);
}

$teardown = app(OfferTeardownService::class);
$enqueued = 0;
$skipped = 0;
$errors = 0;

foreach ($ids as $id) {
    $offer = Offer::query()->find($id);
    if (! $offer) {
        $skipped++;
        continue;
    }
    try {
        $teardown->enqueueArchive($offer, $admin);
        $enqueued++;
        if ($enqueued % 50 === 0) {
            echo "enqueued={$enqueued}\n";
        }
    } catch (Throwable $e) {
        $msg = $e->getMessage();
        if (str_contains($msg, 'вже архівується') || str_contains($msg, 'в архіві')) {
            $skipped++;
        } else {
            $errors++;
            echo "ERR #{$offer->id} {$offer->domain}: {$msg}\n";
        }
    }
}

echo "done enqueued={$enqueued} skipped={$skipped} errors={$errors}\n";
echo 'deploy_queue='.DB::table('jobs')->where('queue', 'deploy')->count()."\n";
echo "DONE\n";
