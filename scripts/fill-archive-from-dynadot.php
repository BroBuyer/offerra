<?php

/**
 * Fill offers archive from Dynadot inventory (all users with Dynadot keys).
 * Domains already in offers → update dynadot_* if empty.
 * Domains only on Dynadot → create status=archived stubs.
 *
 * Run: php scripts/fill-archive-from-dynadot.php [--dry]
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

$dry = in_array('--dry', $argv, true);

/**
 * @return list<string>
 */
function listDynadotDomains(string $apiKey): array
{
    $response = Http::timeout(180)->get('https://api.dynadot.com/api3.json', [
        'key' => $apiKey,
        'command' => 'list_domain',
    ]);

    if (! $response->successful()) {
        throw new RuntimeException('HTTP '.$response->status());
    }

    $json = $response->json();
    if (! is_array($json)) {
        throw new RuntimeException('invalid json');
    }

    $wrap = $json['ListDomainInfoResponse'] ?? null;
    if (! is_array($wrap)) {
        throw new RuntimeException('no ListDomainInfoResponse: '.substr((string) $response->body(), 0, 240));
    }

    $code = (string) ($wrap['ResponseCode'] ?? '');
    $status = strtolower((string) ($wrap['Status'] ?? ''));
    if ($code !== '0' && $status !== 'success') {
        throw new RuntimeException('API error: '.json_encode($wrap['Error'] ?? $wrap));
    }

    $main = $wrap['MainDomains'] ?? [];
    if (isset($main['Name'])) {
        $main = [$main];
    }
    if (! is_array($main)) {
        return [];
    }

    $out = [];
    foreach ($main as $row) {
        if (! is_array($row)) {
            continue;
        }
        $name = strtolower(trim((string) ($row['Name'] ?? '')));
        if ($name !== '') {
            $out[] = $name;
        }
    }

    return array_values(array_unique($out));
}

function brandFromDomain(string $domain): string
{
    $host = explode('.', $domain)[0] ?? $domain;
    $host = str_replace(['-', '_'], ' ', $host);
    $brand = Str::title($host);

    return $brand !== '' ? $brand : $domain;
}

function uniqueFolder(int $userId, string $domain): string
{
    $safe = preg_replace('/[^a-z0-9]+/i', '_', $domain) ?: 'domain';
    $base = 'arch_'.$userId.'_'.strtolower($safe);
    $folder = $base;
    $i = 0;
    while (Offer::query()->where('folder', $folder)->exists()) {
        $i++;
        $folder = $base.'_'.$i;
    }

    return $folder;
}

/** @var array<string, array{user_id:int,name:string,api_key:string,contact_id:string}> */
$accounts = [];

foreach (User::with('settings')->orderBy('id')->get() as $user) {
    $settings = $user->settings;
    if ($settings && filled($settings->dynadot_api_key)) {
        $key = (string) $settings->dynadot_api_key;
        $name = trim((string) ($settings->dynadot_account_name ?? ''));
        if ($name === '') {
            // fallback labels
            $name = match ((int) $user->id) {
                1 => 'brobuyer88',
                2 => 'EGO-settings',
                3 => 'jellyfish.tdt',
                default => 'user'.$user->id,
            };
        }
        $accounts[sha1($key)] = [
            'user_id' => (int) $user->id,
            'name' => $name,
            'api_key' => $key,
            'contact_id' => trim((string) ($settings->dynadot_contact_id ?? '')),
        ];
    }

    // Distinct Dynadot creds already on offers
    Offer::query()
        ->where('user_id', $user->id)
        ->whereNotNull('dynadot_api_key')
        ->where('dynadot_api_key', '!=', '')
        ->orderBy('id')
        ->chunkById(200, function ($chunk) use (&$accounts, $user): void {
            foreach ($chunk as $offer) {
                $key = (string) $offer->dynadot_api_key;
                if ($key === '') {
                    continue;
                }
                $hash = sha1($key);
                $name = trim((string) ($offer->dynadot_account_name ?? ''));
                if ($name === '') {
                    $name = 'dyn-'.$user->id.'-'.substr($hash, 0, 6);
                }
                // Prefer named offer account over generic settings label when same key
                if (! isset($accounts[$hash]) || str_starts_with($accounts[$hash]['name'], 'EGO-settings') || str_starts_with($accounts[$hash]['name'], 'dyn-')) {
                    $accounts[$hash] = [
                        'user_id' => (int) $user->id,
                        'name' => $name,
                        'api_key' => $key,
                        'contact_id' => trim((string) ($offer->dynadot_contact_id ?? '')),
                    ];
                } elseif (isset($accounts[$hash]) && $accounts[$hash]['contact_id'] === '' && filled($offer->dynadot_contact_id)) {
                    $accounts[$hash]['contact_id'] = trim((string) $offer->dynadot_contact_id);
                }
            }
        });
}

echo 'dry='.($dry ? '1' : '0')."\n";
echo 'dynadot_accounts='.count($accounts)."\n";
foreach ($accounts as $acc) {
    echo "  user#{$acc['user_id']} {$acc['name']} contact=".($acc['contact_id'] ?: '-')."\n";
}

$created = 0;
$updated = 0;
$skippedLive = 0;
$skippedArchived = 0;
$errors = 0;
$byUserCreated = [];
$byAccountDomains = [];

foreach ($accounts as $acc) {
    echo "scan {$acc['name']} (user#{$acc['user_id']}) ... ";
    try {
        $domains = listDynadotDomains($acc['api_key']);
    } catch (Throwable $e) {
        echo 'FAIL '.$e->getMessage()."\n";
        $errors++;
        usleep(300_000);
        continue;
    }
    echo 'domains='.count($domains)."\n";
    $byAccountDomains[$acc['name']] = count($domains);

    foreach ($domains as $domain) {
        $existing = Offer::query()
            ->whereRaw('LOWER(domain) = ?', [$domain])
            ->orderByRaw("CASE WHEN status IN ('archived','archiving','teardown_failed') THEN 1 ELSE 0 END")
            ->orderBy('id')
            ->first();

        if ($existing) {
            $needs = false;
            $patch = [];
            if (! filled($existing->dynadot_api_key)) {
                $patch['dynadot_api_key'] = $acc['api_key'];
                $needs = true;
            }
            if (! filled($existing->dynadot_account_name)) {
                $patch['dynadot_account_name'] = $acc['name'];
                $needs = true;
            }
            if (! filled($existing->dynadot_contact_id) && $acc['contact_id'] !== '') {
                $patch['dynadot_contact_id'] = $acc['contact_id'];
                $needs = true;
            }
            // If live offer belongs to another user — do not steal; only fill empty keys
            if ($needs) {
                if (! $dry) {
                    $existing->forceFill($patch)->save();
                }
                $updated++;
            } else {
                if (in_array($existing->status, ['archived', 'archiving', 'teardown_failed'], true)) {
                    $skippedArchived++;
                } else {
                    $skippedLive++;
                }
            }
            continue;
        }

        // Create archive stub
        if (! $dry) {
            $folder = uniqueFolder($acc['user_id'], $domain);
            $offer = new Offer([
                'user_id' => $acc['user_id'],
                'folder' => $folder,
                'brand' => brandFromDomain($domain),
                'domain' => $domain,
                'geo' => 'XX',
                'lang' => 'en',
                'phone' => null,
                'phone_countries' => null,
                'min_deposit' => '250',
                'currency' => 'EUR',
                'template' => 'pending',
                'status' => 'archived',
                'archived_at' => now(),
                'dynadot_account_name' => $acc['name'],
                'dynadot_api_key' => $acc['api_key'],
                'dynadot_contact_id' => $acc['contact_id'] !== '' ? $acc['contact_id'] : null,
                'dynadot_sandbox' => false,
                'provision_infrastructure' => false,
                'vitals_enabled' => false,
                'from_search_team' => false,
                'availability_status' => 'unchecked',
                'teardown_meta' => [
                    'source' => 'dynadot_inventory',
                    'dynadot_account' => $acc['name'],
                    'imported_at' => now()->toIso8601String(),
                ],
            ]);
            $offer->save();
        }
        $created++;
        $byUserCreated[$acc['user_id']] = ($byUserCreated[$acc['user_id']] ?? 0) + 1;
    }

    usleep(300_000);
}

echo "\n=== summary ===\n";
echo "created_archived={$created}\n";
echo "updated_keys={$updated}\n";
echo "already_live_ok={$skippedLive}\n";
echo "already_archived_ok={$skippedArchived}\n";
echo "scan_errors={$errors}\n";
echo "by_user_created:\n";
foreach ($byUserCreated as $uid => $c) {
    echo "  user#{$uid}: {$c}\n";
}
echo "domains_per_account:\n";
foreach ($byAccountDomains as $n => $c) {
    echo "  {$n}: {$c}\n";
}

foreach (User::orderBy('id')->get() as $u) {
    $arch = Offer::where('user_id', $u->id)->where('status', 'archived')->count();
    $live = Offer::where('user_id', $u->id)->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])->count();
    echo "final {$u->name}: live={$live} archived={$arch}\n";
}

echo "DONE\n";
