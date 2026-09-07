<?php

/**
 * Migrate EGO offers still bound to 91.224.92.135 → 91.224.92.30
 *
 * Usage on prod:
 *   php scripts/migrate-ego-origin.php count
 *   php scripts/migrate-ego-origin.php redeploy
 *   php scripts/migrate-ego-origin.php rebind
 *   php scripts/migrate-ego-origin.php status
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Jobs\DeployOfferJob;
use App\Jobs\RebindOfferDnsJob;
use App\Models\Offer;
use Illuminate\Support\Facades\DB;

const OLD_IP = '91.224.92.135';
const NEW_IP = '91.224.92.30';
const USER_ID = 2;
const ID_FILE = __DIR__.'/../storage/app/migrate-ego-135-ids.json';

function saveMigrationIds(array $ids): void
{
    file_put_contents(ID_FILE, json_encode(array_values($ids), JSON_PRETTY_PRINT));
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
    $stored = trim((string) ($offer->deploy_panel_name ?? ''));

    return $stored;
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
    $offers = staleOffers();
    echo 'offers on '.OLD_IP.': '.$offers->count().PHP_EOL;
    exit(0);
}

if ($cmd === 'status') {
    $offers = staleOffers();
    echo 'still on '.OLD_IP.': '.$offers->count().PHP_EOL;

    $onNew = Offer::query()
        ->where('user_id', USER_ID)
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->get(['id', 'deploy_panel_name', 'infra_meta'])
        ->filter(fn (Offer $o) => offerHost($o) === NEW_IP);
    echo 'on '.NEW_IP.': '.$onNew->count().PHP_EOL;

    $deploying = Offer::query()
        ->where('user_id', USER_ID)
        ->where('status', 'deploying')
        ->count();
    echo 'deploying: '.$deploying.PHP_EOL;

    $pendingJobs = DB::table('jobs')->where('queue', 'deploy')->count();
    echo 'deploy queue jobs: '.$pendingJobs.PHP_EOL;

    $saved = loadMigrationIds();
    echo 'tracked migration ids: '.count($saved).PHP_EOL;
    exit(0);
}

if ($cmd === 'redeploy') {
    $offers = staleOffers();
    $ids = $offers->pluck('id')->all();
    saveMigrationIds(array_merge(loadMigrationIds(), $ids));
    $n = 0;
    foreach ($offers as $offer) {
        DeployOfferJob::dispatch($offer->id);
        $n++;
    }
    echo "queued redeploy: {$n}".PHP_EOL;
    echo 'tracked ids total: '.count(loadMigrationIds()).PHP_EOL;
    exit(0);
}

if ($cmd === 'rebind') {
    $ids = loadMigrationIds();
    if ($ids === []) {
        fwrite(STDERR, "No migration IDs saved. Run redeploy first or use rebind-stale.\n");
        exit(1);
    }
    $staleIds = staleOffers()->pluck('id')->all();
    $n = 0;
    $skipped = 0;
    foreach ($ids as $id) {
        if (in_array((int) $id, $staleIds, true)) {
            $skipped++;
            continue;
        }
        RebindOfferDnsJob::dispatch((int) $id, NEW_IP);
        $n++;
    }
    echo "queued rebind → ".NEW_IP.": {$n}".PHP_EOL;
    echo "skipped leftover on ".OLD_IP.": {$skipped}".PHP_EOL;
    exit(0);
}

if ($cmd === 'retry-leftover') {
    $offers = staleOffers();
    $n = 0;
    foreach ($offers as $offer) {
        DeployOfferJob::dispatch($offer->id);
        $n++;
    }
    echo "queued leftover redeploy: {$n}".PHP_EOL;
    exit(0);
}

if ($cmd === 'dns-errors') {
    $ids = loadMigrationIds();
    $offers = Offer::query()
        ->whereIn('id', $ids)
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->get(['id', 'domain', 'status', 'infra_meta']);
    $failed = $offers->filter(function (Offer $o) {
        $meta = is_array($o->infra_meta) ? $o->infra_meta : [];

        return filled($meta['dns_error'] ?? null);
    });
    echo 'dns_error count: '.$failed->count().PHP_EOL;
    foreach ($failed->take(10) as $offer) {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        echo $offer->id."\t".$offer->domain."\t".($meta['dns_error'] ?? '').PHP_EOL;
    }
    exit(0);
}

if ($cmd === 'rebind-failed') {
    $ids = loadMigrationIds();
    $offers = Offer::query()
        ->whereIn('id', $ids)
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->orderBy('id')
        ->get(['id', 'infra_meta']);
    $n = 0;
    foreach ($offers as $offer) {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        if (! filled($meta['dns_error'] ?? null)) {
            continue;
        }
        RebindOfferDnsJob::dispatch($offer->id, NEW_IP)
            ->delay(now()->addSeconds($n * 2));
        $n++;
    }
    echo "queued throttled rebind retries: {$n}".PHP_EOL;
    exit(0);
}

if ($cmd === 'rebind-stale') {
    $offers = staleOffers();
    $n = 0;
    foreach ($offers as $offer) {
        RebindOfferDnsJob::dispatch($offer->id, NEW_IP);
        $n++;
    }
    echo "queued rebind (still on old IP only): {$n}".PHP_EOL;
    exit(0);
}

if ($cmd === 'save-ids') {
    $offers = staleOffers();
    $ids = $offers->pluck('id')->all();
    saveMigrationIds(array_unique(array_merge(loadMigrationIds(), $ids)));
    echo 'saved ids: '.count(loadMigrationIds()).PHP_EOL;
    exit(0);
}

if ($cmd === 'probe') {
    $ids = loadMigrationIds();
    $offers = Offer::query()
        ->whereIn('id', $ids)
        ->where('status', 'deployed')
        ->orderBy('id')
        ->get(['id', 'domain']);
    $step = max(1, (int) floor($offers->count() / 8));
    $picked = $offers->values()->filter(fn ($o, $i) => $i % $step === 0)->take(8);
    foreach ($picked as $offer) {
        $domain = strtolower(trim((string) $offer->domain));
        $records = @dns_get_record($domain, DNS_A) ?: [];
        $ips = array_values(array_unique(array_filter(array_map(fn ($r) => $r['ip'] ?? '', $records))));
        $ip = $ips[0] ?? '';
        $code = 'n/a';
        if ($ip !== '') {
            $ch = curl_init('https://'.$domain.'/');
            curl_setopt_array($ch, [
                CURLOPT_NOBODY => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT => 15,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_RESOLVE => [$domain.':443:'.$ip, $domain.':80:'.$ip],
            ]);
            curl_exec($ch);
            $code = (string) curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
        }
        echo $offer->id."\t".$domain."\t".($ip !== '' ? $ip : 'no-a')."\t".$code.PHP_EOL;
    }
    exit(0);
}

if ($cmd === 'sample') {
    $ids = loadMigrationIds();
    $offers = Offer::query()
        ->whereIn('id', $ids)
        ->where('status', 'deployed')
        ->orderBy('id')
        ->get(['id', 'domain', 'status', 'deploy_panel_name', 'infra_meta']);
    $step = max(1, (int) floor($offers->count() / 8));
    $picked = $offers->values()->filter(fn ($o, $i) => $i % $step === 0)->take(8);
    foreach ($picked as $offer) {
        echo $offer->id."\t".$offer->domain."\t".offerHost($offer).PHP_EOL;
    }
    exit(0);
}

if ($cmd === 'leftover') {
    $offers = staleOffers();
    foreach ($offers as $offer) {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $deployHostMeta = trim((string) ($meta['deploy_host'] ?? ''));
        $dnsError = trim((string) ($meta['dns_error'] ?? ''));
        $error = trim((string) ($meta['error'] ?? $meta['dns_error'] ?? ''));
        echo $offer->id."\t".$offer->domain."\t".$offer->status."\t".offerHost($offer).PHP_EOL;
        echo '  deploy_panel_name='.trim((string) ($offer->deploy_panel_name ?? '')).PHP_EOL;
        echo '  infra_meta.deploy_host='.($deployHostMeta !== '' ? $deployHostMeta : 'null').PHP_EOL;
        echo '  dns_error='.($dnsError !== '' ? $dnsError : 'null').PHP_EOL;
        echo '  error='.$error.PHP_EOL;
        echo '  last_error='.trim((string) ($offer->last_error ?? '')).PHP_EOL;
    }
    echo 'leftover count: '.$offers->count().PHP_EOL;
    exit(0);
}

if ($cmd === 'failed') {
    $ids = loadMigrationIds();
    if ($ids === []) {
        echo "no tracked ids".PHP_EOL;
        exit(0);
    }
    $offers = Offer::query()
        ->whereIn('id', $ids)
        ->get(['id', 'domain', 'status', 'deploy_panel_name', 'infra_meta']);
    $byStatus = $offers->groupBy('status')->map->count();
    foreach ($byStatus as $status => $count) {
        echo $status.': '.$count.PHP_EOL;
    }
    $failed = $offers->filter(fn (Offer $o) => in_array($o->status, ['failed', 'deploy_failed'], true));
    foreach ($failed as $offer) {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        echo 'FAIL '.$offer->id."\t".$offer->domain."\t".$offer->status."\t".($meta['error'] ?? $meta['dns_error'] ?? '').PHP_EOL;
    }
    echo 'tracked found: '.$offers->count().' / '.count($ids).PHP_EOL;
    exit(0);
}

if ($cmd === 'capture-ids') {
    $offers = Offer::query()
        ->where('user_id', USER_ID)
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->orderBy('id')
        ->get(['id', 'deploy_panel_name', 'infra_meta'])
        ->filter(function (Offer $o) {
            $host = offerHost($o);

            return $host === OLD_IP || $host === NEW_IP;
        });
    saveMigrationIds($offers->pluck('id')->all());
    echo 'captured ids (135+30): '.$offers->count().PHP_EOL;
    exit(0);
}

fwrite(STDERR, "Unknown command: {$cmd}\n");
exit(1);
