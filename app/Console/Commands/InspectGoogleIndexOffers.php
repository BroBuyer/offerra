<?php

namespace App\Console\Commands;

use App\Jobs\InspectOfferGoogleIndexJob;
use App\Services\OfferGoogleIndexInspector;
use Illuminate\Console\Command;

class InspectGoogleIndexOffers extends Command
{
    protected $signature = 'offers:inspect-google-index
        {--limit=400 : Max offers to queue this run}
        {--dry-run : List due offers, do not inspect}';

    protected $description = 'Inspect GSC index status for submitted offers (24h after submit, then daily until indexed or 14d timeout)';

    public function handle(OfferGoogleIndexInspector $inspector): int
    {
        $limit = max(1, (int) $this->option('limit'));
        $dry = (bool) $this->option('dry-run');

        $ids = $inspector->dueQuery()
            ->orderBy('offers.indexed_at')
            ->limit($limit)
            ->pluck('offers.id')
            ->all();

        $this->info('due='.count($ids).' dry='.($dry ? 'yes' : 'no'));

        if ($dry || $ids === []) {
            return self::SUCCESS;
        }

        $queued = 0;
        foreach ($ids as $id) {
            InspectOfferGoogleIndexJob::dispatch((int) $id)->onQueue('deploy');
            $queued++;
        }

        $this->info("queued={$queued}");

        return self::SUCCESS;
    }
}
