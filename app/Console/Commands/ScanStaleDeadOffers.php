<?php

namespace App\Console\Commands;

use App\Services\StaleDeadOfferService;
use Illuminate\Console\Command;

class ScanStaleDeadOffers extends Command
{
    protected $signature = 'offers:scan-stale-dead
        {--months=1 : Indexed older than N months}';

    protected $description = 'Scan live offers indexed >N months with 0 clicks/leads/deps; stamp cache for panel banner (no archive)';

    public function handle(StaleDeadOfferService $service): int
    {
        $months = max(1, (int) $this->option('months'));
        $result = $service->scan($months);

        $this->info("stale_dead total={$result['total']} users=".count($result['by_user']));
        foreach ($result['by_user'] as $userId => $cnt) {
            $this->line("  user_id={$userId} count={$cnt}");
        }

        return self::SUCCESS;
    }
}
