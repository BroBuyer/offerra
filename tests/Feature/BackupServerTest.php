<?php

namespace Tests\Feature;

use App\Models\BackupServer;
use App\Models\User;
use App\Models\UserSetting;
use App\Services\BackupStatusProbe;
use App\Services\OriginBillingReminder;
use App\Services\TelegramNotifier;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Mockery;
use Tests\TestCase;

class BackupServerTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_open_backup_page_and_save_server(): void
    {
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin)
            ->get(route('backup.index'))
            ->assertOk();

        $this->actingAs($admin)
            ->from(route('backup.index'))
            ->post(route('backup.store'), [
                'host' => '38.180.160.223',
                'port' => 22,
                'username' => 'root',
                'password' => 'backup-secret',
                'hoster' => 'AlexHost',
                'paid_until' => '2026-12-01',
                'alerts_enabled' => 1,
            ])
            ->assertRedirect(route('backup.index'));

        $server = BackupServer::query()->first();
        $this->assertNotNull($server);
        $this->assertSame('38.180.160.223', $server->host);
        $this->assertSame('backup-secret', $server->password);
        $this->assertSame('2026-12-01', $server->paid_until?->toDateString());
        $this->assertArrayHasKey('state', $server->toPanelArray()['status']);
    }

    public function test_regular_user_cannot_open_backup_page(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get(route('backup.index'))
            ->assertForbidden();
    }

    public function test_probe_reads_status_file_and_log(): void
    {
        Carbon::setTestNow(Carbon::parse('2026-11-03 15:00:00', 'Europe/Kyiv'));

        $statusFile = tempnam(sys_get_temp_dir(), 'bkst');
        $logFile = tempnam(sys_get_temp_dir(), 'bklog');
        file_put_contents($statusFile, json_encode([
            'ok' => true,
            'finished_at' => '2026-11-03T03:16:04+00:00',
            'latest_snapshot_at' => '2026-11-03T03:15:01+00:00',
            'snapshots' => 5,
            'keep_daily' => 14,
            'size' => '31.7 GiB',
            'message' => 'ok',
        ]));
        file_put_contents($logFile, "[2026-11-03T03:16:04+00:00] ok\n");

        $probe = app(BackupStatusProbe::class);
        $probe->statusFile = $statusFile;
        $probe->logFile = $logFile;
        $probe->envFile = sys_get_temp_dir().DIRECTORY_SEPARATOR.'no-offerra-backup.env';

        $result = $probe->probe();
        $this->assertSame('ok', $result['state']);
        $this->assertSame(5, $result['snapshots']);
        $this->assertSame('31.7 GiB', $result['size']);

        @unlink($statusFile);
        @unlink($logFile);
        Carbon::setTestNow();
    }

    public function test_billing_reminder_covers_backup_server(): void
    {
        Carbon::setTestNow(Carbon::parse('2026-11-03 09:15:00', 'Europe/Kyiv'));

        $admin = User::factory()->admin()->create();
        UserSetting::query()->create([
            'user_id' => $admin->id,
            'tg_bot_token' => 'bot-token',
            'tg_chat_id' => '123',
        ]);

        $backup = BackupServer::query()->create([
            'host' => '38.180.160.223',
            'port' => 22,
            'username' => 'root',
            'password' => 'secret',
            'paid_until' => '2026-11-04',
            'alerts_enabled' => true,
        ]);

        $this->mock(TelegramNotifier::class, function ($mock) use ($backup): void {
            $mock->shouldReceive('send')
                ->once()
                ->withArgs(function ($settings, string $text) use ($backup) {
                    return str_contains($text, 'Треба оплатити backup VPS')
                        && str_contains($text, $backup->host)
                        && str_contains($text, 'завтра');
                })
                ->andReturn(true);
        });

        $first = app(OriginBillingReminder::class)->remind();
        $this->assertSame(1, $first['reminded']);
        $this->assertSame('2026-11-04', $backup->fresh()->paid_until_alerted_for?->toDateString());

        Carbon::setTestNow();
        Mockery::close();
    }
}
