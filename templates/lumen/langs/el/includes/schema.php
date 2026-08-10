<?php
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
        'description' => 'Καθαρή επενδυτική πλατφόρμα με υποστήριξη ΤΝ για αγορές crypto και πολλαπλών περιουσιακών στοιχείων.',
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
        'description' => 'Απλή πλατφόρμα επενδύσεων ΤΝ με ζωντανές αγορές, καθοδηγούμενες πληροφορίες και ήρεμο χώρο συναλλαγών.',
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
                    'text' => 'Δημιουργήστε λογαριασμό σε λίγα λεπτά, ολοκληρώστε σύντομο βήμα επαλήθευσης και χρηματοδοτήστε με ελάχιστη κατάθεση \\' . MIN_DEPOSIT . \\' \\' . CURRENCY . \\'. Ξεκλειδώνετε ολόκληρη την πλατφόρμα, συμπεριλαμβανομένων ζωντανών διαγραμμάτων και εργαλείων.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Είναι ασφαλή τα χρήματα και τα δεδομένα μου;',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Προστατεύουμε τους λογαριασμούς με κρυπτογράφηση SSL, έλεγχο ταυτότητας δύο παραγόντων και ασφαλή διαχείριση κεφαλαίων μέσω αξιόπιστων παρόχων πληρωμών. Τα προσωπικά δεδομένα διαχειρίζονται βάσει αυστηρών πολιτικών ασφαλείας.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Πότε μπορώ να αποσύρω κέρδη;',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Οι αναλήψεις μπορούν να ζητηθούν οποιαδήποτε στιγμή από τον πίνακα ελέγχου. Η επεξεργασία διαρκεί συνήθως 1–3 εργάσιμες ημέρες ανάλογα με τη μέθοδο. Τέλη και χρονοδιαγράμματα εμφανίζονται εκ των προτέρων.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Χρειάζομαι εμπειρία συναλλαγών;',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Δεν απαιτείται προηγούμενη εμπειρία. Καθοδηγούμενη ένταξη, απλά σεμινάρια και εργαλεία με ΤΝ σας βοηθούν με τον δικό σας ρυθμό — με υποστήριξη 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Πώς να ξεκινήσετε συναλλαγές με ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Ανοίξτε τον λογαριασμό σας', 'text' => 'Εγγραφείτε με βασικά στοιχεία και αποκτήστε ασφαλή πρόσβαση στην πλατφόρμα.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Επαληθεύστε το email σας', 'text' => 'Επιβεβαιώστε το email σας για να ξεκλειδώσετε πλήρη πρόσβαση.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Χρηματοδοτήστε τον λογαριασμό', 'text' => 'Καταθέστε τουλάχιστον \\' . MIN_DEPOSIT . \\' \\' . CURRENCY . \\' μέσω τραπεζικής μεταφοράς, κάρτας ή e-wallet.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Ορίστε τη στρατηγική σας', 'text' => 'Επιλέξτε επίπεδο κινδύνου και προτιμήσεις — χειροκίνητα ή αυτοματοποιημένα.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Ξεκινήστε τις συναλλαγές', 'text' => 'Μπείτε στην αγορά με σιγουριά χρησιμοποιώντας δεδομένα πραγματικού χρόνου και πληροφορίες ΤΝ.'],
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
            'name' => $site . ' AI Trading Platform',
            'description' => $site . ' διεπαφή συναλλαγών για κινητά με ζωντανό διάγραμμα crypto BTC/USDT και εργαλεία χαρτοφυλακίου',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Πλατφόρμα συναλλαγών ΤΝ — προβολή διαγράμματος κινητού',
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
