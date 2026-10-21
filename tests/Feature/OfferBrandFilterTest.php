<?php

namespace Tests\Feature;

use App\Models\Offer;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OfferBrandFilterTest extends TestCase
{
    use RefreshDatabase;

    public function test_archive_brand_filter_ignores_letter_case(): void
    {
        $user = User::factory()->create();

        Offer::query()->create([
            'user_id' => $user->id,
            'folder' => 'mzancexai.online',
            'brand' => 'Mzancexai',
            'domain' => 'mzancexai.online',
            'geo' => 'XX',
            'lang' => 'en',
            'template' => 'default',
            'status' => 'archived',
            'archived_at' => now(),
            'from_search_team' => false,
        ]);

        $this->actingAs($user)
            ->get(route('offers.archive.index', ['brand' => 'MzancexAI']))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Panel/Offers/Archive')
                ->has('offers.data', 1)
                ->where('offers.data.0.domain', 'mzancexai.online'));
    }

    public function test_brand_lookup_counts_archived_rows_case_insensitively(): void
    {
        $user = User::factory()->create();

        Offer::query()->create([
            'user_id' => $user->id,
            'folder' => 'mzancexai.click',
            'brand' => 'Mzancexai',
            'domain' => 'mzancexai.click',
            'geo' => 'XX',
            'lang' => 'en',
            'template' => 'default',
            'status' => 'archived',
            'archived_at' => now(),
            'from_search_team' => false,
        ]);

        $this->actingAs($user)
            ->getJson(route('offers.brand-lookup', ['brand' => 'MzancexAI']))
            ->assertOk()
            ->assertJsonPath('active', 0)
            ->assertJsonPath('archived', 1);
    }
}
