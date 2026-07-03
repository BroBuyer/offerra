<?php

namespace App\Support;

use Symfony\Polyfill\Intl\Idn\Idn;

class DomainName
{
    public static function normalize(string $domain): string
    {
        $domain = trim($domain);
        $domain = preg_replace('#^https?://#i', '', $domain) ?? $domain;
        $domain = preg_replace('~[/?#].*$~', '', $domain) ?? $domain;
        $domain = rtrim($domain, '.');

        if ($domain === '') {
            return '';
        }

        $ascii = Idn::idn_to_ascii(
            $domain,
            Idn::IDNA_DEFAULT,
            Idn::INTL_IDNA_VARIANT_UTS46,
        );

        if ($ascii === false) {
            return strtolower($domain);
        }

        return strtolower($ascii);
    }

    public static function toUnicode(string $domain): string
    {
        $domain = trim($domain);

        if ($domain === '') {
            return '';
        }

        $unicode = Idn::idn_to_utf8(
            $domain,
            Idn::IDNA_DEFAULT,
            Idn::INTL_IDNA_VARIANT_UTS46,
        );

        if ($unicode === false) {
            return strtolower($domain);
        }

        return strtolower($unicode);
    }

    /** @return list<string> */
    public static function pathVariants(string $domain): array
    {
        $domain = trim($domain);

        if ($domain === '') {
            return [];
        }

        $ascii = self::normalize($domain);
        $unicode = self::toUnicode($ascii !== '' ? $ascii : $domain);
        $variants = [];

        foreach ([$domain, $ascii, $unicode] as $candidate) {
            $candidate = strtolower(trim($candidate));

            if ($candidate !== '' && ! in_array($candidate, $variants, true)) {
                $variants[] = $candidate;
            }
        }

        return $variants;
    }
}
