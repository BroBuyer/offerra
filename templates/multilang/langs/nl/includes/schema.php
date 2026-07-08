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
        'description' => 'AI-ondersteund handelsplatform voor crypto, forex en wereldwijde markten.',
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
        'description' => 'Intelligent handelsplatform met realtime marktanalyse en AI-ondersteunde signalen.',
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
                'name' => 'Hoe kan ik beginnen?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Maak binnen enkele minuten een account aan, rond een korte verificatie af en stort minimaal ' . MIN_DEPOSIT . ' ' . CURRENCY . '. U krijgt direct volledige toegang tot het platform met live grafieken en trading tools.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Zijn mijn geld en gegevens veilig?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Wij beveiligen accounts met SSL-encryptie, tweestapsverificatie en veilige verwerking via vertrouwde betalingsproviders. Persoonsgegevens worden beheerd volgens strikte beveiligingsnormen.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Wanneer kan ik winst opnemen?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'U kunt op elk moment een opname aanvragen via uw dashboard. Verwerking duurt meestal 1 tot 3 werkdagen, afhankelijk van de methode. Kosten en doorlooptijden zijn vooraf zichtbaar.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Heb ik tradingervaring nodig?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Eerdere ervaring is niet vereist. Met begeleide onboarding, duidelijke uitleg en AI-ondersteunde tools leert u op uw eigen tempo, met 24/7 ondersteuning.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Hoe te starten met handelen bij ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Maak een account aan', 'text' => 'Registreer met basisgegevens en krijg veilige toegang tot het platform.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verifieer uw e-mail', 'text' => 'Bevestig uw e-mail en ontgrendel volledige toegang tot het platform.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Stort middelen', 'text' => 'Stort minimaal ' . MIN_DEPOSIT . ' ' . CURRENCY . ' via bankoverschrijving, kaart of e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Stel uw strategie in', 'text' => 'Kies uw risiconiveau en handelsvoorkeuren - handmatig of geautomatiseerd.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Start met handelen', 'text' => 'Ga met vertrouwen de markt op dankzij realtime data en AI-inzichten.'],
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
            'name' => $site . ' AI-handelsplatform',
            'description' => $site . ' mobiele handelsinterface met live BTC/USDT-grafiek en portefeuilletools',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI-handelsplatform - mobiele grafiekweergave',
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
