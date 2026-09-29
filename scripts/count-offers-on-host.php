<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\OriginServer;
use App\Models\UserSetting;
use App\Services\OriginServerSync;
use phpseclib3\Net\SSH2;

$host = $argv[1] ?? '178.16.55.76';
$host = trim($host);

$server = OriginServer::query()->where('host', $host)->first();
if (! $server) {
    fwrite(STDERR, "OriginServer not found for {$host}\n");
    exit(1);
}

echo "origin #{$server->id} label=".($server->label ?? '')." owner=".($server->owner_user_id ?? 'null')."\n";

$sync = app(OriginServerSync::class);
$counts = $sync->offerCountsByHost();
echo 'panel_count_by_infra_meta='.($counts[$host] ?? 0)."\n";

// Offers whose infra_meta deploy_host matches
$byMeta = Offer::query()
    ->where(function ($q) use ($host) {
        $q->where('infra_meta->deploy_host', $host)
            ->orWhere('deploy_panel_name', $host);
    })
    ->count();
echo "db_offers_infra_or_panel={$byMeta}\n";

// Settings default host
$settingsUsers = UserSetting::query()->where('deploy_host', $host)->pluck('user_id')->all();
echo 'settings_default_users='.implode(',', $settingsUsers ?: ['none'])."\n";

$ssh = new SSH2($host, (int) ($server->port ?: 22), 12);
$ssh->setTimeout(120);
if (! $ssh->login((string) $server->username, (string) $server->password)) {
    fwrite(STDERR, "SSH login failed\n");
    exit(1);
}

$cmd = <<<'BASH'
python3 - <<'PY'
import os, json
root="/var/www/offers"
dirs=0
with_html=0
with_manifest=0
templates={}
samples=[]
if os.path.isdir(root):
    for name in sorted(os.listdir(root)):
        d=os.path.join(root,name)
        if not os.path.isdir(d):
            continue
        dirs+=1
        ph=os.path.join(d,"public_html")
        if os.path.isdir(ph) and (os.path.isfile(os.path.join(ph,"index.php")) or os.path.isfile(os.path.join(ph,"index.html"))):
            with_html+=1
        man=os.path.join(ph,"manifest.json")
        tpl=""
        if os.path.isfile(man):
            with_manifest+=1
            try:
                data=json.load(open(man,encoding="utf-8",errors="ignore"))
                tpl=(data.get("template") or "").strip().lower()
                if tpl:
                    templates[tpl]=templates.get(tpl,0)+1
            except Exception:
                pass
        if len(samples)<8:
            samples.append(f"{name}|{tpl or '-'}")
print(f"disk_dirs={dirs}")
print(f"disk_with_public_html={with_html}")
print(f"disk_with_manifest={with_manifest}")
print("templates="+json.dumps(templates,sort_keys=True))
print("samples="+json.dumps(samples))
# df
st=os.statvfs("/var/www" if os.path.isdir("/var/www") else "/")
free_gb=st.f_bavail*st.f_frsize/(1024**3)
print(f"disk_www_free_gb={free_gb:.1f}")
PY
du -sh /var/www/offers 2>/dev/null || true
BASH;

$out = (string) $ssh->exec($cmd);
$ssh->disconnect();
echo trim($out)."\n";

// Match disk domains to EGO offers in DB
$ssh2 = new SSH2($host, (int) ($server->port ?: 22), 12);
$ssh2->setTimeout(120);
$ssh2->login((string) $server->username, (string) $server->password);
$domainsOut = trim((string) $ssh2->exec('ls -1 /var/www/offers 2>/dev/null'));
$ssh2->disconnect();

$domains = array_values(array_filter(array_map('strtolower', preg_split("/\r\n|\n|\r/", $domainsOut) ?: [])));
echo 'disk_domain_list_count='.count($domains)."\n";

if ($domains !== []) {
    $matched = Offer::query()->whereIn('domain', $domains)->count();
    $matchedEgo = Offer::query()->whereIn('domain', $domains)->where('user_id', 2)->count();
    $matchedByUser = Offer::query()
        ->whereIn('domain', $domains)
        ->selectRaw('user_id, count(*) c')
        ->groupBy('user_id')
        ->get();
    echo "db_match_any_user={$matched}\n";
    echo "db_match_ego={$matchedEgo}\n";
    foreach ($matchedByUser as $r) {
        echo "  user_id={$r->user_id} count={$r->c}\n";
    }
}

echo "DONE\n";
