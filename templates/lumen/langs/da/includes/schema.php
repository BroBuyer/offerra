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
        'description' => 'En klar AI-assisteret investeringsplatform til krypto- og multi-asset-markeder.',
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
        'description' => 'Enkel AI-investeringsplatform med live-markeder, vejledte indsigter og et roligt handelsmiljø.',
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
                'name' => 'Hvordan kommer jeg i gang?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Opret en konto på få minutter, gennemfør et kort verifikationstrin, og finansier kontoen med mindst ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Du låser den fulde platform op, inklusive live-diagrammer og handelsværktøjer.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Er mine penge og data sikre?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Vi beskytter konti med SSL-kryptering, tofaktorgodkendelse og sikker håndtering af midler via betroede betalingsudbydere. Persondata håndteres under strenge sikkerhedspolitikker.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Hvornår kan jeg hæve gevinster?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Udbetalinger kan anmodes når som helst fra kontodashboardet. Behandling tager typisk 1–3 bankdage afhængigt af metoden. Gebyrer og tidsrammer vises på forhånd.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Har jeg brug for handelserfaring?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Ingen tidligere erfaring kræves. Vejledt onboarding, enkle vejledninger og AI-assisterede værktøjer hjælper dig i dit eget tempo — med support døgnet rundt.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Sådan begynder du at handle med ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Åbn din konto', 'text' => 'Tilmeld dig med grundlæggende oplysninger, og få sikker adgang til platformen.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Bekræft din e-mail', 'text' => 'Bekræft din e-mail for at låse fuld adgang op.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Finansier din konto', 'text' => 'Indbetal mindst ' . MIN_DEPOSIT . ' ' . CURRENCY . ' via bankoverførsel, kort eller e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Indstil din strategi', 'text' => 'Vælg risikoniveau og præferencer — manuelt eller automatiseret.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Begynd at handle', 'text' => 'Gå ind på markedet med tillid ved hjælp af realtidsdata og AI-indsigter.'],
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
            'description' => $site . ' mobil handelsgrænseflade med live BTC/USDT-kryptodiagram og porteføljeværktøjer',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI-handelsplatform — mobil diagramvisning',
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
