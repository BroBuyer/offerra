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
        'description' => 'Accedi a criptovalute, forex e asset globali da un’unica piattaforma. ' . $site . ' combina analisi in tempo reale, automazione assistita e supporto esperto.',
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
        'description' => $site . ' — piattaforma di trading IA con analisi in diretta, automazione assistita e accesso multi-mercato.',
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
                'name' => 'Quali sono i passaggi per iniziare a fare trading?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Registrati con i dati essenziali, conferma l’email e versa sul conto un minimo di ' . money_min() . '. Così sblocchi grafici in diretta, strumenti di trading, analisi di mercato e supporto dedicato.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => $site . ' è affidabile per gestire i miei soldi e le mie informazioni?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Le sessioni sono cifrate in SSL, è disponibile l’autenticazione a due fattori e le transazioni finanziarie passano da partner di fiducia. Le pratiche sulla privacy sono descritte sul sito.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Quanto tempo ci vuole per prelevare i fondi?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'I prelievi si possono richiedere in qualsiasi momento dal portale del conto. L’elaborazione richiede di solito da 1 a 3 giorni lavorativi in base al metodo. Commissioni e tempi sono visibili prima della conferma.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Serve esperienza di trading per iniziare?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Non serve esperienza precedente. Onboarding, tutorial e strumenti potenziati dall’IA ti aiutano a imparare al tuo ritmo.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Come iniziare a fare trading con ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Crea il tuo account', 'text' => 'Registrati con i dati di base e ottieni un accesso sicuro alla piattaforma.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verifica la tua email', 'text' => 'Conferma l’email per sbloccare l’accesso completo.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Deposita sul conto', 'text' => 'Deposita un minimo di ' . money_min() . ' tramite bonifico, carta o e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Definisci la tua strategia', 'text' => 'Scegli il livello di rischio e le preferenze — manuale o automatizzato.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Inizia a fare trading', 'text' => 'Entra sul mercato con fiducia, con dati in tempo reale e insight IA.'],
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
            'name' => $site . ' — piattaforma di trading IA',
            'description' => $site . ' — interfaccia mobile con grafico crypto BTC/USDT in diretta e strumenti di portafoglio',
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
