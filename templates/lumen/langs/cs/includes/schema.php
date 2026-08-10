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
        'description' => 'Přehledná investiční platforma s podporou AI pro krypto a multi-asset trhy.',
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
        'description' => 'Jednoduchá AI investiční platforma s živými trhy, vedenými poznatky a klidným obchodním prostředím.',
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
                    'text' => 'Vytvořte účet během minut, dokončete krátké ověření a financujte účet minimálním vkladem ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Odemknete celou platformu včetně živých grafů a nástrojů.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Jsou peníze a data v bezpečí?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Účty chráníme SSL šifrováním, dvoufaktorovým ověřením a bezpečnou správou prostředků přes důvěryhodné poskytovatele plateb. Osobní údaje podléhají přísným bezpečnostním zásadám.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kdy mohu vybrat zisky?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Výběry lze požádat kdykoli z panelu účtu. Zpracování obvykle trvá 1–3 pracovní dny podle metody. Poplatky a lhůty jsou uvedeny předem.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Potřebuji zkušenosti s obchodováním?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Předchozí zkušenost není nutná. Vedené onboarding, jednoduché tutoriály a nástroje s AI pomáhají vlastním tempem — podpora 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Jak začít obchodovat s ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Otevřete účet', 'text' => 'Zaregistrujte se základními údaji a získejte bezpečný přístup k platformě.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Ověřte e-mail', 'text' => 'Potvrďte e-mail a odemkněte plný přístup.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Financujte účet', 'text' => 'Vložte minimálně ' . MIN_DEPOSIT . ' ' . CURRENCY . ' převodem, kartou nebo e-walletem.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Nastavte strategii', 'text' => 'Zvolte úroveň rizika a preference — ručně nebo automaticky.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Začněte obchodovat', 'text' => 'Vstupte na trh s důvěrou díky datům v reálném čase a AI poznatkům.'],
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
            'description' => $site . ' mobilní obchodní rozhraní s živým grafem BTC/USDT a nástroji portfolia',
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
