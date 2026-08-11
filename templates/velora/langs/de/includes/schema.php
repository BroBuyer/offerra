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
        'description' => 'Eine klare KI-gestützte Investmentplattform für Krypto- und Multi-Asset-Märkte.',
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
        'description' => 'Einfache KI-Investmentplattform mit Live-Märkten, geführten Insights und ruhigem Trading-Workspace.',
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
                    'text' => 'Erstellen Sie in Minuten ein Konto, schließen Sie einen kurzen Verifizierungsschritt ab und finanzieren Sie Ihr Konto mit einer Mindesteinzahlung von ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Sie schalten die volle Plattform frei — inklusive Live-Charts und Trading-Tools.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Sind mein Geld und meine Daten sicher?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Wir schützen Konten mit SSL-Verschlüsselung, Zwei-Faktor-Authentifizierung und sicherer Fondsabwicklung über vertrauenswürdige Zahlungsanbieter. Ihre personenbezogenen Daten werden unter strengen Sicherheitsrichtlinien verwaltet.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Wann kann ich Gewinne auszahlen?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Auszahlungen können jederzeit über Ihr Konto-Dashboard beantragt werden. Die Bearbeitung dauert typischerweise 1–3 Werktage je nach Methode. Gebühren und Fristen werden im Voraus angezeigt.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Brauche ich Trading-Erfahrung?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Keine Vorkenntnisse nötig. Geführtes Onboarding, einfache Tutorials und KI-gestützte Tools helfen Ihnen, in Ihrem Tempo zu lernen — mit 24/7-Support.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'So starten Sie den Handel mit ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Konto erstellen', 'text' => 'Melden Sie sich mit Ihren Basisdaten an und erhalten Sie sicheren Zugang zur Plattform.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'E-Mail bestätigen', 'text' => 'Bestätigen Sie Ihre E-Mail, um den vollen Plattformzugang freizuschalten.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Konto finanzieren', 'text' => 'Zahlen Sie mindestens ' . MIN_DEPOSIT . ' ' . CURRENCY . ' per Banküberweisung, Karte oder E-Wallet ein.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Strategie festlegen', 'text' => 'Wählen Sie Risikostufe und Handelspräferenzen — manuell oder automatisiert.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Jetzt handeln', 'text' => 'Treten Sie dem Markt mit Vertrauen entgegen — mit Echtzeitdaten und KI-Insights.'],
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
            'name' => $site . ' KI-Handelsplattform',
            'description' => $site . ' mobiles Trading-Oberfläche mit Live-BTC/USDT-Kryptochart und Portfolio-Tools',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | KI-Handelsplattform — mobile Chartansicht',
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
