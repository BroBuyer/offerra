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
        'description' => 'En tydlig AI-assisterad investeringsplattform för krypto och flertillgångsmarknader.',
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
        'description' => 'Enkel AI-investeringsplattform med livemarknader, guidade insikter och en lugn handelsarbetsyta.',
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
                'name' => 'Hur kommer jag igång?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Skapa ett konto på minuter, slutför ett kort verifieringssteg och finansiera ditt konto med en minsta insättning på ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Du låser upp hela plattformen inklusive livediagram och handelsverktyg.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Är mina pengar och data säkra?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Vi skyddar konton med SSL-kryptering, tvåfaktorsautentisering och säker fondhantering via betrodda betalningsleverantörer. Dina personuppgifter hanteras enligt strikta säkerhetspolicyer.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'När kan jag ta ut vinster?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Uttag kan begäras när som helst från din kontoinstrumentpanel. Bearbetning tar vanligtvis 1–3 arbetsdagar beroende på metod. Avgifter och tidslinjer visas i förväg.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Behöver jag handelserfarenhet?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Ingen tidigare erfarenhet krävs. Guidad onboarding, enkla guider och AI-assisterade verktyg hjälper dig att lära i din egen takt med support dygnet runt.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Så börjar du handla med ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Skapa ditt konto', 'text' => 'Registrera dig med dina grunduppgifter och få säker åtkomst till plattformen.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verifiera din e-post', 'text' => 'Bekräfta din e-post för att låsa upp full plattformsåtkomst.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Finansiera ditt konto', 'text' => 'Sätt in minst ' . MIN_DEPOSIT . ' ' . CURRENCY . ' via banköverföring, kort eller e-plånbok.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Ställ in din strategi', 'text' => 'Välj risknivå och handelspreferenser — manuellt eller automatiserat.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Börja handla', 'text' => 'Gå in på marknaden med självförtroende med realtidsdata och AI-insikter.'],
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
            'description' => $site . ' mobil handelsgränssnitt med live BTC/USDT-kryptodiagram och portföljverktyg',
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
