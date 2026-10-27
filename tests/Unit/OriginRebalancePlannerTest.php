<?php

namespace Tests\Unit;

use App\Support\OriginRebalancePlanner;
use Tests\TestCase;

class OriginRebalancePlannerTest extends TestCase
{
    public function test_empty_and_full_hosts_even_out(): void
    {
        $hosts = ['10.0.0.1', '10.0.0.2', '10.0.0.3'];
        $offers = [];
        for ($i = 1; $i <= 6; $i++) {
            $offers[] = ['id' => $i, 'brand' => 'Acme', 'host' => '10.0.0.1'];
        }
        for ($i = 7; $i <= 9; $i++) {
            $offers[] = ['id' => $i, 'brand' => 'Beta', 'host' => '10.0.0.2'];
        }

        $moves = OriginRebalancePlanner::plan($hosts, $offers);
        $after = $this->apply($offers, $moves);

        $this->assertSame(9, array_sum($after));
        $this->assertLessThanOrEqual(1, max($after) - min($after));
        $this->assertSame(3, $after['10.0.0.1']);
        $this->assertSame(3, $after['10.0.0.2']);
        $this->assertSame(3, $after['10.0.0.3']);
        $this->assertNotEmpty($moves);
    }

    public function test_already_even_is_a_noop(): void
    {
        $hosts = ['10.0.0.1', '10.0.0.2'];
        $offers = [
            ['id' => 1, 'brand' => 'A', 'host' => '10.0.0.1'],
            ['id' => 2, 'brand' => 'B', 'host' => '10.0.0.2'],
        ];

        $this->assertSame([], OriginRebalancePlanner::plan($hosts, $offers));
    }

    public function test_brand_prefers_the_emptier_host_for_that_brand(): void
    {
        $hosts = ['10.0.0.1', '10.0.0.2'];
        $offers = [
            ['id' => 1, 'brand' => 'funnel', 'host' => '10.0.0.1'],
            ['id' => 2, 'brand' => 'funnel', 'host' => '10.0.0.1'],
            ['id' => 3, 'brand' => 'funnel', 'host' => '10.0.0.1'],
            ['id' => 4, 'brand' => 'other', 'host' => '10.0.0.1'],
        ];

        $moves = OriginRebalancePlanner::plan($hosts, $offers);
        $this->assertCount(2, $moves);

        foreach ($moves as $move) {
            $this->assertSame('10.0.0.2', $move['to']);
        }

        $movedBrands = array_column($moves, 'brand');
        $this->assertContains('funnel', $movedBrands);
    }

    public function test_single_host_does_nothing(): void
    {
        $this->assertSame([], OriginRebalancePlanner::plan(
            ['10.0.0.1'],
            [['id' => 1, 'brand' => 'A', 'host' => '10.0.0.1']],
        ));
    }

    /**
     * @param  list<array{id: int, brand: string, host: string}>  $offers
     * @param  list<array{id: int, from: string, to: string}>  $moves
     * @return array<string, int>
     */
    private function apply(array $offers, array $moves): array
    {
        $load = [];
        foreach ($offers as $offer) {
            $load[$offer['host']] = ($load[$offer['host']] ?? 0) + 1;
        }
        foreach ($moves as $move) {
            $load[$move['from']]--;
            $load[$move['to']] = ($load[$move['to']] ?? 0) + 1;
        }

        return $load;
    }
}
