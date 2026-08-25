<?php
$schema = [
  '@context' => 'https://schema.org',
  '@graph' => [
    [
      '@type' => ['FinancialService', 'Organization'],
      '@id' => rtrim(SITE_URL, '/') . '/#org',
      'name' => SITE_NAME,
      'url' => rtrim(SITE_URL, '/') . '/',
      'description' => 'Investiční platforma s AI, která každému členovi přiřadí osobního finančního analytika.',
      'areaServed' => 'Czech Republic',
      'logo' => page_url('static/img/icons/apple-touch-icon.png'),
      'image' => page_url('static/img/og.webp'),
      'contactPoint' => [
        '@type' => 'ContactPoint',
        'contactType' => 'zákaznická podpora',
        'email' => SUPPORT_EMAIL,
        'availableLanguage' => 'cs',
      ],
    ],
    [
      '@type' => 'WebSite',
      '@id' => rtrim(SITE_URL, '/') . '/#website',
      'name' => SITE_NAME,
      'url' => rtrim(SITE_URL, '/') . '/',
      'inLanguage' => 'cs',
      'publisher' => ['@id' => rtrim(SITE_URL, '/') . '/#org'],
    ],
    [
      '@type' => 'WebPage',
      '@id' => $page_canonical . '#webpage',
      'url' => $page_canonical,
      'name' => $page_title,
      'description' => $page_description,
      'inLanguage' => 'cs',
      'isPartOf' => ['@id' => rtrim(SITE_URL, '/') . '/#website'],
      'about' => ['@id' => rtrim(SITE_URL, '/') . '/#org'],
    ],
  ],
];
?>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) ?></script>
