<?php

namespace App\Console\Commands;

use App\Models\UserSetting;
use App\Services\OriginHealthMonitor;
use Illuminate\Console\Command;

class CheckOriginHealth extends Command
{
    protected $signature = 'origin:check-health';

    protected $description = 'Перевірити SSH/HTTP origin-серверів баєрів і надіслати Telegram при падінні';

    public function handle(OriginHealthMonitor $monitor): int
    {
        $settings = UserSetting::query()
            ->with('user:id,name')
            ->whereNotNull('deploy_host')
            ->where('deploy_host', '!=', '')
            ->whereNotNull('deploy_username')
            ->where('deploy_username', '!=', '')
            ->whereNotNull('deploy_password')
            ->get();

        $checked = 0;

        foreach ($settings as $row) {
            if (! $row->hasOriginCredentials()) {
                continue;
            }

            $result = $monitor->check($row, true);
            $status = $result['status'] ?? 'unchecked';
            $host = $row->deploy_host;
            $this->line("{$host}\t{$status}\t".($result['message'] ?? ''));
            $checked++;
        }

        $this->info("checked={$checked}");

        return self::SUCCESS;
    }
}
