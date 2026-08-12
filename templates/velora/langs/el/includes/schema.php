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
        'description' => 'Μια σαφής AI υποστηριζόμενη πλατφόρμα επένδυσης για crypto και multi-asset αγορές.',
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
        'description' => 'Απλή AI πλατφόρμα επένδυσης με ζωντανές αγορές, καθοδηγούμενα insights και ήρεμο χώρο trading.',
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
                    'text' => 'Δημιουργήστε λογαριασμό σε λίγα λεπτά, ολοκληρώστε σύντομο βήμα επαλήθευσης και χρηματοδοτήστε τον λογαριασμό με ελάχιστη κατάθεση ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Θα ξεκλειδώσετε την πλήρη πλατφόρμα συμπεριλαμβανομένων ζωντανών γραφημάτων και εργαλείων trading.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Είναι ασφαλή τα χρήματα και τα δεδομένα μου;',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Προστατεύουμε λογαριασμούς με κρυπτογράφηση SSL, two-factor authentication και ασφαλή διαχείριση κεφαλαίων μέσω αξιόπιστων παρόχων πληρωμών. Τα προσωπικά σας δεδομένα διαχειρίζονται υπό αυστηρές πολιτικές ασφάλειας.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Πότε μπορώ να αποσύρω κέρδη;',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Αναλήψεις μπορούν να ζητηθούν οποτεδήποτε από το dashboard λογαριασμού σας. Η επεξεργασία διαρκεί συνήθως 1–3 εργάσιμες ημέρες ανάλογα με τη μέθοδο. Τέλη και χρονοδιαγράμματα εμφανίζονται εκ των προτέρων.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Χρειάζομαι εμπειρία trading;',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Δεν απαιτείται προηγούμενη εμπειρία. Καθοδηγούμενο onboarding, απλά tutorials και AI εργαλεία σας βοηθούν να μάθετε με τον δικό σας ρυθμό με διαθέσιμη υποστήριξη 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Πώς να ξεκινήσετε trading με ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Δημιουργήστε λογαριασμό', 'text' => 'Εγγραφείτε με βασικά στοιχεία και αποκτήστε ασφαλή πρόσβαση στην πλατφόρμα.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Επαληθεύστε το email σας', 'text' => 'Επιβεβαιώστε το email για πλήρη πρόσβαση στην πλατφόρμα.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Χρηματοδοτήστε τον λογαριασμό', 'text' => 'Καταθέστε ελάχιστο ' . MIN_DEPOSIT . ' ' . CURRENCY . ' μέσω τραπεζικής μεταφοράς, κάρτας ή e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Ορίστε τη στρατηγική σας', 'text' => 'Επιλέξτε επίπεδο κινδύνου και προτιμήσεις trading — χειροκίνητα ή αυτοματοποιημένα.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Ξεκινήστε συναλλαγές', 'text' => 'Εισέλθετε στην αγορά με αυτοπεποίθηση χρησιμοποιώντας δεδομένα σε πραγματικό χρόνο και AI insights.'],
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
            'name' => $site . ' AI πλατφόρμα συναλλαγών',
            'description' => $site . ' κινητή διεπαφή trading με ζωντανό crypto γράφημα BTC/USDT και εργαλεία χαρτοφυλακίου',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | AI πλατφόρμα συναλλαγών — προβολή κινητού γραφήματος',
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
