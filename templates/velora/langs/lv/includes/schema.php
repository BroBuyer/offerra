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
        'description' => 'Skaidra AI atbalstīta investīciju platforma kriptovalūtām un vairāku aktīvu tirgiem.',
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
        'description' => 'Vienkārša AI investīciju platforma ar reāllaika tirgiem, vadītiem ieskatiem un mierīgu tirdzniecības darba vidi.',
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
                'name' => 'Kā sākt?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Izveidojiet kontu dažu minūšu laikā, aizpildiet īsu verifikācijas soli un papildiniet kontu ar minimālo iemaksu ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Jūs atbloķēsiet pilnu platformu, ieskaitot reāllaika grafikus un tirdzniecības rīkus.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Vai mana nauda un dati ir droši?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Mēs aizsargājam kontus ar SSL šifrēšanu, divfaktoru autentifikāciju un drošu līdzekļu apstrādi caur uzticamiem maksājumu sniedzējiem. Jūsu personas dati tiek pārvaldīti saskaņā ar stingrām drošības politikām.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Kad es varu izņemt peļņu?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Izņemšanas var pieprasīt jebkurā laikā no jūsu konta paneļa. Apstrāde parasti aizņem 1–3 darba dienas atkarībā no metodes. Maksas un termiņi tiek rādīti iepriekš.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Vai man nepieciešama tirdzniecības pieredze?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Iepriekšēja pieredze nav nepieciešama. Vadīta ievadīšana, vienkārši pamācības un AI atbalstīti rīki palīdz mācīties savā tempā ar pieejamu 24/7 atbalstu.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Kā sākt tirdzniecību ar ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Izveidojiet kontu', 'text' => 'Reģistrējieties ar pamata datiem un iegūstiet drošu piekļuvi platformai.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verificējiet e-pastu', 'text' => 'Apstipriniet e-pastu, lai atbloķētu pilnu platformas piekļuvi.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Papildiniet kontu', 'text' => 'Iemaksājiet minimumu ' . MIN_DEPOSIT . ' ' . CURRENCY . ' ar bankas pārskaitījumu, karti vai e-maku.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Iestatiet stratēģiju', 'text' => 'Izvēlieties riska līmeni un tirdzniecības preferences — manuāli vai automatizēti.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Sākt tirdzniecību', 'text' => 'Ieejiet tirgū pārliecinoši, izmantojot reāllaika datus un AI ieskatus.'],
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
            'name' => $site . ' AI tirdzniecības platforma',
            'description' => $site . ' mobilā tirdzniecības saskarne ar reāllaika BTC/USDT kriptovalūtu grafiku un portfeļa rīkiem',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI tirdzniecības platforma — mobilais grafiku skats',
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
