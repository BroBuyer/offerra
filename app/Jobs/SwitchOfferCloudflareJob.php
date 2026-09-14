<?php

namespace App\Jobs;

use App\Models\Offer;
use App\Services\InfrastructureProvisioner;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class SwitchOfferCloudflareJob implements ShouldBeUnique, ShouldQueue
{
    use Queueable;

    public int $timeout = 300;

    public int $tries = 1;

    public int $uniqueFor = 600;

    public function __construct(
        public int $offerId,
        public string $target,
    ) {
        $this->onQueue('deploy');
    }

    public function uniqueId(): string
    {
        return $this->offerId.':cf:'.$this->target;
    }

    public function handle(InfrastructureProvisioner $provisioner): void
    {
        $offer = Offer::query()->with('user.settings')->find($this->offerId);

        if (! $offer?->user) {
            return;
        }

        if (in_array($offer->status, ['archived', 'archiving'], true)) {
            return;
        }

        $target = $this->target === 'backup' ? 'backup' : 'primary';

        try {
            $provisioner->switchCloudflareAccount($offer, $target);
            $offer->refresh();

            if (($offer->infra_meta['dns'] ?? '') === 'pending') {
                $nsPending = ($offer->infra_meta['dynadot_ns'] ?? '') === 'pending';
                RecheckInfrastructureDnsJob::dispatch($offer->id)
                    ->delay($nsPending ? now()->addMinutes(2) : now()->addSeconds(15));
            }
        } catch (\Throwable $e) {
            Log::error('Cloudflare account switch failed', [
                'offer' => $this->offerId,
                'domain' => $offer->domain,
                'target' => $target,
                'error' => $e->getMessage(),
            ]);
        }
    }
}
