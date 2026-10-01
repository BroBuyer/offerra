<?php

namespace App\Services;

use App\Models\GoogleAccount;
use App\Models\Offer;
use App\Models\UserSetting;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use RuntimeException;

class GoogleSearchConsoleClient
{
    public function __construct(
        private readonly GoogleOAuthService $oauth,
    ) {}

    /**
     * Add URL-prefix property, verify via HTML file, submit sitemap.
     *
     * @return array{site_url: string, sitemap_url: string, verified: bool, added: bool, sitemap_submitted: bool, email: string, google_account_id: int}
     */
    public function submitOffer(Offer $offer, UserSetting $settings): array
    {
        $domain = strtolower(trim((string) $offer->domain));
        if ($domain === '') {
            throw new RuntimeException('Offer has no domain.');
        }

        $siteUrl = 'https://'.$domain.'/';
        $sitemapUrl = 'https://'.$domain.'/sitemap.xml';
        $verificationFile = trim((string) ($settings->gsc_verification_filename ?? ''));
        if ($verificationFile === '') {
            throw new RuntimeException('GSC verification HTML file is missing in Settings.');
        }

        $account = $settings->primaryGoogleAccount();
        if (! $account) {
            throw new RuntimeException('Google account is not connected.');
        }

        $this->assertVerificationFileLive($domain, $verificationFile);
        $this->assertHttpsLive($domain);

        $accessToken = $this->oauth->accessTokenForAccount($account);

        // Search Console: add property first, then verify ownership, then sitemap.
        // Submitting the sitemap before ownership has propagated often yields HTTP 403.
        $added = $this->addSite($accessToken, $siteUrl);
        $verified = $this->verifySiteFile($accessToken, $siteUrl);
        $sitemapSubmitted = $this->submitSitemap($accessToken, $siteUrl, $sitemapUrl);

        return [
            'site_url' => $siteUrl,
            'sitemap_url' => $sitemapUrl,
            'verified' => $verified,
            'added' => $added,
            'sitemap_submitted' => $sitemapSubmitted,
            'email' => (string) ($account->email ?? ''),
            'google_account_id' => $account->id,
        ];
    }

    /**
     * Remove URL-prefix property from Search Console (and drop sitemap if present).
     *
     * @return 'deleted'|'already_gone'
     */
    public function removeOffer(Offer $offer, UserSetting $settings): string
    {
        $domain = strtolower(trim((string) $offer->domain));
        if ($domain === '') {
            throw new RuntimeException('Offer has no domain.');
        }

        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $gsc = is_array($meta['gsc'] ?? null) ? $meta['gsc'] : [];

        $siteUrl = trim((string) ($gsc['site_url'] ?? ''));
        if ($siteUrl === '') {
            $siteUrl = 'https://'.$domain.'/';
        }

        $sitemapUrl = trim((string) ($gsc['sitemap_url'] ?? ''));
        if ($sitemapUrl === '') {
            $sitemapUrl = 'https://'.$domain.'/sitemap.xml';
        }

        $deleted = false;
        $lastError = null;

        foreach ($this->accountsForOffer($offer, $settings) as $account) {
            try {
                $accessToken = $this->oauth->accessTokenForAccount($account);
                $this->deleteSitemap($accessToken, $siteUrl, $sitemapUrl);
                if ($this->deleteSite($accessToken, $siteUrl) === 'deleted') {
                    $deleted = true;
                }
            } catch (RuntimeException $e) {
                if ($this->isNotOwnerError($e)) {
                    continue;
                }

                $lastError = $e;
            }
        }

        if ($deleted) {
            return 'deleted';
        }

        if ($lastError) {
            throw $lastError;
        }

        return 'already_gone';
    }

    /**
     * URL Inspection: is this homepage on Google yet.
     *
     * @return array{
     *     verdict: string,
     *     coverage: string,
     *     indexing_state: string,
     *     last_crawl_at: ?string,
     *     indexed: bool
     * }
     */
    public function inspectUrl(Offer $offer, UserSetting|GoogleAccount $source): array
    {
        $domain = strtolower(trim((string) $offer->domain));
        if ($domain === '') {
            throw new RuntimeException('Offer has no domain.');
        }

        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $gsc = is_array($meta['gsc'] ?? null) ? $meta['gsc'] : [];
        $siteUrl = trim((string) ($gsc['site_url'] ?? ''));
        if ($siteUrl === '') {
            $siteUrl = 'https://'.$domain.'/';
        }

        $inspectionUrl = 'https://'.$domain.'/';
        $accessToken = $source instanceof GoogleAccount
            ? $this->oauth->accessTokenForAccount($source)
            : $this->oauth->accessTokenFor($source);

        $response = Http::timeout(30)
            ->withToken($accessToken)
            ->acceptJson()
            ->asJson()
            ->post('https://searchconsole.googleapis.com/v1/urlInspection/index:inspect', [
                'inspectionUrl' => $inspectionUrl,
                'siteUrl' => $siteUrl,
                'languageCode' => 'en-US',
            ]);

        if (! $response->successful()) {
            throw new RuntimeException(
                'Search Console URL inspection failed (HTTP '.$response->status().'): '.$this->shortError((string) $response->body()),
            );
        }

        $index = $response->json('inspectionResult.indexStatusResult') ?? [];
        $verdict = strtoupper(trim((string) ($index['verdict'] ?? '')));
        $coverage = trim((string) ($index['coverageState'] ?? ''));
        $indexingState = strtoupper(trim((string) ($index['indexingState'] ?? '')));
        $lastCrawl = trim((string) ($index['lastCrawlTime'] ?? ''));
        $indexed = in_array($verdict, ['PASS', 'PARTIAL'], true);

        return [
            'verdict' => $verdict,
            'coverage' => $coverage,
            'indexing_state' => $indexingState,
            'last_crawl_at' => $lastCrawl !== '' ? $lastCrawl : null,
            'indexed' => $indexed,
        ];
    }

    public function isNotOwnerError(RuntimeException $e): bool
    {
        $message = strtolower($e->getMessage());

        return str_contains($message, 'http 403')
            || str_contains($message, 'http 404')
            || str_contains($message, 'permission')
            || str_contains($message, 'does not have access')
            || str_contains($message, 'not found');
    }

    /**
     * @return list<GoogleAccount>
     */
    private function accountsForOffer(Offer $offer, UserSetting $settings): array
    {
        $accounts = $settings->googleAccountsForInspect();
        if ($accounts->isEmpty()) {
            $primary = $settings->primaryGoogleAccount();

            return $primary ? [$primary] : [];
        }

        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $gsc = is_array($meta['gsc'] ?? null) ? $meta['gsc'] : [];
        $pinnedId = (int) ($gsc['google_account_id'] ?? 0);
        $pinnedEmail = strtolower(trim((string) ($gsc['email'] ?? '')));

        return $accounts
            ->sortBy(function (GoogleAccount $account) use ($pinnedId, $pinnedEmail) {
                if ($pinnedId > 0 && $account->id === $pinnedId) {
                    return 0;
                }
                if ($pinnedEmail !== '' && strtolower((string) $account->email) === $pinnedEmail) {
                    return 1;
                }
                if ($account->is_primary) {
                    return 2;
                }

                return 3;
            })
            ->values()
            ->all();
    }

    public function assertHttpsLive(string $domain): void
    {
        $this->assertPublicDnsResolves($domain);

        if (! $this->httpsResponds($domain) && ! $this->httpsResponds('www.'.$domain)) {
            throw new RuntimeException('HTTPS is not live yet for '.$domain);
        }
    }

    public function assertVerificationFileLive(string $domain, string $filename): void
    {
        $this->assertPublicDnsResolves($domain);

        $filename = ltrim($filename, '/');
        $url = 'https://'.$domain.'/'.$filename;
        try {
            $response = Http::timeout(12)
                ->withOptions(['verify' => true, 'allow_redirects' => true])
                ->get($url);
        } catch (\Throwable $e) {
            throw new RuntimeException('Cannot fetch verification file: '.$e->getMessage());
        }

        if ($response->status() < 200 || $response->status() >= 400) {
            throw new RuntimeException('Verification file HTTP '.$response->status().' at '.$url);
        }

        $body = (string) $response->body();
        if (! str_contains($body, 'google-site-verification')) {
            throw new RuntimeException('Verification file does not look like a GSC HTML token: '.$url);
        }
    }

    /**
     * Google itself resolves public DNS — if the panel can't, GSC verify will fail too.
     */
    private function assertPublicDnsResolves(string $domain): void
    {
        $domain = strtolower(rtrim(trim($domain), '.'));
        if ($domain === '') {
            throw new RuntimeException('Empty domain.');
        }

        $ips = $this->lookupARecords($domain);
        if ($ips !== []) {
            return;
        }

        $ns = $this->lookupNsRecords($domain);
        if ($ns === []) {
            throw new RuntimeException(
                "Домен {$domain} не резолвиться в публічному DNS (NXDOMAIN). ".
                'Перевір NS у Dynadot → Cloudflare (brianna/weston) і зачекай propagation, потім натисни GSC знову.',
            );
        }

        throw new RuntimeException(
            "Домен {$domain} має NS (".implode(', ', $ns).'), але A-запис ще не видно публічно. Зачекай DNS і спробуй GSC знову.',
        );
    }

    /**
     * @return list<string>
     */
    private function lookupARecords(string $domain): array
    {
        $records = @dns_get_record($domain, DNS_A);
        if (! is_array($records)) {
            return [];
        }

        $ips = [];
        foreach ($records as $record) {
            $ip = trim((string) ($record['ip'] ?? ''));
            if ($ip !== '' && filter_var($ip, FILTER_VALIDATE_IP)) {
                $ips[] = $ip;
            }
        }

        return array_values(array_unique($ips));
    }

    /**
     * @return list<string>
     */
    private function lookupNsRecords(string $domain): array
    {
        $records = @dns_get_record($domain, DNS_NS);
        if (! is_array($records)) {
            return [];
        }

        $out = [];
        foreach ($records as $record) {
            $ns = strtolower(rtrim(trim((string) ($record['target'] ?? '')), '.'));
            if ($ns !== '') {
                $out[] = $ns;
            }
        }

        return array_values(array_unique($out));
    }

    private function httpsResponds(string $host): bool
    {
        try {
            $response = Http::timeout(10)
                ->withOptions(['verify' => true, 'allow_redirects' => true])
                ->get('https://'.$host.'/');

            return $response->status() >= 200 && $response->status() < 400;
        } catch (\Throwable) {
            return false;
        }
    }

    private function verifySiteFile(string $accessToken, string $siteUrl): bool
    {
        // Ask Google to verify ownership using the HTML file already on the site.
        $response = Http::timeout(30)
            ->withToken($accessToken)
            ->acceptJson()
            ->post('https://www.googleapis.com/siteVerification/v1/webResource?verificationMethod=FILE', [
                'site' => [
                    'type' => 'SITE',
                    'identifier' => $siteUrl,
                ],
            ]);

        if ($response->successful()) {
            return true;
        }

        $body = (string) $response->body();
        // Already verified for this Google account.
        if ($response->status() === 400 && (
            str_contains($body, 'already verified')
            || str_contains($body, 'alreadyVerified')
            || str_contains($body, 'Site is already verified')
        )) {
            return true;
        }

        // Some accounts return 409 / ownership exists.
        if (in_array($response->status(), [409, 403], true) && str_contains(strtolower($body), 'already')) {
            return true;
        }

        Log::warning('GSC site verification failed', [
            'site' => $siteUrl,
            'status' => $response->status(),
            'body' => $body,
        ]);

        $this->throwIfRateLimited($response->status(), $body, 'siteVerification');

        throw new RuntimeException('Site Verification FILE failed (HTTP '.$response->status().'): '.$this->shortError($body));
    }

    private function addSite(string $accessToken, string $siteUrl): bool
    {
        $encoded = rawurlencode($siteUrl);
        // sites.add must have an empty body — Laravel Http::put($url) defaults to JSON [].
        $response = $this->putWithoutBody(
            $accessToken,
            'https://www.googleapis.com/webmasters/v3/sites/'.$encoded,
        );

        if ($response->successful() || $response->status() === 204) {
            return true;
        }

        $body = (string) $response->body();
        if ($response->status() === 409 || str_contains(strtolower($body), 'already')) {
            return true;
        }

        $this->throwIfRateLimited($response->status(), $body, 'sites.add');

        // Property may already exist in the account.
        if ($response->status() === 403 && str_contains(strtolower($body), 'permission')) {
            // Try GET — if we can list it, treat as added.
            $get = Http::timeout(20)
                ->withToken($accessToken)
                ->acceptJson()
                ->get('https://www.googleapis.com/webmasters/v3/sites/'.$encoded);
            if ($get->successful()) {
                return true;
            }
        }

        throw new RuntimeException('Search Console sites.add failed (HTTP '.$response->status().'): '.$this->shortError($body));
    }

    private function submitSitemap(string $accessToken, string $siteUrl, string $sitemapUrl): bool
    {
        $encodedSite = rawurlencode($siteUrl);
        $encodedFeed = rawurlencode($sitemapUrl);
        $url = 'https://www.googleapis.com/webmasters/v3/sites/'.$encodedSite.'/sitemaps/'.$encodedFeed;

        $response = $this->putWithoutBody($accessToken, $url);
        if ($response->successful() || $response->status() === 204) {
            return true;
        }

        $body = (string) $response->body();
        if ($response->status() === 409 || str_contains(strtolower($body), 'already')) {
            return true;
        }

        // Transient ownership race: property exists but sitemap API still returns 403.
        // Re-add + re-verify, brief wait, then one more submit.
        if ($response->status() === 403 && str_contains(strtolower($body), 'permission')) {
            Log::warning('GSC sitemap 403 — retrying after re-add/verify', [
                'site' => $siteUrl,
                'body' => $body,
            ]);
            $this->addSite($accessToken, $siteUrl);
            $this->verifySiteFile($accessToken, $siteUrl);
            usleep(750_000);

            $retry = $this->putWithoutBody($accessToken, $url);
            if ($retry->successful() || $retry->status() === 204) {
                return true;
            }

            $body = (string) $retry->body();
            if ($retry->status() === 409 || str_contains(strtolower($body), 'already')) {
                return true;
            }

            $this->throwIfRateLimited($retry->status(), $body, 'sitemaps.submit');

            throw new RuntimeException('Search Console sitemaps.submit failed (HTTP '.$retry->status().'): '.$this->shortError($body));
        }

        $this->throwIfRateLimited($response->status(), $body, 'sitemaps.submit');

        throw new RuntimeException('Search Console sitemaps.submit failed (HTTP '.$response->status().'): '.$this->shortError($body));
    }

    /**
     * Best-effort: missing property/sitemap is fine during archive.
     */
    private function deleteSitemap(string $accessToken, string $siteUrl, string $sitemapUrl): void
    {
        $encodedSite = rawurlencode($siteUrl);
        $encodedFeed = rawurlencode($sitemapUrl);
        $url = 'https://www.googleapis.com/webmasters/v3/sites/'.$encodedSite.'/sitemaps/'.$encodedFeed;

        try {
            $response = Http::timeout(30)
                ->withToken($accessToken)
                ->acceptJson()
                ->delete($url);

            if ($response->successful() || in_array($response->status(), [204, 404], true)) {
                return;
            }

            Log::info('GSC sitemap delete skipped', [
                'site' => $siteUrl,
                'sitemap' => $sitemapUrl,
                'status' => $response->status(),
                'body' => substr((string) $response->body(), 0, 240),
            ]);
        } catch (\Throwable $e) {
            Log::info('GSC sitemap delete skipped', [
                'site' => $siteUrl,
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * @return 'deleted'|'already_gone'
     */
    private function deleteSite(string $accessToken, string $siteUrl): string
    {
        $encoded = rawurlencode($siteUrl);
        $response = Http::timeout(30)
            ->withToken($accessToken)
            ->acceptJson()
            ->delete('https://www.googleapis.com/webmasters/v3/sites/'.$encoded);

        if ($response->successful() || $response->status() === 204) {
            return 'deleted';
        }

        if ($response->status() === 404) {
            return 'already_gone';
        }

        $body = (string) $response->body();
        if (str_contains(strtolower($body), 'not found') || str_contains(strtolower($body), 'does not exist')) {
            return 'already_gone';
        }

        throw new RuntimeException('Search Console sites.delete failed (HTTP '.$response->status().'): '.$this->shortError($body));
    }

    /**
     * Google webmasters PUT endpoints (sites.add / sitemaps.submit) reject any JSON body.
     */
    private function putWithoutBody(string $accessToken, string $url): \Illuminate\Http\Client\Response
    {
        return Http::timeout(30)
            ->withToken($accessToken)
            ->withHeaders([
                'Accept' => 'application/json',
                'Content-Length' => '0',
            ])
            ->withBody('', 'application/octet-stream')
            ->send('PUT', $url);
    }

    private function throwIfRateLimited(int $status, string $body, string $action): void
    {
        if ($status === 429 || str_contains(strtolower($body), 'quota exceeded')) {
            throw new RuntimeException('Search Console '.$action.' rate-limited (HTTP 429)');
        }
    }

    private function shortError(string $body): string
    {
        $body = trim(preg_replace('/\s+/', ' ', $body) ?? $body);

        return substr($body, 0, 240);
    }
}
