<?php

/**
 * Migrate offers 185.169.4.11 → 62.60.130.210 (same machine, new IP).
 * Files already on NEW — only retarget meta + rebind CF A.
 *
 *   php scripts/migrate-ego-11-to-210.php count
 *   php scripts/migrate-ego-11-to-210.php prepare-origin
 *   php scripts/migrate-ego-11-to-210.php select
 *   php scripts/migrate-ego-11-to-210.php retarget
 *   php scripts/migrate-ego-11-to-210.php rebind
 *   php scripts/migrate-ego-11-to-210.php status
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Jobs\RebindOfferDnsJob;
use App\Models\Offer;
use App\Models\OriginServer;
use App\Models\User;
use App\Models\UserSetting;
use App\Support\DeployDriver;
use App\Support\SecretValue;
use Illuminate\Support\Facades\DB;

const OLD_IP = '185.169.4.11';
const NEW_IP = '62.60.130.210';
const USER_ID = 2; // EGO
const ID_FILE = __DIR__.'/../storage/app/migrate-ego-11-to-210-ids.json';
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
        ->get(['id', 'domain', 'status', 'deploy_panel_name', 'infra_meta', 'availability_status'])
        ->filter(fn (Offer $o) => offerHost($o) === OLD_IP)
        ->values();
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
    $srv = OriginServer::query()->where('host', NEW_IP)->first()
        ?? OriginServer::query()->where('host', OLD_IP)->first();
    echo 'EGO settings.deploy_host='.($settings->deploy_host ?? '').PHP_EOL;
    echo 'origin host='.($srv->host ?? 'MISSING').' label='.($srv->label ?? '').PHP_EOL;
    echo 'offers on '.OLD_IP.': '.$onOld->count().PHP_EOL;
    echo 'offers on '.NEW_IP.': '.$onNew.PHP_EOL;
    echo 'settings rows on OLD: '.UserSetting::query()->where('deploy_host', OLD_IP)->count().PHP_EOL;
    exit(0);
}

if ($cmd === 'prepare-origin') {
    $old = OriginServer::query()->where('host', OLD_IP)->first();
    $srv = OriginServer::query()->where('host', NEW_IP)->first();

    if ($srv === null && $old !== null) {
        $old->host = NEW_IP;
        $old->label = 'EGO '.NEW_IP;
        $old->is_active = true;
        $old->save();
        $srv = $old;
        echo "renamed origin #{$srv->id} host → ".NEW_IP.PHP_EOL;
    } elseif ($srv !== null) {
        $pass = filled($srv->password)
            ? SecretValue::normalize((string) $srv->password)
            : ($old && filled($old->password) ? SecretValue::normalize((string) $old->password) : '');
        if ($pass === '' && $old) {
            $pass = SecretValue::normalize((string) $old->password);
        }
        $srv->fill([
            'port' => (int) ($srv->port ?: ($old->port ?? 22)),
            'username' => trim((string) ($srv->username ?: ($old->username ?? 'root'))) ?: 'root',
            'label' => 'EGO '.NEW_IP,
            'deploy_driver' => $srv->deploy_driver ?: DeployDriver::UBUNTU,
            'deploy_path_template' => $srv->deploy_path_template ?: DeployDriver::UBUNTU_PATH,
            'is_active' => true,
            'alerts_enabled' => true,
            'owner_user_id' => USER_ID,
        ]);
        if ($pass !== '') {
            $srv->password = $pass;
        }
        $srv->save();
        echo "updated origin #{$srv->id} → ".NEW_IP.PHP_EOL;
        if ($old && $old->id !== $srv->id) {
            $old->is_active = false;
            $old->save();
            echo "deactivated old origin #{$old->id}\n";
        }
    } else {
        fwrite(STDERR, "No origin_servers row for OLD or NEW. Add server first.\n");
        exit(1);
    }

    // Any user settings still on OLD → NEW (same creds from origin).
    $updatedSettings = 0;
    foreach (UserSetting::query()->where('deploy_host', OLD_IP)->get() as $settings) {
        $settings->forceFill([
            'deploy_host' => NEW_IP,
            'deploy_panel_name' => NEW_IP,
            'deploy_port' => (int) ($srv->port ?: 22),
            'deploy_username' => trim((string) $srv->username) ?: 'root',
            'deploy_password' => SecretValue::normalize((string) $srv->password),
        ])->save();
        $updatedSettings++;
    }
    echo "settings updated from OLD: {$updatedSettings}\n";
    exit(0);
}

if ($cmd === 'select') {
    $picked = offersOnOld();
    $ids = $picked->pluck('id')->all();
    saveMigrationIds($ids);
    echo 'selected: '.count($ids).PHP_EOL;
    if ($picked->isNotEmpty()) {
        echo 'newest id='.$picked->first()->id.' '.$picked->first()->domain.PHP_EOL;
        echo 'oldest id='.$picked->last()->id.' '.$picked->last()->domain.PHP_EOL;
    }
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
    $availOk = $tracked->where('availability_status', 'ok')->count();
    $availDown = $tracked->where('availability_status', 'down')->count();
    $queue = DB::table('jobs')->where('queue', 'deploy')->count();
    $settings = User::query()->find(USER_ID)?->settings;
    echo 'EGO settings.deploy_host='.($settings->deploy_host ?? '').PHP_EOL;
    echo 'tracked: '.count($ids).PHP_EOL;
    echo 'tracked on '.NEW_IP.': '.$onNew.PHP_EOL;
    echo 'tracked still on '.OLD_IP.': '.$onOld.PHP_EOL;
    echo "avail ok={$availOk} down={$availDown}".PHP_EOL;
    echo 'deploy queue: '.$queue.PHP_EOL;
    exit(0);
}

fwrite(STDERR, "Unknown command: {$cmd}\n");
exit(1);
