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
        'description' => 'Obchodní platforma s AI pro kryptoměny, forex a globální trhy.',
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
        'description' => 'Inteligentní obchodní platforma s analýzou trhu v reálném čase a signály podporovanými AI.',
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
                'name' => 'Jak mohu začít?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Vytvořte si účet během několika minut, dokončete krátký ověřovací krok a financujte svůj účet minimálním vkladem ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Získáte plný přístup k platformě včetně grafů v reálném čase a obchodních nástrojů.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Jsou mé peníze a údaje v bezpečí?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Účty chráníme SSL šifrováním, dvoufaktorovým ověřením a bezpečnou správou prostředků prostřednictvím důvěryhodných platebních poskytovatelů. Vaše osobní údaje jsou zpracovávány podle přísných bezpečnostních zásad.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kdy mohu vybrat zisky?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Výběry můžete požádat kdykoli ze svého osobního účtu. Zpracování obvykle trvá 1–3 pracovní dny v závislosti na zvolené metodě. Poplatky a lhůty jsou vždy zobrazeny předem.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Potřebuji zkušenosti s obchodováním?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Předchozí zkušenosti nejsou nutné. Průvodce nastavením, jednoduché návody a nástroje podporované AI vám pomohou učit se vlastním tempem, s podporou dostupnou 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Jak začít obchodovat s ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Vytvořte si účet', 'text' => 'Zaregistrujte se se základními údaji a získejte bezpečný přístup k platformě.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Ověřte svůj e-mail', 'text' => 'Potvrďte e-mail a odemkněte plný přístup k platformě.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Financujte svůj účet', 'text' => 'Vložte minimálně ' . MIN_DEPOSIT . ' ' . CURRENCY . ' bankovním převodem, kartou nebo e-peněženkou.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Nastavte svou strategii', 'text' => 'Zvolte úroveň rizika a obchodní preference — manuálně nebo automaticky.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Začněte obchodovat', 'text' => 'Vstupte na trh s jistotou díky datům v reálném čase a AI přehledům.'],
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
            'name' => $site . ' | Obchodní platforma',
            'description' => $site . ' mobilní obchodní rozhraní s grafem kryptoměny BTC/USDT v reálném čase a nástroji portfolia',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Obchodní platforma — mobilní zobrazení grafu',
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
