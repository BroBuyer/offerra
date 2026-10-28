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

    /** Last GSC submit of the brand, and last lead on any live sibling. */
    public const DEAD_AFTER_DAYS = 21;

    /** @var list<string> */
    private const INACTIVE_STATUSES = ['archived', 'archiving', 'purging', 'teardown_failed'];

    public function __construct(
        private readonly OfferTeardownService $teardown,
    ) {}

    public function cutoff(int $days = self::DEAD_AFTER_DAYS): CarbonInterface
    {
        return now()->subDays(max(1, $days));
    }

    /**
     * Live offers of a brand whose newest GSC submit is older than N days and
     * whose newest lead on any live sibling is also older than N days (or never).
     * Adding a new domain resets the GSC shield for the whole brand. Deposits
     * and clicks do not protect; archived siblings do not.
     */
    public function baseCandidatesQuery(int $days = self::DEAD_AFTER_DAYS): Builder
    {
        $cutoff = $this->cutoff($days);

        return Offer::query()
            ->whereNotIn('offers.status', self::INACTIVE_STATUSES)
            ->whereExists(function ($q) use ($cutoff): void {
                $q->selectRaw('1')
                    ->from('offers as brand_offers')
                    ->leftJoin('offer_stats as brand_stats', 'brand_stats.offer_id', '=', 'brand_offers.id')
                    ->whereColumn('brand_offers.user_id', 'offers.user_id')
                    ->whereRaw('LOWER(TRIM(brand_offers.brand)) = LOWER(TRIM(offers.brand))')
                    ->whereNotIn('brand_offers.status', self::INACTIVE_STATUSES)
                    ->groupBy('brand_offers.user_id')
                    ->groupByRaw('LOWER(TRIM(brand_offers.brand))')
                    ->havingRaw('MAX(brand_offers.indexed_at) IS NOT NULL')
                    ->havingRaw('MAX(brand_offers.indexed_at) < ?', [$cutoff])
                    ->havingRaw('(MAX(brand_stats.last_lead_at) IS NULL OR MAX(brand_stats.last_lead_at) < ?)', [$cutoff]);
            });
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
            'count' => (int) $this->candidatesQuery($user, $days)->count('id'),
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
            ->select('offers.user_id')
            ->selectRaw('count(*) as cnt')
            ->groupBy('offers.user_id')
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
            ->orderBy('id')
            ->pluck('id')
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
