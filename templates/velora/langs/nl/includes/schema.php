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
        'description' => 'Een overzichtelijk AI-ondersteund beleggingsplatform voor crypto- en multi-assetmarkten.',
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
        'description' => 'Eenvoudig AI-beleggingsplatform met live markten, begeleide inzichten en een rustige handelswerkruimte.',
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
                    'text' => 'Maak in enkele minuten een account aan, rond een korte verificatiestap af en financier uw account met een minimale storting van ' . MIN_DEPOSIT . ' ' . CURRENCY . '. U ontgrendelt het volledige platform, inclusief live grafieken en handelstools.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Zijn mijn geld en gegevens veilig?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'We beschermen accounts met SSL-encryptie, tweefactorauthenticatie en veilige fondsafhandeling via vertrouwde betaalproviders. Uw persoonlijke gegevens worden beheerd onder strikte beveiligingsbeleidsregels.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Wanneer kan ik winst opnemen?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Opnames kunnen op elk moment vanuit uw accountdashboard worden aangevraagd. Verwerking duurt doorgaans 1–3 werkdagen, afhankelijk van de methode. Kosten en termijnen worden vooraf getoond.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Heb ik handelservaring nodig?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Geen eerdere ervaring vereist. Begeleide onboarding, eenvoudige tutorials en AI-ondersteunde tools helpen u in uw eigen tempo te leren, met 24/7 support beschikbaar.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Hoe te beginnen met handelen met ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Maak uw account aan', 'text' => 'Registreer met uw basisgegevens en krijg veilige toegang tot het platform.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verifieer uw e-mail', 'text' => 'Bevestig uw e-mail om volledige platformtoegang te ontgrendelen.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Financier uw account', 'text' => 'Stort minimaal ' . MIN_DEPOSIT . ' ' . CURRENCY . ' via bankoverschrijving, kaart of e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Stel uw strategie in', 'text' => 'Kies risiconiveau en handelsvoorkeuren — handmatig of geautomatiseerd.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Begin met handelen', 'text' => 'Betreed de markt met vertrouwen met realtime data en AI-inzichten.'],
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
            'description' => $site . ' mobiele handelsinterface met live BTC/USDT-cryptografiek en portefeuilletools',
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
