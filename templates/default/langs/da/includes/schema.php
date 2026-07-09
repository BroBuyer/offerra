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
        'description' => 'AI-støttet handelsplattform for krypto, forex og globale markeder.',
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
        'description' => 'Intelligent handelsplattform med sanntids markedsanalyse og AI-støttede signaler.',
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
                    'text' => 'Opprett en konto på få minutter, fullfør en kort verifisering og sett inn minst ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Du får umiddelbar full tilgang til plattformen med live diagrammer og handelsverktøy.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Er mine penge og data sikre?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Vi sikrer kontoer med SSL-kryptering, tofaktorautentisering og sikker behandling via pålitelige betalingsleverandører. Personopplysninger forvaltes i henhold til strenge sikkerhetsstandarder.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Når kan jeg ta ut gevinst?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Du kan til enhver tid anmode om udbetaling via dit dashboard. Behandling tar vanligvis 1 til 3 virkedager, avhengig av metoden. Gebyrer og behandlingstid er synlige på forhånd.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Har jeg brug for handelserfaring?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Tidligere erfaring er ikke påkrevd. Med veiledet onboarding, tydelige forklaringer og AI-støttede verktøy lærer du i ditt eget tempo, med 24/7-support.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Sådan kommer du i gang med handel hos ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Opprett en konto', 'text' => 'Registrer deg med grunnleggende opplysninger og få sikker tilgang til plattformen.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Bekræft din e-mail', 'text' => 'Bekræft din e-mail og lås opp full tilgang til plattformen.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Indsæt midler', 'text' => 'Indsæt mindst ' . MIN_DEPOSIT . ' ' . CURRENCY . ' via bankoverførsel, kort eller e-pung.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Opsæt din strategi', 'text' => 'Velg risikonivå og handelspreferanser – manuelt eller automatisert.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Begynd at handle', 'text' => 'Gå inn i markedet med trygghet takket være sanntidsdata og AI-innsikter.'],
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
            'description' => $site . ' mobil handelsgrensesnitt med live BTC/USDT-diagram og porteføljeverktøy',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI-handelsplatform – mobil diagramvisning',
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
