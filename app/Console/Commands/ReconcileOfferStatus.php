<?php

namespace App\Console\Commands;

use App\Services\OfferStatusReconciler;
use Illuminate\Console\Command;

class ReconcileOfferStatus extends Command
{
    protected $signature = 'offers:reconcile-status {--user= : ID користувача} {--dry-run : Лише показати звіт без оновлення БД}';

    protected $description = 'Звірити оффери з сервером (SFTP/HTTP) і Keitaro, оновити статус deployed';

    public function handle(OfferStatusReconciler $reconciler): int
    {
        $dryRun = (bool) $this->option('dry-run');
        $userId = $this->option('user') ? (int) $this->option('user') : null;

        try {
            $rows = $reconciler->reconcile($userId, ! $dryRun);
        } catch (\Throwable $e) {
            $this->error($e->getMessage());

            return self::FAILURE;
        }

        $this->table(
            ['ID', 'Домен', 'Сервер', 'HTTP', 'KT', 'KT#', 'Було', 'Стане', 'Оновлено'],
            array_map(fn (array $row) => [
                $row['id'],
                $row['domain'],
                $row['on_server'] ? '✓' : '—',
                $row['live_http'] ? '✓' : '—',
                $row['in_keitaro'] ? '✓' : ($row['keitaro_id'] ? '?' : '—'),
                $row['keitaro_id'] ?? '—',
                $row['was_status'],
                $row['new_status'],
                $row['changed'] ? 'так' : '—',
            ], $rows),
        );

        $updated = count(array_filter($rows, fn (array $row) => $row['changed']));
        $deployed = count(array_filter($rows, fn (array $row) => $row['on_server']));

        $this->newLine();
        $this->info("На сервері: {$deployed} / ".count($rows));

        if ($dryRun) {
            $this->warn('Dry-run — БД не змінено. Запустіть без --dry-run для оновлення.');
        } else {
            $this->info("Оновлено записів: {$updated}");
        }

        return self::SUCCESS;
    }
}
