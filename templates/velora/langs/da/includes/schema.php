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
        'description' => 'Mørk markedsterminal til crypto-, forex- og multiaktivhandel med AI-assisterede signaler.',
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
        'description' => 'Handelsplatform i exchange-stil med live markeder, porteføljeværktøjer og AI-assisteret eksekvering.',
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
                    'text' => 'Opret en konto på få minutter, gennemfør en kort verificering, og finansier din konto med et minimumsindskud på ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Du låser den fulde platform op inkl. live-diagrammer og handelsværktøjer.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Er mine penge og data sikre?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Vi beskytter konti med SSL-kryptering, tofaktorgodkendelse og sikker håndtering af midler via betroede betalingsudbydere. Dine personoplysninger behandles efter strenge sikkerhedspolitikker.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Hvornår kan jeg hæve gevinster?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Udbetalinger kan anmodes når som helst fra din kontodashboard. Behandling tager typisk 1–3 hverdage afhængigt af metoden. Gebyrer og tidsfrister vises på forhånd.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Skal jeg have handelserfaring?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Ingen tidligere erfaring kræves. Guidet onboarding, enkle vejledninger og AI-assisterede værktøjer hjælper dig med at lære i dit eget tempo med support døgnet rundt.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Sådan kommer du i gang med at handle med ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Opret din konto', 'text' => 'Tilmeld dig med dine grundoplysninger, og få sikker adgang til platformen.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Bekræft din e-mail', 'text' => 'Bekræft din e-mail for at låse fuld platformadgang op.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Indbetal på din konto', 'text' => 'Indbetal mindst ' . MIN_DEPOSIT . ' ' . CURRENCY . ' via bankoverførsel, kort eller e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Vælg din strategi', 'text' => 'Vælg risikoniveau og handelspræferencer — manuelt eller automatiseret.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Begynd at handle', 'text' => 'Gå ind på markedet med tillid ved hjælp af realtidsdata og AI-indsigt.'],
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
