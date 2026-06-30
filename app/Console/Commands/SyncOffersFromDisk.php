<?php

namespace App\Console\Commands;

use App\Models\Offer;
use App\Models\User;
use App\Services\OfferScanner;
use App\Services\TemplateCatalog;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class SyncOffersFromDisk extends Command
{
    protected $signature = 'offers:sync {--user= : ID користувача-власника за замовчуванням}';

    protected $description = 'Імпортувати оффери з offers/ у таблицю offers';

    public function handle(OfferScanner $scanner, TemplateCatalog $catalog): int
    {
        $fallbackUserId = $this->option('user') ?? User::query()->value('id');
        $defaultTemplate = $catalog->ids()[0] ?? 'default';
        $offersPath = rtrim(config('offerra.offers_path'), DIRECTORY_SEPARATOR);

        if (! $fallbackUserId) {
            $this->error('Користувача не знайдено. Створіть admin або вкажіть --user=ID');

            return self::FAILURE;
        }

        $imported = 0;
        $skipped = 0;

        foreach ($scanner->scan() as $row) {
            if (Offer::query()->where('folder', $row['folder'])->exists()) {
                $skipped++;

                continue;
            }

            $manifest = $this->readManifest($offersPath, $row['folder']);
            $userId = $this->resolveOwnerId($manifest, $fallbackUserId);

            Offer::create([
                'user_id' => $userId,
                'folder' => $row['folder'],
                'brand' => $manifest['brand'] ?? $row['brand'],
                'domain' => $manifest['domain'] ?? $row['domain'],
                'geo' => strtoupper($manifest['geo'] ?? $row['geo']),
                'lang' => strtolower($manifest['lang'] ?? $row['lang']),
                'phone' => strtolower($manifest['phone'] ?? $row['lang'] ?? ''),
                'template' => $manifest['template'] ?? $row['template'] ?? $defaultTemplate,
                'status' => $manifest['status'] ?? $row['status'] ?? 'generated',
                'deploy_panel_name' => $manifest['deploy_panel'] ?? null,
                'remote_path' => $manifest['remote_path'] ?? null,
                'deployed_at' => $manifest['deployed_at'] ?? null,
                'keitaro_campaign_id' => isset($manifest['keitaro_campaign_id'])
                    ? (int) $manifest['keitaro_campaign_id']
                    : ($row['keitaro_id'] ? (int) $row['keitaro_id'] : null),
                'keitaro_alias' => $manifest['keitaro_alias'] ?? null,
            ]);

            $imported++;
        }

        $this->info("Імпортовано: {$imported}, пропущено: {$skipped}");

        return self::SUCCESS;
    }

    /**
     * @return array<string, mixed>
     */
    private function readManifest(string $offersPath, string $folder): array
    {
        $path = $offersPath.DIRECTORY_SEPARATOR.$folder.DIRECTORY_SEPARATOR.'manifest.json';

        if (! File::exists($path)) {
            return [];
        }

        $data = json_decode(File::get($path), true);

        return is_array($data) ? $data : [];
    }

    /**
     * @param  array<string, mixed>  $manifest
     */
    private function resolveOwnerId(array $manifest, int $fallbackUserId): int
    {
        $ownerId = (int) ($manifest['owner_id'] ?? $fallbackUserId);

        if ($ownerId > 0 && User::query()->whereKey($ownerId)->exists()) {
            return $ownerId;
        }

        return $fallbackUserId;
    }
}
