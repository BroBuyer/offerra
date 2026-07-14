<?php

namespace App\Jobs;

use App\Models\Offer;
use App\Services\InfrastructureProvisioner;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class ProvisionInfrastructureJob
{
    use Dispatchable;

    public function __construct(public int $offerId) {}

    public function handle(InfrastructureProvisioner $provisioner): void
    {
        $offer = Offer::query()->with('user.settings')->find($this->offerId);

        if (! $offer?->user || ! $offer->provision_infrastructure) {
            return;
        }

        try {
            $provisioner->provision($offer);
        } catch (\Throwable $e) {
            Log::error('Infrastructure provisioning failed', [
                'offer' => $this->offerId,
                'domain' => $offer->domain,
                'error' => $e->getMessage(),
            ]);
        }
    }
}
