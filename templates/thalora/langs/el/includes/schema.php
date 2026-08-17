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
        'description' => 'Αποκτήστε πρόσβαση σε κρυπτονομίσματα, forex και παγκόσμια περιουσιακά στοιχεία από μία πλατφόρμα. ' . $site . ' συνδυάζει ζωντανά αναλυτικά στοιχεία, υποστηριζόμενη αυτοματοποίηση και εξειδικευμένη υποστήριξη.',
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
        'description' => $site . ' — πλατφόρμα συναλλαγών με τεχνητή νοημοσύνη, ζωντανά αναλυτικά στοιχεία, υποστηριζόμενη αυτοματοποίηση και πρόσβαση σε πολλές αγορές.',
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
                'name' => 'Ποια είναι τα βήματα για να ξεκινήσετε συναλλαγές;',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Εγγραφείτε με τα βασικά σας στοιχεία, επιβεβαιώστε το email σας και χρηματοδοτήστε τον λογαριασμό με τουλάχιστον ' . money_min() . '. Ξεκλειδώνετε ζωντανά γραφήματα, εργαλεία συναλλαγών, ανάλυση αγοράς και εξειδικευμένη υποστήριξη.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Είναι το ' . $site . ' αξιόπιστο για τη διαχείριση των χρημάτων και των στοιχείων μου;',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Οι συνεδρίες προστατεύονται με κρυπτογράφηση SSL, είναι διαθέσιμος ο έλεγχος ταυτότητας δύο παραγόντων και οι χρηματοοικονομικές συναλλαγές διεκπεραιώνονται μέσω αξιόπιστων συνεργατών. Οι πρακτικές απορρήτου περιγράφονται στον ιστότοπο.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Πόσο γρήγορα μπορώ να αναλάβω τα κεφάλαιά μου;',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Οι αναλήψεις μπορούν να ζητηθούν ανά πάσα στιγμή από την πύλη του λογαριασμού σας. Η επεξεργασία διαρκεί συνήθως 1 έως 3 εργάσιμες ημέρες ανάλογα με τη μέθοδο. Τέλη και χρόνοι εμφανίζονται πριν επιβεβαιώσετε.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Απαιτείται εμπειρία συναλλαγών πριν ξεκινήσετε;',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Δεν απαιτείται προηγούμενη εμπειρία συναλλαγών. Υποστήριξη onboarding, οδηγοί και εργαλεία ενισχυμένα με τεχνητή νοημοσύνη σας βοηθούν να μάθετε με τον δικό σας ρυθμό.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Πώς να ξεκινήσετε συναλλαγές στο ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Δημιουργήστε τον λογαριασμό σας', 'text' => 'Εγγραφείτε με τα βασικά σας στοιχεία και αποκτήστε ασφαλή πρόσβαση στην πλατφόρμα.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Επαληθεύστε το email σας', 'text' => 'Επιβεβαιώστε το email σας για να ξεκλειδώσετε πλήρη πρόσβαση στην πλατφόρμα.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Χρηματοδοτήστε τον λογαριασμό σας', 'text' => 'Καταθέστε τουλάχιστον ' . money_min() . ' μέσω τραπεζικής μεταφοράς, κάρτας ή ηλεκτρονικού πορτοφολιού.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Ορίστε τη στρατηγική σας', 'text' => 'Επιλέξτε επίπεδο κινδύνου και προτιμήσεις συναλλαγών — χειροκίνητα ή αυτοματοποιημένα.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Ξεκινήστε τις συναλλαγές', 'text' => 'Μπείτε στην αγορά με αυτοπεποίθηση, χρησιμοποιώντας δεδομένα πραγματικού χρόνου και πληροφορίες τεχνητής νοημοσύνης.'],
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
            'name' => $site . ' — πλατφόρμα συναλλαγών με τεχνητή νοημοσύνη',
            'description' => $site . ' — διεπαφή συναλλαγών για κινητά με ζωντανό γράφημα κρυπτονομισμάτων BTC/USDT και εργαλεία χαρτοφυλακίου',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Πλατφόρμα συναλλαγών με τεχνητή νοημοσύνη — προβολή γραφήματος για κινητά',
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
