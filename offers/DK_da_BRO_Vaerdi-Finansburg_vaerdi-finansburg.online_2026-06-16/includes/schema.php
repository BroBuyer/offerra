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
        'logo' => $url . '/assets/img/logo.svg',
        'description' => 'AI-assisteret handelsplatform til krypto, forex og globale markeder.',
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
        'description' => 'Intelligent handelsplatform med markedsanalyse i realtid og AI-assisterede signaler.',
        'image' => $platform_image,
        'screenshot' => $platform_image,
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
                    'text' => 'Opret en konto på få minutter, gennemfør et kort verifikationstrin og indsæt mindst ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Derefter får du fuld adgang til platformen, herunder grafer i realtid og handelsværktøjer.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Er mine penge og data sikre?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Vi beskytter konti med SSL-kryptering, totrinsgodkendelse og sikker håndtering af midler via pålidelige betalingsudbydere. Dine personoplysninger behandles efter strenge sikkerhedsprocedurer.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Hvornår kan jeg hæve?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Udbetalinger kan anmodes når som helst fra dit område. Behandlingen tager typisk 1–3 hverdage afhængigt af metode. Gebyrer og tidsrammer vises på forhånd.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Skal jeg have erfaring med handel?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Der kræves ingen tidligere erfaring. Guidet onboarding, enkle tutorials og AI-assisterede værktøjer hjælper dig i dit tempo, med support 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Sådan kommer du i gang med at handle hos ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Opret din konto', 'text' => 'Registrér dig med basisoplysninger og få sikker adgang til platformen.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Bekræft din e-mail', 'text' => 'Bekræft din e-mail for at få fuld adgang til platformen.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Indsæt på din konto', 'text' => 'Indsæt mindst ' . MIN_DEPOSIT . ' ' . CURRENCY . ' via bankoverførsel, kort eller e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Indstil strategi', 'text' => 'Vælg risikoniveau og handelspræferencer — manuelt eller automatiseret.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Start med at handle', 'text' => 'Kom i gang med realtidsdata og AI-indsigter.'],
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
            'name' => $site . ' | Handelsplatform',
            'description' => $site . ' mobil handelsgrænseflade med live BTC/USDT-kryptograf og porteføljeværktøjer',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Handelsplatform — grafvisning på mobil',
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
