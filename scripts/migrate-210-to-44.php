<?php

/**
 * Migrate ALL offers 62.60.130.210 → 91.224.92.44 (Vacant).
 *
 *   php scripts/migrate-210-to-44.php count|select|point-settings|retarget|redeploy|rebind|status|deactivate-old
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Jobs\DeployOfferJob;
use App\Jobs\RebindOfferDnsJob;
use App\Models\Offer;
use App\Models\OriginServer;
use App\Models\UserSetting;
use App\Support\DeployDriver;
use App\Support\SecretValue;
use Illuminate\Support\Facades\DB;

const OLD_IP = '62.60.130.210';
const NEW_IP = '91.224.92.44';
const ID_FILE = __DIR__.'/../storage/app/migrate-210-to-44-ids.json';
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
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->orderByDesc('id')
        ->get(['id', 'domain', 'status', 'user_id', 'deploy_panel_name', 'infra_meta', 'availability_status'])
        ->filter(fn (Offer $o) => offerHost($o) === OLD_IP)
        ->values();
}

function newHostServer(): OriginServer
{
    $server = OriginServer::query()->where('host', NEW_IP)->first();
    if (! $server || ! filled($server->password)) {
        throw new RuntimeException('No origin_servers row / password for '.NEW_IP);
    }

    return $server;
}

$cmd = $argv[1] ?? 'count';

if ($cmd === 'count') {
    $onOld = offersOnOld();
    $onNew = Offer::query()
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->get(['infra_meta', 'deploy_panel_name'])
        ->filter(fn (Offer $o) => offerHost($o) === NEW_IP)
        ->count();
    $byUser = $onOld->groupBy('user_id')->map->count()->all();
    $settingsOld = UserSetting::query()->where('deploy_host', OLD_IP)->count();
    $newSrv = OriginServer::query()->where('host', NEW_IP)->first();
    $oldSrv = OriginServer::query()->where('host', OLD_IP)->first();

    echo 'offers on '.OLD_IP.': '.$onOld->count().PHP_EOL;
    echo 'offers on '.NEW_IP.': '.$onNew.PHP_EOL;
    echo 'by user_id on OLD: '.json_encode($byUser).PHP_EOL;
    echo 'UserSetting.deploy_host='.OLD_IP.': '.$settingsOld.PHP_EOL;
    echo 'NEW origin: '.(
        $newSrv
            ? '#'.$newSrv->id.' label='.($newSrv->label ?? '').' active='.(int) $newSrv->is_active.' ssh='.($newSrv->hasSshCredentials() ? 'yes' : 'no')
            : 'MISSING'
    ).PHP_EOL;
    echo 'OLD origin: '.(
        $oldSrv
            ? '#'.$oldSrv->id.' label='.($oldSrv->label ?? '').' active='.(int) $oldSrv->is_active
            : 'MISSING'
    ).PHP_EOL;

    if ($newSrv && filled($newSrv->password)) {
        putenv('SSHPASS='.SecretValue::normalize((string) $newSrv->password));
        passthru(
            'sshpass -e ssh -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null -o ConnectTimeout=10 '
            .'root@'.escapeshellarg(NEW_IP).' '
            .escapeshellarg('echo NEW_OK; hostname; uptime; df -h / | tail -1; systemctl is-active nginx php8.1-fpm')
        );
    }
    exit(0);
}

if ($cmd === 'select') {
    $picked = offersOnOld();
    saveMigrationIds($picked->pluck('id')->all());
    echo 'selected: '.$picked->count().PHP_EOL;
    if ($picked->isNotEmpty()) {
        echo 'newest id='.$picked->first()->id.' '.$picked->first()->domain.PHP_EOL;
        echo 'oldest id='.$picked->last()->id.' '.$picked->last()->domain.PHP_EOL;
    }
    exit(0);
}

if ($cmd === 'point-settings') {
    $srv = newHostServer();
    $pass = SecretValue::normalize((string) $srv->password);
    $port = (int) ($srv->port ?: 22);
    $username = trim((string) ($srv->username ?: 'root')) ?: 'root';

    $n = 0;
    foreach (UserSetting::query()->where('deploy_host', OLD_IP)->get() as $settings) {
        $settings->forceFill([
            'deploy_host' => NEW_IP,
            'deploy_panel_name' => NEW_IP,
            'deploy_port' => $port,
            'deploy_username' => $username,
            'deploy_password' => $pass,
        ])->save();
        $n++;
        echo "settings user_id={$settings->user_id} → ".NEW_IP.PHP_EOL;
    }

    $srv->fill([
        'is_active' => true,
        'alerts_enabled' => true,
        'deploy_driver' => $srv->deploy_driver ?: DeployDriver::UBUNTU,
        'deploy_path_template' => $srv->deploy_path_template ?: DeployDriver::UBUNTU_PATH,
        'label' => $srv->label ?: ('Vacant '.NEW_IP),
    ]);
    $srv->save();

    echo "settings updated: {$n}".PHP_EOL;
    echo 'origin #'.$srv->id.' ready'.PHP_EOL;
    exit(0);
}

if ($cmd === 'retarget') {
    $ids = loadMigrationIds();
    if ($ids === []) {
        fwrite(STDERR, "No ids. Run select first.\n");
        exit(1);
    }

    $n = 0;
    foreach (Offer::query()->whereIn('id', $ids)->orderBy('id')->cursor() as $offer) {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $meta['deploy_host'] = NEW_IP;
        $offer->update([
            'infra_meta' => $meta,
            'deploy_panel_name' => NEW_IP,
        ]);
        $n++;
        if ($n % 200 === 0) {
            echo "retargeted {$n}…\n";
        }
    }
    echo 'retargeted meta/panel → '.NEW_IP.': '.$n.PHP_EOL;
    exit(0);
}

if ($cmd === 'redeploy') {
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

    echo 'tracked: '.count($ids).PHP_EOL;
    echo 'tracked on '.NEW_IP.': '.$onNew.PHP_EOL;
    echo 'tracked still on '.OLD_IP.': '.$onOld.PHP_EOL;
    echo "deployed={$deployed} deploying={$deploying} failed={$failed}".PHP_EOL;
    echo "avail ok={$availOk} down={$availDown}".PHP_EOL;
    echo 'deploy queue: '.$queue.PHP_EOL;

    try {
        $srv = newHostServer();
        putenv('SSHPASS='.SecretValue::normalize((string) $srv->password));
        passthru(
            'sshpass -e ssh -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null -o ConnectTimeout=10 '
            .'root@'.escapeshellarg(NEW_IP).' '
            .escapeshellarg('echo SITES=$(ls -1 /var/www/offers 2>/dev/null | wc -l); du -sh /var/www/offers 2>/dev/null; df -h / | tail -1; uptime')
        );
    } catch (Throwable $e) {
        echo 'NEW ssh fail: '.$e->getMessage().PHP_EOL;
    }
    exit(0);
}

if ($cmd === 'deactivate-old') {
    $updated = OriginServer::query()->where('host', OLD_IP)->update(['is_active' => false]);
    echo 'deactivated '.OLD_IP.': '.$updated.PHP_EOL;
    exit(0);
}

fwrite(STDERR, "Unknown command: {$cmd}\n");
exit(1);
