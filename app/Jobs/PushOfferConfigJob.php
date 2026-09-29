<?php

namespace App\Jobs;

use App\Models\Offer;
use App\Services\DeployService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class PushOfferConfigJob implements ShouldQueue
{
    use Queueable;

    public int $timeout = 120;

    public int $tries = 2;

    public function __construct(public int $offerId) {}

    public function handle(DeployService $deploy): void
    {
        $offer = Offer::query()->with('user.settings')->find($this->offerId);

        if (! $offer || ! $offer->user) {
            return;
        }

        if (in_array($offer->status, ['archived', 'archiving', 'teardown_failed'], true)) {
            return;
        }

        try {
            $deploy->pushConfig($offer->user, $offer);
        } catch (\Throwable $e) {
            Log::warning('PushOfferConfigJob failed', [
                'offer_id' => $this->offerId,
                'domain' => $offer->domain,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }
}
