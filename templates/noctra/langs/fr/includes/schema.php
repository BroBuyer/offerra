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
        'description' => 'Terminal de marché sombre pour le trading crypto, forex et multi-actifs avec signaux assistés par l\'IA.',
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
        'description' => 'Terminal de trading style exchange avec marchés en direct, outils de portefeuille et contexte d\'exécution assisté par l\'IA.',
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
                'name' => 'Comment commencer ?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Créez un compte en quelques minutes, complétez une courte vérification et alimentez votre compte avec un dépôt minimum de ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Vous débloquerez la plateforme complète, graphiques en direct et outils de trading inclus.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Mon argent et mes données sont-ils en sécurité ?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Nous protégeons les comptes avec le chiffrement SSL, l\'authentification à deux facteurs et une gestion sécurisée des fonds via des prestataires de paiement de confiance. Vos données personnelles sont gérées selon des politiques de sécurité strictes.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Quand puis-je retirer mes gains ?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Les retraits peuvent être demandés à tout moment depuis le tableau de bord du compte. Le traitement prend généralement 1 à 3 jours ouvrés selon le moyen. Les frais et délais sont indiqués à l\'avance.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Faut-il déjà avoir de l\'expérience en trading ?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Aucune expérience préalable n\'est requise. Une prise en main guidée, des tutoriels simples et des outils assistés par l\'IA vous aident à apprendre à votre rythme, avec une assistance 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Comment commencer à trader avec ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Créez votre compte', 'text' => 'Inscrivez-vous avec vos informations de base et obtenez un accès sécurisé à la plateforme.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Vérifiez votre e-mail', 'text' => 'Confirmez votre e-mail pour débloquer l\'accès complet à la plateforme.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Alimentez votre compte', 'text' => 'Déposez un minimum de ' . MIN_DEPOSIT . ' ' . CURRENCY . ' par virement bancaire, carte ou portefeuille électronique.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Définissez votre approche', 'text' => 'Choisissez le niveau de risque et vos préférences de trading — manuel ou automatisé.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Commencez à trader', 'text' => 'Entrez sur le marché en confiance avec des données en temps réel et des analyses IA.'],
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
            'name' => $site . ' — plateforme de trading IA',
            'description' => 'Interface de trading mobile ' . $site . ' avec graphique crypto BTC/USDT en direct et outils de portefeuille',
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
