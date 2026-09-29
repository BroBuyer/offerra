<?php

/**
 * Migrate REMAINING offers still on 141.98.11.11 → 62.60.130.210
 * (excludes ids already in migrate-111-to-28 batch).
 *
 *   php scripts/migrate-111-to-210.php count|select|reactivate|retarget|redeploy|rebind|status
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Jobs\DeployOfferJob;
use App\Jobs\RebindOfferDnsJob;
use App\Models\Offer;
use App\Models\OriginServer;
use App\Support\DeployDriver;
use App\Support\SecretValue;
use Illuminate\Support\Facades\DB;

const OLD_IP = '141.98.11.11';
const NEW_IP = '62.60.130.210';
const EXCLUDE_FILE = __DIR__.'/../storage/app/migrate-111-to-28-ids.json';
const ID_FILE = __DIR__.'/../storage/app/migrate-111-to-210-ids.json';
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

function excludeIds(): array
{
    if (! is_file(EXCLUDE_FILE)) {
        return [];
    }
    $decoded = json_decode((string) file_get_contents(EXCLUDE_FILE), true);

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

function offersOnOldRemaining()
{
    $exclude = array_fill_keys(excludeIds(), true);

    return Offer::query()
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->orderByDesc('id')
        ->get(['id', 'domain', 'status', 'user_id', 'deploy_panel_name', 'infra_meta', 'availability_status'])
        ->filter(fn (Offer $o) => offerHost($o) === OLD_IP && ! isset($exclude[$o->id]))
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
    $onOld = offersOnOldRemaining();
    $onNew = Offer::query()
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->get(['infra_meta', 'deploy_panel_name'])
        ->filter(fn (Offer $o) => offerHost($o) === NEW_IP)
        ->count();
    $newSrv = OriginServer::query()->where('host', NEW_IP)->first();
    $oldSrv = OriginServer::query()->where('host', OLD_IP)->first();

    echo 'remaining on '.OLD_IP.' (excl 28-batch): '.$onOld->count().PHP_EOL;
    echo 'offers already on '.NEW_IP.': '.$onNew.PHP_EOL;
    echo 'exclude batch size: '.count(excludeIds()).PHP_EOL;
    echo 'by user: '.json_encode($onOld->groupBy('user_id')->map->count()->all()).PHP_EOL;
    echo 'NEW: '.(
        $newSrv
            ? '#'.$newSrv->id.' label='.($newSrv->label ?? '').' active='.(int) $newSrv->is_active.' ssh='.($newSrv->hasSshCredentials() ? 'yes' : 'no')
            : 'MISSING'
    ).PHP_EOL;
    echo 'OLD: '.(
        $oldSrv
            ? '#'.$oldSrv->id.' label='.($oldSrv->label ?? '').' active='.(int) $oldSrv->is_active
            : 'MISSING'
    ).PHP_EOL;

    if ($newSrv && filled($newSrv->password)) {
        putenv('SSHPASS='.SecretValue::normalize((string) $newSrv->password));
        passthru(
            'sshpass -e ssh -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null -o ConnectTimeout=12 '
            .'root@'.escapeshellarg(NEW_IP).' '
            .escapeshellarg('echo NEW_OK; hostname; head -n2 /etc/os-release; uptime; df -h / | tail -1; systemctl is-active nginx php8.1-fpm 2>/dev/null; ls -1 /var/www/offers 2>/dev/null | wc -l')
        );
    }
    exit(0);
}

if ($cmd === 'reactivate') {
    $srv = newHostServer();
    $srv->fill([
        'is_active' => true,
        'alerts_enabled' => true,
        'deploy_driver' => $srv->deploy_driver ?: DeployDriver::UBUNTU,
        'deploy_path_template' => $srv->deploy_path_template ?: DeployDriver::UBUNTU_PATH,
        'label' => $srv->label && ! str_contains((string) $srv->label, 'Vacant')
            ? $srv->label
            : ('EGO_4 '.NEW_IP),
    ]);
    // Keep existing owner if set; otherwise EGO user 2
    if (! $srv->owner_user_id) {
        $srv->owner_user_id = 2;
    }
    $srv->save();
    echo 'reactivated #'.$srv->id.' label='.$srv->label.' owner='.$srv->owner_user_id.' active=1'.PHP_EOL;
    exit(0);
}

if ($cmd === 'select') {
    $picked = offersOnOldRemaining();
    saveMigrationIds($picked->pluck('id')->all());
    echo 'selected: '.$picked->count().PHP_EOL;
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
    $failed = $tracked->whereIn('status', ['deploy_failed', 'failed'])->count();
    $down = $tracked->where('availability_status', 'down')->count();
    $ok = $tracked->where('availability_status', 'ok')->count();
    $pending = (int) DB::table('jobs')->where('queue', 'deploy')->count();

    echo 'tracked='.count($ids)." on_new={$onNew} on_old={$onOld} deployed={$deployed} deploying={$deploying} failed={$failed} ok={$ok} down={$down}\n";
    echo "queue_deploy={$pending}\n";

    $newSrv = OriginServer::query()->where('host', NEW_IP)->first();
    if ($newSrv && filled($newSrv->password)) {
        putenv('SSHPASS='.SecretValue::normalize((string) $newSrv->password));
        passthru(
            'sshpass -e ssh -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null -o ConnectTimeout=10 '
            .'root@'.escapeshellarg(NEW_IP).' '
            .escapeshellarg('echo SITES=$(ls -1 /var/www/offers 2>/dev/null | grep -vE "^_|smoke|offerra" | wc -l); df -h / | tail -1')
        );
    }
    exit(0);
}

fwrite(STDERR, "Unknown cmd. Use: count|select|reactivate|retarget|redeploy|rebind|status\n");
exit(1);
