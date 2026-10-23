<?php

namespace Tests\Feature;

use App\Models\Offer;
use App\Models\OfferStat;
use App\Models\User;
use App\Services\StaleDeadOfferService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class StaleDeadOfferServiceTest extends TestCase
{
    use RefreshDatabase;

    private StaleDeadOfferService $service;

    protected function setUp(): void
    {
        parent::setUp();
        Carbon::setTestNow('2026-10-23 15:00:00');
        $this->service = $this->app->make(StaleDeadOfferService::class);
    }

    protected function tearDown(): void
    {
        Carbon::setTestNow();
        parent::tearDown();
    }

    public function test_zero_brand_is_a_candidate_after_gsc_window(): void
    {
        $user = User::factory()->create();
        $dead = $this->makeOffer($user, 'Acme', 'acme.online', now()->subDays(40));

        $this->assertCandidateIds([$dead->id]);
    }

    public function test_recent_lead_on_sibling_protects_zero_domain(): void
    {
        $user = User::factory()->create();
        $zero = $this->makeOffer($user, 'Acme', 'acme.online', now()->subDays(40));
        $live = $this->makeOffer($user, 'Acme', 'acme.com', now()->subDays(40));
        $this->setStats($live, lastLeadAt: now()->subDays(10), leads: 2);

        $this->assertCandidateIds([]);
        $this->assertFalse($this->candidateIds()->contains($zero->id));
    }

    public function test_brand_match_is_case_insensitive(): void
    {
        $user = User::factory()->create();
        $this->makeOffer($user, 'Mzancexai', 'mzancexai.online', now()->subDays(40));
        $live = $this->makeOffer($user, 'MzancexAI', 'mzancex-ai.com', now()->subDays(12));
        $this->setStats($live, lastLeadAt: now()->subDays(3), leads: 1);

        $this->assertCandidateIds([]);
    }

    public function test_old_lead_does_not_protect_brand(): void
    {
        $user = User::factory()->create();
        $zero = $this->makeOffer($user, 'Acme', 'acme.online', now()->subDays(40));
        $stale = $this->makeOffer($user, 'Acme', 'acme.com', now()->subDays(40));
        $this->setStats($stale, lastLeadAt: now()->subDays(40), leads: 5);

        $this->assertCandidateIds([$zero->id, $stale->id]);
    }

    public function test_recent_deposit_without_lead_protects_brand(): void
    {
        $user = User::factory()->create();
        $this->makeOffer($user, 'Acme', 'acme.online', now()->subDays(40));
        $paid = $this->makeOffer($user, 'Acme', 'acme.com', now()->subDays(40));
        $this->setStats($paid, lastDepositAt: now()->subDays(5), deposits: 1);

        $this->assertCandidateIds([]);
    }

    public function test_other_buyers_brand_does_not_protect(): void
    {
        $buyer = User::factory()->create();
        $other = User::factory()->create();
        $dead = $this->makeOffer($buyer, 'Acme', 'acme.online', now()->subDays(40));
        $theirs = $this->makeOffer($other, 'Acme', 'acme-other.com', now()->subDays(40));
        $this->setStats($theirs, lastLeadAt: now()->subDays(2), leads: 1);

        $this->assertCandidateIds([$dead->id]);
    }

    public function test_archived_sibling_with_recent_lead_does_not_protect(): void
    {
        $user = User::factory()->create();
        $dead = $this->makeOffer($user, 'Acme', 'acme.online', now()->subDays(40));
        $archived = $this->makeOffer($user, 'Acme', 'acme.com', now()->subDays(40), status: 'archived');
        $this->setStats($archived, lastLeadAt: now()->subDays(2), leads: 1);

        $this->assertCandidateIds([$dead->id]);
    }

    public function test_fresh_gsc_submit_is_not_a_candidate(): void
    {
        $user = User::factory()->create();
        $fresh = $this->makeOffer($user, 'Acme', 'acme.online', now()->subDays(10));

        $this->assertCandidateIds([]);
        $this->assertFalse($this->candidateIds()->contains($fresh->id));
    }

    public function test_scan_groups_candidates_by_user(): void
    {
        $first = User::factory()->create();
        $second = User::factory()->create();
        $this->makeOffer($first, 'Acme', 'acme.online', now()->subDays(40));
        $this->makeOffer($second, 'Beta', 'beta.online', now()->subDays(40));
        $this->makeOffer($second, 'Beta', 'beta.com', now()->subDays(40));

        $result = $this->service->scan();

        $this->assertSame(3, $result['total']);
        $this->assertSame(1, $result['by_user'][$first->id]);
        $this->assertSame(2, $result['by_user'][$second->id]);
    }

    /**
     * @param  list<int>  $expected
     */
    private function assertCandidateIds(array $expected): void
    {
        $this->assertSame(
            collect($expected)->sort()->values()->all(),
            $this->candidateIds()->sort()->values()->all(),
        );
    }

    /**
     * @return \Illuminate\Support\Collection<int, int>
     */
    private function candidateIds()
    {
        return $this->service->baseCandidatesQuery()->orderBy('id')->pluck('id');
    }

    private function makeOffer(
        User $user,
        string $brand,
        string $domain,
        $indexedAt,
        string $status = 'generated',
    ): Offer {
        return Offer::query()->create([
            'user_id' => $user->id,
            'folder' => $domain,
            'brand' => $brand,
            'domain' => $domain,
            'geo' => 'IT',
            'lang' => 'it',
            'template' => 'default',
            'status' => $status,
            'indexed_at' => $indexedAt,
            'from_search_team' => false,
        ]);
    }

    private function setStats(
        Offer $offer,
        $lastLeadAt = null,
        $lastDepositAt = null,
        int $leads = 0,
        int $deposits = 0,
    ): OfferStat {
        $stats = $offer->ensureStats();
        $stats->forceFill([
            'leads_count' => $leads,
            'deposits_count' => $deposits,
            'last_lead_at' => $lastLeadAt,
            'last_deposit_at' => $lastDepositAt,
        ])->save();

        return $stats;
    }
}
