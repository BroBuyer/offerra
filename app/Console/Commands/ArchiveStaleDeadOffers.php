<?php

namespace App\Console\Commands;

use App\Models\Offer;
use App\Models\User;
use App\Services\OfferTeardownService;
use Illuminate\Console\Command;

class ArchiveStaleDeadOffers extends Command
{
    protected $signature = 'offers:archive-stale-dead
        {--months=1 : Indexed older than N months}
        {--dry-run : Only list count / sample, do not enqueue}
        {--limit=0 : Max offers to enqueue (0 = all)}';

    protected $description = 'Archive live offers indexed > N months ago with 0 leads and 0 deposits';

    public function handle(OfferTeardownService $teardown): int
    {
        $months = max(1, (int) $this->option('months'));
        $cutoff = now()->subMonths($months);
        $limit = max(0, (int) $this->option('limit'));
        $dry = (bool) $this->option('dry-run');

        $admin = User::query()
            ->where('role', User::ROLE_ADMIN)
            ->orderBy('id')
            ->first();

        if (! $admin && ! $dry) {
            $this->error('No admin user for archived_by.');

            return self::FAILURE;
        }

        $idsQuery = Offer::query()
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
            ->orderBy('offers.id')
            ->select('offers.id');

        if ($limit > 0) {
            $idsQuery->limit($limit);
        }

        $ids = $idsQuery->pluck('id')->all();
        $total = count($ids);
        $this->info("cutoff={$cutoff->toDateTimeString()} candidates={$total} dry=".($dry ? 'yes' : 'no'));

        if ($total === 0) {
            return self::SUCCESS;
        }

        if ($dry) {
            foreach (array_slice($ids, 0, 5) as $id) {
                $offer = Offer::query()->find($id);
                if ($offer) {
                    $this->line("#{$offer->id} {$offer->domain} indexed={$offer->indexed_at}");
                }
            }

            return self::SUCCESS;
        }

        $enqueued = 0;
        $skipped = 0;
        $errors = 0;

        foreach ($ids as $id) {
            $offer = Offer::query()->find($id);
            if (! $offer) {
                $skipped++;

                continue;
            }

            try {
                $teardown->enqueueArchive($offer, $admin);
                $enqueued++;
                if ($enqueued % 100 === 0) {
                    $this->line("enqueued={$enqueued}");
                }
            } catch (\Throwable $e) {
                $msg = $e->getMessage();
                if (str_contains($msg, 'вже архівується') || str_contains($msg, 'в архіві')) {
                    $skipped++;
                } else {
                    $errors++;
                    $this->warn("#{$offer->id} {$offer->domain}: {$msg}");
                }
            }
        }

        $this->info("done enqueued={$enqueued} skipped={$skipped} errors={$errors}");

        return $errors > 0 ? self::FAILURE : self::SUCCESS;
    }
}
