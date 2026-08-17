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
        'description' => 'Érje el a kriptovalutákat, a forexet és a globális eszközöket egyetlen platformon. ' . $site . ' élő elemzést, támogatott automatizálást és szakértői támogatást ötvöz.',
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
        'description' => $site . ' — MI-alapú kereskedési platform élő elemzéssel, támogatott automatizálással és többpiaci hozzáféréssel.',
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
                'name' => 'Milyen lépések kellenek a kereskedéshez?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Regisztráljon a lényeges adatokkal, erősítse meg e-mailjét, és töltsön fel legalább ' . money_min() . ' összeget. Ezzel élő grafikonok, kereskedési eszközök, piacelemzés és dedikált támogatás nyílik meg.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Megbízható a(z) ' . $site . ' a pénzem és adataim kezelésében?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'A munkamenetek SSL-titkosítottak, kétfaktoros hitelesítés elérhető, a pénzügyi tranzakciók megbízható partnereken mennek. Az adatvédelmi gyakorlat az oldalon leírt.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Milyen gyorsan vehetem ki az összeget?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Kifizetést bármikor kérhet a fiókportálról. A feldolgozás általában 1–3 munkanap a módszertől függően. A díjak és idők a megerősítés előtt láthatók.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Szükséges kereskedési tapasztalat a kezdéshez?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Előzetes tapasztalat nem szükséges. Az onboarding, az útmutatók és az MI-támogatott eszközök segítenek a saját tempójában tanulni.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Hogyan kezdjen kereskedni a(z) ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Hozza létre fiókját', 'text' => 'Regisztráljon néhány adattal, és kapjon biztonságos hozzáférést a platformhoz.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Erősítse meg e-mailjét', 'text' => 'Erősítse meg e-mailjét a teljes platformhozzáféréshez.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Töltse fel a számlát', 'text' => 'Töltsön fel legalább ' . money_min() . ' összeget átutalással, kártyával vagy e-pénztárcával.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Állítsa be a stratégiát', 'text' => 'Válasszon kockázati szintet és preferenciákat — kézzel vagy automatikusan.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Kezdje a kereskedést', 'text' => 'Lépjen a piacra magabiztosan, valós idejű adatokkal és MI-elemzésekkel.'],
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
            'name' => $site . ' — MI-kereskedési platform',
            'description' => $site . ' — mobil felület élő BTC/USDT kriptografikonnal és portfólióeszközökkel',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | MI-kereskedési platform — mobil grafikonnézet',
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
