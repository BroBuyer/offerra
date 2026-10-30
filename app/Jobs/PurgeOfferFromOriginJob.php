<?php

namespace App\Jobs;

use App\Models\Offer;
use App\Services\OriginHostService;
use App\Services\OriginPool;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

/**
 * Drop lander files from an origin the offer is no longer bound to.
 * No-op if the offer was moved back (or never left) that host.
 */
class PurgeOfferFromOriginJob implements ShouldBeUnique, ShouldQueue
{
    use Queueable;

    public int $timeout = 120;

    public int $tries = 2;

    public int $uniqueFor = 3600;

    public function __construct(
        public int $offerId,
        public string $host,
    ) {
        $this->onQueue('deploy');
    }

    public function uniqueId(): string
    {
        return $this->offerId.':'.strtolower(trim($this->host));
    }

    public function handle(OriginPool $pool, OriginHostService $origin): void
    {
        $host = strtolower(trim($this->host));
        if ($host === '') {
            return;
        }

        $offer = Offer::query()->with('user.settings')->find($this->offerId);
        if (! $offer?->user?->settings) {
            return;
        }

        $current = strtolower(trim($pool->boundHost($offer)));
        if ($current === $host) {
            return;
        }

        $server = $pool->serverForHost($host);
        if (! $server?->hasSshCredentials()) {
            return;
        }

        try {
            $settings = $pool->applyTo($offer->user->settings, $server);
            $origin->deleteWebRoot($settings, (string) $offer->domain);
        } catch (\Throwable $e) {
            Log::warning('Origin file purge after move failed', [
                'offer' => $this->offerId,
                'domain' => $offer->domain,
                'host' => $host,
                'error' => $e->getMessage(),
            ]);
        }
    }
}
