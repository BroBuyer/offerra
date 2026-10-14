<?php

namespace Tests\Feature;

use App\Models\Offer;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class CrmLeadResendTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_cannot_open_leads_page(): void
    {
        $this->get('/leads')->assertRedirect('/login');
    }

    public function test_user_can_resend_lead_for_own_offer(): void
    {
        Http::fake([
            'https://yourleads.org/api/affiliates/v2/leads' => Http::response([
                'lead_uuid' => '7b70a456-d7db-42fd-b1ca-250b59d776da',
                'auto_login_url' => 'https://example.test/go',
            ], 200),
        ]);

        $user = User::factory()->create();
        $user->settings()->create([
            'affiliate_tag' => 'EGO',
            'crm_api_key' => 'test-crm-key',
        ]);

        Offer::query()->create([
            'user_id' => $user->id,
            'folder' => 'vinci-ai.org',
            'brand' => 'Vinci AI',
            'domain' => 'vinci-ai.org',
            'geo' => 'IT',
            'lang' => 'it',
            'template' => 'default',
            'status' => 'deployed',
            'from_search_team' => false,
        ]);

        $response = $this->actingAs($user)->postJson('/leads', [
            'dump' => <<<'TXT'
Name: Lucia Braschi
Email: lucia.braschi@icloud.com
Phone: +393922333949
Affiliate: EGO
Funnel: Vinci AI
Domain: vinci-ai.org (https://vinci-ai.org/)
Country (offer): IT
IP: 5.91.126.157
Language: it
SubID: 1g6fae0.1277.r71pg
TXT,
        ]);

        $response->assertOk()
            ->assertJsonPath('ok', true)
            ->assertJsonPath('crm.lead_uuid', '7b70a456-d7db-42fd-b1ca-250b59d776da')
            ->assertJsonPath('payload.aff_sub3', '1g6fae0.1277.r71pg')
            ->assertJsonPath('payload.affiliate_id', 'EGO');

        Http::assertSent(function ($request) {
            return $request->url() === 'https://yourleads.org/api/affiliates/v2/leads'
                && $request->hasHeader('Authorization', 'test-crm-key')
                && $request['email'] === 'lucia.braschi@icloud.com'
                && $request['phone'] === '+393922333949'
                && $request['ip'] === '5.91.126.157';
        });
    }

    public function test_user_cannot_resend_someone_elses_offer(): void
    {
        $owner = User::factory()->create();
        $owner->settings()->create([
            'affiliate_tag' => 'EGO',
            'crm_api_key' => 'test-crm-key',
        ]);
        Offer::query()->create([
            'user_id' => $owner->id,
            'folder' => 'vinci-ai.org',
            'brand' => 'Vinci AI',
            'domain' => 'vinci-ai.org',
            'geo' => 'IT',
            'lang' => 'it',
            'template' => 'default',
            'status' => 'deployed',
        ]);

        $other = User::factory()->create();
        $other->settings()->create(['affiliate_tag' => 'BRO']);

        $this->actingAs($other)->postJson('/leads', [
            'email' => 'lucia.braschi@icloud.com',
            'phone' => '+393922333949',
            'first_name' => 'Lucia',
            'domain' => 'vinci-ai.org',
        ])->assertStatus(422)->assertJsonPath('ok', false);
    }
}
