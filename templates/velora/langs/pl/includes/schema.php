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
        'description' => 'Ciemny terminal rynkowy do handlu krypto, forex i wieloma aktywami z sygnałami wspieranymi AI.',
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
        'description' => 'Terminal tradingowy w stylu giełdy z rynkami na żywo, narzędziami portfela i kontekstem egzekucji wspieranym AI.',
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
                    'text' => 'Utwórz konto w kilka minut, przejdź krótką weryfikację i doładuj konto minimalną wpłatą ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Odblokujesz pełną platformę, w tym wykresy na żywo i narzędzia tradingowe.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Czy moje pieniądze i dane są bezpieczne?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Chronimy konta szyfrowaniem SSL, uwierzytelnianiem dwuskładnikowym i bezpieczną obsługą środków przez zaufanych operatorów płatności. Dane osobowe są zarządzane według ścisłych polityk bezpieczeństwa.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kiedy mogę wypłacić zyski?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Wypłaty można zgłaszać w każdej chwili z panelu konta. Przetwarzanie zwykle trwa 1–3 dni robocze w zależności od metody. Opłaty i terminy są widoczne z góry.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Czy potrzebuję doświadczenia w tradingu?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Wcześniejsze doświadczenie nie jest wymagane. Prowadzony onboarding, proste tutoriale i narzędzia wspierane AI pomagają uczyć się we własnym tempie, ze wsparciem 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Jak zacząć handlować z ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Utwórz konto', 'text' => 'Zarejestruj się podstawowymi danymi i uzyskaj bezpieczny dostęp do platformy.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Potwierdź e-mail', 'text' => 'Potwierdź adres e-mail, aby odblokować pełny dostęp do platformy.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Doładuj konto', 'text' => 'Wpłać minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . ' przelewem, kartą lub e-portfelem.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Ustal strategię', 'text' => 'Wybierz poziom ryzyka i preferencje tradingowe — ręcznie lub automatycznie.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Zacznij handlować', 'text' => 'Wejdź na rynek z danymi w czasie rzeczywistym i analizami AI.'],
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
            'name' => $site . ' Platforma tradingowa AI',
            'description' => 'Mobilny interfejs tradingowy ' . $site . ' z wykresem krypto BTC/USDT na żywo i narzędziami portfela',
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
