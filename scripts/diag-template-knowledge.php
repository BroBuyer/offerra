<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\OriginServer;
use App\Models\User;
use App\Support\SecretValue;

// 1) Do any BRO offers already have non-pending template?
$user = User::query()->where('email', 'admin@offerra.local')->firstOrFail();
$tpl = Offer::query()->where('user_id', $user->id)
    ->selectRaw('template, count(*) c')->groupBy('template')->pluck('c', 'template');
echo "bro_templates_in_db=".json_encode($tpl)."\n";

// 2) Sample a few sites on .44 — read manifest/config for template if present
$settings = $user->settings;
$pass = SecretValue::normalize((string) $settings->deploy_password);
$userSsh = $settings->deploy_username ?: 'root';
$port = (int) ($settings->deploy_port ?: 22);
$host = $settings->deploy_host;

$remote = <<<'BASH'
cd /var/www/offers 2>/dev/null || { echo NO_OFFERS_DIR; exit 0; }
echo TOTAL=$(ls -1 | wc -l)
# pick 8 random/newest dirs
ls -1t | head -8 | while read d; do
  echo "=== $d ==="
  if [ -f "$d/public_html/manifest.json" ]; then
    echo MANIFEST=$(python3 -c "import json; m=json.load(open('$d/public_html/manifest.json')); print(m.get('template') or m.get('template_id') or m.get('theme') or list(m.keys())[:8])" 2>/dev/null || head -c 200 "$d/public_html/manifest.json")
  elif [ -f "$d/manifest.json" ]; then
    echo MANIFEST=$(python3 -c "import json; m=json.load(open('$d/manifest.json')); print(m.get('template') or m.get('template_id') or m.get('theme') or list(m.keys())[:8])" 2>/dev/null || head -c 200 "$d/manifest.json")
  else
    echo NO_MANIFEST
  fi
  if [ -f "$d/public_html/includes/config.php" ]; then
    echo CONFIG_HINT=$(grep -E "TEMPLATE|template|SITE_NAME|BRAND" "$d/public_html/includes/config.php" | head -5 | tr '\n' '|' )
  elif [ -f "$d/includes/config.php" ]; then
    echo CONFIG_HINT=$(grep -E "TEMPLATE|template|SITE_NAME|BRAND" "$d/includes/config.php" | head -5 | tr '\n' '|' )
  fi
  ls "$d/public_html" 2>/dev/null | head -5 | sed 's/^/  files: /'
done
BASH;

$cmd = sprintf(
    'SSHPASS=%s sshpass -e ssh -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null -o ConnectTimeout=15 -p %d %s@%s %s',
    escapeshellarg($pass),
    $port,
    escapeshellarg($userSsh),
    escapeshellarg($host),
    escapeshellarg($remote),
);
echo "=== SAMPLE ON .44 ===\n";
passthru($cmd.' 2>&1');

// 3) local offers/ on panel?
$local = base_path('offers');
echo "\nlocal_offers_dir=". (is_dir($local) ? 'yes' : 'no') ."\n";
if (is_dir($local)) {
    $count = 0;
    foreach (scandir($local) ?: [] as $f) {
        if ($f === '.' || $f === '..') continue;
        $count++;
    }
    echo "local_offers_count={$count}\n";
}

// 4) known template ids on panel
$tplPath = base_path('templates');
echo "templates_dir=". (is_dir($tplPath) ? 'yes' : 'no') ."\n";
if (is_dir($tplPath)) {
    $ids = array_values(array_filter(scandir($tplPath) ?: [], fn ($x) => $x !== '.' && $x !== '..' && is_dir($tplPath.'/'.$x)));
    echo "template_ids=".implode(',', array_slice($ids, 0, 30)).(count($ids)>30?'...':'')." count=".count($ids)."\n";
}
