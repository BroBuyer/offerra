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
        'description' => 'Tumma markkinaterminaali krypto-, valuutta- ja monivarakaupankäyntiin tekoälyä hyödyntävillä signaaleilla.',
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
        'description' => 'Pörssityylinen kaupankäyntiterminaali live-markkinoilla, salkkutyökaluilla ja tekoälyä hyödyntävällä toteutuksella.',
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
                'name' => 'Miten aloitan?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Luo tili minuuteissa, tee lyhyt vahvistus ja rahoita tilisi vähintään ' . MIN_DEPOSIT . ' ' . CURRENCY . ' talletuksella. Saat käyttöösi koko alustan, mukaan lukien live-kaaviot ja kaupankäyntityökalut.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Ovatko rahani ja tietoni turvassa?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Suojaamme tilejä SSL-salauksella, kaksivaiheisella tunnistautumisella ja turvallisella varojen käsittelyllä luotettujen maksupalvelujen kautta. Henkilötietojasi hallitaan tiukkojen tietoturvakäytäntöjen mukaisesti.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Milloin voin nostaa voittoja?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Nostoja voi pyytää milloin tahansa tilin hallintapaneelista. Käsittely kestää yleensä 1–3 arkipäivää maksutavasta riippuen. Kulut ja aikataulut näytetään etukäteen.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Tarvitsenko kaupankäyntikokemusta?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Aiempaa kokemusta ei tarvita. Ohjattu aloitus, yksinkertaiset oppaat ja tekoälyä hyödyntävät työkalut auttavat oppimaan omaan tahtiisi, ja 24/7-tuki on saatavilla.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Miten aloitat kaupankäynnin palvelussa ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Luo tilisi', 'text' => 'Rekisteröidy perustiedoillasi ja saat turvallisen pääsyn alustalle.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Vahvista sähköpostisi', 'text' => 'Vahvista sähköpostisi avataksesi täyden alustapääsyn.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Rahoita tilisi', 'text' => 'Talleta vähintään ' . MIN_DEPOSIT . ' ' . CURRENCY . ' tilisiirrolla, kortilla tai e-lompakolla.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Aseta strategiasi', 'text' => 'Valitse riskitaso ja kaupankäyntiasetukset — manuaalisesti tai automaattisesti.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Aloita kaupankäynti', 'text' => 'Siirry markkinoille reaaliaikaisella datalla ja tekoälynäkemyksillä.'],
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
            'description' => $site . ' mobiili kaupankäyntikäyttöliittymä live BTC/USDT -kryptokaaviolla ja salkkutyökaluilla',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Tekoälykaupankäyntialusta — mobiili kaavionäkymä',
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
