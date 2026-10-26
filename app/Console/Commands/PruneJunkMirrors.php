<?php

namespace App\Console\Commands;

use App\Services\MirrorProbeService;
use Illuminate\Console\Command;

class PruneJunkMirrors extends Command
{
    protected $signature = 'mirrors:prune-junk';

    protected $description = 'Прибрати фейкові дзеркала (reserved TLD / без публічного DNS)';

    public function handle(MirrorProbeService $mirrors): int
    {
        $deleted = $mirrors->pruneJunk();
        $this->info($deleted === 0 ? 'junk=0' : "junk={$deleted}");

        return self::SUCCESS;
    }
}
