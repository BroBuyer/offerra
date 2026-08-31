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
                'name' => '始め方を教えてください。',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => '数分で口座を開設し、簡単な確認を済ませ、最低入金額 ' . MIN_DEPOSIT . ' ' . CURRENCY . ' をご入金ください。ライブチャートと取引ツールを含むプラットフォームのすべてが利用できます。',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '資金とデータは安全ですか？',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'SSL暗号化、二要素認証、信頼できる決済事業者による安全な資金管理で口座を保護しています。個人データは厳格なセキュリティ方針のもと管理されます。',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '利益の出金はいつできますか？',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => '出金は口座ダッシュボードからいつでも申請できます。処理は方法により通常1〜3営業日です。手数料と所要時間は事前に表示されます。',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '取引経験は必要ですか？',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => '事前の経験は不要です。案内付きオンボーディング、わかりやすいチュートリアル、AI支援ツールで自分のペースで学べ、24時間サポートも利用できます。',
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
            ['@type' => 'HowToStep', 'position' => 3, 'name' => '口座に入金', 'text' => '最低 ' . MIN_DEPOSIT . ' ' . CURRENCY . ' を、銀行振込、カード、または電子ウォレットでご入金ください。'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => '戦略を設定', 'text' => 'リスク水準と取引の好みをお選びください — 手動または自動。'],
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
