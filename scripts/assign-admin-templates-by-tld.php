<?php

/**
 * Assign templates to Admin (BRO) offers by TLD rules.
 * Run: php scripts/assign-admin-templates-by-tld.php
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\User;
use App\Services\TemplateCatalog;

$user = User::query()->where('email', 'admin@offerra.local')->firstOrFail();

$catalog = app(TemplateCatalog::class);
$all = $catalog->ids();
$pool = array_values(array_filter(
    $all,
    static fn (string $id) => ! in_array($id, ['multilang'], true),
));

if ($pool === []) {
    fwrite(STDERR, "No templates in pool\n");
    exit(1);
}

echo 'pool='.implode(',', $pool)."\n";

$counts = [];
$n = 0;

Offer::query()
    ->where('user_id', $user->id)
    ->orderBy('id')
    ->chunkById(100, function ($chunk) use ($pool, &$counts, &$n): void {
        foreach ($chunk as $offer) {
            $domain = strtolower(trim((string) $offer->domain));
            $tld = '';
            if (str_contains($domain, '.')) {
                $tld = substr($domain, strrpos($domain, '.') + 1);
            }

            if ($tld === 'com') {
                $template = 'default';
            } elseif ($tld === 'online') {
                $template = 'noctra';
            } elseif ($tld === 'live') {
                $template = 'solano';
            } else {
                $template = $pool[random_int(0, count($pool) - 1)];
            }

            // Ensure chosen template exists
            if (! in_array($template, $pool, true) && $template !== 'default') {
                $template = $pool[0];
            }

            $offer->forceFill(['template' => $template])->save();
            $counts[$template] = ($counts[$template] ?? 0) + 1;
            $counts['_tld_'.$tld] = ($counts['_tld_'.$tld] ?? 0) + 1;
            $n++;
        }
    });

echo "updated={$n}\n";
echo "by_template:\n";
foreach ($counts as $k => $v) {
    if (str_starts_with($k, '_tld_')) {
        continue;
    }
    echo "  {$k}: {$v}\n";
}
echo "by_tld:\n";
foreach ($counts as $k => $v) {
    if (! str_starts_with($k, '_tld_')) {
        continue;
    }
    echo '  '.substr($k, 5).": {$v}\n";
}

$pending = Offer::query()->where('user_id', $user->id)->where('template', 'pending')->count();
$multi = Offer::query()->where('user_id', $user->id)->where('template', 'multilang')->count();
echo "pending_left={$pending} multilang={$multi}\n";
