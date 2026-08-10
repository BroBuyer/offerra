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
        'description' => 'O platformă de investiții clară asistată de AI pentru piețe crypto și multi-asset.',
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
        'description' => 'Platformă de investiții AI simplă cu piețe live, insight-uri ghidate și spațiu de trading calm.',
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
                'name' => 'Cum încep?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Creați un cont în câteva minute, finalizați o verificare scurtă și alimentați contul cu un depozit minim de ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Deblocați platforma completă, inclusiv grafice live și instrumente.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Banii și datele mele sunt în siguranță?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Protejăm conturile cu criptare SSL, autentificare în doi factori și gestionare sigură a fondurilor prin furnizori de încredere. Datele personale sunt gestionate sub politici stricte de securitate.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Când pot retrage profiturile?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Retragerile pot fi solicitate oricând din panoul contului. Procesarea durează de obicei 1–3 zile lucrătoare, în funcție de metodă. Comisioanele și termenele sunt afișate din start.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Am nevoie de experiență în trading?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Nu este necesară experiență anterioară. Onboarding ghidat, tutoriale simple și instrumente asistate de AI vă ajută în ritmul dvs., cu suport 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Cum începeți să tranzacționați cu ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Deschideți contul', 'text' => 'Înregistrați-vă cu datele de bază și obțineți acces securizat la platformă.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verificați e-mailul', 'text' => 'Confirmați e-mailul pentru a debloca accesul complet.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Alimentați contul', 'text' => 'Depuneți minim ' . MIN_DEPOSIT . ' ' . CURRENCY . ' prin transfer bancar, card sau e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Setați strategia', 'text' => 'Alegeți nivelul de risc și preferințele — manual sau automatizat.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Începeți să tranzacționați', 'text' => 'Intrați pe piață cu încredere folosind date în timp real și insight-uri AI.'],
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
            'description' => $site . ' interfață de trading mobilă cu grafic crypto BTC/USDT live și instrumente de portofoliu',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Platformă de trading AI — vizualizare grafic mobil',
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
