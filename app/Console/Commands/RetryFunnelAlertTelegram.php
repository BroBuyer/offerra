<?php

namespace App\Console\Commands;

use App\Services\FunnelAlertService;
use Illuminate\Console\Command;

class RetryFunnelAlertTelegram extends Command
{
    protected $signature = 'funnel-alerts:retry-telegram';

    protected $description = 'Надіслати в Telegram очікуючі алерти воронок без ленда';

    public function handle(FunnelAlertService $alerts): int
    {
        $result = $alerts->retryPending();

        if (($result['error'] ?? null) === 'telegram_not_configured') {
            $this->error('Telegram не налаштований: немає bot token або chat ID.');

            return self::FAILURE;
        }

        $this->info('sent='.$result['sent'].' failed='.$result['failed']);

        foreach ($result['results'] as $row) {
            $label = ($row['brand'] ?? '').' #'.$row['id'];

            if ($row['ok'] ?? false) {
                $this->line("ok: {$label}");
            } else {
                $this->error('fail: '.$label.' — '.($row['error'] ?? 'unknown'));
            }
        }

        if (($result['sent'] ?? 0) === 0 && ($result['failed'] ?? 0) === 0) {
            $this->line('Немає очікуючих алертів.');
        }

        return ($result['failed'] ?? 0) > 0 ? self::FAILURE : self::SUCCESS;
    }
}
