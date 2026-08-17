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
        'description' => 'Få tilgang til kryptovaluta, forex og globale aktiva fra én plattform. ' . $site . ' kombinerer live-analyse, assistert automatisering og ekspertstøtte.',
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
        'description' => $site . ' — AI-drevet handelsplattform med live-analyse, assistert automatisering og tilgang til flere markeder.',
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
                'name' => 'Hvilke steg trengs for å starte handel?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Registrer deg med de viktigste opplysningene, bekreft e-posten og sett inn minst ' . money_min() . '. Da låser du opp livediagrammer, handelsverktøy, markedsanalyse og dedikert support.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Er ' . $site . ' pålitelig til å håndtere pengene og opplysningene mine?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Økter er sikret med SSL-kryptering, tofaktorautentisering er tilgjengelig, og finansielle transaksjoner går via pålitelige partnere. Personvernpraksis er beskrevet på nettstedet.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Hvor raskt kan jeg ta ut midler?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Uttak kan forespørres når som helst fra kontoportalen. Behandling tar vanligvis 1 til 3 virkedager avhengig av metode. Gebyrer og tider vises før bekreftelse.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Må jeg ha handelserfaring før jeg starter?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Ingen tidligere erfaring kreves. Onboarding, veiledninger og AI-forsterkede verktøy hjelper deg å lære i ditt tempo.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Slik starter du handel med ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Opprett kontoen din', 'text' => 'Registrer deg med grunnleggende opplysninger og få sikker tilgang til plattformen.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Bekreft e-posten din', 'text' => 'Bekreft e-posten for å låse opp full tilgang.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Sett inn på kontoen', 'text' => 'Sett inn minst ' . money_min() . ' via bankoverføring, kort eller e-lommebok.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Sett strategien din', 'text' => 'Velg risikonivå og preferanser — manuelt eller automatisert.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Begynn å handle', 'text' => 'Gå inn i markedet med selvtillit, med sanntidsdata og AI-innsikter.'],
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
            'name' => $site . ' — AI-handelsplattform',
            'description' => $site . ' — mobilgrensesnitt med live BTC/USDT-kryptodiagram og porteføljeverktøy',
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
