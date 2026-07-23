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
        'description' => 'Πλατφόρμα συναλλαγών με υποστήριξη AI για κρυπτονομίσματα, forex και παγκόσμιες αγορές.',
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
        'description' => 'Έξυπνη πλατφόρμα συναλλαγών με ανάλυση αγοράς σε πραγματικό χρόνο και σήματα με υποστήριξη AI.',
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
                'name' => 'Πώς μπορώ να ξεκινήσω;',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Δημιουργήστε τον λογαριασμό σας σε λίγα λεπτά, ολοκληρώστε έναν σύντομο έλεγχο και καταθέστε τουλάχιστον ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Θα ξεκλειδώσετε την πλήρη πλατφόρμα με ζωντανά γραφήματα και εργαλεία συναλλαγών.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Είναι ασφαλή τα κεφάλαια και τα δεδομένα μου;',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Προστατεύουμε τους λογαριασμούς με κρυπτογράφηση SSL, έλεγχο ταυτότητας δύο παραγόντων και ασφαλή διαχείριση κεφαλαίων μέσω αξιόπιστων παρόχων πληρωμών. Τα προσωπικά δεδομένα διαχειρίζονται σύμφωνα με αυστηρά πρότυπα ασφαλείας.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Πότε μπορώ να κάνω ανάληψη των κερδών;',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Μπορείτε να ζητήσετε ανάληψη ανά πάσα στιγμή από τον πίνακα ελέγχου. Η επεξεργασία διαρκεί συνήθως από 1 έως 3 εργάσιμες ημέρες, ανάλογα με τη μέθοδο που επιλέγετε. Κόστος και χρόνοι εμφανίζονται εκ των προτέρων.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Χρειάζομαι εμπειρία στις συναλλαγές;',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Δεν απαιτείται προηγούμενη εμπειρία. Η υποστηριζόμενη ένταξη, οι διαισθητικοί οδηγοί και τα εργαλεία με υποστήριξη AI σάς βοηθούν να μάθετε με τον δικό σας ρυθμό, με υποστήριξη διαθέσιμη 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Πώς να ξεκινήσετε συναλλαγές με το ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Δημιουργήστε τον λογαριασμό σας', 'text' => 'Εγγραφείτε με βασικά στοιχεία και αποκτήστε ασφαλή πρόσβαση στην πλατφόρμα.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Επαληθεύστε το email σας', 'text' => 'Επιβεβαιώστε το email και ξεκλειδώστε την πλήρη πρόσβαση στην πλατφόρμα.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Καταθέστε κεφάλαια', 'text' => 'Καταθέστε τουλάχιστον ' . MIN_DEPOSIT . ' ' . CURRENCY . ' μέσω τραπεζικής μεταφοράς, κάρτας ή e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Ορίστε τη στρατηγική', 'text' => 'Επιλέξτε επίπεδο κινδύνου και προτιμήσεις λειτουργίας, χειροκίνητα ή αυτοματοποιημένα.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Ξεκινήστε τις συναλλαγές', 'text' => 'Μπείτε στην αγορά με αυτοπεποίθηση χάρη σε δεδομένα πραγματικού χρόνου και insights AI.'],
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
            'name' => $site . ' πλατφόρμα συναλλαγών AI',
            'description' => $site . ' διεπαφή συναλλαγών για κινητά με ζωντανό γράφημα BTC/USDT και εργαλεία χαρτοφυλακίου',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | πλατφόρμα συναλλαγών AI — προβολή γραφήματος σε κινητό',
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
