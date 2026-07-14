<?php

namespace App\Console\Commands;

use App\Jobs\RecheckInfrastructureDnsJob;
use App\Models\Offer;
use Illuminate\Console\Command;

class RecheckInfrastructureDns extends Command
{
    protected $signature = 'offers:recheck-infra-dns';

    protected $description = 'Перевірити DNS і видати SSL для офферів у статусі dns_propagating';

    public function handle(): int
    {
        $offers = Offer::query()
            ->where('provision_infrastructure', true)
            ->where('infra_status', 'dns_propagating')
            ->get(['id', 'domain']);

        foreach ($offers as $offer) {
            RecheckInfrastructureDnsJob::dispatch($offer->id);
            $this->line("queued: {$offer->domain}");
        }

        return self::SUCCESS;
    }
}
