<?php

namespace App\Support;

/**
 * Even out offer counts across pool hosts using the same rule as OriginPool:
 * fewest offers of this brand first, then least total load.
 */
class OriginRebalancePlanner
{
    /**
     * @param  list<string>  $hosts
     * @param  list<array{id: int, brand: string, host: string}>  $offers
     * @param  array<string, int|null>  $limits  host => max_offers (null = unlimited)
     * @return list<array{id: int, brand: string, from: string, to: string}>
     */
    public static function plan(array $hosts, array $offers, array $limits = []): array
    {
        $hosts = array_values(array_unique(array_filter(array_map(
            static fn (string $host): string => strtolower(trim($host)),
            $hosts,
        ), static fn (string $host): bool => $host !== '')));

        if (count($hosts) < 2) {
            return [];
        }

        $byHost = [];
        $load = array_fill_keys($hosts, 0);
        $brandOnHost = [];

        foreach ($offers as $offer) {
            $host = strtolower(trim((string) ($offer['host'] ?? '')));
            if (! isset($load[$host])) {
                continue;
            }
            $id = (int) $offer['id'];
            $brand = mb_strtolower(trim((string) ($offer['brand'] ?? '')));
            $byHost[$host][$id] = $brand;
            $load[$host]++;
            if ($brand !== '') {
                $brandOnHost[$brand][$host] = (int) ($brandOnHost[$brand][$host] ?? 0) + 1;
            }
        }

        $total = array_sum($load);
        $target = self::targets($hosts, $load, $total, $limits);
        $moves = [];
        $guard = $total + 1;

        while ($guard-- > 0) {
            $from = self::heaviestOver($hosts, $load, $target);
            if ($from === null) {
                break;
            }

            $dests = self::underfilled($hosts, $load, $target, $limits);
            if ($dests === []) {
                break;
            }

            $pick = self::peelOffer($byHost[$from] ?? []);
            if ($pick === null) {
                break;
            }

            [$id, $brand] = $pick;
            $to = self::pickHost($dests, $load, $brandOnHost[$brand] ?? []);
            if ($to === null || $to === $from) {
                break;
            }

            unset($byHost[$from][$id]);
            $byHost[$to][$id] = $brand;
            $load[$from]--;
            $load[$to]++;
            if ($brand !== '') {
                $brandOnHost[$brand][$from] = max(0, (int) ($brandOnHost[$brand][$from] ?? 0) - 1);
                $brandOnHost[$brand][$to] = (int) ($brandOnHost[$brand][$to] ?? 0) + 1;
            }

            $moves[] = [
                'id' => $id,
                'brand' => $brand,
                'from' => $from,
                'to' => $to,
            ];
        }

        return $moves;
    }

    /**
     * Extra slots go to currently emptiest hosts so new boxes fill first.
     *
     * @param  list<string>  $hosts
     * @param  array<string, int>  $load
     * @param  array<string, int|null>  $limits
     * @return array<string, int>
     */
    public static function targets(array $hosts, array $load, int $total, array $limits = []): array
    {
        $k = count($hosts);
        if ($k === 0) {
            return [];
        }

        $base = intdiv($total, $k);
        $rem = $total % $k;
        $ordered = $hosts;
        usort($ordered, function (string $a, string $b) use ($load): int {
            $cmp = ($load[$a] ?? 0) <=> ($load[$b] ?? 0);
            if ($cmp !== 0) {
                return $cmp;
            }

            return strcmp($a, $b);
        });

        $target = array_fill_keys($hosts, $base);
        for ($i = 0; $i < $rem; $i++) {
            $target[$ordered[$i]]++;
        }

        foreach ($hosts as $host) {
            $max = $limits[$host] ?? null;
            if ($max !== null && $max > 0 && $target[$host] > $max) {
                $target[$host] = $max;
            }
        }

        return $target;
    }

    /**
     * @param  list<string>  $hosts
     * @param  array<string, int>  $load
     * @param  array<string, int>  $target
     */
    private static function heaviestOver(array $hosts, array $load, array $target): ?string
    {
        $best = null;
        $bestOver = 0;

        foreach ($hosts as $host) {
            $over = ($load[$host] ?? 0) - ($target[$host] ?? 0);
            if ($over > $bestOver || ($over === $bestOver && $over > 0 && ($best === null || $host < $best))) {
                $best = $host;
                $bestOver = $over;
            }
        }

        return $bestOver > 0 ? $best : null;
    }

    /**
     * @param  list<string>  $hosts
     * @param  array<string, int>  $load
     * @param  array<string, int>  $target
     * @param  array<string, int|null>  $limits
     * @return list<string>
     */
    private static function underfilled(array $hosts, array $load, array $target, array $limits): array
    {
        $dests = [];
        foreach ($hosts as $host) {
            $n = $load[$host] ?? 0;
            if ($n >= ($target[$host] ?? 0)) {
                continue;
            }
            $max = $limits[$host] ?? null;
            if ($max !== null && $max > 0 && $n >= $max) {
                continue;
            }
            $dests[] = $host;
        }

        return $dests;
    }

    /**
     * Peel the brand that is most stacked on this host (then lowest id).
     *
     * @param  array<int, string>  $offers  id => brand
     * @return array{0: int, 1: string}|null
     */
    private static function peelOffer(array $offers): ?array
    {
        if ($offers === []) {
            return null;
        }

        $brandN = [];
        foreach ($offers as $brand) {
            if ($brand === '') {
                continue;
            }
            $brandN[$brand] = ($brandN[$brand] ?? 0) + 1;
        }

        $bestId = null;
        $bestScore = -1;
        foreach ($offers as $id => $brand) {
            $score = $brandN[$brand] ?? 0;
            if ($bestId === null || $score > $bestScore || ($score === $bestScore && $id < $bestId)) {
                $bestId = (int) $id;
                $bestScore = $score;
            }
        }

        return $bestId === null ? null : [$bestId, $offers[$bestId] ?? ''];
    }

    /**
     * @param  list<string>  $dests
     * @param  array<string, int>  $load
     * @param  array<string, int>  $brandOnHost
     */
    private static function pickHost(array $dests, array $load, array $brandOnHost): ?string
    {
        $best = null;
        $bestBrand = null;
        $bestLoad = null;

        foreach ($dests as $host) {
            $brandN = (int) ($brandOnHost[$host] ?? 0);
            $n = (int) ($load[$host] ?? 0);
            if (
                $best === null
                || $brandN < $bestBrand
                || ($brandN === $bestBrand && $n < $bestLoad)
                || ($brandN === $bestBrand && $n === $bestLoad && $host < $best)
            ) {
                $best = $host;
                $bestBrand = $brandN;
                $bestLoad = $n;
            }
        }

        return $best;
    }
}
