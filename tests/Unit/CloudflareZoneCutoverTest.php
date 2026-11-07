<?php

namespace Tests\Unit;

use App\Support\CloudflareZoneCutover;
use Tests\TestCase;

class CloudflareZoneCutoverTest extends TestCase
{
    public function test_retries_set_ns_while_public_ns_are_the_old_pair(): void
    {
        $this->assertTrue(CloudflareZoneCutover::shouldRetrySetNs(
            ['clint.ns.cloudflare.com', 'imani.ns.cloudflare.com'],
            ['julian.ns.cloudflare.com', 'shaz.ns.cloudflare.com'],
        ));
    }

    public function test_does_not_retry_set_ns_when_registrar_already_matches(): void
    {
        $this->assertFalse(CloudflareZoneCutover::shouldRetrySetNs(
            ['julian.ns.cloudflare.com', 'shaz.ns.cloudflare.com'],
            ['shaz.ns.cloudflare.com', 'julian.ns.cloudflare.com'],
        ));
    }

    public function test_does_not_delete_old_zone_before_cutover(): void
    {
        $this->assertFalse(CloudflareZoneCutover::shouldDeleteOldZone(
            ['julissa.ns.cloudflare.com', 'rajeev.ns.cloudflare.com'],
            ['julian.ns.cloudflare.com', 'shaz.ns.cloudflare.com'],
        ));
    }

    public function test_deletes_old_zone_only_after_public_ns_match(): void
    {
        $this->assertTrue(CloudflareZoneCutover::shouldDeleteOldZone(
            ['julian.ns.cloudflare.com', 'shaz.ns.cloudflare.com'],
            ['julian.ns.cloudflare.com', 'shaz.ns.cloudflare.com'],
        ));
    }

    public function test_slot_from_meta_keeps_spare(): void
    {
        $this->assertSame('spare', CloudflareZoneCutover::slotFromMeta(['cloudflare_slot' => 'spare']));
        $this->assertSame('backup', CloudflareZoneCutover::slotFromMeta(['cloudflare_slot' => 'backup']));
        $this->assertSame('primary', CloudflareZoneCutover::slotFromMeta([]));
    }
}
