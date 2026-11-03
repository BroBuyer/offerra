<?php
$__base = rtrim(SITE_URL, '/');
$__canonical = canonical_url($page_canonical ?? page_url());

$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => ['FinancialService', 'Organization'],
            '@id' => $__base . '/#org',
            'name' => SITE_NAME,
            'url' => $__base . '/',
            'description' => 'AI-powered automated trading platform for ' . geo_country_name() . '.',
            'areaServed' => geo_country_name(),
            'logo' => canonical_url('static/images/logo.svg'),
            'image' => canonical_url(og_image_path()),
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'contactType' => 'customer support',
                'email' => SUPPORT_EMAIL,
                'availableLanguage' => SITE_LANG,
            ],
        ],
        [
            '@type' => 'WebSite',
            '@id' => $__base . '/#website',
            'name' => SITE_NAME,
            'url' => $__base . '/',
            'inLanguage' => SITE_LANG,
            'publisher' => ['@id' => $__base . '/#org'],
        ],
        [
            '@type' => 'WebPage',
            '@id' => $__canonical . '#webpage',
            'url' => $__canonical,
            'name' => $page_title ?? SITE_NAME,
            'description' => $page_description ?? '',
            'inLanguage' => SITE_LANG,
            'isPartOf' => ['@id' => $__base . '/#website'],
            'about' => ['@id' => $__base . '/#org'],
        ],
    ],
];
?>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
