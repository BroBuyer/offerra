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
        'description' => 'En tydelig AI-assistert investeringsplattform for krypto- og multi-asset-markeder.',
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
        'description' => 'Enkel AI-investeringsplattform med live-markeder, veiledede innsikter og et rolig handelsmiljø.',
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
                    'text' => 'Opprett en konto på noen minutter, fullfør et kort verifiseringssteg og finansier kontoen med minst \\' . MIN_DEPOSIT . \\' \\' . CURRENCY . \\'. Du låser opp hele plattformen inkludert live-diagrammer og handelsverktøy.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Er pengene og dataene mine trygge?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Vi beskytter kontoer med SSL-kryptering, tofaktorautentisering og sikker håndtering av midler via pålitelige betalingsleverandører. Personopplysninger håndteres under strenge sikkerhetspolicyer.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Når kan jeg ta ut gevinster?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Uttak kan forespørres når som helst fra kontodashbordet. Behandling tar vanligvis 1–3 virkedager avhengig av metode. Gebyrer og tidsrammer vises på forhånd.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Trenger jeg handelserfaring?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Ingen tidligere erfaring kreves. Veiledet onboarding, enkle veiledninger og AI-assisterte verktøy hjelper deg i ditt eget tempo — med support døgnåpent.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Slik starter du å handle med ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Åpne kontoen din', 'text' => 'Registrer deg med grunnleggende opplysninger og få sikker tilgang til plattformen.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Bekreft e-posten din', 'text' => 'Bekreft e-posten din for å låse opp full tilgang.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Finansier kontoen din', 'text' => 'Sett inn minst \\' . MIN_DEPOSIT . \\' \\' . CURRENCY . \\' via bankoverføring, kort eller e-lommebok.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Sett strategien din', 'text' => 'Velg risikonivå og preferanser — manuelt eller automatisert.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Begynn å handle', 'text' => 'Gå inn i markedet med selvtillit ved hjelp av sanntidsdata og AI-innsikter.'],
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
            'description' => $site . ' mobil handelsgrensesnitt med live BTC/USDT-kryptodiagram og porteføljeverktøy',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI-handelsplattform — mobil diagramvisning',
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
