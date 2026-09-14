<?php

/**
 * Migrate JEL (user 3) offers 141.98.10.132 → 141.98.10.61
 *
 *   php scripts/migrate-jel-origin.php count
 *   php scripts/migrate-jel-origin.php point-settings
 *   php scripts/migrate-jel-origin.php redeploy
 *   php scripts/migrate-jel-origin.php rebind
 *   php scripts/migrate-jel-origin.php status
 *   php scripts/migrate-jel-origin.php cleanup-old
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

const OLD_IP = '141.98.10.132';
const NEW_IP = '141.98.10.61';
const USER_ID = 3;
const ROOT_PASS = 'VT8iN_';
const ID_FILE = __DIR__.'/../storage/app/migrate-jel-132-to-61-ids.json';
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

    $settings->forceFill([
        'deploy_host' => NEW_IP,
        'deploy_port' => 22,
        'deploy_username' => 'root',
        'deploy_password' => ROOT_PASS,
        'deploy_panel_name' => NEW_IP,
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
        $ids = Offer::query()
            ->where('user_id', USER_ID)
            ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
            ->pluck('id')
            ->all();
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
