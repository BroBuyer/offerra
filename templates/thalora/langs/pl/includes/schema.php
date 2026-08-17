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
        'description' => 'Uzyskaj dostęp do kryptowalut, forex i globalnych aktywów z jednej platformy. ' . $site . ' łączy analitykę na żywo, wspomaganą automatyzację i eksperckie wsparcie.',
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
        'description' => $site . ' — platforma tradingowa z AI, analityką na żywo, wspomaganą automatyzacją i dostępem do wielu rynków.',
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
                'name' => 'Jakie kroki są potrzebne, by zacząć handlować?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Zarejestruj się kluczowymi danymi, potwierdź e-mail i wpłać na konto minimum ' . money_min() . '. Odblokujesz wykresy na żywo, narzędzia tradingowe, analizę rynku i dedykowane wsparcie.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Czy ' . $site . ' jest niezawodna w obsłudze moich pieniędzy i danych?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sesje są szyfrowane SSL, dostępne jest uwierzytelnianie dwuskładnikowe, a transakcje finansowe idą przez zaufanych partnerów. Praktyki prywatności są opisane na stronie.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Jak szybko mogę wypłacić środki?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Wypłaty można zgłaszać w dowolnym momencie z portalu konta. Przetwarzanie zwykle trwa 1–3 dni robocze w zależności od metody. Opłaty i terminy widać przed potwierdzeniem.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Czy potrzebne jest doświadczenie w tradingu, by zacząć?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Wcześniejsze doświadczenie nie jest potrzebne. Onboarding, tutoriale i narzędzia wzmocnione AI pomagają uczyć się we własnym tempie.',
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
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Zweryfikuj e-mail', 'text' => 'Potwierdź e-mail, by odblokować pełny dostęp.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Wpłać na konto', 'text' => 'Wpłać minimum ' . money_min() . ' przelewem, kartą lub e-portfelem.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Ustaw strategię', 'text' => 'Wybierz poziom ryzyka i preferencje — ręcznie lub automatycznie.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Zacznij handlować', 'text' => 'Wejdź na rynek z pewnością, z danymi w czasie rzeczywistym i wnioskami AI.'],
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
            'name' => $site . ' — platforma tradingowa z AI',
            'description' => $site . ' — interfejs mobilny z wykresem krypto BTC/USDT na żywo i narzędziami portfela',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Platforma tradingowa z AI — widok wykresu mobilnego',
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
