<?php

namespace App\Console\Commands;

use App\Jobs\RecheckInfrastructureDnsJob;
use App\Models\Offer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

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

        $pendingOffers = $offers->filter(fn ($offer) => $offer->dnsStatus() === 'pending');

        if ($pendingOffers->isEmpty()) {
            return self::SUCCESS;
        }

        $alreadyQueuedIds = $this->queuedRecheckOfferIds();

        $queued = 0;
        foreach ($pendingOffers as $offer) {
            if (isset($alreadyQueuedIds[$offer->id])) {
                continue;
            }

            RecheckInfrastructureDnsJob::dispatch($offer->id);
            $alreadyQueuedIds[$offer->id] = true;
            $this->line("queued: {$offer->domain}");
            $queued++;
        }

        if ($queued === 0) {
            $this->info('all pending offers already queued');
        }

        return self::SUCCESS;
    }

    /**
     * @return array<int, true>
     */
    private function queuedRecheckOfferIds(): array
    {
        $alreadyQueuedIds = [];

        DB::table('jobs')
            ->where('queue', 'default')
            ->where('payload', 'like', '%RecheckInfrastructureDnsJob%')
            ->orderBy('id')
            ->select(['id', 'payload'])
            ->chunkById(200, function ($rows) use (&$alreadyQueuedIds): void {
                foreach ($rows as $job) {
                    $offerId = $this->extractOfferId((string) $job->payload);
                    if ($offerId) {
                        $alreadyQueuedIds[$offerId] = true;
                    }
                }
            });

        return $alreadyQueuedIds;
    }

    private function extractOfferId(string $payload): ?int
    {
        $data = json_decode($payload, true);
        $cmd = $data['data']['command'] ?? null;

        if (! is_string($cmd) || $cmd === '') {
            return null;
        }

        if (preg_match('/offerId";i:(\d+)/', $cmd, $m)) {
            return (int) $m[1];
        }

        try {
            $obj = unserialize($cmd, ['allowed_classes' => [RecheckInfrastructureDnsJob::class]]);
            if ($obj instanceof RecheckInfrastructureDnsJob) {
                return (int) $obj->offerId;
            }
        } catch (\Throwable) {
        }

        return null;
    }
}
