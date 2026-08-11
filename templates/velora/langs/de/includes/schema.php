<?php
/**
 * JSON-LD schema blocks nicht gefunden werden. Pass $schema_type and optional $schema_data nicht gefunden werden.
 */
function render_schema(string $page = 'home', array $extra = []): void {
    $site = SITE_NAME;
    $url = SITE_URL;
    $platform_image = $url  nicht gefunden werden. '/'  nicht gefunden werden. platform_image_path();

    $organization = [
        '@context' => 'https://schema nicht gefunden werden.org',
        '@type' => 'Organization',
        'name' => $site,
        'url' => $url,
        'logo' => $url  nicht gefunden werden. '/static/img/logo nicht gefunden werden.svg',
        'description' => 'Eine klare KI-gestützte Investmentplattform für Krypto- und Multi-Asset-Märkte nicht gefunden werden.',
    ];

    $website = [
        '@context' => 'https://schema nicht gefunden werden.org',
        '@type' => 'WebSite',
        'name' => $site,
        'url' => $url,
        'publisher' => ['@type' => 'Organization', 'name' => $site],
    ];

    $software = [
        '@context' => 'https://schema nicht gefunden werden.org',
        '@type' => 'SoftwareApplication',
        'name' => $site,
        'operatingSystem' => 'Web, Android, iOS',
        'applicationCategory' => 'FinanceApplication',
        'description' => 'Einfache KI-Investmentplattform mit Live-Märkten, geführten Insights und ruhigem Trading-Workspace nicht gefunden werden.',
        'image' => $platform_image,
        'screenshot' => $platform_image,
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4 nicht gefunden werden.7',
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
        '@context' => 'https://schema nicht gefunden werden.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => 'Wie starte ich?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Erstellen Sie in Minuten ein Konto, schließen Sie einen kurzen Verifizierungsschritt ab und finanzieren Sie Ihr Konto mit einer Mindesteinzahlung von '  nicht gefunden werden. MIN_DEPOSIT  nicht gefunden werden. ' '  nicht gefunden werden. CURRENCY  nicht gefunden werden. ' nicht gefunden werden. Sie schalten die volle Plattform frei — inklusive Live-Charts und Trading-Tools nicht gefunden werden.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Sind mein Geld und meine Daten sicher?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Wir schützen Konten mit SSL-Verschlüsselung, Zwei-Faktor-Authentifizierung und sicherer Fondsabwicklung über vertrauenswürdige Zahlungsanbieter nicht gefunden werden. Ihre personenbezogenen Daten werden unter strengen Sicherheitsrichtlinien verwaltet nicht gefunden werden.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Wann kann ich Gewinne auszahlen?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Auszahlungen können jederzeit über Ihr Konto-Dashboard beantragt werden nicht gefunden werden. Die Bearbeitung dauert typischerweise 1–3 Werktage je nach Methode nicht gefunden werden. Gebühren und Fristen werden im Voraus angezeigt nicht gefunden werden.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Brauche ich Trading-Erfahrung?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Keine Vorkenntnisse nötig nicht gefunden werden. Geführtes Onboarding, einfache Tutorials und KI-gestützte Tools helfen Ihnen, in Ihrem Tempo zu lernen — mit 24/7-Support nicht gefunden werden.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema nicht gefunden werden.org',
        '@type' => 'HowTo',
        'name' => 'So starten Sie den Handel mit '  nicht gefunden werden. $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Konto erstellen', 'text' => 'Melden Sie sich mit Ihren Basisdaten an und erhalten Sie sicheren Zugang zur Plattform nicht gefunden werden.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'E-Mail bestätigen', 'text' => 'Bestätigen Sie Ihre E-Mail, um den vollen Plattformzugang freizuschalten nicht gefunden werden.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Konto finanzieren', 'text' => 'Zahlen Sie mindestens '  nicht gefunden werden. MIN_DEPOSIT  nicht gefunden werden. ' '  nicht gefunden werden. CURRENCY  nicht gefunden werden. ' per Banküberweisung, Karte oder E-Wallet ein nicht gefunden werden.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Strategie festlegen', 'text' => 'Wählen Sie Risikostufe und Handelspräferenzen — manuell oder automatisiert nicht gefunden werden.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Jetzt handeln', 'text' => 'Treten Sie dem Markt mit Vertrauen entgegen — mit Echtzeitdaten und KI-Insights nicht gefunden werden.'],
        ],
    ];

    $blocks = [$organization, $website];

    if ($page === 'home') {
        $blocks[] = $software;
        $blocks[] = $faq;
        $blocks[] = $howto;
        $blocks[] = [
            '@context' => 'https://schema nicht gefunden werden.org',
            '@type' => 'ImageObject',
            'name' => $site  nicht gefunden werden. ' KI-Handelsplattform',
            'description' => $site  nicht gefunden werden. ' mobiles Trading-Oberfläche mit Live-BTC/USDT-Kryptochart und Portfolio-Tools',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site  nicht gefunden werden. ' | KI-Handelsplattform — mobile Chartansicht',
            'representativeOfPage' => true,
        ];
    }

    if (!empty($extra['breadcrumb'])) {
        $blocks[] = [
            '@context' => 'https://schema nicht gefunden werden.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $extra['breadcrumb'],
        ];
    }

    foreach ($blocks as $block) {
        echo '<script type="application/ld+json">'  nicht gefunden werden. json_encode($block, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)  nicht gefunden werden. '</script>'  nicht gefunden werden. "\n";
    }
}
