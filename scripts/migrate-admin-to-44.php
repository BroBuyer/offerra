<?php

/**
 * Admin (BRO): retarget + redeploy + CF rebind → 91.224.92.44
 *
 *   php scripts/migrate-admin-to-44.php queue|status|sample-cf
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Jobs\DeployOfferJob;
use App\Jobs\RebindOfferDnsJob;
use App\Models\Offer;
use App\Models\User;
use App\Models\UserSetting;
use App\Services\CloudflareClient;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

const NEW_IP = '91.224.92.44';
const REBIND_DELAY_SEC = 3;
const ID_FILE = __DIR__.'/../storage/app/migrate-admin-to-44-ids.json';

$cmd = $argv[1] ?? 'queue';

$user = User::query()->where('email', 'admin@offerra.local')->firstOrFail();

function adminIds(User $user): array
{
    return Offer::query()
        ->where('user_id', $user->id)
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->orderBy('id')
        ->pluck('id')
        ->map(fn ($id) => (int) $id)
        ->all();
}

function saveIds(array $ids): void
{
    file_put_contents(ID_FILE, json_encode(array_values($ids), JSON_PRETTY_PRINT));
}

function loadIds(): array
{
    if (! is_file(ID_FILE)) {
        return [];
    }
    $decoded = json_decode((string) file_get_contents(ID_FILE), true);

    return is_array($decoded) ? array_map('intval', $decoded) : [];
}

if ($cmd === 'queue') {
    $ids = adminIds($user);
    saveIds($ids);
    echo 'admin offers: '.count($ids).PHP_EOL;

    $pendingTpl = Offer::query()->whereIn('id', $ids)->where('template', 'pending')->count();
    if ($pendingTpl > 0) {
        fwrite(STDERR, "ABORT: {$pendingTpl} still have template=pending\n");
        exit(1);
    }

    // 1) retarget meta/panel
    $n = 0;
    foreach (Offer::query()->whereIn('id', $ids)->orderBy('id')->cursor() as $offer) {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $meta['deploy_host'] = NEW_IP;
        $offer->forceFill([
            'infra_meta' => $meta,
            'deploy_panel_name' => NEW_IP,
            'provision_infrastructure' => true,
        ])->save();
        $n++;
    }
    echo "retargeted → ".NEW_IP.": {$n}".PHP_EOL;

    // 2) redeploy (generate lander + upload to .44)
    $d = 0;
    foreach ($ids as $id) {
        DeployOfferJob::dispatch($id)->onQueue('deploy');
        $d++;
    }
    echo "queued redeploy: {$d}".PHP_EOL;

    // 3) CF A rebind throttled (after a head-start so some deploys begin first)
    $r = 0;
    $baseDelay = 60; // wait 1 min before first rebind
    foreach ($ids as $id) {
        RebindOfferDnsJob::dispatch($id, NEW_IP)
            ->delay(now()->addSeconds($baseDelay + ($r * REBIND_DELAY_SEC)))
            ->onQueue('deploy');
        $r++;
    }
    echo 'queued rebind → '.NEW_IP.': '.$r.' (start +'.$baseDelay.'s, then +'.REBIND_DELAY_SEC."s each)\n";
    echo 'deploy queue now: '.DB::table('jobs')->where('queue', 'deploy')->count().PHP_EOL;
    exit(0);
}

if ($cmd === 'status') {
    $ids = loadIds();
    if ($ids === []) {
        $ids = adminIds($user);
    }
    $tracked = Offer::query()->whereIn('id', $ids)->get([
        'id', 'status', 'deploy_panel_name', 'infra_meta', 'availability_status', 'deploy_error', 'template',
    ]);
    $onNew = $tracked->filter(function (Offer $o) {
        $meta = is_array($o->infra_meta) ? $o->infra_meta : [];
        $h = trim((string) ($meta['deploy_host'] ?? $o->deploy_panel_name ?? ''));

        return $h === NEW_IP;
    })->count();
    echo 'tracked: '.count($ids).PHP_EOL;
    echo 'on '.NEW_IP.': '.$onNew.PHP_EOL;
    echo 'status deployed='.$tracked->where('status', 'deployed')->count()
        .' deploying='.$tracked->where('status', 'deploying')->count()
        .' failed='.$tracked->whereIn('status', ['failed', 'deploy_failed'])->count()
        .PHP_EOL;
    echo 'avail ok='.$tracked->where('availability_status', 'ok')->count()
        .' down='.$tracked->where('availability_status', 'down')->count()
        .PHP_EOL;
    echo 'deploy queue: '.DB::table('jobs')->where('queue', 'deploy')->count().PHP_EOL;
    echo 'failed_jobs: '.DB::table('failed_jobs')->count().PHP_EOL;

    $err = Offer::query()->whereIn('id', $ids)
        ->whereNotNull('deploy_error')
        ->where('deploy_error', '!=', '')
        ->selectRaw('left(deploy_error, 120) as e, count(*) c')
        ->groupBy('e')
        ->orderByDesc('c')
        ->limit(8)
        ->get();
    if ($err->isNotEmpty()) {
        echo "=== deploy_error tops ===\n";
        foreach ($err as $row) {
            echo $row->c."\t".$row->e."\n";
        }
    }
    exit(0);
}

if ($cmd === 'sample-cf') {
    $settings = $user->settings;
    $token = CloudflareClient::normalizeApiToken($settings->cloudflare_api_token);
    $cf = app(CloudflareClient::class);
    $samples = Offer::query()->where('user_id', $user->id)->orderByDesc('id')->limit(5)->get(['domain']);
    $ips = [];
    foreach ($samples as $o) {
        $zone = $cf->findZone($settings, $o->domain);
        if ($zone === null) {
            echo "{$o->domain}: NO_ZONE\n";
            continue;
        }
        $resp = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
            'Accept' => 'application/json',
        ])->timeout(20)->get('https://api.cloudflare.com/client/v4/zones/'.$zone['zone_id'].'/dns_records', [
            'type' => 'A',
            'name' => $o->domain,
            'per_page' => 5,
        ]);
        $contents = [];
        foreach ($resp->json('result') ?? [] as $row) {
            $contents[] = ($row['content'] ?? '?').(! empty($row['proxied']) ? '(p)' : '');
            $ips[$row['content'] ?? '?'] = ($ips[$row['content'] ?? '?'] ?? 0) + 1;
        }
        echo $o->domain.' → '.($contents ? implode(',', $contents) : 'NONE').PHP_EOL;
    }
    echo 'ips='.json_encode($ips).PHP_EOL;
    exit(0);
}

fwrite(STDERR, "Unknown cmd. Use: queue|status|sample-cf\n");
exit(1);
