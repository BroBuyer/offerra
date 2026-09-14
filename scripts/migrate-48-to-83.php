<?php

/**
 * Migrate all offers 176.123.6.48 → 91.224.92.83
 *
 *   php scripts/migrate-48-to-83.php count
 *   php scripts/migrate-48-to-83.php point-settings
 *   php scripts/migrate-48-to-83.php redeploy
 *   php scripts/migrate-48-to-83.php rebind
 *   php scripts/migrate-48-to-83.php status
 *   php scripts/migrate-48-to-83.php failed
 *   php scripts/migrate-48-to-83.php cleanup-old
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

const OLD_IP = '176.123.6.48';
const NEW_IP = '91.224.92.83';
const ID_FILE = __DIR__.'/../storage/app/migrate-48-to-83-ids.json';
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

function offersOn(string $ip)
{
    return Offer::query()
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->orderBy('id')
        ->get(['id', 'user_id', 'domain', 'status', 'deploy_panel_name', 'infra_meta', 'deploy_error'])
        ->filter(fn (Offer $o) => offerHost($o) === $ip)
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
    $onOld = offersOn(OLD_IP);
    $onNew = offersOn(NEW_IP);
    echo 'offers on '.OLD_IP.': '.$onOld->count().PHP_EOL;
    echo 'offers on '.NEW_IP.': '.$onNew->count().PHP_EOL;
    foreach ($onOld->groupBy('user_id') as $uid => $group) {
        $user = User::query()->with('settings')->find($uid);
        echo 'user='.$uid.' name='.($user->name ?? '?').' count='.$group->count()
            .' settings_host='.($user?->settings?->deploy_host ?? '').PHP_EOL;
    }
    $new = OriginServer::query()->where('host', NEW_IP)->first();
    $old = OriginServer::query()->where('host', OLD_IP)->first();
    echo 'new_origin='.($new ? ('id='.$new->id.' active='.(int) $new->is_active.' owner='.$new->owner_user_id.' health='.$new->health_status.' ssh='.($new->hasSshCredentials() ? 'yes' : 'no')) : 'MISSING').PHP_EOL;
    echo 'old_origin='.($old ? ('id='.$old->id.' active='.(int) $old->is_active.' owner='.$old->owner_user_id.' health='.$old->health_status) : 'MISSING').PHP_EOL;
    exit(0);
}

if ($cmd === 'point-settings') {
    $onOld = offersOn(OLD_IP);
    if ($onOld->isEmpty()) {
        fwrite(STDERR, "No active offers on ".OLD_IP.PHP_EOL);
        exit(1);
    }

    $pass = newHostPassword();
    $userIds = $onOld->pluck('user_id')->unique()->values();
    $primaryUserId = (int) $userIds->sort()->first();

    foreach ($userIds as $uid) {
        $user = User::query()->with('settings')->findOrFail($uid);
        $settings = $user->settings;
        if (! $settings) {
            fwrite(STDERR, "No settings for user {$uid}\n");
            exit(1);
        }
        $settings->forceFill([
            'deploy_host' => NEW_IP,
            'deploy_port' => 22,
            'deploy_username' => 'root',
            'deploy_password' => $pass,
            'deploy_panel_name' => NEW_IP,
        ])->save();
        echo "user {$uid} settings → ".NEW_IP.PHP_EOL;
    }

    $server = OriginServer::query()->firstOrNew(['host' => NEW_IP]);
    $server->fill([
        'port' => 22,
        'username' => 'root',
        'password' => $pass,
        'label' => $server->label ?: ('Admin '.NEW_IP),
        'deploy_driver' => DeployDriver::UBUNTU,
        'deploy_path_template' => DeployDriver::UBUNTU_PATH,
        'is_active' => true,
        'alerts_enabled' => true,
        'owner_user_id' => $primaryUserId,
    ]);
    $server->save();

    echo 'origin_servers id='.$server->id.' owner='.$primaryUserId.' has_ssh='.($server->fresh()->hasSshCredentials() ? 'yes' : 'no').PHP_EOL;
    exit(0);
}

if ($cmd === 'status') {
    $ids = loadMigrationIds();
    $tracked = $ids === []
        ? offersOn(OLD_IP)->merge(offersOn(NEW_IP))
        : Offer::query()->whereIn('id', $ids)->get(['id', 'user_id', 'domain', 'status', 'deploy_panel_name', 'infra_meta', 'deploy_error']);

    $onNew = $tracked->filter(fn (Offer $o) => offerHost($o) === NEW_IP)->count();
    $onOld = $tracked->filter(fn (Offer $o) => offerHost($o) === OLD_IP)->count();
    $deploying = $tracked->where('status', 'deploying')->count();
    $failed = $tracked->filter(fn (Offer $o) => in_array($o->status, ['failed', 'deploy_failed'], true))->count();
    $queue = DB::table('jobs')->where('queue', 'deploy')->count();
    echo 'tracked: '.($ids === [] ? 'n/a' : count($ids)).PHP_EOL;
    echo 'still on '.OLD_IP.': '.$onOld.PHP_EOL;
    echo 'on '.NEW_IP.': '.$onNew.PHP_EOL;
    echo 'deploying: '.$deploying.PHP_EOL;
    echo 'failed: '.$failed.PHP_EOL;
    echo 'deploy queue: '.$queue.PHP_EOL;
    exit(0);
}

if ($cmd === 'redeploy') {
    $users = offersOn(OLD_IP)->pluck('user_id')->unique();
    foreach ($users as $uid) {
        $settings = User::query()->find($uid)?->settings;
        if (trim((string) ($settings->deploy_host ?? '')) !== NEW_IP) {
            fwrite(STDERR, "Abort: user {$uid} deploy_host is [".($settings->deploy_host ?? '').'], expected '.NEW_IP.PHP_EOL);
            exit(1);
        }
    }

    $offers = offersOn(OLD_IP);
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
        $ids = offersOn(OLD_IP)->pluck('id')->all();
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

if ($cmd === 'failed') {
    $ids = loadMigrationIds();
    $offers = Offer::query()->whereIn('id', $ids)->get(['id', 'domain', 'status', 'deploy_error', 'infra_meta']);
    $byStatus = $offers->groupBy('status')->map->count();
    foreach ($byStatus as $status => $count) {
        echo $status.': '.$count.PHP_EOL;
    }
    $dnsErr = 0;
    foreach ($offers as $offer) {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $err = trim((string) ($offer->deploy_error ?? $meta['error'] ?? $meta['dns_error'] ?? ''));
        if ($err === '' && ! in_array($offer->status, ['failed', 'deploy_failed'], true)) {
            continue;
        }
        if (isset($meta['dns_error']) && trim((string) $meta['dns_error']) !== '') {
            $dnsErr++;
        }
        echo '#'.$offer->id.' '.$offer->domain.' ['.$offer->status.'] '.substr($err, 0, 160).PHP_EOL;
    }
    echo 'dns_error_count='.$dnsErr.PHP_EOL;
    exit(0);
}

if ($cmd === 'retry-dns') {
    $ids = loadMigrationIds();
    if ($ids === []) {
        fwrite(STDERR, "No tracked ids.\n");
        exit(1);
    }

    $delay = max(REBIND_DELAY_SEC, (int) ($argv[2] ?? 5));
    $offers = Offer::query()->whereIn('id', $ids)->get(['id', 'domain', 'infra_meta']);
    $retry = $offers->filter(function (Offer $offer) {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];

        return trim((string) ($meta['dns_error'] ?? '')) !== '';
    })->values();

    $n = 0;
    foreach ($retry as $offer) {
        RebindOfferDnsJob::dispatch((int) $offer->id, NEW_IP)
            ->delay(now()->addSeconds($n * $delay))
            ->onQueue('deploy');
        $n++;
    }
    echo 'queued dns retry → '.NEW_IP.': '.$n.' (delay '.$delay."s each)\n";
    exit(0);
}

if ($cmd === 'cleanup-old') {
    $still = offersOn(OLD_IP)->count();
    if ($still > 0) {
        fwrite(STDERR, "Abort cleanup: {$still} offers still on ".OLD_IP.PHP_EOL);
        exit(1);
    }
    OriginServer::query()->where('host', OLD_IP)->update(['is_active' => false]);
    echo 'deactivated origin '.OLD_IP.PHP_EOL;
    exit(0);
}

fwrite(STDERR, "Unknown command: {$cmd}\n");
exit(1);
