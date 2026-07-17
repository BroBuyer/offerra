<?php

namespace App\Console\Commands;

use App\Models\Offer;
use App\Services\DeployService;
use App\Services\KeitaroClient;
use App\Services\OfferGenerator;
use Illuminate\Console\Command;

class RepairKeitaroIntegrations extends Command
{
    protected $signature = 'offers:repair-keitaro
        {--user= : ID користувача}
        {--deploy : Після оновлення config — redeploy на сервер}
        {--limit=0 : Максимум офферів (0 = усі)}';

    protected $description = 'Відновити Keitaro token у config, додати default stream і за потреби redeploy';

    public function handle(
        KeitaroClient $keitaro,
        OfferGenerator $generator,
        DeployService $deploy,
    ): int {
        $query = Offer::query()
            ->with('user.settings')
            ->whereNotNull('keitaro_campaign_id')
            ->where('status', '!=', 'archived')
            ->orderBy('id');

        if ($userId = $this->option('user')) {
            $query->where('user_id', (int) $userId);
        }

        $limit = (int) $this->option('limit');
        $offers = $limit > 0 ? $query->limit($limit)->get() : $query->get();
        $shouldDeploy = (bool) $this->option('deploy');

        $ok = 0;
        $failed = 0;

        foreach ($offers as $offer) {
            $settings = $offer->user?->settings;

            if (! $settings || ! $settings->keitaro_api_key) {
                $this->warn("Skip #{$offer->id} {$offer->domain}: no Keitaro settings");
                $failed++;

                continue;
            }

            $this->line("Repair #{$offer->id} {$offer->domain} (KT {$offer->keitaro_campaign_id})...");

            try {
                if (! trim((string) $offer->keitaro_campaign_token)) {
                    $campaign = $keitaro->getCampaign($settings, (int) $offer->keitaro_campaign_id);

                    if ($campaign && ($campaign['token'] ?? '') !== '') {
                        $offer->update(['keitaro_campaign_token' => $campaign['token']]);
                        $offer->refresh();
                    }
                }

                $keitaro->ensureDefaultStream($settings, (int) $offer->keitaro_campaign_id);
                $generator->refreshConfig($offer->fresh());

                if ($shouldDeploy && $offer->status === 'deployed' && $offer->user) {
                    $deploy->deploy($offer->user, $offer->fresh());
                }

                $ok++;
            } catch (\Throwable $e) {
                $failed++;
                $this->error("  FAIL: {$e->getMessage()}");
            }
        }

        $this->newLine();
        $this->info("Готово: ok={$ok}, fail={$failed}");

        return $failed > 0 ? self::FAILURE : self::SUCCESS;
    }
}
