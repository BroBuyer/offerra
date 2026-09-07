<?php

/**
 * Migrate Admin (user 1) offers 91.224.92.30 → 176.123.6.48
 *
 *   php scripts/migrate-admin-origin.php count
 *   php scripts/migrate-admin-origin.php redeploy
 *   php scripts/migrate-admin-origin.php rebind
 *   php scripts/migrate-admin-origin.php status
 *   php scripts/migrate-admin-origin.php failed
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Jobs\DeployOfferJob;
use App\Jobs\RebindOfferDnsJob;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Support\Facades\DB;

const OLD_IP = '91.224.92.30';
const NEW_IP = '176.123.6.48';
const USER_ID = 1;
const ID_FILE = __DIR__.'/../storage/app/migrate-admin-30-to-48-ids.json';
const REBIND_DELAY_SEC = 2;

function saveMigrationIds(array $ids): void
{
    file_put_contents(ID_FILE, json_encode(array_values(array_unique(array_map('intval', $ids))), JSON_PRETTY_PRINT));
}

function loadMigrationIds(): array
{
    if (! is_file(ID_FILE)) {
        return [];
    }
    $decoded = json_decode((string) file_get_contents(ID_FILE), true);

    return is_array($decoded) ? array_map('intval', $decoded) : [];
}

function offerHost(Offer $offer): string
{
    $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
    $fromMeta = trim((string) ($meta['deploy_host'] ?? ''));
    if ($fromMeta !== '') {
        return $fromMeta;
    }

    return trim((string) ($offer->deploy_panel_name ?? ''));
}

function staleOffers()
{
    return Offer::query()
        ->where('user_id', USER_ID)
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->orderBy('id')
        ->get(['id', 'domain', 'status', 'deploy_panel_name', 'infra_meta'])
        ->filter(fn (Offer $o) => offerHost($o) === OLD_IP);
}

$cmd = $argv[1] ?? 'count';

if ($cmd === 'count') {
    $settings = User::query()->find(USER_ID)?->settings;
    echo 'settings.deploy_host='.($settings->deploy_host ?? '').PHP_EOL;
    echo 'offers on '.OLD_IP.': '.staleOffers()->count().PHP_EOL;
    $onNew = Offer::query()
        ->where('user_id', USER_ID)
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->get(['infra_meta', 'deploy_panel_name'])
        ->filter(fn (Offer $o) => offerHost($o) === NEW_IP)
        ->count();
    echo 'offers on '.NEW_IP.': '.$onNew.PHP_EOL;
    exit(0);
}

if ($cmd === 'status') {
    $stale = staleOffers()->count();
    $onNew = Offer::query()
        ->where('user_id', USER_ID)
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->get(['infra_meta', 'deploy_panel_name'])
        ->filter(fn (Offer $o) => offerHost($o) === NEW_IP)
        ->count();
    $deploying = Offer::query()->where('user_id', USER_ID)->where('status', 'deploying')->count();
    $queue = DB::table('jobs')->where('queue', 'deploy')->count();
    echo 'still on '.OLD_IP.': '.$stale.PHP_EOL;
    echo 'on '.NEW_IP.': '.$onNew.PHP_EOL;
    echo 'deploying: '.$deploying.PHP_EOL;
    echo 'deploy queue: '.$queue.PHP_EOL;
    echo 'tracked ids: '.count(loadMigrationIds()).PHP_EOL;
    exit(0);
}

if ($cmd === 'redeploy') {
    $settings = User::query()->find(USER_ID)?->settings;
    if (trim((string) ($settings->deploy_host ?? '')) !== NEW_IP) {
        fwrite(STDERR, 'Abort: user '.USER_ID.' deploy_host is ['.($settings->deploy_host ?? '').'], expected '.NEW_IP.PHP_EOL);
        exit(1);
    }

    $offers = staleOffers();
    $ids = $offers->pluck('id')->all();
    saveMigrationIds(array_merge(loadMigrationIds(), $ids));
    $n = 0;
    foreach ($offers as $offer) {
        DeployOfferJob::dispatch($offer->id);
        $n++;
    }
    echo "queued redeploy: {$n}".PHP_EOL;
    echo 'tracked ids: '.count(loadMigrationIds()).PHP_EOL;
    exit(0);
}

if ($cmd === 'rebind') {
    $ids = loadMigrationIds();
    if ($ids === []) {
        $ids = staleOffers()->pluck('id')->all();
        saveMigrationIds($ids);
    }
    if ($ids === []) {
        fwrite(STDERR, "No offer ids to rebind.\n");
        exit(1);
    }

    $n = 0;
    foreach ($ids as $id) {
        RebindOfferDnsJob::dispatch((int) $id, NEW_IP)
            ->delay(now()->addSeconds($n * REBIND_DELAY_SEC));
        $n++;
    }
    echo 'queued throttled rebind → '.NEW_IP.': '.$n.' (delay '.REBIND_DELAY_SEC."s each)\n";
    exit(0);
}

if ($cmd === 'failed') {
    $ids = loadMigrationIds();
    $offers = Offer::query()->whereIn('id', $ids)->get(['id', 'domain', 'status', 'deploy_error', 'infra_meta']);
    $byStatus = $offers->groupBy('status')->map->count();
    foreach ($byStatus as $status => $count) {
        echo $status.': '.$count.PHP_EOL;
    }
    foreach ($offers as $offer) {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $err = trim((string) ($offer->deploy_error ?? $meta['error'] ?? $meta['dns_error'] ?? ''));
        if ($err === '' && ! in_array($offer->status, ['failed', 'deploy_failed'], true)) {
            continue;
        }
        if ($err === '' && ! filled($meta['dns_error'] ?? null)) {
            continue;
        }
        echo 'ISSUE '.$offer->id."\t".$offer->domain."\t".$offer->status."\t".$err.PHP_EOL;
    }
    exit(0);
}

fwrite(STDERR, "Unknown command: {$cmd}\n");
exit(1);
