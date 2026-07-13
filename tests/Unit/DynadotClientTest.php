<?php

namespace Tests\Unit;

use App\Services\DynadotClient;
use Tests\TestCase;

class DynadotClientTest extends TestCase
{
    private DynadotClient $client;

    protected function setUp(): void
    {
        parent::setUp();
        $this->client = new DynadotClient;
    }

    public function test_expand_query_with_tld_searches_only_that_domain(): void
    {
        $domains = $this->client->expandQuery('pestotracer.com');

        $this->assertSame(['pestotracer.com'], $domains);
    }

    public function test_expand_query_without_tld_searches_all_configured_zones(): void
    {
        $domains = $this->client->expandQuery('pestotracer');
        $tlds = config('offerra.domain_search_tlds');

        $this->assertCount(count($tlds), $domains);
        $this->assertContains('pestotracer.com', $domains);
        $this->assertContains('pestotracer.org', $domains);
    }

    public function test_expand_query_strips_protocol_and_www(): void
    {
        $this->assertSame(['example.net'], $this->client->expandQuery('https://www.example.net'));
    }
}
