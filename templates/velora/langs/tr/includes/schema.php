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
        'description' => 'Kripto ve çoklu varlık piyasaları için net bir AI destekli yatırım platformu.',
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
        'description' => 'Canlı piyasalar, rehberli içgörüler ve sakin bir işlem alanı sunan basit AI yatırım platformu.',
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
                    'text' => 'Dakikalar içinde hesap oluşturun, kısa bir doğrulama adımını tamamlayın ve hesabınızı minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . ' yatırımla fonlayın. Canlı grafikler ve işlem araçları dahil tüm platformun kilidini açarsınız.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Param ve verilerim güvende mi?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Hesapları SSL şifreleme, iki faktörlü kimlik doğrulama ve güvenilir ödeme sağlayıcıları aracılığıyla güvenli fon işleme ile koruyoruz. Kişisel verileriniz katı güvenlik politikaları kapsamında yönetilir.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kârımı ne zaman çekebilirim?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Çekimler hesap panonuzdan istediğiniz zaman talep edilebilir. İşlem genellikle yönteme bağlı olarak 1–3 iş günü sürer. Ücretler ve süreler önceden gösterilir.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'İşlem deneyimine ihtiyacım var mı?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Önceki deneyim gerekmez. Rehberli katılım, basit eğitimler ve AI destekli araçlar 7/24 destekle kendi hızınızda öğrenmenize yardımcı olur.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => ' ile işlem yapmaya nasıl başlanır' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Hesabınızı oluşturun', 'text' => 'Temel bilgilerinizle kayıt olun ve platforma güvenli erişim elde edin.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'E-postanızı doğrulayın', 'text' => 'Tam platform erişiminin kilidini açmak için e-postanızı onaylayın.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Hesabınızı fonlayın', 'text' => 'En az ' . MIN_DEPOSIT . ' ' . CURRENCY . ' banka transferi, kart veya e-cüzdan ile yatırın.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Stratejinizi belirleyin', 'text' => 'Risk seviyesi ve işlem tercihlerini seçin — manuel veya otomatik.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'İşlem yapmaya başla', 'text' => 'Gerçek zamanlı veri ve AI içgörüleriyle güvenle piyasaya girin.'],
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
            'name' => $site . ' AI İşlem Platformu',
            'description' => $site . ' canlı BTC/USDT kripto grafiği ve portföy araçlarıyla mobil işlem arayüzü',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI İşlem Platformu — mobil grafik görünümü',
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
