<?php

namespace App\Services;

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
     * @return array{site_url: string, sitemap_url: string, verified: bool, added: bool, sitemap_submitted: bool}
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

        $accessToken = $this->oauth->accessTokenFor($settings);

        $this->assertVerificationFileLive($domain, $verificationFile);
        $this->assertHttpsLive($domain);

        $verified = $this->verifySiteFile($accessToken, $siteUrl);
        $added = $this->addSite($accessToken, $siteUrl);
        $sitemapSubmitted = $this->submitSitemap($accessToken, $siteUrl, $sitemapUrl);

        return [
            'site_url' => $siteUrl,
            'sitemap_url' => $sitemapUrl,
            'verified' => $verified,
            'added' => $added,
            'sitemap_submitted' => $sitemapSubmitted,
        ];
    }

    public function assertHttpsLive(string $domain): void
    {
        if (! $this->httpsResponds($domain) && ! $this->httpsResponds('www.'.$domain)) {
            throw new RuntimeException('HTTPS is not live yet for '.$domain);
        }
    }

    public function assertVerificationFileLive(string $domain, string $filename): void
    {
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
        $response = $this->putWithoutBody(
            $accessToken,
            'https://www.googleapis.com/webmasters/v3/sites/'.$encodedSite.'/sitemaps/'.$encodedFeed,
        );

        if ($response->successful() || $response->status() === 204) {
            return true;
        }

        $body = (string) $response->body();
        if ($response->status() === 409 || str_contains(strtolower($body), 'already')) {
            return true;
        }

        throw new RuntimeException('Search Console sitemaps.submit failed (HTTP '.$response->status().'): '.$this->shortError($body));
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

    private function shortError(string $body): string
    {
        $body = trim(preg_replace('/\s+/', ' ', $body) ?? $body);

        return substr($body, 0, 240);
    }
}
