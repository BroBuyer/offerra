<?php

namespace Tests\Unit;

use App\Jobs\DeployOfferJob;
use App\Jobs\InspectOfferGoogleIndexJob;
use App\Jobs\ProbeOfferAvailabilityJob;
use App\Jobs\PushOfferConfigJob;
use App\Jobs\SubmitOfferToGscJob;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Queue;
use Tests\TestCase;

class BackgroundJobQueueTest extends TestCase
{
    use RefreshDatabase;

    public function test_mass_background_jobs_do_not_use_the_deploy_queue(): void
    {
        $this->assertSame('default', (new PushOfferConfigJob(1))->queue);
        $this->assertSame('default', (new InspectOfferGoogleIndexJob(1))->queue);
        $this->assertSame('default', (new SubmitOfferToGscJob(1))->queue);
        $this->assertSame('default', (new ProbeOfferAvailabilityJob(1))->queue);
        $this->assertSame('deploy', (new DeployOfferJob(1))->queue);
    }

    public function test_refresh_config_queue_push_stays_off_deploy(): void
    {
        Queue::fake();

        $user = User::factory()->create();
        $user->settings()->create([]);
        $offer = Offer::query()->create([
            'user_id' => $user->id,
            'folder' => 'queue-split.online',
            'brand' => 'Queue Split',
            'domain' => 'queue-split.online',
            'geo' => 'IT',
            'lang' => 'it',
            'template' => 'default',
            'status' => 'deployed',
            'from_search_team' => false,
        ]);

        $this->artisan('offers:refresh-config', [
            'offer' => $offer->id,
            '--queue-push' => true,
        ])->assertSuccessful();

        Queue::assertPushedOn('default', PushOfferConfigJob::class);
        Queue::assertNotPushed(PushOfferConfigJob::class, function (PushOfferConfigJob $job) {
            return $job->queue === 'deploy';
        });
    }
}
