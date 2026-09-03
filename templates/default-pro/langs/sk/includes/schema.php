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
        'description' => $site . ' is an AI-powered trading platform for ' . market_audience() . ' covering crypto, forex, and global markets.',
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
        'description' => $site . ' — AI trading platform for ' . market_audience() . ' with real-time market analysis and assisted signals.',
        'image' => $platform_image,
        'screenshot' => $platform_image,
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.7',
            'ratingCount' => '1842',
            'bestRating' => '5',
        ],
        'offers' => [
            '@type' => 'Nabídka',
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
                'name' => 'What is ' . $site . ' and how does it work?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $site . ' is an AI-assisted trading platform that analyses financial markets in real time and highlights setups with alerts and risk tools. Create an account, complete verification, and fund from ' . MIN_DEPOSIT . ' ' . CURRENCY . '.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Are my data and funds handled securely on ' . $site . '?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $site . ' protects accounts with SSL encryption, two-factor authentication, and documented deposit and withdrawal steps. Trading still involves a risk of losing capital.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'When can I withdraw from ' . $site . '?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Výběry can be requested anytime from the ' . $site . ' dashboard. Processing typically takes 1–3 business days depending on the method. Fees and timelines are shown on ' . $site . ' before you confirm.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Do I need trading experience to use ' . $site . '?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No. ' . $site . ' guides registration, deposit, and basic navigation for ' . market_audience() . '. Advanced tools stay available when you are ready. Support is available 24/7.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'What returns can I expect on ' . $site . '?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $site . ' does not guarantee returns. Results depend on capital, strategy, volatility, and how you manage risk.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Which markets are available on ' . $site . '?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $site . ' covers digital assets and multi-market instruments in one dashboard, with alerts and assisted automation for ' . market_audience() . '.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'How to start trading with ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Register on ' . $site, 'text' => 'Sign up with your name, email, and phone to create a ' . $site . ' account.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verify the ' . $site . ' account', 'text' => 'Finish guided verification and set risk preferences.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Fund your ' . $site . ' account', 'text' => 'Vložte minimálne ' . MIN_DEPOSIT . ' ' . CURRENCY . ' via bank transfer, card, or e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Set ' . $site . ' limits', 'text' => 'Zvolte úroveň rizika a preference obchodování — manuálně nebo automatizovaně.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Trade in the ' . $site . ' desk', 'text' => 'Use live charts, tickets, and support inside ' . $site . '.'],
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
            'name' => $site . ' AI obchodná platforma',
            'description' => $site . ' mobilní obchodní rozhraní se živým grafem kryptoměny BTC/USDT a nástroji pro portfolio',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI obchodná platforma — mobilní zobrazení grafu',
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
