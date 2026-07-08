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
        'description' => 'Plateforme de trading assistée par IA pour les cryptomonnaies, le forex et les marchés mondiaux.',
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
        'description' => 'Plateforme de trading intelligente avec analyse de marché en temps réel et signaux assistés par IA.',
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
                'name' => 'Comment puis-je commencer ?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Créez un compte en quelques minutes, complétez une courte étape de vérification et alimentez votre compte avec un dépôt minimum de ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Vous débloquerez la plateforme complète, y compris les graphiques en direct et les outils de trading.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Mon argent et mes données sont-ils en sécurité ?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Nous protégeons les comptes avec le chiffrement SSL, l\'authentification à deux facteurs et un traitement sécurisé des fonds via des prestataires de paiement de confiance. Vos données personnelles sont gérées selon des politiques de sécurité strictes.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Quand puis-je retirer mes profits ?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Les retraits peuvent être demandés à tout moment depuis votre tableau de bord. Le traitement prend généralement 1 à 3 jours ouvrables selon la méthode. Les frais et les délais sont affichés à l\'avance.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Ai-je besoin d\'expérience en trading ?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Aucune expérience préalable n\'est requise. L\'intégration guidée, des tutoriels simples et des outils assistés par IA vous aident à apprendre à votre rythme, avec une assistance disponible 24h/24.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Comment commencer à trader avec ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Créez votre compte', 'text' => 'Inscrivez-vous avec vos coordonnées de base et obtenez un accès sécurisé à la plateforme.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Vérifiez votre e-mail', 'text' => 'Confirmez votre e-mail pour débloquer l\'accès complet à la plateforme.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Alimentez votre compte', 'text' => 'Déposez un minimum de ' . MIN_DEPOSIT . ' ' . CURRENCY . ' par virement bancaire, carte ou portefeuille électronique.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Définissez votre stratégie', 'text' => 'Choisissez le niveau de risque et vos préférences de trading — manuel ou automatisé.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Commencez à trader', 'text' => 'Entrez sur le marché en toute confiance grâce aux données en temps réel et aux insights IA.'],
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
            'name' => $site . ' Plateforme de trading IA',
            'description' => $site . ' interface de trading mobile avec graphique de cryptomonnaie BTC/USDT en direct et outils de portefeuille',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Plateforme de trading IA — vue graphique mobile',
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
