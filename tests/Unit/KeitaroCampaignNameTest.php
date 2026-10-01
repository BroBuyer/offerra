<?php

namespace Tests\Unit;

use App\Services\KeitaroClient;
use App\Services\SalesPostbackService;
use Mockery;
use Tests\TestCase;

class KeitaroCampaignNameTest extends TestCase
{
    public function test_name_includes_geo_and_lang(): void
    {
        $name = $this->client()->buildCampaignName([
            'geo' => 'BE',
            'lang' => 'fr',
            'brand' => 'Termavise',
            'domain' => 'termavise-be.site',
            'created_at' => '2026-10-01 12:00:00',
        ], 'EGO');

        $this->assertSame(
            'SEO BE fr EGO Termavise (01.10.2026) termavise-be.site',
            $name,
        );
    }

    public function test_name_without_lang_keeps_old_shape(): void
    {
        $name = $this->client()->buildCampaignName([
            'geo' => 'si',
            'lang' => '',
            'brand' => 'Fyndexia',
            'domain' => 'fyndexiasi.com',
            'created_at' => '2026-10-01',
        ], 'JEL');

        $this->assertSame(
            'SEO SI JEL Fyndexia (01.10.2026) fyndexiasi.com',
            $name,
        );
    }

    private function client(): KeitaroClient
    {
        return new KeitaroClient(Mockery::mock(SalesPostbackService::class));
    }
}
