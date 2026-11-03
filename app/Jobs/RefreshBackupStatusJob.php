<?php

namespace App\Jobs;

use App\Models\BackupServer;
use App\Services\BackupStatusProbe;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class RefreshBackupStatusJob implements ShouldQueue
{
    use Queueable;

    public int $timeout = 90;

    public int $tries = 1;

    public function __construct(public ?int $backupServerId = null)
    {
        $this->onQueue('default');
    }

    public function handle(BackupStatusProbe $probe): void
    {
        $query = BackupServer::query()->orderBy('id');
        if ($this->backupServerId) {
            $query->where('id', $this->backupServerId);
        }

        foreach ($query->get() as $server) {
            $probe->refresh($server);
        }
    }
}
