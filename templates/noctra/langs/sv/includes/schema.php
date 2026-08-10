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
        'description' => 'Mörk marknadsterminal för crypto, forex och handel med flera tillgångar med AI-assisterade signaler.',
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
        'description' => 'Handelsplattform i exchange-stil med live marknader, portföljverktyg och AI-assisterad exekvering.',
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
                    'text' => 'Skapa ett konto på några minuter, slutför en kort verifiering och sätt in pengar på ditt konto med en minsta insättning på ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Du låser upp hela plattformen inklusive livediagram och handelsverktyg.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Är mina pengar och data säkra?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Vi skyddar konton med SSL-kryptering, tvåfaktorsautentisering och säker hantering av medel via betrodda betalningsleverantörer. Dina personuppgifter hanteras enligt strikta säkerhetspolicyer.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'När kan jag ta ut vinster?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Uttag kan begäras när som helst från din kontopanel. Handläggning tar vanligtvis 1–3 vardagar beroende på metod. Avgifter och tidsramar visas i förväg.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Behöver jag handelserfarenhet?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Ingen tidigare erfarenhet krävs. Guidad onboarding, enkla guider och AI-assisterade verktyg hjälper dig att lära dig i din egen takt med support dygnet runt.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Så här kommer du igång med att handla med ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Skapa ditt konto', 'text' => 'Registrera dig med dina grunduppgifter och få säker åtkomst till plattformen.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Bekräfta din e-post', 'text' => 'Bekräfta din e-post för att låsa upp full plattformsåtkomst.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Sätt in pengar på ditt konto', 'text' => 'Sätt in minst ' . MIN_DEPOSIT . ' ' . CURRENCY . ' via banköverföring, kort eller e-plånbok.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Välj din strategi', 'text' => 'Välj risknivå och handelsinställningar — manuellt eller automatiserat.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Börja handla', 'text' => 'Gå in på marknaden med tillit med hjälp av realtidsdata och AI-insikter.'],
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
