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

    public function test_template_totals_use_own_geo_clicks_leads_and_deposits(): void
    {
        Http::fake();

        $user = User::factory()->create();
        $this->seedTemplates($user);

        $this->actingAs($user)
            ->get(route('offers.stats'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Panel/Offers/Stats')
                ->where('templateTotals.0.template', 'lumen')
                ->where('templateTotals.0.clicks', 90)
                ->where('templateTotals.0.leads', 50)
                ->where('templateTotals.0.deposits', 4)
                ->where('templateTotals.1.template', 'audax')
                ->where('templateTotals.1.clicks', 40)
                ->where('templateTotals.1.leads', 10)
                ->where('templateTotals.1.deposits', 1));

        Http::assertNothingSent();
    }

    public function test_template_week_query_does_not_call_keitaro_or_replace_own_stats(): void
    {
        Http::fake();

        $user = User::factory()->create();
        $user->settings()->create([
            'keitaro_url' => 'https://clickmetrics.test',
            'keitaro_api_key' => 'test-kt-key',
        ]);
        $this->seedTemplates($user);

        $this->actingAs($user)
            ->get(route('offers.stats', ['tpl_week' => '2026-10-28']))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->where('templateTotals.0.template', 'lumen')
                ->where('templateTotals.0.leads', 50)
                ->where('templateTotals.0.deposits', 4)
                ->missing('templatePeriod'));

        Http::assertNothingSent();
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
