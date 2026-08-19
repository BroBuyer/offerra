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
        'description' => '暗号資産およびマルチ資産市場向けの、明快なAI支援投資プラットフォームです。',
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
        'description' => 'ライブ市場、案内付きインサイト、落ち着いた取引ワークスペースを備えた、シンプルなAI投資プラットフォームです。',
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
                'name' => 'どのように始めればよいですか？',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => '数分でアカウントを作成し、短い本人確認ステップを完了し、最低入金額 ' . MIN_DEPOSIT . ' ' . CURRENCY . '. ライブチャートや取引ツールを含む、プラットフォーム全体がご利用いただけます。',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '資金とデータは安全ですか？',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'SSL暗号化、二要素認証、信頼できる決済事業者を通じた安全な資金取扱いにより、アカウントを保護します。個人データは厳格なセキュリティポリシーのもとで管理されます。',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '利益はいつ出金できますか？',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => '出金はアカウントダッシュボードからいつでもリクエストできます。処理は方法により、通常1–3営業日かかります。手数料と所要時間は事前に表示されます。',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '取引経験は必要ですか？',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => '事前の経験は不要です。案内付きオンボーディング、わかりやすいチュートリアル、AI支援ツールにより、24時間365日のサポートを受けながら、ご自身のペースで学べます。',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => '取引の始め方 — ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'アカウントを作成', 'text' => '基本情報で登録し、プラットフォームへ安全にアクセスできます。'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'メールアドレスを確認', 'text' => 'メールアドレスを確認すると、プラットフォーム全体にアクセスできます。'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => '口座に入金', 'text' => '最低 ' . MIN_DEPOSIT . ' ' . CURRENCY . ' を銀行振込、カード、または電子ウォレットでご入金ください。'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => '戦略を設定', 'text' => 'リスク水準と取引設定を選択してください — 手動または自動です。'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => '取引を始める', 'text' => 'リアルタイムデータとAIインサイトを使って、自信を持って市場に参入できます。'],
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
            'name' => $site . ' AIトレーディングプラットフォーム',
            'description' => $site . ' ライブBTC/USDT暗号資産チャートとポートフォリオツールを備えたモバイル取引インターフェース',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AIトレーディングプラットフォーム — モバイルチャート表示',
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
