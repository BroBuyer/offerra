<?php

/**
 * Detect EGO offer templates from live sites (manifest.json / HTML fingerprints)
 * and write them into offers.template.
 *
 * Run: php scripts/assign-ego-templates-from-live.php [--dry] [--limit=N]
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\OriginServer;
use App\Models\User;
use App\Services\TemplateCatalog;
use Illuminate\Support\Facades\Schema;

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

echo "EGO: id={$user->id} name={$user->name} email={$user->email}\n";

$offersQuery = Offer::query()->where('user_id', $user->id);
echo 'offers='.$offersQuery->count()."\n";

$byTpl = Offer::query()
    ->where('user_id', $user->id)
    ->selectRaw("COALESCE(template, '(null)') as tpl, count(*) as c")
    ->groupBy('tpl')
    ->orderByDesc('c')
    ->get();
echo "--- templates before ---\n";
foreach ($byTpl as $r) {
    echo "  {$r->tpl}={$r->c}\n";
}

echo "--- origin servers ---\n";
if (class_exists(OriginServer::class)) {
    $servers = OriginServer::query()->orderBy('id')->get();
    foreach ($servers as $s) {
        $ip = $s->ip ?? $s->host ?? $s->hostname ?? '?';
        $label = $s->name ?? $s->label ?? '';
        $owner = $s->user_id ?? null;
        echo "  #{$s->id} {$label} {$ip} user_id=".($owner ?? 'null')."\n";
    }
} else {
    echo "  (OriginServer model missing)\n";
}

// Also show distinct server IPs from EGO offers if columns exist
$cols = ['id', 'domain', 'template', 'status', 'lang'];
foreach (['origin_server_id', 'server_ip', 'deploy_host', 'origin_ip'] as $c) {
    if (Schema::hasColumn('offers', $c)) {
        $cols[] = $c;
    }
}

$catalog = app(TemplateCatalog::class);
$allowed = $catalog->ids();

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

function http_get(string $url, int $timeout = 10): array
{
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_MAXREDIRS => 5,
        CURLOPT_CONNECTTIMEOUT => 5,
        CURLOPT_TIMEOUT => $timeout,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_USERAGENT => 'OfferraTemplateProbe/1.0',
        CURLOPT_HTTPHEADER => ['Accept: text/html,application/json,*/*'],
    ]);
    $body = curl_exec($ch);
    $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $err = curl_error($ch);
    curl_close($ch);

    return [$code, is_string($body) ? $body : '', $err];
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
        if (in_array('default', $allowed, true)) {
            return 'default';
        }
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
$offers = $query->get($cols);

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

    [$code, $body] = http_get('https://'.$domain.'/manifest.json');
    if ($code >= 200 && $code < 400 && $body !== '') {
        $json = json_decode($body, true);
        if (is_array($json) && ! empty($json['template'])) {
            $tpl = strtolower(trim((string) $json['template']));
            if (in_array($tpl, $allowed, true)) {
                $detected = $tpl;
                $source = 'manifest';
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

    if ($n % 50 === 0 || $n === $total) {
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

$pending = Offer::query()->where('user_id', $user->id)->where('template', 'pending')->count();
echo "pending_left={$pending}\n";

if ($unknown !== []) {
    echo 'fallback_count='.count($unknown)."\n";
    echo "fallback_samples:\n";
    foreach (array_slice($unknown, 0, 30) as $line) {
        echo "  {$line}\n";
    }
}

echo "DONE\n";
