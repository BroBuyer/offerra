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
        'description' => 'AI-supportt handelsplattform for krypto, forex og globale markeder.',
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
        'description' => 'Intelligent handelsplattform med realtids markedsanalyse og AI-supportde signaler.',
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
                    'text' => 'Skapa en konto på få minutter, fullfør en kort verifisering og sett inn minst ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Du får umiddelbar full tillgång til plattformen med live diagrammer og handelsverktyg.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Är mina pengar och data säkra?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Vi sikrer kontoer med SSL-kryptering, tofaktorautentisering og sikker behandling via pålitelige betalingsleverandører. Personopplysninger forvaltes i henhold til strenge säkerhetsstandarder.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Når kan jeg ta ut gevinst?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Du kan når som helst be om uttak via dashbordet ditt. Behandling tar vanligvis 1 til 3 arbetsdagar, avhengig av metoden. Gebyrer og behandlingstid er synlige på forhånd.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Trenger jeg handelserfaring?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Tidligere erfaring er ikke påkrevd. Med vägledd onboarding, tydelige forklaringer og AI-supportde verktøy lærer du i ditt eget tempo, med 24/7-support.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Slik kommer du i gang med handel hos ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Skapa en konto', 'text' => 'Registrera dig med grundläggande uppgifter och få säker tillgång till plattformen.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Bekräfta e-posten din', 'text' => 'Bekräfta e-posten din og lås opp full tillgång til plattformen.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Sätt in medel', 'text' => 'Sätt in minst ' . MIN_DEPOSIT . ' ' . CURRENCY . ' via bankoverføring, kort eller e-lommebok.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Sett opp strategien din', 'text' => 'Velg risikonivå og handelspreferanser – manuelt eller automatisert.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Börja handla', 'text' => 'Gå inn i markedet med trygghet takket være realtidsdata og AI-innsikter.'],
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
            'description' => $site . ' mobil handelsgränssnitt med live BTC/USDT-diagram og portföljverktøy',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI-handelsplattform – mobil diagramvisning',
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
