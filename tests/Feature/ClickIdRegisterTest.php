<?php

namespace Tests\Feature;

use App\Models\LanderClick;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ClickIdRegisterTest extends TestCase
{
    use RefreshDatabase;

    public function test_lander_beacon_stores_click_id_for_later_postback(): void
    {
        $user = User::factory()->create();
        $geoToken = 'dddddddddddddddddddddddddddddddd';
        $user->settings()->create([
            'geo_click_token' => $geoToken,
        ]);

        Offer::query()->create([
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

        $this->get('/api/v1/click/'.$geoToken.'?cid=abc12345def67890&d=click-id.test')
            ->assertNoContent();

        $click = LanderClick::query()->where('click_id', 'abc12345def67890')->first();
        $this->assertNotNull($click);
        $this->assertSame($user->id, $click->user_id);
        $this->assertSame('click-id.test', $click->domain);
        $this->assertNotNull($click->offer_id);
    }

    public function test_garbage_click_id_is_ignored(): void
    {
        $user = User::factory()->create();
        $geoToken = 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee';
        $user->settings()->create([
            'geo_click_token' => $geoToken,
        ]);

        $this->get('/api/v1/click/'.$geoToken.'?cid=<script>')
            ->assertNoContent();

        $this->assertSame(0, LanderClick::query()->count());
    }
}
