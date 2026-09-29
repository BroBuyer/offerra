<?php

namespace App\Jobs;

use App\Models\Offer;
use App\Services\OfferGoogleIndexInspector;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class InspectOfferGoogleIndexJob implements ShouldBeUnique, ShouldQueue
{
    use Queueable;

    public int $timeout = 60;

    public int $tries = 2;

    public int $uniqueFor = 93600;

    public function __construct(public int $offerId)
    {
        $this->onQueue('deploy');
    }

    public function uniqueId(): string
    {
        return 'gsc-inspect:'.$this->offerId;
    }

    public function handle(OfferGoogleIndexInspector $inspector): void
    {
        $offer = Offer::query()->with('user.settings')->find($this->offerId);
        if (! $offer) {
            return;
        }

        $inspector->inspect($offer);
    }
}
