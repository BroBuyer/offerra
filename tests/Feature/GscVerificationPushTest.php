<?php

namespace Tests\Feature;

use App\Jobs\PushGscVerificationFileJob;
use App\Jobs\SubmitOfferToGscJob;
use App\Models\Offer;
use App\Models\User;
use App\Services\DeployService;
use App\Services\GoogleSearchConsoleClient;
use App\Services\OfferGscSubmitter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Queue;
use Mockery;
use Tests\TestCase;

class GscVerificationPushTest extends TestCase
{
    use RefreshDatabase;

    public function test_uploading_gsc_file_queues_push_for_unsubmitted_live_offers(): void
    {
        Queue::fake();

        $user = User::factory()->create();
        $user->settings()->create([]);
        $live = $this->makeOffer($user, 'live-brand.online', submitted: false);
        $this->makeOffer($user, 'already-in-gsc.online', submitted: true);

        $file = UploadedFile::fake()->createWithContent(
            'googleabc123def.html',
            "google-site-verification: googleabc123def.html\n",
        );

        $this->actingAs($user)
            ->post(route('settings.gsc-verification.store'), [
                'verification_file' => $file,
            ])
            ->assertRedirect(route('settings.index'));

        $this->assertSame(
            'googleabc123def.html',
            $user->settings()->first()?->gsc_verification_filename,
        );

        Queue::assertPushed(PushGscVerificationFileJob::class, fn (PushGscVerificationFileJob $job) => $job->offerId === $live->id);
        Queue::assertPushed(PushGscVerificationFileJob::class, 1);
    }

    public function test_submit_pushes_current_verification_file_before_gsc(): void
    {
        Queue::fake();
        config([
            'services.google.client_id' => 'test-client',
            'services.google.client_secret' => 'test-secret',
        ]);

        $user = User::factory()->create();
        $user->settings()->create([
            'gsc_verification_filename' => 'googleabc123def.html',
            'google_oauth_refresh_token' => 'refresh-token',
            'google_oauth_email' => 'jack@example.com',
        ]);
        $offer = $this->makeOffer($user, 'need-file.online');

        $deploy = Mockery::mock(DeployService::class);
        $deploy->shouldReceive('pushVerificationFile')->once()->with(
            Mockery::on(fn ($passed) => $passed->is($user)),
            Mockery::on(fn ($passed) => $passed->is($offer)),
        );
        $this->app->instance(DeployService::class, $deploy);

        $gsc = Mockery::mock(GoogleSearchConsoleClient::class);
        $gsc->shouldReceive('submitOffer')->once()->andReturn([
            'site_url' => 'https://need-file.online/',
            'sitemap_url' => 'https://need-file.online/sitemap.xml',
            'verified' => true,
            'added' => true,
            'sitemap_submitted' => true,
            'email' => 'jack@example.com',
            'google_account_id' => 1,
        ]);
        $this->app->instance(GoogleSearchConsoleClient::class, $gsc);

        $result = $this->app->make(OfferGscSubmitter::class)->submit($offer->fresh());

        $this->assertSame('https://need-file.online/', $result['site_url']);
        $this->assertTrue((bool) $offer->fresh()->submitted_for_indexing);
    }

    public function test_missing_token_body_is_retryable(): void
    {
        $this->assertTrue(OfferGscSubmitter::isRetryableError(
            'Verification file does not look like a GSC HTML token: https://rendivane-fr.pro/googleabc.html',
        ));
        $this->assertTrue(OfferGscSubmitter::isRetryableError('SFTP: логін відхилено під час завантаження архіву.'));
    }

    public function test_push_job_queues_gsc_when_offer_is_ready(): void
    {
        Queue::fake();
        config([
            'services.google.client_id' => 'test-client',
            'services.google.client_secret' => 'test-secret',
        ]);

        $user = User::factory()->create();
        $user->settings()->create([
            'gsc_verification_filename' => 'googleabc123def.html',
            'google_oauth_refresh_token' => 'refresh-token',
        ]);
        $offer = $this->makeOffer($user, 'ready-for-gsc.online');

        $deploy = Mockery::mock(DeployService::class);
        $deploy->shouldReceive('pushVerificationFile')->once();
        $this->app->instance(DeployService::class, $deploy);

        $this->app->make(PushGscVerificationFileJob::class, ['offerId' => $offer->id])->handle(
            $deploy,
            $this->app->make(OfferGscSubmitter::class),
        );

        Queue::assertPushed(SubmitOfferToGscJob::class, fn (SubmitOfferToGscJob $job) => $job->offerId === $offer->id);
    }

    private function makeOffer(User $user, string $domain, bool $submitted = false): Offer
    {
        return Offer::query()->create([
            'user_id' => $user->id,
            'folder' => $domain,
            'brand' => 'Rendivane',
            'domain' => $domain,
            'geo' => 'FR',
            'lang' => 'fr',
            'template' => 'noctra',
            'status' => 'deployed',
            'from_search_team' => false,
            'provision_infrastructure' => true,
            'availability_status' => 'ok',
            'submitted_for_indexing' => $submitted,
            'infra_meta' => ['dns' => 'done'],
        ]);
    }
}
