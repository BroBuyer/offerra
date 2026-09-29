<?php

namespace App\Console\Commands;

use App\Models\Offer;
use App\Models\OfferStat;
use App\Models\UserSetting;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class BackfillOfferStatsFromKeitaro extends Command
{
    protected $signature = 'offer-stats:backfill-from-keitaro
        {--user= : ID користувача (settings / offers)}
        {--from=2020-01-01 : Початок періоду}
        {--dry-run : Лише показати, без запису в БД}';

    protected $description = 'Підтягнути lifetime leads/sales з Keitaro report і записати в offer_stats';

    public function handle(): int
    {
        $dryRun = (bool) $this->option('dry-run');
        $from = trim((string) $this->option('from')) ?: '2020-01-01';
        $to = now()->format('Y-m-d');

        $settingsQuery = UserSetting::query()
            ->whereNotNull('keitaro_api_key')
            ->where('keitaro_api_key', '!=', '');

        if ($userId = $this->option('user')) {
            $settingsQuery->where('user_id', (int) $userId);
        }

        $settingsList = $settingsQuery->orderBy('user_id')->get();
        if ($settingsList->isEmpty()) {
            $this->error('No Keitaro API keys in user_settings');

            return self::FAILURE;
        }

        // Same KT instance often shared — pull once per unique base+key
        $pulled = [];
        /** @var array<int, array{leads:int,sales:int}> $byCampaign */
        $byCampaign = [];

        foreach ($settingsList as $settings) {
            $base = rtrim((string) ($settings->keitaro_url ?: 'https://clickmetrics38.com'), '/');
            $key = (string) $settings->keitaro_api_key;
            $fingerprint = $base.'|'.$key;

            if (isset($pulled[$fingerprint])) {
                continue;
            }
            $pulled[$fingerprint] = true;

            $this->info("report user={$settings->user_id} {$base} {$from}..{$to}");

            $rows = $this->fetchCampaignTotals($base, $key, $from, $to);
            if ($rows === null) {
                $this->warn("report failed for user={$settings->user_id}");
                continue;
            }

            $this->info('KT rows: '.count($rows));

            foreach ($rows as $row) {
                $cid = (int) ($row['campaign_id'] ?? 0);
                if ($cid <= 0) {
                    continue;
                }
                $leads = (int) ($row['leads'] ?? 0);
                $sales = (int) ($row['sales'] ?? 0);
                if ($leads === 0 && $sales === 0) {
                    continue;
                }
                // Prefer max if same campaign seen from multiple keys
                $prev = $byCampaign[$cid] ?? ['leads' => 0, 'sales' => 0];
                $byCampaign[$cid] = [
                    'leads' => max($prev['leads'], $leads),
                    'sales' => max($prev['sales'], $sales),
                ];
            }
        }

        $this->info('campaigns with conversions: '.count($byCampaign));

        $offers = Offer::query()
            ->whereNotNull('keitaro_campaign_id')
            ->where('keitaro_campaign_id', '>', 0)
            ->when($this->option('user'), fn ($q) => $q->where('user_id', (int) $this->option('user')))
            ->get(['id', 'domain', 'keitaro_campaign_id', 'user_id']);

        $updated = 0;
        $matched = 0;
        $skippedZero = 0;
        $now = now();

        foreach ($offers as $offer) {
            $cid = (int) $offer->keitaro_campaign_id;
            $totals = $byCampaign[$cid] ?? null;
            if ($totals === null) {
                $skippedZero++;
                continue;
            }

            $matched++;
            $leads = $totals['leads'];
            $sales = $totals['sales'];

            $this->line(sprintf(
                '#%d %s KT=%d leads=%d sales=%d',
                $offer->id,
                $offer->domain,
                $cid,
                $leads,
                $sales,
            ));

            if ($dryRun) {
                $updated++;
                continue;
            }

            $stats = $offer->ensureStats();
            $stats->leads_count = $leads;
            $stats->deposits_count = $sales;

            // Historical backfill has no exact last conversion time from this report —
            // stamp "now" so archive logic does not treat them as dead. Live postbacks
            // will refresh these timestamps going forward.
            if ($leads > 0) {
                $stats->last_lead_at = $now;
            }
            if ($sales > 0) {
                $stats->last_deposit_at = $now;
            }

            $stats->save();
            $updated++;
        }

        $this->newLine();
        $this->info(sprintf(
            'done matched=%d updated=%d offers_without_kt_conv=%d dry=%s',
            $matched,
            $updated,
            $skippedZero,
            $dryRun ? 'yes' : 'no',
        ));

        // Sanity: how many stats non-zero now
        if (! $dryRun) {
            $withLeads = OfferStat::query()->where('leads_count', '>', 0)->count();
            $withDeps = OfferStat::query()->where('deposits_count', '>', 0)->count();
            $this->info("offer_stats now: leads>0={$withLeads} deposits>0={$withDeps}");
        }

        return self::SUCCESS;
    }

    /**
     * @return list<array<string, mixed>>|null
     */
    private function fetchCampaignTotals(string $base, string $apiKey, string $from, string $to): ?array
    {
        try {
            $res = Http::withHeaders([
                'Api-Key' => $apiKey,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ])
                ->timeout(120)
                ->post("{$base}/admin_api/v1/report/build", [
                    'range' => [
                        'from' => $from,
                        'to' => $to,
                        'timezone' => 'Europe/Kyiv',
                    ],
                    'dimensions' => ['campaign_id'],
                    'metrics' => ['leads', 'sales', 'conversions'],
                    'filters' => [
                        [
                            'name' => 'conversions',
                            'operator' => 'GREATER_THAN',
                            'expression' => 0,
                        ],
                    ],
                ]);
        } catch (\Throwable $e) {
            $this->warn('HTTP exception: '.$e->getMessage());

            return null;
        }

        if ($res->failed()) {
            $this->warn('HTTP '.$res->status().' '.substr($res->body(), 0, 200));

            return null;
        }

        $rows = $res->json('rows');

        return is_array($rows) ? $rows : null;
    }
}
