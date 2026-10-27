<?php

namespace App\Jobs;

use App\Models\Offer;
use App\Services\DeployService;
use App\Services\OfferGscSubmitter;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class PushGscVerificationFileJob implements ShouldQueue
{
    use Queueable;

    public int $timeout = 120;

    public int $tries = 3;

    public function __construct(public int $offerId) {}

    public function handle(DeployService $deploy, OfferGscSubmitter $submitter): void
    {
        $offer = Offer::query()->with('user.settings')->find($this->offerId);

        if (! $offer || ! $offer->user) {
            return;
        }

        if (in_array($offer->status, ['archived', 'archiving', 'purging', 'teardown_failed'], true)) {
            return;
        }

        try {
            $deploy->pushVerificationFile($offer->user, $offer);
        } catch (\Throwable $e) {
            Log::warning('PushGscVerificationFileJob failed', [
                'offer_id' => $this->offerId,
                'domain' => $offer->domain,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }

        $fresh = $offer->fresh();
        if ($fresh && $submitter->shouldQueue($fresh)) {
            $submitter->queue($fresh, 5);
        }
    }
}
