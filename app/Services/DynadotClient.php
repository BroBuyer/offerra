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
     * @return array{
     *     balances: list<array{currency: string, amount: string}>,
     *     usd: ?float,
     *     low_balance: bool
     * }
     */
    public function getAccountBalance(UserSetting $settings): array
    {
        $apiKey = $this->requireApiKey($settings);
        $payload = $this->apiGet($settings, $apiKey, ['command' => 'get_account_balance']);

        return $this->parseAccountBalance($payload, (bool) $settings->dynadot_sandbox);
    }

    /**
     * @return array{
     *     ok: bool,
     *     domain: string,
     *     status: string,
     *     expiration: ?int,
     *     message: ?string,
     *     price: ?string,
     *     auto_renew_disabled: bool
     * }
     */
    public function register(UserSetting $settings, string $domain, ?int $years = null): array
    {
        $apiKey = $this->requireApiKey($settings);
        $domain = DomainName::normalize($domain);

        if ($domain === '') {
            throw new RuntimeException('Невірний домен.');
        }

        $duration = 1;
        $contactId = self::normalizeContactId((string) ($settings->dynadot_contact_id ?? ''));

        if ($contactId === '') {
            throw new RuntimeException('Вкажіть Dynadot Contact ID у налаштуваннях (Мои домены → Контактные записи).');
        }

        $availability = $this->searchOne($settings, $apiKey, $domain);
        $this->throwOnGlobalApiError($availability, (bool) $settings->dynadot_sandbox);

        if (! $availability['available']) {
            return [
                'ok' => false,
                'domain' => $domain,
                'status' => $availability['status'],
                'expiration' => null,
                'message' => $availability['status'] === 'taken'
                    ? 'Домен уже зайнятий.'
                    : ($availability['message'] ?? 'Домен недоступний для реєстрації.'),
                'price' => $availability['price'],
                'auto_renew_disabled' => false,
            ];
        }

        $params = [
            'command' => 'register',
            'domain' => $domain,
            'duration' => $duration,
            'currency' => 'USD',
            'registrant_contact' => $contactId,
            'admin_contact' => $contactId,
            'technical_contact' => $contactId,
            'billing_contact' => $contactId,
        ];

        $payload = $this->apiGet($settings, $apiKey, $params);

        $result = $this->parseRegisterResult($domain, $payload, (bool) $settings->dynadot_sandbox, $availability['price']);

        if (! $result['ok']) {
            return $result;
        }

        $autoRenewDisabled = $this->disableAutoRenew($settings, $apiKey, $result['domain']);
        $result['auto_renew_disabled'] = $autoRenewDisabled;

        if (! $autoRenewDisabled) {
            $result['message'] = 'Домен зареєстровано, але не вдалося вимкнути автопродовження в Dynadot. Перевірте вручну.';
        }

        return $result;
    }

    /**
     * @param  list<string>  $nameservers
     */
    public function setNameservers(UserSetting $settings, string $domain, array $nameservers): void
    {
        $apiKey = $this->requireApiKey($settings);
        $domain = DomainName::normalize($domain);
        $nameservers = array_values(array_filter(array_map(
            static fn (string $ns) => strtolower(trim($ns)),
            $nameservers,
        )));

        if ($domain === '' || $nameservers === []) {
            throw new RuntimeException('Немає nameservers для оновлення Dynadot.');
        }

        $params = [
            'command' => 'set_ns',
            'domain' => $domain,
        ];

        foreach ($nameservers as $index => $nameserver) {
            $params["ns{$index}"] = $nameserver;
        }

        $payload = $this->apiGet($settings, $apiKey, $params);
        $apiError = $this->extractPayloadError($payload, (bool) $settings->dynadot_sandbox);

        if ($apiError !== null) {
            throw new RuntimeException($apiError);
        }

        $response = $payload['SetNsResponse'] ?? $payload['setNsResponse'] ?? null;

        if (! is_array($response)) {
            throw new RuntimeException('Неочікувана відповідь Dynadot (set_ns)');
        }

        $responseCode = (string) ($response['ResponseCode'] ?? $response['SuccessCode'] ?? '');
        $status = strtolower((string) ($response['Status'] ?? ''));

        if ($responseCode !== '0' && $status !== 'success') {
            throw new RuntimeException($this->humanizeApiError(
                (string) ($response['Error'] ?? 'Dynadot set_ns error'),
                (bool) $settings->dynadot_sandbox,
            ));
        }
    }

    private function disableAutoRenew(UserSetting $settings, string $apiKey, string $domain): bool
    {
        $maxAttempts = 4;

        for ($attempt = 1; $attempt <= $maxAttempts; $attempt++) {
            try {
                if ($this->setRenewOption($settings, $apiKey, $domain, 'donot')) {
                    return true;
                }
            } catch (RuntimeException) {
                // Retry below when Dynadot is busy.
            }

            if ($attempt < $maxAttempts) {
                usleep(450_000 * $attempt);
            }
        }

        return false;
    }

    private function setRenewOption(UserSetting $settings, string $apiKey, string $domain, string $option): bool
    {
        $payload = $this->apiGet($settings, $apiKey, [
            'command' => 'set_renew_option',
            'domain' => $domain,
            'renew_option' => $option,
        ]);

        return $this->parseSetRenewOptionResult($payload, (bool) $settings->dynadot_sandbox);
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    private function parseSetRenewOptionResult(array $payload, bool $sandbox): bool
    {
        $apiError = $this->extractPayloadError($payload, $sandbox);

        if ($apiError !== null) {
            if ($this->isBusyApiError($apiError)) {
                throw new RuntimeException($apiError);
            }

            return false;
        }

        $response = $payload['SetRenewOptionResponse'] ?? $payload['setRenewOptionResponse'] ?? null;

        if (! is_array($response)) {
            return false;
        }

        $responseCode = (string) ($response['ResponseCode'] ?? $response['SuccessCode'] ?? '');
        $status = strtolower((string) ($response['Status'] ?? ''));

        return $responseCode === '0' || $status === 'success';
    }

    private function requireApiKey(UserSetting $settings): string
    {
        $apiKey = trim((string) $settings->dynadot_api_key);

        if ($apiKey === '') {
            throw new RuntimeException('Збережіть Dynadot API key у налаштуваннях.');
        }

        return $apiKey;
    }

    /**
     * @param  array<string, scalar|null>  $params
     * @return array<string, mixed>
     */
    private function apiGet(UserSetting $settings, string $apiKey, array $params): array
    {
        $response = Http::timeout(40)->get($this->apiBaseUrl((bool) $settings->dynadot_sandbox), [
            'key' => $apiKey,
            ...$params,
        ]);

        if ($response->failed()) {
            throw new RuntimeException('Dynadot HTTP '.$response->status());
        }

        /** @var array<string, mixed> $payload */
        $payload = $response->json() ?? [];

        if ($payload === []) {
            throw new RuntimeException('Порожня відповідь Dynadot');
        }

        return $payload;
    }

    /**
     * @param  array<string, mixed>  $payload
     * @return array{
     *     balances: list<array{currency: string, amount: string}>,
     *     usd: ?float,
     *     low_balance: bool
     * }
     */
    private function parseAccountBalance(array $payload, bool $sandbox): array
    {
        $apiError = $this->extractPayloadError($payload, $sandbox);

        if ($apiError !== null) {
            throw new RuntimeException($apiError);
        }

        $balanceResponse = $payload['GetAccountBalanceResponse']
            ?? $payload['getAccountBalanceResponse']
            ?? null;

        if (! is_array($balanceResponse)) {
            throw new RuntimeException('Неочікувана відповідь Dynadot (balance)');
        }

        $responseCode = (string) ($balanceResponse['ResponseCode'] ?? $balanceResponse['SuccessCode'] ?? '');
        $status = strtolower((string) ($balanceResponse['Status'] ?? ''));

        if ($responseCode !== '' && $responseCode !== '0' && $status === 'error') {
            throw new RuntimeException($this->humanizeApiError(
                (string) ($balanceResponse['Error'] ?? 'Dynadot balance error'),
                $sandbox,
            ));
        }

        $balances = [];
        $balanceList = $balanceResponse['BalanceList'] ?? $balanceResponse['balanceList'] ?? [];

        if (is_array($balanceList)) {
            $rows = isset($balanceList['Currency']) || isset($balanceList['Amount'])
                ? [$balanceList]
                : $balanceList;

            foreach ($rows as $row) {
                if (! is_array($row)) {
                    continue;
                }

                $currency = strtoupper(trim((string) ($row['Currency'] ?? $row['currency'] ?? '')));
                $amount = trim((string) ($row['Amount'] ?? $row['amount'] ?? ''));

                if ($currency !== '' && $amount !== '') {
                    $balances[] = [
                        'currency' => $currency,
                        'amount' => $amount,
                    ];
                }
            }
        }

        $usd = null;

        foreach ($balances as $balance) {
            if ($balance['currency'] === 'USD') {
                $usd = (float) str_replace(',', '', $balance['amount']);
                break;
            }
        }

        return [
            'balances' => $balances,
            'usd' => $usd,
            'low_balance' => $usd !== null && $usd < 15,
        ];
    }

    /**
     * @param  array<string, mixed>  $payload
     * @return array{
     *     ok: bool,
     *     domain: string,
     *     status: string,
     *     expiration: ?int,
     *     message: ?string,
     *     price: ?string,
     *     auto_renew_disabled: bool
     * }
     */
    private function parseRegisterResult(string $domain, array $payload, bool $sandbox, ?string $price): array
    {
        $apiError = $this->extractPayloadError($payload, $sandbox);

        if ($apiError !== null) {
            return [
                'ok' => false,
                'domain' => $domain,
                'status' => 'error',
                'expiration' => null,
                'message' => $apiError,
                'price' => $price,
                'auto_renew_disabled' => false,
            ];
        }

        $registerResponse = $payload['RegisterResponse'] ?? $payload['registerResponse'] ?? null;

        if (! is_array($registerResponse)) {
            return [
                'ok' => false,
                'domain' => $domain,
                'status' => 'error',
                'expiration' => null,
                'message' => 'Неочікувана відповідь Dynadot (register)',
                'price' => $price,
                'auto_renew_disabled' => false,
            ];
        }

        $responseCode = (string) ($registerResponse['ResponseCode'] ?? $registerResponse['SuccessCode'] ?? '');
        $status = strtolower((string) ($registerResponse['Status'] ?? ''));

        if ($responseCode === '0' || $status === 'success') {
            $expiration = $registerResponse['Expiration'] ?? $registerResponse['expiration'] ?? null;

            return [
                'ok' => true,
                'domain' => strtolower((string) ($registerResponse['DomainName'] ?? $domain)),
                'status' => 'success',
                'expiration' => is_numeric($expiration) ? (int) $expiration : null,
                'message' => null,
                'price' => $price,
                'auto_renew_disabled' => false,
            ];
        }

        $error = (string) ($registerResponse['Error'] ?? $registerResponse['Message'] ?? 'Помилка реєстрації');

        return [
            'ok' => false,
            'domain' => $domain,
            'status' => $status !== '' ? $status : 'error',
            'expiration' => null,
            'message' => $this->humanizeRegisterError($error),
            'price' => $price,
            'auto_renew_disabled' => false,
        ];
    }

    public static function normalizeContactId(string $contactId): string
    {
        $contactId = trim($contactId);

        if ($contactId === '') {
            return '';
        }

        if (preg_match('/^c-(\d+)$/i', $contactId, $matches) === 1) {
            return $matches[1];
        }

        return $contactId;
    }

    private function humanizeRegisterError(string $message): string
    {
        $normalized = strtolower(trim($message));

        return match (true) {
            str_contains($normalized, 'invalid registrant_contact'),
            str_contains($normalized, 'invalid admin_contact'),
            str_contains($normalized, 'invalid contact') => 'Невірний Contact ID. Вставте лише цифри (наприклад 1885528), без префікса C-.',
            str_contains($normalized, 'insufficient') => 'Недостатньо коштів на балансі Dynadot. Поповніть акаунт.',
            str_contains($normalized, 'not_available'),
            str_contains($normalized, 'not available') => 'Домен уже зайнятий.',
            str_contains($normalized, 'invalid contact') => 'Невірний Contact ID у налаштуваннях Dynadot.',
            default => $message,
        };
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
