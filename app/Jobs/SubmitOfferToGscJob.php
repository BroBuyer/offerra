<?php

namespace App\Jobs;

use App\Models\Offer;
use App\Services\OfferGscSubmitter;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;

/**
 * Kept for optional retries; primary flow is the manual GSC button (sync).
 */
class SubmitOfferToGscJob implements ShouldBeUnique, ShouldQueue
{
    use Queueable;

    public int $timeout = 120;

    public int $tries = 3;

    public int $uniqueFor = 1800;

    /** @var list<int> */
    public array $backoff = [60, 120, 300];

    public function __construct(public int $offerId)
    {
        $this->onQueue('deploy');
    }

    public function uniqueId(): string
    {
        return 'gsc-submit:'.$this->offerId;
    }

    public function handle(OfferGscSubmitter $submitter): void
    {
        $offer = Offer::query()->with('user.settings')->find($this->offerId);
        if (! $offer) {
            return;
        }

        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        if (($meta['gsc']['status'] ?? null) === 'submitted') {
            return;
        }

        try {
            $submitter->submit($offer);
        } catch (InvalidArgumentException $e) {
            Log::info('GSC job skipped', [
                'offer' => $offer->id,
                'reason' => $e->getMessage(),
            ]);
        } catch (\Throwable $e) {
            Log::warning('GSC job failed', [
                'offer' => $offer->id,
                'domain' => $offer->domain,
                'error' => $e->getMessage(),
            ]);

            $message = $e->getMessage();
            $notReady = str_contains($message, 'HTTPS is not live')
                || str_contains($message, 'Cannot fetch verification file')
                || str_contains($message, 'Verification file HTTP');

            if ($notReady && $this->attempts() < $this->tries) {
                $delay = $this->backoff[min(max($this->attempts() - 1, 0), count($this->backoff) - 1)] ?? 120;
                $this->release($delay);
            }
        }
    }
}
