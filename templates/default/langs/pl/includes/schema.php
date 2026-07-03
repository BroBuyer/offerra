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
        'description' => 'Platforma tradingowa wspierana przez AI dla kryptowalut, forexu i rynków globalnych.',
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
        'description' => 'Inteligentna platforma tradingowa z analizą rynku w czasie rzeczywistym i sygnałami wspieranymi przez AI.',
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
                'name' => 'Jak mogę zacząć?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Utwórz konto w kilka minut, przejdź krótką weryfikację i wpłać minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Odblokujesz pełną platformę, w tym wykresy na żywo i narzędzia tradingowe.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Czy moje pieniądze i dane są bezpieczne?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Chronimy konta za pomocą szyfrowania SSL, uwierzytelniania dwuskładnikowego i bezpiecznego przetwarzania środków przez zaufanych dostawców płatności. Dane osobowe zarządzamy zgodnie z rygorystycznymi zasadami bezpieczeństwa.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kiedy mogę wypłacić zyski?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'O wypłatę możesz poprosić w dowolnym momencie z panelu. Przetwarzanie zwykle trwa od 1 do 3 dni roboczych w zależności od metody. Opłaty i terminy widzisz z góry.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Czy potrzebuję doświadczenia w handlu?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Wcześniejsze doświadczenie nie jest wymagane. Wspierany onboarding, proste przewodniki i narzędzia wspomagane przez AI pomogą Ci uczyć się we własnym tempie, ze wsparciem dostępnym 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Jak zacząć handlować z ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Utwórz konto', 'text' => 'Zarejestruj się podając podstawowe dane i uzyskaj bezpieczny dostęp do platformy.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Zweryfikuj e-mail', 'text' => 'Potwierdź e-mail i odblokuj pełny dostęp do platformy.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Wpłać środki', 'text' => 'Wpłać minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . ' przelewem bankowym, kartą lub portfelem elektronicznym.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Ustaw strategię', 'text' => 'Wybierz poziom ryzyka i preferencje handlu — manualnie lub automatycznie.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Rozpocznij handel', 'text' => 'Wejdź na rynek z pewnością dzięki danym w czasie rzeczywistym i analizom AI.'],
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
            'name' => $site . ' platforma tradingowa AI',
            'description' => $site . ' mobilny interfejs tradingowy z wykresem kryptowaluty BTC/USDT na żywo i narzędziami portfela',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Platforma tradingowa AI — widok mobilny wykresu',
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
