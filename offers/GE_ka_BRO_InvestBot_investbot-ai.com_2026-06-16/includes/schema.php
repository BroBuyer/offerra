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
        'description' => 'AI-ით ტრეიდინგის პლატფორმა კრიპტო, ფორექს და გლობალური ბაზრებისთვის.',
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
        'description' => 'ჭკვიანი ტრეიდინგის პლატფორმა რეალურ დროში ბაზრის ანალიტიკითა და AI-ით დახმარებული სიგნალებით.',
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
                'name' => 'როგორ დავიწყო?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'შექმენით ანგარიში რამდენიმე წუთში, გაიარეთ მოკლე ვერიფიკაცია და შეავსეთ ანგარიში მინიმალური ' . MIN_DEPOSIT . ' ' . CURRENCY . ' დეპოზიტით. მიიღებთ სრულ წვდომას პლატფორმაზე, მათ შორის რეალურ დროში გრაფიკებსა და ტრეიდინგის ინსტრუმენტებს.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'ჩემი თანხა და მონაცემები უსაფრთხოა?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'ანგარიშებს ვიცავთ SSL დაშიფვრით, ორფაქტორიანი ავთენტიფიკაციითა და უსაფრთხო ფონდების მართვით სანდო გადახდის პროვაიდერების მეშვეობით. პირადი მონაცემები მკაცრი უსაფრთხოების პოლიტიკის მიხედვით მუშავდება.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'როდის შემიძლია მოგების გატანა?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'გატანის მოთხოვნა ნებისმიერ დროს შეგიძლიათ პირადი ანგარიშიდან. დამუშავებას ჩვეულებრივ 1–3 სამუშაო დღე სჭირდება მეთოდის მიხედვით. საკომისიოები და ვადები წინასწარ ჩანს.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'საჭიროა ტრეიდინგის გამოცდილება?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'წინა გამოცდილება არ არის საჭირო. სახელმძღვანელო onboarding, მარტივი სახელმძღვანელოები და AI-ით დახმარებული ინსტრუმენტები დაგეხმარებათ საკუთარი ტემპით სწავლაში, 24/7 მხარდაჭერით.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'როგორ დაიწყოთ ტრეიდინგი ' . $site . '-თან',
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'შექმენით ანგარიში', 'text' => 'დარეგისტრირდით ძირითადი მონაცემებით და მიიღეთ უსაფრთხო წვდომა პლატფორმაზე.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'დაადასტურეთ ელფოსტა', 'text' => 'დაადასტურეთ ელფოსტა სრული წვდომის გასახსნელად პლატფორმაზე.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'შეავსეთ ანგარიში', 'text' => 'შეიტანეთ მინიმუმ ' . MIN_DEPOSIT . ' ' . CURRENCY . ' საბანკო გადარიცხვით, ბარათით ან ელექტრონული საფულით.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'დააყენეთ სტრატეგია', 'text' => 'აირჩიეთ რისკის დონე და ტრეიდინგის პარამეტრები — ხელით ან ავტომატურად.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'დაიწყეთ ტრეიდინგი', 'text' => 'შედით ბაზარზე ნდობით რეალურ დროში მონაცემებითა და AI ინსაითებით.'],
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
            'name' => $site . ' | ტრეიდინგის პლატფორმა',
            'description' => $site . ' მობილური ტრეიდინგის ინტერფეისი BTC/USDT რეალურ დროში გრაფიკითა და პორტფელის ინსტრუმენტებით',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | ტრეიდინგის პლატფორმა — მობილური გრაფიკის ხედი',
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
