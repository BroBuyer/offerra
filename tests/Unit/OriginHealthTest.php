<?php

namespace Tests\Unit;

use App\Services\OriginHealthMonitor;
use App\Services\OriginHealthProbe;
use App\Support\DeployDriver;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class OriginHealthTest extends TestCase
{
    public function test_ubuntu_driver_switches_default_path(): void
    {
        $this->assertSame(DeployDriver::UBUNTU_PATH, DeployDriver::pathForDriver('ubuntu', DeployDriver::HESTIA_PATH));
        $this->assertSame(DeployDriver::HESTIA_PATH, DeployDriver::pathForDriver('hestia', DeployDriver::UBUNTU_PATH));
        $this->assertSame('/custom/{domain}', DeployDriver::pathForDriver('ubuntu', '/custom/{domain}'));
    }

    public function test_ssh_failure_is_down(): void
    {
        $result = (new OriginHealthProbe)->evaluate(
            ['ok' => false, 'latency_ms' => 12, 'error' => 'SSH timeout'],
            ['ok' => false, 'status' => null, 'latency_ms' => null, 'error' => 'skipped'],
            [],
        );

        $this->assertSame('down', $result['status']);
        $this->assertSame(['SSH timeout'], $result['issues']);
    }

    public function test_healthy_origin_is_ok(): void
    {
        $result = (new OriginHealthProbe)->evaluate(
            ['ok' => true, 'latency_ms' => 40, 'error' => null],
            ['ok' => true, 'status' => 200, 'latency_ms' => 30, 'error' => null],
            [
                'disk_root_pct' => 12,
                'disk_www_pct' => 20,
                'nginx' => 'up',
                'php_fpm' => 'up',
                'web' => 'up',
                'writable' => true,
                'load' => ['1' => 0.1, '5' => 0.2, '15' => 0.2],
                'ram_used_mb' => 1024,
                'ram_total_mb' => 16000,
                'ram_pct' => 6,
            ],
        );

        $this->assertSame('ok', $result['status']);
        $this->assertSame([], $result['issues']);
    }

    public function test_disk_and_php_fpm_are_degraded(): void
    {
        $result = (new OriginHealthProbe)->evaluate(
            ['ok' => true, 'latency_ms' => 40, 'error' => null],
            ['ok' => true, 'status' => 200, 'latency_ms' => 30, 'error' => null],
            [
                'disk_root_pct' => 91,
                'disk_www_pct' => 10,
                'nginx' => 'up',
                'php_fpm' => 'down',
                'web' => 'up',
                'writable' => true,
            ],
        );

        $this->assertSame('degraded', $result['status']);
        $this->assertNotEmpty($result['issues']);
    }

    public function test_http_failure_with_ssh_is_degraded(): void
    {
        $result = (new OriginHealthProbe)->evaluate(
            ['ok' => true, 'latency_ms' => 40, 'error' => null],
            ['ok' => false, 'status' => null, 'latency_ms' => 5000, 'error' => 'Connection timed out'],
            [
                'nginx' => 'up',
                'php_fpm' => 'up',
                'web' => 'up',
                'disk_root_pct' => 10,
                'writable' => true,
            ],
        );

        $this->assertSame('degraded', $result['status']);
    }

    public function test_down_alert_after_three_failures_and_cooldown(): void
    {
        $monitor = $this->app->make(OriginHealthMonitor::class);
        $now = Carbon::parse('2026-08-18 19:00:00');

        $this->assertNull($monitor->decideAlert('ok', 'down', 2, 0, [], $now));
        $this->assertSame('down', $monitor->decideAlert('ok', 'down', 3, 0, [], $now));
        $this->assertNull($monitor->decideAlert('down', 'down', 4, 0, [
            'last_alert_at' => $now->copy()->subMinutes(10)->toIso8601String(),
        ], $now));
        $this->assertSame('down', $monitor->decideAlert('down', 'down', 8, 0, [
            'last_alert_at' => $now->copy()->subMinutes(31)->toIso8601String(),
        ], $now));

        // Brief SSH blip (status was down, but no down alert sent) → no recovery spam.
        $this->assertNull($monitor->decideAlert('down', 'ok', 0, 0, [
            'last_alert_at' => null,
            'last_alert_kind' => null,
        ], $now));
        $this->assertNull($monitor->decideAlert('down', 'ok', 0, 0, [
            'last_alert_kind' => 'recovery',
        ], $now));

        // Recovery only after a real down/degraded alert.
        $this->assertSame('recovery', $monitor->decideAlert('down', 'ok', 0, 0, [
            'last_alert_at' => $now->copy()->subMinutes(2)->toIso8601String(),
            'last_alert_kind' => 'down',
        ], $now));
        $this->assertSame('recovery', $monitor->decideAlert('degraded', 'ok', 0, 0, [
            'last_alert_kind' => 'degraded',
        ], $now));

        $this->assertNull($monitor->decideAlert('ok', 'degraded', 0, 1, [], $now));
        $this->assertSame('degraded', $monitor->decideAlert('ok', 'degraded', 0, 2, [], $now));
        $this->assertNull($monitor->decideAlert('degraded', 'degraded', 0, 3, [
            'last_alert_at' => $now->copy()->subMinutes(2)->toIso8601String(),
            'last_alert_kind' => 'degraded',
        ], $now));
    }
}
