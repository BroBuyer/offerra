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
                $existing = $this->findZone($settings, $domain);

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
        $records = $this->listDnsRecords($settings, $zoneId, $domain);

        foreach ($records as $record) {
            if (($record['type'] ?? '') === 'A' && in_array($record['name'] ?? '', [$domain, '@'], true)) {
                if (($record['content'] ?? '') === $ip && (bool) ($record['proxied'] ?? false) === $proxied) {
                    return;
                }

                $this->request($settings, 'PUT', '/zones/'.$zoneId.'/dns_records/'.($record['id'] ?? ''), [
                    'type' => 'A',
                    'name' => '@',
                    'content' => $ip,
                    'proxied' => $proxied,
                    'ttl' => 1,
                ]);

                return;
            }
        }

        $this->request($settings, 'POST', '/zones/'.$zoneId.'/dns_records', [
            'type' => 'A',
            'name' => '@',
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
        $response = $this->request($settings, 'GET', '/zones/'.$zoneId.'/dns_records', [
            'type' => 'A',
            'name' => $domain,
        ]);

        /** @var list<array<string, mixed>> */
        return is_array($response['result'] ?? null) ? $response['result'] : [];
    }

    /**
     * @return array{zone_id: string, nameservers: list<string>}|null
     */
    private function findZone(UserSetting $settings, string $domain): ?array
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
    private function request(UserSetting $settings, string $method, string $path, array $body = []): array
    {
        $token = trim((string) $settings->cloudflare_api_token);
        $url = 'https://api.cloudflare.com/client/v4'.$path;

        $pending = Http::timeout(45)
            ->withToken($token)
            ->acceptJson();

        $response = match (strtoupper($method)) {
            'GET' => $pending->get($url, $body),
            'POST' => $pending->post($url, $body),
            'PUT' => $pending->put($url, $body),
            default => throw new RuntimeException('Unsupported Cloudflare method: '.$method),
        };

        if ($response->failed()) {
            throw new RuntimeException('Cloudflare HTTP '.$response->status());
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
