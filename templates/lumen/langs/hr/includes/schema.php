<?php
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
        'description' => 'Jasna investicijska platforma potpomognuta AI-jem za kripto i multi-asset tržišta.',
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
        'description' => 'Jednostavna AI investicijska platforma s tržištima uživo, vođenim uvidima i mirnim prostorom za trgovanje.',
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
                'name' => 'Kako započeti?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Izradite račun u nekoliko minuta, dovršite kratku provjeru i financirajte račun minimalnim depozitom od ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Otključat ćete cijelu platformu, uključujući grafikone uživo i alate.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Jesu li moj novac i podaci sigurni?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Račune štitimo SSL enkripcijom, dvofaktorskom autentifikacijom i sigurnim rukovanjem sredstvima putem pouzdanih pružatelja plaćanja. Osobni podaci upravljaju se prema strogim sigurnosnim politikama.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kada mogu povući dobit?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Isplate se mogu zatražiti bilo kada s nadzorne ploče računa. Obrada obično traje 1–3 radna dana ovisno o metodi. Naknade i rokovi prikazani su unaprijed.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Trebam li iskustvo u trgovanju?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Prethodno iskustvo nije potrebno. Vođeno uvođenje, jednostavni vodiči i alati potpomognuti AI-jem pomažu vam vlastitim tempom — uz podršku 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Kako započeti trgovanje s ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Otvorite račun', 'text' => 'Registrirajte se osnovnim podacima i ostvarite siguran pristup platformi.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Potvrdite e-poštu', 'text' => 'Potvrdite e-poštu kako biste otključali potpuni pristup.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Financirajte račun', 'text' => 'Uplatite najmanje ' . MIN_DEPOSIT . ' ' . CURRENCY . ' bankovnim transferom, karticom ili e-novčanikom.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Postavite strategiju', 'text' => 'Odaberite razinu rizika i preferencije — ručno ili automatizirano.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Počnite trgovati', 'text' => 'Uđite na tržište uz podatke u stvarnom vremenu i AI uvide.'],
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
            'name' => $site . ' AI Trading Platform',
            'description' => $site . ' mobilno sučelje za trgovanje s grafikonom kripto BTC/USDT uživo i alatima portfelja',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI platforma za trgovanje — mobilni prikaz grafikona',
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
