<?php

namespace Tests\Unit;

use App\Support\UserAgentSummary;
use PHPUnit\Framework\TestCase;

class UserAgentSummaryTest extends TestCase
{
    public function test_empty_agent(): void
    {
        $this->assertSame(
            ['browser' => 'невідомо', 'os' => 'невідомо'],
            UserAgentSummary::describe(''),
        );
    }

    public function test_chrome_windows(): void
    {
        $ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36';
        $this->assertSame(
            ['browser' => 'Chrome', 'os' => 'Windows'],
            UserAgentSummary::describe($ua),
        );
    }

    public function test_edge_is_not_chrome(): void
    {
        $ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Edg/120.0.0.0';
        $this->assertSame('Edge', UserAgentSummary::describe($ua)['browser']);
    }

    public function test_safari_ios(): void
    {
        $ua = 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.0 Mobile/15E148 Safari/604.1';
        $this->assertSame(
            ['browser' => 'Safari', 'os' => 'iOS'],
            UserAgentSummary::describe($ua),
        );
    }
}
