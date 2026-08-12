<?php
/**
 * JSON-LD schema blocks. Pass $schema_type and optional $schema_data.
 */
function render_schema(string $page = 'home', array $extra = []): void {
    $site = SITE_NAME;
    $url = SITE_URL;
    $platform_image = $url . '/' . platform_image_path();

    $organization = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => $site,
        'url' => $url,
        'logo' => $url . '/static/img/logo.svg',
        'description' => 'Přehledná AI platforma pro investování do krypto a multi-asset trhů.',
    ];

    $website = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => $site,
        'url' => $url,
        'publisher' => ['@type' => 'Organization', 'name' => $site],
    ];

    $software = [
        '@context' => 'https://schema.org',
        '@type' => 'SoftwareApplication',
        'name' => $site,
        'operatingSystem' => 'Web, Android, iOS',
        'applicationCategory' => 'FinanceApplication',
        'description' => 'Jednoduchá AI investiční platforma se živými trhy, vedenými insighty a klidným obchodním prostředím.',
        'image' => $platform_image,
        'screenshot' => $platform_image,
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.7',
            'ratingCount' => '1842',
            'bestRating' => '5',
        ],
        'offers' => [
            '@type' => 'Offer',
            'price' => MIN_DEPOSIT,
            'priceCurrency' => CURRENCY,
        ],
    ];

    $faq = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => 'Jak začít?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Vytvořte účet během minut, dokončete krátký verifikační krok a financujte účet minimálním vkladem ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Odemknete plnou platformu včetně živých grafů a obchodních nástrojů.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Jsou moje peníze a data v bezpečí?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Chráníme účty SSL šifrováním, dvoufaktorovou autentizací a bezpečným zpracováním prostředků prostřednictvím důvěryhodných poskytovatelů plateb. Vaše osobní data jsou spravována pod přísnými bezpečnostními zásadami.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kdy mohu vybrat zisky?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Výběry lze kdykoli požádat z dashboardu účtu. Zpracování obvykle trvá 1–3 pracovní dny podle metody. Poplatky a termíny jsou zobrazeny předem.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Potřebuji zkušenosti s obchodováním?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Předchozí zkušenosti nejsou vyžadovány. Vedený onboarding, jednoduché tutoriály a AI nástroje vám pomohou učit se vlastním tempem s dostupnou podporou 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Jak začít obchodovat s ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Vytvořit účet', 'text' => 'Zaregistrujte se se základními údaji a získejte bezpečný přístup k platformě.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Ověřit e-mail', 'text' => 'Potvrďte e-mail a odemkněte plný přístup k platformě.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Financovat účet', 'text' => 'Vložte minimálně ' . MIN_DEPOSIT . ' ' . CURRENCY . ' bankovním převodem, kartou nebo e-peněženkou.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Nastavit strategii', 'text' => 'Zvolte úroveň rizika a obchodní preference — manuální nebo automatizované.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Začít obchodovat', 'text' => 'Vstupte na trh sebevědomě s daty v reálném čase a AI insighty.'],
        ],
    ];

    $blocks = [$organization, $website];

    if ($page === 'home') {
        $blocks[] = $software;
        $blocks[] = $faq;
        $blocks[] = $howto;
        $blocks[] = [
            '@context' => 'https://schema.org',
            '@type' => 'ImageObject',
            'name' => $site . ' AI obchodní platforma',
            'description' => $site . ' mobilní obchodní rozhraní se živým krypto grafem BTC/USDT a nástroji portfolia',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI obchodní platforma — mobilní zobrazení grafu',
            'representativeOfPage' => true,
        ];
    }

    if (!empty($extra['breadcrumb'])) {
        $blocks[] = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $extra['breadcrumb'],
        ];
    }

    foreach ($blocks as $block) {
        echo '<script type="application/ld+json">' . json_encode($block, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }
}
