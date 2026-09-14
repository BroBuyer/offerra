<?php

namespace App\Services;

use App\Jobs\SubmitOfferToGscJob;
use App\Models\Offer;
use App\Models\UserSetting;

class OfferGscSubmitter
{
    public function shouldQueue(Offer $offer): bool
    {
        if (! $offer->provision_infrastructure) {
            return false;
        }

        if (in_array($offer->status, ['archived', 'archiving', 'teardown_failed'], true)) {
            return false;
        }

        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        if (($meta['dns'] ?? null) !== 'done') {
            return false;
        }

        if (($meta['gsc']['status'] ?? null) === 'submitted') {
            return false;
        }

        $offer->loadMissing('user.settings');
        $settings = $offer->user?->settings;
        if (! $settings instanceof UserSetting) {
            return false;
        }

        return $settings->hasGoogleOAuth()
            && filled($settings->gsc_verification_filename)
            && filled(config('services.google.client_id'));
    }

    public function queue(Offer $offer, int $delaySeconds = 0): void
    {
        if (! $this->shouldQueue($offer)) {
            return;
        }

        $pending = SubmitOfferToGscJob::dispatch($offer->id)->onQueue('deploy');
        if ($delaySeconds > 0) {
            $pending->delay(now()->addSeconds($delaySeconds));
        }
    }
}