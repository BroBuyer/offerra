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
        'description' => 'Přistupte ke kryptoměnám, forexu a globálním aktivům z jedné platformy. ' . $site . ' spojuje analytiku naživo, podporovanou automatizaci a odbornou podporu.',
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
        'description' => $site . ' — obchodní platforma poháněná AI, s analytikou naživo, podporovanou automatizací a přístupem k více trhům.',
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
                'name' => 'Jaké kroky jsou potřeba k zahájení obchodování?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Zaregistrujte se klíčovými údaji, potvrďte e-mail a vložte alespoň ' . money_min() . '. Odemknete grafy naživo, obchodní nástroje, analýzu trhu a vyhrazenou podporu.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Je ' . $site . ' spolehlivá při správě mých peněz a údajů?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Relace jsou šifrované SSL, k dispozici je dvoufaktorová autentizace a finanční transakce jdou přes důvěryhodné partnery. Praktiky soukromí jsou popsané na stránce.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Jak rychle mohu vybrat prostředky?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Výběry můžete požádat kdykoli z portálu účtu. Zpracování obvykle trvá 1–3 pracovní dny podle metody. Poplatky a termíny jsou viditelné před potvrzením.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Jsou před začátkem potřeba obchodní zkušenosti?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Předchozí zkušenost není potřeba. Onboarding, tutoriály a nástroje posílené AI vám pomáhají učit se vlastním tempem.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Jak začít obchodovat s ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Vytvořte si účet', 'text' => 'Zaregistrujte se základními údaji a získejte bezpečný přístup na platformu.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Ověřte e-mail', 'text' => 'Potvrďte e-mail pro plný přístup na platformu.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Vložte na účet', 'text' => 'Vložte alespoň ' . money_min() . ' převodem, kartou nebo e-peněženkou.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Nastavte strategii', 'text' => 'Vyberte úroveň rizika a preference — manuálně nebo automaticky.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Začít obchodovat', 'text' => 'Vstupte na trh sebevědomě, s daty v reálném čase a poznatky AI.'],
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
            'name' => $site . ' — obchodní platforma s AI',
            'description' => $site . ' — mobilní rozhraní s krypto grafem BTC/USDT naživo a nástroji portfolia',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Obchodní platforma s AI — mobilní zobrazení grafu',
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
