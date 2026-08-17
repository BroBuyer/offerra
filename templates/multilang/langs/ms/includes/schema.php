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
        'description' => 'AI-powered platform dagangan for crypto, forex, and global markets.',
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
        'description' => 'Smart platform dagangan with real-time market analysis and AI-assisted signals.',
        'image' => $platform_image,
        'screenshot' => $platform_image,
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.7',
            'ratingCount' => '1842',
            'bestRating' => '5',
        ],
        'offers' => [
            '@type' => 'Tawaran',
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
                    'text' => 'No prior experience is required. Guided onboarding, simple tutorials, and AI-assisted tools help you learn at your own pace with Sokongan 24/7 available.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Cara mula berdagang dengan ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Cipta akaun anda', 'text' => 'Daftar dengan butiran asas anda dan dapatkan akses selamat ke platform.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Sahkan e-mel anda', 'text' => 'Sahkan e-mel anda untuk membuka akses platform penuh.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Biayai akaun anda', 'text' => 'Deposit minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . ' melalui pindahan bank, kad atau e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Tetapkan strategi anda', 'text' => 'Pilih tahap risiko dan keutamaan dagangan — manual atau automatik.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Mula berdagang', 'text' => 'Masuki pasaran dengan yakin menggunakan data masa nyata dan insight AI.'],
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
            'name' => $site . ' — platform dagangan AI',
            'description' => $site . ' — antara muka mudah alih dengan carta kripto BTC/USDT langsung dan alat portfolio',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Platform dagangan AI — paparan carta mudah alih',
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
