<?php

namespace App\Console\Commands;

use App\Models\Offer;
use App\Models\User;
use App\Services\DeployService;
use App\Services\KeitaroClient;
use App\Services\OfferGenerator;
use Illuminate\Console\Command;

class RecreateMissingKeitaroCampaigns extends Command
{
    protected $signature = 'offers:recreate-missing-keitaro
        {--dry-run : Лише аудит, без створення}
        {--push-config : Залити includes/config.php після recreate}
        {--limit=0 : Максимум офферів на обробку (0 = усі)}
        {--pause=1 : Пауза між офферами (сек)}';

    protected $description = 'Створити відсутні кампанії Keitaro для deployed офферів і оновити config';

    public function handle(
        KeitaroClient $keitaro,
        OfferGenerator $generator,
        DeployService $deploy,
    ): int {
        $dryRun = (bool) $this->option('dry-run');
        $shouldPush = (bool) $this->option('push-config');
        $limit = (int) $this->option('limit');
        $pause = max(0, (int) $this->option('pause'));

        $offers = Offer::query()
            ->with('user.settings')
            ->where('status', 'deployed')
            ->whereNotNull('folder')
            ->orderBy('id')
            ->get();

        $admin = User::query()->where('role', 'admin')->orderBy('id')->first();

        /** @var array<int, array<int, true>> $existsByUser */
        $existsByUser = [];

        $okExists = 0;
        $okCreated = 0;
        $okPushed = 0;
        $skipped = 0;
        $failed = 0;
        $missing = [];

        $this->info(($dryRun ? '[DRY-RUN] ' : '').'Deployed offers: '.$offers->count());

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

            $userId = (int) $offer->user_id;

            if (! isset($existsByUser[$userId])) {
                try {
                    $ids = [];
                    foreach ($keitaro->listCampaigns($settings) as $campaign) {
                        $ids[(int) $campaign['id']] = true;
                    }
                    $existsByUser[$userId] = $ids;
                    $this->line("  loaded KT campaigns for user #{$userId}: ".count($ids));
                } catch (\Throwable $e) {
                    $this->error("Skip user #{$userId} KT list fail: {$e->getMessage()}");
                    $skipped++;

                    continue;
                }
            }

            $oldId = (int) ($offer->keitaro_campaign_id ?? 0);
            // After KT wipe, new campaigns may reuse old numeric IDs.
            // Only treat as OK if the campaign at that ID actually belongs to this domain.
            $exists = false;
            if ($oldId > 0 && isset($existsByUser[$userId][$oldId])) {
                $campaign = $keitaro->getCampaign($settings, $oldId);
                $name = (string) ($campaign['name'] ?? '');
                $exists = $campaign !== null && str_contains($name, (string) $offer->domain);
            }

            if ($exists) {
                $okExists++;

                continue;
            }

            $processed++;
            $missing[] = [
                'id' => $offer->id,
                'domain' => $offer->domain,
                'old_kt' => $oldId ?: null,
            ];

            $this->line(
                ($dryRun ? 'MISSING' : 'RECREATE')
                ." #{$offer->id} {$offer->domain} (old KT ".($oldId ?: 'none').')'
            );

            if ($dryRun) {
                continue;
            }

            try {
                $created = $keitaro->createCampaign($settings, [
                    'brand' => $offer->brand,
                    'domain' => $offer->domain,
                    'geo' => $offer->geo,
                    'lang' => $offer->lang,
                    'affiliate_tag' => $settings->affiliate_tag,
                    'created_at' => $offer->created_at,
                ]);

                $offer->update([
                    'keitaro_campaign_id' => $created['id'],
                    'keitaro_alias' => $created['alias'],
                    'keitaro_campaign_token' => $created['token'],
                ]);
                $offer->refresh();

                $existsByUser[$userId][(int) $created['id']] = true;
                $generator->refreshConfig($offer);
                $okCreated++;

                $this->info(
                    "  → KT #{$created['id']}"
                    .($created['reused'] ? ' (reused)' : ' (new)')
                    ." alias={$created['alias']}"
                );

                if ($shouldPush && $offer->user) {
                    try {
                        $deploy->pushConfig($offer->user, $offer->fresh());
                        $okPushed++;
                        $this->line('  → config pushed (owner)');
                    } catch (\Throwable $ownerError) {
                        if ($admin && $admin->id !== $offer->user_id && $deploy->settingsReady($admin->settings)) {
                            $deploy->pushConfig($admin, $offer->fresh());
                            $okPushed++;
                            $this->line('  → config pushed (admin fallback)');
                        } else {
                            throw $ownerError;
                        }
                    }
                }
            } catch (\Throwable $e) {
                $failed++;
                $this->error("  FAIL: {$e->getMessage()}");
            }

            if ($pause > 0) {
                sleep($pause);
            }
        }

        $this->newLine();
        $this->info('Summary:');
        $this->line("  ok_exists={$okExists}");
        $this->line('  missing='.count($missing));
        $this->line("  created={$okCreated}");
        $this->line("  pushed={$okPushed}");
        $this->line("  skipped={$skipped}");
        $this->line("  failed={$failed}");

        if ($dryRun && $missing !== []) {
            $this->newLine();
            $this->line('Missing sample (up to 30):');
            foreach (array_slice($missing, 0, 30) as $row) {
                $this->line("  #{$row['id']} {$row['domain']} old_kt=".($row['old_kt'] ?? 'none'));
            }
            if (count($missing) > 30) {
                $this->line('  ... +'.(count($missing) - 30).' more');
            }
        }

        return $failed > 0 ? self::FAILURE : self::SUCCESS;
    }
}
