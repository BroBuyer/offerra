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
        'logo' => $url . '/assets/img/logo.svg',
        'description' => 'Kripto, forex ve küresel pazarlar için yapay zeka destekli işlem platformu.',
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
        'description' => 'Gerçek zamanlı piyasa analizi ve yapay zeka destekli sinyaller sunan akıllı işlem platformu.',
        'image' => $platform_image,
        'screenshot' => $platform_image,
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
                'name' => 'Nasıl başlayabilirim?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Birkaç dakika içinde hesap oluşturun, kısa bir doğrulama adımını tamamlayın ve hesabınıza minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . ' yatırın. Gerçek zamanlı grafikler ve işlem araçları dahil platforma tam erişim kazanırsınız.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Param ve verilerim güvende mi?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Hesapları SSL şifreleme, iki faktörlü kimlik doğrulama ve güvenilir ödeme sağlayıcıları aracılığıyla güvenli fon yönetimi ile koruyoruz. Kişisel verileriniz katı güvenlik politikalarına uygun şekilde işlenir.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kârlarımı ne zaman çekebilirim?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Çekim taleplerini hesap alanınızdan istediğiniz zaman yapabilirsiniz. İşlem genellikle ödeme yöntemine bağlı olarak 1–3 iş günü sürer. Ücretler ve süreler önceden gösterilir.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'İşlem deneyimi gerekli mi?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Önceden deneyim gerekmez. Rehberli başlangıç, basit eğitimler ve yapay zeka destekli araçlar kendi hızınızda öğrenmenize yardımcı olur; 7/24 destek mevcuttur.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => $site . ' ile işlem yapmaya nasıl başlanır',
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Hesabınızı oluşturun', 'text' => 'Temel bilgilerinizle kayıt olun ve platforma güvenli erişim kazanın.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'E-postanızı doğrulayın', 'text' => 'Platforma tam erişim için e-posta adresinizi onaylayın.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Hesabınızı fonlayın', 'text' => 'Havale, kart veya e-cüzdan ile minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . ' yatırın.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Stratejinizi belirleyin', 'text' => 'Risk seviyesi ve işlem tercihlerinizi seçin — manuel veya otomatik.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'İşlem yapmaya başlayın', 'text' => 'Gerçek zamanlı veriler ve yapay zeka içgörüleriyle piyasaya güvenle girin.'],
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
            'name' => $site . ' | İşlem platformu',
            'description' => $site . ' mobil işlem arayüzü — gerçek zamanlı BTC/USDT kripto grafiği ve portföy araçları',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | İşlem platformu — mobil grafik görünümü',
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
