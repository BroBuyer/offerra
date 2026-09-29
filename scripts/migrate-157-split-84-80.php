<?php

/**
 * Split ALL non-archived offers from 91.224.92.157
 * evenly onto 84.200.193.136 and 80.96.112.133.
 *
 *   php scripts/migrate-157-split-84-80.php count
 *   php scripts/migrate-157-split-84-80.php select
 *   php scripts/migrate-157-split-84-80.php queue
 *   php scripts/migrate-157-split-84-80.php status
 *   php scripts/migrate-157-split-84-80.php sample-cf
 *   php scripts/migrate-157-split-84-80.php rebind-stale
 *   php scripts/migrate-157-split-84-80.php point-settings
 *   php scripts/migrate-157-split-84-80.php deactivate-old
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Jobs\DeployOfferJob;
use App\Jobs\RebindOfferDnsJob;
use App\Models\Offer;
use App\Models\OriginServer;
use App\Models\UserSetting;
use App\Services\CloudflareClient;
use App\Support\DeployDriver;
use App\Support\SecretValue;
use Illuminate\Support\Facades\DB;

const OLD_IP = '91.224.92.157';
const NEW_A = '84.200.193.136';
const NEW_B = '80.96.112.133';
const MAP_FILE = __DIR__.'/../storage/app/migrate-157-split-84-80-map.json';
const REBIND_DELAY_SEC = 3;
const REBIND_BASE_DELAY = 90;

function hostOf(Offer $o): string
{
    $meta = is_array($o->infra_meta) ? $o->infra_meta : [];
    $h = trim((string) ($meta['deploy_host'] ?? ''));
    if ($h !== '') {
        return $h;
    }
    $p = trim((string) ($o->deploy_panel_name ?? ''));

    return filter_var($p, FILTER_VALIDATE_IP) ? $p : '';
}

function offersOnOld()
{
    return Offer::query()
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->orderBy('id')
        ->get(['id', 'domain', 'status', 'user_id', 'template', 'deploy_panel_name', 'infra_meta', 'availability_status', 'cloudflare_api_token'])
        ->filter(fn (Offer $o) => hostOf($o) === OLD_IP)
        ->values();
}

function saveMap(array $map): void
{
    if (! is_dir(dirname(MAP_FILE))) {
        mkdir(dirname(MAP_FILE), 0775, true);
    }
    file_put_contents(MAP_FILE, json_encode($map, JSON_PRETTY_PRINT));
}

/** @return array<string, list<int>> */
function loadMap(): array
{
    if (! is_file(MAP_FILE)) {
        return [NEW_A => [], NEW_B => []];
    }
    $decoded = json_decode((string) file_get_contents(MAP_FILE), true);
    if (! is_array($decoded)) {
        return [NEW_A => [], NEW_B => []];
    }

    return [
        NEW_A => array_map('intval', $decoded[NEW_A] ?? []),
        NEW_B => array_map('intval', $decoded[NEW_B] ?? []),
    ];
}

function allIds(array $map): array
{
    return array_values(array_unique(array_merge($map[NEW_A] ?? [], $map[NEW_B] ?? [])));
}

function requireOrigin(string $ip): OriginServer
{
    $server = OriginServer::query()->where('host', $ip)->first();
    if (! $server || ! $server->hasSshCredentials()) {
        throw new RuntimeException('OriginServer missing SSH for '.$ip);
    }

    return $server;
}

$cmd = $argv[1] ?? 'count';

if ($cmd === 'count') {
    $onOld = offersOnOld();
    $byUser = $onOld->groupBy('user_id')->map->count()->all();
    $settingsOld = UserSetting::query()->where('deploy_host', OLD_IP)->get(['user_id', 'deploy_host']);

    echo 'offers on '.OLD_IP.': '.$onOld->count().PHP_EOL;
    echo 'by user_id: '.json_encode($byUser).PHP_EOL;
    echo 'UserSetting.deploy_host='.OLD_IP.': '.$settingsOld->count()
        .' users='.json_encode($settingsOld->pluck('user_id')->all()).PHP_EOL;

    foreach ([NEW_A, NEW_B, OLD_IP] as $ip) {
        $srv = OriginServer::query()->where('host', $ip)->first();
        $on = Offer::query()
            ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
            ->get(['infra_meta', 'deploy_panel_name'])
            ->filter(fn (Offer $o) => hostOf($o) === $ip)
            ->count();
        echo "origin {$ip}: "
            .($srv
                ? '#'.$srv->id.' label='.($srv->label ?? '').' active='.(int) $srv->is_active.' ssh='.($srv->hasSshCredentials() ? 'yes' : 'no')
                : 'MISSING')
            ." offers={$on}".PHP_EOL;
    }

    $pendingTpl = $onOld->filter(fn (Offer $o) => $o->template === 'pending' || $o->template === '' || $o->template === null)->count();
    $noCf = $onOld->filter(fn (Offer $o) => ! filled($o->cloudflare_api_token))->count();
    echo "pending_template={$pendingTpl} missing_cf={$noCf}".PHP_EOL;
    echo 'avail on old: ok='.$onOld->where('availability_status', 'ok')->count()
        .' down='.$onOld->where('availability_status', 'down')->count().PHP_EOL;
    echo 'deploy queue: '.DB::table('jobs')->where('queue', 'deploy')->count().PHP_EOL;
    exit(0);
}

if ($cmd === 'select') {
    $onOld = offersOnOld();
    $ids = $onOld->pluck('id')->map(fn ($id) => (int) $id)->all();
    $half = (int) ceil(count($ids) / 2);
    $map = [
        NEW_A => array_slice($ids, 0, $half),
        NEW_B => array_slice($ids, $half),
    ];
    saveMap($map);

    echo 'selected total='.count($ids)
        .' → '.NEW_A.': '.count($map[NEW_A])
        .' | '.NEW_B.': '.count($map[NEW_B]).PHP_EOL;

    $byUserA = $onOld->whereIn('id', $map[NEW_A])->groupBy('user_id')->map->count()->all();
    $byUserB = $onOld->whereIn('id', $map[NEW_B])->groupBy('user_id')->map->count()->all();
    echo 'by user → '.NEW_A.': '.json_encode($byUserA).PHP_EOL;
    echo 'by user → '.NEW_B.': '.json_encode($byUserB).PHP_EOL;
    exit(0);
}

if ($cmd === 'queue') {
    $map = loadMap();
    $ids = allIds($map);
    if ($ids === []) {
        fwrite(STDERR, "No map. Run select first.\n");
        exit(1);
    }

    requireOrigin(NEW_A);
    requireOrigin(NEW_B);

    $offers = Offer::query()->whereIn('id', $ids)->get(['id', 'template', 'cloudflare_api_token']);
    $pendingTpl = $offers->filter(fn (Offer $o) => $o->template === 'pending' || $o->template === '' || $o->template === null)->count();
    if ($pendingTpl > 0) {
        fwrite(STDERR, "ABORT: {$pendingTpl} still have template=pending/empty\n");
        exit(1);
    }

    // Activate targets
    foreach ([NEW_A, NEW_B] as $ip) {
        $srv = requireOrigin($ip);
        $srv->fill([
            'is_active' => true,
            'alerts_enabled' => true,
            'deploy_driver' => $srv->deploy_driver ?: DeployDriver::UBUNTU,
            'deploy_path_template' => $srv->deploy_path_template ?: DeployDriver::UBUNTU_PATH,
        ])->save();
    }

    $idToHost = [];
    foreach ($map as $host => $hostIds) {
        foreach ($hostIds as $id) {
            $idToHost[(int) $id] = $host;
        }
    }

    // 1) retarget
    $n = 0;
    foreach (Offer::query()->whereIn('id', $ids)->orderBy('id')->cursor() as $offer) {
        $newIp = $idToHost[(int) $offer->id] ?? null;
        if (! $newIp) {
            continue;
        }
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $meta['deploy_host'] = $newIp;
        $meta['migrated_from'] = OLD_IP;
        $offer->forceFill([
            'infra_meta' => $meta,
            'deploy_panel_name' => $newIp,
            'provision_infrastructure' => true,
        ])->save();
        $n++;
    }
    echo "retargeted: {$n}".PHP_EOL;
    echo NEW_A.': '.count($map[NEW_A]).' | '.NEW_B.': '.count($map[NEW_B]).PHP_EOL;

    // 2) redeploy
    $d = 0;
    foreach ($ids as $id) {
        DeployOfferJob::dispatch((int) $id)->onQueue('deploy');
        $d++;
    }
    echo "queued redeploy: {$d}".PHP_EOL;

    // 3) CF rebind throttled (per-target IP)
    $r = 0;
    foreach ($ids as $id) {
        $newIp = $idToHost[(int) $id];
        RebindOfferDnsJob::dispatch((int) $id, $newIp)
            ->delay(now()->addSeconds(REBIND_BASE_DELAY + ($r * REBIND_DELAY_SEC)))
            ->onQueue('deploy');
        $r++;
    }
    echo 'queued rebind: '.$r.' (start +'.REBIND_BASE_DELAY.'s, then +'.REBIND_DELAY_SEC."s each)\n";
    echo 'deploy queue now: '.DB::table('jobs')->where('queue', 'deploy')->count().PHP_EOL;
    exit(0);
}

if ($cmd === 'status') {
    $map = loadMap();
    $ids = allIds($map);
    $tracked = Offer::query()->whereIn('id', $ids)->get([
        'id', 'status', 'deploy_panel_name', 'infra_meta', 'availability_status', 'deploy_error',
    ]);

    $onA = $tracked->filter(fn (Offer $o) => hostOf($o) === NEW_A)->count();
    $onB = $tracked->filter(fn (Offer $o) => hostOf($o) === NEW_B)->count();
    $onOld = $tracked->filter(fn (Offer $o) => hostOf($o) === OLD_IP)->count();

    echo 'tracked: '.count($ids).PHP_EOL;
    echo 'on '.NEW_A.': '.$onA.' (map '.count($map[NEW_A]).')'.PHP_EOL;
    echo 'on '.NEW_B.': '.$onB.' (map '.count($map[NEW_B]).')'.PHP_EOL;
    echo 'still on '.OLD_IP.': '.$onOld.PHP_EOL;
    echo 'status deployed='.$tracked->where('status', 'deployed')->count()
        .' deploying='.$tracked->where('status', 'deploying')->count()
        .' failed='.$tracked->where('status', 'failed')->count().PHP_EOL;
    echo 'avail ok='.$tracked->where('availability_status', 'ok')->count()
        .' down='.$tracked->where('availability_status', 'down')->count().PHP_EOL;
    echo 'deploy queue: '.DB::table('jobs')->where('queue', 'deploy')->count().PHP_EOL;
    echo 'failed_jobs: '.DB::table('failed_jobs')->count().PHP_EOL;

    foreach ($tracked->where('status', 'failed')->take(12) as $o) {
        echo 'FAIL #'.$o->id.' host='.hostOf($o).' '.($o->deploy_error ?? '').PHP_EOL;
    }

    foreach ([NEW_A, NEW_B] as $ip) {
        try {
            $srv = requireOrigin($ip);
            putenv('SSHPASS='.SecretValue::normalize((string) $srv->password));
            passthru(
                'sshpass -e ssh -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null -o ConnectTimeout=10 '
                .'root@'.escapeshellarg($ip).' '
                .escapeshellarg('echo HOST='.$ip.'; echo SITES=$(ls -1 /var/www/offers 2>/dev/null | wc -l); uptime')
            );
        } catch (Throwable $e) {
            echo $ip.' ssh fail: '.$e->getMessage().PHP_EOL;
        }
    }
    exit(0);
}

if ($cmd === 'sample-cf') {
    $map = loadMap();
    $ids = allIds($map);
    $idToHost = [];
    foreach ($map as $host => $hostIds) {
        foreach ($hostIds as $id) {
            $idToHost[(int) $id] = $host;
        }
    }
    $sample = Offer::query()->whereIn('id', $ids)->inRandomOrder()->limit(10)->get();
    $cf = app(CloudflareClient::class);
    foreach ($sample as $offer) {
        $expected = $idToHost[(int) $offer->id] ?? '?';
        $settings = $offer->user?->settings;
        if (! $settings) {
            echo $offer->domain." → no settings\n";
            continue;
        }
        $token = CloudflareClient::normalizeApiToken($offer->cloudflare_api_token);
        if ($token === '') {
            echo $offer->domain." → no offer token\n";
            continue;
        }
        $probe = $settings->replicate();
        $probe->cloudflare_api_token = $token;
        $probe->cloudflare_account_id = $offer->cloudflare_account_id;
        try {
            $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
            $zoneId = trim((string) ($meta['cloudflare_zone_id'] ?? ''));
            if ($zoneId === '') {
                $z = $cf->findZone($probe, $offer->domain);
                $zoneId = (string) ($z['zone_id'] ?? '');
            }
            $as = [];
            if ($zoneId !== '') {
                foreach ($cf->listARecords($probe, $zoneId, $offer->domain) as $rec) {
                    $as[] = ($rec['content'] ?? '').(! empty($rec['proxied']) ? '(p)' : '');
                }
            }
            echo $offer->domain.' expect='.$expected.' → '.implode(',', $as ?: ['?']).PHP_EOL;
        } catch (Throwable $e) {
            echo $offer->domain.' → ERR '.$e->getMessage().PHP_EOL;
        }
        usleep(250_000);
    }
    exit(0);
}

if ($cmd === 'point-settings') {
    // Point each user who still has deploy_host=OLD to the target that received more of their offers.
    $map = loadMap();
    $idToHost = [];
    foreach ($map as $host => $hostIds) {
        foreach ($hostIds as $id) {
            $idToHost[(int) $id] = $host;
        }
    }
    $offers = Offer::query()->whereIn('id', allIds($map))->get(['id', 'user_id']);
    $userCounts = [];
    foreach ($offers as $o) {
        $host = $idToHost[(int) $o->id] ?? null;
        if (! $host) {
            continue;
        }
        $uid = (int) $o->user_id;
        $userCounts[$uid][$host] = ($userCounts[$uid][$host] ?? 0) + 1;
    }

    $n = 0;
    foreach (UserSetting::query()->where('deploy_host', OLD_IP)->get() as $settings) {
        $uid = (int) $settings->user_id;
        $counts = $userCounts[$uid] ?? [];
        $target = NEW_A;
        if (($counts[NEW_B] ?? 0) > ($counts[NEW_A] ?? 0)) {
            $target = NEW_B;
        }
        $srv = requireOrigin($target);
        $settings->forceFill([
            'deploy_host' => $target,
            'deploy_panel_name' => $target,
            'deploy_port' => (int) ($srv->port ?: 22),
            'deploy_username' => trim((string) ($srv->username ?: 'root')) ?: 'root',
            'deploy_password' => SecretValue::normalize((string) $srv->password),
        ])->save();
        $n++;
        echo "settings user_id={$uid} → {$target} (A=".($counts[NEW_A] ?? 0).' B='.($counts[NEW_B] ?? 0).")\n";
    }
    echo "settings updated: {$n}".PHP_EOL;
    exit(0);
}

if ($cmd === 'rebind-stale') {
    $map = loadMap();
    $idToHost = [];
    foreach ($map as $host => $hostIds) {
        foreach ($hostIds as $id) {
            $idToHost[(int) $id] = $host;
        }
    }
    $ids = allIds($map);
    $cf = app(CloudflareClient::class);
    $stale = [];
    $ok = 0;
    $err = 0;
    $n = 0;
    foreach (Offer::query()->whereIn('id', $ids)->with('user.settings')->orderBy('id')->cursor() as $offer) {
        $n++;
        $expect = $idToHost[(int) $offer->id] ?? null;
        if (! $expect) {
            continue;
        }
        if (in_array($offer->status, ['archived', 'archiving', 'teardown_failed'], true)) {
            continue;
        }
        $settings = $offer->user?->settings;
        $token = CloudflareClient::normalizeApiToken($offer->cloudflare_api_token);
        if (! $settings || $token === '') {
            $err++;
            continue;
        }
        $probe = $settings->replicate();
        $probe->cloudflare_api_token = $token;
        $probe->cloudflare_account_id = $offer->cloudflare_account_id;
        try {
            $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
            $zoneId = trim((string) ($meta['cloudflare_zone_id'] ?? ''));
            if ($zoneId === '') {
                $z = $cf->findZone($probe, $offer->domain);
                $zoneId = (string) ($z['zone_id'] ?? '');
            }
            $contents = [];
            if ($zoneId !== '') {
                foreach ($cf->listARecords($probe, $zoneId, $offer->domain) as $rec) {
                    $contents[] = (string) ($rec['content'] ?? '');
                }
            }
            if (in_array($expect, $contents, true)) {
                $ok++;
            } else {
                $stale[] = [(int) $offer->id, $expect, $offer->domain, implode(',', $contents ?: ['?'])];
            }
        } catch (Throwable $e) {
            $err++;
            echo 'ERR #'.$offer->id.' '.$offer->domain.' '.$e->getMessage().PHP_EOL;
        }
        if ($n % 100 === 0) {
            echo "scanned {$n} ok={$ok} stale=".count($stale)." err={$err}\n";
        }
        usleep(80_000);
    }

    echo 'scan done: ok='.$ok.' stale='.count($stale).' err='.$err.PHP_EOL;
    $r = 0;
    foreach ($stale as [$id, $expect, $domain, $got]) {
        echo "REBIND #{$id} {$domain} {$got} → {$expect}\n";
        RebindOfferDnsJob::dispatch($id, $expect)
            ->delay(now()->addSeconds($r * REBIND_DELAY_SEC))
            ->onQueue('deploy');
        $r++;
    }
    echo "queued rebind-stale: {$r}".PHP_EOL;
    echo 'deploy queue now: '.DB::table('jobs')->where('queue', 'deploy')->count().PHP_EOL;
    exit(0);
}

if ($cmd === 'deactivate-old') {
    $still = offersOnOld()->count();
    if ($still > 0) {
        fwrite(STDERR, "ABORT: still {$still} non-archived offers on ".OLD_IP."\n");
        exit(1);
    }
    $updated = OriginServer::query()->where('host', OLD_IP)->update(['is_active' => false]);
    echo 'deactivated '.OLD_IP.': '.$updated.PHP_EOL;
    exit(0);
}

fwrite(STDERR, "Unknown command: {$cmd}\n");
exit(1);
