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

    public int $timeout = 180;

    public int $tries = 1;

    /**
     * One queued recheck per offer at a time — a perpetually-pending domain must
     * never accumulate duplicate jobs (this is what flooded the queue to 8k+).
     * Keep this just above $timeout: a killed worker holds the unique lock until
     * uniqueFor, and 15 minutes of silence looks like DNS is stuck.
     */
    public int $uniqueFor = 200;

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
