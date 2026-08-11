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
        'description' => 'Selkeä tekoälyavusteinen sijoitusalusta krypto- ja monivarojen markkinoille.',
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
        'description' => 'Yksinkertainen tekoälysijoitusalusta live-markkinoilla, ohjatuilla näkemyksillä ja rauhallisella kaupankäyntityötilalla.',
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
                    'text' => 'Luo tili minuuteissa, suorita lyhyt tunnistautumisvaihe ja rahoita tilisi vähimmäistalletuksella ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Saat käyttöösi koko alustan, mukaan lukien live-kaaviot ja kaupankäyntityökalut.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Ovatko rahani ja tietoni turvassa?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Suojaamme tilejä SSL-salauksella, kaksivaiheisella tunnistautumisella ja turvallisella varojen käsittelyllä luotettujen maksupalveluntarjoajien kautta. Henkilötietojasi hallitaan tiukkojen tietoturvakäytäntöjen mukaisesti.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Milloin voin nostaa voittoja?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Nostoja voi pyytää milloin tahansa tilisi kojelaudasta. Käsittely kestää tyypillisesti 1–3 arkipäivää menetelmästä riippuen. Maksut ja aikataulut näytetään etukäteen.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Tarvitsenko kaupankäyntikokemusta?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Aiempaa kokemusta ei tarvita. Ohjattu käyttöönotto, yksinkertaiset oppaat ja tekoälyavusteiset työkalut auttavat oppimaan omaan tahtiisi, ja 24/7-tuki on saatavilla.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Miten aloitat kaupankäynnin palvelussa ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Luo tilisi', 'text' => 'Rekisteröidy perustiedoillasi ja saat turvallisen pääsyn alustaan.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Vahvista sähköpostisi', 'text' => 'Vahvista sähköpostisi avataksesi täyden alustan käyttöoikeuden.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Rahoita tilisi', 'text' => 'Talleta vähintään ' . MIN_DEPOSIT . ' ' . CURRENCY . ' tilisiirrolla, kortilla tai digilompakolla.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Aseta strategiasi', 'text' => 'Valitse riskitaso ja kaupankäyntimieltymykset — manuaalisesti tai automaattisesti.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Aloita kaupankäynti', 'text' => 'Astu markkinoille luottavaisesti reaaliaikaisen datan ja tekoälynäkemyksien avulla.'],
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
            'name' => $site . ' AI-kaupankäyntialusta',
            'description' => $site . ' mobiilikaupankäyntikäyttöliittymä live BTC/USDT -kryptokaaviolla ja salkkutyökaluilla',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI-kaupankäyntialusta — mobiilikaavionäkymä',
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
