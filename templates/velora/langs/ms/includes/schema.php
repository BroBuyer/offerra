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
        'description' => 'Platform pelaburan berbantu AI yang jelas untuk pasaran kripto dan berbilang aset.',
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
        'description' => 'Platform pelaburan AI yang mudah dengan pasaran langsung, cerapan berpandu dan ruang kerja perdagangan yang tenang.',
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
                'name' => 'Bagaimana saya bermula?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Cipta akaun dalam beberapa minit, lengkapkan langkah pengesahan ringkas, dan biayai akaun anda dengan deposit minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Anda akan membuka platform penuh termasuk carta langsung dan alat perdagangan.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Adakah wang dan data saya selamat?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Kami melindungi akaun dengan penyulitan SSL, pengesahan dua faktor dan pengendalian dana yang selamat melalui penyedia pembayaran yang dipercayai. Data peribadi anda diuruskan di bawah dasar keselamatan yang ketat.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Bila saya boleh mengeluarkan keuntungan?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Pengeluaran boleh diminta pada bila-bila masa dari papan pemuka akaun anda. Pemprosesan biasanya mengambil masa 1–3 hari bekerja bergantung pada kaedah. Yuran dan jangka masa dipaparkan di awal.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Adakah saya memerlukan pengalaman perdagangan?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Tiada pengalaman terdahulu diperlukan. Pendaftaran berpandu, tutorial ringkas dan alat berbantu AI membantu anda belajar mengikut rentak sendiri dengan sokongan 24/7 tersedia.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Cara mula berdagang dengan ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Cipta akaun anda', 'text' => 'Daftar dengan butiran asas anda dan dapatkan akses selamat ke platform.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Sahkan e-mel anda', 'text' => 'Sahkan e-mel anda untuk membuka akses platform penuh.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Biayai akaun anda', 'text' => 'Deposit minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . ' melalui pindahan bank, kad atau e-dompet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Tetapkan strategi anda', 'text' => 'Pilih tahap risiko dan keutamaan perdagangan — manual atau automatik.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Mula berdagang', 'text' => 'Masuki pasaran dengan yakin menggunakan data masa nyata dan cerapan AI.'],
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
            'name' => $site . ' Platform Perdagangan AI',
            'description' => $site . ' antara muka perdagangan mudah alih dengan carta mata wang kripto BTC/USDT secara langsung dan alat portfolio',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Platform Perdagangan AI — paparan carta mudah alih',
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
