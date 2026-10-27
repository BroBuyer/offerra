<?php

namespace App\Console\Commands;

use App\Jobs\DeployOfferJob;
use App\Models\Offer;
use App\Models\OriginServer;
use App\Support\ValidationJsFormToken;
use Illuminate\Console\Command;
use phpseclib3\Net\SFTP;

class PatchFormTokenJs extends Command
{
    protected $signature = 'offers:patch-form-token-js
        {--dry-run : Тільки звіт, без запису і редеплою}';

    protected $description = 'Знайти живі ленди без fetch form-token.php і пропатчити validation.js на origin';

    public function handle(): int
    {
        $dry = (bool) $this->option('dry-run');
        $patched = 0;
        $queued = 0;
        $failed = 0;
        $seen = 0;

        foreach (OriginServer::query()->where('is_active', true)->orderBy('id')->get() as $server) {
            try {
                $stats = $this->patchServer($server, $dry);
            } catch (\Throwable $e) {
                $this->error("{$server->host}: {$e->getMessage()}");
                $failed++;

                continue;
            }

            $seen += $stats['seen'];
            $patched += $stats['patched'];
            $queued += $stats['queued'];
            $this->line(sprintf(
                '%s stale=%d patched=%d redeploy=%d',
                $server->host,
                $stats['seen'],
                $stats['patched'],
                $stats['queued'],
            ));
        }

        $this->info("total stale={$seen} patched={$patched} redeploy={$queued} hosts_failed={$failed}");

        return $failed > 0 ? self::FAILURE : self::SUCCESS;
    }

    /**
     * @return array{seen: int, patched: int, queued: int}
     */
    private function patchServer(OriginServer $server, bool $dry): array
    {
        $sftp = new SFTP((string) $server->host, (int) ($server->port ?: 22), 25);
        $sftp->setTimeout(40);

        if (! $sftp->login((string) $server->username, (string) $server->password)) {
            $sftp->disconnect();
            throw new \RuntimeException('SSH login failed');
        }

        $raw = (string) $sftp->exec('grep -L form-token.php /var/www/offers/*/public_html/integration/validation.js 2>/dev/null');
        $paths = array_values(array_filter(array_map('trim', preg_split('/\r\n|\n/', $raw) ?: [])));

        $patched = 0;
        $queued = 0;

        foreach ($paths as $path) {
            if (! preg_match('#^/var/www/offers/([a-z0-9.-]+)/public_html/integration/validation\.js$#', $path, $match)) {
                continue;
            }

            $domain = $match[1];
            $offer = Offer::query()->with('user')->where('domain', $domain)->first();
            $js = $sftp->get($path);

            if (! is_string($js) || $js === '') {
                $this->warn("  empty {$domain}");
                continue;
            }

            $next = ValidationJsFormToken::ensure($js);
            $hasTokenPhp = $sftp->file_exists(dirname($path).'/form-token.php');
            $patchedOk = str_contains($next, 'form-token.php') && $next !== $js;

            if ($dry) {
                $this->line("  {$domain} template=".($offer?->template ?? '?')." lang=".($offer?->lang ?? '?')." would=".($patchedOk && $hasTokenPhp ? 'patch' : 'redeploy'));
                if ($patchedOk && $hasTokenPhp) {
                    $patched++;
                } else {
                    $queued++;
                }
                continue;
            }

            if ($patchedOk && $hasTokenPhp) {
                if (! $sftp->put($path, $next)) {
                    $this->warn("  write failed {$domain}");
                    $queued += $this->queueRedeploy($offer);
                    continue;
                }
                $sftp->exec('chown www-data:www-data '.escapeshellarg($path).' && chmod 644 '.escapeshellarg($path));
                $this->line("  patched {$domain}");
                $patched++;
                continue;
            }

            $this->line("  redeploy {$domain} token_php=".($hasTokenPhp ? 'yes' : 'no'));
            $queued += $this->queueRedeploy($offer);
        }

        $sftp->disconnect();

        return ['seen' => count($paths), 'patched' => $patched, 'queued' => $queued];
    }

    private function queueRedeploy(?Offer $offer): int
    {
        if (! $offer || ! $offer->user) {
            return 0;
        }

        if (in_array($offer->status, ['archived', 'archiving', 'purging', 'teardown_failed'], true)) {
            return 0;
        }

        DeployOfferJob::dispatch((int) $offer->id);

        return 1;
    }
}
