<?php

namespace App\Console\Commands;

use App\Models\OriginServer;
use Illuminate\Console\Command;
use phpseclib3\Net\SSH2;

class PatchChatGptSkip extends Command
{
    protected $signature = 'offers:patch-chatgpt-skip
        {--dry-run : Only report how many landers would be patched}';

    protected $description = 'Push ChatGPT silent-skip send.php / FormToken.php onto live origin landers';

    public function handle(): int
    {
        $dry = (bool) $this->option('dry-run');
        $formToken = file_get_contents(base_path('templates/default/integration/FormToken.php'));
        $send = file_get_contents(base_path('templates/default/integration/send.php'));

        if (! is_string($formToken) || ! is_string($send) || $formToken === '' || $send === '') {
            $this->error('Canonical FormToken.php / send.php missing.');

            return self::FAILURE;
        }

        $hosts = 0;
        $patched = 0;
        $failed = 0;

        foreach (OriginServer::query()->where('is_active', true)->orderBy('id')->get() as $server) {
            try {
                $n = $this->patchServer($server, $formToken, $send, $dry);
            } catch (\Throwable $e) {
                $this->error("{$server->host}: {$e->getMessage()}");
                $failed++;

                continue;
            }

            $hosts++;
            $patched += $n;
            $this->line("{$server->host} landers={$n}");
        }

        $this->info("hosts={$hosts} landers={$patched} failed={$failed} dry=".($dry ? 'yes' : 'no'));

        return $failed > 0 ? self::FAILURE : self::SUCCESS;
    }

    private function patchServer(OriginServer $server, string $formToken, string $send, bool $dry): int
    {
        $ssh = new SSH2((string) $server->host, (int) ($server->port ?: 22), 20);
        $ssh->setTimeout(180);

        if (! $ssh->login((string) $server->username, (string) $server->password)) {
            $ssh->disconnect();
            throw new \RuntimeException('SSH login failed');
        }

        if ($dry) {
            $out = trim((string) $ssh->exec(
                'find /var/www/offers -path "*/public_html/integration/send.php" 2>/dev/null | wc -l; echo __EC__:$?'
            ));
            $ssh->disconnect();
            if (! preg_match('/^(\d+)/', $out, $m)) {
                return 0;
            }

            return (int) $m[1];
        }

        $payload = json_encode([
            'form_token' => $formToken,
            'send' => $send,
        ], JSON_UNESCAPED_SLASHES);

        if (! is_string($payload) || $payload === '') {
            $ssh->disconnect();
            throw new \RuntimeException('Failed to encode patch payload');
        }

        $remote = '/tmp/offerra-chatgpt-skip.json';
        $b64 = base64_encode($payload);
        $ssh->exec('rm -f '.escapeshellarg($remote).' '.escapeshellarg($remote.'.b64'));
        $chunkSize = 30000;
        for ($offset = 0, $len = strlen($b64); $offset < $len; $offset += $chunkSize) {
            $chunk = substr($b64, $offset, $chunkSize);
            $ssh->exec('printf %s '.escapeshellarg($chunk).' >> '.escapeshellarg($remote.'.b64'));
        }
        $ssh->exec('base64 -d '.escapeshellarg($remote.'.b64').' > '.escapeshellarg($remote).' && rm -f '.escapeshellarg($remote.'.b64'));

        $script = <<<'PHP'
<?php
$raw = file_get_contents('/tmp/offerra-chatgpt-skip.json');
$data = json_decode((string) $raw, true);
if (! is_array($data) || empty($data['form_token']) || empty($data['send'])) {
    fwrite(STDERR, "bad payload\n");
    exit(2);
}
$n = 0;
foreach (glob('/var/www/offers/*/public_html/integration') ?: [] as $dir) {
    file_put_contents($dir.'/FormToken.php', $data['form_token']);
    file_put_contents($dir.'/send.php', $data['send']);
    $lp = $dir.'/LeadProcessor.php';
    if (is_file($lp)) {
        $s = (string) file_get_contents($lp);
        if (! str_contains($s, 'CHATGPT_REFERRAL')) {
            $s = preg_replace(
                "/'NO_CLOUDFLARE',\r?\n(\s*)\], true\);/",
                "'NO_CLOUDFLARE',\n$1    'CHATGPT_REFERRAL',\n$1], true);",
                $s,
                1
            );
            if (is_string($s) && str_contains($s, 'CHATGPT_REFERRAL')) {
                file_put_contents($lp, $s);
            }
        }
    }
    @chown($dir.'/FormToken.php', 'www-data');
    @chown($dir.'/send.php', 'www-data');
    @chown($lp, 'www-data');
    $n++;
}
echo $n;
PHP;

        $scriptB64 = base64_encode($script);
        $ssh->exec('printf %s '.escapeshellarg($scriptB64).' | base64 -d > /tmp/offerra-chatgpt-skip.php');
        $out = trim((string) $ssh->exec('php /tmp/offerra-chatgpt-skip.php; echo __EC__:$?'));
        $ssh->exec('rm -f /tmp/offerra-chatgpt-skip.php /tmp/offerra-chatgpt-skip.json /tmp/offerra-chatgpt-skip.json.b64');
        $ssh->disconnect();

        if (! preg_match('/__EC__:(\d+)/', $out, $ec) || (int) $ec[1] !== 0) {
            throw new \RuntimeException('patch script failed: '.substr($out, 0, 400));
        }

        return (int) trim(str_replace($ec[0], '', $out));
    }
}
