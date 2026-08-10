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
        'description' => 'Kripto ve çoklu varlık piyasaları için net, yapay zekâ destekli bir yatırım platformu.',
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
        'description' => 'Canlı piyasalar, rehberli içgörüler ve sakin bir işlem alanı sunan basit yapay zekâ yatırım platformu.',
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
                'name' => 'Nasıl başlarım?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Dakikalar içinde hesap oluşturun, kısa bir doğrulamayı tamamlayın ve en az \\' . MIN_DEPOSIT . \\' \\' . CURRENCY . \\' yatırarak hesabınızı fonlayın. Canlı grafikler ve işlem araçları dahil tam platformu açarsınız.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Param ve verilerim güvende mi?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Hesapları SSL şifreleme, iki faktörlü kimlik doğrulama ve güvenilir ödeme sağlayıcıları üzerinden güvenli fon yönetimiyle koruruz. Kişisel verileriniz sıkı güvenlik politikalarına göre yönetilir.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kârları ne zaman çekebilirim?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Çekimler hesap panelinizden istediğiniz zaman talep edilebilir. İşlem genellikle yönteme bağlı olarak 1–3 iş günü sürer. Ücretler ve süreler önceden gösterilir.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'İşlem deneyimine ihtiyacım var mı?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Önceki deneyim gerekmez. Rehberli onboarding, basit eğitimler ve yapay zekâ destekli araçlar kendi hızınızda öğrenmenize yardımcı olur — 7/24 destek mevcuttur.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Şununla işleme nasıl başlanır: ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Hesabınızı açın', 'text' => 'Temel bilgilerinizle kaydolun ve platforma güvenli erişim kazanın.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'E-postanızı doğrulayın', 'text' => 'Tam erişimi açmak için e-postanızı onaylayın.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Hesabınızı fonlayın', 'text' => 'Banka havalesi, kart veya e-cüzdan ile en az \\' . MIN_DEPOSIT . \\' \\' . CURRENCY . \\' yatırın.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Stratejinizi belirleyin', 'text' => 'Risk düzeyini ve tercihleri seçin — manuel veya otomatik.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'İşleme başlayın', 'text' => 'Gerçek zamanlı veriler ve yapay zekâ içgörüleriyle piyasaya güvenle girin.'],
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
            'description' => $site . ' canlı BTC/USDT kripto grafiği ve portföy araçlarıyla mobil işlem arayüzü',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Yapay zekâ işlem platformu — mobil grafik görünümü',
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
