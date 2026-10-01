<?php

namespace App\Jobs;

use App\Models\Offer;
use App\Services\OfferGscSubmitter;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use InvalidArgumentException;

/**
 * Auto GSC submit after DNS is done and the availability probe is green.
 */
class SubmitOfferToGscJob implements ShouldBeUnique, ShouldQueue
{
    use Queueable;

    public int $timeout = 120;

    public int $tries = 10;

    public int $uniqueFor = 3600;

    /** @var list<int> */
    public array $backoff = [70, 90, 120, 180, 240];

    private const GLOBAL_LIMIT = 6;

    private const GLOBAL_DECAY_SECONDS = 60;

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

        if (! RateLimiter::attempt('gsc-submit', self::GLOBAL_LIMIT, static fn () => true, self::GLOBAL_DECAY_SECONDS)) {
            $this->release(20 + random_int(0, 25));

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

            if (OfferGscSubmitter::isRetryableError($e->getMessage()) && $this->attempts() < $this->tries) {
                $delay = $this->backoff[min(max($this->attempts() - 1, 0), count($this->backoff) - 1)] ?? 120;
                $this->release($delay);
            }
        }
    }
}
