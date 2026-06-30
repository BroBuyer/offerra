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
        'logo' => $url . '/assets/img/logo.svg',
        'description' => 'Platformă de tranzacționare cu AI pentru cripto, forex și piețe globale.',
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
        'description' => 'Platformă de tranzacționare inteligentă cu analiză de piață în timp real și semnale asistate de AI.',
        'image' => $platform_image,
        'screenshot' => $platform_image,
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
                'name' => 'Cum pot începe?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Creează un cont în câteva minute, finalizează un scurt pas de verificare și alimentează contul cu o depunere minimă de ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Vei debloca accesul complet la platformă, inclusiv grafice în timp real și instrumente de tranzacționare.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Banii și datele mele sunt în siguranță?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Protejăm conturile cu criptare SSL, autentificare în doi pași și gestionare sigură a fondurilor prin furnizori de plăți de încredere. Datele tale personale sunt gestionate conform unor politici stricte de securitate.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Când pot retrage profiturile?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Retragerile pot fi solicitate oricând din zona ta personală. Procesarea durează de obicei 1–3 zile lucrătoare, în funcție de metodă. Comisioanele și termenele sunt afișate din timp.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Este necesară experiență de tranzacționare?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Nu este necesară experiență anterioară. Onboarding ghidat, tutoriale simple și instrumente asistate de AI te ajută să înveți în ritmul tău, cu suport disponibil 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Cum să începi să tranzacționezi cu ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Creează-ți contul', 'text' => 'Înregistrează-te cu datele de bază și obține acces securizat la platformă.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verifică-ți emailul', 'text' => 'Confirmă adresa de email pentru a debloca accesul complet la platformă.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Alimentează-ți contul', 'text' => 'Depune minimum ' . MIN_DEPOSIT . ' ' . CURRENCY . ' prin transfer bancar, card sau e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Configurează strategia', 'text' => 'Alege nivelul de risc și preferințele de tranzacționare — manual sau automat.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Începe să tranzacționezi', 'text' => 'Intră pe piață cu încredere folosind date în timp real și insight-uri AI.'],
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
            'name' => $site . ' | Platformă de tranzacționare',
            'description' => $site . ' interfață de tranzacționare mobilă cu grafic cripto BTC/USDT în timp real și instrumente de portofoliu',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Platformă de tranzacționare — vizualizare grafic pe mobil',
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
