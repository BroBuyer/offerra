<?php

namespace Tests\Unit;

use App\Support\MarketOptions;
use Tests\TestCase;

class MarketOptionsTest extends TestCase
{
    public function test_uk_geo_normalizes_to_gb(): void
    {
        $this->assertSame('GB', MarketOptions::normalizeGeo('UK'));
        $this->assertSame('GB', MarketOptions::normalizeGeo('uk'));
        $this->assertSame('IT', MarketOptions::normalizeGeo('it'));
    }
}
