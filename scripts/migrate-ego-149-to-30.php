<?php

/**
 * Migrate EGO (user 2) offers 176.123.6.149 → 91.224.92.30
 *
 *   php scripts/migrate-ego-149-to-30.php count
 *   php scripts/migrate-ego-149-to-30.php point-settings
 *   php scripts/migrate-ego-149-to-30.php redeploy
 *   php scripts/migrate-ego-149-to-30.php rebind
 *   php scripts/migrate-ego-149-to-30.php status
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

const OLD_IP = '176.123.6.149';
const NEW_IP = '91.224.92.30';
const USER_ID = 2;
const ID_FILE = __DIR__.'/../storage/app/migrate-ego-149-to-30-ids.json';
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
        ->filter(fn (Offer $o) => offerHost($o) === OLD_IP || offerHost($o) === '');
}

function newHostPassword(): string
{
    $passFile = storage_path('app/_ego30_pass.txt');
    if (is_file($passFile)) {
        $p = SecretValue::normalize((string) file_get_contents($passFile));
        if ($p !== '') {
            return $p;
        }
    }

    $server = OriginServer::query()->where('host', NEW_IP)->first();
    if ($server && filled($server->password)) {
        return SecretValue::normalize((string) $server->password);
    }

    throw new RuntimeException('No password for '.NEW_IP);
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

if ($cmd === 'point-settings') {
    $user = User::query()->with('settings')->findOrFail(USER_ID);
    $settings = $user->settings;
    if (! $settings) {
        fwrite(STDERR, "No settings for user ".USER_ID.PHP_EOL);
        exit(1);
    }

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
        'label' => NEW_IP,
        'deploy_driver' => DeployDriver::UBUNTU,
        'deploy_path_template' => DeployDriver::UBUNTU_PATH,
        'is_active' => true,
        'alerts_enabled' => true,
        'owner_user_id' => USER_ID,
    ]);
    $server->save();

    OriginServer::query()->where('host', OLD_IP)->update(['is_active' => false]);

    echo 'settings → '.NEW_IP.PHP_EOL;
    echo 'origin_servers id='.$server->id.' active=yes'.PHP_EOL;
    echo 'old '.OLD_IP.' deactivated'.PHP_EOL;
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
    $failed = Offer::query()->where('user_id', USER_ID)->whereIn('status', ['failed', 'deploy_failed'])->count();
    $queue = DB::table('jobs')->where('queue', 'deploy')->count();
    echo 'still on '.OLD_IP.': '.$stale.PHP_EOL;
    echo 'on '.NEW_IP.': '.$onNew.PHP_EOL;
    echo 'deploying: '.$deploying.PHP_EOL;
    echo 'failed: '.$failed.PHP_EOL;
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
        DeployOfferJob::dispatch($offer->id)->onQueue('deploy');
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
            ->delay(now()->addSeconds($n * REBIND_DELAY_SEC))
            ->onQueue('deploy');
        $n++;
    }
    echo 'queued throttled rebind → '.NEW_IP.': '.$n.' (delay '.REBIND_DELAY_SEC."s each)\n";
    exit(0);
}

if ($cmd === 'rebind-all-ego') {
    // Force CF A for every live EGO offer onto .30 (safe if already there).
    $ids = Offer::query()
        ->where('user_id', USER_ID)
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->orderBy('id')
        ->pluck('id')
        ->all();
    $n = 0;
    foreach ($ids as $id) {
        RebindOfferDnsJob::dispatch((int) $id, NEW_IP)
            ->delay(now()->addSeconds($n * REBIND_DELAY_SEC))
            ->onQueue('deploy');
        $n++;
    }
    echo 'queued throttled rebind-all → '.NEW_IP.': '.$n.' (delay '.REBIND_DELAY_SEC."s each)\n";
    exit(0);
}

fwrite(STDERR, "Unknown command: {$cmd}\n");
exit(1);
