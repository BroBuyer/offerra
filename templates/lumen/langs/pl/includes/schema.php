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
        'description' => 'Przejrzysta platforma inwestycyjna wspomagana AI dla rynków crypto i multi-asset.',
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
        'description' => 'Prosta platforma inwestycyjna AI z rynkami na żywo, prowadzonymi wnioskami i spokojnym środowiskiem handlu.',
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
                'name' => 'Jak zacząć?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Utwórz konto w kilka minut, przejdź krótką weryfikację i zasil konto minimalną wpłatą ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Odblokujesz pełną platformę, w tym wykresy na żywo i narzędzia.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Czy moje środki i dane są bezpieczne?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Chronimy konta szyfrowaniem SSL, uwierzytelnianiem dwuskładnikowym i bezpieczną obsługą środków przez zaufanych dostawców płatności. Dane osobowe podlegają ścisłym politykom bezpieczeństwa.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kiedy mogę wypłacić zyski?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Wypłaty można zlecić w dowolnym momencie z panelu konta. Przetwarzanie zwykle zajmuje 1–3 dni robocze w zależności od metody. Opłaty i terminy są widoczne z góry.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Czy potrzebuję doświadczenia w tradingu?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Nie jest wymagane wcześniejsze doświadczenie. Prowadzone wdrożenie, proste poradniki i narzędzia AI pomagają we własnym tempie — wsparcie 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Jak zacząć handlować z ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Otwórz konto', 'text' => 'Zarejestruj się podstawowymi danymi i uzyskaj bezpieczny dostęp do platformy.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Potwierdź e-mail', 'text' => 'Potwierdź adres e-mail, aby odblokować pełny dostęp.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Zasil konto', 'text' => 'Wpłać minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . ' przelewem, kartą lub e-portfelem.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Ustaw strategię', 'text' => 'Wybierz poziom ryzyka i preferencje — ręcznie lub automatycznie.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Zacznij handlować', 'text' => 'Wejdź na rynek z pewnością dzięki danym w czasie rzeczywistym i wnioskom AI.'],
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
            'description' => $site . ' mobilny interfejs handlu z wykresem crypto BTC/USDT na żywo i narzędziami portfela',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Platforma tradingowa AI — widok wykresu mobilnego',
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
