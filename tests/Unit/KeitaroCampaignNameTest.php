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

    public function test_picks_group_named_like_affiliate_tag_when_configured_id_is_invisible(): void
    {
        $groups = [
            ['id' => 19, 'name' => 'BRO'],
            ['id' => 23, 'name' => 'EGO'],
            ['id' => 27, 'name' => 'JEL'],
        ];

        $this->assertSame(23, KeitaroClient::pickCampaignGroupId(51, 'EGO', $groups));
        $this->assertSame(19, KeitaroClient::pickCampaignGroupId(51, 'BRO', $groups));
        $this->assertSame(27, KeitaroClient::pickCampaignGroupId(51, 'JEL', $groups));
    }

    public function test_keeps_configured_group_when_it_is_visible(): void
    {
        $this->assertSame(23, KeitaroClient::pickCampaignGroupId(23, 'EGO', [
            ['id' => 23, 'name' => 'EGO'],
        ]));
    }

    private function client(): KeitaroClient
    {
        return new KeitaroClient(Mockery::mock(SalesPostbackService::class));
    }
}
