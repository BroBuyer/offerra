<?php

namespace App\Console\Commands;

use App\Services\OfferClickIdService;
use Illuminate\Console\Command;

class PruneLanderClicks extends Command
{
    protected $signature = 'clicks:prune {--days=90}';

    protected $description = 'Drop lander click ids older than the cookie lifetime';

    public function handle(OfferClickIdService $clicks): int
    {
        $days = (int) $this->option('days');
        $deleted = $clicks->pruneOlderThanDays($days);
        $this->info("deleted={$deleted} days={$days}");

        return self::SUCCESS;
    }
}
