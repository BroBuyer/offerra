<?php

namespace Tests\Feature;

use App\Services\TemplateCatalog;
use App\Support\MarketOptions;
use Tests\TestCase;

class ArabicSaudiMarketTest extends TestCase
{
    public function test_saudi_arabia_defaults_to_arabic_sar_and_sa_phone(): void
    {
        $preset = MarketOptions::geoPresetsByCode()['SA'] ?? null;

        $this->assertNotNull($preset);
        $this->assertSame('ar', MarketOptions::defaultLangForGeo('SA'));
        $this->assertSame('sa', MarketOptions::phoneForGeo('SA'));
        $this->assertSame('SAR', $preset['currency'] ?? null);
    }

    public function test_every_template_exposes_arabic(): void
    {
        $catalog = app(TemplateCatalog::class);

        foreach ($catalog->ids() as $id) {
            $this->assertContains(
                'ar',
                $catalog->languageCodesFor($id),
                $id.' missing Arabic language pack',
            );
        }
    }
}
