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
        'description' => 'Piattaforma di trading assistita dall\'AI per criptovalute, forex e mercati globali.',
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
        'description' => 'Piattaforma di trading intelligente con analisi di mercato in tempo reale e segnali assistiti dall\'AI.',
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
                'name' => 'Come posso iniziare?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Crea il tuo account in pochi minuti, completa una breve verifica e deposita almeno ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Sbloccherai la piattaforma completa con grafici live e strumenti di trading.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'I miei fondi e i miei dati sono al sicuro?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Proteggiamo gli account con crittografia SSL, autenticazione a due fattori e gestione sicura dei fondi tramite provider di pagamento affidabili. I dati personali sono gestiti secondo rigidi standard di sicurezza.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Quando posso prelevare i profitti?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Puoi richiedere un prelievo in qualsiasi momento dalla dashboard. L\'elaborazione richiede di solito da 1 a 3 giorni lavorativi, in base al metodo scelto. Costi e tempi sono visibili in anticipo.',
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
        'name' => 'Come iniziare a fare trading con ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Crea il tuo account', 'text' => 'Registrati con i dati di base e ottieni accesso sicuro alla piattaforma.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verifica la tua email', 'text' => 'Conferma l\'email e sblocca l\'accesso completo alla piattaforma.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Deposita fondi', 'text' => 'Deposita almeno ' . MIN_DEPOSIT . ' ' . CURRENCY . ' tramite bonifico bancario, carta o e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Imposta la strategia', 'text' => 'Scegli livello di rischio e preferenze operative, manualmente o in modo automatizzato.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Inizia a fare trading', 'text' => 'Entra sul mercato con fiducia grazie ai dati in tempo reale e agli insight AI.'],
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
            'description' => $site . ' interfaccia mobile di trading con grafico live BTC/USDT e strumenti di portafoglio',
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
