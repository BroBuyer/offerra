<?php

namespace App\Jobs;

use App\Models\Offer;
use App\Services\InfrastructureProvisioner;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class RebindOfferDnsJob implements ShouldBeUnique, ShouldQueue
{
    use Queueable;

    public int $timeout = 90;

    public int $tries = 1;

    public int $uniqueFor = 300;

    public function __construct(
        public int $offerId,
        public string $ip,
    ) {
        $this->onQueue('deploy');
    }

    public function uniqueId(): string
    {
        return $this->offerId.':'.$this->ip;
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

        try {
            $provisioner->rebindARecord($offer, $this->ip);
        } catch (\Throwable $e) {
            Log::error('Bulk DNS rebind failed', [
                'offer' => $this->offerId,
                'domain' => $offer->domain,
                'ip' => $this->ip,
                'error' => $e->getMessage(),
            ]);

            $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
            $meta['dns_error'] = $e->getMessage();
            $offer->update(['infra_meta' => $meta]);
        }
    }
}
