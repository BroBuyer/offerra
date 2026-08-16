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
        'description' => 'Access cryptocurrencies, forex, and global assets through one platform. ' . $site . ' combines live analytics, assisted automation, and expert support.',
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
        'description' => $site . ' AI-powered trading platform with live analytics, assisted automation, and multi-market access.',
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
                'name' => 'What are the steps to start trading?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sign up with your essential details, confirm your email, and fund your account with a minimum of ' . money_min() . '. This unlocks live charts, trading tools, market analysis, and dedicated support.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Is ' . $site . ' reliable for handling my money and information?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sessions are secured with SSL encryption, two-factor authentication is available, and financial transactions are handled through trusted partners. Privacy practices are outlined on the site.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'How soon can I withdraw my funds?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Withdrawals can be requested from your account portal at any time. Processing usually takes 1 to 3 business days depending on the method. Fees and timings are shown before you confirm.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Is it necessary to have trading experience before starting?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No prior trading experience is necessary. Onboarding support, tutorials, and AI-enhanced tools help you learn at your own pace.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'How to start trading with ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Create your account', 'text' => 'Sign up with your basic details and get secure access to the platform.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verify your email', 'text' => 'Confirm your email to unlock full platform access.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Fund your account', 'text' => 'Deposit a minimum of ' . money_min() . ' via bank transfer, card, or e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Set your strategy', 'text' => 'Choose risk level and trading preferences — manual or automated.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Start trading', 'text' => 'Enter the market with confidence using real-time data and AI insights.'],
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
            'name' => $site . ' AI Trading Platform',
            'description' => $site . ' mobile trading interface with live BTC/USDT cryptocurrency chart and portfolio tools',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI Trading Platform — mobile chart view',
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
