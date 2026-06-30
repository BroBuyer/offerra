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
        'description' => 'KI-gestützte Trading-Plattform für Krypto, Forex und globale Märkte.',
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
        'description' => 'Intelligente Trading-Plattform mit Echtzeit-Marktanalysen und KI-gestützten Signalen.',
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
                'name' => 'Wie kann ich starten?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Eröffnen Sie in wenigen Minuten ein Konto, schliessen Sie einen kurzen Verifizierungsschritt ab und finanzieren Sie Ihr Konto mit einer Mindesteinzahlung von ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Sie erhalten vollen Zugang zur Plattform, einschliesslich Echtzeit-Charts und Trading-Tools.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Sind mein Geld und meine Daten sicher?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Wir schützen Konten mit SSL-Verschlüsselung, Zwei-Faktor-Authentifizierung und sicherer Mittelverwaltung über vertrauenswürdige Zahlungsanbieter. Ihre persönlichen Daten werden gemäss strengen Sicherheitsrichtlinien behandelt.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Wann kann ich Gewinne abheben?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Auszahlungen können jederzeit über Ihr persönliches Konto angefordert werden. Die Bearbeitung dauert in der Regel 1–3 Werktage, je nach Zahlungsmethode. Gebühren und Zeitrahmen werden im Voraus angezeigt.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Benötige ich Trading-Erfahrung?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Vorkenntnisse sind nicht erforderlich. Geführtes Onboarding, einfache Tutorials und KI-gestützte Tools helfen Ihnen, in Ihrem eigenen Tempo zu lernen — mit Support rund um die Uhr.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'So starten Sie mit dem Trading bei ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Konto eröffnen', 'text' => 'Registrieren Sie sich mit Ihren Basisdaten und erhalten Sie sicheren Zugang zur Plattform.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'E-Mail bestätigen', 'text' => 'Bestätigen Sie Ihre E-Mail-Adresse, um den vollen Plattformzugang freizuschalten.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Konto finanzieren', 'text' => 'Zahlen Sie mindestens ' . MIN_DEPOSIT . ' ' . CURRENCY . ' per Überweisung, Karte oder E-Wallet ein.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Strategie festlegen', 'text' => 'Wählen Sie Ihr Risikoniveau und Ihre Trading-Präferenzen — manuell oder automatisiert.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Mit dem Trading beginnen', 'text' => 'Steigen Sie mit Vertrauen in den Markt ein — mit Echtzeitdaten und KI-Einblicken.'],
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
            'name' => $site . ' | Trading-Plattform',
            'description' => $site . ' mobile Trading-Oberfläche mit Echtzeit-Krypto-Chart BTC/USDT und Portfolio-Tools',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Trading-Plattform — mobile Chart-Ansicht',
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
