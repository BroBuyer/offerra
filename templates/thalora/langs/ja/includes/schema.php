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
        'description' => '暗号資産、外国為替、世界の資産に、ひとつのプラットフォームからアクセスできます。 ' . $site . ' はライブ分析、アシスト自動化、専門家サポートを組み合わせています。',
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
        'description' => $site . ' — ライブ分析、アシスト自動化、マルチマーケット対応のAI取引プラットフォーム。',
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
                'name' => '取引を始める手順は何ですか？',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => '必要事項でご登録し、メールを確認し、最低 ' . money_min() . ' をご入金ください。ライブチャート、取引ツール、市場分析、専用サポートが利用できます。',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '資金と情報の取り扱いで、' . $site . ' は信頼できますか？',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'セッションはSSL暗号化で保護され、二要素認証をご利用いただけ、金融取引は信頼できるパートナー経由で処理されます。プライバシーの取り扱いはサイトに記載しています。',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '出金はどのくらいでできますか？',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => '出金はアカウントポータルからいつでもご依頼いただけます。処理は通常、方法に応じて1〜3営業日です。手数料と時間は確認前に表示されます。',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '始める前に取引経験は必要ですか？',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => '事前の取引経験は不要です。導入サポート、チュートリアル、AI強化ツールが、ご自身のペースでの学習を支えます。',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => '取引の始め方： ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'アカウントを作成', 'text' => '基本情報でご登録いただき、プラットフォームへ安全にアクセスできます。'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'メールアドレスを確認', 'text' => 'メールを確認すると、プラットフォームへフルアクセスできます。'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => '口座に入金する', 'text' => '最低 ' . money_min() . ' を、銀行振込、カード、または電子ウォレットでご入金ください。'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => '戦略を設定する', 'text' => 'リスク水準と取引の好みをお選びください — 手動または自動。'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => '取引を開始する', 'text' => 'リアルタイムデータとAIインサイトで、自信を持って市場に入りましょう。'],
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
