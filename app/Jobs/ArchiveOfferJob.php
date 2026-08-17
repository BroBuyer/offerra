<?php

namespace App\Jobs;

use App\Models\Offer;
use App\Services\OfferTeardownService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class ArchiveOfferJob implements ShouldQueue
{
    use Queueable;

    public int $timeout = 300;

    public int $tries = 1;

    public function __construct(public int $offerId) {}

    public function handle(OfferTeardownService $teardown): void
    {
        $offer = Offer::query()->with('user.settings')->find($this->offerId);

        if (! $offer || $offer->status !== 'archiving') {
            return;
        }

        try {
            $teardown->run($offer);
        } catch (\Throwable $e) {
            Log::error('Offer archive teardown failed', [
                'offer_id' => $this->offerId,
                'domain' => $offer->domain,
                'error' => $e->getMessage(),
            ]);

            $meta = is_array($offer->teardown_meta) ? $offer->teardown_meta : [];
            $meta['errors'] = array_merge($meta['errors'] ?? [], [$e->getMessage()]);
            $meta['finished_at'] = now()->toIso8601String();

            $offer->update([
                'status' => 'teardown_failed',
                'teardown_meta' => $meta,
            ]);
        }
    }
}
