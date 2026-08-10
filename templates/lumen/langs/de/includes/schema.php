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
        'description' => 'Eine klare, KI-gestützte Investitionsplattform für Krypto- und Multi-Asset-Märkte.',
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
        'description' => 'Einfache KI-Investitionsplattform mit Live-Märkten, geführten Einblicken und ruhigem Workspace.',
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
                'name' => 'Wie starte ich?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Erstellen Sie in Minuten ein Konto, schließen Sie eine kurze Verifizierung ab und zahlen Sie mindestens ' . MIN_DEPOSIT . ' ' . CURRENCY . ' ein. Danach freischalten sich Charts und Tools.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Sind Geld und Daten sicher?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Wir schützen Konten mit SSL, optionaler 2FA und sicherer Zahlungsabwicklung. Personenbezogene Daten unterliegen strengen Richtlinien.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Wann kann ich Gewinne abheben?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Auszahlungen jederzeit im Dashboard. Bearbeitung meist 1–3 Werktage je nach Methode. Gebühren und Fristen sind vorher sichtbar.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Brauche ich Handelserfahrung?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Keine Vorkenntnisse nötig. Geführtes Onboarding und KI-Tools helfen in Ihrem Tempo — Support rund um die Uhr.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'So starten Sie den Handel mit ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Konto eröffnen', 'text' => 'Melden Sie sich mit Grunddaten an und erhalten Sie sicheren Zugang.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'E-Mail bestätigen', 'text' => 'Bestätigen Sie Ihre E-Mail für den vollen Zugang.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Konto finanzieren', 'text' => 'Zahlen Sie mindestens ' . MIN_DEPOSIT . ' ' . CURRENCY . ' per Überweisung, Karte oder E-Wallet ein.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Strategie festlegen', 'text' => 'Wählen Sie Risiko und Präferenzen — manuell oder unterstützt.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Handel starten', 'text' => 'Nutzen Sie Echtzeitdaten und KI-Einblicke mit Kontrolle über jede Order.'],
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
            'description' => $site . ' mobile Handelsoberfläche mit Live-BTC/USDT-Chart und Portfolio-Tools',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | KI-Trading-Plattform — mobile Chartansicht',
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
