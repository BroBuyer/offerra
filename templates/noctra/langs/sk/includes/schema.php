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
        'description' => 'Tmavý trhový terminál na obchodovanie s kryptom, forexom a viacerými aktívami s AI signálmi.',
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
        'description' => 'Obchodný terminál v štýle burzy so živými trhmi, nástrojmi portfólia a AI kontextom exekúcie.',
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
                'name' => 'Ako začať?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Vytvorte účet počas niekoľkých minút, dokončite krátke overenie a vložte minimálny vklad ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Získate plný prístup k platforme vrátane živých grafov a obchodných nástrojov.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Sú moje peniaze a údaje v bezpečí?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Účty chránime SSL šifrovaním, dvojfaktorovým prihlásením a bezpečnou správou prostriedkov cez dôveryhodných platobných poskytovateľov. Osobné údaje spravujeme podľa prísnych bezpečnostných zásad.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kedy môžem vybrať zisky?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Výbery môžete požiadať kedykoľvek z dashboardu. Spracovanie zvyčajne trvá 1–3 pracovné dni podľa metódy. Poplatky a lehoty vidíte vopred.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Potrebujem obchodné skúsenosti?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Predchádzajúce skúsenosti nie sú potrebné. Sprievodca, jednoduché tutoriály a AI nástroje vám pomôžu učiť sa vlastným tempom s podporou 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Ako začať obchodovať s ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Vytvorte účet', 'text' => 'Zaregistrujte sa so základnými údajmi a získajte bezpečný prístup k platforme.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Overte e-mail', 'text' => 'Potvrďte e-mail a odomknite plný prístup k platforme.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Vložte prostriedky', 'text' => 'Vložte minimálně ' . MIN_DEPOSIT . ' ' . CURRENCY . ' bankovým prevodom, kartou alebo e-peňaženkou.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Nastavte stratégiu', 'text' => 'Zvoľte úroveň rizika a preferencie obchodovania — ručne alebo automaticky.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Začnite obchodovať', 'text' => 'Vstupte na trh s istotou vďaka údajom v reálnom čase a AI prehľadom.'],
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
            'description' => $site . ' mobilné obchodné rozhranie so živým kryptografom BTC/USDT a nástrojmi portfólia',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI obchodná platforma — mobilní pohled na graf',
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
