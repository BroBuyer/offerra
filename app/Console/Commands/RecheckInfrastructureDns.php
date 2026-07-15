<?php

namespace App\Console\Commands;

use App\Jobs\RecheckInfrastructureDnsJob;
use App\Models\Offer;
use Illuminate\Console\Command;

class RecheckInfrastructureDns extends Command
{
    protected $signature = 'offers:recheck-infra-dns';

    protected $description = 'Перевірити DNS для офферів, що очікують поширення';

    public function handle(): int
    {
        $offers = Offer::query()
            ->where('provision_infrastructure', true)
            ->where(function ($query): void {
                $query
                    ->where('infra_status', 'dns_propagating')
                    ->orWhere(function ($query): void {
                        $query
                            ->whereIn('infra_status', ['ready'])
                            ->where('infra_meta->dns', 'pending');
                    });
            })
            ->get(['id', 'domain']);

        foreach ($offers as $offer) {
            RecheckInfrastructureDnsJob::dispatch($offer->id);
            $this->line("queued: {$offer->domain}");
        }

        return self::SUCCESS;
    }
}
