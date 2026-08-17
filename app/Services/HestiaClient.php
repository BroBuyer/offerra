<?php

namespace App\Services;

use App\Models\UserSetting;
use Illuminate\Contracts\Cache\LockTimeoutException;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use RuntimeException;

class HestiaClient
{
    private const int DEFAULT_TIMEOUT = 60;

    private const int ADD_DOMAIN_TIMEOUT = 120;

    private const int SSL_TIMEOUT = 180;

    /** Max seconds to wait for another offer's Hestia job on the same host. */
    private const int HOST_LOCK_WAIT = 900;

    /** Lock TTL — must exceed slow nginx restart on busy hosts. */
    private const int HOST_LOCK_SECONDS = 180;

    private const int NGINX_RESTART_MAX_ATTEMPTS = 4;

    private const int CONNECT_TIMEOUT = 8;

    private const int CONNECTION_RETRY_ATTEMPTS = 3;

    /**
     * @return array{ok: bool, message: string, domains?: int}
     */
    public function testConnection(UserSetting $settings): array
    {
        $user = trim((string) $settings->deploy_username);

        if ($user === '') {
            return [
                'ok' => false,
                'message' => 'Вкажіть користувача Hestia (SFTP user).',
            ];
        }

        try {
            $response = $this->apiRaw($settings, 'v-list-web-domains', [$user, 'json']);
            $payload = json_decode($response, true);

            return [
                'ok' => true,
                'message' => 'Hestia API відповідає. Доменів у акаунті: '.(is_array($payload) ? count($payload) : 0),
                'domains' => is_array($payload) ? count($payload) : 0,
            ];
        } catch (RuntimeException $e) {
            return [
                'ok' => false,
                'message' => $e->getMessage(),
            ];
        }
    }

    public function addWebDomain(UserSetting $settings, string $domain): void
    {
        $user = trim((string) $settings->deploy_username);
        $host = trim((string) $settings->deploy_host);
        $domain = strtolower(trim($domain));
        $ip = $this->serverIp($settings);

        if ($user === '' || $host === '') {
            throw new RuntimeException('Заповніть Hestia host і користувача SFTP у налаштуваннях.');
        }

        if ($domain === '') {
            throw new RuntimeException('Домен порожній.');
        }

        if ($this->domainExists($settings, $user, $domain)) {
            return;
        }

        $this->api($settings, 'v-add-web-domain', [$user, $domain, $ip, 'yes'], self::ADD_DOMAIN_TIMEOUT);
    }

    public function issueLetsEncrypt(UserSetting $settings, string $domain): void
    {
        $this->configureDomainSsl($settings, $domain);
    }

    public function configureDomainSsl(UserSetting $settings, string $domain): void
    {
        $user = trim((string) $settings->deploy_username);

        if ($user === '') {
            throw new RuntimeException('Заповніть користувача Hestia у налаштуваннях.');
        }

        $www = 'www.'.$domain;

        $this->api($settings, 'v-add-letsencrypt-domain', [$user, $domain, $www], self::SSL_TIMEOUT);
        $this->api($settings, 'v-add-web-domain-ssl-force', [$user, $domain], self::SSL_TIMEOUT);
        $this->api($settings, 'v-add-web-domain-ssl-hsts', [$user, $domain]);
        $this->api($settings, 'v-add-web-domain-redirect', [$user, $domain, $domain]);
    }

    public function domainExists(UserSetting $settings, string $user, string $domain): bool
    {
        $domain = strtolower(trim($domain));
        $response = $this->apiRaw($settings, 'v-list-web-domains', [$user, 'json']);

        if ($response === '' || $domain === '') {
            return false;
        }

        /** @var mixed $decoded */
        $decoded = json_decode($response, true);

        if (! is_array($decoded)) {
            return false;
        }

        foreach (array_keys($decoded) as $key) {
            if (strtolower((string) $key) === $domain) {
                return true;
            }
        }

        return false;
    }

    public function deleteWebDomain(UserSetting $settings, string $domain): void
    {
        $user = trim((string) $settings->deploy_username);
        $domain = strtolower(trim($domain));

        if ($user === '' || $domain === '') {
            throw new RuntimeException('Hestia user або домен порожній.');
        }

        if (! $this->domainExists($settings, $user, $domain)) {
            return;
        }

        $this->api($settings, 'v-delete-web-domain', [$user, $domain]);
    }

    public function serverIp(UserSetting $settings): string
    {
        $host = trim((string) $settings->deploy_host);

        if ($host === '') {
            throw new RuntimeException('Заповніть SSH host (IP сервера) у налаштуваннях деплою.');
        }

        if (filter_var($host, FILTER_VALIDATE_IP)) {
            return $host;
        }

        $resolved = gethostbyname($host);

        if ($resolved === $host && ! filter_var($host, FILTER_VALIDATE_IP)) {
            throw new RuntimeException('Не вдалося визначити IP сервера для A-запису.');
        }

        return $resolved;
    }

    /**
     * @param  list<string>  $args
     */
    private function api(UserSetting $settings, string $command, array $args, int $timeout = self::DEFAULT_TIMEOUT): void
    {
        if ($this->isReadOnlyCommand($command)) {
            $this->executeApi($settings, $command, $args, $timeout);

            return;
        }

        $this->withHostLock($settings, function () use ($settings, $command, $args, $timeout): void {
            $this->executeApi($settings, $command, $args, $timeout);
        });
    }

    /**
     * @param  list<string>  $args
     */
    private function executeApi(UserSetting $settings, string $command, array $args, int $timeout): void
    {
        $attempt = 0;
        $delaySeconds = 2;

        while (true) {
            $attempt++;

            try {
                [$body, $code] = $this->apiCallOnce($settings, $command, $args, $timeout);

                if ($code === 4 && in_array($command, ['v-add-web-domain', 'v-delete-web-domain'], true)) {
                    return;
                }

                if ($code !== 0) {
                    $message = "Hestia {$command}: ".($body !== '' ? $body : 'код '.$code);

                    if ($this->isRetryableError($message) && $attempt < $this->retryLimit($message)) {
                        sleep($this->retryDelaySeconds($message, $delaySeconds));
                        $delaySeconds = min($delaySeconds * 2, 16);

                        continue;
                    }

                    throw new RuntimeException($message);
                }

                return;
            } catch (RuntimeException $e) {
                if ($this->isRetryableError($e->getMessage()) && $attempt < $this->retryLimit($e->getMessage())) {
                    sleep($this->retryDelaySeconds($e->getMessage(), $delaySeconds));
                    $delaySeconds = min($delaySeconds * 2, 16);

                    continue;
                }

                throw $e;
            }
        }
    }

    /**
     * @param  callable(): void  $callback
     */
    private function withHostLock(UserSetting $settings, callable $callback): void
    {
        $lock = Cache::lock($this->hostLockKey($settings), self::HOST_LOCK_SECONDS);

        try {
            $lock->block(self::HOST_LOCK_WAIT);
        } catch (LockTimeoutException) {
            throw new RuntimeException(
                'Hestia зайнята іншими офферами на цьому сервері. Спробуйте через хвилину.',
            );
        }

        try {
            $callback();
        } finally {
            $lock->release();
        }
    }

    private function hostLockKey(UserSetting $settings): string
    {
        $host = strtolower(trim((string) $settings->deploy_host));
        $panelUrl = strtolower(trim((string) ($settings->deploy_panel_url ?? '')));

        if ($host === '' && $panelUrl !== '') {
            $host = parse_url($panelUrl, PHP_URL_HOST) ?: $panelUrl;
        }

        return 'hestia-host-'.md5($host !== '' ? $host : 'unknown');
    }

    private function isReadOnlyCommand(string $command): bool
    {
        return str_starts_with($command, 'v-list-');
    }

    private function isRetryableError(string $message): bool
    {
        return $this->isRetryableNginxRestartError($message)
            || $this->isRetryableConnectionError($message);
    }

    private function retryLimit(string $message): int
    {
        return $this->isRetryableConnectionError($message)
            ? self::CONNECTION_RETRY_ATTEMPTS
            : self::NGINX_RESTART_MAX_ATTEMPTS;
    }

    private function retryDelaySeconds(string $message, int $currentDelay): int
    {
        return $this->isRetryableConnectionError($message) ? 1 : $currentDelay;
    }

    private function isRetryableNginxRestartError(string $message): bool
    {
        $normalized = strtolower($message);

        return str_contains($normalized, 'nginx restart failed')
            || str_contains($normalized, 'restart proxy failed')
            || str_contains($normalized, 'v-restart-proxy')
            || str_contains($normalized, 'too many open files');
    }

    private function isRetryableConnectionError(string $message): bool
    {
        $normalized = strtolower($message);

        return str_contains($normalized, 'не відповідає')
            || str_contains($normalized, 'curl error 28')
            || str_contains($normalized, 'failed to connect')
            || str_contains($normalized, 'connection timed out')
            || str_contains($normalized, 'connection refused')
            || str_contains($normalized, 'could not resolve host');
    }

    /**
     * @param  list<string>  $args
     * @return array{0: string, 1: int}
     */
    private function apiCallOnce(UserSetting $settings, string $command, array $args, int $timeout = self::DEFAULT_TIMEOUT): array
    {
        $host = trim((string) $settings->deploy_host);
        $panelUrl = trim((string) ($settings->deploy_panel_url ?? ''));

        if ($host === '' && $panelUrl === '') {
            throw new RuntimeException('Заповніть SSH host або URL панелі Hestia у налаштуваннях.');
        }

        $baseUrl = $panelUrl !== ''
            ? rtrim($panelUrl, '/').'/api/'
            : "https://{$host}:8083/api/";

        $payload = array_merge($this->authPayload($settings), [
            'returncode' => 'no',
            'cmd' => $command,
        ]);

        foreach (array_values($args) as $index => $value) {
            $payload['arg'.($index + 1)] = $value;
        }

        try {
            $response = Http::timeout($timeout)
                ->connectTimeout(self::CONNECT_TIMEOUT)
                ->asForm()
                ->withOptions(['verify' => false])
                ->post($baseUrl, $payload);
        } catch (ConnectionException $e) {
            throw new RuntimeException($this->formatConnectionError($baseUrl, $e->getMessage()), 0, $e);
        }

        $body = trim($response->body());

        if ($response->failed()) {
            // Some Hestia builds return HTTP 400 "Error: Web domain X exists"
            // instead of 200 + exit code 4 when returncode=no.
            if ($this->isAlreadyExistsHttpError($command, $response->status(), $body)) {
                return ['', 4];
            }

            throw new RuntimeException($this->formatHttpError($response->status(), $body));
        }

        $exitCode = (int) ($response->header('hestia-exit-code') ?? $response->header('Hestia-Exit-Code') ?? -1);

        if ($exitCode < 0 && $body !== '' && preg_match('/^\d+$/', $body)) {
            $exitCode = (int) $body;
            $body = '';
        }

        return [$body, $exitCode];
    }

    private function isAlreadyExistsHttpError(string $command, int $status, string $body): bool
    {
        if (! in_array($status, [400, 409], true)) {
            return false;
        }

        $normalized = strtolower($body);

        if (
            ! str_contains($normalized, 'exists')
            && ! str_contains($normalized, 'already exist')
            && ! str_contains($normalized, 'object exist')
        ) {
            return false;
        }

        return in_array($command, [
            'v-add-web-domain',
            'v-delete-web-domain',
            'v-add-letsencrypt-domain',
            'v-add-web-domain-ssl-force',
            'v-add-web-domain-ssl-hsts',
            'v-add-web-domain-redirect',
        ], true);
    }

    /**
     * @param  list<string>  $args
     */
    private function apiRaw(UserSetting $settings, string $command, array $args): string
    {
        [$body, $code] = $this->apiCallOnce($settings, $command, $args);

        if ($code !== 0) {
            throw new RuntimeException("Hestia {$command}: ".($body !== '' ? $body : 'код '.$code));
        }

        return $body;
    }

    /**
     * @return array<string, string>
     */
    private function authPayload(UserSetting $settings): array
    {
        $accessKey = trim((string) ($settings->deploy_api_access_key ?? ''));
        $secretKey = (string) ($settings->deploy_api_secret_key ?? '');

        if ($accessKey !== '' && $secretKey !== '') {
            return [
                'access_key' => $accessKey,
                'secret_key' => $secretKey,
            ];
        }

        $user = trim((string) $settings->deploy_username);
        $password = (string) ($settings->deploy_password ?? '');

        if ($user === '' || $password === '') {
            throw new RuntimeException(
                'Збережіть Hestia API access key + secret (рекомендовано) або пароль SFTP у налаштуваннях.',
            );
        }

        return [
            'user' => $user,
            'password' => $password,
        ];
    }

    private function formatHttpError(int $status, string $body): string
    {
        $message = 'Hestia HTTP '.$status;
        $body = trim($body);

        if ($body !== '') {
            $message .= ': '.$body;
        }

        if ($status === 401) {
            $message .= ' — перевірте API access key/secret або пароль admin; для віддаленого API додайте IP панелі Offer (213.176.115.14) у Hestia → Server → API.';
        } elseif ($status === 403) {
            $message .= ' — IP сервера панелі не дозволений для Hestia API. Додайте 213.176.115.14 у whitelist або `allow-all`.';
        }

        return $message;
    }

    private function formatConnectionError(string $baseUrl, string $raw): string
    {
        $host = parse_url($baseUrl, PHP_URL_HOST) ?: $baseUrl;
        $port = parse_url($baseUrl, PHP_URL_PORT);

        if ($port === null) {
            $port = str_starts_with($baseUrl, 'https://') ? 443 : 80;
            if (str_contains($baseUrl, ':8083')) {
                $port = 8083;
            }
        }

        return "Hestia API не відповідає ({$host}:{$port}). Сервер вимкнений, IP змінено, або порт {$port} закритий для панелі Offer (213.176.115.14).";
    }
}
