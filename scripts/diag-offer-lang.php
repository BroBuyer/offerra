<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\OriginServer;
use phpseclib3\Net\SSH2;

$domain = $argv[1] ?? 'majeste-finara-be.com';
$domain = strtolower(trim($domain));

$offer = Offer::query()->where('domain', $domain)->with('user.settings')->first();
if (! $offer) {
    echo "OFFER NOT FOUND {$domain}\n";
    exit(1);
}

echo "offer#{$offer->id} brand={$offer->brand} geo={$offer->geo} lang={$offer->lang} template={$offer->template} status={$offer->status}\n";
$meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
$host = $meta['deploy_host'] ?? null;
echo "deploy_host=".($host ?: 'null')."\n";

$origin = $host ? OriginServer::query()->where('host', $host)->first() : null;
if (! $origin) {
    echo "NO ORIGIN\n";
    exit(1);
}

$ssh = new SSH2($origin->host, (int) ($origin->port ?: 22), 15);
$ssh->setTimeout(60);
if (! $ssh->login($origin->username, $origin->password)) {
    echo "SSH FAIL\n";
    exit(1);
}

$base = "/var/www/offers/{$domain}/public_html";
$cmd = <<<CMD
echo '=== config defines ==='
grep -nE "SITE_LANG|CRM_|TG_|OFFERRA|define\\('LANG|LANGUAGE|locale" {$base}/includes/config.php | head -60
echo '=== html lang / hreflang ==='
head -n 40 {$base}/index.php 2>/dev/null | grep -iE 'lang=|SITE_LANG|html' | head -20
ls {$base}/langs 2>/dev/null | head -20
echo '=== lead processor lang bits ==='
grep -nE "lang|language|SITE_LANG|CRM_" {$base}/integration/LeadProcessor.php 2>/dev/null | head -40
grep -nE "lang|language|SITE_LANG" {$base}/includes/helpers.php 2>/dev/null | head -30
CMD;

echo $ssh->exec($cmd);
$ssh->disconnect();
