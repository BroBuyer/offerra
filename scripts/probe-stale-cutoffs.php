<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use Illuminate\Support\Carbon;

function staleCount(Carbon $cutoff): int
{
    return (int) Offer::query()
        ->whereNotIn('offers.status', ['archived', 'archiving', 'teardown_failed'])
        ->whereNotNull('offers.indexed_at')
        ->where('offers.indexed_at', '<', $cutoff)
        ->leftJoin('offer_stats', 'offer_stats.offer_id', '=', 'offers.id')
        ->where(function ($q) {
            $q->whereNull('offer_stats.leads_count')->orWhere('offer_stats.leads_count', '<=', 0);
        })
        ->where(function ($q) {
            $q->whereNull('offer_stats.deposits_count')->orWhere('offer_stats.deposits_count', '<=', 0);
        })
        ->where(function ($q) {
            $q->whereNull('offer_stats.clicks_geo_count')->orWhere('offer_stats.clicks_geo_count', '<=', 0);
        })
        ->count('offers.id');
}

$now = now();
$cutoffs = [
    'month' => $now->copy()->subMonth(),
    'month-1d' => $now->copy()->subMonth()->addDay(),
    '25d' => $now->copy()->subDays(25),
    '20d' => $now->copy()->subDays(20),
    '14d' => $now->copy()->subDays(14),
    '7d' => $now->copy()->subDays(7),
];

foreach ($cutoffs as $label => $c) {
    echo $label, ' cutoff=', $c->toDateTimeString(), ' count=', staleCount($c), PHP_EOL;
}

$nearest = Offer::query()
    ->whereNotIn('offers.status', ['archived', 'archiving', 'teardown_failed'])
    ->whereNotNull('offers.indexed_at')
    ->leftJoin('offer_stats', 'offer_stats.offer_id', '=', 'offers.id')
    ->where(function ($q) {
        $q->whereNull('offer_stats.leads_count')->orWhere('offer_stats.leads_count', '<=', 0);
    })
    ->where(function ($q) {
        $q->whereNull('offer_stats.deposits_count')->orWhere('offer_stats.deposits_count', '<=', 0);
    })
    ->where(function ($q) {
        $q->whereNull('offer_stats.clicks_geo_count')->orWhere('offer_stats.clicks_geo_count', '<=', 0);
    })
    ->orderBy('offers.indexed_at')
    ->limit(8)
    ->get(['offers.id', 'offers.domain', 'offers.indexed_at']);

echo "oldest zero-stat live:\n";
foreach ($nearest as $o) {
    echo "#{$o->id} {$o->domain} indexed={$o->indexed_at}\n";
}
