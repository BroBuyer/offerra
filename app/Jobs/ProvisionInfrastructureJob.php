<?php

namespace App\Jobs;

use App\Models\Offer;
use App\Services\DeployService;
use App\Services\InfrastructureProvisioner;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class ProvisionInfrastructureJob
{
    use Dispatchable;

    public function __construct(public int $offerId) {}

    public function handle(InfrastructureProvisioner $provisioner, DeployService $deploy): void
    {
        $offer = Offer::query()->with('user.settings')->find($this->offerId);

        if (! $offer?->user || ! $offer->provision_infrastructure) {
            return;
        }

        try {
            $provisioner->provision($offer);
            $offer->refresh();

            if ($deploy->enqueueDeployAfterInfra($offer->fresh())) {
                Log::info('Auto-deploy queued after infra', [
                    'offer' => $this->offerId,
                    'domain' => $offer->domain,
                ]);
            }

            if ($offer->dnsStatus() === 'pending') {
                RecheckInfrastructureDnsJob::dispatch($offer->id);
            }
        } catch (\Throwable $e) {
            Log::error('Infrastructure provisioning failed', [
                'offer' => $this->offerId,
                'domain' => $offer->domain,
                'error' => $e->getMessage(),
            ]);
        }
    }
}
