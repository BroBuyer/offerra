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
        'description' => 'Una piattaforma di investimento chiara assistita dall’IA per mercati crypto e multi-asset.',
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
        'description' => 'Piattaforma di investimento IA semplice con mercati live, insight guidati e workspace di trading calmo.',
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
                'name' => 'Come inizio?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Crea un account in pochi minuti, completa una breve verifica e finanzia l’account con un deposito minimo di ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Sbloccherai l’intera piattaforma, grafici e strumenti inclusi.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Denaro e dati sono al sicuro?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Proteggiamo gli account con crittografia SSL, autenticazione a due fattori e gestione sicura dei fondi tramite provider affidabili. I dati personali sono gestiti con politiche di sicurezza rigorose.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Quando posso prelevare i profitti?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'I prelievi si possono richiedere in qualsiasi momento dal dashboard. L’elaborazione richiede di solito 1–3 giorni lavorativi a seconda del metodo. Commissioni e tempi sono mostrati in anticipo.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Serve esperienza di trading?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Non serve esperienza pregressa. Onboarding guidato, tutorial semplici e strumenti assistiti dall’IA ti aiutano al tuo ritmo, con supporto 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Come iniziare a operare con ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Apri il tuo account', 'text' => 'Registrati con i dati di base e ottieni accesso sicuro alla piattaforma.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verifica la tua e-mail', 'text' => 'Conferma la tua e-mail per sbloccare l’accesso completo.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Finanzia il tuo account', 'text' => 'Deposita almeno ' . MIN_DEPOSIT . ' ' . CURRENCY . ' tramite bonifico, carta o e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Imposta la strategia', 'text' => 'Scegli livello di rischio e preferenze — manuale o automatizzato.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Inizia a operare', 'text' => 'Entra nel mercato con fiducia usando dati in tempo reale e insight IA.'],
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
            'description' => $site . ' interfaccia di trading mobile con grafico crypto BTC/USDT live e strumenti di portafoglio',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Piattaforma di trading IA — vista grafico mobile',
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
