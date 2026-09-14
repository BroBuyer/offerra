<?php
$schema = [
  '@context' => 'https://schema.org',
  '@graph' => [
    [
      '@type' => ['FinancialService', 'Organization'],
      '@id' => rtrim(SITE_URL, '/') . '/#org',
      'name' => SITE_NAME,
      'url' => rtrim(SITE_URL, '/') . '/',
      'description' => 'AI padedama investavimo platforma, suporuojanti kiekvieną narį su asmeniniu finansų analitiku.',
      'areaServed' => 'Lithuania',
      'logo' => page_url('static/img/icons/apple-touch-icon.png'),
      'image' => page_url('static/img/og.webp'),
      'contactPoint' => [
        '@type' => 'SusisiekitePoint',
        'contactType' => 'klientų aptarnavimas',
        'email' => SUPPORT_EMAIL,
        'availableLanguage' => 'lt',
      ],
    ],
    [
      '@type' => 'WebSite',
      '@id' => rtrim(SITE_URL, '/') . '/#website',
      'name' => SITE_NAME,
      'url' => rtrim(SITE_URL, '/') . '/',
      'inLanguage' => 'lt',
      'publisher' => ['@id' => rtrim(SITE_URL, '/') . '/#org'],
    ],
    [
      '@type' => 'WebPage',
      '@id' => $page_canonical . '#webpage',
      'url' => $page_canonical,
      'name' => $page_title,
      'description' => $page_description,
      'inLanguage' => 'lt',
      'isPartOf' => ['@id' => rtrim(SITE_URL, '/') . '/#website'],
      'about' => ['@id' => rtrim(SITE_URL, '/') . '/#org'],
    ],
  ],
];
?>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) ?></script>
