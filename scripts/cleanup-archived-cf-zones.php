<?php

/**
 * Delete leftover Cloudflare zones for archived offers (missed offer/backup tokens).
 *
 *   php scripts/cleanup-archived-cf-zones.php dry-run
 *   php scripts/cleanup-archived-cf-zones.php run
 *   php scripts/cleanup-archived-cf-zones.php run --limit=50
 */
require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\User;
use App\Models\UserSetting;
use App\Services\CloudflareClient;
use Illuminate\Support\Facades\Http;

$args = array_slice($argv, 1);
$doRun = in_array('run', $args, true);
$limit = 0;
foreach ($args as $a) {
    if (str_starts_with($a, '--limit=')) {
        $limit = max(0, (int) substr($a, 8));
    }
}

$cf = app(CloudflareClient::class);

function tokenProbes(Offer $offer): array
{
    $out = [];
    $owner = $offer->user?->settings;
    $add = function (string $label, ?string $token) use (&$out): void {
        $token = CloudflareClient::normalizeApiToken($token);
        if ($token === '') {
            return;
        }
        foreach ($out as $existing) {
            if ($existing['token'] === $token) {
                return;
            }
        }
        $out[] = ['label' => $label, 'token' => $token];
    };

    $add('offer', $offer->cloudflare_api_token);
    if ($owner) {
        $add('owner', $owner->cloudflare_api_token);
        $add('owner_backup', $owner->cloudflare_backup_api_token);
    }
    $admin = User::query()->where('role', User::ROLE_ADMIN)->orderBy('id')->with('settings')->first()?->settings;
    if ($admin) {
        $add('admin', $admin->cloudflare_api_token);
        $add('admin_backup', $admin->cloudflare_backup_api_token);
    }

    return $out;
}

$query = Offer::query()
    ->with('user.settings')
    ->whereIn('status', ['archived', 'teardown_failed'])
    ->orderByDesc('id');

if ($limit > 0) {
    $query->limit($limit);
}

$offers = $query->get();
echo 'candidates='.$offers->count().' mode='.($doRun ? 'run' : 'dry-run').PHP_EOL;

$stats = ['checked' => 0, 'found' => 0, 'deleted' => 0, 'already_gone' => 0, 'errors' => 0, 'no_token' => 0];

foreach ($offers as $offer) {
    $domain = strtolower(trim($offer->domain));
    $probes = tokenProbes($offer);
    if ($probes === []) {
        $stats['no_token']++;
        continue;
    }

    $stats['checked']++;
    $foundId = null;
    $foundLabel = null;

    foreach ($probes as $probe) {
        try {
            $resp = Http::withToken($probe['token'])->acceptJson()->timeout(20)
                ->get('https://api.cloudflare.com/client/v4/zones', [
                    'name' => $domain,
                    'per_page' => 5,
                ]);
            $rows = $resp->json('result') ?? [];
            if ($rows !== []) {
                $foundId = (string) ($rows[0]['id'] ?? '');
                $foundLabel = $probe['label'];
                break;
            }
        } catch (Throwable $e) {
            // continue other tokens
        }
    }

    if ($foundId === null || $foundId === '') {
        $stats['already_gone']++;
        continue;
    }

    $stats['found']++;
    echo "FOUND {$domain} via={$foundLabel} zone={$foundId}\n";

    if (! $doRun) {
        continue;
    }

    // Build a settings probe with the winning token for deleteZone().
    $base = $offer->user?->settings ?? UserSetting::query()->first();
    if (! $base) {
        echo "  SKIP no settings base\n";
        $stats['errors']++;
        continue;
    }
    $probeSettings = $base->replicate();
    foreach ($probes as $p) {
        if ($p['label'] === $foundLabel) {
            $probeSettings->cloudflare_api_token = $p['token'];
            break;
        }
    }

    try {
        $result = $cf->deleteZone($probeSettings, $foundId);
        echo "  delete={$result}\n";
        if ($result === 'deleted' || $result === 'already_gone') {
            $stats['deleted']++;
        }
    } catch (Throwable $e) {
        echo '  ERR '.$e->getMessage()."\n";
        $stats['errors']++;
    }

    usleep(200_000); // gentle on CF rate limits
}

echo "\n=== summary ===\n";
foreach ($stats as $k => $v) {
    echo "{$k}={$v}\n";
}
if (! $doRun) {
    echo "Re-run with: php scripts/cleanup-archived-cf-zones.php run\n";
}
