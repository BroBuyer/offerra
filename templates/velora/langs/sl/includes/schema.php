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
        'description' => 'Jasna naložbena platforma za kripto trge in trge z več sredstvi, podprta z umetno inteligenco.',
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
        'description' => 'Preprosta naložbena platforma z umetno inteligenco z živimi trgi, vodenimi vpogledi in umirjenim delovnim prostorom za trgovanje.',
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
                'name' => 'Kako naj začnem?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Ustvarite račun v nekaj minutah, opravite kratek korak preverjanja in napolnite svoj račun z minimalnim pologom v višini' . MIN_DEPOSIT . ' ' . CURRENCY . '. Odklenili boste celotno platformo, vključno z grafikoni v živo in orodji za trgovanje.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Ali so moj denar in podatki varni?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Račune ščitimo s šifriranjem SSL, dvofaktorsko avtentikacijo in varnim upravljanjem sredstev prek zaupanja vrednih ponudnikov plačil. Vaši osebni podatki se upravljajo v skladu s strogimi varnostnimi politikami.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kdaj lahko dvignem dobiček?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Dvige lahko kadar koli zahtevate na nadzorni plošči vašega računa. Obdelava običajno traja 1–3 delovne dni, odvisno od metode. Pristojbine in časovnice so prikazane vnaprej.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Ali potrebujem izkušnje s trgovanjem?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Predhodne izkušnje niso potrebne. Vodeno uvajanje, preproste vadnice in orodja, podprta z umetno inteligenco, vam pomagajo pri učenju s svojim tempom, saj je na voljo podpora 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Kako začeti trgovati z' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Ustvarite svoj račun', 'text' => 'Prijavite se s svojimi osnovnimi podatki in pridobite varen dostop do platforme.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Potrdite svoj e-poštni naslov', 'text' => 'Potrdite svoj e-poštni naslov, da odklenete popoln dostop do platforme.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Financirajte svoj račun', 'text' => 'Položite najmanj' . MIN_DEPOSIT . ' ' . CURRENCY . 'prek bančnega nakazila, kartice ali e-denarnice.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Določite svojo strategijo', 'text' => 'Izberite stopnjo tveganja in trgovalne nastavitve – ročno ali samodejno.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Začni trgovati', 'text' => 'Samozavestno vstopite na trg z uporabo podatkov v realnem času in vpogledov AI.'],
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
            'name' => $site . 'Trgovalna platforma AI',
            'description' => $site . 'mobilni trgovalni vmesnik z grafikonom kriptovalut BTC/USDT v živo in portfeljskimi orodji',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . '| Platforma za trgovanje z umetno inteligenco — mobilni pogled grafikona',
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
