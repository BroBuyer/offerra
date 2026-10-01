<?php

namespace App\Console\Commands;

use App\Services\OriginServerSync;
use Illuminate\Console\Command;

class SyncOriginServers extends Command
{
    protected $signature = 'origin:sync-servers';

    protected $description = 'Оновити SSH-креденшали вже зареєстрованих origin-серверів і показати orphan-хости оферів';

    public function handle(OriginServerSync $sync): int
    {
        $result = $sync->sync();
        $this->info("created={$result['created']} updated={$result['updated']} orphans=".count($result['orphans']));
        foreach ($result['orphans'] as $host) {
            $this->line("orphan\t{$host}");
        }

        return self::SUCCESS;
    }
}
