<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\OriginServer;
use Illuminate\Support\Facades\Http;
use phpseclib3\Net\SSH2;

$rows = Offer::query()
    ->where(function ($q) {
        $q->where('brand', 'like', '%Majest%Finara%')
            ->orWhere('domain', 'like', '%majeste-finara%');
    })
    ->orderBy('id')
    ->get(['id', 'domain', 'brand', 'geo', 'lang', 'template', 'status', 'infra_meta']);

echo "=== Majeste Finara family ===\n";
foreach ($rows as $o) {
    echo "#{$o->id} {$o->domain} geo={$o->geo} lang={$o->lang} tpl={$o->template} status={$o->status}\n";
}

$offer = Offer::query()->where('domain', 'majeste-finara-be.com')->first();
$meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
$host = (string) ($meta['deploy_host'] ?? '');
$origin = OriginServer::query()->where('host', $host)->first();

$ssh = new SSH2($origin->host, (int) ($origin->port ?: 22), 15);
$ssh->setTimeout(45);
$ssh->login($origin->username, $origin->password);
$base = '/var/www/offers/majeste-finara-be.com/public_html';
echo "\n=== on disk ===\n";
echo $ssh->exec("ls -la {$base} | head -20; echo '--- langs ---'; ls {$base}/langs 2>/dev/null; echo '--- SITE_LANG ---'; grep SITE_LANG {$base}/includes/config.php; echo '--- form language hidden ---'; grep -n language {$base}/includes/form.php {$base}/langs/*/includes/form.php 2>/dev/null | head -20");
$ssh->disconnect();

echo "\n=== public HTML sniff ===\n";
try {
    $html = Http::timeout(12)->withHeaders([
        'Accept-Language' => 'fr-BE,fr;q=0.9',
        'User-Agent' => 'Mozilla/5.0 OfferraLangCheck',
    ])->get('https://majeste-finara-be.com/')->body();
    if (preg_match('/<html[^>]*>/i', $html, $m)) {
        echo "html_tag={$m[0]}\n";
    }
    if (preg_match('/<title>([^<]+)<\\/title>/i', $html, $m)) {
        echo "title={$m[1]}\n";
    }
    if (preg_match('/name=["\']language["\'][^>]*value=["\']([^"\']+)["\']/i', $html, $m)
        || preg_match('/value=["\']([^"\']+)["\'][^>]*name=["\']language["\']/i', $html, $m)) {
        echo "form_language={$m[1]}\n";
    } else {
        echo "form_language=(not found in html)\n";
    }
    // French vs English content hint
    $frHits = preg_match_all('/\b(Commencer|Inscription|Continuer|Prénom|Nom)\b/u', $html);
    $enHits = preg_match_all('/\b(Get started|Sign up|Continue|First name|Last name)\b/i', $html);
    echo "fr_word_hits={$frHits} en_word_hits={$enHits}\n";
} catch (Throwable $e) {
    echo 'http_err='.$e->getMessage()."\n";
}
