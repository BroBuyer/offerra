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
            '@type' => 'オファー',
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
                    'text' => 'No prior experience is required. Guided onboarding, simple tutorials, and AI-assisted tools help you learn at your own pace with 24時間サポート available.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => '取引の始め方： ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => '口座を作成', 'text' => '基本情報でご登録いただき、プラットフォームへ安全にアクセスできます。'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'メールアドレスを確認', 'text' => 'メールを確認すると、プラットフォームへフルアクセスできます。'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => '口座に入金する', 'text' => '最低 ' . MIN_DEPOSIT . ' ' . CURRENCY . ' を、銀行振込、カード、または電子ウォレットでご入金ください。'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => '戦略を設定する', 'text' => 'リスク水準と取引の好みをお選びください — 手動または自動。'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => '取引を開始', 'text' => 'リアルタイムデータとAIインサイトで、自信を持って市場に入りましょう。'],
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
            'name' => $site . ' — AI取引プラットフォーム',
            'description' => $site . ' — ライブBTC/USDT暗号資産チャートとポートフォリオツールを備えたモバイル画面',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI取引プラットフォーム — モバイルチャート表示',
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
