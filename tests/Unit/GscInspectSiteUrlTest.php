<?php

namespace Tests\Unit;

use App\Services\GoogleSearchConsoleClient;
use Tests\TestCase;

class GscInspectSiteUrlTest extends TestCase
{
    public function test_candidates_include_prefix_and_sc_domain(): void
    {
        $urls = GoogleSearchConsoleClient::siteUrlsForDomain('worthimant-uk.online');

        $this->assertSame([
            'https://worthimant-uk.online/',
            'sc-domain:worthimant-uk.online',
            'https://www.worthimant-uk.online/',
        ], $urls);
    }

    public function test_preferred_site_url_comes_first(): void
    {
        $urls = GoogleSearchConsoleClient::siteUrlsForDomain(
            'worthimant-uk.online',
            'sc-domain:worthimant-uk.online',
        );

        $this->assertSame('sc-domain:worthimant-uk.online', $urls[0]);
        $this->assertContains('https://worthimant-uk.online/', $urls);
    }

    public function test_site_url_matches_host_and_sc_domain(): void
    {
        $this->assertTrue(GoogleSearchConsoleClient::siteUrlMatchesDomain(
            'https://worthimant-uk.online/',
            'worthimant-uk.online',
        ));
        $this->assertTrue(GoogleSearchConsoleClient::siteUrlMatchesDomain(
            'https://www.worthimant-uk.online/',
            'worthimant-uk.online',
        ));
        $this->assertTrue(GoogleSearchConsoleClient::siteUrlMatchesDomain(
            'sc-domain:worthimant-uk.online',
            'worthimant-uk.online',
        ));
        $this->assertFalse(GoogleSearchConsoleClient::siteUrlMatchesDomain(
            'https://other.example/',
            'worthimant-uk.online',
        ));
    }
}
