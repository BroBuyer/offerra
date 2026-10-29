<?php

namespace Tests\Feature;

use App\Models\Offer;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class OfferStatsTemplateWeekTest extends TestCase
{
    use RefreshDatabase;

    public function test_template_totals_are_lifetime_without_week(): void
    {
        Http::fake();

        $user = $this->userWithKeitaro();
        $this->seedTemplates($user);

        $this->actingAs($user)
            ->get(route('offers.stats'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Panel/Offers/Stats')
                ->where('templatePeriod.source', 'lifetime')
                ->where('templateTotals.0.template', 'lumen')
                ->where('templateTotals.0.leads', 50)
                ->where('templateTotals.0.clicks', 90)
                ->where('templateTotals.1.template', 'audax')
                ->where('templateTotals.1.leads', 10));

        Http::assertNothingSent();
    }

    public function test_template_week_uses_keitaro_range_monday_to_sunday(): void
    {
        Http::fake([
            'https://clickmetrics.test/admin_api/v1/report/build' => Http::response([
                'rows' => [
                    ['campaign_id' => 101, 'clicks' => 80, 'leads' => 7, 'sales' => 1],
                    ['campaign_id' => 202, 'clicks' => 200, 'leads' => 20, 'sales' => 3],
                ],
            ], 200),
        ]);

        $user = $this->userWithKeitaro();
        $this->seedTemplates($user);

        $this->actingAs($user)
            ->get(route('offers.stats', ['tpl_week' => '2026-10-28']))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Panel/Offers/Stats')
                ->where('templatePeriod.source', 'keitaro')
                ->where('templatePeriod.week', '2026-10-28')
                ->where('templatePeriod.from', '2026-10-26')
                ->where('templatePeriod.to', '2026-11-01')
                ->where('filters.tpl_week', '2026-10-28')
                ->where('templateTotals.0.template', 'audax')
                ->where('templateTotals.0.leads', 20)
                ->where('templateTotals.0.clicks', 200)
                ->where('templateTotals.0.deposits', 3)
                ->where('templateTotals.0.offers_count', 1)
                ->where('templateTotals.1.template', 'lumen')
                ->where('templateTotals.1.leads', 7)
                ->where('templateTotals.1.clicks', 80)
                ->where('templateTotals.1.deposits', 1));

        Http::assertSent(function ($request) {
            $body = $request->data();

            return $request->url() === 'https://clickmetrics.test/admin_api/v1/report/build'
                && ($body['range']['from'] ?? null) === '2026-10-26'
                && ($body['range']['to'] ?? null) === '2026-11-01'
                && ($body['range']['timezone'] ?? null) === 'Europe/Kyiv'
                && in_array('clicks', $body['metrics'] ?? [], true)
                && empty($body['filters']);
        });
    }

    public function test_invalid_tpl_week_falls_back_to_lifetime(): void
    {
        Http::fake();

        $user = $this->userWithKeitaro();
        $this->seedTemplates($user);

        $this->actingAs($user)
            ->get(route('offers.stats', ['tpl_week' => 'not-a-date']))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->where('templatePeriod.source', 'lifetime')
                ->where('filters.tpl_week', '')
                ->where('templateTotals.0.leads', 50));

        Http::assertNothingSent();
    }

    private function userWithKeitaro(): User
    {
        $user = User::factory()->create();
        $user->settings()->create([
            'keitaro_url' => 'https://clickmetrics.test',
            'keitaro_api_key' => 'test-kt-key',
        ]);

        return $user;
    }

    private function seedTemplates(User $user): void
    {
        $lumen = Offer::query()->create([
            'user_id' => $user->id,
            'folder' => 'lumen-stats.test',
            'brand' => 'LumenBrand',
            'domain' => 'lumen-stats.test',
            'geo' => 'IT',
            'lang' => 'it',
            'template' => 'lumen',
            'status' => 'deployed',
            'keitaro_campaign_id' => 101,
            'from_search_team' => false,
        ]);
        $lumen->ensureStats()->update([
            'clicks_geo_count' => 90,
            'leads_count' => 50,
            'deposits_count' => 4,
        ]);

        $audax = Offer::query()->create([
            'user_id' => $user->id,
            'folder' => 'audax-stats.test',
            'brand' => 'AudaxBrand',
            'domain' => 'audax-stats.test',
            'geo' => 'DE',
            'lang' => 'de',
            'template' => 'audax',
            'status' => 'deployed',
            'keitaro_campaign_id' => 202,
            'from_search_team' => false,
        ]);
        $audax->ensureStats()->update([
            'clicks_geo_count' => 40,
            'leads_count' => 10,
            'deposits_count' => 1,
        ]);
    }
}
