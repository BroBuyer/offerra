<?php

namespace App\Console\Commands;

use App\Models\Offer;
use App\Services\DeployService;
use Illuminate\Console\Command;

class DeployOffer extends Command
{
    protected $signature = 'offers:deploy {offer : ID оффера}';

    protected $description = 'Задеплоїти оффер на сервер через SFTP';

    public function handle(DeployService $deploy): int
    {
        $offer = Offer::query()->find($this->argument('offer'));

        if (! $offer) {
            $this->error('Оффер не знайдено');

            return self::FAILURE;
        }

        $this->info("Деплой {$offer->domain} ({$offer->folder})…");

        try {
            $deploy->deploy($offer->user, $offer);
        } catch (\Throwable $e) {
            $this->error($e->getMessage());

            return self::FAILURE;
        }

        $offer->refresh();
        $this->info("Готово: {$offer->status} → {$offer->remote_path}");

        return self::SUCCESS;
    }
}
