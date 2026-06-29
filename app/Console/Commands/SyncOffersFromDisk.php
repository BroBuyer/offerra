<?php

namespace App\Console\Commands;

use App\Models\Offer;
use App\Models\User;
use App\Services\OfferScanner;
use App\Services\TemplateCatalog;
use Illuminate\Console\Command;

class SyncOffersFromDisk extends Command
{
    protected $signature = 'offers:sync {--user= : ID користувача-власника}';

    protected $description = 'Імпортувати оффери з offers/ у таблицю offers';

    public function handle(OfferScanner $scanner, TemplateCatalog $catalog): int
    {
        $userId = $this->option('user') ?? User::query()->value('id');
        $defaultTemplate = $catalog->ids()[0] ?? 'default';

        if (! $userId) {
            $this->error('Користувача не знайдено. Створіть admin або вкажіть --user=ID');

            return self::FAILURE;
        }

        $imported = 0;
        $skipped = 0;

        foreach ($scanner->scan() as $row) {
            $exists = Offer::query()->where('folder', $row['folder'])->exists();

            if ($exists) {
                $skipped++;

                continue;
            }

            Offer::create([
                'user_id' => $userId,
                'folder' => $row['folder'],
                'brand' => $row['brand'],
                'domain' => $row['domain'],
                'geo' => $row['geo'],
                'lang' => $row['lang'],
                'template' => $defaultTemplate,
                'status' => $row['status'] ?? 'generated',
                'keitaro_campaign_id' => $row['keitaro_id'] ? (int) $row['keitaro_id'] : null,
            ]);

            $imported++;
        }

        $this->info("Імпортовано: {$imported}, пропущено: {$skipped}");

        return self::SUCCESS;
    }
}
