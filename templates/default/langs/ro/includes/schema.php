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
        'description' => 'Platformă de tranzacționare asistată de AI pentru criptomonede, forex și piețe globale.',
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
        '@type' => 'Întrebări frecventePage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => 'Cum pot începe?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Creează-ți contul în câteva minute, finalizează o scurtă verificare și depune minim ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Vei debloca platforma completă cu grafice live și instrumente de tranzacționare.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Fondurile și datele mele sunt în siguranță?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Protejăm conturile cu criptare SSL, autentificare în doi pași și gestionarea sigură a fondurilor prin furnizori de plată de încredere. Datele personale sunt gestionate conform unor standarde stricte de securitate.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Quando posso prelevare i profitti?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Poți solicita o retragere oricând din tabloul de bord. L\'elaborazione richiede di solito da 1 a 3 giorni lavorativi, in base al metodo scelto. Costi e tempi sono visibili in anticipo.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Ho bisogno di esperienza nel trading?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Non e richiesta esperienza precedente. Onboarding assistito, guide intuitive e strumenti supportati dall\'AI ti aiutano ad apprendere al tuo ritmo, con supporto disponibile 24/7.',
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
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verifică e-mailul', 'text' => 'Conferma l\'email e sblocca l\'accesso completo alla piattaforma.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Depune fonduri', 'text' => 'Deposita almeno ' . MIN_DEPOSIT . ' ' . CURRENCY . ' prin transfer bancar, card sau e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Setează strategia', 'text' => 'Scegli livello di rischio e preferenze operative, manualmente o in modo automatizzato.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Începe să tranzacționezi', 'text' => 'Intră pe piață cu încredere datorită datelor în timp real și insight-urilor AI.'],
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
            'name' => $site . ' piattaforma di trading AI',
            'description' => $site . ' interfață mobilă de tranzacționare cu grafic live BTC/USDT și instrumente de portofoliu',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | piattaforma di trading AI - vista mobile del grafico',
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
