<?php

namespace App\Console\Commands;

use App\Models\BackupServer;
use App\Services\BackupStatusProbe;
use Illuminate\Console\Command;

class CheckBackupStatus extends Command
{
    protected $signature = 'backup:check';

    protected $description = 'Оновити статус restic-бекапу для сторінки в панелі';

    public function handle(BackupStatusProbe $probe): int
    {
        $servers = BackupServer::query()->orderBy('id')->get();
        if ($servers->isEmpty()) {
            $this->info('no backup servers');

            return self::SUCCESS;
        }

        foreach ($servers as $server) {
            $result = $probe->refresh($server);
            $this->line($server->host."\t".($result['state'] ?? '?')."\t".($result['latest_snapshot_at'] ?? '—')."\t".($result['message'] ?? ''));
        }

        return self::SUCCESS;
    }
}
