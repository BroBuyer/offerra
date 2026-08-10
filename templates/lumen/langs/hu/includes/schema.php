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
        'description' => 'Átlátható, MI-támogatott befektetési platform kripto- és multi-asset piacokra.',
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
        'description' => 'Egyszerű MI-befektetési platform élő piacokkal, vezetett elemzésekkel és nyugodt kereskedési felülettel.',
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
                'name' => 'Hogyan kezdjek?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Hozzon létre számlát percek alatt, végezze el a rövid ellenőrzést, és töltse fel a számlát legalább \\' . MIN_DEPOSIT . \\' \\' . CURRENCY . \\' összeggel. Ezután a teljes platform megnyílik, élő chartokkal és eszközökkel.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Biztonságban van a pénzem és az adataim?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'A számlákat SSL-titkosítással, kétfaktoros hitelesítéssel és megbízható fizetési szolgáltatókon keresztüli biztonságos kezeléssel védjük. A személyes adatok szigorú biztonsági szabályzatok alá tartoznak.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Mikor vehetek fel nyereséget?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'A kifizetés bármikor kérhető a számla irányítópultjáról. A feldolgozás általában 1–3 munkanap a módtól függően. A díjak és határidők előre láthatók.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Szükségem van kereskedési tapasztalatra?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Előzetes tapasztalat nem szükséges. Vezetett onboarding, egyszerű útmutatók és MI-eszközök segítenek a saját tempójában — 24/7 támogatással.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Hogyan kezdjen kereskedni a ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Nyissa meg számláját', 'text' => 'Regisztráljon alapadataival, és kapjon biztonságos hozzáférést a platformhoz.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Erősítse meg e-mailjét', 'text' => 'Erősítse meg e-mailjét a teljes hozzáféréshez.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Töltse fel számláját', 'text' => 'Helyezzen el legalább \\' . MIN_DEPOSIT . \\' \\' . CURRENCY . \\' összeget átutalással, kártyával vagy e-pénztárcával.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Állítsa be stratégiáját', 'text' => 'Válassza ki a kockázati szintet és a preferenciákat — manuálisan vagy automatizálva.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Kezdjen kereskedni', 'text' => 'Lépjen a piacra valós idejű adatokkal és MI-elemzésekkel.'],
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
            'description' => $site . ' mobil kereskedési felület élő BTC/USDT kriptocharttal és portfólióeszközökkel',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | MI kereskedési platform — mobil chartnézet',
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
