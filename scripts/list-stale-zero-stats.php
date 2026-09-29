<?php

/**
 * List active offers: indexed > N months ago, 0 leads, 0 deps, 0 geo-clicks.
 *
 *   php scripts/list-stale-zero-stats.php [--months=1] [--out=/tmp/stale-domains.txt]
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\User;
use Illuminate\Support\Facades\DB;

$months = 1;
$outPath = storage_path('app/stale-zero-stats-domains.txt');
foreach ($argv as $arg) {
    if (str_starts_with($arg, '--months=')) {
        $months = max(1, (int) substr($arg, 9));
    }
    if (str_starts_with($arg, '--out=')) {
        $outPath = substr($arg, 6);
    }
}

$cutoff = now()->subMonths($months);
echo "cutoff={$cutoff->toDateTimeString()} months={$months}\n";

$rows = Offer::query()
    ->from('offers')
    ->leftJoin('offer_stats', 'offer_stats.offer_id', '=', 'offers.id')
    ->leftJoin('users', 'users.id', '=', 'offers.user_id')
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
    ->orderBy('users.name')
    ->orderBy('offers.indexed_at')
    ->orderBy('offers.domain')
    ->get([
        'offers.id',
        'offers.domain',
        'offers.geo',
        'offers.brand',
        'offers.indexed_at',
        'offers.status',
        'offers.user_id',
        'users.name as user_name',
        DB::raw('COALESCE(offer_stats.leads_count, 0) as leads_count'),
        DB::raw('COALESCE(offer_stats.deposits_count, 0) as deposits_count'),
        DB::raw('COALESCE(offer_stats.clicks_geo_count, 0) as clicks_geo_count'),
    ]);

echo 'candidates='.$rows->count()."\n";

$byUser = [];
foreach ($rows as $r) {
    $name = $r->user_name ?: ('user#'.$r->user_id);
    $byUser[$name] = ($byUser[$name] ?? 0) + 1;
}
echo "by_user:\n";
foreach ($byUser as $n => $c) {
    echo "  {$n}: {$c}\n";
}

$lines = [];
$lines[] = '# indexed_before='.$cutoff->toDateString().' leads=0 deps=0 clicks=0 active_only';
$lines[] = '# count='.$rows->count();
$lines[] = '# generated='.now()->toIso8601String();
$lines[] = '';

foreach ($rows as $r) {
    $indexed = $r->indexed_at?->format('Y-m-d') ?? '-';
    $line = sprintf(
        "%s\t#%d\t%s\t%s\t%s\tindexed=%s\tl=%d\td=%d\tc=%d",
        $r->user_name ?: ('u'.$r->user_id),
        $r->id,
        $r->domain,
        $r->geo,
        $r->brand,
        $indexed,
        (int) $r->leads_count,
        (int) $r->deposits_count,
        (int) $r->clicks_geo_count,
    );
    $lines[] = $line;
}

$dir = dirname($outPath);
if (! is_dir($dir)) {
    mkdir($dir, 0775, true);
}
file_put_contents($outPath, implode("\n", $lines)."\n");
echo "wrote={$outPath}\n";

// also plain domain list
$domainsPath = preg_replace('/\.txt$/', '-domains-only.txt', $outPath) ?: ($outPath.'.domains');
$domains = $rows->pluck('domain')->map(fn ($d) => strtolower(trim((string) $d)))->filter()->unique()->values()->all();
file_put_contents($domainsPath, implode("\n", $domains)."\n");
echo "domains_only={$domainsPath} count=".count($domains)."\n";

echo "--- sample 20 ---\n";
foreach ($rows->take(20) as $r) {
    echo "{$r->user_name}\t{$r->domain}\tindexed={$r->indexed_at?->format('Y-m-d')}\n";
}
echo "DONE\n";
