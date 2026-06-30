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
        'logo' => $url . '/assets/img/logo.svg',
        'description' => 'Obchodná platforma s AI pre krypto, forex a globálne trhy.',
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
        'description' => 'Inteligentná obchodná platforma s analýzou trhu v reálnom čase a AI signálmi.',
        'image' => $platform_image,
        'screenshot' => $platform_image,
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
                    'text' => 'Vytvorte si účet za pár minút, dokončite krátky overovací krok a nafundujte účet minimálnym vkladom ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Odomknete plný prístup na platformu vrátane grafov v reálnom čase a obchodných nástrojov.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Sú moje peniaze a dáta v bezpečí?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Chránime účty SSL šifrovaním, dvojfaktorovým overením a bezpečnou správou prostriedkov cez overených poskytovateľov platieb. Vaše osobné údaje spracúvame podľa prísnych bezpečnostných politík.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kedy môžem vybrať zisk?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Výbery môžete požiadať kedykoľvek vo svojej zóne účtu. Spracovanie zvyčajne trvá 1–3 pracovné dni podľa spôsobu platby. Poplatky a termíny sú zobrazené vopred.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Potrebujem skúsenosti s obchodovaním?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Predchádzajúce skúsenosti nie sú potrebné. Sprievodné nastavenie, jednoduché tutoriály a AI nástroje vám pomôžu učiť sa vlastným tempom s podporou 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Ako začať obchodovať s ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Vytvorte si účet', 'text' => 'Zaregistrujte sa so základnými údajmi a získajte bezpečný prístup na platformu.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Overte e-mail', 'text' => 'Potvrďte e-mail a odomknite plný prístup na platformu.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Nafundujte účet', 'text' => 'Vložte minimálne ' . MIN_DEPOSIT . ' ' . CURRENCY . ' prevodom, kartou alebo e-peňaženkou.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Nastavte stratégiu', 'text' => 'Vyberte úroveň rizika a obchodné preferencie — manuálne alebo automaticky.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Začnite obchodovať', 'text' => 'Vstúpte na trh s istotou pomocou dát v reálnom čase a AI prehľadov.'],
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
            'name' => $site . ' | Obchodná platforma',
            'description' => $site . ' mobilné obchodné rozhranie s grafom krypto BTC/USDT v reálnom čase a nástrojmi portfólia',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Obchodná platforma — mobilný pohľad na graf',
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
