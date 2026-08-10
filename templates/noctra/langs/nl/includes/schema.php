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
        'description' => 'Donker marktterminal voor crypto-, forex- en multi-asset trading met AI-ondersteunde signalen.',
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
        'description' => 'Exchange-achtig tradingterminal met live markten, portfoliotools en AI-ondersteunde uitvoeringscontext.',
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
                    'text' => 'Maak in minuten een account aan, rond een korte verificatie af en stort minimaal ' . MIN_DEPOSIT . ' ' . CURRENCY . '. U ontgrendelt het volledige platform inclusief live grafieken en tradingtools.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Zijn mijn geld en gegevens veilig?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'We beschermen accounts met SSL-versleuteling, tweefactorauthenticatie en veilige fondsafhandeling via vertrouwde betaalproviders. Uw persoonsgegevens worden beheerd volgens strikte beveiligingsbeleid.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Wanneer kan ik winst opnemen?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Opnames kunnen altijd worden aangevraagd via het accountdashboard. Verwerking duurt meestal 1–3 werkdagen afhankelijk van de methode. Kosten en termijnen zijn vooraf zichtbaar.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Heb ik tradingervaring nodig?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Geen eerdere ervaring vereist. Begeleid onboarding, eenvoudige tutorials en AI-ondersteunde tools helpen u in uw eigen tempo te leren, met 24/7 support.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Hoe starten met traden bij ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Maak uw account aan', 'text' => 'Meld u aan met basisgegevens en krijg veilige toegang tot het platform.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Bevestig uw e-mail', 'text' => 'Bevestig uw e-mail om volledige platformtoegang te ontgrendelen.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Stort op uw account', 'text' => 'Stort minimaal ' . MIN_DEPOSIT . ' ' . CURRENCY . ' via bankoverschrijving, kaart of e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Stel uw strategie in', 'text' => 'Kies risiconiveau en tradingvoorkeuren — handmatig of geautomatiseerd.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Begin met traden', 'text' => 'Ga de markt in met realtime data en AI-inzichten.'],
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
            'name' => $site . ' AI-tradingplatform',
            'description' => 'Mobiele tradinginterface van ' . $site . ' met live BTC/USDT-cryptografiek en portfoliotools',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI-tradingplatform — mobiele grafiekweergave',
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
