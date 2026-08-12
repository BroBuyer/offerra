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
        'description' => 'O platformă clară de investiții asistată de AI pentru cripto și piețe multi-activ.',
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
        'description' => 'Platformă simplă de investiții AI cu piețe live, insight-uri ghidate și un spațiu de tranzacționare calm.',
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
                    'text' => 'Creați un cont în câteva minute, finalizați un pas scurt de verificare și finanțați contul cu un depozit minim de ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Veți debloca platforma completă, inclusiv grafice live și instrumente de tranzacționare.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Sunt banii și datele mele în siguranță?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Protejăm conturile cu criptare SSL, autentificare în doi pași și gestionare securizată a fondurilor prin furnizori de plăți de încredere. Datele dvs. personale sunt gestionate conform unor politici stricte de securitate.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Când pot retrage profiturile?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Retragerile pot fi solicitate oricând din panoul contului. Procesarea durează de obicei 1–3 zile lucrătoare, în funcție de metodă. Taxele și termenele sunt afișate din start.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Am nevoie de experiență în tranzacționare?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Nu este necesară experiență anterioară. Onboarding ghidat, tutoriale simple și instrumente asistate de AI vă ajută să învățați în ritmul dvs., cu suport 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Cum să începeți tranzacționarea cu ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Creează-ți contul', 'text' => 'Înregistrați-vă cu datele de bază și obțineți acces securizat la platformă.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verificați e-mailul', 'text' => 'Confirmați e-mailul pentru a debloca accesul complet la platformă.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Finanțați contul', 'text' => 'Depuneți minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . ' prin transfer bancar, card sau portofel electronic.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Setați strategia', 'text' => 'Alegeți nivelul de risc și preferințele de tranzacționare — manual sau automat.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Începe tranzacționarea', 'text' => 'Intrați pe piață cu încredere folosind date în timp real și insight-uri AI.'],
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
            'name' => $site . ' Platformă de tranzacționare AI',
            'description' => $site . ' interfață mobilă de tranzacționare cu grafic cripto BTC/USDT live și instrumente de portofoliu',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Platformă de tranzacționare AI — vizualizare grafic mobil',
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
