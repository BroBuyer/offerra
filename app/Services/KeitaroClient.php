<?php

namespace App\Services;

use App\Models\UserSetting;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use RuntimeException;

class KeitaroClient
{
    /**
     * @param  array<string, mixed>  $input
     * @return array{id: int, token: string, alias: string, name: string}
     */
    public function createCampaign(UserSetting $settings, array $input): array
    {
        $apiKey = $settings->keitaro_api_key;

        if (! $apiKey) {
            throw new RuntimeException('Збережіть Keitaro Admin API key у налаштуваннях.');
        }

        $baseUrl = rtrim($settings->keitaro_url ?? 'https://clickmetrics38.com', '/');
        $name = $this->buildCampaignName($input);
        $alias = $this->buildAlias($input);

        $payload = [
            'name' => $name,
            'alias' => $alias,
            'type' => 'position',
            'state' => 'active',
        ];

        if ($settings->keitaro_group_id) {
            $payload['group_id'] = (int) $settings->keitaro_group_id;
        }

        $response = Http::withHeaders([
            'Api-Key' => $apiKey,
            'Accept' => 'application/json',
        ])
            ->timeout(30)
            ->post("{$baseUrl}/admin_api/v1/campaigns", $payload);

        if ($response->failed()) {
            throw new RuntimeException(
                'Keitaro: не вдалося створити кампанію — '.$this->formatError($response->body()),
            );
        }

        /** @var array<string, mixed> $data */
        $data = $response->json();

        $campaignId = (int) ($data['id'] ?? 0);
        $token = (string) ($data['token'] ?? '');

        if ($campaignId === 0 || $token === '') {
            throw new RuntimeException('Keitaro: неочікувана відповідь при створенні кампанії.');
        }

        $this->createDefaultStream($baseUrl, $apiKey, $campaignId);

        return [
            'id' => $campaignId,
            'token' => $token,
            'alias' => (string) ($data['alias'] ?? $alias),
            'name' => (string) ($data['name'] ?? $name),
        ];
    }

    private function createDefaultStream(string $baseUrl, string $apiKey, int $campaignId): void
    {
        $response = Http::withHeaders([
            'Api-Key' => $apiKey,
            'Accept' => 'application/json',
        ])
            ->timeout(30)
            ->post("{$baseUrl}/admin_api/v1/streams", [
                'campaign_id' => $campaignId,
                'type' => 'default',
                'name' => 'Flow 1',
                'action_type' => 'do_nothing',
                'schema' => 'action',
                'state' => 'active',
            ]);

        if ($response->failed()) {
            throw new RuntimeException(
                'Keitaro: кампанію створено, але flow не додано — '.$this->formatError($response->body()),
            );
        }
    }

    /**
     * @param  array<string, mixed>  $input
     */
    public function buildCampaignName(array $input): string
    {
        $date = now()->format('d.m');

        return sprintf(
            'SEO %s BRO %s (%s) %s',
            strtoupper($input['geo']),
            $input['brand'],
            $date,
            $input['domain'],
        );
    }

    /**
     * @param  array<string, mixed>  $input
     */
    private function buildAlias(array $input): string
    {
        $slug = Str::slug($input['brand'], '');
        $slug = $slug !== '' ? $slug : 'offer';

        return Str::lower(substr($input['geo'], 0, 2).'-'.$slug.'-'.Str::random(4));
    }

    private function formatError(string $body): string
    {
        $decoded = json_decode($body, true);

        if (is_array($decoded) && isset($decoded['message'])) {
            return (string) $decoded['message'];
        }

        return Str::limit(trim($body), 200);
    }

    public function campaignExists(UserSetting $settings, int $campaignId): bool
    {
        $apiKey = $settings->keitaro_api_key;

        if (! $apiKey || $campaignId <= 0) {
            return false;
        }

        $baseUrl = rtrim($settings->keitaro_url ?? 'https://clickmetrics38.com', '/');

        $response = Http::withHeaders([
            'Api-Key' => $apiKey,
            'Accept' => 'application/json',
        ])
            ->timeout(20)
            ->get("{$baseUrl}/admin_api/v1/campaigns/{$campaignId}");

        return $response->successful();
    }

    /**
     * @return list<array{id: int, name: string, alias: string, token: string}>
     */
    public function listCampaigns(UserSetting $settings): array
    {
        $apiKey = $settings->keitaro_api_key;

        if (! $apiKey) {
            return [];
        }

        $baseUrl = rtrim($settings->keitaro_url ?? 'https://clickmetrics38.com', '/');

        $response = Http::withHeaders([
            'Api-Key' => $apiKey,
            'Accept' => 'application/json',
        ])
            ->timeout(60)
            ->get("{$baseUrl}/admin_api/v1/campaigns");

        if ($response->failed()) {
            throw new RuntimeException(
                'Keitaro: не вдалося отримати список кампаній — '.$this->formatError($response->body()),
            );
        }

        /** @var list<array<string, mixed>> $data */
        $data = $response->json() ?? [];
        $campaigns = [];

        foreach ($data as $row) {
            $id = (int) ($row['id'] ?? 0);

            if ($id === 0) {
                continue;
            }

            $campaigns[] = [
                'id' => $id,
                'name' => (string) ($row['name'] ?? ''),
                'alias' => (string) ($row['alias'] ?? ''),
                'token' => (string) ($row['token'] ?? ''),
            ];
        }

        return $campaigns;
    }
}
