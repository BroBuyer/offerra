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
        'description' => 'Kripto paralar, forex ve küresel varlıklara tek bir platformdan erişin. ' . $site . ' canlı analitik, destekli otomasyon ve uzman desteğini birleştirir.',
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
        'description' => $site . ' — canlı analitik, destekli otomasyon ve çoklu piyasa erişimi olan yapay zekâ destekli işlem platformu.',
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
                'name' => 'İşleme başlamak için hangi adımlar gerekir?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Temel bilgilerinizle kaydolun, e-postanızı doğrulayın ve hesabınıza en az ' . money_min() . ' yatırın. Canlı grafikler, işlem araçları, piyasa analizi ve özel destek açılır.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => $site . ' paramı ve bilgilerimi yönetmede güvenilir mi?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Oturumlar SSL ile şifrelenir, iki faktörlü kimlik doğrulama mevcuttur, finansal işlemler güvenilir ortaklar üzerinden yürür. Gizlilik uygulamaları sitede anlatılır.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Fonlarımı ne kadar sürede çekebilirim?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Çekimleri hesap portalından istediğiniz zaman talep edebilirsiniz. İşlem yönteme göre genellikle 1–3 iş günü sürer. Ücretler ve süreler onaydan önce görünür.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Başlamak için işlem deneyimi gerekir mi?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Önceki deneyim gerekmez. Onboarding, eğitimler ve yapay zekâ destekli araçlar kendi hızınızda öğrenmenize yardımcı olur.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'İşleme nasıl başlanır: ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Hesabınızı oluşturun', 'text' => 'Temel bilgilerinizle kaydolun ve platforma güvenli erişim alın.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'E-postanızı doğrulayın', 'text' => 'Tam platform erişimi için e-postanızı doğrulayın.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Hesaba fon ekleyin', 'text' => 'En az ' . money_min() . ' havale, kart veya e-cüzdanla yatırın.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Stratejiyi ayarlayın', 'text' => 'Risk düzeyini ve tercihleri seçin — manuel veya otomatik.'],
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
            'name' => $site . ' — yapay zekâ işlem platformu',
            'description' => $site . ' — canlı BTC/USDT kripto grafiği ve portföy araçlarıyla mobil arayüz',
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
