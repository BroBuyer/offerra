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
        'description' => 'Få tillgång till kryptovalutor, forex och globala tillgångar via en och samma plattform. ' . $site . ' kombinerar liveanalys, assisterad automatisering och expertstöd.',
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
        'description' => $site . ' — AI-driven handelsplattform med liveanalys, assisterad automatisering och tillgång till flera marknader.',
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
                'name' => 'Vilka steg behövs för att börja handla?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Registrera dig med dina viktigaste uppgifter, bekräfta e-posten och sätt in minst ' . money_min() . '. Då låser du upp livediagram, handelsverktyg, marknadsanalys och dedikerad support.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Är ' . $site . ' pålitlig när det gäller mina pengar och min information?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sessioner säkras med SSL-kryptering, tvåfaktorsautentisering finns tillgänglig och finansiella transaktioner går via betrodda partners. Integritetspraxis beskrivs på webbplatsen.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Hur snabbt kan jag ta ut mina medel?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Uttag kan begäras när som helst från kontoportalen. Handläggning tar vanligtvis 1–3 bankdagar beroende på metod. Avgifter och tider visas innan du bekräftar.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Behöver jag handelserfarenhet innan jag börjar?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Ingen tidigare handelserfarenhet krävs. Onboarding, guider och AI-förstärkta verktyg hjälper dig att lära i din egen takt.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Så börjar du handla hos ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Skapa ditt konto', 'text' => 'Registrera dig med dina grunduppgifter och få säker åtkomst till plattformen.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verifiera din e-post', 'text' => 'Bekräfta e-posten för att låsa upp full åtkomst.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Sätt in på kontot', 'text' => 'Sätt in minst ' . money_min() . ' via banköverföring, kort eller e-plånbok.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Ställ in din strategi', 'text' => 'Välj risknivå och preferenser — manuellt eller automatiserat.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Börja handla', 'text' => 'Gå in på marknaden med självförtroende, med realtidsdata och AI-insikter.'],
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
            'description' => $site . ' — mobilgränssnitt med live BTC/USDT-kryptodiagram och portföljverktyg',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI-handelsplattform — mobil diagramvy',
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
