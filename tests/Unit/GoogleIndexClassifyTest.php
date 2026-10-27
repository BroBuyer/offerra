<?php

namespace Tests\Unit;

use App\Services\OfferGoogleIndexInspector;
use Tests\TestCase;

class GoogleIndexClassifyTest extends TestCase
{
    public function test_duplicate_uses_google_canonical_host(): void
    {
        $result = OfferGoogleIndexInspector::classifyInspection('turbo-hiberix-ai.live', [
            'coverage' => 'Duplicate, Google chose different canonical than user',
            'verdict' => 'NEUTRAL',
            'google_canonical' => 'https://turbohiberix-ai.com/',
            'referring_urls' => [],
        ]);

        $this->assertSame('duplicate', $result['status']);
        $this->assertSame('turbohiberix-ai.com', $result['canonical']);
        $this->assertSame('Google індексує turbohiberix-ai.com замість цього', $result['coverage']);
    }

    public function test_duplicate_falls_back_to_referring_host_when_canonical_is_self(): void
    {
        $result = OfferGoogleIndexInspector::classifyInspection('immediate-connect.cyou', [
            'coverage' => 'Duplicate, Google chose different canonical than user',
            'google_canonical' => 'https://immediate-connect.cyou/',
            'referring_urls' => ['https://immediate-connect-it.live/'],
        ]);

        $this->assertSame('duplicate', $result['status']);
        $this->assertSame('immediate-connect-it.live', $result['canonical']);
    }

    public function test_unknown_url_is_not_a_timeout(): void
    {
        $result = OfferGoogleIndexInspector::classifyInspection('chattelance-uk.com', [
            'coverage' => 'URL is unknown to Google',
            'verdict' => 'NEUTRAL',
            'google_canonical' => null,
            'referring_urls' => [],
        ]);

        $this->assertSame('unknown', $result['status']);
        $this->assertNull($result['canonical']);
        $this->assertSame('Google ще не бачив цей URL', $result['coverage']);
    }

    public function test_host_from_url_strips_www(): void
    {
        $this->assertSame('la-piattaforma.org', OfferGoogleIndexInspector::hostFromUrl('https://www.la-piattaforma.org/page'));
        $this->assertSame('girtrust-si.cfd', OfferGoogleIndexInspector::hostFromUrl('girtrust-si.cfd'));
    }
}
