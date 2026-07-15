<?php

namespace App\Services;

use App\Models\UserSetting;
use Illuminate\Support\Facades\Http;
use RuntimeException;

class CloudflareClient
{
    /**
     * @return array{zone_id: string, nameservers: list<string>}
     */
    public function ensureZone(UserSetting $settings, string $domain): array
    {
        $token = trim((string) $settings->cloudflare_api_token);
        $accountId = trim((string) $settings->cloudflare_account_id);

        if ($token === '' || $accountId === '') {
            throw new RuntimeException('Збережіть Cloudflare API token і Account ID у налаштуваннях.');
        }

        $existing = $this->findZone($settings, $domain);

        if ($existing !== null) {
            return $existing;
        }

        $response = $this->request($settings, 'POST', '/zones', [
            'name' => $domain,
            'account' => ['id' => $accountId],
            'jump_start' => false,
        ]);

        if (! ($response['success'] ?? false)) {
            $message = $this->extractError($response);

            if (str_contains(strtolower($message), 'already exists')) {
                $existing = $this->findZoneByName($settings, $domain);

                if ($existing !== null) {
                    return $existing;
                }
            }

            throw new RuntimeException('Cloudflare zone: '.$message);
        }

        /** @var array<string, mixed> $result */
        $result = $response['result'] ?? [];

        return [
            'zone_id' => (string) ($result['id'] ?? ''),
            'nameservers' => array_values(array_filter(array_map(
                static fn ($ns) => strtolower(trim((string) $ns)),
                $result['name_servers'] ?? [],
            ))),
        ];
    }

    public function ensureRootARecord(UserSetting $settings, string $zoneId, string $domain, string $ip): void
    {
        $proxied = (bool) ($settings->cloudflare_default_proxied ?? true);
        $this->ensureARecord($settings, $zoneId, $domain, '@', $ip, $proxied);
        $this->ensureARecord($settings, $zoneId, $domain, 'www', $ip, $proxied);
    }

    /**
     * @return list<array<string, mixed>>
     */
    public function listARecords(UserSetting $settings, string $zoneId, string $name): array
    {
        $response = $this->request($settings, 'GET', '/zones/'.$zoneId.'/dns_records', [
            'type' => 'A',
            'name' => $name,
        ]);

        /** @var list<array<string, mixed>> */
        return is_array($response['result'] ?? null) ? $response['result'] : [];
    }

    public function setARecordsProxied(UserSetting $settings, string $zoneId, string $domain, bool $proxied): void
    {
        foreach ([$domain, 'www.'.$domain] as $name) {
            foreach ($this->listARecords($settings, $zoneId, $name) as $record) {
                if (($record['type'] ?? '') !== 'A') {
                    continue;
                }

                $this->request($settings, 'PUT', '/zones/'.$zoneId.'/dns_records/'.($record['id'] ?? ''), [
                    'type' => 'A',
                    'name' => ($record['name'] ?? '') === $domain ? '@' : 'www',
                    'content' => $record['content'] ?? '',
                    'proxied' => $proxied,
                    'ttl' => 1,
                ]);
            }
        }
    }

    /**
     * Edge SSL + HTTPS + www→apex via Cloudflare (без Let's Encrypt на Hestia).
     *
     * @param  array{cloudflare_ssl?: bool, cloudflare_https?: bool, cloudflare_www_redirect?: bool}  $options
     */
    public function configureEdgeSecurity(UserSetting $settings, string $zoneId, string $domain, array $options = []): void
    {
        if ($zoneId === '') {
            throw new RuntimeException('Cloudflare zone ID порожній.');
        }

        $ssl = $options['cloudflare_ssl'] ?? true;
        $https = $options['cloudflare_https'] ?? true;
        $www = $options['cloudflare_www_redirect'] ?? true;

        if ($ssl) {
            $this->setZoneSetting($settings, $zoneId, 'ssl', 'flexible');
        }

        if ($https) {
            $this->setZoneSetting($settings, $zoneId, 'always_use_https', 'on');
        }

        if ($www) {
            $this->ensureWwwRedirectRule($settings, $zoneId, $domain);
        }
    }

    /**
     * @return array{zone_id: string, nameservers: list<string>}|null
     */
    public function findZone(UserSetting $settings, string $domain): ?array
    {
        return $this->findZoneByName($settings, $domain);
    }

    private function setZoneSetting(UserSetting $settings, string $zoneId, string $setting, string $value): void
    {
        $response = $this->request($settings, 'PATCH', '/zones/'.$zoneId.'/settings/'.$setting, [
            'value' => $value,
        ]);

        if (! ($response['success'] ?? false)) {
            throw new RuntimeException('Cloudflare '.$setting.': '.$this->extractError($response));
        }
    }

    private function ensureWwwRedirectRule(UserSetting $settings, string $zoneId, string $domain): void
    {
        $wwwHost = 'www.'.$domain;
        $description = 'Offerra: www to apex';
        $rules = [];

        $existing = $this->request(
            $settings,
            'GET',
            '/zones/'.$zoneId.'/rulesets/phases/http_request_dynamic_redirect/entrypoint',
            [],
            allowNotFound: true,
        );

        if (($existing['success'] ?? false) && is_array($existing['result'] ?? null)) {
            /** @var list<array<string, mixed>> $rules */
            $rules = is_array($existing['result']['rules'] ?? null) ? $existing['result']['rules'] : [];
            $rules = array_values(array_filter(
                $rules,
                static fn (array $rule): bool => ($rule['description'] ?? '') !== $description,
            ));
        }

        $rules[] = [
            'description' => $description,
            'expression' => sprintf('(http.host eq "%s")', $wwwHost),
            'action' => 'redirect',
            'action_parameters' => [
                'from_value' => [
                    'status_code' => 301,
                    'preserve_query_string' => true,
                    'target_url' => [
                        'expression' => sprintf('concat("https://%s", http.request.uri.path)', $domain),
                    ],
                ],
            ],
        ];

        $response = $this->request(
            $settings,
            'PUT',
            '/zones/'.$zoneId.'/rulesets/phases/http_request_dynamic_redirect/entrypoint',
            ['rules' => $rules],
            allowNotFound: true,
        );

        if (! ($response['success'] ?? false)) {
            $create = $this->request($settings, 'POST', '/zones/'.$zoneId.'/rulesets', [
                'name' => 'Offerra redirects',
                'kind' => 'zone',
                'phase' => 'http_request_dynamic_redirect',
                'rules' => $rules,
            ]);

            if (! ($create['success'] ?? false)) {
                throw new RuntimeException('Cloudflare www redirect: '.$this->extractError($create));
            }
        }
    }

    private function ensureARecord(
        UserSetting $settings,
        string $zoneId,
        string $domain,
        string $label,
        string $ip,
        bool $proxied,
    ): void {
        $name = $label === '@' ? $domain : 'www.'.$domain;
        $records = $this->listARecords($settings, $zoneId, $name);

        foreach ($records as $record) {
            if (($record['type'] ?? '') === 'A') {
                if (($record['content'] ?? '') === $ip && (bool) ($record['proxied'] ?? false) === $proxied) {
                    return;
                }

                $this->request($settings, 'PUT', '/zones/'.$zoneId.'/dns_records/'.($record['id'] ?? ''), [
                    'type' => 'A',
                    'name' => $label,
                    'content' => $ip,
                    'proxied' => $proxied,
                    'ttl' => 1,
                ]);

                return;
            }
        }

        $this->request($settings, 'POST', '/zones/'.$zoneId.'/dns_records', [
            'type' => 'A',
            'name' => $label,
            'content' => $ip,
            'proxied' => $proxied,
            'ttl' => 1,
        ]);
    }

    /**
     * @return list<array<string, mixed>>
     */
    private function listDnsRecords(UserSetting $settings, string $zoneId, string $domain): array
    {
        return $this->listARecords($settings, $zoneId, $domain);
    }

    /**
     * @return array{zone_id: string, nameservers: list<string>}|null
     */
    private function findZoneByName(UserSetting $settings, string $domain): ?array
    {
        $response = $this->request($settings, 'GET', '/zones', [
            'name' => $domain,
            'status' => 'active',
        ]);

        /** @var list<array<string, mixed>> $zones */
        $zones = is_array($response['result'] ?? null) ? $response['result'] : [];
        $zone = $zones[0] ?? null;

        if (! is_array($zone)) {
            $response = $this->request($settings, 'GET', '/zones', ['name' => $domain]);
            $zones = is_array($response['result'] ?? null) ? $response['result'] : [];
            $zone = $zones[0] ?? null;
        }

        if (! is_array($zone)) {
            return null;
        }

        return [
            'zone_id' => (string) ($zone['id'] ?? ''),
            'nameservers' => array_values(array_filter(array_map(
                static fn ($ns) => strtolower(trim((string) $ns)),
                $zone['name_servers'] ?? [],
            ))),
        ];
    }

    /**
     * @param  array<string, mixed>  $body
     * @return array<string, mixed>
     */
    private function request(
        UserSetting $settings,
        string $method,
        string $path,
        array $body = [],
        bool $allowNotFound = false,
    ): array {
        $token = trim((string) $settings->cloudflare_api_token);
        $url = 'https://api.cloudflare.com/client/v4'.$path;

        $pending = Http::timeout(45)
            ->withToken($token)
            ->acceptJson();

        $response = match (strtoupper($method)) {
            'GET' => $pending->get($url, $body),
            'POST' => $pending->post($url, $body),
            'PUT' => $pending->put($url, $body),
            'PATCH' => $pending->patch($url, $body),
            default => throw new RuntimeException('Unsupported Cloudflare method: '.$method),
        };

        if ($response->failed()) {
            if ($allowNotFound && $response->status() === 404) {
                return ['success' => false, 'errors' => [['message' => 'Not found']]];
            }

            $payload = $response->json();
            $detail = is_array($payload) ? $this->extractError($payload) : '';

            throw new RuntimeException(
                'Cloudflare HTTP '.$response->status().($detail !== '' && $detail !== 'невідома помилка' ? ' — '.$detail : '').' ('.$method.' '.$path.')',
            );
        }

        /** @var array<string, mixed> $payload */
        $payload = $response->json() ?? [];

        return $payload;
    }

    /**
     * @param  array<string, mixed>  $response
     */
    private function extractError(array $response): string
    {
        $errors = $response['errors'] ?? [];

        if (is_array($errors) && isset($errors[0]['message'])) {
            return (string) $errors[0]['message'];
        }

        return 'невідома помилка';
    }
}
