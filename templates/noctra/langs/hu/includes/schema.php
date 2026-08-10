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
        'description' => 'Sötét piaci terminál kripto, forex és többeszközös kereskedéshez AI-támogatott jelekkel.',
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
        'description' => 'Tőzsde-stílusú kereskedési terminál élő piacokkal, portfólióeszközökkel és AI végrehajtási kontextussal.',
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
                'name' => 'Hogyan kezdhetek?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Hozzon létre fiókot percek alatt, fejezze be a rövid ellenőrzést, és töltse fel számláját legalább ' . MIN_DEPOSIT . ' ' . CURRENCY . ' összeggel. Feloldja a teljes platformot élő chartokkal és kereskedési eszközökkel.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Biztonságban vannak a pénzem és az adataim?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'A fiókokat SSL titkosítással, kétfaktoros hitelesítéssel és megbízható fizetési szolgáltatókon keresztüli biztonságos kezeléssel védjük. Személyes adatait szigorú biztonsági szabályzat szerint kezeljük.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Mikor vehetem ki a nyereséget?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'A kifizetéseket bármikor kérheti a fiók irányítópultjáról. A feldolgozás jellemzően 1–3 munkanapot vesz igénybe a módszertől függően. A díjak és határidők előre láthatók.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Szükségem van kereskedési tapasztalatra?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Előzetes tapasztalat nem szükséges. Irányított onboarding, egyszerű útmutatók és AI-eszközök segítenek saját tempóban tanulni, 24/7 támogatással.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Hogyan kezdjen kereskedni a(z) ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Hozza létre fiókját', 'text' => 'Regisztráljon alapadataival, és kapjon biztonságos hozzáférést a platformhoz.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Erősítse meg e-mailjét', 'text' => 'Erősítse meg e-mailjét a teljes platformhozzáféréshez.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Töltse fel a fiókját', 'text' => 'Helyezzen el legalább ' . MIN_DEPOSIT . ' ' . CURRENCY . ' összeget banki átutalással, kártyával vagy e-pénztárcával.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Állítsa be stratégiáját', 'text' => 'Válassza ki a kockázati szintet és a kereskedési beállításokat — manuális vagy automatikus.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Kezdjen kereskedni', 'text' => 'Lépjen a piacra magabiztosan valós idejű adatokkal és AI betekintésekkel.'],
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
            'name' => $site . ' AI kereskedési platform',
            'description' => $site . ' mobil kereskedési felület élő BTC/USDT kriptovaluta charttal és portfólióeszközökkel',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI kereskedési platform — mobil chart nézet',
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
