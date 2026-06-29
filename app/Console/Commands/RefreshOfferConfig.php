<?php

namespace App\Console\Commands;

use App\Models\Offer;
use App\Models\UserSetting;
use App\Services\OfferGenerator;
use App\Support\SecretValue;
use Illuminate\Console\Command;

class RefreshOfferConfig extends Command
{
    protected $signature = 'offers:refresh-config {offer : ID оффера}';

    protected $description = 'Перегенерувати includes/config.php з актуальних налаштувань';

    public function handle(OfferGenerator $generator): int
    {
        $offer = Offer::query()->find($this->argument('offer'));

        if (! $offer) {
            $this->error('Оффер не знайдено');

            return self::FAILURE;
        }

        $settings = $offer->user?->settings;

        if ($settings) {
            $normalized = SecretValue::normalize($settings->crm_api_key);
            if ($normalized !== $settings->crm_api_key) {
                $settings->crm_api_key = $normalized;
                $settings->save();
                $this->info('CRM API key у налаштуваннях виправлено.');
            }
        }

        try {
            $generator->refreshConfig($offer);
        } catch (\Throwable $e) {
            $this->error($e->getMessage());

            return self::FAILURE;
        }

        $this->info("config.php оновлено: {$offer->folder}");

        return self::SUCCESS;
    }
}
