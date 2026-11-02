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

    public int $tries = 3;

    /** Cover 3 attempts + backoff without dropping the unique lock. */
    public int $uniqueFor = 3600;

    public function __construct(public int $offerId)
    {
        $this->onQueue('deploy');
    }

    public function uniqueId(): string
    {
        return (string) $this->offerId;
    }

    /**
     * @return list<int>
     */
    public function backoff(): array
    {
        return [20, 90];
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

            throw $e;
        }
    }
}
