<?php

namespace App\Services;

use App\Models\Offer;
use App\Models\UserSetting;
use InvalidArgumentException;
use RuntimeException;

class OfferGscSubmitter
{
    public function __construct(
        private readonly GoogleSearchConsoleClient $gsc,
    ) {}

    public function canSubmit(Offer $offer): bool
    {
        if (! $offer->provision_infrastructure) {
            return false;
        }

        if (in_array($offer->status, ['archived', 'archiving', 'teardown_failed'], true)) {
            return false;
        }

        if ($offer->status !== 'deployed') {
            return false;
        }

        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        if (($meta['dns'] ?? null) !== 'done') {
            return false;
        }

        $settings = $this->ownerSettings($offer);
        if (! $settings) {
            return false;
        }

        return $settings->hasGoogleOAuth()
            && filled($settings->gsc_verification_filename)
            && filled(config('services.google.client_id'));
    }

    /**
     * Sync: verify site in Search Console, submit sitemap, tick indexing checkbox.
     *
     * @return array{site_url: string, sitemap_url: string}
     */
    public function submit(Offer $offer): array
    {
        if (! $this->canSubmit($offer)) {
            throw new InvalidArgumentException(
                'GSC недоступний: потрібні DNS=done, деплой, Google Connect і verification HTML у Settings власника офера.',
            );
        }

        $settings = $this->ownerSettings($offer);
        if (! $settings) {
            throw new InvalidArgumentException('Немає Settings у власника офера.');
        }

        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $meta['gsc'] = [
            'status' => 'waiting',
            'updated_at' => now()->toIso8601String(),
        ];
        unset($meta['gsc_error']);
        $offer->update(['infra_meta' => $meta]);

        try {
            $result = $this->gsc->submitOffer($offer, $settings);

            if (! ($result['added'] ?? false) || ! ($result['sitemap_submitted'] ?? false)) {
                throw new RuntimeException('Search Console або sitemap не підтверджені.');
            }

            $fresh = $offer->fresh() ?? $offer;
            $meta = is_array($fresh->infra_meta) ? $fresh->infra_meta : [];
            $meta['gsc'] = [
                'status' => 'submitted',
                'site_url' => $result['site_url'],
                'sitemap_url' => $result['sitemap_url'],
                'submitted_at' => now()->toIso8601String(),
            ];
            unset($meta['gsc_error']);

            $fresh->update([
                'submitted_for_indexing' => true,
                'indexed_at' => $fresh->indexed_at ?? now(),
                'infra_meta' => $meta,
            ]);

            return [
                'site_url' => $result['site_url'],
                'sitemap_url' => $result['sitemap_url'],
            ];
        } catch (\Throwable $e) {
            $message = $e->getMessage();
            $notReady = str_contains($message, 'HTTPS is not live')
                || str_contains($message, 'Cannot fetch verification file')
                || str_contains($message, 'Verification file HTTP');

            $fresh = $offer->fresh() ?? $offer;
            $meta = is_array($fresh->infra_meta) ? $fresh->infra_meta : [];
            $meta['gsc_error'] = substr($message, 0, 400);
            $meta['gsc'] = [
                'status' => $notReady ? 'waiting' : 'failed',
                'updated_at' => now()->toIso8601String(),
            ];
            $fresh->update(['infra_meta' => $meta]);

            throw $e instanceof InvalidArgumentException || $e instanceof RuntimeException
                ? $e
                : new RuntimeException($message, 0, $e);
        }
    }

    private function ownerSettings(Offer $offer): ?UserSetting
    {
        $offer->loadMissing('user.settings');
        $settings = $offer->user?->settings;

        return $settings instanceof UserSetting ? $settings : null;
    }
}
