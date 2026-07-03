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
}
