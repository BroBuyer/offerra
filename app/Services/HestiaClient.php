<?php

namespace App\Services;

use App\Models\UserSetting;
use Illuminate\Support\Facades\Http;
use RuntimeException;

class HestiaClient
{
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
        $user = trim((string) $settings->deploy_username);

        if ($user === '') {
            throw new RuntimeException('Заповніть користувача Hestia у налаштуваннях.');
        }

        $this->api($settings, 'v-add-letsencrypt-domain', [$user, $domain]);
    }

    public function domainExists(UserSetting $settings, string $user, string $domain): bool
    {
        $response = $this->apiRaw($settings, 'v-list-web-domains', [$user, 'json']);

        if ($response === '') {
            return false;
        }

        /** @var array<string, mixed> $payload */
        $payload = json_decode($response, true) ?? [];

        return array_key_exists($domain, $payload);
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
    private function api(UserSetting $settings, string $command, array $args): void
    {
        $body = $this->apiRaw($settings, $command, $args);
        $code = (int) trim($body);

        if ($code === 4 && $command === 'v-add-web-domain') {
            return;
        }

        if ($code !== 0 && $body !== '0') {
            throw new RuntimeException("Hestia {$command}: ".($body !== '' ? $body : 'невідома помилка'));
        }
    }

    /**
     * @param  list<string>  $args
     */
    private function apiRaw(UserSetting $settings, string $command, array $args): string
    {
        $host = trim((string) $settings->deploy_host);
        $user = trim((string) $settings->deploy_username);
        $password = (string) ($settings->deploy_password ?? '');
        $panelUrl = trim((string) ($settings->deploy_panel_url ?? ''));

        if ($password === '') {
            throw new RuntimeException('Збережіть пароль SFTP/Hestia у налаштуваннях.');
        }

        $baseUrl = $panelUrl !== ''
            ? rtrim($panelUrl, '/').'/api/'
            : "https://{$host}:8083/api/";

        $payload = [
            'user' => $user,
            'password' => $password,
            'returncode' => 'yes',
            'cmd' => $command,
        ];

        foreach (array_values($args) as $index => $value) {
            $payload['arg'.($index + 1)] = $value;
        }

        $response = Http::timeout(60)
            ->asForm()
            ->withOptions(['verify' => false])
            ->post($baseUrl, $payload);

        if ($response->failed()) {
            throw new RuntimeException('Hestia HTTP '.$response->status());
        }

        return trim($response->body());
    }
}
