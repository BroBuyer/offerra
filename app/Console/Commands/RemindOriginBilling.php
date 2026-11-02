<?php

namespace App\Console\Commands;

use App\Services\OriginBillingReminder;
use Illuminate\Console\Command;

class RemindOriginBilling extends Command
{
    protected $signature = 'origin:billing-remind';

    protected $description = 'Telegram за день до кінця оплати origin-сервера (і якщо вже прострочено, один раз)';

    public function handle(OriginBillingReminder $reminder): int
    {
        $result = $reminder->remind();
        $this->info("reminded={$result['reminded']} skipped={$result['skipped']}");

        return self::SUCCESS;
    }
}
