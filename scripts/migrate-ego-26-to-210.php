<?php

/**
 * Migrate latest 70 EGO offers 176.123.6.26 → 62.60.130.210
 * Creds for NEW taken from origin_servers (same as prior EGO .210 migrations).
 *
 *   php scripts/migrate-ego-26-to-210.php count
 *   php scripts/migrate-ego-26-to-210.php select
 *   php scripts/migrate-ego-26-to-210.php point-settings
 *   php scripts/migrate-ego-26-to-210.php retarget
 *   php scripts/migrate-ego-26-to-210.php redeploy
 *   php scripts/migrate-ego-26-to-210.php rebind
 *   php scripts/migrate-ego-26-to-210.php status
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

const OLD_IP = '176.123.6.26';
const NEW_IP = '62.60.130.210';
const USER_ID = 2; // EGO
const LIMIT = 70;
const ID_FILE = __DIR__.'/../storage/app/migrate-ego-26-to-210-ids.json';
const REBIND_DELAY_SEC = 3;

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
        ->get(['id', 'domain', 'status', 'created_at', 'deploy_panel_name', 'infra_meta', 'availability_status'])
        ->filter(fn (Offer $o) => offerHost($o) === OLD_IP)
        ->values();
}

function newHostPassword(): string
{
    $server = OriginServer::query()->where('host', NEW_IP)->first();
    if ($server && filled($server->password)) {
        return SecretValue::normalize((string) $server->password);
    }

    // Fallback: EGO settings if already pointed at NEW earlier
    $settings = User::query()->find(USER_ID)?->settings;
    if ($settings && trim((string) $settings->deploy_host) === NEW_IP && filled($settings->deploy_password)) {
        return SecretValue::normalize((string) $settings->deploy_password);
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
    $newSrv = OriginServer::query()->where('host', NEW_IP)->first();
    $oldSrv = OriginServer::query()->where('host', OLD_IP)->first();

    echo 'EGO settings.deploy_host='.($settings->deploy_host ?? '').PHP_EOL;
    echo 'EGO on '.OLD_IP.': '.$onOld->count().PHP_EOL;
    echo 'EGO on '.NEW_IP.': '.$onNew.PHP_EOL;
    echo 'will pick newest: '.min(LIMIT, $onOld->count()).PHP_EOL;
    echo 'NEW origin: '.(
        $newSrv
            ? '#'.$newSrv->id.' label='.($newSrv->label ?? '').' active='.((int) $newSrv->is_active).' ssh='.($newSrv->hasSshCredentials() ? 'yes' : 'no').' user='.($newSrv->username ?? '')
            : 'MISSING'
    ).PHP_EOL;
    echo 'OLD origin: '.(
        $oldSrv
            ? '#'.$oldSrv->id.' label='.($oldSrv->label ?? '').' active='.((int) $oldSrv->is_active)
            : 'MISSING'
    ).PHP_EOL;
    exit(0);
}

if ($cmd === 'select') {
    $picked = offersOnOld()->take(LIMIT)->values();
    $ids = $picked->pluck('id')->all();
    saveMigrationIds($ids);
    echo 'selected: '.count($ids).' (limit '.LIMIT.')'.PHP_EOL;
    if ($picked->isNotEmpty()) {
        echo 'newest id='.$picked->first()->id.' '.$picked->first()->domain.PHP_EOL;
        echo 'oldest id='.$picked->last()->id.' '.$picked->last()->domain.PHP_EOL;
    }
    exit(0);
}

if ($cmd === 'point-settings') {
    $user = User::query()->with('settings')->findOrFail(USER_ID);
    $settings = $user->settings;
    $pass = newHostPassword();
    $newSrv = OriginServer::query()->where('host', NEW_IP)->first();
    $port = (int) ($newSrv->port ?? 22) ?: 22;
    $username = trim((string) ($newSrv->username ?? 'root')) ?: 'root';

    $settings->forceFill([
        'deploy_host' => NEW_IP,
        'deploy_port' => $port,
        'deploy_username' => $username,
        'deploy_password' => $pass,
        'deploy_panel_name' => NEW_IP,
    ])->save();

    if ($newSrv) {
        $newSrv->fill([
            'is_active' => true,
            'alerts_enabled' => true,
            'owner_user_id' => USER_ID,
            'label' => $newSrv->label ?: ('EGO '.NEW_IP),
            'deploy_driver' => $newSrv->deploy_driver ?: DeployDriver::UBUNTU,
            'deploy_path_template' => $newSrv->deploy_path_template ?: DeployDriver::UBUNTU_PATH,
        ]);
        if (! filled($newSrv->password)) {
            $newSrv->password = $pass;
        }
        $newSrv->save();
    }

    echo 'settings → '.NEW_IP.' user='.$username.' port='.$port.PHP_EOL;
    echo 'origin #'.($newSrv->id ?? '?').' label='.($newSrv->label ?? '').PHP_EOL;
    exit(0);
}

if ($cmd === 'retarget') {
    $ids = loadMigrationIds();
    if ($ids === []) {
        fwrite(STDERR, "No ids. Run select first.\n");
        exit(1);
    }

    $n = 0;
    foreach (Offer::query()->whereIn('id', $ids)->get() as $offer) {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $meta['deploy_host'] = NEW_IP;
        $offer->update([
            'infra_meta' => $meta,
            'deploy_panel_name' => NEW_IP,
        ]);
        $n++;
    }
    echo 'retargeted meta/panel → '.NEW_IP.': '.$n.PHP_EOL;
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

if ($cmd === 'status') {
    $ids = loadMigrationIds();
    $tracked = Offer::query()->whereIn('id', $ids)->get(['id', 'status', 'deploy_panel_name', 'infra_meta', 'availability_status']);
    $onNew = $tracked->filter(fn (Offer $o) => offerHost($o) === NEW_IP)->count();
    $onOld = $tracked->filter(fn (Offer $o) => offerHost($o) === OLD_IP)->count();
    $deploying = $tracked->where('status', 'deploying')->count();
    $deployed = $tracked->where('status', 'deployed')->count();
    $failed = $tracked->filter(fn (Offer $o) => in_array($o->status, ['failed', 'deploy_failed'], true))->count();
    $availOk = $tracked->where('availability_status', 'ok')->count();
    $availDown = $tracked->where('availability_status', 'down')->count();
    $queue = DB::table('jobs')->where('queue', 'deploy')->count();
    $settings = User::query()->find(USER_ID)?->settings;
    echo 'EGO settings.deploy_host='.($settings->deploy_host ?? '').PHP_EOL;
    echo 'tracked: '.count($ids).PHP_EOL;
    echo 'tracked on '.NEW_IP.': '.$onNew.PHP_EOL;
    echo 'tracked still on '.OLD_IP.': '.$onOld.PHP_EOL;
    echo "deployed={$deployed} deploying={$deploying} failed={$failed}".PHP_EOL;
    echo "avail ok={$availOk} down={$availDown}".PHP_EOL;
    echo 'deploy queue: '.$queue.PHP_EOL;
    exit(0);
}

fwrite(STDERR, "Unknown command: {$cmd}\n");
exit(1);
