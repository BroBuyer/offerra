<?php

namespace App\Services;

use App\Models\UserSetting;
use App\Support\DomainName;
use Illuminate\Support\Facades\Http;
use RuntimeException;

class DynadotClient
{
    private const REQUEST_GAP_MICROSECONDS = 180_000;
    /**
     * @return list<array{domain: string, available: bool, price: ?string, status: string, message: ?string}>
     */
    public function search(UserSetting $settings, string $query): array
    {
        $apiKey = trim((string) $settings->dynadot_api_key);

        if ($apiKey === '') {
            throw new RuntimeException('Збережіть Dynadot API key у налаштуваннях.');
        }

        $domains = $this->expandQuery($query);

        if ($domains === []) {
            return [];
        }

        if (count($domains) === 1) {
            $row = $this->searchOne($settings, $apiKey, $domains[0]);
            $this->throwOnGlobalApiError($row, (bool) $settings->dynadot_sandbox);

            return [$row];
        }

        $batch = $this->searchBatch($settings, $apiKey, $domains);
        if ($batch !== null) {
            return $batch;
        }

        return $this->searchMany($settings, $apiKey, $domains);
    }

    /**
     * @return list<string>
     */
    public function expandQuery(string $query): array
    {
        $raw = strtolower(trim($query));
        $raw = preg_replace('#^https?://#i', '', $raw) ?? $raw;
        $raw = preg_replace('~[/?#].*$~', '', $raw) ?? $raw;
        $raw = rtrim($raw, '.');

        if ($raw === '') {
            return [];
        }

        $tlds = config('offerra.domain_search_tlds', ['com', 'org', 'online']);
        $domains = [];

        if (str_contains($raw, '.')) {
            $ascii = DomainName::normalize($raw);
            $ascii = preg_replace('/^www\./', '', $ascii) ?? $ascii;

            return $ascii !== '' ? [$ascii] : [];
        } else {
            $slug = preg_replace('/[^a-z0-9-]/', '', $raw) ?? '';

            foreach ($tlds as $tld) {
                if ($slug !== '') {
                    $domains[] = $slug.'.'.ltrim($tld, '.');
                }
            }
        }

        return array_values(array_unique(array_filter($domains)));
    }

    /**
     * @param  list<string>  $domains
     * @return list<array{domain: string, available: bool, price: ?string, status: string, message: ?string}>|null
     */
    private function searchBatch(UserSetting $settings, string $apiKey, array $domains): ?array
    {
        $sandbox = (bool) $settings->dynadot_sandbox;
        $params = [
            'key' => $apiKey,
            'command' => 'search',
            'show_price' => 1,
            'currency' => 'USD',
        ];

        foreach (array_values($domains) as $index => $domain) {
            $params["domain{$index}"] = $domain;
        }

        $response = Http::timeout(40)->get($this->apiBaseUrl($sandbox), $params);

        if ($response->failed()) {
            return null;
        }

        /** @var array<string, mixed> $payload */
        $payload = $response->json() ?? [];

        if ($payload === []) {
            return null;
        }

        return $this->parseBatchSearchResult($domains, $payload, $sandbox);
    }

    /**
     * @param  list<string>  $domains
     * @return list<array{domain: string, available: bool, price: ?string, status: string, message: ?string}>
     */
    private function searchMany(UserSetting $settings, string $apiKey, array $domains): array
    {
        $sandbox = (bool) $settings->dynadot_sandbox;
        $results = [];

        foreach ($domains as $index => $domain) {
            if ($index > 0) {
                usleep(self::REQUEST_GAP_MICROSECONDS);
            }

            $row = $this->searchOneWithRetry($settings, $apiKey, $domain);
            $this->throwOnGlobalApiError($row, $sandbox);
            $results[] = $row;
        }

        return $results;
    }

    /**
     * @return array{domain: string, available: bool, price: ?string, status: string, message: ?string}
     */
    private function searchOneWithRetry(UserSetting $settings, string $apiKey, string $domain): array
    {
        $maxAttempts = 5;

        for ($attempt = 1; $attempt <= $maxAttempts; $attempt++) {
            $row = $this->searchOne($settings, $apiKey, $domain);

            if ($row['status'] !== 'error' || ! $this->isBusyApiError($row['message'])) {
                return $row;
            }

            if ($attempt < $maxAttempts) {
                usleep(450_000 * $attempt);
            }
        }

        return $row;
    }

    private function isBusyApiError(?string $message): bool
    {
        if ($message === null || $message === '') {
            return false;
        }

        $normalized = strtolower($message);

        return str_contains($normalized, 'currently processing')
            || str_contains($normalized, 'another request')
            || str_contains($normalized, 'system_busy');
    }

    /**
     * @param  array{domain: string, available: bool, price: ?string, status: string, message: ?string}  $row
     */
    private function throwOnGlobalApiError(array $row, bool $sandbox): void
    {
        if ($row['status'] === 'error' && $this->isGlobalApiError($row['message'])) {
            throw new RuntimeException($this->humanizeApiError((string) $row['message'], $sandbox));
        }
    }

    private function apiBaseUrl(bool $sandbox): string
    {
        return $sandbox
            ? 'https://api-sandbox.dynadot.com/api3.json'
            : 'https://api.dynadot.com/api3.json';
    }

    /**
     * @return array{domain: string, available: bool, price: ?string, status: string, message: ?string}
     */
    private function searchOne(UserSetting $settings, string $apiKey, string $domain): array
    {
        $baseUrl = $this->apiBaseUrl((bool) $settings->dynadot_sandbox);

        $response = Http::timeout(25)->get($baseUrl, [
            'key' => $apiKey,
            'command' => 'search',
            'domain0' => $domain,
            'show_price' => 1,
            'currency' => 'USD',
        ]);

        if ($response->failed()) {
            return [
                'domain' => $domain,
                'available' => false,
                'price' => null,
                'status' => 'error',
                'message' => 'HTTP '.$response->status(),
            ];
        }

        /** @var array<string, mixed> $payload */
        $payload = $response->json() ?? [];

        if ($payload === []) {
            return [
                'domain' => $domain,
                'available' => false,
                'price' => null,
                'status' => 'error',
                'message' => 'Порожня відповідь Dynadot',
            ];
        }

        return $this->parseSearchResult($domain, $payload, (bool) $settings->dynadot_sandbox);
    }

    /**
     * @param  list<string>  $domains
     * @param  array<string, mixed>  $payload
     * @return list<array{domain: string, available: bool, price: ?string, status: string, message: ?string}>|null
     */
    private function parseBatchSearchResult(array $domains, array $payload, bool $sandbox): ?array
    {
        $apiError = $this->extractPayloadError($payload, $sandbox);

        if ($apiError !== null) {
            if ($this->isGlobalApiError($apiError)) {
                throw new RuntimeException($this->humanizeApiError($apiError, $sandbox));
            }

            return null;
        }

        $searchResponse = $payload['SearchResponse'] ?? $payload['searchResponse'] ?? null;

        if (! is_array($searchResponse)) {
            return null;
        }

        $responseCode = (string) ($searchResponse['ResponseCode'] ?? $searchResponse['SuccessCode'] ?? '');

        if ($responseCode !== '' && $responseCode !== '0') {
            return null;
        }

        $rows = $this->collectSearchRows($searchResponse);

        if ($rows === [] || count($rows) < count($domains)) {
            return null;
        }

        $byName = [];

        foreach ($rows as $row) {
            if (! is_array($row)) {
                continue;
            }

            $name = strtolower((string) ($row['DomainName'] ?? ''));

            if ($name !== '') {
                $byName[$name] = $this->mapSearchRow($name, $row);
            }
        }

        $results = [];

        foreach ($domains as $domain) {
            $key = strtolower($domain);
            $results[] = $byName[$key] ?? [
                'domain' => $domain,
                'available' => false,
                'price' => null,
                'status' => 'error',
                'message' => 'Немає в відповіді Dynadot',
            ];
        }

        return $results;
    }

    /**
     * @param  array<string, mixed>  $payload
     * @return array{domain: string, available: bool, price: ?string, status: string, message: ?string}
     */
    private function parseSearchResult(string $domain, array $payload, bool $sandbox = false): array
    {
        $apiError = $this->extractPayloadError($payload, $sandbox);

        if ($apiError !== null) {
            return [
                'domain' => $domain,
                'available' => false,
                'price' => null,
                'status' => 'error',
                'message' => $apiError,
            ];
        }

        $searchResponse = $payload['SearchResponse'] ?? $payload['searchResponse'] ?? null;

        if (! is_array($searchResponse)) {
            return [
                'domain' => $domain,
                'available' => false,
                'price' => null,
                'status' => 'error',
                'message' => 'Неочікувана відповідь Dynadot',
            ];
        }

        $responseCode = (string) ($searchResponse['ResponseCode'] ?? $searchResponse['SuccessCode'] ?? '');
        $status = strtolower((string) ($searchResponse['Status'] ?? ''));

        if ($responseCode !== '' && $responseCode !== '0' && $status === 'error') {
            return [
                'domain' => $domain,
                'available' => false,
                'price' => null,
                'status' => 'error',
                'message' => $this->humanizeApiError((string) ($searchResponse['Error'] ?? 'Dynadot error'), $sandbox),
            ];
        }

        $rows = $this->collectSearchRows($searchResponse);
        $row = $rows[0] ?? null;

        if ($row === null) {
            return [
                'domain' => $domain,
                'available' => false,
                'price' => null,
                'status' => 'error',
                'message' => 'Порожня відповідь',
            ];
        }

        return $this->mapSearchRow($domain, $row);
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    private function extractPayloadError(array $payload, bool $sandbox = false): ?string
    {
        $response = $payload['Response'] ?? $payload['response'] ?? null;

        if (! is_array($response)) {
            return null;
        }

        $code = (string) ($response['ResponseCode'] ?? $response['SuccessCode'] ?? '');

        if ($code === '' || $code === '0') {
            return null;
        }

        return $this->humanizeApiError((string) ($response['Error'] ?? 'Dynadot error'), $sandbox);
    }

    private function isGlobalApiError(?string $message): bool
    {
        if ($message === null || $message === '') {
            return false;
        }

        $normalized = strtolower($message);

        return str_contains($normalized, 'invalid key')
            || str_contains($normalized, 'api key')
            || str_contains($normalized, 'not enabled')
            || str_contains($normalized, 'over quota')
            || str_contains($normalized, 'sandbox');
    }

    private function humanizeApiError(string $message, bool $sandbox = false): string
    {
        $normalized = strtolower(trim($message));

        return match (true) {
            str_contains($normalized, 'invalid key') && $sandbox => 'Невірний ключ для Sandbox. Вставте ключ з вкладки «Ключ песочницы» або вимкніть Sandbox.',
            str_contains($normalized, 'invalid key') => 'Невірний Dynadot API key. Вставте Production Key (не Secret Key) і збережіть налаштування.',
            str_contains($normalized, 'not enabled') => 'Dynadot API не увімкнено в акаунті.',
            str_contains($normalized, 'over quota') => 'Перевищено ліміт запитів Dynadot API.',
            default => $message,
        };
    }

    /**
     * @param  array<string, mixed>  $searchResponse
     * @return list<array<string, mixed>>
     */
    private function collectSearchRows(array $searchResponse): array
    {
        $rows = [];
        $results = $searchResponse['SearchResults'] ?? $searchResponse['SearchResult'] ?? null;

        if (is_array($results)) {
            if (isset($results['DomainName']) || isset($results['Available'])) {
                $rows[] = $results;
            } else {
                foreach ($results as $row) {
                    if (is_array($row)) {
                        $rows[] = $row;
                    }
                }
            }
        }

        $header = $searchResponse['SearchHeader'] ?? null;

        if (is_array($header) && (isset($header['DomainName']) || isset($header['Available']))) {
            $rows[] = $header;
        }

        return $rows;
    }

    /**
     * @param  array<string, mixed>  $row
     * @return array{domain: string, available: bool, price: ?string, status: string, message: ?string}
     */
    private function mapSearchRow(string $domain, array $row): array
    {
        $name = strtolower((string) ($row['DomainName'] ?? $domain));
        $availableRaw = strtolower((string) ($row['Available'] ?? $row['available'] ?? 'no'));
        $available = in_array($availableRaw, ['yes', 'available', '1', 'true'], true);
        $price = $this->extractPrice($row);

        $statusKey = match (true) {
            $available => 'available',
            in_array($availableRaw, ['no', 'unavailable', '0', 'false'], true) => 'taken',
            in_array($availableRaw, ['offline', 'system_busy', 'over_quota'], true) => $availableRaw,
            $availableRaw === 'error' => 'error',
            default => $availableRaw !== '' ? $availableRaw : 'unknown',
        };

        $message = null;
        if ($statusKey === 'error') {
            $message = $this->humanizeSearchMessage((string) ($row['Error'] ?? $row['MoreInfo'] ?? 'Помилка реєстру'));
        }

        return [
            'domain' => $name !== '' ? $name : $domain,
            'available' => $available,
            'price' => $price,
            'status' => $statusKey,
            'message' => $message,
        ];
    }

    private function humanizeSearchMessage(string $message): string
    {
        $normalized = strtolower(trim($message));

        return match (true) {
            str_contains($normalized, 'currently processing'),
            str_contains($normalized, 'another request') => 'Dynadot зайнятий — спробуйте ще раз',
            str_contains($normalized, 'system_busy') => 'Реєстр тимчасово перевантажений',
            default => $message,
        };
    }

    /**
     * @param  array<string, mixed>  $row
     */
    private function extractPrice(array $row): ?string
    {
        foreach (['Price', 'RegistrationPrice', 'price'] as $key) {
            if (! empty($row[$key])) {
                return trim((string) $row[$key]);
            }
        }

        return null;
    }
}
