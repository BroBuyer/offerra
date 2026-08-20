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
        'description' => 'Dark market terminal for crypto, forex, and multi-asset trading with AI-assisted signals.',
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
        'description' => 'Exchange-style trading terminal with live markets, portfolio tools, and AI-assisted execution context.',
        'image' => $platform_image,
        'screenshot' => $platform_image,
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.7',
            'ratingCount' => '1842',
            'bestRating' => '5',
        ],
        'offers' => [
            '@type' => 'Piedāvājums',
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
                'name' => 'How do I get started?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Create an account in minutes, complete a short verification step, and fund your account with a minimum deposit of ' . MIN_DEPOSIT . ' ' . CURRENCY . '. You will unlock the full platform including live charts and trading tools.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Is my money and data safe?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'We protect accounts with SSL encryption, two-factor authentication, and secure fund handling through trusted payment providers. Your personal data is managed under strict security policies.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'When can I withdraw profits?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Withdrawals can be requested anytime from your account dashboard. Processing typically takes 1–3 business days depending on the method. Fees and timelines are shown upfront.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Do I need trading experience?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No prior experience is required. Guided onboarding, simple tutorials, and AI-assisted tools help you learn at your own pace with Atbalsts 24/7 available.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Kā sākt tirdzniecību ar ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Izveidojiet savu kontu', 'text' => 'Reģistrējieties ar pamatdatiem un iegūstiet drošu piekļuvi platformai.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Apstipriniet e-pastu', 'text' => 'Apstipriniet e-pastu, lai atbloķētu pilnu platformas piekļuvi.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Iemaksājiet kontā', 'text' => 'Iemaksājiet vismaz ' . MIN_DEPOSIT . ' ' . CURRENCY . ' ar bankas pārskaitījumu, karti vai e-maku.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Iestatiet stratēģiju', 'text' => 'Izvēlieties riska līmeni un tirdzniecības preferences — manuāli vai automatizēti.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Sākt tirdzniecību', 'text' => 'Ieejiet tirgū ar pārliecību, izmantojot reāllaika datus un AI ieskatus.'],
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
            'name' => $site . ' — AI tirdzniecības platforma',
            'description' => $site . ' — mobilā tirdzniecības saskarne ar tiešsaistes BTC/USDT kriptovalūtu diagrammu un portfeļa rīkiem',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI tirdzniecības platforma — mobilais diagrammas skats',
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
