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
        'description' => 'Mørk markedsterminal for krypto-, forex- og multiaktiva-handel med AI-assisterte signaler.',
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
        'description' => 'Handelsplattform i exchange-stil med live markeder, porteføljeverktøy og AI-assistert utførelse.',
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
                    'text' => 'Opprett en konto på få minutter, fullfør en kort verifisering, og finansier kontoen med et minimumsinnskudd på ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Du låser opp hele plattformen inkludert live-diagrammer og handelsverktøy.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Er pengene og dataene mine trygge?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Vi beskytter kontoer med SSL-kryptering, tofaktorautentisering og sikker håndtering av midler via pålitelige betalingsleverandører. Personopplysningene dine behandles etter strenge sikkerhetspolicyer.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Når kan jeg ta ut gevinster?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Uttak kan forespørres når som helst fra kontodashboardet. Behandling tar vanligvis 1–3 virkedager avhengig av metoden. Gebyrer og tidsfrister vises på forhånd.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Trenger jeg handelserfaring?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Ingen tidligere erfaring kreves. Guidet onboarding, enkle veiledninger og AI-assisterte verktøy hjelper deg å lære i ditt eget tempo med support døgnåpent.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Slik kommer du i gang med å handle med ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Opprett kontoen din', 'text' => 'Registrer deg med grunnopplysningene dine, og få sikker tilgang til plattformen.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Bekreft e-posten din', 'text' => 'Bekreft e-posten for å låse opp full plattformtilgang.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Sett inn midler', 'text' => 'Sett inn minst ' . MIN_DEPOSIT . ' ' . CURRENCY . ' via bankoverføring, kort eller e-lommebok.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Velg strategien din', 'text' => 'Velg risikonivå og handelspreferanser — manuelt eller automatisert.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Begynn å handle', 'text' => 'Gå inn i markedet med trygghet ved hjelp av sanntidsdata og AI-innsikt.'],
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
            'name' => $site . ' AI-handelsplattform',
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
