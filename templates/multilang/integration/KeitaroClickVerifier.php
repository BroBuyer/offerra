<?php
declare(strict_types=1);

/**
 * Server-side Keitaro click verification via Admin API.
 * Confirms subid exists in click log for this offer campaign.
 */
final class KeitaroClickVerifier
{
    /** @var array<string, string|null> */
    private static array $cache = [];

    public static function verifyLead(array $lead): ?string
    {
        if (! function_exists('keitaro_is_enabled') || ! keitaro_is_enabled()) {
            return null;
        }

        $apiKey = defined('KEITARO_API_KEY') ? trim((string) KEITARO_API_KEY) : '';
        $campaignId = defined('KEITARO_CAMPAIGN_ID') ? (int) KEITARO_CAMPAIGN_ID : 0;
        $trackerUrl = defined('KEITARO_TRACKER_URL') ? rtrim((string) KEITARO_TRACKER_URL, '/') : '';

        if ($apiKey === '' || $campaignId <= 0 || $trackerUrl === '') {
            return 'KT_NOT_CONFIGURED';
        }

        $subid = trim((string) ($lead['subid'] ?? ''));
        if ($subid === '' || $subid === 'no_subid') {
            return 'NO_SUBID';
        }

        $cacheKey = $campaignId.'|'.$subid;
        if (array_key_exists($cacheKey, self::$cache)) {
            return self::$cache[$cacheKey];
        }

        $result = self::lookupClick($trackerUrl, $apiKey, $subid, $campaignId);
        self::$cache[$cacheKey] = $result;

        return $result;
    }

    private static function lookupClick(string $baseUrl, string $apiKey, string $subid, int $campaignId): ?string
    {
        if (! function_exists('curl_init')) {
            return 'KT_API_UNAVAILABLE';
        }

        $payload = [
            'columns' => ['sub_id', 'campaign_id', 'datetime'],
            'filters' => [
                ['name' => 'sub_id', 'operator' => 'EQUALS', 'expression' => $subid],
            ],
            'limit' => 10,
            'range' => ['interval' => 'last_30_days'],
        ];

        $response = self::apiPost("{$baseUrl}/admin_api/v1/clicks/log", $apiKey, $payload);

        if (is_string($response)) {
            return $response;
        }

        $rows = self::extractRows($response);
        if ($rows === []) {
            return 'KT_CLICK_NOT_FOUND';
        }

        foreach ($rows as $row) {
            if ((int) ($row['campaign_id'] ?? 0) === $campaignId) {
                return null;
            }
        }

        return 'KT_CAMPAIGN_MISMATCH';
    }

    /**
     * @return array<string, mixed>|string Error code string on failure.
     */
    private static function apiPost(string $url, string $apiKey, array $payload): array|string
    {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                'Api-Key: '.$apiKey,
                'Accept: application/json',
                'Content-Type: application/json',
            ],
            CURLOPT_POSTFIELDS => json_encode($payload, JSON_UNESCAPED_UNICODE),
            CURLOPT_TIMEOUT => 8,
            CURLOPT_CONNECTTIMEOUT => 4,
        ]);

        $raw = curl_exec($ch);
        $errno = curl_errno($ch);
        $httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($raw === false) {
            if ($errno === CURLE_OPERATION_TIMEDOUT) {
                return 'KT_API_TIMEOUT';
            }

            return 'KT_API_UNAVAILABLE';
        }

        if ($httpCode === 0) {
            return 'KT_API_UNAVAILABLE';
        }

        if ($httpCode >= 400) {
            return 'KT_API_ERROR';
        }

        $decoded = json_decode((string) $raw, true);
        if (! is_array($decoded)) {
            return 'KT_API_ERROR';
        }

        return $decoded;
    }

    /**
     * @param  array<string, mixed>  $response
     * @return list<array<string, mixed>>
     */
    private static function extractRows(array $response): array
    {
        if (isset($response['rows']) && is_array($response['rows'])) {
            /** @var list<array<string, mixed>> */
            return array_values(array_filter($response['rows'], 'is_array'));
        }

        if (isset($response[0]) && is_array($response[0])) {
            /** @var list<array<string, mixed>> */
            return array_values(array_filter($response, 'is_array'));
        }

        return [];
    }
}
