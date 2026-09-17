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
        'description' => 'Akses mata wang kripto, forex dan aset global melalui satu platform. ' . $site . ' menggabungkan analitik langsung, automasi berbantu dan dukungan pakar.',
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
        'description' => $site . ' — platform trading berkuasa AI dengan analitik langsung, automasi berbantu dan akses berbilang pasar.',
        'image' => $platform_image,
        'screenshot' => $platform_image,
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.7',
            'ratingCount' => '337',
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
                'name' => 'Apakah langkah untuk mulai trading?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Daftar dengan detail penting anda, sahkan email dan biayai akun Anda dengan minimum ' . money_min() . '. Ini membuka carta langsung, alat dagangan, analisis pasar dan dukungan berdedikasi.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Adakah ' . $site . ' bisa dipercayai untuk menguruskan wang dan informasi saya?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sesi dilindungi dengan penyulitan SSL, verifikasi dua faktor tersedia, dan transaksi kewangan dikendalikan melalui rakan kongsi dipercayai. Amalan privasi digariskan di laman ini.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Berapa cepat saya bisa mengeluarkan dana?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Pengeluaran bisa diminta dari portal akun Anda pada kapan saja. Pemprosesan biasanya mengambil masa 1 hingga 3 hari perniagaan bergantung pada kaedah. Yuran dan masa dipaparkan sebelum anda sahkan.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Perlukah pengalaman dagangan sebelum bermula?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Tiada pengalaman dagangan terdahulu diperlukan. Dukungan onboarding, tutorial dan alat dipertingkat AI membantu anda belajar mengikut rentak sendiri.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Cara mulai trading dengan ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Buat akun Anda', 'text' => 'Daftar dengan detail dasar anda dan dapatkan akses aman ke platform.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Sahkan email anda', 'text' => 'Sahkan email anda untuk membuka akses platform penuh.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Biayai akun Anda', 'text' => 'Deposit minimum ' . money_min() . ' melalui transfer bank, kad atau e-wallet.'],
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
            'name' => $site . ' — platform trading AI',
            'description' => $site . ' — antarmuka seluler dengan carta kripto BTC/USDT langsung dan alat portfolio',
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
