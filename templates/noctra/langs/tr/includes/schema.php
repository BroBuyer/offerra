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
        'description' => 'Yapay zekâ destekli sinyallerle kripto, döviz ve çoklu varlık işlemleri için koyu renkli piyasa terminali.',
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
        'description' => 'Canlı piyasalar, portföy araçları ve yapay zekâ destekli işlem bağlamı sunan borsa tarzı işlem terminali.',
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
                    'text' => 'Dakikalar içinde hesap oluşturun, kısa bir doğrulama tamamlayın ve hesabınıza minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . ' yatırın. Canlı grafikler ve işlem araçları dahil tam platformu açarsınız.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Param ve verilerim güvende mi?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Hesapları SSL şifreleme, iki faktörlü kimlik doğrulama ve güvenilir ödeme sağlayıcıları üzerinden güvenli fon yönetimiyle koruruz. Kişisel verileriniz sıkı güvenlik politikalarıyla yönetilir.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kârları ne zaman çekebilirim?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Çekimler hesap panelinden istediğiniz zaman talep edilebilir. İşlem genellikle yönteme bağlı olarak 1–3 iş günü sürer. Ücretler ve süreler önceden gösterilir.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'İşlem deneyimi gerekli mi?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Önceden deneyim gerekmez. Rehberli başlangıç, basit eğitimler ve yapay zekâ destekli araçlar kendi hızınızda öğrenmenize yardım eder; 7/24 destek vardır.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => $site . ' ile işleme nasıl başlanır',
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Hesabınızı oluşturun', 'text' => 'Temel bilgilerinizle kaydolun ve platforma güvenli erişim alın.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'E-postanızı doğrulayın', 'text' => 'Tam platform erişimini açmak için e-postanızı onaylayın.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Hesaba para yatırın', 'text' => 'Banka havalesi, kart veya e-cüzdan ile en az ' . MIN_DEPOSIT . ' ' . CURRENCY . ' yatırın.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Stratejinizi belirleyin', 'text' => 'Risk düzeyini ve işlem tercihlerini seçin — manuel veya otomatik.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'İşleme başlayın', 'text' => 'Gerçek zamanlı veriler ve yapay zekâ analizleriyle piyasaya girin.'],
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
            'name' => $site . ' Yapay Zekâ İşlem Platformu',
            'description' => 'Canlı BTC/USDT kripto grafiği ve portföy araçlarıyla ' . $site . ' mobil işlem arayüzü',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Yapay Zekâ İşlem Platformu — mobil grafik görünümü',
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
