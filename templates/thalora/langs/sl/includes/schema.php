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
        'description' => 'Dostopajte do kriptovalut, forexa in globalnih sredstev prek ene platforme.' . $site . 'združuje analitiko v živo, podprto avtomatizacijo in strokovno podporo.',
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
        'description' => $site . 'Trgovalna platforma, ki temelji na umetni inteligenci, z analitiko v živo, podprto avtomatizacijo in dostopom do več trgov.',
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
                'name' => 'Kakšni so koraki za začetek trgovanja?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Prijavite se z bistvenimi podatki, potrdite svoj e-poštni naslov in napolnite svoj račun z najmanj' . money_min() . '. To odklene grafikone v živo, orodja za trgovanje, analizo trga in namensko podporo.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Je'. $site . 'zanesljiv za ravnanje z mojim denarjem in informacijami?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Seje so zavarovane s šifriranjem SSL, na voljo je dvofaktorska avtentikacija, finančne transakcije pa se izvajajo prek zaupanja vrednih partnerjev. Prakse varovanja zasebnosti so opisane na spletnem mestu.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kako hitro lahko dvignem svoja sredstva?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Dvige lahko kadar koli zahtevate na portalu svojega računa. Obdelava običajno traja 1 do 3 delovne dni, odvisno od metode. Pristojbine in časi so prikazani, preden potrdite.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Ali je pred začetkom treba imeti izkušnje s trgovanjem?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Predhodne izkušnje s trgovanjem niso potrebne. Podpora za vklop, vadnice in orodja, izboljšana z umetno inteligenco, vam pomagajo pri učenju s svojim tempom.',
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
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Financirajte svoj račun', 'text' => 'Položite najmanj' . money_min() . 'prek bančnega nakazila, kartice ali e-denarnice.'],
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
