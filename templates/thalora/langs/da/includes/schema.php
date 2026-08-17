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
        'description' => 'Få adgang til kryptovaluta, forex og globale aktiver fra én platform. ' . $site . ' kombinerer live-analyse, assisteret automatisering og ekspertsupport.',
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
        'description' => $site . ' — AI-drevet handelsplatform med live-analyse, assisteret automatisering og adgang til flere markeder.',
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
                'name' => 'Hvilke trin skal der til for at starte handel?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Tilmeld dig med de vigtigste oplysninger, bekræft e-mailen og indbetal mindst ' . money_min() . '. Så låser du livediagrammer, handelsværktøjer, markedsanalyse og dedikeret support op.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Er ' . $site . ' pålidelig til at håndtere mine penge og oplysninger?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sessioner er sikret med SSL-kryptering, tofaktorgodkendelse er tilgængelig, og finansielle transaktioner går via pålidelige partnere. Privatlivspraksis er beskrevet på sitet.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Hvor hurtigt kan jeg hæve midler?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Udbetalinger kan anmodes når som helst fra kontoportalen. Behandling tager typisk 1 til 3 hverdage afhængigt af metoden. Gebyrer og tider vises før bekræftelse.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Skal jeg have handelserfaring, før jeg starter?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Ingen tidligere erfaring kræves. Onboarding, vejledninger og AI-forstærkede værktøjer hjælper dig med at lære i dit tempo.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Sådan starter du handel med ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Opret din konto', 'text' => 'Tilmeld dig med grundlæggende oplysninger og få sikker adgang til platformen.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Bekræft din e-mail', 'text' => 'Bekræft e-mailen for at låse fuld adgang op.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Indbetal på kontoen', 'text' => 'Indbetal mindst ' . money_min() . ' via bankoverførsel, kort eller e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Sæt din strategi', 'text' => 'Vælg risikoniveau og præferencer — manuelt eller automatiseret.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Begynd at handle', 'text' => 'Gå ind på markedet med selvtillid, med realtidsdata og AI-indsigter.'],
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
            'description' => $site . ' — mobilgrænseflade med live BTC/USDT-kryptodiagram og porteføljeværktøjer',
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
