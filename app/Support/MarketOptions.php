<?php

namespace App\Support;

class MarketOptions
{
    /**
     * @return array<string, array{code: string, name: string, lang?: string, phone?: string}>
     */
    public static function geoPresetsByCode(): array
    {
        $map = [];

        foreach (config('offerra.geo_presets', []) as $preset) {
            $map[strtoupper($preset['code'])] = $preset;
        }

        return $map;
    }

    /**
     * @return list<string>
     */
    public static function languageCodes(): array
    {
        return array_column(config('offerra.languages', []), 'code');
    }

    public static function phoneForGeo(string $geo): string
    {
        $geo = strtoupper($geo);
        $preset = self::geoPresetsByCode()[$geo] ?? null;

        if ($preset && ! empty($preset['phone'])) {
            return strtolower($preset['phone']);
        }

        return strtolower($geo);
    }

    public static function defaultLangForGeo(string $geo): string
    {
        $geo = strtoupper($geo);
        $preset = self::geoPresetsByCode()[$geo] ?? null;

        if ($preset && ! empty($preset['lang'])) {
            return strtolower($preset['lang']);
        }

        return 'en';
    }

    public static function normalizeGeo(string $geo): string
    {
        return strtoupper(substr(preg_replace('/[^A-Za-z]/', '', $geo), 0, 2));
    }
}
