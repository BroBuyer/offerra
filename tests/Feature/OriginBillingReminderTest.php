<?php

namespace Tests\Feature;

use App\Models\OriginServer;
use App\Models\User;
use App\Models\UserSetting;
use App\Services\OriginBillingReminder;
use App\Services\TelegramNotifier;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Mockery;
use Tests\TestCase;

class OriginBillingReminderTest extends TestCase
{
    use RefreshDatabase;

    public function test_sends_once_the_day_before_and_does_not_spam(): void
    {
        Carbon::setTestNow(Carbon::parse('2026-11-03 09:15:00', 'Europe/Kyiv'));

        $admin = User::factory()->admin()->create();
        UserSetting::query()->create([
            'user_id' => $admin->id,
            'tg_bot_token' => 'bot-token',
            'tg_chat_id' => '123',
        ]);

        $due = OriginServer::query()->create([
            'host' => '91.208.162.228',
            'port' => 22,
            'username' => 'root',
            'password' => 'secret',
            'hoster' => 'AlexHost',
            'hoster_url' => 'https://my.alexhost.com',
            'paid_until' => '2026-11-04',
            'alerts_enabled' => true,
            'is_active' => true,
        ]);
        OriginServer::query()->create([
            'host' => '10.0.0.8',
            'port' => 22,
            'username' => 'root',
            'password' => 'secret',
            'paid_until' => '2026-12-01',
            'alerts_enabled' => true,
            'is_active' => true,
        ]);

        $this->mock(TelegramNotifier::class, function ($mock) use ($due): void {
            $mock->shouldReceive('send')
                ->once()
                ->withArgs(function ($settings, string $text) use ($due) {
                    return str_contains($text, 'Треба оплатити origin')
                        && str_contains($text, $due->host)
                        && str_contains($text, 'завтра')
                        && str_contains($text, 'https://my.alexhost.com');
                })
                ->andReturn(true);
        });

        $first = app(OriginBillingReminder::class)->remind();
        $this->assertSame(1, $first['reminded']);
        $this->assertSame('2026-11-04', $due->fresh()->paid_until_alerted_for?->toDateString());

        $second = app(OriginBillingReminder::class)->remind();
        $this->assertSame(0, $second['reminded']);
    }

    public function test_admin_can_save_paid_until_and_hoster_login(): void
    {
        $admin = User::factory()->admin()->create();
        $server = OriginServer::query()->create([
            'host' => '84.200.89.234',
            'port' => 22,
            'username' => 'root',
            'password' => 'ssh-secret',
            'role' => OriginServer::ROLE_POOL,
            'is_active' => true,
        ]);

        $this->actingAs($admin)
            ->from(route('origin-servers.index'))
            ->post(route('origin-servers.update', $server), [
                'host' => $server->host,
                'port' => 22,
                'username' => 'root',
                'password' => '',
                'label' => 'ulta-1',
                'hoster' => 'ultahost',
                'hoster_url' => 'my.ultahost.com',
                'hoster_email' => 'ops@example.com',
                'hoster_password' => 'cabinet-pass',
                'paid_until' => '2026-11-20',
                'role' => 'pool',
                'max_offers' => 0,
                'is_active' => 1,
                'alerts_enabled' => 1,
            ])
            ->assertRedirect(route('origin-servers.index'));

        $server->refresh();
        $this->assertSame('2026-11-20', $server->paid_until?->toDateString());
        $this->assertSame('https://my.ultahost.com', $server->hoster_url);
        $this->assertSame('ops@example.com', $server->hoster_email);
        $this->assertSame('cabinet-pass', $server->hoster_password);
    }

    protected function tearDown(): void
    {
        Carbon::setTestNow();
        Mockery::close();
        parent::tearDown();
    }
}
