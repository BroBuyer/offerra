<?php

namespace Tests\Feature;

use App\Jobs\SwitchOfferCloudflareJob;
use App\Models\CloudflareAccount;
use App\Models\Offer;
use App\Models\User;
use App\Services\CloudflareClient;
use App\Services\InfrastructureProvisioner;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Queue;
use Tests\TestCase;

class CloudflareAccountPoolTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_add_spare_cloudflare_and_user_cannot(): void
    {
        $admin = User::factory()->admin()->create();
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get(route('cloudflare-accounts.index'))
            ->assertForbidden();

        $this->actingAs($admin)
            ->from(route('cloudflare-accounts.index'))
            ->post(route('cloudflare-accounts.store'), [
                'name' => 'CF spare 1',
                'api_token' => 'tok-spare-1',
                'account_id' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            ])
            ->assertRedirect(route('cloudflare-accounts.index'));

        $account = CloudflareAccount::query()->first();
        $this->assertNotNull($account);
        $this->assertSame('CF spare 1', $account->name);
        $this->assertSame('tok-spare-1', $account->api_token);
        $this->assertTrue($account->is_active);
    }

    public function test_settings_page_no_longer_shows_user_backup_cloudflare(): void
    {
        $user = User::factory()->create();
        $user->settings()->create([]);

        $this->actingAs($user)
            ->get(route('settings.index'))
            ->assertOk()
            ->assertDontSee('Запасний Cloudflare', false);
    }

    public function test_admin_bulk_switch_queues_spare_pool_account(): void
    {
        Queue::fake();

        $owner = User::factory()->create();
        $owner->settings()->create([
            'cloudflare_api_token' => 'owner-token',
            'cloudflare_account_id' => 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb',
            'dynadot_api_key' => 'dyn-key',
        ]);
        $offer = $this->makeOffer($owner, 'switch-me.live');
        $spare = CloudflareAccount::query()->create([
            'name' => 'Pool CF',
            'api_token' => 'pool-token',
            'account_id' => 'cccccccccccccccccccccccccccccccc',
            'is_active' => true,
        ]);
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin)
            ->from(route('offers.index'))
            ->post(route('offers.bulk-action'), [
                'ids' => [$offer->id],
                'action' => 'switch_cloudflare',
                'cloudflare_target' => 'spare:'.$spare->id,
            ])
            ->assertRedirect()
            ->assertSessionHas('success');

        Queue::assertPushed(
            SwitchOfferCloudflareJob::class,
            fn (SwitchOfferCloudflareJob $job) => $job->offerId === $offer->id && $job->target === 'spare:'.$spare->id,
        );
    }

    public function test_regular_user_cannot_switch_to_admin_spare_pool(): void
    {
        Queue::fake();

        $user = User::factory()->create();
        $user->settings()->create([
            'cloudflare_api_token' => 'owner-token',
            'cloudflare_account_id' => 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb',
            'dynadot_api_key' => 'dyn-key',
        ]);
        $offer = $this->makeOffer($user, 'user-owned.live');
        $spare = CloudflareAccount::query()->create([
            'name' => 'Pool CF',
            'api_token' => 'pool-token',
            'account_id' => 'cccccccccccccccccccccccccccccccc',
            'is_active' => true,
        ]);

        $this->actingAs($user)
            ->from(route('offers.index'))
            ->post(route('offers.bulk-action'), [
                'ids' => [$offer->id],
                'action' => 'switch_cloudflare',
                'cloudflare_target' => 'spare:'.$spare->id,
            ])
            ->assertRedirect()
            ->assertSessionHas('warning');

        Queue::assertNothingPushed();
    }

    public function test_resolve_switch_target_reads_pool_account(): void
    {
        $user = User::factory()->create();
        $settings = $user->settings()->create([
            'cloudflare_api_token' => 'owner-token',
            'cloudflare_account_id' => 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb',
        ]);
        $spare = CloudflareAccount::query()->create([
            'name' => 'Pool CF',
            'api_token' => 'pool-token',
            'account_id' => 'cccccccccccccccccccccccccccccccc',
            'is_active' => true,
        ]);

        $resolved = app(InfrastructureProvisioner::class)->resolveCloudflareSwitchTarget(
            $settings,
            'spare:'.$spare->id,
        );

        $this->assertSame('spare', $resolved['slot']);
        $this->assertSame($spare->id, $resolved['pool_id']);
        $this->assertSame('pool-token', $resolved['creds']['token']);
        $this->assertSame('cccccccccccccccccccccccccccccccc', $resolved['creds']['account_id']);
    }

    public function test_inactive_spare_is_rejected(): void
    {
        $user = User::factory()->create();
        $settings = $user->settings()->create([
            'cloudflare_api_token' => 'owner-token',
            'cloudflare_account_id' => 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb',
        ]);
        $spare = CloudflareAccount::query()->create([
            'name' => 'Burned CF',
            'api_token' => 'pool-token',
            'account_id' => 'cccccccccccccccccccccccccccccccc',
            'is_active' => false,
        ]);

        $this->expectException(\RuntimeException::class);
        app(InfrastructureProvisioner::class)->resolveCloudflareSwitchTarget(
            $settings,
            'spare:'.$spare->id,
        );
    }

    public function test_switch_job_keeps_spare_target_on_deploy_queue(): void
    {
        $job = new SwitchOfferCloudflareJob(9, 'spare:4');

        $this->assertSame('deploy', $job->queue);
        $this->assertSame('9:cf:spare:4', $job->uniqueId());
    }

    public function test_admin_can_check_spare_account(): void
    {
        $admin = User::factory()->admin()->create();
        $account = CloudflareAccount::query()->create([
            'name' => 'Check me',
            'api_token' => 'pool-token',
            'account_id' => 'cccccccccccccccccccccccccccccccc',
            'is_active' => true,
        ]);

        $this->mock(CloudflareClient::class, function ($mock): void {
            $mock->shouldReceive('testConnection')
                ->once()
                ->andReturn(['ok' => true, 'message' => 'Cloudflare API token валідний. Зон у акаунті: 2.', 'zones' => 2]);
        });

        $this->actingAs($admin)
            ->from(route('cloudflare-accounts.index'))
            ->post(route('cloudflare-accounts.check', $account))
            ->assertRedirect(route('cloudflare-accounts.index'))
            ->assertSessionHas('success');

        $account->refresh();
        $this->assertTrue($account->last_check_ok);
        $this->assertNotNull($account->last_checked_at);
    }

    private function makeOffer(User $user, string $domain): Offer
    {
        return Offer::query()->create([
            'user_id' => $user->id,
            'folder' => $domain,
            'brand' => 'CfPool',
            'domain' => $domain,
            'geo' => 'IT',
            'lang' => 'it',
            'template' => 'vespera',
            'status' => 'deployed',
            'from_search_team' => false,
            'cloudflare_account_id' => 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb',
        ]);
    }
}
