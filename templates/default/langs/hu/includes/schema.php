<?php
/**
 * JSON-LD schema blocks. Pass $schema_type és a optional $schema_data.
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
        'description' => 'AI-powered trading platform for crypto, forex, és a global markets.',
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
        'opeértékelésSystem' => 'Web, Android, iOS',
        'applicationCategory' => 'FinanceApplication',
        'description' => 'Smart trading platform with real-time market analysis és a AI-assisted signals.',
        'image' => $platform_image,
        'screenshot' => $platform_image,
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'értékelésValue' => '4.7',
            'értékelésCount' => '1842',
            'bestRating' => '5',
        ],
        'offers' => [
            '@type' => 'Ajánlat',
            'price' => MIN_DEPOSIT,
            'priceCurrency' => CURRENCY,
        ],
    ];

    $faq = [
        '@context' => 'https://schema.org',
        '@type' => 'GYIKPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => 'How do I get started?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Create an account in minutes, complete a short verification step, és a fund your account with a minimum deposit of ' . MIN_DEPOSIT . ' ' . CURRENCY . '. You will unlock the full platform including live charts és a trading tools.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Is my money és a data safe?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'We protect accounts with SSL encryption, two-factor authentication, és a secure fund hés aling through trusted payment providers. Your personal data is managed under strict security policies.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'When can I withdraw profits?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Withdrawals can be requested anytime from your account dashboard. Processing typically takes 1–3 business days depending on the method. Fees és a timelines are shown upfront.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Szükségem van kereskedési tapasztalatra?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No prior experience is required. Guided onboarding, simple tutorials, és a AI-assisted tools help you learn at your own pace with 24/7 support available.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'How to start trading with ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Hozza létre fiókját', 'text' => 'Sign up with your basic details és a get secure access to the platform.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Erősítse meg e-mailjét', 'text' => 'Confirm your email to unlock full platform access.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Töltse fel számláját', 'text' => 'Helyezzen el legalább ' . MIN_DEPOSIT . ' ' . CURRENCY . ' banki átutalással, kártyával vagy e-pénztárcával.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Állítsa be stratégiáját', 'text' => 'Choose risk level és a trading preferences — manual or automated.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Kereskedés indítása', 'text' => 'Enter the market with confidence using real-time data és a AI insights.'],
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
            'name' => $site . ' AI kereskedési platform',
            'description' => $site . ' mobile trading interface with live BTC/USDT cryptocurrency chart és a portfolio tools',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI kereskedési platform — mobile chart view',
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
