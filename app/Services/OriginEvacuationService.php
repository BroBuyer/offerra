<?php

namespace App\Services;

use App\Jobs\DeployOfferJob;
use App\Jobs\RebindOfferDnsJob;
use App\Models\Offer;
use App\Models\OriginServer;
use Illuminate\Support\Facades\Log;

/**
 * Move every live offer off one origin server and spread it across the pool:
 * retarget the binding, redeploy the files, then rebind Cloudflare A records.
 */
class OriginEvacuationService
{
    /** Seconds between queued Cloudflare rebinds (API rate limits). */
    private const REBIND_DELAY_SEC = 3;

    /** Head start so files land before DNS follows. */
    private const REBIND_BASE_DELAY = 90;

    public function __construct(
        private readonly OriginPool $pool,
        private readonly OriginServerSync $sync,
    ) {}

    /**
     * @return list<int>
     */
    public function offerIdsOn(OriginServer $server): array
    {
        $host = $this->sync->normalizeHost((string) $server->host);
        $ids = [];

        Offer::query()
            ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
            ->orderBy('id')
            ->select(['id', 'deploy_panel_name', 'infra_meta'])
            ->chunkById(500, function ($chunk) use (&$ids, $host): void {
                foreach ($chunk as $offer) {
                    if ($this->sync->normalizeHost($this->pool->boundHost($offer)) === $host) {
                        $ids[] = (int) $offer->id;
                    }
                }
            });

        return $ids;
    }

    /**
     * @return array{offers: int, targets: array<string, int>, queued: int}
     */
    public function evacuate(OriginServer $server, bool $markDrain = true): array
    {
        $offerIds = $this->offerIdsOn($server);

        if ($markDrain) {
            $server->forceFill(['role' => OriginServer::ROLE_DRAIN])->save();
        }

        if ($offerIds === []) {
            return ['offers' => 0, 'targets' => [], 'queued' => 0];
        }

        $assignment = $this->pool->spread($offerIds, $server);
        $targets = [];

        foreach (Offer::query()->whereIn('id', $offerIds)->orderBy('id')->cursor() as $offer) {
            $host = $assignment[(int) $offer->id] ?? null;
            if ($host === null) {
                continue;
            }

            $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
            $meta['deploy_host'] = $host;
            $meta['migrated_from'] = trim((string) $server->host);

            $offer->forceFill([
                'infra_meta' => $meta,
                'deploy_panel_name' => $host,
                'provision_infrastructure' => true,
            ])->save();

            $targets[$host] = ($targets[$host] ?? 0) + 1;
        }

        $this->pool->forgetCounts();

        $queued = 0;
        foreach ($offerIds as $offerId) {
            DeployOfferJob::dispatch((int) $offerId)->onQueue('deploy');
            $queued++;
        }

        $index = 0;
        foreach ($offerIds as $offerId) {
            $host = $assignment[(int) $offerId] ?? null;
            if ($host === null) {
                continue;
            }

            RebindOfferDnsJob::dispatch((int) $offerId, $host)
                ->delay(now()->addSeconds(self::REBIND_BASE_DELAY + ($index * self::REBIND_DELAY_SEC)))
                ->onQueue('deploy');
            $index++;
        }

        Log::info('Origin evacuation queued', [
            'from' => $server->host,
            'offers' => count($offerIds),
            'targets' => $targets,
        ]);

        return [
            'offers' => count($offerIds),
            'targets' => $targets,
            'queued' => $queued,
        ];
    }
}
