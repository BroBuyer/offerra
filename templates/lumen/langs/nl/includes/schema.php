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
        'description' => 'Een helder AI-ondersteund beleggingsplatform voor crypto- en multi-assetmarkten.',
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
        'description' => 'Eenvoudig AI-beleggingsplatform met live markten, begeleide inzichten en een rustige handelsomgeving.',
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
                'name' => 'Hoe begin ik?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Maak in minuten een account, rond een korte verificatie af en stort minimaal \\' . MIN_DEPOSIT . \\' \\' . CURRENCY . \\'. Daarna ontgrendelt u het volledige platform, inclusief live grafieken en tools.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Zijn mijn geld en gegevens veilig?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'We beschermen accounts met SSL-encryptie, tweefactorauthenticatie en veilige fondsafhandeling via vertrouwde betalingsproviders. Persoonsgegevens vallen onder strikte beveiligingsbeleid.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Wanneer kan ik winst opnemen?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Opnames kunt u altijd aanvragen via het dashboard. Verwerking duurt meestal 1–3 werkdagen, afhankelijk van de methode. Kosten en termijnen staan vooraf vermeld.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Heb ik handelservaring nodig?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Geen ervaring vereist. Begeleid onboarding, eenvoudige tutorials en AI-tools helpen in uw tempo — met 24/7 support.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Zo start u met handelen met ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Open uw account', 'text' => 'Meld u aan met basisgegevens en krijg veilige toegang tot het platform.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Bevestig uw e-mail', 'text' => 'Bevestig uw e-mail om volledige toegang te ontgrendelen.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Financier uw account', 'text' => 'Stort minimaal \\' . MIN_DEPOSIT . \\' \\' . CURRENCY . \\' via overschrijving, kaart of e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Stel uw strategie in', 'text' => 'Kies risiconiveau en voorkeuren — handmatig of geautomatiseerd.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Begin met handelen', 'text' => 'Betreed de markt met realtime data en AI-inzichten.'],
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
            'description' => $site . ' mobiele handelsinterface met live BTC/USDT-cryptografiek en portfoliotools',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI-handelsplatform — mobiele grafiekweergave',
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
