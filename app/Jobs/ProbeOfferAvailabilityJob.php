<?php

namespace App\Jobs;

use App\Models\Offer;
use App\Services\OfferAvailabilityProbe;
use App\Services\OfferGscSubmitter;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

/**
 * After DNS is ready: wait until HTTPS is live (availability dot), then auto-queue GSC.
 */
class ProbeOfferAvailabilityJob implements ShouldBeUnique, ShouldQueue
{
    use Queueable;

    public int $timeout = 90;

    public int $tries = 12;

    public int $uniqueFor = 3600;

    /** @var list<int> */
    public array $backoff = [20, 40, 60, 90, 120, 180, 300, 420, 600, 900, 1200];

    public function __construct(public int $offerId)
    {
        $this->onQueue('deploy');
    }

    public function uniqueId(): string
    {
        return 'offer-availability-probe:'.$this->offerId;
    }

    public function handle(OfferAvailabilityProbe $probe, OfferGscSubmitter $gsc): void
    {
        $offer = Offer::query()->with('user.settings')->find($this->offerId);
        if (! $offer) {
            return;
        }

        if (in_array($offer->status, ['archived', 'archiving', 'teardown_failed'], true)) {
            return;
        }

        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        if (($meta['dns'] ?? null) !== 'done') {
            return;
        }

        if ($offer->submitted_for_indexing || ($meta['gsc']['status'] ?? null) === 'submitted') {
            return;
        }

        if ($offer->status !== 'deployed') {
            $this->releaseLater();

            return;
        }

        $probe->checkAndUpdate($offer);
        $fresh = $offer->fresh() ?? $offer;

        if ($fresh->availability_status === 'ok') {
            $gsc->queue($fresh, 5);

            return;
        }

        Log::info('Offer still not live after DNS — will retry availability probe', [
            'offer' => $fresh->id,
            'domain' => $fresh->domain,
            'error' => $fresh->availability_error,
            'attempt' => $this->attempts(),
        ]);

        $this->releaseLater();
    }

    private function releaseLater(): void
    {
        if ($this->attempts() >= $this->tries) {
            return;
        }

        $delay = $this->backoff[min(max($this->attempts() - 1, 0), count($this->backoff) - 1)] ?? 120;
        $this->release($delay);
    }
}
