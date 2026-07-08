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
        'description' => 'Kripto, forex ve küresel piyasalar için yapay zeka destekli işlem platformu.',
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
                'name' => 'Nasıl başlayabilirim?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Dakikalar içinde hesap oluşturun, kısa doğrulamayı tamamlayın ve en az ' . MIN_DEPOSIT . ' ' . CURRENCY . ' yatırın. Canlı grafikler ve işlem araçları dahil tüm platform özelliklerinin kilidini açarsınız.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Param ve verilerim güvende mi?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Hesaplarınızı SSL şifreleme, iki aşamalı doğrulama ve güvenilir ödeme sağlayıcıları üzerinden güvenli işlem altyapısıyla koruyoruz. Kişisel verileriniz sıkı güvenlik standartlarına göre yönetilir.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kazançlarımı ne zaman çekebilirim?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Panelinizden istediğiniz zaman çekim talebi oluşturabilirsiniz. İşleme alma, yönteme bağlı olarak genellikle 1-3 iş günü sürer. Ücretleri ve süreleri işlem öncesinde net şekilde görürsünüz.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'İşlem deneyimine ihtiyacım var mı?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Önceki deneyim şart değildir. Destekli başlangıç süreci, anlaşılır rehberler ve yapay zeka destekli araçlar sayesinde kendi temponuzda ilerleyebilirsiniz; destek ekibi 7/24 hizmet verir.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => $site . ' ile işleme nasıl başlanır',
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Hesap oluşturun', 'text' => 'Temel bilgilerinizle kayıt olun ve platforma güvenli erişim kazanın.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'E-postanızı doğrulayın', 'text' => 'E-postanızı onaylayarak platformun tüm özelliklerini açın.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Fon yatırın', 'text' => 'Banka havalesi, kart veya e-cüzdan ile en az ' . MIN_DEPOSIT . ' ' . CURRENCY . ' yatırın.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Stratejinizi belirleyin', 'text' => 'Risk seviyenizi ve işlem tercihlerinizi manuel ya da otomatik olarak ayarlayın.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'İşleme başlayın', 'text' => 'Gerçek zamanlı veriler ve yapay zeka içgörüleriyle piyasaya güvenle giriş yapın.'],
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
            'name' => $site . ' yapay zeka işlem platformu',
            'description' => $site . ' BTC/USDT canlı kripto grafiği ve portföy araçları sunan mobil işlem arayüzü',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Yapay zeka işlem platformu — mobil grafik görünümü',
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
