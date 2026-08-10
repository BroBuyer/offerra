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
        'description' => 'Temný tržní terminál pro obchodování s kryptem, forexem a více aktivy s AI signály.',
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
        'description' => 'Obchodní terminál ve stylu burzy s živými trhy, nástroji portfolia a AI kontextem exekuce.',
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
                'name' => 'Jak začít?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Vytvořte účet během několika minut, dokončete krátké ověření a vložte minimální vklad ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Získáte plný přístup k platformě včetně živých grafů a obchodních nástrojů.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Jsou mé peníze a data v bezpečí?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Účty chráníme SSL šifrováním, dvoufaktorovým přihlášením a bezpečnou správou prostředků přes důvěryhodné platební poskytovatele. Osobní údaje spravujeme podle přísných bezpečnostních zásad.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kdy mohu vybrat zisky?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Výběry můžete požádat kdykoli z dashboardu. Zpracování obvykle trvá 1–3 pracovní dny podle metody. Poplatky a lhůty vidíte předem.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Potřebuji obchodní zkušenosti?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Předchozí zkušenosti nejsou nutné. Průvodce, jednoduché tutoriály a AI nástroje vám pomohou učit se vlastním tempem s podporou 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Jak začít obchodovat s ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Vytvořte účet', 'text' => 'Zaregistrujte se se základními údaji a získejte bezpečný přístup k platformě.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Ověřte e-mail', 'text' => 'Potvrďte e-mail a odemkněte plný přístup k platformě.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Vložte prostředky', 'text' => 'Vložte minimálně ' . MIN_DEPOSIT . ' ' . CURRENCY . ' bankovním převodem, kartou nebo e-peněženkou.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Nastavte strategii', 'text' => 'Zvolte úroveň rizika a preference obchodování — ručně nebo automaticky.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Začněte obchodovat', 'text' => 'Vstupte na trh s jistotou díky datům v reálném čase a AI přehledům.'],
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
            'name' => $site . ' AI obchodní platforma',
            'description' => $site . ' mobilní obchodní rozhraní s živým kryptografem BTC/USDT a nástroji portfolia',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI obchodní platforma — mobilní pohled na graf',
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
