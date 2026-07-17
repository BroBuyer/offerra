<?php

namespace App\Console\Commands;

use App\Models\Offer;
use App\Models\User;
use App\Services\DeployService;
use App\Services\KeitaroClient;
use App\Services\OfferGenerator;
use Illuminate\Console\Command;

class RepairKeitaroIntegrations extends Command
{
    protected $signature = 'offers:repair-keitaro
        {--user= : ID користувача}
        {--deploy : Повний redeploy оффера}
        {--push-config : Залити лише includes/config.php на сервер}
        {--only-deployed : Лише status=deployed}
        {--limit=0 : Максимум офферів (0 = усі)}';

    protected $description = 'Відновити Keitaro token у config, додати default stream, залити config або redeploy';

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

        if ($this->option('only-deployed')) {
            $query->where('status', 'deployed');
        }

        $limit = (int) $this->option('limit');
        $offers = $limit > 0 ? $query->limit($limit)->get() : $query->get();
        $shouldDeploy = (bool) $this->option('deploy');
        $shouldPushConfig = (bool) $this->option('push-config');

        if (! $shouldDeploy && ! $shouldPushConfig) {
            $shouldPushConfig = true;
        }

        $admin = User::query()->where('role', 'admin')->orderBy('id')->first();

        $ok = 0;
        $failed = 0;
        $skipped = 0;

        foreach ($offers as $offer) {
            $settings = $offer->user?->settings;

            if (! $settings || ! $settings->keitaro_api_key) {
                $this->warn("Skip #{$offer->id} {$offer->domain}: no Keitaro settings");
                $skipped++;

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

                if (trim((string) $offer->fresh()->keitaro_campaign_token) === '') {
                    throw new \RuntimeException('Не вдалося отримати Keitaro token.');
                }

                try {
                    $keitaro->ensureDefaultStream($settings, (int) $offer->keitaro_campaign_id);
                } catch (\Throwable $streamError) {
                    if (! str_contains(strtolower($streamError->getMessage()), 'only one default flow')) {
                        throw $streamError;
                    }
                }

                $generator->refreshConfig($offer->fresh());

                if ($shouldDeploy && $offer->status === 'deployed' && $offer->user) {
                    $deploy->deploy($offer->user, $offer->fresh());
                } elseif ($shouldPushConfig && $offer->status === 'deployed' && $offer->user) {
                    try {
                        $deploy->pushConfig($offer->user, $offer->fresh());
                    } catch (\Throwable $ownerError) {
                        if ($admin && $admin->id !== $offer->user_id && $deploy->settingsReady($admin->settings)) {
                            $this->line('  → retry via admin SFTP');
                            $deploy->pushConfig($admin, $offer->fresh());
                        } else {
                            throw $ownerError;
                        }
                    }
                }

                $ok++;
            } catch (\Throwable $e) {
                $failed++;
                $this->error("  FAIL: {$e->getMessage()}");
            }
        }

        $this->newLine();
        $this->info("Готово: ok={$ok}, fail={$failed}, skip={$skipped}");

        return $failed > 0 ? self::FAILURE : self::SUCCESS;
    }
}
