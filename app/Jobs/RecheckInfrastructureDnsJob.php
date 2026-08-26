<?php

namespace App\Jobs;

use App\Models\Offer;
use App\Services\InfrastructureProvisioner;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class RecheckInfrastructureDnsJob implements ShouldBeUnique, ShouldQueue
{
    use Queueable;

    public int $timeout = 120;

    public int $tries = 1;

    /**
     * One queued recheck per offer at a time — a perpetually-pending domain must
     * never accumulate duplicate jobs (this is what flooded the queue to 8k+).
     * The lock self-releases after this window even if a worker dies mid-run.
     */
    public int $uniqueFor = 900;

    public function __construct(public int $offerId) {}

    public function uniqueId(): string
    {
        return (string) $this->offerId;
    }

    public function handle(InfrastructureProvisioner $provisioner): void
    {
        $offer = Offer::query()->with('user.settings')->find($this->offerId);

        if (! $offer?->user || ! $offer->provision_infrastructure) {
            return;
        }

        try {
            $provisioner->recheckDns($offer);
        } catch (\Throwable $e) {
            Log::error('Infrastructure DNS recheck failed', [
                'offer' => $this->offerId,
                'domain' => $offer->domain,
                'error' => $e->getMessage(),
            ]);
        }
    }
}
