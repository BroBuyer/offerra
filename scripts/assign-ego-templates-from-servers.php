<?php

/**
 * Assign EGO templates by scanning origin servers (manifest.json under /var/www/offers),
 * then HTTP/TLD fallback for leftovers.
 *
 * Run: php scripts/assign-ego-templates-from-servers.php [--dry] [--limit=N]
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\OriginServer;
use App\Models\User;
use App\Models\UserSetting;
use App\Services\TemplateCatalog;
use phpseclib3\Net\SSH2;

$dry = in_array('--dry', $argv, true);
$limit = null;
foreach ($argv as $arg) {
    if (str_starts_with($arg, '--limit=')) {
        $limit = (int) substr($arg, 8);
    }
}

$user = User::query()
    ->where('name', 'EGO')
    ->orWhere('email', 'like', '%ego%')
    ->firstOrFail();

$catalog = app(TemplateCatalog::class);
$allowed = $catalog->ids();

echo "EGO: id={$user->id} {$user->email}\n";
echo 'offers='.Offer::where('user_id', $user->id)->count()."\n";

// ---- collect SSH targets ----
$targets = []; // host => [host,port,user,pass,label]

foreach (OriginServer::query()->orderBy('id')->get() as $server) {
    $host = trim((string) $server->host);
    if ($host === '' || ! filled($server->username) || ! filled($server->password)) {
        echo "skip origin #{$server->id} {$host} (no ssh)\n";
        continue;
    }
    $targets[$host] = [
        'host' => $host,
        'port' => (int) ($server->port ?: 22),
        'user' => (string) $server->username,
        'pass' => (string) $server->password,
        'label' => (string) ($server->label ?: $host),
    ];
}

foreach (UserSetting::query()->whereNotNull('deploy_host')->where('deploy_host', '!=', '')->get() as $settings) {
    $host = trim((string) $settings->deploy_host);
    if ($host === '' || isset($targets[$host])) {
        continue;
    }
    if (! filled($settings->deploy_username) || ! filled($settings->deploy_password)) {
        echo "skip settings host {$host} (no ssh)\n";
        continue;
    }
    $targets[$host] = [
        'host' => $host,
        'port' => (int) ($settings->deploy_port ?: 22),
        'user' => (string) $settings->deploy_username,
        'pass' => (string) $settings->deploy_password,
        'label' => 'settings#'.$settings->user_id,
    ];
}

echo 'ssh_targets='.count($targets)."\n";
foreach ($targets as $t) {
    echo "  {$t['label']} {$t['host']}:{$t['port']} user={$t['user']}\n";
}

// ---- scan manifests on each server ----
$domainTemplate = []; // domain => template
$serverHits = [];

$scanCmd = <<<'BASH'
python3 - <<'PY'
import json, os, sys
root = "/var/www/offers"
if not os.path.isdir(root):
    sys.exit(0)
for name in os.listdir(root):
    path = os.path.join(root, name, "public_html", "manifest.json")
    if not os.path.isfile(path):
        continue
    try:
        with open(path, "r", encoding="utf-8", errors="ignore") as f:
            data = json.load(f)
        tpl = (data.get("template") or "").strip().lower()
        if tpl:
            print(f"{name.lower()}\t{tpl}")
    except Exception:
        pass
PY
BASH;

foreach ($targets as $t) {
    echo "scan {$t['host']} ... ";
    try {
        $ssh = new SSH2($t['host'], $t['port'], 12);
        $ssh->setTimeout(180);
        if (! $ssh->login($t['user'], $t['pass'])) {
            echo "LOGIN_FAIL\n";
            $ssh->disconnect();
            continue;
        }
        $out = (string) $ssh->exec($scanCmd);
        $ssh->disconnect();
        $n = 0;
        foreach (preg_split("/\r\n|\n|\r/", trim($out)) as $line) {
            $line = trim($line);
            if ($line === '' || ! str_contains($line, "\t")) {
                continue;
            }
            [$domain, $tpl] = explode("\t", $line, 2);
            $domain = strtolower(trim($domain));
            $tpl = strtolower(trim($tpl));
            if ($domain === '' || $tpl === '' || ! in_array($tpl, $allowed, true)) {
                continue;
            }
            // first win; later servers don't overwrite unless empty
            if (! isset($domainTemplate[$domain])) {
                $domainTemplate[$domain] = $tpl;
                $n++;
            }
        }
        $serverHits[$t['host']] = $n;
        echo "ok new={$n} total_map=".count($domainTemplate)."\n";
    } catch (Throwable $e) {
        echo 'ERR '.$e->getMessage()."\n";
    }
}

echo 'manifest_map='.count($domainTemplate)."\n";

$fingerprints = [
    'noctra' => ['hero-terminal', 'hero-kicker'],
    'lumen' => ['hero-lumen', 'hero-lumen__copy'],
    'velora' => ['hero-form-container', 'hero-section'],
    'cetra' => ['hero-chips', 'b8a4e4ccd231', 'og-image.webp'],
    'solano' => ['data-hero="split"', '66f3f89ececa', 'class="pnylsh"'],
    'aurel' => ['40a9cfc5225f', 'class="tl154k"', 'class="ggh3sm"'],
    'recupero' => ['ra-header', 'ra-hero', 'static/img/hero/post.png'],
    'thalora' => ['tailwind.min.css', 'inter-latin.woff2', 'favicon-96.png'],
    'multilang' => ['static/img/flags/gb.png'],
];
$tldFallback = [
    'com' => 'default',
    'online' => 'noctra',
    'live' => 'solano',
];

function http_get(string $url, int $timeout = 8): array
{
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_MAXREDIRS => 4,
        CURLOPT_CONNECTTIMEOUT => 4,
        CURLOPT_TIMEOUT => $timeout,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_USERAGENT => 'OfferraTemplateProbe/1.0',
    ]);
    $body = curl_exec($ch);
    $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return [$code, is_string($body) ? $body : ''];
}

function detect_from_html(string $html, array $fingerprints, array $allowed): ?string
{
    foreach ($fingerprints as $id => $needles) {
        if (! in_array($id, $allowed, true)) {
            continue;
        }
        foreach ($needles as $needle) {
            if ($needle !== '' && str_contains($html, $needle)) {
                return $id;
            }
        }
    }
    if (str_contains($html, 'hero-badges') || str_contains($html, 'class="hero"')) {
        return in_array('default', $allowed, true) ? 'default' : null;
    }

    return null;
}

function tld_of(string $domain): string
{
    $domain = strtolower(trim($domain));
    if (! str_contains($domain, '.')) {
        return '';
    }

    return substr($domain, strrpos($domain, '.') + 1);
}

$query = Offer::query()->where('user_id', $user->id)->orderBy('id');
if ($limit) {
    $query->limit($limit);
}
$offers = $query->get(['id', 'domain', 'template', 'status']);

echo 'processing='.$offers->count().' dry='.($dry ? '1' : '0')."\n";

$counts = [];
$sources = [];
$unknown = [];
$n = 0;
$total = $offers->count();

foreach ($offers as $offer) {
    $domain = strtolower(trim((string) $offer->domain));
    $detected = null;
    $source = null;

    if (isset($domainTemplate[$domain])) {
        $detected = $domainTemplate[$domain];
        $source = 'server';
    }

    if ($detected === null) {
        [$code, $body] = http_get('https://'.$domain.'/manifest.json');
        if ($code >= 200 && $code < 400 && $body !== '') {
            $json = json_decode($body, true);
            if (is_array($json) && ! empty($json['template'])) {
                $tpl = strtolower(trim((string) $json['template']));
                if (in_array($tpl, $allowed, true)) {
                    $detected = $tpl;
                    $source = 'http_manifest';
                }
            }
        }
    }

    if ($detected === null) {
        [$code, $html] = http_get('https://'.$domain.'/');
        if ($code >= 200 && $code < 400 && $html !== '') {
            $detected = detect_from_html($html, $fingerprints, $allowed);
            if ($detected !== null) {
                $source = 'html';
            }
        }
    }

    if ($detected === null) {
        $tld = tld_of($domain);
        if (isset($tldFallback[$tld]) && in_array($tldFallback[$tld], $allowed, true)) {
            $detected = $tldFallback[$tld];
            $source = 'tld';
        }
    }

    if ($detected === null || $detected === 'pending') {
        $detected = in_array('default', $allowed, true) ? 'default' : ($allowed[0] ?? 'default');
        $source = 'fallback';
        $unknown[] = "{$offer->id}|{$domain}";
    }

    if (! $dry) {
        $offer->forceFill(['template' => $detected])->save();
    }

    $counts[$detected] = ($counts[$detected] ?? 0) + 1;
    $sources[$source] = ($sources[$source] ?? 0) + 1;
    $n++;

    if ($n % 200 === 0 || $n === $total) {
        echo "progress {$n}/{$total}\n";
    }
}

echo "updated={$n}\n";
echo "by_template:\n";
ksort($counts);
foreach ($counts as $k => $v) {
    echo "  {$k}: {$v}\n";
}
echo "by_source:\n";
foreach ($sources as $k => $v) {
    echo "  {$k}: {$v}\n";
}
echo "by_server_new_hits:\n";
foreach ($serverHits as $host => $c) {
    echo "  {$host}: {$c}\n";
}

$pending = Offer::query()->where('user_id', $user->id)->where('template', 'pending')->count();
echo "pending_left={$pending}\n";
if ($unknown !== []) {
    echo 'fallback_count='.count($unknown)."\n";
    foreach (array_slice($unknown, 0, 25) as $line) {
        echo "  {$line}\n";
    }
}
echo "DONE\n";
