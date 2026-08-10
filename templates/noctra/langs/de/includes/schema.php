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
        'description' => 'Dunkles Marktterminal für Krypto-, Devisen- und Multi-Asset-Trading mit KI-gestützten Signalen.',
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
        'description' => 'Exchange-ähnliches Trading-Terminal mit Live-Märkten, Portfolio-Tools und KI-gestütztem Ausführungskontext.',
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
                    'text' => 'Erstellen Sie in wenigen Minuten ein Konto, schließen Sie eine kurze Verifizierung ab und laden Sie Ihr Konto mit einer Mindesteinzahlung von ' . MIN_DEPOSIT . ' ' . CURRENCY . ' auf. Sie schalten die volle Plattform inklusive Live-Charts und Trading-Tools frei.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Sind mein Geld und meine Daten sicher?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Wir schützen Konten mit SSL-Verschlüsselung, Zwei-Faktor-Authentifizierung und sicherer Fondsverwaltung über vertrauenswürdige Zahlungsanbieter. Ihre personenbezogenen Daten werden nach strengen Sicherheitsrichtlinien verwaltet.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Wann kann ich Gewinne auszahlen?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Auszahlungen können jederzeit im Kontodashboard beantragt werden. Die Bearbeitung dauert in der Regel 1–3 Werktage je nach Methode. Gebühren und Fristen werden im Voraus angezeigt.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Brauche ich Trading-Erfahrung?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Keine Vorkenntnisse erforderlich. Geführte Einführung, einfache Tutorials und KI-gestützte Tools helfen Ihnen, in Ihrem Tempo zu lernen — mit Support rund um die Uhr.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'So starten Sie mit dem Trading bei ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Konto erstellen', 'text' => 'Melden Sie sich mit Ihren Basisdaten an und erhalten Sie sicheren Zugang zur Plattform.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'E-Mail bestätigen', 'text' => 'Bestätigen Sie Ihre E-Mail, um den vollen Plattformzugang freizuschalten.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Konto aufladen', 'text' => 'Zahlen Sie mindestens ' . MIN_DEPOSIT . ' ' . CURRENCY . ' per Banküberweisung, Karte oder E-Wallet ein.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Strategie festlegen', 'text' => 'Wählen Sie Risikostufe und Trading-Präferenzen — manuell oder automatisiert.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Mit dem Trading beginnen', 'text' => 'Gehen Sie mit Echtzeitdaten und KI-Analysen selbstbewusst an den Markt.'],
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
            'name' => $site . ' KI-Trading-Plattform',
            'description' => 'Mobile Trading-Oberfläche von ' . $site . ' mit Live-BTC/USDT-Krypto-Chart und Portfolio-Tools',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | KI-Trading-Plattform — mobile Chart-Ansicht',
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
