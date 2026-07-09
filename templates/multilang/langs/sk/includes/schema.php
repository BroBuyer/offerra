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
        'description' => 'AI asistovaná obchodní platforma pro kryptoměny, forex a globální trhy.',
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
        'description' => 'Inteligentní obchodní platforma s analýzou trhu v reálném čase a AI asistovanými signály.',
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
                'name' => 'Ako môžem začať?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Vytvorte si účet během několika minut, dokončete krátké ověření a vložte minimálně ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Odemknete plnou platformu včetně živých grafů a obchodních nástrojů.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Sú moje peniaze a dáta v bezpečí?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Účty chráníme pomocí SSL šifrování, dvoufázového ověření a bezpečného zpracování prostředků přes důvěryhodné platební poskytovatele. Osobní údaje spravujeme podle přísných bezpečnostních pravidel.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kdy mohu vybrat zisky?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'O výběr můžete požádat kdykoli ze svého dashboardu. Zpracování obvykle trvá 1 až 3 pracovní dny podle metody. Poplatky i časové rámce vidíte předem.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Potrebujem skúsenosti s obchodovaním?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Předchozí zkušenosti nejsou nutné. Asistovaný onboarding, jednoduché návody a AI asistované nástroje vám pomohou učit se vlastním tempem, s podporou dostupnou 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Ako začať obchodovat s ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Vytvorte si účet', 'text' => 'Zaregistrujte se základními údaji a získejte bezpečný přístup k platformě.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Ověřte svůj e-mail', 'text' => 'Potvrďte e-mail a odemkněte plný přístup k platformě.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Vložte prostriedky', 'text' => 'Vložte minimálne ' . MIN_DEPOSIT . ' ' . CURRENCY . ' bankovým prevodom, kartou alebo e-peňaženkou.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Nastavte stratégiu', 'text' => 'Zvolte úroveň rizika a preference obchodování — manuálně nebo automatizovaně.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Začnite obchodovať', 'text' => 'Vstupte na trh s jistotou díky datům v reálném čase a AI insightům.'],
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
            'name' => $site . ' AI obchodná platforma',
            'description' => $site . ' mobilní obchodní rozhraní se živým grafem kryptoměny BTC/USDT a nástroji pro portfolio',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI obchodná platforma — mobilní zobrazení grafu',
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
