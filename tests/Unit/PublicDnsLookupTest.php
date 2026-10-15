<?php

namespace Tests\Unit;

use App\Support\PublicDnsLookup;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class PublicDnsLookupTest extends TestCase
{
    public function test_uses_public_doh_ns_and_does_not_need_local_stub(): void
    {
        Http::fake([
            'https://cloudflare-dns.com/dns-query*' => Http::response([
                'Status' => 0,
                'Answer' => [
                    ['data' => 'pam.ns.cloudflare.com.'],
                    ['data' => 'randy.ns.cloudflare.com.'],
                ],
            ]),
        ]);

        $ns = (new PublicDnsLookup)->nameservers('nezertronixpro-ar.cfd');

        $this->assertSame(['pam.ns.cloudflare.com', 'randy.ns.cloudflare.com'], $ns);
    }

    public function test_public_nxdomain_is_empty_not_stale_local(): void
    {
        Http::fake([
            'https://cloudflare-dns.com/dns-query*' => Http::response([
                'Status' => 3,
                'Answer' => [],
            ]),
        ]);

        $this->assertSame([], (new PublicDnsLookup)->nameservers('nezertronixpro-ar.online'));
        $this->assertSame([], (new PublicDnsLookup)->aRecords('nezertronixpro-ar.online'));
    }

    public function test_falls_back_to_google_doh_when_cloudflare_fails(): void
    {
        Http::fake([
            'https://cloudflare-dns.com/dns-query*' => Http::response('nope', 502),
            'https://dns.google/resolve*' => Http::response([
                'Status' => 0,
                'Answer' => [
                    ['data' => '104.21.58.45'],
                    ['data' => '172.67.156.56'],
                ],
            ]),
        ]);

        $ips = (new PublicDnsLookup)->aRecords('nezertronixpro-ar.cfd');

        $this->assertSame(['104.21.58.45', '172.67.156.56'], $ips);
    }
}
