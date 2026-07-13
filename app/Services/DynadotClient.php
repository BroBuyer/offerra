<?php

namespace App\Services;

use App\Models\UserSetting;
use App\Support\DomainName;
use Illuminate\Support\Facades\Http;
use RuntimeException;

class DynadotClient
{
    /**
     * @return list<array{domain: string, available: bool, price: ?string, status: string, message: ?string}>
     */
    public function search(UserSetting $settings, string $query): array
    {
        $apiKey = $settings->dynadot_api_key;

        if (! filled($apiKey)) {
            throw new RuntimeException('Збережіть Dynadot API key у налаштуваннях.');
        }

        $domains = $this->expandQuery($query);

        if ($domains === []) {
            return [];
        }

        // Regular Dynadot accounts: 1 domain per search command.
        if (count($domains) === 1) {
            return [$this->searchOne($settings, $apiKey, $domains[0])];
        }

        $batch = $this->searchBatch($settings, $apiKey, $domains);
        $allFailed = collect($batch)->every(
            fn (array $row): bool => $row['status'] === 'error'
                && ($row['message'] ?? '') !== 'Немає даних у відповіді',
        );

        if ($allFailed) {
            $sequential = [];
            foreach ($domains as $domain) {
                $sequential[] = $this->searchOne($settings, $apiKey, $domain);
                usleep(120_000);
            }

            return $sequential;
        }

        return $batch;
    }

    /**
     * @param  list<string>  $domains
     * @return list<array{domain: string, available: bool, price: ?string, status: string, message: ?string}>
     */
    private function searchBatch(UserSetting $settings, string $apiKey, array $domains): array
    {
        $baseUrl = $settings->dynadot_sandbox
            ? 'https://api-sandbox.dynadot.com/api3.json'
            : 'https://api.dynadot.com/api3.json';

        $params = [
            'key' => $apiKey,
            'command' => 'search',
            'show_price' => 1,
            'currency' => 'USD',
        ];

        foreach (array_values($domains) as $index => $domain) {
            $params['domain'.$index] = $domain;
        }

        $response = Http::timeout(30)->get($baseUrl, $params);

        if ($response->failed()) {
            return array_map(
                fn (string $domain): array => [
                    'domain' => $domain,
                    'available' => false,
                    'price' => null,
                    'status' => 'error',
                    'message' => 'HTTP '.$response->status(),
                ],
                $domains,
            );
        }

        /** @var array<string, mixed> $payload */
        $payload = $response->json() ?? [];

        return $this->parseBatchSearchResult($domains, $payload);
    }

    /**
     * @param  list<string>  $requested
     * @param  array<string, mixed>  $payload
     * @return list<array{domain: string, available: bool, price: ?string, status: string, message: ?string}>
     */
    private function parseBatchSearchResult(array $requested, array $payload): array
    {
        $searchResponse = $payload['SearchResponse'] ?? $payload['searchResponse'] ?? null;

        if (! is_array($searchResponse)) {
            return array_map(
                fn (string $domain): array => [
                    'domain' => $domain,
                    'available' => false,
                    'price' => null,
                    'status' => 'error',
                    'message' => 'Неочікувана відповідь Dynadot',
                ],
                $requested,
            );
        }

        $responseCode = (string) ($searchResponse['ResponseCode'] ?? $searchResponse['SuccessCode'] ?? '');
        $status = strtolower((string) ($searchResponse['Status'] ?? ''));

        if ($responseCode !== '' && $responseCode !== '0' && $status === 'error') {
            $message = (string) ($searchResponse['Error'] ?? 'Dynadot error');

            return array_map(
                fn (string $domain): array => [
                    'domain' => $domain,
                    'available' => false,
                    'price' => null,
                    'status' => 'error',
                    'message' => $message,
                ],
                $requested,
            );
        }

        $rows = $this->collectSearchRows($searchResponse);
        $byDomain = [];

        foreach ($rows as $row) {
            $name = strtolower((string) ($row['DomainName'] ?? ''));
            if ($name !== '') {
                $byDomain[$name] = $row;
            }
        }

        $results = [];

        foreach ($requested as $domain) {
            $row = $byDomain[strtolower($domain)] ?? null;

            if ($row === null) {
                $results[] = [
                    'domain' => $domain,
                    'available' => false,
                    'price' => null,
                    'status' => 'error',
                    'message' => 'Немає даних у відповіді',
                ];

                continue;
            }

            $results[] = $this->mapSearchRow($domain, $row);
        }

        return $results;
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
            $message = (string) ($row['Error'] ?? $row['MoreInfo'] ?? 'Помилка реєстру');
        }

        return [
            'domain' => $name !== '' ? $name : $domain,
            'available' => $available,
            'price' => $price,
            'status' => $statusKey,
            'message' => $message,
        ];
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
            if ($ascii !== '') {
                $domains[] = $ascii;
            }

            $base = preg_replace('/\.[^.]+$/', '', $ascii !== '' ? $ascii : $raw) ?? $raw;
            $base = preg_replace('/[^a-z0-9-]/', '', $base) ?? $base;

            foreach ($tlds as $tld) {
                $candidate = $base.'.'.ltrim($tld, '.');
                if ($candidate !== '' && ! in_array($candidate, $domains, true)) {
                    $domains[] = $candidate;
                }
            }
        } else {
            $slug = preg_replace('/[^a-z0-9-]/', '', $raw) ?? '';

            foreach ($tlds as $tld) {
                if ($slug !== '') {
                    $domains[] = $slug.'.'.ltrim($tld, '.');
                }
            }
        }

        return array_values(array_slice(array_unique(array_filter($domains)), 0, 20));
    }

    /**
     * @return array{domain: string, available: bool, price: ?string, status: string, message: ?string}
     * @deprecated kept for tests; use searchBatch()
     */
    private function searchOne(UserSetting $settings, string $apiKey, string $domain): array
    {
        $baseUrl = $settings->dynadot_sandbox
            ? 'https://api-sandbox.dynadot.com/api3.json'
            : 'https://api.dynadot.com/api3.json';

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

        return $this->parseSearchResult($domain, $payload);
    }

    /**
     * @param  array<string, mixed>  $payload
     * @return array{domain: string, available: bool, price: ?string, status: string, message: ?string}
     */
    private function parseSearchResult(string $domain, array $payload): array
    {
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
                'message' => (string) ($searchResponse['Error'] ?? 'Dynadot error'),
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
