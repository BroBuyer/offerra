<?php

namespace App\Services;

use App\Models\Offer;
use App\Models\UserSetting;
use App\Support\MarketOptions;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class OfferGeoClickService
{
    public function ensureToken(UserSetting $settings): string
    {
        $existing = trim((string) ($settings->geo_click_token ?? ''));

        if ($existing === '' || strlen($existing) < 16) {
            $token = bin2hex(random_bytes(16));
            $settings->forceFill(['geo_click_token' => $token])->save();

            return $token;
        }

        return $existing;
    }

    public function clickUrl(UserSetting $settings): string
    {
        $token = $this->ensureToken($settings);
        $base = rtrim((string) config('app.url'), '/');

        return "{$base}/api/v1/geo-click/{$token}";
    }

    /**
     * @param  array<string, mixed>  $input
     * @return array{ok: bool, counted?: bool, ignored?: bool, reason?: string}
     */
    public function handle(string $token, array $input, string $ip, string $userAgent): array
    {
        $token = trim($token);

        if ($token === '' || strlen($token) < 16) {
            return ['ok' => false, 'reason' => 'invalid_token'];
        }

        $settings = $this->resolveSettingsByToken($token);

        if (! $settings) {
            return ['ok' => false, 'reason' => 'unknown_token'];
        }

        if ($this->isBotUa($userAgent) && ! $this->isLanderBeacon($userAgent)) {
            return ['ok' => true, 'ignored' => true, 'reason' => 'bot'];
        }

        $domain = $this->normalizeDomain((string) ($input['d'] ?? $input['domain'] ?? ''));
        if ($domain === '') {
            return ['ok' => true, 'ignored' => true, 'reason' => 'missing_domain'];
        }

        $country = MarketOptions::sanitizePhoneCode((string) ($input['c'] ?? $input['country'] ?? ''));
        if ($country === '' || MarketOptions::isAutoPhone($country)) {
            return ['ok' => true, 'ignored' => true, 'reason' => 'missing_country'];
        }

        $visitorKey = preg_replace('/[^a-f0-9]/i', '', (string) ($input['v'] ?? $input['visitor'] ?? '')) ?? '';
        $visitorKey = strtolower(substr($visitorKey, 0, 64));
        if (strlen($visitorKey) < 16) {
            // Fallback: panel-visible IP (weaker, but better than open increment)
            $visitorKey = hash('sha256', $ip.'|'.Str::lower(Str::limit($userAgent, 120, '')));
        }

        $offer = Offer::query()
            ->where('user_id', $settings->user_id)
            ->where('domain', $domain)
            ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
            ->first();

        if (! $offer) {
            // Fallback: domain unique across live offers
            $offer = Offer::query()
                ->where('domain', $domain)
                ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
                ->first();
        }

        if (! $offer) {
            return ['ok' => true, 'ignored' => true, 'reason' => 'offer_not_found'];
        }

        if (! $this->countryAllowed($offer, $country)) {
            return ['ok' => true, 'ignored' => true, 'reason' => 'geo_mismatch'];
        }

        $day = now()->timezone('Europe/Kyiv')->format('Ymd');
        $cacheKey = "geo_click:{$offer->id}:{$visitorKey}:{$day}";

        if (! Cache::add($cacheKey, 1, now()->addDay())) {
            return ['ok' => true, 'ignored' => true, 'reason' => 'dedup'];
        }

        try {
            $stats = $offer->ensureStats();
            $stats->clicks_geo_count = (int) $stats->clicks_geo_count + 1;
            $stats->last_click_geo_at = now();
            $stats->save();
        } catch (\Throwable $e) {
            Cache::forget($cacheKey);
            Log::warning('OfferGeoClick: stats bump failed', [
                'offer_id' => $offer->id,
                'domain' => $domain,
                'error' => $e->getMessage(),
            ]);

            return ['ok' => true, 'ignored' => true, 'reason' => 'stats_error'];
        }

        return ['ok' => true, 'counted' => true];
    }

    public const LEGACY_CACHE_KEY = 'geo_click.legacy_tokens';

    /**
     * Remember a pre-migration lander token so beacons keep working until configs are pushed.
     */
    public function registerLegacyToken(string $token, int $userId): void
    {
        $token = strtolower(trim($token));
        if ($token === '' || strlen($token) < 16 || $userId <= 0) {
            return;
        }

        $map = Cache::get(self::LEGACY_CACHE_KEY, []);
        if (! is_array($map)) {
            $map = [];
        }
        $map[$token] = $userId;
        Cache::forever(self::LEGACY_CACHE_KEY, $map);
    }

    private function resolveSettingsByToken(string $token): ?UserSetting
    {
        $settings = UserSetting::query()
            ->where('geo_click_token', $token)
            ->first();

        if ($settings) {
            return $settings;
        }

        $map = Cache::get(self::LEGACY_CACHE_KEY, []);
        if (! is_array($map)) {
            return null;
        }

        $userId = (int) ($map[strtolower($token)] ?? 0);
        if ($userId <= 0) {
            return null;
        }

        return UserSetting::query()->where('user_id', $userId)->first();
    }

    private function countryAllowed(Offer $offer, string $country): bool
    {
        $allowed = $offer->phoneCountriesList();
        $allowed = array_values(array_filter(array_map(
            static fn (string $code) => MarketOptions::sanitizePhoneCode($code),
            $allowed,
        )));

        if ($allowed === []) {
            $geo = MarketOptions::sanitizePhoneCode((string) $offer->geo);

            return $geo !== '' && $geo === $country;
        }

        return in_array($country, $allowed, true);
    }

    private function normalizeDomain(string $domain): string
    {
        $domain = strtolower(trim($domain));
        $domain = preg_replace('#^https?://#', '', $domain) ?? $domain;
        $domain = explode('/', $domain)[0] ?? $domain;
        $domain = preg_replace('/^www\./', '', $domain) ?? $domain;

        return rtrim($domain, '.');
    }

    private function isLanderBeacon(string $ua): bool
    {
        return str_contains($ua, 'OfferraGeoClick/');
    }

    private function isBotUa(string $ua): bool
    {
        $ua = trim($ua);
        if ($ua === '') {
            return true;
        }

        return (bool) preg_match(
            '/bot|crawl|spider|slurp|curl|wget|python-requests|httpclient|scrapy|headless|phantom|selenium|pingdom|uptimerobot|statuscake|monitor/i',
            $ua,
        );
    }
}
