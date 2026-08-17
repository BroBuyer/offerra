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
        'description' => 'Accesați criptomonede, forex și active globale dintr-o singură platformă. ' . $site . ' combină analitica live, automatizarea asistată și suportul de specialitate.',
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
        'description' => $site . ' — platformă de tranzacționare bazată pe AI, cu analitică live, automatizare asistată și acces la mai multe piețe.',
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
                'name' => 'Care sunt pașii pentru a începe tranzacționarea?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Înregistrați-vă cu datele esențiale, confirmați e-mailul și alimentați contul cu cel puțin ' . money_min() . '. Deblocați grafice live, instrumente de tranzacționare, analiză de piață și suport dedicat.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Este ' . $site . ' de încredere pentru gestionarea banilor și a datelor mele?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sesiunile sunt criptate SSL, autentificarea în doi pași este disponibilă, iar tranzacțiile financiare trec prin parteneri de încredere. Practicile de confidențialitate sunt descrise pe site.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Cât de curând pot retrage fondurile?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Retragerile se pot solicita oricând din portalul contului. Procesarea durează de obicei 1–3 zile lucrătoare, în funcție de metodă. Taxele și termenele sunt vizibile înainte de confirmare.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Este necesară experiență de tranzacționare înainte de a începe?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Nu e nevoie de experiență anterioară. Onboarding, ghiduri și instrumente îmbunătățite cu AI vă ajută să învățați în ritmul dvs.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Cum începeți tranzacționarea cu ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Creați-vă contul', 'text' => 'Înregistrați-vă cu datele de bază și obțineți acces sigur la platformă.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verificați e-mailul', 'text' => 'Confirmați e-mailul pentru acces deplin la platformă.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Alimentați contul', 'text' => 'Depuneți cel puțin ' . money_min() . ' prin transfer bancar, card sau e-portofel.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Setați strategia', 'text' => 'Alegeți nivelul de risc și preferințele — manual sau automat.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Începeți tranzacționarea', 'text' => 'Intrați pe piață cu încredere, cu date în timp real și perspective AI.'],
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
            'name' => $site . ' — platformă de tranzacționare cu AI',
            'description' => $site . ' — interfață mobilă cu grafic crypto BTC/USDT live și instrumente de portofoliu',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Platformă de tranzacționare cu AI — vizualizare grafic pe mobil',
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
