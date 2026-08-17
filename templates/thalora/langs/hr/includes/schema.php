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
        'description' => 'Pristupite kriptovalutama, forexu i globalnoj imovini s jedne platforme. ' . $site . ' spaja analitiku uživo, potpomognutu automatizaciju i stručnu podršku.',
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
        'description' => $site . ' — trgovačka platforma pokretana AI-jem, s analitikom uživo, potpomognutom automatizacijom i pristupom više tržišta.',
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
                'name' => 'Koji su koraci za početak trgovanja?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Registrirajte se ključnim podacima, potvrdite e-poštu i uplatite najmanje ' . money_min() . '. Otključavate grafikone uživo, alate za trgovanje, analizu tržišta i posvećenu podršku.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Je li ' . $site . ' pouzdana u rukovanju mojim novcem i podacima?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sesije su SSL-šifrirane, dostupna je dvofaktorska autentifikacija, a financijske transakcije idu preko pouzdanih partnera. Praksa privatnosti opisana je na stranici.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Koliko brzo mogu povući sredstva?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Isplate možete zatražiti u bilo koj trenutku iz portala računa. Obrada obično traje 1–3 radna dana ovisno o metodi. Naknade i rokovi vidljivi su prije potvrde.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Je li potrebno iskustvo u trgovanju prije početka?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Prethodno iskustvo nije potrebno. Onboarding, vodiči i alati pojačani AI-jem pomažu vam učiti svojim tempom.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Kako započeti trgovanje uz ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Stvorite račun', 'text' => 'Registrirajte se osnovnim podacima i dobijte siguran pristup platformi.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Potvrdite e-poštu', 'text' => 'Potvrdite e-poštu za puni pristup platformi.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Uplatite na račun', 'text' => 'Uplatite najmanje ' . money_min() . ' bankovnim prijenosom, karticom ili e-novčanikom.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Postavite strategiju', 'text' => 'Odaberite razinu rizika i preferencije — ručno ili automatski.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Započnite trgovanje', 'text' => 'Uđite na tržište s povjerenjem, uz podatke u stvarnom vremenu i uvide AI-ja.'],
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
            'name' => $site . ' — trgovačka platforma s AI-jem',
            'description' => $site . ' — mobilno sučelje s kripto grafikonom BTC/USDT uživo i alatima portfelja',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Trgovačka platforma s AI-jem — mobilni prikaz grafikona',
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
