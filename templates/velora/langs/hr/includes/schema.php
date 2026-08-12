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
        'description' => 'Tamni tržišni terminal za kripto, forex i multi-asset trgovanje s AI signalima.',
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
        'description' => 'Burzovni trgovački terminal sa živim tržištima, portfolio alatima i AI kontekstom izvršenja.',
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
                    'text' => 'Otvorite račun u nekoliko minuta, dovršite kratku verifikaciju i uplatite minimalni depozit od ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Otključat ćete cijelu platformu uključujući žive grafikone i alate za trgovanje.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Jesu li moj novac i podaci sigurni?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Račune štitimo SSL enkripcijom, dvofaktorskom autentifikacijom i sigurnim rukovanjem sredstvima putem pouzdanih platnih pružatelja. Osobni podaci se upravljaju prema strogim sigurnosnim politikama.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kada mogu povući zaradu?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Isplate možete zatražiti bilo kada s nadzorne ploče. Obrada obično traje 1–3 radna dana ovisno o metodi. Naknade i rokovi prikazani su unaprijed.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Trebam li iskustvo u trgovanju?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Prethodno iskustvo nije potrebno. Vođeni onboarding, jednostavni vodiči i AI alati pomažu vam učiti vlastitim tempom uz podršku 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Kako započeti trgovanje s ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Otvorite račun', 'text' => 'Registrirajte se osnovnim podacima i dobijte siguran pristup platformi.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Potvrdite e-poštu', 'text' => 'Potvrdite e-poštu kako biste otključali puni pristup platformi.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Uplatite sredstva', 'text' => 'Uplatite najmanje ' . MIN_DEPOSIT . ' ' . CURRENCY . ' bankovnim transferom, karticom ili e-novčanikom.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Postavite strategiju', 'text' => 'Odaberite razinu rizika i preferencije trgovanja — ručno ili automatski.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Počnite trgovati', 'text' => 'Uđite na tržište samouvjereno uz podatke u stvarnom vremenu i AI uvide.'],
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
            'name' => $site . ' AI trgovačka platforma',
            'description' => $site . ' mobilno trgovačko sučelje sa živim BTC/USDT kriptografom i portfolio alatima',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI trgovačka platforma — mobilni prikaz grafikona',
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
