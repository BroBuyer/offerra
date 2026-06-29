<?php

namespace App\Console\Commands;

use App\Models\Offer;
use App\Services\DeployConnection;
use Illuminate\Console\Command;

class FixOfferPermissions extends Command
{
    protected $signature = 'offers:fix-permissions {offer : ID оффера}';

    protected $description = 'Встановити публічні права (755) на файли оффера на сервері';

    public function handle(DeployConnection $connection): int
    {
        $offer = Offer::query()->find($this->argument('offer'));

        if (! $offer) {
            $this->error('Оффер не знайдено');

            return self::FAILURE;
        }

        $settings = $offer->user?->settings;

        if (! $settings || ! filled($settings->deploy_host)) {
            $this->error('SFTP-налаштування не заповнені');

            return self::FAILURE;
        }

        $config = [
            'host' => (string) $settings->deploy_host,
            'port' => (int) ($settings->deploy_port ?? 22),
            'username' => (string) $settings->deploy_username,
            'password' => (string) $settings->deploy_password,
        ];

        $remotePath = $offer->remote_path ?: $connection->resolveRemotePath(
            $settings->deploy_path_template,
            $config['username'],
            $offer->domain,
        );

        $this->info("chmod 755 -R {$remotePath}");

        try {
            $connection->chmodPublicRecursive($config, $remotePath);
        } catch (\Throwable $e) {
            $this->error($e->getMessage());

            return self::FAILURE;
        }

        $this->info('Готово');

        return self::SUCCESS;
    }
}
