<?php

namespace App\Console\Commands;

use App\Services\OriginEvacuationService;
use Illuminate\Console\Command;

class RebalanceOriginPool extends Command
{
    protected $signature = 'origins:rebalance {--dry-run : Тільки план, без деплою і DNS}';

    protected $description = 'Вирівняти офери між серверами пулу (бренд, потім навантаження)';

    public function handle(OriginEvacuationService $evacuation): int
    {
        $plan = $evacuation->planRebalance();

        $this->table(
            ['host', 'before', 'target', 'after'],
            collect($plan['hosts'])->map(fn (string $host) => [
                $host,
                $plan['before'][$host] ?? 0,
                $plan['target'][$host] ?? 0,
                $plan['after'][$host] ?? 0,
            ])->all(),
        );

        $this->line('moves='.count($plan['moves']).' total='.$plan['total']);

        if ($this->option('dry-run') || $plan['moves'] === []) {
            return self::SUCCESS;
        }

        $result = $evacuation->rebalance();
        $this->info("queued={$result['queued']}");

        return self::SUCCESS;
    }
}
