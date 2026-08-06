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
        'description' => 'Tekoälypohjainen kaupankäyntialusta kryptolle, valuuttamarkkinoille ja maailmanmarkkinoille.',
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
        'description' => 'Älykäs kaupankäyntialusta reaaliaikaisella markkina-analyysillä ja tekoälyavusteisilla signaaleilla.',
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
                'name' => 'Miten pääsen alkuun?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Luo tili minuuteissa, suorita lyhyt vahvistus ja rahoita tilisi vähintään ' . MIN_DEPOSIT . ' ' . CURRENCY . ' talletuksella. Saat käyttöösi koko alustan, mukaan lukien live-kaaviot ja kaupankäyntityökalut.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Onko rahani ja tietoni turvassa?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Suojaamme tilejä SSL-salauksella, kaksivaiheisella tunnistautumisella ja turvallisella varojen käsittelyllä luotettujen maksupalveluntarjoajien kautta. Henkilötietojasi hallinnoidaan tiukkojen tietoturvakäytäntöjen mukaisesti.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Milloin voin nostaa voittoja?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Nostoja voi pyytää milloin tahansa tilin hallintapaneelista. Käsittely kestää tyypillisesti 1–3 arkipäivää menetelmästä riippuen. Kulut ja aikataulut näytetään etukäteen.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Tarvitsenko kaupankäyntikokemusta?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Aiempaa kokemusta ei tarvita. Ohjattu aloitus, selkeät oppaat ja tekoälyavusteiset työkalut auttavat oppimaan omaan tahtiisi, ja tuki on saatavilla 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Näin aloitat kaupankäynnin palvelussa ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Luo tilisi', 'text' => 'Rekisteröidy perustiedoillasi ja saat turvallisen pääsyn alustalle.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Vahvista sähköpostisi', 'text' => 'Vahvista sähköpostisi avataksesi koko alustan.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Rahoita tilisi', 'text' => 'Talleta vähintään ' . MIN_DEPOSIT . ' ' . CURRENCY . ' tilisiirrolla, kortilla tai e-lompakolla.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Määritä strategiasi', 'text' => 'Valitse riskitaso ja kaupankäyntiasetukset — manuaalinen tai automatisoitu.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Aloita kaupankäynti', 'text' => 'Siirry markkinoille luottavaisesti reaaliaikaisen datan ja tekoälynäkemyksien avulla.'],
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
            'name' => $site . ' tekoälykaupankäyntialusta',
            'description' => $site . ' mobiilikaupankäyntikäyttöliittymä live BTC/USDT-kryptokaavion ja salkkutyökalujen kanssa',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Tekoälykaupankäyntialusta — mobiilikaavionäkymä',
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
