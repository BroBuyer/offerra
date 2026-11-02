<?php

namespace App\Services;

use App\Models\LanderClick;
use App\Models\Offer;
use App\Models\UserSetting;
use Illuminate\Support\Facades\Log;

class OfferClickIdService
{
    public function __construct(
        private readonly OfferGeoClickService $geoClicks,
    ) {}

    public function registerUrl(UserSetting $settings): string
    {
        $token = $this->geoClicks->ensureToken($settings);
        $base = rtrim((string) config('app.url'), '/');

        return "{$base}/api/v1/click/{$token}";
    }

    /**
     * @param  array<string, mixed>  $input
     * @return array{ok: bool, ignored?: bool, reason?: string}
     */
    public function register(string $token, array $input): array
    {
        $token = trim($token);

        if ($token === '' || strlen($token) < 16) {
            return ['ok' => false, 'reason' => 'invalid_token'];
        }

        $settings = $this->geoClicks->settingsByToken($token);

        if (! $settings) {
            return ['ok' => false, 'reason' => 'unknown_token'];
        }

        $clickId = $this->normalizeClickId((string) ($input['cid'] ?? $input['subid'] ?? $input['click_id'] ?? ''));
        if ($clickId === '') {
            return ['ok' => true, 'ignored' => true, 'reason' => 'invalid_click'];
        }

        $domain = $this->normalizeDomain((string) ($input['d'] ?? $input['domain'] ?? ''));
        $offerId = null;

        if ($domain !== '') {
            $offer = Offer::query()
                ->where('user_id', $settings->user_id)
                ->whereRaw('LOWER(domain) = ?', [$domain])
                ->whereNotIn('status', ['archived', 'archiving', 'purging', 'teardown_failed'])
                ->first();

            if ($offer) {
                $offerId = (int) $offer->id;
            }
        }

        try {
            $click = LanderClick::query()->firstOrNew([
                'user_id' => $settings->user_id,
                'click_id' => $clickId,
            ]);
            $click->domain = $domain !== '' ? $domain : $click->domain;
            if ($offerId) {
                $click->offer_id = $offerId;
            }
            $click->save();
        } catch (\Throwable $e) {
            Log::warning('OfferClickId: register failed', [
                'user_id' => $settings->user_id,
                'error' => $e->getMessage(),
            ]);

            return ['ok' => true, 'ignored' => true, 'reason' => 'save_error'];
        }

        return ['ok' => true];
    }

    public function findForUser(int $userId, string $clickId): ?LanderClick
    {
        $clickId = $this->normalizeClickId($clickId);
        if ($clickId === '') {
            return null;
        }

        return LanderClick::query()
            ->where('user_id', $userId)
            ->where('click_id', $clickId)
            ->first();
    }

    public function pruneOlderThanDays(int $days = 90): int
    {
        $days = max(1, $days);

        return LanderClick::query()
            ->where('created_at', '<', now()->subDays($days))
            ->delete();
    }

    public function normalizeClickId(string $id): string
    {
        $id = trim($id);
        if ($id === '' || strtolower($id) === 'no_subid') {
            return '';
        }
        if (! preg_match('/^[a-zA-Z0-9._-]{8,64}$/', $id)) {
            return '';
        }

        return $id;
    }

    private function normalizeDomain(string $domain): string
    {
        $domain = strtolower(trim($domain));
        $domain = preg_replace('#^https?://#', '', $domain) ?? $domain;
        $domain = preg_replace('#^www\.#', '', $domain) ?? $domain;

        return rtrim(explode('/', $domain)[0], '.');
    }
}
