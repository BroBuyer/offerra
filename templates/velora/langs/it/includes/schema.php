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
        'description' => 'Una piattaforma chiara di investimento assistito dall\'IA per i mercati crypto e multi-asset.',
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
        'description' => 'Piattaforma semplice di investimento con IA, con mercati in tempo reale, insight guidati e uno spazio di trading sereno.',
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
                    'text' => 'Crea un account in pochi minuti, completa un breve passaggio di verifica e finanzia il tuo account con un deposito minimo di ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Sbloccherai la piattaforma completa, inclusi grafici in tempo reale e strumenti di trading.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Il mio denaro e i miei dati sono al sicuro?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Proteggiamo gli account con crittografia SSL, autenticazione a due fattori e gestione sicura dei fondi tramite fornitori di pagamento affidabili. I tuoi dati personali sono gestiti secondo rigorose politiche di sicurezza.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Quando posso prelevare i profitti?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'I prelievi possono essere richiesti in qualsiasi momento dalla dashboard del tuo account. L\'elaborazione richiede in genere 1–3 giorni lavorativi a seconda del metodo. Commissioni e tempi sono mostrati in anticipo.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Ho bisogno di esperienza nel trading?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Non è richiesta alcuna esperienza precedente. L\'onboarding guidato, tutorial semplici e strumenti assistiti dall\'IA ti aiutano a imparare al tuo ritmo, con supporto 24/7 disponibile.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Come iniziare a fare trading con ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Crea il tuo account', 'text' => 'Registrati con i tuoi dati di base e ottieni accesso sicuro alla piattaforma.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verifica la tua email', 'text' => 'Conferma la tua email per sbloccare l\'accesso completo alla piattaforma.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Finanzia il tuo account', 'text' => 'Deposita un minimo di ' . MIN_DEPOSIT . ' ' . CURRENCY . ' tramite bonifico bancario, carta o portafoglio elettronico.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Definisci la tua strategia', 'text' => 'Scegli il livello di rischio e le preferenze di trading — manuale o automatizzato.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Inizia a fare trading', 'text' => 'Entra nel mercato con fiducia usando dati in tempo reale e insight dell\'IA.'],
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
            'name' => $site . ' Piattaforma di Trading con IA',
            'description' => $site . ' interfaccia di trading mobile con grafico crypto BTC/USDT in tempo reale e strumenti di portafoglio',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Piattaforma di Trading con IA — vista grafico mobile',
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
