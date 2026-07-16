<?php
declare(strict_types=1);

/**
 * One-time form tokens (file-backed) — easy to debug under integration/tokens/.
 * Independent of Keitaro.
 */
final class FormToken
{
    private const TOKEN_DIR_NAME = 'tokens';

    public static function issue(): string
    {
        self::ensureStorage();
        self::gc();

        $id = bin2hex(random_bytes(16));
        $exp = time() + self::ttl();
        $payload = $id.'.'.$exp;
        $sig = hash_hmac('sha256', $payload, self::secret());
        $token = $payload.'.'.$sig;

        $meta = [
            'id' => $id,
            'exp' => $exp,
            'created_at' => date('c'),
            'ip' => self::clientIp(),
            'ua' => substr((string) ($_SERVER['HTTP_USER_AGENT'] ?? ''), 0, 240),
        ];

        $written = @file_put_contents(
            self::tokenPath($id),
            json_encode($meta, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)."\n",
            LOCK_EX,
        );

        if ($written === false) {
            self::debugLog('issue_write_failed', $id);
        }

        return $token;
    }

    /**
     * @return array{ok: bool, error?: string}
     */
    public static function consume(string $token): array
    {
        $token = trim($token);

        if ($token === '' || ! preg_match('/^[a-f0-9]{32}\.\d+\.[a-f0-9]{64}$/', $token)) {
            return ['ok' => false, 'error' => 'malformed'];
        }

        [$id, $expRaw, $sig] = explode('.', $token, 3);
        $exp = (int) $expRaw;
        $payload = $id.'.'.$expRaw;
        $expected = hash_hmac('sha256', $payload, self::secret());

        if (! hash_equals($expected, $sig)) {
            self::debugLog('bad_signature', $id);

            return ['ok' => false, 'error' => 'bad_signature'];
        }

        if ($exp < time()) {
            self::deleteTokenFile($id);
            self::debugLog('expired', $id);

            return ['ok' => false, 'error' => 'expired'];
        }

        $path = self::tokenPath($id);

        if (! is_file($path)) {
            self::debugLog('missing_or_used', $id);

            return ['ok' => false, 'error' => 'missing_or_used'];
        }

        // One-time: remove before CRM so retries cannot replay.
        if (! @unlink($path)) {
            self::debugLog('unlink_failed', $id);

            return ['ok' => false, 'error' => 'consume_failed'];
        }

        self::debugLog('consumed', $id);

        return ['ok' => true];
    }

    public static function requestViaCloudflare(): bool
    {
        // Offerra preview / local — без CF edge.
        if (function_exists('offer_is_preview') && offer_is_preview()) {
            return true;
        }

        $cfIp = trim((string) ($_SERVER['HTTP_CF_CONNECTING_IP'] ?? ''));

        return $cfIp !== '';
    }

    public static function requestLooksSameOrigin(): bool
    {
        if (function_exists('offer_is_preview') && offer_is_preview()) {
            return true;
        }

        $host = strtolower((string) (parse_url((string) SITE_URL, PHP_URL_HOST) ?: ''));

        if ($host === '') {
            return false;
        }

        $allowed = [$host, 'www.'.$host];

        $origin = trim((string) ($_SERVER['HTTP_ORIGIN'] ?? ''));
        if ($origin !== '') {
            $originHost = strtolower((string) (parse_url($origin, PHP_URL_HOST) ?: ''));

            return $originHost !== '' && in_array($originHost, $allowed, true);
        }

        $referer = trim((string) ($_SERVER['HTTP_REFERER'] ?? ''));
        if ($referer !== '') {
            $refHost = strtolower((string) (parse_url($referer, PHP_URL_HOST) ?: ''));

            return $refHost !== '' && in_array($refHost, $allowed, true);
        }

        // fetch/XHR same-origin always sends Origin; empty = likely raw curl.
        return false;
    }

    public static function clientIp(): string
    {
        $cf = trim((string) ($_SERVER['HTTP_CF_CONNECTING_IP'] ?? ''));
        if ($cf !== '') {
            return $cf;
        }

        return (string) ($_SERVER['REMOTE_ADDR'] ?? '0.0.0.0');
    }

    private static function ttl(): int
    {
        if (defined('FORM_TOKEN_TTL')) {
            $ttl = (int) FORM_TOKEN_TTL;

            return $ttl > 0 ? $ttl : 600;
        }

        return 600;
    }

    private static function secret(): string
    {
        if (defined('FORM_TOKEN_SECRET') && trim((string) FORM_TOKEN_SECRET) !== '') {
            return (string) FORM_TOKEN_SECRET;
        }

        // Fallback for older configs until redeploy regenerates config.php.
        $crm = defined('CRM_API_KEY') ? (string) CRM_API_KEY : '';

        return hash('sha256', (string) SITE_URL.'|'.$crm.'|form-token');
    }

    private static function storageDir(): string
    {
        return __DIR__.DIRECTORY_SEPARATOR.self::TOKEN_DIR_NAME;
    }

    private static function tokenPath(string $id): string
    {
        return self::storageDir().DIRECTORY_SEPARATOR.$id.'.json';
    }

    private static function ensureStorage(): void
    {
        $dir = self::storageDir();

        if (! is_dir($dir)) {
            @mkdir($dir, 0755, true);
        }

        $deny = $dir.DIRECTORY_SEPARATOR.'.htaccess';
        if (! is_file($deny)) {
            @file_put_contents($deny, "Require all denied\n");
        }
    }

    private static function deleteTokenFile(string $id): void
    {
        $path = self::tokenPath($id);
        if (is_file($path)) {
            @unlink($path);
        }
    }

    private static function gc(): void
    {
        $dir = self::storageDir();
        if (! is_dir($dir)) {
            return;
        }

        $now = time();
        foreach (glob($dir.DIRECTORY_SEPARATOR.'*.json') ?: [] as $file) {
            $raw = @file_get_contents($file);
            $data = is_string($raw) ? json_decode($raw, true) : null;
            $exp = is_array($data) ? (int) ($data['exp'] ?? 0) : 0;

            if ($exp > 0 && $exp < $now) {
                @unlink($file);
            }
        }
    }

    private static function debugLog(string $event, string $id): void
    {
        if (! defined('FORM_TOKEN_DEBUG') || ! FORM_TOKEN_DEBUG) {
            return;
        }

        self::ensureStorage();
        $line = date('c')."\t{$event}\t{$id}\t".self::clientIp()."\n";
        @file_put_contents(self::storageDir().DIRECTORY_SEPARATOR.'_debug.log', $line, FILE_APPEND | LOCK_EX);
    }
}
