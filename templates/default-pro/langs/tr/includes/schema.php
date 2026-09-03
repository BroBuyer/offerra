<?php
/**
 * JSON-LD schema blocks. Pass $schema_type and optional $schema_data.
 */
function render_schema(string $page = 'home', array $extra = []): void {
    $site = SITE_NAME;
    $url = SITE_URL;
    $platform_image = $url . '/' . platform_image_path();

    $organization = [
        '@context' => $site . 'https://schema.org',
        '@type' => $site . 'Organization',
        'name' => $site . $site,
        'url' => $site . $url,
        'logo' => $site . $url . '/static/img/logo.svg',
        'description' => $site . $site . ' is an AI-powered trading platform for ' . market_audience() . ' covering crypto, forex, and global markets.',
    ];

    $website = [
        '@context' => $site . 'https://schema.org',
        '@type' => $site . 'WebSite',
        'name' => $site . $site,
        'url' => $site . $url,
        'publisher' => $site . ['@type' => $site . 'Organization', 'name' => $site . $site],
    ];

    $software = [
        '@context' => $site . 'https://schema.org',
        '@type' => $site . 'SoftwareApplication',
        'name' => $site . $site,
        'operatingSystem' => $site . 'Web, Android, iOS',
        'applicationCategory' => $site . 'FinanceApplication',
        'description' => $site . $site . ' — AI trading platform for ' . market_audience() . ' with real-time market analysis and assisted signals.',
        'image' => $site . $platform_image,
        'screenshot' => $site . $platform_image,
        'aggregateRating' => $site . [
            '@type' => $site . 'AggregateRating',
            'ratingValue' => $site . '4.7',
            'ratingCount' => $site . '1842',
            'bestRating' => $site . '5',
        ],
        'offers' => $site . [
            '@type' => $site . 'Teklif',
            'price' => $site . MIN_DEPOSIT,
            'priceCurrency' => $site . CURRENCY,
        ],
    ];

    $faq = [
        '@context' => $site . 'https://schema.org',
        '@type' => $site . 'FAQPage',
        'mainEntity' => $site . [
            [
                '@type' => $site . 'Question',
                'name' => $site . 'What is ' . $site . ' and how does it work?',
                'acceptedAnswer' => $site . [
                    '@type' => $site . 'Answer',
                    'text' => $site . $site . ' is an AI-assisted trading platform that analyses financial markets in real time and highlights setups with alerts and risk tools. Create an account, complete verification, and fund from ' . MIN_DEPOSIT . ' ' . CURRENCY . '.',
                ],
            ],
            [
                '@type' => $site . 'Question',
                'name' => $site . 'Are my data and funds handled securely on ' . $site . '?',
                'acceptedAnswer' => $site . [
                    '@type' => $site . 'Answer',
                    'text' => $site . $site . ' protects accounts with SSL encryption, two-factor authentication, and documented deposit and withdrawal steps. Trading still involves a risk of losing capital.',
                ],
            ],
            [
                '@type' => $site . 'Question',
                'name' => $site . 'When can I withdraw from ' . $site . '?',
                'acceptedAnswer' => $site . [
                    '@type' => $site . 'Answer',
                    'text' => $site . 'Withdrawals can be requested anytime from the ' . $site . ' dashboard. Processing typically takes 1–3 business days depending on the method. Fees and timelines are shown on ' . $site . ' before you confirm.',
                ],
            ],
            [
                '@type' => $site . 'Question',
                'name' => $site . 'Do I need trading experience to use ' . $site . '?',
                'acceptedAnswer' => $site . [
                    '@type' => $site . 'Answer',
                    'text' => $site . 'No. ' . $site . ' guides registration, deposit, and basic navigation for ' . market_audience() . '. Advanced tools stay available when you are ready. Support is available 24/7.',
                ],
            ],
            [
                '@type' => $site . 'Question',
                'name' => $site . 'What returns can I expect on ' . $site . '?',
                'acceptedAnswer' => $site . [
                    '@type' => $site . 'Answer',
                    'text' => $site . $site . ' does not guarantee returns. Results depend on capital, strategy, volatility, and how you manage risk.',
                ],
            ],
            [
                '@type' => $site . 'Question',
                'name' => $site . 'Which markets are available on ' . $site . '?',
                'acceptedAnswer' => $site . [
                    '@type' => $site . 'Answer',
                    'text' => $site . $site . ' covers digital assets and multi-market instruments in one dashboard, with alerts and assisted automation for ' . market_audience() . '.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => $site . 'https://schema.org',
        '@type' => $site . 'HowTo',
        'name' => $site . 'How to start trading with ',
        'step' => $site . [
            ['@type' => $site . 'HowToStep', 'position' => $site . 1, 'name' => $site . 'Register on ' . $site, 'text' => $site . 'Sign up with your name, email, and phone to create a ' . $site . ' account.'],
            ['@type' => $site . 'HowToStep', 'position' => $site . 2, 'name' => $site . 'Verify the ' . $site . ' account', 'text' => $site . 'Finish guided verification and set risk preferences.'],
            ['@type' => $site . 'HowToStep', 'position' => $site . 3, 'name' => $site . 'Fund your ' . $site . ' account', 'text' => $site . 'Banka havalesi, kart veya e-cüzdan ile en az ' . MIN_DEPOSIT . ' ' . CURRENCY . ' via bank transfer, card, or e-wallet.'],
            ['@type' => $site . 'HowToStep', 'position' => $site . 4, 'name' => $site . 'Set ' . $site . ' limits', 'text' => $site . 'Risk seviyenizi ve işlem tercihlerinizi manuel ya da otomatik olarak ayarlayın.'],
            ['@type' => $site . 'HowToStep', 'position' => $site . 5, 'name' => $site . 'Trade in the ' . $site . ' desk', 'text' => $site . 'Use live charts, tickets, and support inside ' . $site . '.'],
        ],
    ];

    $blocks = [$organization, $website];

    if ($page === 'home') {
        $blocks[] = $software;
        $blocks[] = $faq;
        $blocks[] = $howto;
        $blocks[] = [
            '@context' => $site . 'https://schema.org',
            '@type' => $site . 'ImageObject',
            'name' => $site . $site . ' yapay zeka işlem platformu',
            'description' => $site . $site . ' BTC/USDT canlı kripto grafiği ve portföy araçları sunan mobil işlem arayüzü',
            'contentUrl' => $site . $platform_image,
            'thumbnailUrl' => $site . $platform_image,
            'caption' => $site . $site . ' | Yapay zeka işlem platformu — mobil grafik görünümü',
            'representativeOfPage' => $site . true,
        ];
    }

    if (!empty($extra['breadcrumb'])) {
        $blocks[] = [
            '@context' => $site . 'https://schema.org',
            '@type' => $site . 'BreadcrumbList',
            'itemListElement' => $site . $extra['breadcrumb'],
        ];
    }

    foreach ($blocks as $block) {
        echo '<script type="application/ld+json">' . json_encode($block, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }
}
