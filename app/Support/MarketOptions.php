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

    /**
     * Site language codes that are not ISO phone/country codes.
     * ja≠jp, en≠gb, da≠dk, cs≠cz, el≠gr, ka≠ge.
     *
     * @var list<string>
     */
    private const LANGUAGE_ONLY_CODES = ['en', 'ja', 'da', 'cs', 'el', 'ka'];

    public static function isLanguageOnlyCode(string $code): bool
    {
        return in_array(strtolower($code), self::LANGUAGE_ONLY_CODES, true);
    }

    public static function sanitizePhoneCode(string $code): string
    {
        $code = strtolower(trim($code));

        if (strlen($code) !== 2 || ! ctype_alpha($code) || self::isLanguageOnlyCode($code)) {
            return '';
        }

        return $code === 'uk' ? 'gb' : $code;
    }

    /**
     * @param  string|list<mixed>  $raw
     * @return list<string>
     */
    public static function sanitizePhoneCodes(string|array $raw): array
    {
        $list = is_array($raw) ? $raw : explode(',', $raw);
        $out = [];

        foreach ($list as $code) {
            $clean = self::sanitizePhoneCode((string) $code);
            if ($clean !== '' && ! in_array($clean, $out, true)) {
                $out[] = $clean;
            }
        }

        return $out;
    }

    /**
     * @param  string|list<mixed>  $rawCountries
     * @return array{phone: string, phone_countries: list<string>}
     */
    public static function normalizePhoneFields(string $phone, string|array $rawCountries, string $geo = ''): array
    {
        $countries = self::sanitizePhoneCodes($rawCountries);
        $phone = self::sanitizePhoneCode($phone);

        if ($phone === '') {
            $phone = $countries[0] ?? self::phoneForGeo($geo);
        }

        $phone = self::sanitizePhoneCode($phone) ?: 'gb';

        if (! in_array($phone, $countries, true)) {
            array_unshift($countries, $phone);
        }

        if ($countries === []) {
            $countries = [$phone];
        }

        return [
            'phone' => $phone,
            'phone_countries' => $countries,
        ];
    }

    public static function phoneForGeo(string $geo): string
    {
        $geo = strtoupper($geo);
        $preset = self::geoPresetsByCode()[$geo] ?? null;

        if ($preset && ! empty($preset['phone'])) {
            $phone = self::sanitizePhoneCode((string) $preset['phone']);
            if ($phone !== '') {
                return $phone;
            }
        }

        $fromGeo = self::sanitizePhoneCode($geo);

        return $fromGeo !== '' ? $fromGeo : 'gb';
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
