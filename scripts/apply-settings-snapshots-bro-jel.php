<?php

/**
 * Apply user settings CF/Dynadot/deploy snapshots onto all offers for BRO + JEL.
 * Run on panel: php scripts/apply-settings-snapshots-bro-jel.php
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\User;

$targets = [
    'BRO' => 'admin@offerra.local',
    'JEL' => 'jellyfish.tdt@gmail.com',
];

foreach ($targets as $tag => $email) {
    $user = User::query()->with('settings')->where('email', $email)->first();
    if ($user === null || $user->settings === null) {
        echo "{$tag}: missing user/settings\n";
        continue;
    }

    $settings = $user->settings;
    $snapshot = $settings->providerSnapshotForOffer();
    $deployHost = trim((string) ($settings->deploy_host ?: $settings->deploy_panel_name ?: ''));

    if ($deployHost === '') {
        echo "{$tag}: no deploy_host in settings — skip\n";
        continue;
    }

    if (! filled($snapshot['cloudflare_api_token']) || ! filled($snapshot['dynadot_api_key'])) {
        echo "{$tag}: incomplete CF/Dynadot in settings — skip\n";
        continue;
    }

    $n = 0;
    Offer::query()
        ->where('user_id', $user->id)
        ->orderBy('id')
        ->chunkById(100, function ($chunk) use ($snapshot, $deployHost, &$n): void {
            foreach ($chunk as $offer) {
                $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
                $meta['deploy_host'] = $deployHost;

                $offer->forceFill([
                    ...$snapshot,
                    'deploy_panel_name' => $deployHost,
                    'infra_meta' => $meta,
                    'provision_infrastructure' => true,
                ])->save();
                $n++;
            }
        });

    $sample = Offer::query()->where('user_id', $user->id)->orderByDesc('id')->first();
    echo "{$tag} #{$user->id}: updated {$n} offers → deploy={$deployHost}"
        ." cf=".($snapshot['cloudflare_account_name'] ?? '-')
        ." dyn=".($snapshot['dynadot_account_name'] ?? '-')
        ."\n";
    if ($sample) {
        echo "  sample #{$sample->id} {$sample->domain}"
            ." panel={$sample->deploy_panel_name}"
            ." cf={$sample->cloudflare_account_name}"
            ." dyn={$sample->dynadot_account_name}"
            ." cf_token=".(filled($sample->cloudflare_api_token) ? 'yes' : 'no')
            ." dyn_key=".(filled($sample->dynadot_api_key) ? 'yes' : 'no')
            ."\n";
    }
}

echo "done\n";
