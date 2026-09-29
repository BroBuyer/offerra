<?php

namespace App\Services;

use App\Models\Offer;
use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class KeitaroTodayStats
{
    /**
     * Sum of Keitaro leads/sales for today (Europe/Kyiv), limited to campaign IDs of scoped offers.
     *
     * @return array{leads: int, sales: int, campaigns: int, cached: bool}
     */
    public function forOffers(Collection $offers): array
    {
        $campaignIds = $offers
            ->pluck('keitaro_campaign_id')
            ->filter(fn ($id) => (int) $id > 0)
            ->map(fn ($id) => (int) $id)
            ->unique()
            ->values()
            ->all();

        if ($campaignIds === []) {
            return ['leads' => 0, 'sales' => 0, 'campaigns' => 0, 'cached' => false];
        }

        $userIds = $offers->pluck('user_id')->unique()->sort()->values()->all();
        $today = now('Europe/Kyiv')->toDateString();
        $cacheKey = 'dash.kt_today.'.$today.'.'.md5(implode(',', $userIds).'|'.implode(',', $campaignIds));

        /** @var array{leads: int, sales: int, campaigns: int} $payload */
        $payload = Cache::remember($cacheKey, now()->addMinutes(3), function () use ($userIds, $campaignIds) {
            return $this->pullToday($userIds, $campaignIds);
        });

        return [
            'leads' => (int) ($payload['leads'] ?? 0),
            'sales' => (int) ($payload['sales'] ?? 0),
            'campaigns' => (int) ($payload['campaigns'] ?? 0),
            'cached' => true,
        ];
    }

    /**
     * @param  list<int>  $userIds
     * @param  list<int>  $campaignIds
     * @return array{leads: int, sales: int, campaigns: int}
     */
    private function pullToday(array $userIds, array $campaignIds): array
    {
        $wanted = array_fill_keys($campaignIds, true);
        $byCampaign = [];
        $pulled = [];

        $settingsList = UserSetting::query()
            ->whereIn('user_id', $userIds)
            ->whereNotNull('keitaro_api_key')
            ->where('keitaro_api_key', '!=', '')
            ->get();

        // Admin viewing all users: also pull every KT key on the panel so shared tracker is covered.
        if ($settingsList->isEmpty()) {
            return ['leads' => 0, 'sales' => 0, 'campaigns' => 0];
        }

        $today = now('Europe/Kyiv')->toDateString();

        foreach ($settingsList as $settings) {
            $base = rtrim((string) ($settings->keitaro_url ?: 'https://clickmetrics38.com'), '/');
            $key = (string) $settings->keitaro_api_key;
            $fp = $base.'|'.$key;
            if (isset($pulled[$fp])) {
                continue;
            }
            $pulled[$fp] = true;

            $rows = $this->fetchTodayRows($base, $key, $today);
            if ($rows === null) {
                continue;
            }

            foreach ($rows as $row) {
                if (! is_array($row)) {
                    continue;
                }
                $cid = (int) ($row['campaign_id'] ?? 0);
                if ($cid <= 0 || ! isset($wanted[$cid])) {
                    continue;
                }
                $leads = (int) ($row['leads'] ?? 0);
                $sales = (int) ($row['sales'] ?? 0);
                if ($leads === 0 && $sales === 0) {
                    continue;
                }
                $prev = $byCampaign[$cid] ?? ['leads' => 0, 'sales' => 0];
                $byCampaign[$cid] = [
                    'leads' => max($prev['leads'], $leads),
                    'sales' => max($prev['sales'], $sales),
                ];
            }
        }

        $leads = 0;
        $sales = 0;
        foreach ($byCampaign as $tot) {
            $leads += $tot['leads'];
            $sales += $tot['sales'];
        }

        return [
            'leads' => $leads,
            'sales' => $sales,
            'campaigns' => count($byCampaign),
        ];
    }

    /**
     * @return list<array<string, mixed>>|null
     */
    private function fetchTodayRows(string $base, string $apiKey, string $today): ?array
    {
        try {
            $res = Http::withHeaders([
                'Api-Key' => $apiKey,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ])
                ->timeout(45)
                ->post("{$base}/admin_api/v1/report/build", [
                    'range' => [
                        'from' => $today,
                        'to' => $today,
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
            Log::warning('KeitaroTodayStats: report exception', ['error' => $e->getMessage()]);

            return null;
        }

        if ($res->failed()) {
            Log::warning('KeitaroTodayStats: report HTTP '.$res->status());

            return null;
        }

        $rows = $res->json('rows');

        return is_array($rows) ? $rows : null;
    }
}
