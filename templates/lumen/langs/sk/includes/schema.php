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
        'description' => 'Prehľadná investičná platforma s podporou AI pre krypto a multi-asset trhy.',
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
        'description' => 'Jednoduchá AI investičná platforma s živými trhmi, vedenými poznatkami a pokojným obchodným prostredím.',
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
                'name' => 'Ako začať?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Vytvorte účet počas minút, dokončite krátke overenie a financujte účet minimálnym vkladom \\' . MIN_DEPOSIT . \\' \\' . CURRENCY . \\'. Odomknete celú platformu vrátane živých grafov a nástrojov.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Sú peniaze a dáta v bezpečí?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Účty chránime SSL šifrovaním, dvojfaktorovým overením a bezpečnou správou prostriedkov cez dôveryhodných poskytovateľov platieb. Osobné údaje podliehajú prísnym bezpečnostným zásadám.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kedy môžem vybrať zisky?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Výbery možno požiadať kedykoľvek z panela účtu. Spracovanie zvyčajne trvá 1–3 pracovné dni podľa metódy. Poplatky a lehoty sú uvedené vopred.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Potrebujem skúsenosti s obchodovaním?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Predchádzajúca skúsenosť nie je potrebná. Vedené onboarding, jednoduché tutoriály a nástroje s AI pomáhajú vlastným tempom — podpora 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Ako začať obchodovať s ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Otvorte účet', 'text' => 'Zaregistrujte sa základnými údajmi a získajte bezpečný prístup k platforme.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Overte e-mail', 'text' => 'Potvrďte e-mail a odomknite plný prístup.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Financujte účet', 'text' => 'Vložte minimálne \\' . MIN_DEPOSIT . \\' \\' . CURRENCY . \\' prevodom, kartou alebo e-walletom.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Nastavte stratégiu', 'text' => 'Zvoľte úroveň rizika a preferencie — ručne alebo automaticky.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Začnite obchodovať', 'text' => 'Vstupte na trh s dôverou vďaka dátam v reálnom čase a AI poznatkom.'],
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
            'description' => $site . ' mobilné obchodné rozhranie so živým grafom BTC/USDT a nástrojmi portfólia',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI obchodná platforma — mobilný pohľad na graf',
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
