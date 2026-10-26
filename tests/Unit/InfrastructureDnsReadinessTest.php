<?php

namespace Tests\Unit;

use App\Support\InfrastructureDnsReadiness;
use Tests\TestCase;

class InfrastructureDnsReadinessTest extends TestCase
{
    public function test_empty_expected_ns_is_acceptable(): void
    {
        $this->assertTrue(InfrastructureDnsReadiness::nameserversAcceptable(
            ['ns1.dynadot.com'],
            [],
        ));
    }

    public function test_expected_pair_matches_live(): void
    {
        $this->assertTrue(InfrastructureDnsReadiness::nameserversAcceptable(
            ['pam.ns.cloudflare.com', 'randy.ns.cloudflare.com'],
            ['randy.ns.cloudflare.com', 'pam.ns.cloudflare.com'],
        ));
    }

    public function test_stale_cloudflare_pair_is_not_the_new_account(): void
    {
        $this->assertFalse(InfrastructureDnsReadiness::nameserversAcceptable(
            ['simon.ns.cloudflare.com', 'brianna.ns.cloudflare.com'],
            ['pam.ns.cloudflare.com', 'randy.ns.cloudflare.com'],
        ));
    }

    public function test_parking_ns_are_not_ready(): void
    {
        $this->assertFalse(InfrastructureDnsReadiness::nameserversAcceptable(
            ['ns1.dynadot.com', 'ns2.dynadot.com'],
            ['pam.ns.cloudflare.com', 'randy.ns.cloudflare.com'],
        ));
    }

    public function test_empty_live_ns_are_not_ready_when_expected(): void
    {
        $this->assertFalse(InfrastructureDnsReadiness::nameserversAcceptable(
            [],
            ['pam.ns.cloudflare.com', 'randy.ns.cloudflare.com'],
        ));
    }
}
