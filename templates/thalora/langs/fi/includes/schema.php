<?php
/**
 * JSON-LD schema blocks. Pass $schema_type and optional $schema_data.
 */
function render_schema(string $page = 'home', array $extra = []): void {
    $site = SITE_NAME;
    $url = SITE_URL;
    $platform_image = page_url(platform_image_path());
    $logo_url = page_url('static/img/logo.webp');

    $organization = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => $site,
        'url' => $url,
        'logo' => $logo_url,
        'description' => 'Käytä kryptovaluuttoja, forexia ja globaaleja omaisuuseriä yhdestä alustasta. ' . $site . ' yhdistää live-analytiikan, avustetun automaation ja asiantuntijatuen.',
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
        'description' => $site . ' — tekoälypohjainen kaupankäyntialusta, live-analytiikalla, avustetulla automaatiolla ja pääsyllä useille markkinoille.',
        'image' => $platform_image,
        'screenshot' => $platform_image,
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.7',
            'ratingCount' => '337',
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
                'name' => 'Mitkä vaiheet tarvitaan kaupankäynnin aloittamiseen?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Rekisteröidy avaintiedoillasi, vahvista sähköposti ja talleta vähintään ' . money_min() . '. Saat käyttöön livekaaviot, kaupankäyntityökalut, markkina-analyysin ja omistetun tuen.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Onko ' . $site . ' luotettava rahojeni ja tietojeni käsittelyssä?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Istunnot on suojattu SSL-salauksella, kaksivaiheinen tunnistus on saatavilla ja rahoitustapahtumat kulkevat luotettavien kumppanien kautta. Tietosuojakäytännöt on kuvattu sivustolla.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kuinka nopeasti voin nostaa varoja?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Nostoja voi pyytää milloin tahansa tiliportaalista. Käsittely kestää yleensä 1–3 arkipäivää menetelmästä riippuen. Kulut ja ajat näkyvät ennen vahvistusta.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Tarvitaanko kaupankäyntikokemusta ennen aloittamista?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Aiempaa kokemusta ei tarvita. Käyttöönotto, oppaat ja tekoälyllä tehostetut työkalut auttavat oppimaan omaan tahtiin.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Näin aloitat kaupankäynnin palvelussa ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Luo tilisi', 'text' => 'Rekisteröidy perustiedoillasi ja saat turvallisen pääsyn alustaan.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Vahvista sähköposti', 'text' => 'Vahvista sähköposti saadaksesi täyden pääsyn alustaan.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Talleta tilille', 'text' => 'Talleta vähintään ' . money_min() . ' tilisiirrolla, kortilla tai e-lompakolla.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Aseta strategia', 'text' => 'Valitse riskitaso ja mieltymykset — manuaalisesti tai automaattisesti.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Aloita kaupankäynti', 'text' => 'Astu markkinoille luottavaisesti, reaaliaikaisella datalla ja tekoälynäkemyksillä.'],
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
            'name' => $site . ' — tekoälykaupankäyntialusta',
            'description' => $site . ' — mobiilikäyttöliittymä live BTC/USDT-kryptokaaviolla ja salkkutyökaluilla',
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
