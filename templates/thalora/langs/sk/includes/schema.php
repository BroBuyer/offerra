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
        'description' => 'Pristúpte ku kryptomenám, forexu a globálnym aktívam z jednej platformy. ' . $site . ' spája analytiku naživo, podporovanú automatizáciu a odbornú podporu.',
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
        'description' => $site . ' — obchodná platforma poháňaná AI, s analytikou naživo, podporovanou automatizáciou a prístupom k viacerým trhom.',
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
                'name' => 'Aké kroky sú potrebné na začatie obchodovania?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Zaregistrujte sa kľúčovými údajmi, potvrďte e-mail a vložte aspoň ' . money_min() . '. Odomknete grafy naživo, obchodné nástroje, analýzu trhu a vyhradenú podporu.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Je ' . $site . ' spoľahlivá pri správe mojich peňazí a údajov?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Relácie sú šifrované SSL, k dispozícii je dvojfaktorová autentifikácia a finančné transakcie idú cez dôveryhodných partnerov. Praktiky súkromia sú popísané na stránke.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Ako rýchlo môžem vybrať prostriedky?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Výbery môžete požiadať kedykoľvek z portálu účtu. Spracovanie zvyčajne trvá 1–3 pracovné dni podľa metódy. Poplatky a termíny sú viditeľné pred potvrdením.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Je pred začiatkom potrebné obchodné skúsenosti?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Predchádzajúca skúsenosť nie je potrebná. Onboarding, tutoriály a nástroje posilnené AI vám pomáhajú učiť sa vlastným tempom.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Ako začať obchodovať s ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Vytvorte si účet', 'text' => 'Zaregistrujte sa základnými údajmi a získajte bezpečný prístup na platformu.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Overte e-mail', 'text' => 'Potvrďte e-mail pre plný prístup na platformu.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Vložte na účet', 'text' => 'Vložte aspoň ' . money_min() . ' prevodom, kartou alebo e-peňaženkou.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Nastavte stratégiu', 'text' => 'Vyberte úroveň rizika a preferencie — manuálne alebo automaticky.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Začať obchodovať', 'text' => 'Vstúpte na trh sebavedomo, s dátami v reálnom čase a poznatkami AI.'],
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
            'name' => $site . ' — obchodná platforma s AI',
            'description' => $site . ' — mobilné rozhranie s krypto grafom BTC/USDT naživo a nástrojmi portfólia',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Obchodná platforma s AI — mobilné zobrazenie grafu',
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
