<?php

namespace App\Console\Commands;

use App\Models\Offer;
use App\Services\KeitaroClient;
use Illuminate\Console\Command;

class RenameKeitaroCampaigns extends Command
{
    protected $signature = 'offers:rename-keitaro-campaigns
        {--dry-run : Лише показати нові назви}
        {--limit=0 : Максимум офферів (0 = усі)}
        {--pause=0 : Пауза між запитами (сек)}';

    protected $description = 'Перейменувати кампанії Keitaro: дата = created_at оффера';

    public function handle(KeitaroClient $keitaro): int
    {
        $dryRun = (bool) $this->option('dry-run');
        $limit = (int) $this->option('limit');
        $pause = max(0, (int) $this->option('pause'));

        $offers = Offer::query()
            ->with('user.settings')
            ->whereNotNull('keitaro_campaign_id')
            ->where('keitaro_campaign_id', '>', 0)
            ->whereNotNull('folder')
            ->orderBy('id')
            ->get();

        $this->info(($dryRun ? '[DRY-RUN] ' : '').'Offers with KT: '.$offers->count());

        $ok = 0;
        $skipped = 0;
        $failed = 0;
        $processed = 0;

        foreach ($offers as $offer) {
            if ($limit > 0 && $processed >= $limit) {
                break;
            }

            $settings = $offer->user?->settings;

            if (! $settings || ! $settings->keitaro_api_key) {
                $this->warn("Skip #{$offer->id} {$offer->domain}: no Keitaro API key");
                $skipped++;

                continue;
            }

            $processed++;
            $campaignId = (int) $offer->keitaro_campaign_id;
            $name = $keitaro->buildCampaignName([
                'brand' => $offer->brand,
                'domain' => $offer->domain,
                'geo' => $offer->geo,
                'lang' => $offer->lang,
                'affiliate_tag' => $settings->affiliate_tag,
                'created_at' => $offer->created_at,
            ], $settings->affiliate_tag);

            $this->line(
                ($dryRun ? 'WOULD RENAME' : 'RENAME')
                ." #{$offer->id} KT #{$campaignId} {$offer->domain}"
            );
            $this->line("  → {$name}");

            if ($dryRun) {
                $ok++;

                continue;
            }

            try {
                $keitaro->updateCampaignName($settings, $campaignId, $name);
                $ok++;
            } catch (\Throwable $e) {
                $failed++;
                $this->error('  FAIL: '.$e->getMessage());
            }

            if ($pause > 0) {
                sleep($pause);
            }
        }

        $this->newLine();
        $this->info("done ok={$ok} skipped={$skipped} failed={$failed}");

        return $failed > 0 ? self::FAILURE : self::SUCCESS;
    }
}
