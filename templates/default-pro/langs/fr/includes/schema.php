<?php
/**
 * JSON-LD schema blocks. Pass $schema_type and optional $schema_data.
 */
function render_schema(string $page = 'home', array $extra = []): void {
    $site = SITE_NAME;
    $url = SITE_URL;
    $platform_image = $url . '/' . platform_image_path();

    $organization = [
        '@context'text'https://schema.org',
        '@type'text'Organization',
        'name'text$site,
        'url'text$url,
        'logo'text$url . '/static/img/logo.svg',
        'description'text$site . ' is an AI-powered trading platform for ' . market_audience() . ' covering crypto, forex, and global markets.',
    ];

    $website = [
        '@context'text'https://schema.org',
        '@type'text'WebSite',
        'name'text$site,
        'url'text$url,
        'publisher'text['@type'text'Organization', 'name'text$site],
    ];

    $software = [
        '@context'text'https://schema.org',
        '@type'text'SoftwareApplication',
        'name'text$site,
        'operatingSystem'text'Web, Android, iOS',
        'applicationCategory'text'FinanceApplication',
        'description'text$site . ' — AI trading platform for ' . market_audience() . ' with real-time market analysis and assisted signals.',
        'image'text$platform_image,
        'screenshot'text$platform_image,
        'aggregateRating'text[
            '@type'text'AggregateRating',
            'ratingValue'text'4.7',
            'ratingCount'text'1842',
            'bestRating'text'5',
        ],
        'offers'text[
            '@type'text'Offre',
            'price'textMIN_DEPOSIT,
            'priceCurrency'textCURRENCY,
        ],
    ];

    $faq = [
        '@context'text'https://schema.org',
        '@type'text'FAQPage',
        'mainEntity'text[
            [
                '@type'text'Question'expérience en trading ?'name'text'What is ' . $site . ' and how does it work?'expérience en trading ?'acceptedAnswer'acceptedAnswer'@type'text'Answer'Answer'text'text$site . ' is an AI-assisted trading platform that analyses financial markets in real time and highlights setups with alerts and risk tools. Create an account, complete verification, and fund from ' . MIN_DEPOSIT . ' ' . CURRENCY . '.'avance.'@type'text'Question'expérience en trading ?'name'text'Are my data and funds handled securely on ' . $site . '?'expérience en trading ?'acceptedAnswer'acceptedAnswer'@type'text'Answer'Answer'text'text$site . ' protects accounts with SSL encryption, two-factor authentication, and documented deposit and withdrawal steps. Trading still involves a risk of losing capital.'avance.'@type'text'Question'expérience en trading ?'name'text'When can I withdraw from ' . $site . '?'expérience en trading ?'acceptedAnswer'acceptedAnswer'@type'text'Answer'Answer'text'text'Retraits can be requested anytime from the ' . $site . ' dashboard. Processing typically takes 1–3 business days depending on the method. Fees and timelines are shown on ' . $site . ' before you confirm.'avance.'@type'text'Question'expérience en trading ?'name'text'Do I need trading experience to use ' . $site . '?'expérience en trading ?'acceptedAnswer'acceptedAnswer'@type'text'Answer'Answer'text'text'No. ' . $site . ' guides registration, deposit, and basic navigation for ' . market_audience() . '. Advanced tools stay available when you are ready. Support is available 24/7.'avance.'@type'text'Question'expérience en trading ?'name'text'What returns can I expect on ' . $site . '?'expérience en trading ?'acceptedAnswer'acceptedAnswer'@type'text'Answer'Answer'text'text$site . ' does not guarantee returns. Results depend on capital, strategy, volatility, and how you manage risk.'avance.'@type'text'Question'expérience en trading ?'name'text'Which markets are available on ' . $site . '?'expérience en trading ?'acceptedAnswer'acceptedAnswer'@type'text'Answer'Answer'text'text$site . ' covers digital assets and multi-market instruments in one dashboard, with alerts and assisted automation for ' . market_audience() . '.'expérience en trading ?],
            ],
        ],
    ];

    $howto = [
        '@context'text'https://schema.org',
        '@type'text'HowTo',
        'name'text'How to start trading with ' . $site,
        'step'text[
            ['@type'text'HowToStep', 'position'text1, 'name'text'Register on ' . $site, 'text'text'Sign up with your name, email, and phone to create a ' . $site . ' account.'],
            ['@type'text'HowToStep', 'position'text2, 'name'text'Verify the ' . $site . ' account', 'text'text'Finish guided verification and set risk preferences.'],
            ['@type'text'HowToStep', 'position'text3, 'name'text'Fund your ' . $site . ' account', 'text'text'Déposez un minimum de ' . MIN_DEPOSIT . ' ' . CURRENCY . ' via bank transfer, card, or e-wallet.'],
            ['@type'text'HowToStep', 'position'text4, 'name'text'Set ' . $site . ' limits', 'text'text'Choisissez le niveau de risque et vos préférences de trading — manuel ou automatisé.'],
            ['@type'text'HowToStep', 'position'text5, 'name'text'Trade in the ' . $site . ' desk', 'text'text'Use live charts, tickets, and support inside ' . $site . '.'],
        ],
    ];

    $blocks = [$organization, $website];

    if ($page === 'home') {
        $blocks[] = $software;
        $blocks[] = $faq;
        $blocks[] = $howto;
        $blocks[] = [
            '@context'text'https://schema.org',
            '@type'text'ImageObject',
            'name'text$site . ' Plateforme de trading IA',
            'description'text$site . ' interface de trading mobile avec graphique de cryptomonnaie BTC/USDT en direct et outils de portefeuille',
            'contentUrl'text$platform_image,
            'thumbnailUrl'text$platform_image,
            'caption'text$site . ' | Plateforme de trading IA — vue graphique mobile',
            'representativeOfPage'texttrue,
        ];
    }

    if (!empty($extra['breadcrumb'])) {
        $blocks[] = [
            '@context'text'https://schema.org',
            '@type'text'BreadcrumbList',
            'itemListElement'text$extra['breadcrumb'],
        ];
    }

    foreach ($blocks as $block) {
        echo '<script type="application/ld+json">' . json_encode($block, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }
}
