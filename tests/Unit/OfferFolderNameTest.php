<?php

namespace Tests\Unit;

use App\Services\OfferGenerator;
use Tests\TestCase;

class OfferFolderNameTest extends TestCase
{
    public function test_folder_name_includes_geo_lang_affiliate_brand_domain_and_date(): void
    {
        $name = app(OfferGenerator::class)->buildFolderName([
            'brand' => 'Vadsocotin',
            'domain' => 'vadsocotiro.com',
            'geo' => 'RO',
            'lang' => 'ro',
            'affiliate_tag' => 'JEL',
        ]);

        $this->assertSame('RO_ro_JEL_Vadsocotin_vadsocotiro.com_'.now()->format('Y-m-d'), $name);
    }
}
