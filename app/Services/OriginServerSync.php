<?php

namespace App\Services;

use App\Models\Offer;
use App\Models\OriginServer;
use App\Models\UserSetting;
use App\Support\DeployDriver;
use Illuminate\Support\Collection;

class OriginServerSync
{
    /**
     * Refresh credentials on already-registered hosts and surface orphan offer hosts.
     *
     * Origin servers belong to the admin registry, not leftover Settings.deploy_host.
     * Creating rows from settings resurrected deleted IPs (hourly origin:sync-servers).
     *
     * @return array{synced: int, created: int, updated: int, orphans: list<string>}
     */
    public function sync(): array
    {
        $created = 0;
        $updated = 0;

        $settings = UserSetting::query()
            ->with('user:id,name')
            ->whereNotNull('deploy_host')
            ->where('deploy_host', '!=', '')
            ->get();

        foreach ($settings as $row) {
            $host = $this->normalizeHost((string) $row->deploy_host);
            if ($host === '') {
                continue;
            }

            $existing = OriginServer::query()->where('host', $host)->first();
            if (! $existing) {
                continue;
            }

            $payload = [
                'port' => (int) ($row->deploy_port ?: 22),
                'username' => $row->deploy_username,
                'label' => $existing->label ?: ($row->deploy_panel_name ?: ($row->user?->name ? $row->user->name.' origin' : null)),
                'deploy_driver' => DeployDriver::normalize($row->deploy_driver),
                'deploy_path_template' => $row->deploy_path_template
                    ?: DeployDriver::defaultPath($row->deploy_driver),
            ];

            if (filled($row->deploy_password) && ! filled($existing->password)) {
                $payload['password'] = $row->deploy_password;
            } elseif (filled($row->deploy_password) && trim((string) $existing->username) === trim((string) $row->deploy_username)) {
                $payload['password'] = $row->deploy_password;
            }

            $existing->fill($payload);
            if ($existing->isDirty()) {
                $existing->save();
                $updated++;
            }
        }

        $registered = OriginServer::query()->pluck('host')->map(fn ($h) => $this->normalizeHost((string) $h))->all();
        $orphanHosts = $this->offerHosts()
            ->reject(fn (string $host) => in_array($host, $registered, true))
            ->values()
            ->all();

        return [
            'synced' => $created + $updated,
            'created' => $created,
            'updated' => $updated,
            'orphans' => $orphanHosts,
        ];
    }

    /**
     * Drop leftover Settings.deploy_host rows that still point at a deleted origin.
     * Those leftovers were the source of Del → hourly recreate.
     */
    public function clearSettingsForHost(string $host): int
    {
        $normalized = $this->normalizeHost($host);
        if ($normalized === '') {
            return 0;
        }

        $cleared = 0;

        UserSetting::query()
            ->whereNotNull('deploy_host')
            ->where('deploy_host', '!=', '')
            ->get()
            ->each(function (UserSetting $row) use ($normalized, &$cleared): void {
                if ($this->normalizeHost((string) $row->deploy_host) !== $normalized) {
                    return;
                }

                $panel = $this->normalizeHost((string) ($row->deploy_panel_name ?? ''));
                $row->forceFill([
                    'deploy_host' => null,
                    'deploy_panel_name' => $panel === $normalized ? null : $row->deploy_panel_name,
                ])->save();
                $cleared++;
            });

        return $cleared;
    }

    /**
     * Distinct deploy hosts from active offers.
     *
     * @return Collection<int, string>
     */
    public function offerHosts(): Collection
    {
        $hosts = collect();

        Offer::query()
            ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
            ->orderBy('id')
            ->select(['id', 'deploy_panel_name', 'infra_meta'])
            ->chunkById(500, function ($chunk) use (&$hosts): void {
                foreach ($chunk as $offer) {
                    $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
                    $fromMeta = $this->normalizeHost((string) ($meta['deploy_host'] ?? ''));
                    if ($fromMeta !== '') {
                        $hosts->push($fromMeta);
                        continue;
                    }
                    $fromPanel = $this->normalizeHost((string) ($offer->deploy_panel_name ?? ''));
                    if ($fromPanel !== '' && filter_var($fromPanel, FILTER_VALIDATE_IP)) {
                        $hosts->push($fromPanel);
                    }
                }
            });

        return $hosts->unique()->sort()->values();
    }

    /**
     * @return array<string, int>
     */
    public function offerCountsByHost(): array
    {
        $counts = [];

        Offer::query()
            ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
            ->orderBy('id')
            ->select(['id', 'deploy_panel_name', 'infra_meta'])
            ->chunkById(500, function ($chunk) use (&$counts): void {
                foreach ($chunk as $offer) {
                    $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
                    $host = $this->normalizeHost((string) ($meta['deploy_host'] ?? ''));
                    if ($host === '') {
                        $panel = $this->normalizeHost((string) ($offer->deploy_panel_name ?? ''));
                        $host = filter_var($panel, FILTER_VALIDATE_IP) ? $panel : '';
                    }
                    if ($host === '') {
                        continue;
                    }
                    $counts[$host] = ($counts[$host] ?? 0) + 1;
                }
            });

        return $counts;
    }

    public function normalizeHost(string $host): string
    {
        $host = strtolower(trim($host));
        $host = preg_replace('#^https?://#', '', $host) ?? $host;
        $host = explode('/', $host)[0] ?? $host;
        $host = explode(':', $host)[0] ?? $host;

        return rtrim($host, '.');
    }

    /**
     * Hosts that have active offers but no SSH credentials in the registry.
     *
     * @return list<array{host: string, offers_count: int}>
     */
    public function orphanOfferHosts(): array
    {
        $counts = $this->offerCountsByHost();
        $credentialed = OriginServer::query()
            ->get(['host', 'username', 'password'])
            ->filter(fn (OriginServer $s) => $s->hasSshCredentials())
            ->map(fn (OriginServer $s) => $this->normalizeHost((string) $s->host))
            ->all();

        $orphans = [];
        foreach ($counts as $host => $count) {
            if (in_array($host, $credentialed, true)) {
                continue;
            }
            $orphans[] = [
                'host' => $host,
                'offers_count' => $count,
            ];
        }

        usort($orphans, fn ($a, $b) => $b['offers_count'] <=> $a['offers_count']);

        return $orphans;
    }
}
