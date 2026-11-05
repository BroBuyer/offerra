<?php

namespace Tests\Feature;

use App\Models\LanderClick;
use App\Models\Offer;
use App\Models\User;
use App\Services\SalesPostbackService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class SalesPostbackTest extends TestCase
{
    use RefreshDatabase;

    public function test_unknown_click_is_ignored_like_foreign_keitaro_subid(): void
    {
        Http::fake();

        [$token] = $this->seedOffer();

        $this->get('/api/v1/postback/'.$token.'?subid=someone-elses-click&status=sale&payout=250')
            ->assertOk()
            ->assertSee('OK');

        $this->assertSame(0, Offer::query()->where('domain', 'click-id.test')->first()->ensureStats()->deposits_count);
        Http::assertNothingSent();
    }

    public function test_lead_postback_bumps_offer_stats_from_stored_click(): void
    {
        [$token] = $this->seedOffer(true);

        $this->get('/api/v1/postback/'.$token.'?subid=cafebabedeadbeef12345678&status=lead')
            ->assertOk()
            ->assertSee('OK');

        $stats = Offer::query()->where('domain', 'click-id.test')->first()->stats;
        $this->assertSame(1, $stats->leads_count);
        $this->assertSame(0, $stats->deposits_count);
    }

    public function test_sale_postback_notifies_telegram_and_counts_deposit(): void
    {
        Http::fake([
            'https://api.telegram.org/*' => Http::response(['ok' => true], 200),
        ]);

        [$token] = $this->seedOffer(true);

        $this->get('/api/v1/postback/'.$token.'?subid=cafebabedeadbeef12345678&status=sale&payout=250')
            ->assertOk()
            ->assertSee('OK');

        $stats = Offer::query()->where('domain', 'click-id.test')->first()->stats;
        $this->assertSame(1, $stats->deposits_count);

        Http::assertSent(function ($request) {
            return str_contains($request->url(), 'api.telegram.org')
                && str_contains((string) $request['text'], 'cafebabedeadbeef12345678')
                && str_contains((string) $request['text'], '$250');
        });
    }

    public function test_settings_shows_postback_urls_only_to_admin(): void
    {
        $admin = User::factory()->admin()->create();
        $admin->settings()->create([]);
        $user = User::factory()->create();
        $user->settings()->create([]);

        $this->actingAs($user)
            ->get(route('settings.index'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Panel/Settings/Index')
                ->missing('settings.lead_postback_url')
                ->missing('settings.sales_postback_url')
                ->missing('settings.sales_postback_token'));

        $this->actingAs($admin)
            ->get(route('settings.index'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Panel/Settings/Index')
                ->where('settings.lead_postback_url', fn ($url) => is_string($url) && str_contains($url, '/api/v1/postback/') && str_contains($url, 'status=lead'))
                ->where('settings.sales_postback_url', fn ($url) => is_string($url) && str_contains($url, '/api/v1/postback/') && str_contains($url, 'status=sale'))
                ->missing('settings.sales_postback_token'));
    }

    public function test_generated_urls_use_aff_sub_macros(): void
    {
        $user = User::factory()->create();
        $settings = $user->settings()->create([
            'sales_postback_token' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
        ]);

        $postbacks = app(SalesPostbackService::class);
        $global = $postbacks->ensureGlobalToken();

        $lead = $postbacks->leadPostbackUrl($settings);
        $sale = $postbacks->salePostbackUrl($settings);

        $this->assertStringContainsString('/api/v1/postback/'.$global, $lead);
        $this->assertStringContainsString('subid={aff_sub3}', $lead);
        $this->assertStringContainsString('status=lead', $lead);
        $this->assertStringNotContainsString('aff_sub4', $lead);
        $this->assertStringNotContainsString('domain=', $lead);
        $this->assertStringContainsString('status=sale', $sale);
        $this->assertStringContainsString('payout={payout}', $sale);
        $this->assertStringNotContainsString('domain=', $sale);
    }

    public function test_shared_token_credits_click_owner_not_token_owner(): void
    {
        Http::fake([
            'https://api.telegram.org/*' => Http::response(['ok' => true], 200),
        ]);

        $admin = User::factory()->admin()->create();
        $admin->settings()->create([
            'sales_postback_token' => 'dddddddddddddddddddddddddddddddd',
            'tg_bot_token' => '1:admin',
            'tg_chat_id' => '111',
        ]);

        [$buyerToken] = $this->seedOffer(true);
        $buyer = User::query()->whereHas('settings', fn ($q) => $q->where('sales_postback_token', $buyerToken))->first();
        $this->assertNotNull($buyer);

        $global = app(SalesPostbackService::class)->ensureGlobalToken();

        $this->get('/api/v1/postback/'.$global.'?subid=cafebabedeadbeef12345678&status=lead')
            ->assertOk();
        $this->get('/api/v1/postback/'.$global.'?subid=cafebabedeadbeef12345678&status=sale&payout=80')
            ->assertOk();

        $stats = Offer::query()->where('domain', 'click-id.test')->first()->stats;
        $this->assertSame(1, $stats->leads_count);
        $this->assertSame(1, $stats->deposits_count);
        $this->assertSame(0, (int) ($admin->offers()->first()?->stats?->leads_count ?? 0));

        Http::assertSent(function ($request) {
            return str_contains($request->url(), 'api.telegram.org/bot123:abc/')
                && str_contains((string) $request['text'], 'cafebabedeadbeef12345678')
                && str_contains((string) $request['text'], '$80');
        });
        Http::assertNotSent(fn ($request) => str_contains($request->url(), 'bot1:admin/'));
    }

    /**
     * @return array{0: string}
     */
    private function seedOffer(bool $withClick = false): array
    {
        $user = User::factory()->create();
        $token = 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb';
        $user->settings()->create([
            'sales_postback_token' => $token,
            'geo_click_token' => 'cccccccccccccccccccccccccccccccc',
            'tg_bot_token' => '123:abc',
            'tg_chat_id' => '999',
        ]);

        $offer = Offer::query()->create([
            'user_id' => $user->id,
            'folder' => 'click-id.test',
            'brand' => 'ClickIdBrand',
            'domain' => 'click-id.test',
            'geo' => 'IT',
            'lang' => 'it',
            'template' => 'default',
            'status' => 'deployed',
            'from_search_team' => false,
        ]);

        if ($withClick) {
            LanderClick::query()->create([
                'user_id' => $user->id,
                'click_id' => 'cafebabedeadbeef12345678',
                'offer_id' => $offer->id,
                'domain' => 'click-id.test',
            ]);
        }

        return [$token];
    }
}
