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
        $results = [];

        foreach ($domains as $domain) {
            $results[] = $this->searchOne($settings, $apiKey, $domain);
            usleep(150_000);
        }

        return $results;
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

        return array_values(array_slice(array_unique(array_filter($domains)), 0, 12));
    }

    /**
     * @return array{domain: string, available: bool, price: ?string, status: string, message: ?string}
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

        $row = $this->firstSearchRow($searchResponse);

        if ($row === null) {
            return [
                'domain' => $domain,
                'available' => false,
                'price' => null,
                'status' => 'error',
                'message' => 'Порожня відповідь',
            ];
        }

        $name = strtolower((string) ($row['DomainName'] ?? $domain));
        $availableRaw = strtolower((string) ($row['Available'] ?? $row['available'] ?? 'no'));
        $available = in_array($availableRaw, ['yes', 'available', '1', 'true'], true);
        $price = $this->extractPrice($row);

        $statusKey = match (true) {
            $available => 'available',
            in_array($availableRaw, ['no', 'unavailable', '0', 'false'], true) => 'taken',
            default => $availableRaw !== '' ? $availableRaw : 'unknown',
        };

        return [
            'domain' => $name !== '' ? $name : $domain,
            'available' => $available,
            'price' => $price,
            'status' => $statusKey,
            'message' => null,
        ];
    }

    /**
     * @param  array<string, mixed>  $searchResponse
     * @return array<string, mixed>|null
     */
    private function firstSearchRow(array $searchResponse): ?array
    {
        $results = $searchResponse['SearchResults'] ?? $searchResponse['SearchResult'] ?? null;

        if (is_array($results)) {
            if (isset($results['DomainName']) || isset($results['Available'])) {
                return $results;
            }

            $first = $results[0] ?? null;

            return is_array($first) ? $first : null;
        }

        return null;
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
