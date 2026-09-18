<?php

namespace App\Console\Commands;

use App\Models\Offer;
use App\Services\OfferAvailabilityProbe;
use Illuminate\Console\Command;

class CheckOfferAvailability extends Command
{
    protected $signature = 'offers:check-availability
                            {--limit=4000 : Max deployed offers to check this run}
                            {--stale-minutes=55 : Re-check ok/unchecked older than this}
                            {--down-stale-minutes=10 : Re-check red dots older than this}
                            {--only-down : Only re-check offers currently marked down}';

    protected $description = 'HTTPS availability probe for deployed offers (green/red dots)';

    public function handle(OfferAvailabilityProbe $probe): int
    {
        @set_time_limit(0);

        $limit = max(1, (int) $this->option('limit'));
        $staleMinutes = max(1, (int) $this->option('stale-minutes'));
        $downStaleMinutes = max(1, (int) $this->option('down-stale-minutes'));
        $onlyDown = (bool) $this->option('only-down');
        $okCutoff = now()->subMinutes($staleMinutes);
        $downCutoff = now()->subMinutes($downStaleMinutes);

        $offers = Offer::query()
            ->where('status', 'deployed')
            ->when($onlyDown, fn ($q) => $q->where('availability_status', 'down'))
            ->where(function ($query) use ($onlyDown, $okCutoff, $downCutoff): void {
                if ($onlyDown) {
                    $query->whereNull('availability_checked_at')
                        ->orWhere('availability_checked_at', '<', $downCutoff);

                    return;
                }

                // Red dots: recheck sooner so recovered sites turn green without manual click.
                $query->where(function ($down) use ($downCutoff): void {
                    $down->where('availability_status', 'down')
                        ->where(function ($inner) use ($downCutoff): void {
                            $inner->whereNull('availability_checked_at')
                                ->orWhere('availability_checked_at', '<', $downCutoff);
                        });
                })->orWhere(function ($other) use ($okCutoff): void {
                    $other->where(function ($status): void {
                        $status->whereNull('availability_status')
                            ->orWhere('availability_status', '!=', 'down');
                    })->where(function ($inner) use ($okCutoff): void {
                        $inner->whereNull('availability_checked_at')
                            ->orWhere('availability_checked_at', '<', $okCutoff);
                    });
                });
            })
            ->orderByRaw("CASE WHEN availability_status = 'down' THEN 0 ELSE 1 END")
            ->orderByRaw('availability_checked_at IS NULL DESC')
            ->orderBy('availability_checked_at')
            ->limit($limit)
            ->get();

        if ($offers->isEmpty()) {
            $this->info('nothing to check');

            return self::SUCCESS;
        }

        $this->info('checking '.$offers->count().' offers…'.($onlyDown ? ' (only-down)' : ''));

        $totals = ['ok' => 0, 'down' => 0, 'soft_fail' => 0];

        foreach ($offers->chunk(100) as $chunk) {
            $counts = $probe->checkAndUpdateMany($chunk->all());
            $totals['ok'] += $counts['ok'];
            $totals['down'] += $counts['down'];
            $totals['soft_fail'] += $counts['soft_fail'];
        }

        $this->info(sprintf(
            'done ok=%d down=%d soft_fail=%d',
            $totals['ok'],
            $totals['down'],
            $totals['soft_fail'],
        ));

        return self::SUCCESS;
    }
}
