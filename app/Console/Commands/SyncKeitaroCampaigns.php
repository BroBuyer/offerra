<?php

namespace App\Console\Commands;

use App\Models\Offer;
use App\Models\UserSetting;
use App\Services\KeitaroClient;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class SyncKeitaroCampaigns extends Command
{
    protected $signature = 'offers:sync-keitaro {--dry-run : Лише показати збіги}';

    protected $description = 'Знайти кампанії Keitaro за доменом і оновити оффери';

    public function handle(KeitaroClient $keitaro): int
    {
        $settings = UserSetting::query()->first();

        if (! $settings?->keitaro_api_key) {
            $this->error('Keitaro API key не налаштовано');

            return self::FAILURE;
        }

        $campaigns = $keitaro->listCampaigns($settings);
        $this->info('Кампаній у Keitaro: '.count($campaigns));

        $dryRun = (bool) $this->option('dry-run');
        $rows = [];
        $updated = 0;

        foreach (Offer::query()->orderBy('id')->get() as $offer) {
            $match = $this->findCampaign($campaigns, $offer->domain, $offer->brand);
            $current = $offer->keitaro_campaign_id;
            $foundId = $match['id'] ?? null;
            $changed = false;

            if ($foundId && (int) $current !== (int) $foundId) {
                if (! $dryRun) {
                    $offer->update([
                        'keitaro_campaign_id' => $foundId,
                        'keitaro_alias' => $match['alias'] ?? $offer->keitaro_alias,
                    ]);
                    $this->updateManifestKeitaro($offer->folder, $offer->fresh());
                }
                $changed = true;
                $updated++;
            }

            $rows[] = [
                $offer->id,
                $offer->domain,
                $current ?? '—',
                $foundId ?? '—',
                $match['name'] ?? '—',
                $foundId && (int) $current === (int) $foundId ? '✓' : ($changed ? 'оновлено' : ($foundId ? 'різний ID' : '—')),
            ];
        }

        $this->table(['ID', 'Домен', 'БД', 'Keitaro', 'Назва кампанії', 'Статус'], $rows);

        if ($dryRun) {
            $this->warn("Dry-run — знайдено {$updated} змін");
        } else {
            $this->info("Оновлено: {$updated}");
        }

        return self::SUCCESS;
    }

    /**
     * @param  list<array{id: int, name: string, alias: string}>  $campaigns
     * @return array{id: int, name: string, alias: string}|null
     */
    private function findCampaign(array $campaigns, string $domain, string $brand): ?array
    {
        $domain = strtolower($domain);
        $brandLower = mb_strtolower($brand);

        foreach ($campaigns as $campaign) {
            $name = mb_strtolower($campaign['name']);

            if (str_contains($name, $domain)) {
                return $campaign;
            }
        }

        foreach ($campaigns as $campaign) {
            $name = mb_strtolower($campaign['name']);

            if (str_contains($name, $brandLower)) {
                return $campaign;
            }
        }

        return null;
    }

    private function updateManifestKeitaro(string $folder, Offer $offer): void
    {
        $path = base_path('offers/'.$folder.'/manifest.json');

        if (! File::exists($path)) {
            return;
        }

        $manifest = json_decode(File::get($path), true);

        if (! is_array($manifest)) {
            return;
        }

        $manifest['keitaro_campaign_id'] = $offer->keitaro_campaign_id;
        $manifest['keitaro_alias'] = $offer->keitaro_alias;

        File::put($path, json_encode($manifest, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)."\n");
    }
}
