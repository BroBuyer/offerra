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
        'description' => 'Piekļūstiet kriptovalūtām, forex un globāliem aktīviem vienā platformā. ' . $site . ' apvieno tiešsaistes analītiku, atbalstītu automatizāciju un ekspertu atbalstu.',
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
        'description' => $site . ' — ar AI darbināma tirdzniecības platforma ar tiešsaistes analītiku, atbalstītu automatizāciju un piekļuvi vairākiem tirgiem.',
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
                'name' => 'Kādi soļi nepieciešami, lai sāktu tirdzniecību?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Reģistrējieties ar būtiskajiem datiem, apstipriniet e-pastu un iemaksājiet kontā vismaz ' . money_min() . '. Tas atbloķē tiešsaistes diagrammas, tirdzniecības rīkus, tirgus analīzi un specializētu atbalstu.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Vai ' . $site . ' ir uzticama manu naudas līdzekļu un informācijas pārvaldībai?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sesijas tiek aizsargātas ar SSL šifrēšanu, pieejama divfaktoru autentifikācija, un finanšu darījumus apstrādā uzticami partneri. Privātuma prakses ir izklāstītas vietnē.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Cik drīz varu izņemt līdzekļus?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Izņemšanu var pieprasīt no konta portāla jebkurā laikā. Apstrāde parasti aizņem 1 līdz 3 darba dienas atkarībā no metodes. Komisijas un termiņi tiek rādīti pirms apstiprināšanas.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Vai pirms sākšanas nepieciešama tirdzniecības pieredze?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Iepriekšēja tirdzniecības pieredze nav nepieciešama. Ievadatbalsts, ceļveži un ar AI uzlaboti rīki palīdz mācīties savā tempā.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Kā sākt tirdzniecību ar ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Izveidojiet savu kontu', 'text' => 'Reģistrējieties ar pamatdatiem un iegūstiet drošu piekļuvi platformai.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Apstipriniet e-pastu', 'text' => 'Apstipriniet e-pastu, lai atbloķētu pilnu platformas piekļuvi.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Iemaksājiet kontā', 'text' => 'Iemaksājiet vismaz ' . money_min() . ' ar bankas pārskaitījumu, karti vai e-maku.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Iestatiet stratēģiju', 'text' => 'Izvēlieties riska līmeni un tirdzniecības preferences — manuāli vai automatizēti.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Sākt tirdzniecību', 'text' => 'Ieejiet tirgū ar pārliecību, izmantojot reāllaika datus un AI ieskatus.'],
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
            'name' => $site . ' — AI tirdzniecības platforma',
            'description' => $site . ' — mobilā tirdzniecības saskarne ar tiešsaistes BTC/USDT kriptovalūtu diagrammu un portfeļa rīkiem',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI tirdzniecības platforma — mobilais diagrammas skats',
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
