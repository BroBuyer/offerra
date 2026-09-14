<?php

namespace App\Jobs;

use App\Models\Offer;
use App\Services\GoogleSearchConsoleClient;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class SubmitOfferToGscJob implements ShouldBeUnique, ShouldQueue
{
    use Queueable;

    public int $timeout = 120;

    public int $tries = 8;

    public int $uniqueFor = 1800;

    /** @var list<int> */
    public array $backoff = [60, 120, 180, 300, 600, 900, 1200];

    public function __construct(public int $offerId)
    {
        $this->onQueue('deploy');
    }

    public function uniqueId(): string
    {
        return 'gsc-submit:'.$this->offerId;
    }

    public function handle(GoogleSearchConsoleClient $gsc): void
    {
        $offer = Offer::query()->with('user.settings')->find($this->offerId);
        if (! $offer?->user?->settings) {
            return;
        }

        if (in_array($offer->status, ['archived', 'archiving'], true)) {
            return;
        }

        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        if (($meta['gsc']['status'] ?? null) === 'submitted') {
            return;
        }

        if (($meta['dns'] ?? null) !== 'done') {
            $this->release(120);

            return;
        }

        if ($offer->status !== 'deployed') {
            $this->release(90);

            return;
        }

        $settings = $offer->user->settings;
        if (! $settings->hasGoogleOAuth() || ! filled($settings->gsc_verification_filename)) {
            return;
        }

        try {
            $result = $gsc->submitOffer($offer, $settings);
            $fresh = $offer->fresh();
            $meta = is_array($fresh?->infra_meta) ? $fresh->infra_meta : $meta;
            $meta['gsc'] = [
                'status' => 'submitted',
                'site_url' => $result['site_url'],
                'sitemap_url' => $result['sitemap_url'],
                'submitted_at' => now()->toIso8601String(),
            ];
            unset($meta['gsc_error']);

            $offer->update([
                'submitted_for_indexing' => true,
                'indexed_at' => $offer->indexed_at ?? now(),
                'infra_meta' => $meta,
            ]);
        } catch (\Throwable $e) {
            $message = $e->getMessage();
            $notReady = str_contains($message, 'HTTPS is not live')
                || str_contains($message, 'Cannot fetch verification file')
                || str_contains($message, 'Verification file HTTP');

            $meta['gsc_error'] = substr($message, 0, 400);
            $meta['gsc'] = [
                'status' => $notReady ? 'waiting' : 'failed',
                'updated_at' => now()->toIso8601String(),
            ];
            $offer->update(['infra_meta' => $meta]);

            Log::warning('GSC submit failed', [
                'offer' => $offer->id,
                'domain' => $offer->domain,
                'error' => $message,
            ]);

            if ($notReady && $this->attempts() < $this->tries) {
                $delay = $this->backoff[min(max($this->attempts() - 1, 0), count($this->backoff) - 1)] ?? 120;
                $this->release($delay);

                return;
            }
        }
    }
}
