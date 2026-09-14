<?php

/**
 * Move last N EGO offers from 91.224.92.30 → 185.169.4.11
 *
 *   php scripts/migrate-ego-30-to-185.php count
 *   php scripts/migrate-ego-30-to-185.php point-settings
 *   php scripts/migrate-ego-30-to-185.php select
 *   php scripts/migrate-ego-30-to-185.php redeploy
 *   php scripts/migrate-ego-30-to-185.php rebind
 *   php scripts/migrate-ego-30-to-185.php status
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
use App\Support\SecretValue;
use Illuminate\Support\Facades\DB;

const OLD_IP = '91.224.92.30';
const NEW_IP = '185.169.4.11';
const USER_ID = 2; // EGO
const LIMIT = 197;
const ID_FILE = __DIR__.'/../storage/app/migrate-ego-30-to-185-ids.json';
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

function offersOnOld()
{
    return Offer::query()
        ->where('user_id', USER_ID)
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->orderByDesc('id')
        ->get(['id', 'domain', 'status', 'created_at', 'deploy_panel_name', 'infra_meta'])
        ->filter(fn (Offer $o) => offerHost($o) === OLD_IP)
        ->values();
}

function newHostPassword(): string
{
    $server = OriginServer::query()->where('host', NEW_IP)->first();
    if ($server && filled($server->password)) {
        return SecretValue::normalize((string) $server->password);
    }

    throw new RuntimeException('No password for '.NEW_IP.' in origin_servers');
}

$cmd = $argv[1] ?? 'count';

if ($cmd === 'count') {
    $onOld = offersOnOld();
    $onNew = Offer::query()
        ->where('user_id', USER_ID)
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->get(['infra_meta', 'deploy_panel_name'])
        ->filter(fn (Offer $o) => offerHost($o) === NEW_IP)
        ->count();
    $settings = User::query()->find(USER_ID)?->settings;
    echo 'settings.deploy_host='.($settings->deploy_host ?? '').PHP_EOL;
    echo 'EGO on '.OLD_IP.': '.$onOld->count().PHP_EOL;
    echo 'EGO on '.NEW_IP.': '.$onNew.PHP_EOL;
    echo 'will select last '.LIMIT.' by id desc from '.OLD_IP.PHP_EOL;
    exit(0);
}

if ($cmd === 'select') {
    $picked = offersOnOld()->take(LIMIT);
    $ids = $picked->pluck('id')->all();
    saveMigrationIds($ids);
    echo 'selected: '.count($ids).PHP_EOL;
    if ($picked->isNotEmpty()) {
        echo 'newest id='.$picked->first()->id.' '.$picked->first()->domain.' '.$picked->first()->created_at.PHP_EOL;
        echo 'oldest id='.$picked->last()->id.' '.$picked->last()->domain.' '.$picked->last()->created_at.PHP_EOL;
    }
    exit(0);
}

if ($cmd === 'point-settings') {
    $user = User::query()->with('settings')->findOrFail(USER_ID);
    $settings = $user->settings;
    $pass = newHostPassword();

    $settings->forceFill([
        'deploy_host' => NEW_IP,
        'deploy_port' => 22,
        'deploy_username' => 'root',
        'deploy_password' => $pass,
        'deploy_panel_name' => NEW_IP,
    ])->save();

    $server = OriginServer::query()->firstOrNew(['host' => NEW_IP]);
    $server->fill([
        'port' => 22,
        'username' => 'root',
        'password' => $pass,
        'label' => $server->label ?: ('EGO '.$NEW_IP),
        'deploy_driver' => DeployDriver::UBUNTU,
        'deploy_path_template' => DeployDriver::UBUNTU_PATH,
        'is_active' => true,
        'alerts_enabled' => true,
        'owner_user_id' => USER_ID,
    ]);
    $server->save();

    echo 'settings → '.NEW_IP.PHP_EOL;
    echo 'origin #'.$server->id.' owner=EGO'.PHP_EOL;
    exit(0);
}

if ($cmd === 'status') {
    $ids = loadMigrationIds();
    $tracked = Offer::query()->whereIn('id', $ids)->get(['id', 'status', 'deploy_panel_name', 'infra_meta']);
    $onNew = $tracked->filter(fn (Offer $o) => offerHost($o) === NEW_IP)->count();
    $onOld = $tracked->filter(fn (Offer $o) => offerHost($o) === OLD_IP)->count();
    $deploying = $tracked->where('status', 'deploying')->count();
    $failed = $tracked->filter(fn (Offer $o) => in_array($o->status, ['failed', 'deploy_failed'], true))->count();
    $queue = DB::table('jobs')->where('queue', 'deploy')->count();
    echo 'tracked: '.count($ids).PHP_EOL;
    echo 'tracked on '.NEW_IP.': '.$onNew.PHP_EOL;
    echo 'tracked still on '.OLD_IP.': '.$onOld.PHP_EOL;
    echo 'deploying: '.$deploying.PHP_EOL;
    echo 'failed: '.$failed.PHP_EOL;
    echo 'deploy queue: '.$queue.PHP_EOL;
    exit(0);
}

if ($cmd === 'redeploy') {
    $settings = User::query()->find(USER_ID)?->settings;
    if (trim((string) ($settings->deploy_host ?? '')) !== NEW_IP) {
        fwrite(STDERR, 'Abort: deploy_host is ['.($settings->deploy_host ?? '').'], expected '.NEW_IP.PHP_EOL);
        exit(1);
    }

    $ids = loadMigrationIds();
    if ($ids === []) {
        fwrite(STDERR, "No ids. Run select first.\n");
        exit(1);
    }

    $n = 0;
    foreach ($ids as $id) {
        DeployOfferJob::dispatch((int) $id)->onQueue('deploy');
        $n++;
    }
    echo "queued redeploy: {$n}".PHP_EOL;
    exit(0);
}

if ($cmd === 'rebind') {
    $ids = loadMigrationIds();
    if ($ids === []) {
        fwrite(STDERR, "No ids. Run select first.\n");
        exit(1);
    }

    $n = 0;
    foreach ($ids as $id) {
        RebindOfferDnsJob::dispatch((int) $id, NEW_IP)
            ->delay(now()->addSeconds($n * REBIND_DELAY_SEC))
            ->onQueue('deploy');
        $n++;
    }
    echo 'queued throttled rebind → '.NEW_IP.': '.$n.' (delay '.REBIND_DELAY_SEC."s each)\n";
    exit(0);
}

fwrite(STDERR, "Unknown command: {$cmd}\n");
exit(1);
