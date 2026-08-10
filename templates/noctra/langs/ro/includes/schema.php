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
        'description' => 'Terminal de piață dark pentru trading crypto, forex și multi-asset cu semnale asistate de AI.',
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
        'description' => 'Terminal de trading tip exchange cu piețe live, instrumente de portofoliu și context de execuție asistat de AI.',
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
                    'text' => 'Creează un cont în câteva minute, finalizează o scurtă verificare și alimentează contul cu un depozit minim de ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Vei debloca platforma completă, inclusiv grafice live și instrumente de trading.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Banii și datele mele sunt în siguranță?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Protejăm conturile cu criptare SSL, autentificare în doi pași și gestionare sigură a fondurilor prin procesatori de plăți de încredere. Datele personale sunt gestionate conform unor politici stricte de securitate.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Când pot retrage profiturile?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Retragerile pot fi solicitate oricând din panoul contului. Procesarea durează de obicei 1–3 zile lucrătoare, în funcție de metodă. Taxele și termenele sunt afișate dinainte.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Am nevoie de experiență în trading?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Nu este necesară experiență anterioară. Onboarding ghidat, tutoriale simple și instrumente asistate de AI te ajută să înveți în ritmul tău, cu suport 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Cum să începi tradingul cu ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Creează-ți contul', 'text' => 'Înregistrează-te cu datele de bază și obține acces securizat la platformă.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verifică e-mailul', 'text' => 'Confirmă e-mailul pentru a debloca accesul complet la platformă.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Alimentează contul', 'text' => 'Depuneți minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . ' prin transfer bancar, card sau e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Setează strategia', 'text' => 'Alege nivelul de risc și preferințele de trading — manual sau automat.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Începe tradingul', 'text' => 'Intră pe piață cu încredere folosind date în timp real și insight-uri AI.'],
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
            'name' => $site . ' platformă de trading AI',
            'description' => $site . ' interfață de trading mobil cu grafic crypto BTC/USDT live și instrumente de portofoliu',
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
