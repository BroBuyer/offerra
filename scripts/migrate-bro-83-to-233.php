<?php

/**
 * Migrate Admin/BRO offers 91.224.92.83 → 62.60.130.233 (same machine, new IP).
 * Files already on NEW — retarget meta + update settings + rebind CF A.
 *
 *   php scripts/migrate-bro-83-to-233.php count|prepare-origin|select|retarget|rebind|status
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

const OLD_IP = '91.224.92.83';
const NEW_IP = '62.60.130.233';
const USER_ID = 1; // Admin / BRO
const ID_FILE = __DIR__.'/../storage/app/migrate-bro-83-to-233-ids.json';
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
    echo 'Admin settings.deploy_host='.($settings->deploy_host ?? '').PHP_EOL;
    echo 'origin host='.($srv->host ?? 'MISSING').' label='.($srv->label ?? '').PHP_EOL;
    echo 'offers on '.OLD_IP.': '.$onOld->count().PHP_EOL;
    echo 'offers on '.NEW_IP.': '.$onNew.PHP_EOL;
    exit(0);
}

if ($cmd === 'prepare-origin') {
    $old = OriginServer::query()->where('host', OLD_IP)->first();
    $srv = OriginServer::query()->where('host', NEW_IP)->first();

    if ($srv === null && $old !== null) {
        $old->host = NEW_IP;
        $old->label = 'BRO '.NEW_IP;
        $old->is_active = true;
        $old->owner_user_id = USER_ID;
        $old->save();
        $srv = $old;
        echo "renamed origin #{$srv->id} host → ".NEW_IP.PHP_EOL;
    } elseif ($srv !== null) {
        $pass = filled($srv->password)
            ? SecretValue::normalize((string) $srv->password)
            : ($old && filled($old->password) ? SecretValue::normalize((string) $old->password) : '');
        $srv->fill([
            'port' => (int) ($srv->port ?: ($old->port ?? 22)),
            'username' => trim((string) ($srv->username ?: ($old->username ?? 'root'))) ?: 'root',
            'label' => 'BRO '.NEW_IP,
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
        fwrite(STDERR, "No origin_servers row for OLD or NEW.\n");
        exit(1);
    }

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
    saveMigrationIds($picked->pluck('id')->all());
    echo 'selected: '.$picked->count().PHP_EOL;
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
        unset($meta['dns_error']);
        $offer->update([
            'infra_meta' => $meta,
            'deploy_panel_name' => NEW_IP,
        ]);
        $n++;
    }
    echo 'retargeted → '.NEW_IP.': '.$n.PHP_EOL;
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
    echo 'queued rebind → '.NEW_IP.': '.$n.' (delay '.REBIND_DELAY_SEC."s, ~".round($n * REBIND_DELAY_SEC / 60)." min)\n";
    exit(0);
}

if ($cmd === 'status') {
    $ids = loadMigrationIds();
    $tracked = Offer::query()->whereIn('id', $ids)->get(['infra_meta', 'deploy_panel_name', 'availability_status']);
    $onNew = $tracked->filter(fn (Offer $o) => offerHost($o) === NEW_IP)->count();
    $onOld = $tracked->filter(fn (Offer $o) => offerHost($o) === OLD_IP)->count();
    $settings = User::query()->find(USER_ID)?->settings;
    echo 'Admin settings.deploy_host='.($settings->deploy_host ?? '').PHP_EOL;
    echo 'tracked: '.count($ids).' on_new='.$onNew.' on_old='.$onOld.PHP_EOL;
    echo 'avail ok='.$tracked->where('availability_status', 'ok')->count().' down='.$tracked->where('availability_status', 'down')->count().PHP_EOL;
    echo 'deploy queue: '.DB::table('jobs')->where('queue', 'deploy')->count().PHP_EOL;
    exit(0);
}

fwrite(STDERR, "Unknown command: {$cmd}\n");
exit(1);
