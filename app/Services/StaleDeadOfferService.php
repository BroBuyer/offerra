<?php

namespace App\Services;

use App\Models\Offer;
use App\Models\User;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class StaleDeadOfferService
{
    public const CACHE_LAST_SCAN_AT = 'stale_dead.last_scan_at';

    public const DEAD_AFTER_DAYS = 30;

    public function __construct(
        private readonly OfferTeardownService $teardown,
    ) {}

    public function cutoff(int $days = self::DEAD_AFTER_DAYS): CarbonInterface
    {
        return now()->subDays(max(1, $days));
    }

    /**
     * Live offers submitted to GSC more than N days ago with 0 leads and 0 deposits.
     * Clicks are ignored — traffic without a lead/dep is still a dead offer.
     */
    public function baseCandidatesQuery(int $days = self::DEAD_AFTER_DAYS): Builder
    {
        $cutoff = $this->cutoff($days);

        return Offer::query()
            ->whereNotIn('offers.status', ['archived', 'archiving', 'teardown_failed'])
            ->whereNotNull('offers.indexed_at')
            ->where('offers.indexed_at', '<', $cutoff)
            ->leftJoin('offer_stats', 'offer_stats.offer_id', '=', 'offers.id')
            ->where(function ($q) {
                $q->whereNull('offer_stats.leads_count')
                    ->orWhere('offer_stats.leads_count', '<=', 0);
            })
            ->where(function ($q) {
                $q->whereNull('offer_stats.deposits_count')
                    ->orWhere('offer_stats.deposits_count', '<=', 0);
            })
            ->select('offers.*');
    }

    /**
     * Scope: own offers, or all if admin (management rule — not canSeeAllOffers).
     */
    public function candidatesQuery(User $user, int $days = self::DEAD_AFTER_DAYS): Builder
    {
        $query = $this->baseCandidatesQuery($days);

        if (! $user->isAdmin()) {
            $query->where('offers.user_id', $user->id);
        }

        return $query;
    }

    /**
     * @return array{count: int, last_scan_at: string|null}
     */
    public function hintFor(User $user, int $days = self::DEAD_AFTER_DAYS): array
    {
        $lastScan = Cache::get(self::CACHE_LAST_SCAN_AT);

        return [
            'count' => (int) $this->candidatesQuery($user, $days)->count('offers.id'),
            'last_scan_at' => is_string($lastScan) && $lastScan !== '' ? $lastScan : null,
        ];
    }

    /**
     * Recompute totals and stamp last_scan_at (cron). Does not enqueue archive.
     *
     * @return array{total: int, by_user: array<int, int>}
     */
    public function scan(int $days = self::DEAD_AFTER_DAYS): array
    {
        $rows = $this->baseCandidatesQuery($days)
            ->groupBy('offers.user_id')
            ->selectRaw('offers.user_id, count(*) as cnt')
            ->pluck('cnt', 'user_id')
            ->all();

        $byUser = [];
        $total = 0;
        foreach ($rows as $userId => $cnt) {
            $byUser[(int) $userId] = (int) $cnt;
            $total += (int) $cnt;
        }

        $scannedAt = now()->toIso8601String();
        Cache::forever(self::CACHE_LAST_SCAN_AT, $scannedAt);

        Log::info('stale_dead.scan', [
            'total' => $total,
            'by_user' => $byUser,
            'scanned_at' => $scannedAt,
            'days' => $days,
        ]);

        return [
            'total' => $total,
            'by_user' => $byUser,
        ];
    }

    public function archiveAllFor(User $user, int $days = self::DEAD_AFTER_DAYS): int
    {
        $ids = $this->candidatesQuery($user, $days)
            ->orderBy('offers.id')
            ->pluck('offers.id')
            ->all();

        $enqueued = 0;

        foreach ($ids as $id) {
            $offer = Offer::query()->find($id);
            if (! $offer) {
                continue;
            }

            if ($offer->user_id !== $user->id && ! $user->isAdmin()) {
                continue;
            }

            try {
                $this->teardown->enqueueArchive($offer, $user);
                $enqueued++;
            } catch (\Throwable $e) {
                $msg = $e->getMessage();
                if (str_contains($msg, 'вже архівується') || str_contains($msg, 'в архіві')) {
                    continue;
                }
                Log::warning('stale_dead.archive_skip', [
                    'offer_id' => $offer->id,
                    'domain' => $offer->domain,
                    'error' => $msg,
                ]);
            }
        }

        return $enqueued;
    }
}
