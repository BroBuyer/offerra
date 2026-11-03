<?php

namespace Tests\Feature;

use App\Support\MarketOptions;
use Tests\TestCase;

class ArabicSaudiMarketTest extends TestCase
{
    public function test_saudi_arabia_is_selectable_with_sar_and_sa_phone(): void
    {
        $preset = MarketOptions::geoPresetsByCode()['SA'] ?? null;
        $currencies = array_column(config('offerra.currencies', []), 'code');

        $this->assertNotNull($preset);
        $this->assertSame('en', MarketOptions::defaultLangForGeo('SA'));
        $this->assertSame('sa', MarketOptions::phoneForGeo('SA'));
        $this->assertSame('SAR', $preset['currency'] ?? null);
        $this->assertContains('SAR', $currencies);
        $this->assertNotContains('ar', MarketOptions::languageCodes());
    }
}
