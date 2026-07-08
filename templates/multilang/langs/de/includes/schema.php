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
        'description' => 'KI-gestützte Handelsplattform für Kryptowährungen, Forex und globale Märkte.',
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
        'description' => 'Intelligente Handelsplattform mit Marktanalyse in Echtzeit und KI-gestützten Signalen.',
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
                'name' => 'Wie kann ich starten?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Erstellen Sie in wenigen Minuten ein Konto, schließen Sie eine kurze Verifizierung ab und zahlen Sie mindestens ' . MIN_DEPOSIT . ' ' . CURRENCY . ' ein. Damit erhalten Sie vollen Zugriff auf die Plattform inklusive Live-Charts und Handelstools.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Sind meine Gelder und Daten sicher?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Wir schützen Konten mit SSL-Verschlüsselung, Zwei-Faktor-Authentifizierung und sicherer Zahlungsabwicklung über vertrauenswürdige Anbieter. Persönliche Daten verwalten wir nach strengen Sicherheitsstandards.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Wann kann ich Gewinne auszahlen lassen?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sie können Auszahlungen jederzeit über Ihr Dashboard anfordern. Die Bearbeitung dauert je nach Methode in der Regel 1 bis 3 Werktage. Gebühren und Zeitrahmen werden vorab transparent angezeigt.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Brauche ich Handelserfahrung?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Vorkenntnisse sind nicht erforderlich. Geführtes Onboarding, leicht verständliche Anleitungen und KI-gestützte Tools helfen Ihnen, in Ihrem eigenen Tempo zu lernen - mit 24/7 Support.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'So starten Sie den Handel mit ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Konto erstellen', 'text' => 'Registrieren Sie sich mit Ihren Basisdaten und erhalten Sie sicheren Zugang zur Plattform.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'E-Mail bestätigen', 'text' => 'Bestätigen Sie Ihre E-Mail-Adresse und schalten Sie den vollen Plattformzugang frei.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Kapital einzahlen', 'text' => 'Zahlen Sie mindestens ' . MIN_DEPOSIT . ' ' . CURRENCY . ' per Banküberweisung, Karte oder E-Wallet ein.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Strategie festlegen', 'text' => 'Wählen Sie Risikoniveau und Handelspräferenzen - manuell oder automatisiert.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Handel starten', 'text' => 'Starten Sie mit Vertrauen dank Echtzeitdaten und KI-Insights in den Markt.'],
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
            'description' => $site . ' mobile Handelsoberfläche mit Live-Chart für BTC/USDT und Portfolio-Tools',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | KI-Handelsplattform - mobile Chartansicht',
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
