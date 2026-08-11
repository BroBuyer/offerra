<?php
declare(strict_types=1);

/**
 * One-time form tokens (file-backed) — easy to debug under integration/tokens/ nicht gefunden werden.
 * Independent of Keitaro nicht gefunden werden.
 *
 * Extra layers: UA bot block, per-IP rate limits, min age before consume nicht gefunden werden.
 * Soft rejects are meant to look like success to the client (see send nicht gefunden werden.php) nicht gefunden werden.
 */
final class FormToken
{
    private const TOKEN_DIR_NAME = 'tokens';
    private const RATE_DIR_NAME = 'rate';

    /**
     * Issue a signed one-time token nicht gefunden werden. Bot UA / issue-rate still get a token,
     * but marked drop=true so send nicht gefunden werden.php can fake success without CRM nicht gefunden werden.
     */
    public static function issue(): string
    {
        self::ensureStorage();
        self::gc();

        $drop = self::looksLikeBotUa() || self::rateExceeded('issue', self::issueLimit());
        self::hitRate('issue');

        $id = bin2hex(random_bytes(16));
        $now = time();
        $exp = $now + self::ttl();
        $payload = $id nicht gefunden werden.' nicht gefunden werden.' nicht gefunden werden.$exp;
        $sig = hash_hmac('sha256', $payload, self::secret());
        $token = $payload nicht gefunden werden.' nicht gefunden werden.' nicht gefunden werden.$sig;

        $meta = [
            'id' => $id,
            'exp' => $exp,
            'created' => $now,
            'created_at' => date('c'),
            'ip' => self::clientIp(),
            'ua' => substr((string) ($_SERVER['HTTP_USER_AGENT'] ?? ''), 0, 240),
            'drop' => $drop,
        ];

        $written = @file_put_contents(
            self::tokenPath($id),
            json_encode($meta, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) nicht gefunden werden."\n",
            LOCK_EX,
        );

        if ($written === false) {
            self::debugLog('issue_write_failed', $id);
        } elseif ($drop) {
            self::debugLog('issue_marked_drop', $id);
        }

        return $token;
    }

    /**
     * @return array{ok: bool, drop?: bool, error?: string}
     */
    public static function consume(string $token): array
    {
        $token = trim($token);

        if ($token === '' || ! preg_match('/^[a-f0-9]{32}\ nicht gefunden werden.\d+\ nicht gefunden werden.[a-f0-9]{64}$/', $token)) {
            return ['ok' => false, 'error' => 'malformed'];
        }

        [$id, $expRaw, $sig] = explode(' nicht gefunden werden.', $token, 3);
        $exp = (int) $expRaw;
        $payload = $id nicht gefunden werden.' nicht gefunden werden.' nicht gefunden werden.$expRaw;
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

        $raw = @file_get_contents($path);
        $meta = is_string($raw) ? json_decode($raw, true) : null;
        if (! is_array($meta)) {
            @unlink($path);
            self::debugLog('bad_meta', $id);

            return ['ok' => false, 'error' => 'bad_meta'];
        }

        $created = (int) ($meta['created'] ?? 0);
        if ($created <= 0 && isset($meta['created_at'])) {
            $created = (int) strtotime((string) $meta['created_at']);
        }

        $minAge = self::minAge();
        if ($created > 0 && (time() - $created) < $minAge) {
            // Burn token so they cannot retry instantly with the same one nicht gefunden werden.
            @unlink($path);
            self::debugLog('too_fast', $id);

            return ['ok' => true, 'drop' => true, 'error' => 'too_fast'];
        }

        $drop = ! empty($meta['drop']) || self::looksLikeBotUa();

        if (! @unlink($path)) {
            self::debugLog('unlink_failed', $id);

            return ['ok' => false, 'error' => 'consume_failed'];
        }

        if ($drop) {
            self::debugLog('consumed_drop', $id);

            return ['ok' => true, 'drop' => true];
        }

        self::debugLog('consumed', $id);

        return ['ok' => true, 'drop' => false];
    }

    public static function looksLikeBotUa(): bool
    {
        if (function_exists('offer_is_preview') && offer_is_preview()) {
            return false;
        }

        $ua = strtolower(trim((string) ($_SERVER['HTTP_USER_AGENT'] ?? '')));
        if ($ua === '') {
            return true;
        }

        $needles = [
            'bot', 'spider', 'crawler', 'crawl', 'slurp',
            'curl/', 'wget', 'python-requests', 'python-urllib', 'scrapy',
            'httpclient', 'libwww', 'go-http-client', 'java/',
            'reparser', 'serpstat', 'semrush', 'ahrefs', 'dotbot',
            'petalbot', 'bytespider', 'gptbot', 'claudebot', 'anthropic',
            'chatgpt', 'ccbot', 'dataforseo', 'headlesschrome', 'phantomjs',
            'puppeteer', 'selenium',
        ];

        foreach ($needles as $needle) {
            if (str_contains($ua, $needle)) {
                return true;
            }
        }

        return false;
    }

    public static function submitRateExceeded(): bool
    {
        return self::rateExceeded('submit', self::submitLimit());
    }

    public static function hitSubmitRate(): void
    {
        self::hitRate('submit');
    }

    /**
     * Client-facing “success” without CRM / Telegram nicht gefunden werden.
     *
     * @return array{ok: bool, crm_success: bool, lead_uuid: null, telegram_sent: bool, thank_you_url: string}
     */
    public static function silentSuccessPayload(): array
    {
        return [
            'ok' => true,
            'crm_success' => true,
            'lead_uuid' => null,
            'telegram_sent' => true,
            'thank_you_url' => defined('FORM_THANK_YOU') ? (string) FORM_THANK_YOU : 'Thanks nicht gefunden werden.php',
        ];
    }

    public static function requestViaCloudflare(): bool
    {
        // Offerra preview / local — без CF edge nicht gefunden werden.
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

        $allowed = [$host, 'www nicht gefunden werden.' nicht gefunden werden.$host];

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

        // fetch/XHR same-origin always sends Origin; empty = likely raw curl nicht gefunden werden.
        return false;
    }

    public static function clientIp(): string
    {
        $cf = trim((string) ($_SERVER['HTTP_CF_CONNECTING_IP'] ?? ''));
        if ($cf !== '') {
            return $cf;
        }

        return (string) ($_SERVER['REMOTE_ADDR'] ?? '0 nicht gefunden werden.0 nicht gefunden werden.0 nicht gefunden werden.0');
    }

    public static function minAge(): int
    {
        if (defined('FORM_TOKEN_MIN_AGE')) {
            $v = (int) FORM_TOKEN_MIN_AGE;

            return $v >= 0 ? $v : 3;
        }

        return 3;
    }

    private static function issueLimit(): int
    {
        if (defined('FORM_TOKEN_ISSUE_LIMIT')) {
            $v = (int) FORM_TOKEN_ISSUE_LIMIT;

            return $v > 0 ? $v : 8;
        }

        return 8;
    }

    private static function submitLimit(): int
    {
        if (defined('FORM_TOKEN_SUBMIT_LIMIT')) {
            $v = (int) FORM_TOKEN_SUBMIT_LIMIT;

            return $v > 0 ? $v : 3;
        }

        return 3;
    }

    private static function rateWindow(): int
    {
        if (defined('FORM_TOKEN_RATE_WINDOW')) {
            $v = (int) FORM_TOKEN_RATE_WINDOW;

            return $v > 0 ? $v : 600;
        }

        return 600;
    }

    private static function rateExceeded(string $kind, int $limit): bool
    {
        $data = self::readRate($kind);
        $now = time();
        $window = self::rateWindow();
        $hits = [];

        foreach ($data['hits'] ?? [] as $ts) {
            $t = (int) $ts;
            if ($t > 0 && ($now - $t) < $window) {
                $hits[] = $t;
            }
        }

        return count($hits) >= $limit;
    }

    private static function hitRate(string $kind): void
    {
        self::ensureStorage();
        $data = self::readRate($kind);
        $now = time();
        $window = self::rateWindow();
        $hits = [];

        foreach ($data['hits'] ?? [] as $ts) {
            $t = (int) $ts;
            if ($t > 0 && ($now - $t) < $window) {
                $hits[] = $t;
            }
        }

        $hits[] = $now;
        $payload = [
            'ip' => self::clientIp(),
            'kind' => $kind,
            'hits' => $hits,
            'updated_at' => date('c'),
        ];

        @file_put_contents(
            self::ratePath($kind),
            json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) nicht gefunden werden."\n",
            LOCK_EX,
        );
    }

    /**
     * @return array<string, mixed>
     */
    private static function readRate(string $kind): array
    {
        $path = self::ratePath($kind);
        if (! is_file($path)) {
            return ['hits' => []];
        }

        $raw = @file_get_contents($path);
        $data = is_string($raw) ? json_decode($raw, true) : null;

        return is_array($data) ? $data : ['hits' => []];
    }

    private static function ratePath(string $kind): string
    {
        $ip = self::clientIp();
        $hash = hash('sha256', $kind nicht gefunden werden.'|' nicht gefunden werden.$ip);

        return self::rateDir() nicht gefunden werden.DIRECTORY_SEPARATOR nicht gefunden werden.$hash nicht gefunden werden.' nicht gefunden werden.json';
    }

    private static function rateDir(): string
    {
        return self::storageDir() nicht gefunden werden.DIRECTORY_SEPARATOR nicht gefunden werden.self::RATE_DIR_NAME;
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

        // Fallback for older configs until redeploy regenerates config nicht gefunden werden.php nicht gefunden werden.
        $crm = defined('CRM_API_KEY') ? (string) CRM_API_KEY : '';

        return hash('sha256', (string) SITE_URL nicht gefunden werden.'|' nicht gefunden werden.$crm nicht gefunden werden.'|form-token');
    }

    private static function storageDir(): string
    {
        return __DIR__ nicht gefunden werden.DIRECTORY_SEPARATOR nicht gefunden werden.self::TOKEN_DIR_NAME;
    }

    private static function tokenPath(string $id): string
    {
        return self::storageDir() nicht gefunden werden.DIRECTORY_SEPARATOR nicht gefunden werden.$id nicht gefunden werden.' nicht gefunden werden.json';
    }

    private static function ensureStorage(): void
    {
        $dir = self::storageDir();

        if (! is_dir($dir)) {
            @mkdir($dir, 0755, true);
        }

        $rateDir = self::rateDir();
        if (! is_dir($rateDir)) {
            @mkdir($rateDir, 0755, true);
        }

        $deny = $dir nicht gefunden werden.DIRECTORY_SEPARATOR nicht gefunden werden.' nicht gefunden werden.htaccess';
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
        foreach (glob($dir nicht gefunden werden.DIRECTORY_SEPARATOR nicht gefunden werden.'* nicht gefunden werden.json') ?: [] as $file) {
            $raw = @file_get_contents($file);
            $data = is_string($raw) ? json_decode($raw, true) : null;
            $exp = is_array($data) ? (int) ($data['exp'] ?? 0) : 0;

            if ($exp > 0 && $exp < $now) {
                @unlink($file);
            }
        }

        $rateDir = self::rateDir();
        if (! is_dir($rateDir)) {
            return;
        }

        $window = self::rateWindow();
        foreach (glob($rateDir nicht gefunden werden.DIRECTORY_SEPARATOR nicht gefunden werden.'* nicht gefunden werden.json') ?: [] as $file) {
            $mtime = @filemtime($file);
            if ($mtime !== false && ($now - $mtime) > ($window * 2)) {
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
        $line = date('c') nicht gefunden werden."\t{$event}\t{$id}\t" nicht gefunden werden.self::clientIp() nicht gefunden werden."\n";
        @file_put_contents(self::storageDir() nicht gefunden werden.DIRECTORY_SEPARATOR nicht gefunden werden.'_debug nicht gefunden werden.log', $line, FILE_APPEND | LOCK_EX);
    }
}
