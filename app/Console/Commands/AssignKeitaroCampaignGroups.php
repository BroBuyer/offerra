<?php

namespace App\Console\Commands;

use App\Models\Offer;
use App\Services\KeitaroClient;
use Illuminate\Console\Command;

class AssignKeitaroCampaignGroups extends Command
{
    protected $signature = 'offers:assign-keitaro-groups
        {--dry-run : Лише показати, без PUT}
        {--limit=0 : Максимум офферів (0 = усі)}
        {--pause=0 : Пауза між запитами (сек)}';

    protected $description = 'Поставити кампанії Keitaro в групу BRO/EGO/JEL замість невидимого group_id';

    public function handle(KeitaroClient $keitaro): int
    {
        $dryRun = (bool) $this->option('dry-run');
        $limit = (int) $this->option('limit');
        $pause = max(0, (int) $this->option('pause'));

        $offers = Offer::query()
            ->with('user.settings')
            ->whereNotNull('keitaro_campaign_id')
            ->where('keitaro_campaign_id', '>', 0)
            ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
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
                $skipped++;

                continue;
            }

            $processed++;
            $campaignId = (int) $offer->keitaro_campaign_id;
            $this->line(
                ($dryRun ? 'WOULD ASSIGN' : 'ASSIGN')
                ." #{$offer->id} KT #{$campaignId} {$offer->domain} tag=".($settings->affiliate_tag ?: '-')
            );

            if ($dryRun) {
                $ok++;

                continue;
            }

            try {
                $keitaro->ensureCampaignGroup($settings, $campaignId);
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
