<?php

namespace Tests\Unit;

use App\Models\Offer;
use Tests\TestCase;

class OfferDnsStatusTest extends TestCase
{
    public function test_dns_status_is_pending_when_infra_ready_and_dns_not_propagated(): void
    {
        $offer = new Offer([
            'provision_infrastructure' => true,
            'infra_status' => 'ready',
            'infra_meta' => [
                'options' => [
                    'cloudflare_zone' => true,
                    'dynadot_ns' => false,
                    'hestia' => true,
                    'cloudflare_dns' => true,
                    'cloudflare_ssl' => true,
                    'cloudflare_https' => true,
                    'cloudflare_www_redirect' => true,
                ],
                'dns' => 'pending',
            ],
        ]);

        $this->assertSame('pending', $offer->dnsStatus());
    }

    public function test_dns_status_is_skipped_without_dns_wait_options(): void
    {
        $offer = new Offer([
            'provision_infrastructure' => true,
            'infra_status' => 'ready',
            'infra_meta' => [
                'options' => [
                    'hestia' => true,
                    'cloudflare_zone' => false,
                    'cloudflare_dns' => false,
                    'dynadot_ns' => false,
                    'cloudflare_ssl' => false,
                    'cloudflare_https' => false,
                    'cloudflare_www_redirect' => false,
                ],
            ],
        ]);

        $this->assertSame('skipped', $offer->dnsStatus());
    }
}
