<?php

/**
 * Migrate JEL (user 3) offers 91.224.92.30 → 198.251.91.240
 *
 *   php scripts/migrate-jel-30-to-240.php count
 *   php scripts/migrate-jel-30-to-240.php point-settings
 *   php scripts/migrate-jel-30-to-240.php queue
 *   php scripts/migrate-jel-30-to-240.php status
 *   php scripts/migrate-jel-30-to-240.php cleanup-old
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Jobs\DeployOfferJob;
use App\Jobs\RebindOfferDnsJob;
use App\Models\Offer;
use App\Models\OriginServer;
use App\Models\User;
use App\Support\DeployDriver;
use Illuminate\Support\Facades\DB;

const OLD_IP = '91.224.92.30';
const NEW_IP = '198.251.91.240';
const USER_ID = 3;
const ROOT_PASS = 'i7xwnQQfiCnV';
const ID_FILE = __DIR__.'/../storage/app/migrate-jel-30-to-240-ids.json';
const REBIND_DELAY_SEC = 3;
const REBIND_BASE_DELAY_SEC = 60;

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

function liveOffers()
{
    return Offer::query()
        ->where('user_id', USER_ID)
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->orderBy('id')
        ->get(['id', 'domain', 'status', 'deploy_panel_name', 'infra_meta', 'template', 'availability_status', 'deploy_error']);
}

function staleOffers()
{
    return liveOffers()->filter(fn (Offer $o) => offerHost($o) === OLD_IP || offerHost($o) === '');
}

$cmd = $argv[1] ?? 'count';

if ($cmd === 'count') {
    $settings = User::query()->find(USER_ID)?->settings;
    $offers = liveOffers();
    $onOld = $offers->filter(fn (Offer $o) => offerHost($o) === OLD_IP)->count();
    $onNew = $offers->filter(fn (Offer $o) => offerHost($o) === NEW_IP)->count();
    $pendingTpl = $offers->where('template', 'pending')->count();
    echo 'settings.deploy_host='.($settings->deploy_host ?? '').PHP_EOL;
    echo 'live_total='.$offers->count().PHP_EOL;
    echo 'on '.OLD_IP.': '.$onOld.PHP_EOL;
    echo 'on '.NEW_IP.': '.$onNew.PHP_EOL;
    echo 'pending_template='.$pendingTpl.PHP_EOL;
    $srv = OriginServer::query()->where('host', NEW_IP)->first();
    echo 'NEW origin: '.($srv
        ? '#'.$srv->id.' active='.(int) $srv->is_active.' ssh='.($srv->hasSshCredentials() ? 'yes' : 'no')
        : 'MISSING').PHP_EOL;
    exit(0);
}

if ($cmd === 'point-settings') {
    $user = User::query()->with('settings')->findOrFail(USER_ID);
    $settings = $user->settings;
    if (! $settings) {
        fwrite(STDERR, "No settings for user ".USER_ID.PHP_EOL);
        exit(1);
    }

    $settings->forceFill([
        'deploy_host' => NEW_IP,
        'deploy_port' => 22,
        'deploy_username' => 'root',
        'deploy_password' => ROOT_PASS,
        'deploy_panel_name' => NEW_IP,
        'deploy_driver' => DeployDriver::UBUNTU,
        'deploy_path_template' => DeployDriver::UBUNTU_PATH,
    ])->save();

    $server = OriginServer::query()->firstOrNew(['host' => NEW_IP]);
    $server->fill([
        'port' => 22,
        'username' => 'root',
        'password' => ROOT_PASS,
        'label' => 'JEL '.NEW_IP,
        'deploy_driver' => DeployDriver::UBUNTU,
        'deploy_path_template' => DeployDriver::UBUNTU_PATH,
        'is_active' => true,
        'alerts_enabled' => true,
        'owner_user_id' => USER_ID,
    ]);
    $server->save();

    OriginServer::query()->where('host', OLD_IP)->update(['is_active' => false]);

    echo 'settings → '.NEW_IP.PHP_EOL;
    echo 'origin_servers id='.$server->id.' has_ssh='.($server->fresh()->hasSshCredentials() ? 'yes' : 'no').PHP_EOL;
    exit(0);
}

if ($cmd === 'queue') {
    $settings = User::query()->find(USER_ID)?->settings;
    if (trim((string) ($settings->deploy_host ?? '')) !== NEW_IP) {
        fwrite(STDERR, 'Abort: user '.USER_ID.' deploy_host is ['.($settings->deploy_host ?? '').'], expected '.NEW_IP.PHP_EOL);
        exit(1);
    }

    $offers = staleOffers();
    if ($offers->isEmpty()) {
        // Also pick any live not yet on NEW (safety)
        $offers = liveOffers()->filter(fn (Offer $o) => offerHost($o) !== NEW_IP)->values();
    }

    $pendingTpl = $offers->where('template', 'pending')->count();
    if ($pendingTpl > 0) {
        fwrite(STDERR, "ABORT: {$pendingTpl} still have template=pending\n");
        exit(1);
    }

    $ids = $offers->pluck('id')->map(fn ($id) => (int) $id)->all();
    saveMigrationIds(array_merge(loadMigrationIds(), $ids));

    $n = 0;
    foreach (Offer::query()->whereIn('id', $ids)->orderBy('id')->cursor() as $offer) {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $meta['deploy_host'] = NEW_IP;
        unset($meta['dns_error']);
        $offer->forceFill([
            'infra_meta' => $meta,
            'deploy_panel_name' => NEW_IP,
            'provision_infrastructure' => true,
        ])->save();
        $n++;
    }
    echo "retargeted → ".NEW_IP.": {$n}".PHP_EOL;

    $d = 0;
    foreach ($ids as $id) {
        DeployOfferJob::dispatch($id)->onQueue('deploy');
        $d++;
    }
    echo "queued redeploy: {$d}".PHP_EOL;

    $r = 0;
    foreach ($ids as $id) {
        RebindOfferDnsJob::dispatch((int) $id, NEW_IP)
            ->delay(now()->addSeconds(REBIND_BASE_DELAY_SEC + ($r * REBIND_DELAY_SEC)))
            ->onQueue('deploy');
        $r++;
    }
    echo 'queued rebind → '.NEW_IP.': '.$r
        .' (start +'.REBIND_BASE_DELAY_SEC.'s, then +'.REBIND_DELAY_SEC."s each)\n";
    echo 'deploy queue now: '.DB::table('jobs')->where('queue', 'deploy')->count().PHP_EOL;
    echo 'tracked ids: '.count(loadMigrationIds()).PHP_EOL;
    exit(0);
}

if ($cmd === 'status') {
    $ids = loadMigrationIds();
    if ($ids === []) {
        $ids = liveOffers()->pluck('id')->map(fn ($id) => (int) $id)->all();
    }
    $tracked = Offer::query()->whereIn('id', $ids)->get([
        'id', 'status', 'deploy_panel_name', 'infra_meta', 'availability_status', 'deploy_error', 'template',
    ]);
    $onNew = $tracked->filter(fn (Offer $o) => offerHost($o) === NEW_IP)->count();
    $onOld = $tracked->filter(fn (Offer $o) => offerHost($o) === OLD_IP)->count();
    echo 'tracked: '.count($ids).PHP_EOL;
    echo 'on '.NEW_IP.': '.$onNew.PHP_EOL;
    echo 'on '.OLD_IP.': '.$onOld.PHP_EOL;
    echo 'status deployed='.$tracked->where('status', 'deployed')->count()
        .' deploying='.$tracked->where('status', 'deploying')->count()
        .' failed='.$tracked->whereIn('status', ['failed', 'deploy_failed'])->count()
        .PHP_EOL;
    echo 'avail ok='.$tracked->where('availability_status', 'ok')->count()
        .' down='.$tracked->where('availability_status', 'down')->count()
        .PHP_EOL;
    echo 'deploy queue: '.DB::table('jobs')->where('queue', 'deploy')->count().PHP_EOL;
    echo 'failed_jobs: '.DB::table('failed_jobs')->count().PHP_EOL;

    $err = Offer::query()->whereIn('id', $ids)
        ->whereNotNull('deploy_error')
        ->where('deploy_error', '!=', '')
        ->selectRaw('left(deploy_error, 120) as e, count(*) c')
        ->groupBy('e')
        ->orderByDesc('c')
        ->limit(8)
        ->get();
    if ($err->isNotEmpty()) {
        echo "=== deploy_error tops ===\n";
        foreach ($err as $row) {
            echo $row->c."\t".$row->e."\n";
        }
    }
    exit(0);
}

if ($cmd === 'cleanup-old') {
    $still = staleOffers()->count();
    if ($still > 0) {
        fwrite(STDERR, "Abort cleanup: {$still} offers still on ".OLD_IP.PHP_EOL);
        exit(1);
    }
    $deleted = OriginServer::query()->where('host', OLD_IP)->delete();
    echo "deleted origin_servers rows for ".OLD_IP.": {$deleted}".PHP_EOL;
    exit(0);
}

fwrite(STDERR, "Unknown command: {$cmd}\n");
exit(1);
