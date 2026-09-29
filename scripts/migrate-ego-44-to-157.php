<?php

/**
 * Move EGO offers from 91.224.92.44 → 91.224.92.157
 * (retarget + redeploy + CF A rebind; optional cleanup on old host)
 *
 *   php scripts/migrate-ego-44-to-157.php queue|status|sample-cf|cleanup-old
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Jobs\DeployOfferJob;
use App\Jobs\RebindOfferDnsJob;
use App\Models\Offer;
use App\Models\OriginServer;
use App\Models\User;
use App\Services\CloudflareClient;
use Illuminate\Support\Facades\DB;
use phpseclib3\Net\SSH2;

const OLD_IP = '91.224.92.44';
const NEW_IP = '91.224.92.157';
const REBIND_DELAY_SEC = 3;
const ID_FILE = __DIR__.'/../storage/app/migrate-ego-44-to-157-ids.json';

$cmd = $argv[1] ?? 'queue';

$user = User::query()->where('name', 'EGO')->firstOrFail();

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

function egoOnOld(User $user): array
{
    return Offer::query()
        ->where('user_id', $user->id)
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->orderBy('id')
        ->get(['id', 'domain', 'template', 'status', 'infra_meta', 'deploy_panel_name', 'cloudflare_api_token'])
        ->filter(fn (Offer $o) => hostOf($o) === OLD_IP)
        ->values()
        ->all();
}

function saveIds(array $ids): void
{
    if (! is_dir(dirname(ID_FILE))) {
        mkdir(dirname(ID_FILE), 0775, true);
    }
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
    $offers = egoOnOld($user);
    $ids = array_map(fn (Offer $o) => (int) $o->id, $offers);
    saveIds($ids);
    echo 'EGO on '.OLD_IP.': '.count($ids).PHP_EOL;

    if ($ids === []) {
        echo "nothing to move\n";
        exit(0);
    }

    $pendingTpl = 0;
    $noCf = 0;
    foreach ($offers as $o) {
        if ($o->template === 'pending' || $o->template === '' || $o->template === null) {
            $pendingTpl++;
        }
        if (! filled($o->cloudflare_api_token)) {
            $noCf++;
        }
    }
    if ($pendingTpl > 0) {
        fwrite(STDERR, "ABORT: {$pendingTpl} still have template=pending\n");
        exit(1);
    }
    echo "cf_token_ok=".(count($ids) - $noCf)." missing_cf={$noCf}\n";

    $newServer = OriginServer::query()->where('host', NEW_IP)->first();
    if (! $newServer || ! $newServer->hasSshCredentials()) {
        fwrite(STDERR, "ABORT: OriginServer ".NEW_IP." missing SSH\n");
        exit(1);
    }
    echo 'target origin #'.$newServer->id.' '.$newServer->label."\n";

    // 1) retarget
    $n = 0;
    foreach (Offer::query()->whereIn('id', $ids)->orderBy('id')->cursor() as $offer) {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $meta['deploy_host'] = NEW_IP;
        $meta['migrated_from'] = OLD_IP;
        $offer->forceFill([
            'infra_meta' => $meta,
            'deploy_panel_name' => NEW_IP,
            'provision_infrastructure' => true,
        ])->save();
        $n++;
    }
    echo 'retargeted → '.NEW_IP.": {$n}\n";

    // 2) redeploy
    $d = 0;
    foreach ($ids as $id) {
        DeployOfferJob::dispatch($id)->onQueue('deploy');
        $d++;
    }
    echo "queued redeploy: {$d}\n";

    // 3) CF rebind throttled
    $r = 0;
    $baseDelay = 90;
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
        $ids = array_map(fn (Offer $o) => (int) $o->id, egoOnOld($user));
        // also include already retargeted tracked set
        if ($ids === [] && is_file(ID_FILE)) {
            $ids = loadIds();
        }
    }
    // Prefer saved ids always for tracking mid-migration
    if (is_file(ID_FILE)) {
        $ids = loadIds();
    }

    $tracked = Offer::query()->whereIn('id', $ids)->get([
        'id', 'status', 'deploy_panel_name', 'infra_meta', 'availability_status', 'deploy_error', 'template',
    ]);
    $onNew = $tracked->filter(fn (Offer $o) => hostOf($o) === NEW_IP)->count();
    $onOld = $tracked->filter(fn (Offer $o) => hostOf($o) === OLD_IP)->count();

    echo 'tracked: '.count($ids).PHP_EOL;
    echo 'on '.NEW_IP.': '.$onNew.PHP_EOL;
    echo 'on '.OLD_IP.': '.$onOld.PHP_EOL;
    echo 'status deployed='.$tracked->where('status', 'deployed')->count()
        .' deploying='.$tracked->where('status', 'deploying')->count()
        .' failed='.$tracked->where('status', 'failed')->count().PHP_EOL;
    echo 'avail ok='.$tracked->where('availability_status', 'ok')->count()
        .' down='.$tracked->where('availability_status', 'down')->count().PHP_EOL;
    echo 'deploy queue: '.DB::table('jobs')->where('queue', 'deploy')->count().PHP_EOL;
    echo 'failed_jobs: '.DB::table('failed_jobs')->count().PHP_EOL;

    $failed = $tracked->where('status', 'failed')->take(10);
    foreach ($failed as $o) {
        echo 'FAIL #'.$o->id.' '.($o->deploy_error ?? '').PHP_EOL;
    }
    exit(0);
}

if ($cmd === 'sample-cf') {
    $ids = loadIds();
    $sample = Offer::query()->whereIn('id', $ids)->inRandomOrder()->limit(8)->get();
    $cf = app(CloudflareClient::class);
    foreach ($sample as $offer) {
        $settings = $offer->user?->settings;
        if (! $settings) {
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
            echo $offer->domain.' → '.implode(',', $as ?: ['?'])."\n";
        } catch (Throwable $e) {
            echo $offer->domain.' → ERR '.$e->getMessage()."\n";
        }
        usleep(250_000);
    }
    exit(0);
}

if ($cmd === 'cleanup-old') {
    // Remove landers from OLD_IP for tracked domains that are now on NEW_IP and have files there.
    $ids = loadIds();
    if ($ids === []) {
        fwrite(STDERR, "no id file\n");
        exit(1);
    }
    $offers = Offer::query()->whereIn('id', $ids)->get(['id', 'domain', 'infra_meta', 'deploy_panel_name', 'status']);
    $domains = [];
    foreach ($offers as $o) {
        if (hostOf($o) !== NEW_IP) {
            continue;
        }
        if (in_array($o->status, ['archived', 'archiving'], true)) {
            continue;
        }
        $domains[] = strtolower(trim((string) $o->domain));
    }
    $domains = array_values(array_unique(array_filter($domains)));
    echo 'cleanup candidates: '.count($domains)."\n";

    $old = OriginServer::query()->where('host', OLD_IP)->firstOrFail();
    $new = OriginServer::query()->where('host', NEW_IP)->firstOrFail();

    $sshNew = new SSH2(NEW_IP, (int) ($new->port ?: 22), 12);
    $sshNew->setTimeout(60);
    if (! $sshNew->login((string) $new->username, (string) $new->password)) {
        fwrite(STDERR, "SSH new fail\n");
        exit(1);
    }

    $toDelete = [];
    foreach ($domains as $d) {
        $check = trim((string) $sshNew->exec(
            'test -f /var/www/offers/'.escapeshellarg($d).'/public_html/index.php && echo OK || echo NO'
        ));
        // escapeshellarg adds quotes that break remote - use safer approach
    }
    $sshNew->disconnect();

    // rebuild check without broken escapeshellarg for remote
    $sshNew = new SSH2(NEW_IP, (int) ($new->port ?: 22), 12);
    $sshNew->setTimeout(180);
    $sshNew->login((string) $new->username, (string) $new->password);
    $list = implode("\n", $domains);
    $script = "python3 - <<'PY'\nimport os\ndomains='''".$list."'''.strip().splitlines()\nok=[]\nfor d in domains:\n d=d.strip().lower()\n if not d: continue\n p=f'/var/www/offers/{d}/public_html/index.php'\n if os.path.isfile(p):\n  ok.append(d)\nprint('\\n'.join(ok))\nprint('COUNT',len(ok))\nPY";
    $out = (string) $sshNew->exec($script);
    $sshNew->disconnect();
    $lines = preg_split("/\r\n|\n|\r/", trim($out)) ?: [];
    $okOnNew = [];
    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, 'COUNT')) {
            continue;
        }
        $okOnNew[] = $line;
    }
    echo 'confirmed on new: '.count($okOnNew)."\n";

    if ($okOnNew === []) {
        echo "nothing to delete\n";
        exit(0);
    }

    $sshOld = new SSH2(OLD_IP, (int) ($old->port ?: 22), 12);
    $sshOld->setTimeout(600);
    if (! $sshOld->login((string) $old->username, (string) $old->password)) {
        fwrite(STDERR, "SSH old fail\n");
        exit(1);
    }
    $delList = implode("\n", $okOnNew);
    $delScript = "python3 - <<'PY'\nimport os, shutil\ndomains='''".$delList."'''.strip().splitlines()\nn=0\nfor d in domains:\n d=d.strip().lower()\n if not d or '/' in d or '..' in d: continue\n path=f'/var/www/offers/{d}'\n if os.path.isdir(path):\n  shutil.rmtree(path)\n  n+=1\n  print('rm',d)\nprint('REMOVED',n)\nPY";
    echo (string) $sshOld->exec($delScript);
    $sshOld->disconnect();
    exit(0);
}

fwrite(STDERR, "Usage: queue|status|sample-cf|cleanup-old\n");
exit(1);
