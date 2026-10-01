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
        'description' => 'Dark market terminal for crypto, forex, and multi-asset trading with AI-assisted signals.',
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
        'description' => 'Exchange-style trading terminal with live markets, portfolio tools, and AI-assisted execution context.',
        'image' => $platform_image,
        'screenshot' => $platform_image,
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.7',
            'ratingCount' => '1842',
            'bestRating' => '5',
        ],
        'offers' => [
            '@type' => 'Ponudba',
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
                'name' => 'How do I get started?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Create an account in minutes, complete a short verification step, and fund your account with a minimum deposit of ' . MIN_DEPOSIT . ' ' . CURRENCY . '. You will unlock the full platform including live charts and trading tools.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Is my money and data safe?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'We protect accounts with SSL encryption, two-factor authentication, and secure fund handling through trusted payment providers. Your personal data is managed under strict security policies.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'When can I withdraw profits?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Withdrawals can be requested anytime from your account dashboard. Processing typically takes 1–3 business days depending on the method. Fees and timelines are shown upfront.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Do I need trading experience?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No prior experience is required. Guided onboarding, simple tutorials, and AI-assisted tools help you learn at your own pace with Podpora 24/7 available.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Kako začeti trgovati z' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Ustvarite svoj račun', 'text' => 'Prijavite se s svojimi osnovnimi podatki in pridobite varen dostop do platforme.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Potrdite svoj e-poštni naslov', 'text' => 'Potrdite svoj e-poštni naslov, da odklenete popoln dostop do platforme.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Financirajte svoj račun', 'text' => 'Položite najmanj' . MIN_DEPOSIT . ' ' . CURRENCY . 'prek bančnega nakazila, kartice ali e-denarnice.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Določite svojo strategijo', 'text' => 'Izberite stopnjo tveganja in trgovalne nastavitve – ročno ali samodejno.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Začni trgovati', 'text' => 'Samozavestno vstopite na trg z uporabo podatkov v realnem času in vpogledov AI.'],
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
            'name' => $site . 'Trgovalna platforma AI',
            'description' => $site . 'mobilni trgovalni vmesnik z grafikonom kriptovalut BTC/USDT v živo in portfeljskimi orodji',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . '| Platformaa za trgovanje z umetno inteligenco — mobilni pogled grafikona',
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
