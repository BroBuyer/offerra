<?php

/**
 * Look up Admin (BRO) offers with missing CF zone on primary+backup slots.
 * If found on backup — bind offer to backup slot and refresh DNS meta.
 *
 * Run: php scripts/find-zones-on-backup-cf.php [domain ...]
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\User;
use App\Models\UserSetting;
use App\Services\CloudflareClient;

$domainsArg = array_values(array_filter(array_slice($argv, 1), fn ($a) => ! str_starts_with($a, '-')));
$apply = ! in_array('--dry', $argv, true);

$user = User::query()->where('email', 'admin@offerra.local')->first()
    ?? User::query()->where('name', 'Admin')->orWhere('name', 'BRO')->firstOrFail();

/** @var UserSetting $settings */
$settings = $user->settings;
if (! $settings) {
    fwrite(STDERR, "No settings for admin\n");
    exit(1);
}

$cf = app(CloudflareClient::class);

$hasPrimary = $settings->hasCloudflareSlot('primary');
$hasBackup = $settings->hasCloudflareSlot('backup');
$primaryName = trim((string) ($settings->cloudflare_account_name ?? '')) ?: 'primary';
$backupName = trim((string) ($settings->cloudflare_backup_account_name ?? '')) ?: 'backup';

echo "user={$user->email} id={$user->id}\n";
echo "primary={$primaryName} ready=".($hasPrimary ? '1' : '0')."\n";
echo "backup={$backupName} ready=".($hasBackup ? '1' : '0')."\n";
echo 'apply='.($apply ? '1' : '0')."\n";

if (! $hasBackup) {
    fwrite(STDERR, "Backup CF credentials missing\n");
    exit(1);
}

function settingsForSlot(UserSetting $base, string $slot): UserSetting
{
    $creds = $base->cloudflareSlotCredentials($slot);
    $clone = $base->replicate();
    $clone->id = $base->id;
    $clone->exists = true;
    $clone->cloudflare_api_token = $creds['token'];
    $clone->cloudflare_account_id = $creds['account_id'];
    $clone->cloudflare_account_name = $creds['name'];

    return $clone;
}

function lookup(CloudflareClient $cf, UserSetting $settings, string $domain): array
{
    try {
        $zone = $cf->findZone($settings, $domain);
        if (! $zone) {
            return ['ok' => false, 'error' => 'not_found'];
        }
        $zoneId = (string) ($zone['zone_id'] ?? '');
        $ns = $zone['nameservers'] ?? [];
        $a = [];
        if ($zoneId !== '') {
            try {
                foreach ($cf->listARecords($settings, $zoneId, $domain) as $rec) {
                    $a[] = trim((string) ($rec['content'] ?? ''));
                }
            } catch (Throwable $e) {
                // ignore A lookup errors
            }
        }

        return [
            'ok' => true,
            'zone_id' => $zoneId,
            'nameservers' => $ns,
            'a' => array_values(array_filter($a)),
            'status' => $zone['status'] ?? null,
        ];
    } catch (Throwable $e) {
        return ['ok' => false, 'error' => $e->getMessage()];
    }
}

if ($domainsArg === []) {
    $domainsArg = [
        'fynvax-official.com',
        'quarfinatrade.online',
    ];
    // also pull other admin offers with zone-not-found dns_error
    $extras = Offer::query()
        ->where('user_id', $user->id)
        ->whereNotIn('status', ['archived', 'archiving'])
        ->where(function ($q) {
            $q->where('infra_meta->dns_error', 'like', '%зону не знайдено%')
                ->orWhere('infra_meta->dns_error', 'like', '%zone not found%')
                ->orWhere('infra_meta->dns_error', 'like', '%Zone%');
        })
        ->pluck('domain')
        ->map(fn ($d) => strtolower(trim((string) $d)))
        ->filter()
        ->values()
        ->all();
    $domainsArg = array_values(array_unique(array_merge($domainsArg, $extras)));
}

echo 'domains='.count($domainsArg)."\n";

$primarySettings = $hasPrimary ? settingsForSlot($settings, 'primary') : null;
$backupSettings = settingsForSlot($settings, 'backup');

$foundBackup = 0;
$foundPrimary = 0;
$missingBoth = 0;
$bound = 0;

foreach ($domainsArg as $domain) {
    $domain = strtolower(trim($domain));
    echo "\n=== {$domain} ===\n";

    $offer = Offer::query()->where('user_id', $user->id)->where('domain', $domain)->first();
    if ($offer) {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        echo 'offer#'.$offer->id.' slot='.(($meta['cloudflare_slot'] ?? '') === 'backup' ? 'backup' : 'primary')
            .' zone='.($meta['cloudflare_zone_id'] ?? '-')
            .' dns_err='.($meta['dns_error'] ?? '-')."\n";
    } else {
        echo "offer: not in DB\n";
    }

    $p = $primarySettings ? lookup($cf, $primarySettings, $domain) : ['ok' => false, 'error' => 'no_primary'];
    $b = lookup($cf, $backupSettings, $domain);

    echo 'primary: '.($p['ok'] ? 'FOUND zone='.$p['zone_id'].' A='.implode(',', $p['a'] ?: ['-']) : 'NO ('.($p['error'] ?? '?').')')."\n";
    echo 'backup:  '.($b['ok'] ? 'FOUND zone='.$b['zone_id'].' A='.implode(',', $b['a'] ?: ['-']).' ns='.implode(',', $b['nameservers'] ?? []) : 'NO ('.($b['error'] ?? '?').')')."\n";

    if ($p['ok']) {
        $foundPrimary++;
    }
    if ($b['ok']) {
        $foundBackup++;
    }
    if (! $p['ok'] && ! $b['ok']) {
        $missingBoth++;
    }

    // If on backup and offer exists — bind to backup slot
    if ($apply && $offer && $b['ok']) {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $meta['cloudflare_slot'] = 'backup';
        $meta['cloudflare_zone_id'] = $b['zone_id'];
        if (! empty($b['nameservers'])) {
            $meta['nameservers'] = $b['nameservers'];
        }
        unset($meta['dns_error'], $meta['dns_via']);
        $meta['cloudflare'] = 'done';
        $offer->forceFill(['infra_meta' => $meta])->save();
        $bound++;
        echo "BOUND → backup slot\n";
    }
}

echo "\n--- summary ---\n";
echo "checked=".count($domainsArg)." primary_hits={$foundPrimary} backup_hits={$foundBackup} missing_both={$missingBoth} bound={$bound}\n";
echo "DONE\n";
