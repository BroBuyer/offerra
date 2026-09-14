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
        'description' => 'Aiški AI padedama investavimo platforma kriptovaliutų ir kelių aktyvų rinkoms.',
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
        'description' => 'Paprasta AI investavimo platforma su tiesioginėmis rinkomis, vadovaujamomis įžvalgomis ir ramia prekybos darbo erdve.',
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
                'name' => 'Kaip man pradėti?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Susikurkite paskyrą per kelias minutes, atlikite trumpą patvirtinimo veiksmą ir papildykite savo sąskaitą minimaliu depozitu' . MIN_DEPOSIT . ' ' . CURRENCY . '. Jūs atrakinsite visą platformą, įskaitant tiesiogines diagramas ir prekybos įrankius.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Ar mano pinigai ir duomenys saugūs?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Saugome paskyras naudodami SSL šifravimą, dviejų veiksnių autentifikavimą ir saugų lėšų tvarkymą per patikimus mokėjimo teikėjus. Jūsų asmens duomenys tvarkomi laikantis griežtų saugumo taisyklių.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kada galiu atsiimti pelną?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Išėmimo užklausą galite bet kada pateikti paskyros informacijos suvestinėje. Apdorojimas paprastai trunka 1–3 darbo dienas, priklausomai nuo metodo. Mokesčiai ir terminai rodomi iš anksto.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Ar man reikia prekybos patirties?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Ankstesnė patirtis nebūtina. Vadovaujantis mokymas, paprastos mokymo programos ir dirbtinio intelekto įrankiai padeda mokytis savo tempu, o palaikymas teikiamas visą parą.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Kaip pradėti prekiauti su' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Susikurkite paskyrą', 'text' => 'Prisiregistruokite naudodami pagrindinę informaciją ir gaukite saugią prieigą prie platformos.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Patvirtinkite el. pašto adresą', 'text' => 'Patvirtinkite savo el. pašto adresą, kad atrakintumėte visą platformos prieigą.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Finansuokite savo sąskaitą', 'text' => 'Įnešti mažiausiai' . MIN_DEPOSIT . ' ' . CURRENCY . 'banko pavedimu, kortele arba elektronine pinigine.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Nustatykite savo strategiją', 'text' => 'Pasirinkite rizikos lygį ir prekybos nuostatas – rankiniu būdu arba automatizuotai.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Pradėkite prekiauti', 'text' => 'Įeikite į rinką užtikrintai, naudodamiesi realaus laiko duomenimis ir AI įžvalgomis.'],
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
            'name' => $site . 'AI prekybos platforma',
            'description' => $site . 'mobilioji prekybos sąsaja su tiesiogine BTC/USDT kriptovaliutų diagrama ir portfelio įrankiais',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . '| AI prekybos platforma – mobiliojo diagramos vaizdas',
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
