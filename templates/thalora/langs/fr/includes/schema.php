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
        'description' => 'Accédez aux cryptomonnaies, au forex et aux actifs mondiaux depuis une seule plateforme. ' . $site . ' combine des analyses en direct, une automatisation assistée et un accompagnement expert.',
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
        'description' => $site . ' — plateforme de trading IA avec analyses en direct, automatisation assistée et accès multi-marchés.',
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
                'name' => 'Quelles sont les étapes pour commencer à trader ?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Inscrivez-vous avec vos informations essentielles, confirmez votre e-mail et alimentez votre compte avec un minimum de ' . money_min() . '. Cela débloque graphiques en direct, outils de trading, analyse de marché et support dédié.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => $site . ' est-il fiable pour gérer mon argent et mes informations ?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Les sessions sont chiffrées en SSL, l’authentification à deux facteurs est disponible, et les transactions financières passent par des partenaires de confiance. Les pratiques de confidentialité sont décrites sur le site.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Dans quel délai puis-je retirer mes fonds ?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Les retraits peuvent être demandés à tout moment depuis votre espace. Le traitement prend généralement 1 à 3 jours ouvrés selon le mode. Les frais et délais s’affichent avant confirmation.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Faut-il de l’expérience en trading pour commencer ?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Aucune expérience préalable n’est nécessaire. L’accompagnement, les tutoriels et les outils enrichis par l’IA vous aident à apprendre à votre rythme.',
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
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Vérifiez votre e-mail', 'text' => 'Confirmez votre e-mail pour débloquer l’accès complet.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Alimentez votre compte', 'text' => 'Déposez un minimum de ' . money_min() . ' par virement, carte ou e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Définissez votre stratégie', 'text' => 'Choisissez le niveau de risque et vos préférences — manuel ou automatisé.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Commencez à trader', 'text' => 'Entrez sur le marché en confiance, avec des données en temps réel et des insights IA.'],
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
            'description' => $site . ' — interface mobile avec graphique crypto BTC/USDT en direct et outils de portefeuille',
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
