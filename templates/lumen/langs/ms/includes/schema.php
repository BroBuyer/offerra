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
        'description' => 'Platform pelaburan dibantu AI yang jelas untuk pasaran kripto dan berbilang aset.',
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
        'description' => 'Platform pelaburan AI yang mudah dengan pasaran langsung, insight berpandu dan ruang kerja dagangan yang tenang.',
        'image' => $platform_image,
        'screenshot' => $platform_image,
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.7',
            'ratingCount' => '1842',
            'bestRating' => '5',
        ],
        'offers' => [
            '@type' => 'Tawaran',
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
                    'text' => 'Cipta akaun dalam beberapa minit, lengkapkan pengesahan singkat, dan biayai akaun dengan deposit minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Anda akan membuka platform penuh termasuk carta langsung dan alat dagangan.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Adakah wang dan data saya selamat?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Kami melindungi akaun dengan penyulitan SSL, pengesahan dua faktor dan pengendalian dana melalui penyedia pembayaran yang dipercayai. Data peribadi anda diurus di bawah dasar keselamatan yang ketat.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Bila saya boleh mengeluarkan keuntungan?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Pengeluaran boleh diminta pada bila-bila masa dari papan pemuka akaun. Pemprosesan biasanya mengambil 1–3 hari perniagaan bergantung pada kaedah. Yuran dan jangka masa ditunjukkan di awal.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Adakah saya perlukan pengalaman dagangan?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Tiada pengalaman terdahulu diperlukan. Onboarding berpandu, tutorial mudah dan alat dibantu AI membantu anda belajar pada kadar sendiri dengan sokongan 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Cara mula berdagang dengan ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Buka akaun anda', 'text' => 'Daftar dengan butiran asas dan dapatkan akses selamat ke platform.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Sahkan e-mel anda', 'text' => 'Sahkan e-mel untuk membuka akses platform penuh.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Biayai akaun anda', 'text' => 'Deposit minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . ' melalui pindahan bank, kad atau e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Tetapkan strategi anda', 'text' => 'Pilih tahap risiko dan keutamaan dagangan — manual atau automatik.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Mula berdagang', 'text' => 'Masuki pasaran dengan yakin menggunakan data masa nyata dan insight AI.'],
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
            'description' => $site . ' antara muka dagangan mudah alih dengan carta kripto BTC/USDT langsung dan alat portfolio',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Platform dagangan AI — paparan carta mudah alih',
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
