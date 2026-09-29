<?php

namespace App\Services;

use App\Models\Offer;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class StaleDeadOfferService
{
    public const CACHE_LAST_SCAN_AT = 'stale_dead.last_scan_at';

    public function __construct(
        private readonly OfferTeardownService $teardown,
    ) {}

    /**
     * Live offers indexed >1 month ago with 0 geo-clicks / leads / deposits.
     * Scope: own offers, or all if admin (management rule — not canSeeAllOffers).
     */
    public function candidatesQuery(User $user, int $months = 1): Builder
    {
        // 1 calendar month minus a few days so near-threshold offers surface before the exact anniversary.
        $cutoff = now()->subMonths(max(1, $months))->addDays(3);

        $query = Offer::query()
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
            ->where(function ($q) {
                $q->whereNull('offer_stats.clicks_geo_count')
                    ->orWhere('offer_stats.clicks_geo_count', '<=', 0);
            })
            ->select('offers.*');

        // Archive is owner-or-admin; banner count must match what 1-click will enqueue.
        if (! $user->isAdmin()) {
            $query->where('offers.user_id', $user->id);
        }

        return $query;
    }

    /**
     * @return array{count: int, last_scan_at: string|null}
     */
    public function hintFor(User $user, int $months = 1): array
    {
        $lastScan = Cache::get(self::CACHE_LAST_SCAN_AT);

        return [
            'count' => (int) $this->candidatesQuery($user, $months)->count('offers.id'),
            'last_scan_at' => is_string($lastScan) && $lastScan !== '' ? $lastScan : null,
        ];
    }

    /**
     * Recompute totals and stamp last_scan_at (cron). Does not enqueue archive.
     *
     * @return array{total: int, by_user: array<int, int>}
     */
    public function scan(int $months = 1): array
    {
        $cutoff = now()->subMonths(max(1, $months))->addDays(3);

        $rows = Offer::query()
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
            ->where(function ($q) {
                $q->whereNull('offer_stats.clicks_geo_count')
                    ->orWhere('offer_stats.clicks_geo_count', '<=', 0);
            })
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
            'months' => $months,
        ]);

        return [
            'total' => $total,
            'by_user' => $byUser,
        ];
    }

    public function archiveAllFor(User $user, int $months = 1): int
    {
        $ids = $this->candidatesQuery($user, $months)
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
