<?php

namespace App\Console\Commands;

use App\Models\OriginServer;
use App\Services\OriginHealthMonitor;
use App\Services\OriginServerSync;
use Illuminate\Console\Command;

class CheckOriginHealth extends Command
{
    protected $signature = 'origin:check-health {--sync : Sync registry from user settings + offer hosts first}';

    protected $description = 'Перевірити всі origin-сервери з реєстру (і orphan без SSH) та надіслати Telegram при падінні';

    public function handle(OriginHealthMonitor $monitor, OriginServerSync $sync): int
    {
        if ($this->option('sync') || OriginServer::query()->count() === 0) {
            $result = $sync->sync();
            $this->info("sync created={$result['created']} updated={$result['updated']} orphans=".count($result['orphans']));
        }

        $counts = $sync->offerCountsByHost();
        $servers = OriginServer::query()
            ->with('owner:id,name')
            ->orderBy('host')
            ->get();

        $checked = 0;

        foreach ($servers as $server) {
            $host = $sync->normalizeHost((string) $server->host);
            $offers = (int) ($counts[$host] ?? 0);

            // Skip inactive servers with no live offers.
            if (! $server->is_active && $offers === 0) {
                continue;
            }

            $result = $monitor->checkServer($server, true);
            $status = $result['status'] ?? 'unchecked';
            $mode = $server->hasSshCredentials() ? 'ssh' : 'http-only';
            $this->line("{$server->host}\t{$status}\t{$mode}\toffers={$offers}\t".($result['message'] ?? ''));
            $checked++;
        }

        $this->info("checked={$checked}");

        return self::SUCCESS;
    }
}
