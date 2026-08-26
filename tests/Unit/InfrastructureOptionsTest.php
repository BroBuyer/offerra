<?php

namespace Tests\Unit;

use App\Support\InfrastructureOptions;
use Tests\TestCase;

class InfrastructureOptionsTest extends TestCase
{
    public function test_from_input_maps_request_fields(): void
    {
        $options = InfrastructureOptions::fromInput([
            'infra_cloudflare_zone' => false,
            'infra_cloudflare_dns' => true,
            'infra_dynadot_ns' => false,
            'infra_cloudflare_ssl' => true,
            'infra_cloudflare_https' => false,
            'infra_cloudflare_www_redirect' => true,
        ]);

        $this->assertFalse($options['cloudflare_zone']);
        $this->assertTrue($options['cloudflare_dns']);
        $this->assertTrue($options['cloudflare_ssl']);
        $this->assertFalse($options['cloudflare_https']);
        $this->assertTrue($options['cloudflare_www_redirect']);
    }

    public function test_needs_cloudflare_zone_when_dns_or_ssl_enabled(): void
    {
        $this->assertTrue(InfrastructureOptions::needsCloudflareZone([
            'cloudflare_zone' => false,
            'cloudflare_dns' => true,
            'cloudflare_ssl' => false,
            'cloudflare_https' => false,
            'cloudflare_www_redirect' => false,
            'dynadot_ns' => false,
        ]));
    }
}
