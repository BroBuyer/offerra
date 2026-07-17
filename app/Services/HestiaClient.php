<?php

namespace App\Services;

use App\Models\UserSetting;
use Illuminate\Support\Facades\Http;
use RuntimeException;

class HestiaClient
{
    private const int DEFAULT_TIMEOUT = 60;

    private const int SSL_TIMEOUT = 180;

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
        $ip = $this->serverIp($settings);

        if ($user === '' || $host === '') {
            throw new RuntimeException('Заповніть Hestia host і користувача SFTP у налаштуваннях.');
        }

        if ($this->domainExists($settings, $user, $domain)) {
            return;
        }

        $this->api($settings, 'v-add-web-domain', [$user, $domain, $ip, 'yes']);
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
        $response = $this->apiRaw($settings, 'v-list-web-domains', [$user, 'json']);

        if ($response === '') {
            return false;
        }

        /** @var mixed $decoded */
        $decoded = json_decode($response, true);

        if (! is_array($decoded)) {
            return false;
        }

        return array_key_exists($domain, $decoded);
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
        [$body, $code] = $this->apiCall($settings, $command, $args, $timeout);

        if ($code === 4 && in_array($command, ['v-add-web-domain', 'v-delete-web-domain'], true)) {
            return;
        }

        if ($code !== 0) {
            throw new RuntimeException("Hestia {$command}: ".($body !== '' ? $body : 'код '.$code));
        }
    }

    /**
     * @param  list<string>  $args
     * @return array{0: string, 1: int}
     */
    private function apiCall(UserSetting $settings, string $command, array $args, int $timeout = self::DEFAULT_TIMEOUT): array
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

        $response = Http::timeout($timeout)
            ->asForm()
            ->withOptions(['verify' => false])
            ->post($baseUrl, $payload);

        if ($response->failed()) {
            throw new RuntimeException($this->formatHttpError($response->status(), $response->body()));
        }

        $exitCode = (int) ($response->header('hestia-exit-code') ?? $response->header('Hestia-Exit-Code') ?? -1);
        $body = trim($response->body());

        if ($exitCode < 0 && $body !== '' && preg_match('/^\d+$/', $body)) {
            $exitCode = (int) $body;
            $body = '';
        }

        return [$body, $exitCode];
    }

    /**
     * @param  list<string>  $args
     */
    private function apiRaw(UserSetting $settings, string $command, array $args): string
    {
        [$body, $code] = $this->apiCall($settings, $command, $args);

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
}
