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
        'description' => $site . ' je trgovalna platforma z umetno inteligenco za ' . market_audience() . ' in pokriva kripto, forex ter svetovne trge.',
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
        'description' => $site . ' — trgovalna platforma z UI za ' . market_audience() . ' z analizo trgov v realnem času in podprtimi signali.',
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
                'name' => 'Kaj je ' . $site . ' in kako deluje?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $site . ' je trgovalna platforma z umetno inteligenco, ki v realnem času analizira trge in označi priložnosti z opozorili ter orodji za tveganje. Ustvarite račun, opravite preverjanje in napolnite od ' . MIN_DEPOSIT . ' ' . CURRENCY . '.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Ali so moji podatki in sredstva na ' . $site . ' varno obravnavani?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $site . ' varuje račune s šifriranjem SSL, dvofaktorskim overjanjem ter dokumentiranimi koraki pologa in dviga. Trgovanje še vedno prinaša tveganje izgube kapitala.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kdaj lahko dvignem s ' . $site . '?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Dvig lahko zahtevate kadar koli z nadzorne plošče ' . $site . '. Obdelava običajno traja 1–3 delovne dni. Provizije in roki so na ' . $site . ' prikazani pred potrditvijo.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Ali potrebujem izkušnje s trgovanjem za ' . $site . '?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Ne. ' . $site . ' vodi registracijo, polog in osnovno navigacijo za ' . market_audience() . '. Napredna orodja ostanejo na voljo, ko ste pripravljeni. Podpora je na voljo 24/7.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kakšne donose lahko pričakujem na ' . $site . '?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $site . ' ne jamči donosov. Rezultati so odvisni od kapitala, strategije, volatilnosti in tega, kako upravljate tveganje.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kateri trgi so na voljo na ' . $site . '?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $site . ' pokriva digitalna sredstva in instrumente več trgov na eni plošči, z opozorili in podprto avtomatizacijo za ' . market_audience() . '.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Kako začeti trgovati z ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Registracija na ' . $site, 'text' => 'Prijavite se z imenom, e-pošto in telefonom ter ustvarite račun ' . $site . '.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Preverite račun ' . $site, 'text' => 'Opravite vodeno preverjanje in nastavite preference tveganja.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Napolnite račun ' . $site, 'text' => 'Položite najmanj ' . MIN_DEPOSIT . ' ' . CURRENCY . ' z bančnim nakazilom, kartico ali e-denarnico.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Nastavite omejitve ' . $site, 'text' => 'Izberite raven tveganja in nastavitve — ročno ali samodejno.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Trgujte na mizi ' . $site, 'text' => 'Uporabite grafikone v živo, naročila in podporo v ' . $site . '.'],
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
            'description' => $site . ' — mobilni vmesnik za trgovanje z grafikonom BTC/USDT v živo in orodji portfelja',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | trgovalna platforma z UI — pogled grafikona na telefonu',
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
