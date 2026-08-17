<?php

namespace App\Jobs;

use App\Models\Offer;
use App\Services\DeployService;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class DeployOfferJob implements ShouldBeUnique, ShouldQueue
{
    use Queueable;

    public int $timeout = 600;

    public int $tries = 1;

    /** Prevent duplicate deploy jobs for the same offer while queued/running. */
    public int $uniqueFor = 900;

    public function __construct(public int $offerId)
    {
        $this->onQueue('deploy');
    }

    public function uniqueId(): string
    {
        return (string) $this->offerId;
    }

    public function handle(DeployService $deploy): void
    {
        $offer = Offer::query()->with('user.settings')->find($this->offerId);

        if (! $offer?->user) {
            return;
        }

        try {
            $deploy->deploy($offer->user, $offer);
        } catch (\Throwable $e) {
            Log::error('Background deploy failed', [
                'offer' => $this->offerId,
                'domain' => $offer->domain,
                'error' => $e->getMessage(),
            ]);
        }
    }
}
