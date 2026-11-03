<?php

namespace Tests\Unit;

use App\Models\OriginServer;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class OriginServerBillingTest extends TestCase
{
    public function test_days_until_paid_are_signed(): void
    {
        $server = new OriginServer([
            'paid_until' => '2026-11-04',
            'alerts_enabled' => true,
        ]);
        $now = Carbon::parse('2026-11-03 15:40:00', 'Europe/Kyiv');

        $this->assertSame(1, $server->daysUntilPaid($now));
        $this->assertTrue($server->dueForBillingReminder($now));

        $this->assertSame(0, $server->daysUntilPaid(Carbon::parse('2026-11-04 09:00:00', 'Europe/Kyiv')));
        $this->assertSame(-2, $server->daysUntilPaid(Carbon::parse('2026-11-06 09:00:00', 'Europe/Kyiv')));
        $this->assertFalse($server->dueForBillingReminder(Carbon::parse('2026-11-02 09:00:00', 'Europe/Kyiv')));
    }

    public function test_already_alerted_term_is_not_due(): void
    {
        $server = new OriginServer([
            'paid_until' => '2026-11-04',
            'paid_until_alerted_for' => '2026-11-04',
            'alerts_enabled' => true,
        ]);

        $this->assertFalse($server->dueForBillingReminder(Carbon::parse('2026-11-04')));
    }

    public function test_alerts_off_skips_reminder(): void
    {
        $server = new OriginServer([
            'paid_until' => '2026-11-04',
            'alerts_enabled' => false,
        ]);

        $this->assertFalse($server->dueForBillingReminder(Carbon::parse('2026-11-03')));
    }

}
