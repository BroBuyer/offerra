<?php

namespace App\Jobs;

use App\Models\Offer;
use App\Services\DeployService;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class DeployOfferJob
{
    use Dispatchable;

    public function __construct(public int $offerId) {}

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
