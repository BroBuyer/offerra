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
        'description' => 'Σκοτεινό τερματικό αγοράς για crypto, forex και συναλλαγές πολλαπλών περιουσιακών στοιχείων με σήματα AI.',
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
        'description' => 'Τερματικό συναλλαγών τύπου exchange με ζωντανές αγορές, εργαλεία χαρτοφυλακίου και εκτέλεση με βοήθεια AI.',
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
                'name' => 'Πώς ξεκινώ;',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Δημιουργήστε λογαριασμό σε λίγα λεπτά, ολοκληρώστε σύντομη επαλήθευση και χρηματοδοτήστε τον λογαριασμό σας με ελάχιστη κατάθεση ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Ξεκλειδώνετε την πλήρη πλατφόρμα, συμπεριλαμβανομένων ζωντανών γραφημάτων και εργαλείων συναλλαγών.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Είναι ασφαλή τα χρήματα και τα δεδομένα μου;',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Προστατεύουμε τους λογαριασμούς με κρυπτογράφηση SSL, έλεγχο ταυτότητας δύο παραγόντων και ασφαλή διαχείριση κεφαλαίων μέσω αξιόπιστων παρόχων πληρωμών. Τα προσωπικά σας δεδομένα διαχειρίζονται με αυστηρές πολιτικές ασφαλείας.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Πότε μπορώ να κάνω ανάληψη κερδών;',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Μπορείτε να ζητήσετε ανάληψη ανά πάσα στιγμή από τον πίνακα ελέγχου. Η επεξεργασία διαρκεί συνήθως 1–3 εργάσιμες ημέρες ανάλογα με τη μέθοδο. Τα τέλη και οι χρόνοι εμφανίζονται εκ των προτέρων.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Χρειάζομαι εμπειρία συναλλαγών;',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Δεν απαιτείται προηγούμενη εμπειρία. Καθοδηγούμενη εκκίνηση, απλά tutorials και εργαλεία με βοήθεια AI σας βοηθούν να μάθετε με τον δικό σας ρυθμό, με υποστήριξη 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Πώς να ξεκινήσετε συναλλαγές με ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Δημιουργήστε τον λογαριασμό σας', 'text' => 'Εγγραφείτε με τα βασικά στοιχεία σας και αποκτήστε ασφαλή πρόσβαση στην πλατφόρμα.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Επαληθεύστε το email σας', 'text' => 'Επιβεβαιώστε το email σας για πλήρη πρόσβαση στην πλατφόρμα.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Χρηματοδοτήστε τον λογαριασμό σας', 'text' => 'Καταθέστε τουλάχιστον ' . MIN_DEPOSIT . ' ' . CURRENCY . ' μέσω τραπεζικής μεταφοράς, κάρτας ή ηλεκτρονικού πορτοφολιού.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Ορίστε τη στρατηγική σας', 'text' => 'Επιλέξτε επίπεδο κινδύνου και προτιμήσεις — χειροκίνητα ή αυτοματοποιημένα.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Ξεκινήστε συναλλαγές', 'text' => 'Μπείτε στην αγορά με σιγουριά χρησιμοποιώντας δεδομένα σε πραγματικό χρόνο και πληροφορίες AI.'],
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
            'name' => $site . ' Πλατφόρμα συναλλαγών AI',
            'description' => $site . ' διεπαφή συναλλαγών για κινητό με ζωντανό γράφημα BTC/USDT και εργαλεία χαρτοφυλακίου',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Πλατφόρμα συναλλαγών AI — προβολή γραφήματος σε κινητό',
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
