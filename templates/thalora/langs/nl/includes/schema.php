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
        'description' => 'Krijg toegang tot cryptovaluta, forex en wereldwijde activa via één platform. ' . $site . ' combineert live-analyse, ondersteunde automatisering en expert support.',
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
        'description' => $site . ' — AI-handelsplatform met live-analyse, ondersteunde automatisering en toegang tot meerdere markten.',
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
                'name' => 'Welke stappen zijn er om te beginnen met handelen?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Meld je aan met je belangrijkste gegevens, bevestig je e-mail en stort minstens ' . money_min() . '. Zo ontgrendel je livediagrammen, handelstools, marktanalyse en toegewijde support.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Is ' . $site . ' betrouwbaar voor het beheer van mijn geld en gegevens?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sessies zijn beveiligd met SSL-versleuteling, tweefactorauthenticatie is beschikbaar en financiële transacties lopen via vertrouwde partners. Privacypraktijken staan op de site.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Hoe snel kan ik middelen opnemen?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Opnames kun je altijd aanvragen via het accountportaal. Verwerking duurt meestal 1 tot 3 werkdagen, afhankelijk van de methode. Kosten en tijden zie je vóór bevestiging.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Heb ik handelservaring nodig om te starten?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Geen eerdere ervaring nodig. Onboarding, tutorials en AI-versterkte tools helpen je in je eigen tempo te leren.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Zo begin je met handelen met ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Maak je account aan', 'text' => 'Meld je aan met basisgegevens en krijg veilige toegang tot het platform.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Bevestig je e-mail', 'text' => 'Bevestig je e-mail om volledige toegang te ontgrendelen.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Stort op je account', 'text' => 'Stort minstens ' . money_min() . ' via bankoverschrijving, kaart of e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Stel je strategie in', 'text' => 'Kies risiconiveau en voorkeuren — handmatig of geautomatiseerd.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Begin met handelen', 'text' => 'Ga met vertrouwen de markt in, met realtimedata en AI-inzichten.'],
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
            'name' => $site . ' — AI-handelsplatform',
            'description' => $site . ' — mobiele interface met live BTC/USDT-cryptodiagram en portefeuilletools',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI-handelsplatform — mobiele diagramweergave',
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
