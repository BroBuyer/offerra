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
        'description' => 'Átlátható, AI-támogatott befektetési platform kriptó és többeszközös piacokhoz.',
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
        'description' => 'Egyszerű AI befektetési platform élő piacokkal, vezetett betekintésekkel és nyugodt kereskedési munkaterülettel.',
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
                'name' => 'Hogyan kezdjek el?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Hozzon létre fiókot percek alatt, végezzen el egy rövid ellenőrzési lépést, és töltse fel fiókját minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . ' befizetéssel. Feloldja a teljes platformot, beleértve az élő chartokat és kereskedési eszközöket.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Biztonságban vannak a pénzem és adataim?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Fiókokat SSL titkosítással, kétfaktoros hitelesítéssel és biztonságos pénzkezeléssel védünk megbízható fizetési szolgáltatókon keresztül. Személyes adatait szigorú biztonsági irányelvek szerint kezeljük.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Mikor vehetem ki a nyereséget?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'A kifizetések bármikor kérhetők a fiók irányítópultjáról. A feldolgozás általában 1–3 munkanapot vesz igénybe a módszertől függően. A díjak és határidők előre megjelennek.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Szükségem van kereskedési tapasztalatra?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Előzetes tapasztalat nem szükséges. Vezetett belépés, egyszerű oktatóanyagok és AI-támogatott eszközök segítenek saját tempóban tanulni — 0–24 támogatással.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Hogyan kezdjen el kereskedni a ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Fiók létrehozása', 'text' => 'Regisztráljon alapvető adataival, és kapjon biztonságos hozzáférést a platformhoz.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'E-mail megerősítése', 'text' => 'Erősítse meg e-mail címét a teljes platformhozzáférés feloldásához.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Fiók feltöltése', 'text' => 'Fizessen be minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . ' banki átutalással, kártyával vagy e-pénztárcával.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Stratégia beállítása', 'text' => 'Válasszon kockázati szintet és kereskedési preferenciákat — manuális vagy automatizált.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Kereskedés indítása', 'text' => 'Lépjen a piacra magabiztosan valós idejű adatokkal és AI betekintésekkel.'],
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
            'description' => $site . ' mobil kereskedési felület élő BTC/USDT kriptó charttal és portfólió eszközökkel',
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
