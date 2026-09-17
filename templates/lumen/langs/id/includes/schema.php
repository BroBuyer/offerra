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
        'description' => 'Platform pelaburan dibantu AI yang jelas untuk pasar kripto dan berbilang aset.',
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
        'description' => 'Platform pelaburan AI yang mudah dengan pasar langsung, insight berpandu dan ruang kerja dagangan yang tenang.',
        'image' => $platform_image,
        'screenshot' => $platform_image,
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.7',
            'ratingCount' => '1842',
            'bestRating' => '5',
        ],
        'offers' => [
            '@type' => 'Penawaran',
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
                    'text' => 'Buat akun dalam beberapa menit, lengkapkan verifikasi singkat, dan biayai akun dengan deposit minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Anda akan membuka platform penuh termasuk carta langsung dan alat dagangan.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Adakah wang dan data saya selamat?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Kami melindungi akun dengan penyulitan SSL, verifikasi dua faktor dan pengendalian dana melalui penyedia pembayaran yang dipercayai. Data pribadi anda diurus di bawah dasar keamanan yang ketat.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Bila saya bisa mengeluarkan keuntungan?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Pengeluaran bisa diminta pada kapan saja dari papan pemuka akun. Pemprosesan biasanya mengambil 1–3 hari perniagaan bergantung pada kaedah. Yuran dan jangka masa ditunjukkan di awal.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Adakah saya perlukan pengalaman dagangan?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Tiada pengalaman terdahulu diperlukan. Onboarding berpandu, tutorial mudah dan alat dibantu AI membantu anda belajar pada kadar sendiri dengan dukungan 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Cara mulai trading dengan ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Buka akun anda', 'text' => 'Daftar dengan detail dasar dan dapatkan akses aman ke platform.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Sahkan email anda', 'text' => 'Sahkan email untuk membuka akses platform penuh.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Biayai akun Anda', 'text' => 'Deposit minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . ' melalui transfer bank, kad atau e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Tetapkan strategi anda', 'text' => 'Pilih tahap risiko dan keutamaan dagangan — manual atau otomatis.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Mulai trading', 'text' => 'Masuki pasar dengan yakin menggunakan data masa nyata dan insight AI.'],
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
            'description' => $site . ' antarmuka dagangan seluler dengan carta kripto BTC/USDT langsung dan alat portfolio',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Platform trading AI — paparan carta seluler',
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
