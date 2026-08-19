<?php
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
        'description' => '暗号資産とマルチアセット市場向けの、明確なAI支援投資プラットフォーム。',
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
        'description' => 'ライブ市場、ガイド付きインサイト、落ち着いた取引ワークスペースを備えたシンプルなAI投資プラットフォーム。',
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
                'name' => '始め方は？',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => '数分で口座を作成し、短い本人確認を完了し、最低入金額 ' . MIN_DEPOSIT . ' ' . CURRENCY . ' で口座に資金を入れます。ライブチャートと取引ツールを含むプラットフォーム全体が解放されます。',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '資金とデータは安全ですか？',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'SSL暗号化、二要素認証、信頼できる決済プロバイダーによる安全な資金取り扱いで口座を保護します。個人データは厳格なセキュリティ方針の下で管理されます。',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '利益はいつ引き出せますか？',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => '出金は口座ダッシュボードからいつでも申請できます。処理は方法により通常1〜3営業日です。手数料と期間は事前に表示されます。',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '取引経験は必要ですか？',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => '事前の経験は不要です。ガイド付きオンボーディング、簡単なチュートリアル、AI支援ツールで、自分のペースで学べます。24時間サポートも利用できます。',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => '取引を始める方法：' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => '口座を開設', 'text' => '基本情報で登録し、プラットフォームへの安全なアクセスを取得します。'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'メールを確認', 'text' => 'メールを確認して、プラットフォームへのフルアクセスを解放します。'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => '口座に入金', 'text' => '銀行振込、カード、またはeウォレットで最低 ' . MIN_DEPOSIT . ' ' . CURRENCY . ' を入金します。'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => '戦略を設定', 'text' => 'リスクレベルと取引設定を選択 — 手動または自動。'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => '取引を開始', 'text' => 'リアルタイムデータとAIインサイトで、自信を持って市場に入ります。'],
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
            'name' => $site . ' AI Trading プラットフォーム',
            'description' => $site . ' ライブBTC/USDT暗号資産チャートとポートフォリオツール付きのモバイル取引インターフェース',
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
