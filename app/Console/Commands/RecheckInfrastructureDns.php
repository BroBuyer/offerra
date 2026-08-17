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
            ->whereIn('infra_status', ['ready', 'dns_propagating'])
            ->orderBy('id')
            ->get(['id', 'domain', 'provision_infrastructure', 'infra_status', 'infra_meta']);

        $queued = 0;

        foreach ($offers as $offer) {
            if ($offer->dnsStatus() !== 'pending') {
                continue;
            }

            RecheckInfrastructureDnsJob::dispatch($offer->id);
            $this->line("queued: {$offer->domain}");

            if (++$queued >= 40) {
                break;
            }
        }

        return self::SUCCESS;
    }
}
