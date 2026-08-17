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
        'description' => 'Akses mata wang kripto, forex dan aset global melalui satu platform. ' . $site . ' menggabungkan analitik langsung, automasi berbantu dan sokongan pakar.',
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
        'description' => $site . ' — platform dagangan berkuasa AI dengan analitik langsung, automasi berbantu dan akses berbilang pasaran.',
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
                'name' => 'Apakah langkah untuk mula berdagang?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Daftar dengan butiran penting anda, sahkan e-mel dan biayai akaun anda dengan minimum ' . money_min() . '. Ini membuka carta langsung, alat dagangan, analisis pasaran dan sokongan berdedikasi.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Adakah ' . $site . ' boleh dipercayai untuk menguruskan wang dan maklumat saya?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sesi dilindungi dengan penyulitan SSL, pengesahan dua faktor tersedia, dan transaksi kewangan dikendalikan melalui rakan kongsi dipercayai. Amalan privasi digariskan di laman ini.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Berapa cepat saya boleh mengeluarkan dana?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Pengeluaran boleh diminta dari portal akaun anda pada bila-bila masa. Pemprosesan biasanya mengambil masa 1 hingga 3 hari perniagaan bergantung pada kaedah. Yuran dan masa dipaparkan sebelum anda sahkan.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Perlukah pengalaman dagangan sebelum bermula?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Tiada pengalaman dagangan terdahulu diperlukan. Sokongan onboarding, tutorial dan alat dipertingkat AI membantu anda belajar mengikut rentak sendiri.',
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
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Biayai akaun anda', 'text' => 'Deposit minimum ' . money_min() . ' melalui pindahan bank, kad atau e-wallet.'],
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
            'name' => $site . ' — platform dagangan AI',
            'description' => $site . ' — antara muka mudah alih dengan carta kripto BTC/USDT langsung dan alat portfolio',
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
