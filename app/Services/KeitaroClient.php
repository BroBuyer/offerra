<?php

namespace App\Services;

use App\Models\UserSetting;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use RuntimeException;

class KeitaroClient
{
    public function __construct(
        private readonly SalesPostbackService $salesPostbacks,
    ) {}

    /**
     * @param  array<string, mixed>  $input
     * @return array{id: int, token: string, alias: string, name: string, reused: bool}
     */
    public function createCampaign(UserSetting $settings, array $input): array
    {
        $apiKey = $settings->keitaro_api_key;

        if (! $apiKey) {
            throw new RuntimeException('Збережіть Keitaro Admin API key у налаштуваннях.');
        }

        $name = $this->buildCampaignName($input, $settings->affiliate_tag);

        $existing = $this->findCampaignByName($settings, $name);

        if ($existing) {
            $this->ensureSalesS2sPostback($settings, (int) $existing['id']);

            return array_merge($existing, ['reused' => true]);
        }

        $baseUrl = rtrim($settings->keitaro_url ?? 'https://clickmetrics38.com', '/');
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
            if ($this->isDuplicateNameError($response->body())) {
                $existing = $this->findCampaignByName($settings, $name);

                if ($existing) {
                    $this->ensureSalesS2sPostback($settings, (int) $existing['id']);

                    return array_merge($existing, ['reused' => true]);
                }
            }

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

        $this->ensureDefaultStream($settings, $campaignId);
        $this->ensureSalesS2sPostback($settings, $campaignId);

        return [
            'id' => $campaignId,
            'token' => $token,
            'alias' => (string) ($data['alias'] ?? $alias),
            'name' => (string) ($data['name'] ?? $name),
            'reused' => false,
        ];
    }

    /**
     * Attach panel sales S2S postback (sale → Telegram) if missing.
     */
    public function ensureSalesS2sPostback(UserSetting $settings, int $campaignId): void
    {
        if ($campaignId <= 0 || ! $settings->keitaro_api_key) {
            return;
        }

        $url = $this->salesPostbacks->postbackUrl($settings);
        $baseUrl = rtrim($settings->keitaro_url ?? 'https://clickmetrics38.com', '/');
        $apiKey = $settings->keitaro_api_key;

        try {
            $response = Http::withHeaders([
                'Api-Key' => $apiKey,
                'Accept' => 'application/json',
            ])
                ->timeout(30)
                ->get("{$baseUrl}/admin_api/v1/campaigns/{$campaignId}");
        } catch (\Throwable $e) {
            Log::warning('Keitaro S2S: failed to load campaign', [
                'campaign_id' => $campaignId,
                'error' => $e->getMessage(),
            ]);

            return;
        }

        if ($response->failed()) {
            return;
        }

        /** @var array<string, mixed> $campaign */
        $campaign = $response->json() ?? [];

        // This Keitaro build stores campaign S2S under "postbacks" (not "s2s_postbacks").
        $existingRaw = $campaign['postbacks'] ?? [];

        if (! is_array($existingRaw)) {
            $existingRaw = [];
        }

        $token = $this->salesPostbacks->ensureToken($settings);
        $marker = '/api/v1/postback/'.$token;

        $existing = [];

        foreach ($existingRaw as $row) {
            if (! is_array($row)) {
                continue;
            }

            $rowUrl = trim((string) ($row['url'] ?? ''));

            if ($rowUrl === '') {
                continue;
            }

            if (str_contains($rowUrl, $marker)) {
                return;
            }

            $method = strtoupper(trim((string) ($row['method'] ?? 'GET')));
            $statuses = $row['statuses'] ?? ['sale'];

            if (! is_array($statuses) || $statuses === []) {
                $statuses = ['sale'];
            }

            $existing[] = [
                'url' => $rowUrl,
                'method' => $method !== '' ? $method : 'GET',
                'statuses' => array_values($statuses),
            ];
        }

        $existing[] = [
            'url' => $url,
            'method' => 'GET',
            'statuses' => ['sale'],
        ];

        $put = Http::withHeaders([
            'Api-Key' => $apiKey,
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])
            ->timeout(30)
            ->put("{$baseUrl}/admin_api/v1/campaigns/{$campaignId}", [
                'postbacks' => $existing,
            ]);

        if ($put->failed()) {
            Log::warning('Keitaro S2S: failed to attach sales postback', [
                'campaign_id' => $campaignId,
                'body' => Str::limit($put->body(), 300),
            ]);

            return;
        }

        // Verify — Keitaro may return 200 while ignoring unknown fields.
        try {
            $verify = Http::withHeaders([
                'Api-Key' => $apiKey,
                'Accept' => 'application/json',
            ])
                ->timeout(30)
                ->get("{$baseUrl}/admin_api/v1/campaigns/{$campaignId}");
        } catch (\Throwable) {
            return;
        }

        $verified = false;
        $postbacks = $verify->json('postbacks') ?? [];

        if (is_array($postbacks)) {
            foreach ($postbacks as $row) {
                if (is_array($row) && str_contains((string) ($row['url'] ?? ''), $marker)) {
                    $verified = true;
                    break;
                }
            }
        }

        if (! $verified) {
            Log::warning('Keitaro S2S: postback not present after PUT', [
                'campaign_id' => $campaignId,
            ]);
        }
    }

    /**
     * @return array{id: int, token: string, alias: string, name: string}|null
     */
    public function findCampaignByName(UserSetting $settings, string $name): ?array
    {
        foreach ($this->listCampaigns($settings) as $campaign) {
            if ($campaign['name'] !== $name) {
                continue;
            }

            if ($campaign['token'] === '') {
                $details = $this->getCampaign($settings, $campaign['id']);

                if ($details) {
                    return $details;
                }
            }

            return $campaign;
        }

        return null;
    }

    /**
     * @return array{id: int, token: string, alias: string, name: string}|null
     */
    public function getCampaign(UserSetting $settings, int $campaignId): ?array
    {
        $apiKey = $settings->keitaro_api_key;

        if (! $apiKey || $campaignId <= 0) {
            return null;
        }

        $baseUrl = rtrim($settings->keitaro_url ?? 'https://clickmetrics38.com', '/');

        for ($attempt = 0; $attempt < 2; $attempt++) {
            try {
                $response = Http::withHeaders([
                    'Api-Key' => $apiKey,
                    'Accept' => 'application/json',
                ])
                    ->timeout($attempt === 0 ? 45 : 90)
                    ->get("{$baseUrl}/admin_api/v1/campaigns/{$campaignId}");
            } catch (\Throwable) {
                if ($attempt === 1) {
                    return null;
                }

                continue;
            }

            if ($response->failed()) {
                return null;
            }

            /** @var array<string, mixed> $row */
            $row = $response->json() ?? [];
            $id = (int) ($row['id'] ?? 0);

            if ($id === 0) {
                return null;
            }

            return [
                'id' => $id,
                'name' => (string) ($row['name'] ?? ''),
                'alias' => (string) ($row['alias'] ?? ''),
                'token' => (string) ($row['token'] ?? ''),
            ];
        }

        return null;
    }

    /**
     * @return list<array<string, mixed>>
     */
    public function listStreams(UserSetting $settings, int $campaignId): array
    {
        $apiKey = $settings->keitaro_api_key;

        if (! $apiKey || $campaignId <= 0) {
            return [];
        }

        $baseUrl = rtrim($settings->keitaro_url ?? 'https://clickmetrics38.com', '/');

        try {
            $response = Http::withHeaders([
                'Api-Key' => $apiKey,
                'Accept' => 'application/json',
            ])
                ->timeout(45)
                ->get("{$baseUrl}/admin_api/v1/campaigns/{$campaignId}/streams");
        } catch (\Throwable) {
            return [];
        }

        if ($response->failed()) {
            return [];
        }

        /** @var list<array<string, mixed>> $streams */
        $streams = $response->json() ?? [];

        return is_array($streams) ? $streams : [];
    }

    public function ensureDefaultStream(UserSetting $settings, int $campaignId): void
    {
        if ($campaignId <= 0) {
            return;
        }

        if ($this->listStreams($settings, $campaignId) !== []) {
            return;
        }

        $apiKey = $settings->keitaro_api_key;

        if (! $apiKey) {
            throw new RuntimeException('Збережіть Keitaro Admin API key у налаштуваннях.');
        }

        $baseUrl = rtrim($settings->keitaro_url ?? 'https://clickmetrics38.com', '/');
        $this->createDefaultStream($settings, $baseUrl, $apiKey, $campaignId);
    }

    private function isDuplicateNameError(string $body): bool
    {
        $normalized = strtolower($body);

        return str_contains($normalized, 'already used')
            || str_contains($normalized, 'already been taken')
            || str_contains($normalized, 'has already');
    }

    private function createDefaultStream(UserSetting $settings, string $baseUrl, string $apiKey, int $campaignId): void
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

        if ($response->successful()) {
            return;
        }

        if ($this->isDuplicateStreamError($response->body())) {
            return;
        }

        throw new RuntimeException(
            'Keitaro: кампанію створено, але flow не додано — '.$this->formatError($response->body()),
        );
    }

    private function isDuplicateStreamError(string $body): bool
    {
        $normalized = strtolower($body);

        return str_contains($normalized, 'already')
            || str_contains($normalized, 'exists')
            || str_contains($normalized, 'duplicate')
            || str_contains($normalized, 'only one default flow');
    }

    /**
     * @param  array<string, mixed>  $input
     */
    public function buildCampaignName(array $input, ?string $affiliateTag = null): string
    {
        $date = $this->resolveCampaignDate($input);
        $affiliate = $this->normalizeAffiliateTag($affiliateTag ?? $input['affiliate_tag'] ?? null);

        return sprintf(
            'SEO %s %s %s (%s) %s',
            strtoupper((string) $input['geo']),
            $affiliate,
            $input['brand'],
            $date,
            $input['domain'],
        );
    }

    /**
     * Prefer offer created_at from DB; fall back to today for brand-new offers.
     *
     * @param  array<string, mixed>  $input
     */
    private function resolveCampaignDate(array $input): string
    {
        $raw = $input['created_at'] ?? $input['date'] ?? null;

        if ($raw !== null && $raw !== '') {
            try {
                return \Carbon\Carbon::parse((string) $raw)
                    ->timezone((string) config('app.timezone', 'UTC'))
                    ->format('d.m.Y');
            } catch (\Throwable) {
                // fall through
            }
        }

        return now()->format('d.m.Y');
    }

    public function updateCampaignName(UserSetting $settings, int $campaignId, string $name): void
    {
        $apiKey = $settings->keitaro_api_key;

        if (! $apiKey) {
            throw new RuntimeException('Збережіть Keitaro Admin API key у налаштуваннях.');
        }

        if ($campaignId <= 0 || trim($name) === '') {
            throw new RuntimeException('Keitaro: некоректні дані для перейменування кампанії.');
        }

        $baseUrl = rtrim($settings->keitaro_url ?? 'https://clickmetrics38.com', '/');

        $response = Http::withHeaders([
            'Api-Key' => $apiKey,
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])
            ->timeout(30)
            ->put("{$baseUrl}/admin_api/v1/campaigns/{$campaignId}", [
                'name' => $name,
            ]);

        if ($response->failed()) {
            throw new RuntimeException(
                'Keitaro: не вдалося перейменувати кампанію — '.$this->formatError($response->body()),
            );
        }
    }

    private function normalizeAffiliateTag(?string $tag): string
    {
        $tag = strtoupper(trim((string) $tag));

        return $tag !== '' ? $tag : 'BRO';
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

        if (is_array($decoded)) {
            if (isset($decoded['message'])) {
                return (string) $decoded['message'];
            }

            foreach ($decoded as $field => $messages) {
                if (is_array($messages) && isset($messages[0])) {
                    return sprintf('%s: %s', $field, (string) $messages[0]);
                }
            }
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
