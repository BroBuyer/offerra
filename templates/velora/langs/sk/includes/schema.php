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
        'description' => 'Prehľadná AI platforma pre investovanie do krypto a multi-asset trhov.',
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
        'description' => 'Jednoduchá AI investičná platforma so živými trhmi, vedenými insightmi a pokojným obchodným prostredím.',
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
                    'text' => 'Vytvorte účet počas minút, dokončite krátky verifikačný krok a financujte účet minimálnym vkladom ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Odomknete plnú platformu vrátane živých grafov a obchodných nástrojov.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Sú moje peniaze a údaje v bezpečí?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Chránime účty SSL šifrovaním, dvojfaktorovou autentifikáciou a bezpečným spracovaním prostriedkov prostredníctvom dôveryhodných poskytovateľov platieb. Vaše osobné údaje sú spravované pod prísnymi bezpečnostnými zásadami.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kedy môžem vybrať zisky?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Výbery je možné kedykoľvek požiadať z dashboardu účtu. Spracovanie zvyčajne trvá 1–3 pracovné dni podľa metódy. Poplatky a termíny sú zobrazené vopred.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Potrebujem skúsenosti s obchodovaním?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Predchádzajúce skúsenosti nie sú vyžadované. Vedený onboarding, jednoduché tutoriály a AI nástroje vám pomôžu učiť sa vlastným tempom s dostupnou podporou 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Ako začať obchodovať s ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Vytvoriť účet', 'text' => 'Zaregistrujte sa so základnými údajmi a získajte bezpečný prístup k platforme.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Overiť e-mail', 'text' => 'Potvrďte e-mail a odomknite plný prístup k platforme.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Financovať účet', 'text' => 'Vložte minimálne ' . MIN_DEPOSIT . ' ' . CURRENCY . ' bankovým prevodom, kartou alebo e-peňaženkou.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Nastaviť stratégiu', 'text' => 'Zvoľte úroveň rizika a obchodné preferencie — manuálne alebo automatizované.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Začať obchodovať', 'text' => 'Vstúpte na trh sebavedomo s údajmi v reálnom čase a AI insightmi.'],
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
            'description' => $site . ' mobilné obchodné rozhranie so živým krypto grafom BTC/USDT a nástrojmi portfólia',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI obchodná platforma — mobilné zobrazenie grafu',
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
