<?php

namespace App\Services;

use App\Jobs\DeployOfferJob;
use App\Jobs\RebindOfferDnsJob;
use App\Models\Offer;
use App\Models\OriginServer;
use App\Support\OriginRebalancePlanner;
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
            ->whereNotIn('status', ['archived', 'archiving', 'purging', 'teardown_failed'])
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

    /**
     * @return array{
     *     hosts: list<string>,
     *     total: int,
     *     target: array<string, int>,
     *     before: array<string, int>,
     *     after: array<string, int>,
     *     moves: list<array{id: int, brand: string, from: string, to: string}>
     * }
     */
    public function planRebalance(): array
    {
        $servers = $this->rebalanceServers();
        $hosts = [];
        $limits = [];
        foreach ($servers as $server) {
            $host = $this->sync->normalizeHost((string) $server->host);
            $hosts[] = $host;
            $max = (int) ($server->max_offers ?? 0);
            $limits[$host] = $max > 0 ? $max : null;
        }

        $rows = [];
        $before = array_fill_keys($hosts, 0);

        Offer::query()
            ->whereNotIn('status', ['archived', 'archiving', 'purging', 'teardown_failed'])
            ->orderBy('id')
            ->select(['id', 'brand', 'deploy_panel_name', 'infra_meta'])
            ->chunkById(500, function ($chunk) use (&$rows, &$before, $hosts): void {
                foreach ($chunk as $offer) {
                    $host = $this->sync->normalizeHost($this->pool->boundHost($offer));
                    if (! in_array($host, $hosts, true)) {
                        continue;
                    }
                    $rows[] = [
                        'id' => (int) $offer->id,
                        'brand' => (string) ($offer->brand ?? ''),
                        'host' => $host,
                    ];
                    $before[$host]++;
                }
            });

        $moves = OriginRebalancePlanner::plan($hosts, $rows, $limits);
        $target = OriginRebalancePlanner::targets($hosts, $before, array_sum($before), $limits);
        $after = $before;
        foreach ($moves as $move) {
            $after[$move['from']]--;
            $after[$move['to']]++;
        }

        return [
            'hosts' => $hosts,
            'total' => array_sum($before),
            'target' => $target,
            'before' => $before,
            'after' => $after,
            'moves' => $moves,
        ];
    }

    /**
     * @return array{moved: int, targets: array<string, int>, queued: int, before: array<string, int>, after: array<string, int>}
     */
    public function rebalance(): array
    {
        $plan = $this->planRebalance();
        $moves = $plan['moves'];

        if ($moves === []) {
            return [
                'moved' => 0,
                'targets' => [],
                'queued' => 0,
                'before' => $plan['before'],
                'after' => $plan['after'],
            ];
        }

        $byId = [];
        foreach ($moves as $move) {
            $byId[(int) $move['id']] = $move;
        }

        $queued = $this->retargetAndQueue($byId);

        $targets = [];
        foreach ($moves as $move) {
            $targets[$move['to']] = ($targets[$move['to']] ?? 0) + 1;
        }

        Log::info('Origin pool rebalance queued', [
            'moved' => count($moves),
            'targets' => $targets,
        ]);

        return [
            'moved' => count($moves),
            'targets' => $targets,
            'queued' => $queued,
            'before' => $plan['before'],
            'after' => $plan['after'],
        ];
    }

    /**
     * Pool boxes that can take a lander (same set as allocate, plus currently full ones as sources).
     *
     * @return list<OriginServer>
     */
    private function rebalanceServers(): array
    {
        $servers = [];

        foreach (OriginServer::query()->where('is_active', true)->orderBy('id')->get() as $server) {
            if ($server->role() !== OriginServer::ROLE_POOL) {
                continue;
            }
            if (! $server->hasSshCredentials()) {
                continue;
            }
            if ($server->healthStatus() === 'down') {
                continue;
            }
            $servers[] = $server;
        }

        return $servers;
    }

    /**
     * @param  array<int, array{id?: int, from: string, to: string}>  $moves  keyed by offer id
     */
    private function retargetAndQueue(array $moves): int
    {
        $offerIds = array_map('intval', array_keys($moves));

        foreach (Offer::query()->whereIn('id', $offerIds)->orderBy('id')->cursor() as $offer) {
            $move = $moves[(int) $offer->id] ?? null;
            $host = $move['to'] ?? null;
            if ($host === null) {
                continue;
            }

            $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
            $meta['deploy_host'] = $host;
            $meta['migrated_from'] = $move['from'] ?? $this->pool->boundHost($offer);

            $offer->forceFill([
                'infra_meta' => $meta,
                'deploy_panel_name' => $host,
                'provision_infrastructure' => true,
            ])->save();
        }

        $this->pool->forgetCounts();

        $queued = 0;
        foreach ($offerIds as $offerId) {
            DeployOfferJob::dispatch($offerId)->onQueue('deploy');
            $queued++;
        }

        $index = 0;
        foreach ($offerIds as $offerId) {
            $host = $moves[$offerId]['to'] ?? null;
            if ($host === null) {
                continue;
            }

            RebindOfferDnsJob::dispatch($offerId, $host)
                ->delay(now()->addSeconds(self::REBIND_BASE_DELAY + ($index * self::REBIND_DELAY_SEC)))
                ->onQueue('deploy');
            $index++;
        }

        return $queued;
    }
}
