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
        'description' => 'Greifen Sie über eine Plattform auf Kryptowährungen, Forex und globale Vermögenswerte zu. ' . $site . ' verbindet Live-Analytik, unterstützte Automatisierung und Experten-Support.',
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
        'description' => $site . ' — KI-gestützte Handelsplattform mit Live-Analytik, unterstützter Automatisierung und Zugang zu mehreren Märkten.',
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
                'name' => 'Welche Schritte braucht es, um zu handeln?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Registrieren Sie sich mit den wichtigsten Angaben, bestätigen Sie Ihre E-Mail und zahlen Sie mindestens ' . money_min() . ' ein. Dann stehen Live-Charts, Trading-Tools, Marktanalyse und Support bereit.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Ist ' . $site . ' zuverlässig im Umgang mit meinem Geld und meinen Daten?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sitzungen sind SSL-verschlüsselt, Zwei-Faktor-Authentifizierung ist verfügbar, Finanztransaktionen laufen über vertrauenswürdige Partner. Datenschutzpraktiken sind auf der Website beschrieben.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Wie schnell kann ich auszahlen?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Auszahlungen können Sie jederzeit im Konto-Portal beantragen. Die Bearbeitung dauert in der Regel 1–3 Werktage je nach Methode. Gebühren und Zeiten sehen Sie vor der Bestätigung.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Brauche ich Trading-Erfahrung, um zu starten?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Keine Vorerfahrung nötig. Onboarding, Tutorials und KI-gestützte Tools helfen Ihnen, in Ihrem Tempo zu lernen.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'So starten Sie das Trading mit ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Konto erstellen', 'text' => 'Registrieren Sie sich mit wenigen Angaben und erhalten Sie sicheren Zugang zur Plattform.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'E-Mail bestätigen', 'text' => 'Bestätigen Sie Ihre E-Mail für den vollen Plattformzugang.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Konto aufladen', 'text' => 'Zahlen Sie mindestens ' . money_min() . ' per Überweisung, Karte oder E-Wallet ein.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Strategie festlegen', 'text' => 'Wählen Sie Risikoniveau und Präferenzen — manuell oder automatisiert.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Trading starten', 'text' => 'Gehen Sie mit Zuversicht an den Markt — mit Echtzeitdaten und KI-Einblicken.'],
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
            'name' => $site . ' — KI-Handelsplattform',
            'description' => $site . ' — mobile Oberfläche mit Live-Krypto-Chart BTC/USDT und Portfolio-Tools',
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
