<?php

namespace App\Console\Commands;

use App\Models\Offer;
use App\Services\KeitaroClient;
use Illuminate\Console\Command;

class SyncKeitaroS2sPostbacks extends Command
{
    protected $signature = 'keitaro:sync-s2s-postbacks
        {--user= : ID користувача}
        {--limit=0 : Максимум офферів (0 = усі)}
        {--from-id=0 : Продовжити з offers.id >= N}
        {--sleep-ms=200 : Пауза між кампаніями (rate limit)}
        {--dry-run : Лише показати, без PUT в Keitaro}';

    protected $description = 'Пройтись по кампаніях Keitaro і проставити panel S2S (lead + sale) без зламу інших постбеків';

    public function handle(KeitaroClient $keitaro): int
    {
        $query = Offer::query()
            ->with('user.settings')
            ->whereNotNull('keitaro_campaign_id')
            ->where('keitaro_campaign_id', '>', 0)
            ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
            ->orderBy('id');

        if ($userId = $this->option('user')) {
            $query->where('user_id', (int) $userId);
        }

        $fromId = (int) $this->option('from-id');
        if ($fromId > 0) {
            $query->where('id', '>=', $fromId);
        }

        $limit = (int) $this->option('limit');
        if ($limit > 0) {
            $query->limit($limit);
        }

        $offers = $query->get();
        $sleepMs = max(0, (int) $this->option('sleep-ms'));
        $dryRun = (bool) $this->option('dry-run');

        $this->info('offers with KT campaign: '.$offers->count().($dryRun ? ' (dry-run)' : ''));

        $stats = [
            'updated' => 0,
            'already_ok' => 0,
            'skip' => 0,
            'failed' => 0,
        ];

        $seenCampaigns = [];

        foreach ($offers as $offer) {
            $campaignId = (int) $offer->keitaro_campaign_id;
            $settings = $offer->user?->settings;

            if (! $settings || ! filled($settings->keitaro_api_key)) {
                $stats['skip']++;
                $this->line("skip #{$offer->id} {$offer->domain} — no KT API key");
                continue;
            }

            if (isset($seenCampaigns[$campaignId])) {
                continue;
            }
            $seenCampaigns[$campaignId] = true;

            if ($dryRun) {
                $this->line("dry #{$offer->id} {$offer->domain} KT={$campaignId}");
                $stats['updated']++;
                continue;
            }

            try {
                $result = $keitaro->ensureSalesS2sPostback($settings, $campaignId);
            } catch (\Throwable $e) {
                $stats['failed']++;
                $this->warn("FAIL #{$offer->id} {$offer->domain} KT={$campaignId} (exception: {$e->getMessage()})");
                if ($sleepMs > 0) {
                    usleep(max($sleepMs, 500) * 1000);
                }
                continue;
            }

            $reason = $result['reason'] ?? '';

            if ($result['changed'] ?? false) {
                $stats['updated']++;
                $this->line("OK  #{$offer->id} {$offer->domain} KT={$campaignId} ({$reason})");
            } elseif ($reason === 'already_ok') {
                $stats['already_ok']++;
            } elseif ($reason === 'skip') {
                $stats['skip']++;
            } else {
                $stats['failed']++;
                $this->warn("FAIL #{$offer->id} {$offer->domain} KT={$campaignId} ({$reason})");
                if ($sleepMs > 0) {
                    usleep(max($sleepMs, 500) * 1000);
                }
                continue;
            }

            if ($sleepMs > 0) {
                usleep($sleepMs * 1000);
            }
        }

        $this->newLine();
        $this->info(sprintf(
            'done updated=%d already_ok=%d skip=%d failed=%d unique_campaigns=%d',
            $stats['updated'],
            $stats['already_ok'],
            $stats['skip'],
            $stats['failed'],
            count($seenCampaigns),
        ));

        return $stats['failed'] > 0 ? self::FAILURE : self::SUCCESS;
    }
}
