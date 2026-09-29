<?php

namespace App\Services;

use App\Models\Offer;
use App\Models\OriginServer;
use App\Models\UserSetting;
use App\Support\DeployDriver;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use RuntimeException;

/**
 * Central pool of admin-managed origin servers.
 *
 * Offers are no longer pinned to a per-user SSH host from Settings: new offers
 * are spread across every active server whose role is "pool", and an offer keeps
 * its assigned host in infra_meta.deploy_host until an admin evacuates it.
 */
class OriginPool
{
    private const COUNTS_CACHE_KEY = 'origin-pool-offer-counts';

    private const COUNTS_CACHE_SECONDS = 30;

    public function __construct(private readonly OriginServerSync $sync) {}

    /**
     * Offers per host, cached briefly — allocation runs on every unbound deploy.
     *
     * @return array<string, int>
     */
    public function offerCounts(bool $fresh = false): array
    {
        if ($fresh) {
            Cache::forget(self::COUNTS_CACHE_KEY);
        }

        return Cache::remember(
            self::COUNTS_CACHE_KEY,
            self::COUNTS_CACHE_SECONDS,
            fn (): array => $this->sync->offerCountsByHost(),
        );
    }

    public function forgetCounts(): void
    {
        Cache::forget(self::COUNTS_CACHE_KEY);
    }

    /**
     * Servers that may receive a new offer, least loaded first.
     *
     * @return list<array{server: OriginServer, offers: int}>
     */
    public function candidates(): array
    {
        $counts = $this->offerCounts();

        $rows = [];
        foreach (OriginServer::query()->where('is_active', true)->orderBy('id')->get() as $server) {
            $host = $this->sync->normalizeHost((string) $server->host);
            $offers = (int) ($counts[$host] ?? 0);

            if (! $server->acceptsNewOffers($offers)) {
                continue;
            }

            $rows[] = ['server' => $server, 'offers' => $offers];
        }

        usort($rows, fn (array $a, array $b) => $a['offers'] <=> $b['offers']);

        return $rows;
    }

    public function hasCapacity(): bool
    {
        return $this->candidates() !== [];
    }

    /**
     * Pick the least loaded pool server.
     */
    public function allocate(): OriginServer
    {
        $candidates = $this->candidates();

        if ($candidates === []) {
            throw new RuntimeException(
                'Немає доступних origin-серверів у пулі. Додайте або активуйте сервер у розділі Origin Servers.',
            );
        }

        return $candidates[0]['server'];
    }

    /**
     * Spread a list of offer ids across the pool, balancing on current load.
     *
     * @param  list<int>  $offerIds
     * @return array<int, string> offer id => host
     */
    public function spread(array $offerIds, ?OriginServer $exclude = null): array
    {
        $candidates = $this->candidates();

        if ($exclude !== null) {
            $excludeHost = $this->sync->normalizeHost((string) $exclude->host);
            $candidates = array_values(array_filter(
                $candidates,
                fn (array $row) => $this->sync->normalizeHost((string) $row['server']->host) !== $excludeHost,
            ));
        }

        if ($candidates === []) {
            throw new RuntimeException('Немає інших активних серверів у пулі, щоб розкидати оффери.');
        }

        $load = [];
        $hosts = [];
        $limits = [];
        foreach ($candidates as $row) {
            $host = trim((string) $row['server']->host);
            $hosts[] = $host;
            $load[$host] = $row['offers'];
            $max = (int) ($row['server']->max_offers ?? 0);
            $limits[$host] = $max > 0 ? $max : null;
        }

        $assignment = [];
        foreach ($offerIds as $offerId) {
            $target = null;
            $best = null;

            foreach ($hosts as $host) {
                if ($limits[$host] !== null && $load[$host] >= $limits[$host]) {
                    continue;
                }
                if ($best === null || $load[$host] < $best) {
                    $best = $load[$host];
                    $target = $host;
                }
            }

            // Every server is at its cap — keep filling the least loaded one
            // instead of silently dropping offers from the migration.
            if ($target === null) {
                $target = collect($hosts)->sortBy(fn (string $host) => $load[$host])->first();
            }

            $assignment[(int) $offerId] = $target;
            $load[$target]++;
        }

        return $assignment;
    }

    public function serverForHost(?string $host): ?OriginServer
    {
        $normalized = $this->sync->normalizeHost((string) $host);
        if ($normalized === '') {
            return null;
        }

        $exact = OriginServer::query()->where('host', trim((string) $host))->first()
            ?? OriginServer::query()->where('host', $normalized)->first();

        if ($exact) {
            return $exact;
        }

        return OriginServer::query()
            ->get()
            ->first(fn (OriginServer $server) => $this->sync->normalizeHost((string) $server->host) === $normalized);
    }

    /**
     * Host this offer is currently bound to (infra_meta wins over the panel column).
     */
    public function boundHost(Offer $offer): string
    {
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $fromMeta = trim((string) ($meta['deploy_host'] ?? ''));
        if ($fromMeta !== '') {
            return $fromMeta;
        }

        $panel = trim((string) ($offer->deploy_panel_name ?? ''));

        return filter_var($panel, FILTER_VALIDATE_IP) ? $panel : '';
    }

    /**
     * Persist the offer → server binding.
     */
    public function bind(Offer $offer, OriginServer $server): void
    {
        $host = trim((string) $server->host);
        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
        $meta['deploy_host'] = $host;

        $offer->forceFill([
            'infra_meta' => $meta,
            'deploy_panel_name' => $host,
        ])->save();

        $this->forgetCounts();
    }

    /**
     * Copy the server's SSH/deploy settings onto an unsaved clone of the user's
     * settings, so every existing consumer that reads $settings->deploy_* keeps
     * working without knowing about the pool.
     */
    public function applyTo(UserSetting $settings, OriginServer $server): UserSetting
    {
        $probe = $settings->exists ? $settings->replicate() : clone $settings;

        $probe->deploy_host = trim((string) $server->host);
        $probe->deploy_port = (int) ($server->port ?: 22);
        $probe->deploy_username = trim((string) $server->username) ?: 'root';
        $probe->deploy_password = $server->password;
        $probe->deploy_driver = $server->deploy_driver ?: DeployDriver::UBUNTU;
        $probe->deploy_path_template = $server->deploy_path_template
            ?: DeployDriver::defaultPath($server->deploy_driver);
        $probe->deploy_panel_name = $probe->deploy_host;

        return $probe;
    }

    /**
     * Settings ready to deploy this offer: its bound server, or a freshly
     * allocated one when the offer has no host yet.
     */
    public function settingsForOffer(UserSetting $settings, Offer $offer, bool $bind = true): UserSetting
    {
        $host = $this->boundHost($offer);

        if ($host !== '') {
            $server = $this->serverForHost($host);

            if ($server && $server->hasSshCredentials()) {
                return $this->applyTo($settings, $server);
            }

            throw new RuntimeException(
                "Немає SSH-доступу до сервера {$host} (колонка Server у офера). Додайте його в Origin Servers.",
            );
        }

        $server = $this->allocate();

        if ($bind) {
            $this->bind($offer, $server);
        }

        return $this->applyTo($settings, $server);
    }

    /**
     * Pool overview for the admin panel.
     *
     * @return array{
     *     total: int,
     *     pool: int,
     *     spare: int,
     *     drain: int,
     *     accepting: int,
     *     offers: int,
     *     capacity: ?int,
     *     next_host: ?string
     * }
     */
    public function summary(): array
    {
        $counts = $this->offerCounts();
        $servers = OriginServer::query()->get();
        $candidates = $this->candidates();

        $capacity = 0;
        $unlimited = false;
        foreach ($candidates as $row) {
            $free = $row['server']->freeCapacityFrom($row['offers']);
            if ($free === null) {
                $unlimited = true;
                continue;
            }
            $capacity += $free;
        }

        return [
            'total' => $servers->count(),
            'pool' => $servers->filter(fn (OriginServer $s) => $s->role() === OriginServer::ROLE_POOL)->count(),
            'spare' => $servers->filter(fn (OriginServer $s) => $s->role() === OriginServer::ROLE_SPARE)->count(),
            'drain' => $servers->filter(fn (OriginServer $s) => $s->role() === OriginServer::ROLE_DRAIN)->count(),
            'accepting' => count($candidates),
            'offers' => array_sum($counts),
            'capacity' => $unlimited ? null : $capacity,
            'next_host' => $candidates[0]['server']->host ?? null,
        ];
    }

    /**
     * @return Collection<int, OriginServer>
     */
    public function spares(): Collection
    {
        return OriginServer::query()
            ->where('is_active', true)
            ->get()
            ->filter(fn (OriginServer $s) => $s->role() === OriginServer::ROLE_SPARE)
            ->values();
    }
}
