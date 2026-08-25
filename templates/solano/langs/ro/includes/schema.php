<?php
$schema = [
  '@context' => 'https://schema.org',
  '@graph' => [
    [
      '@type' => ['FinancialService', 'Organization'],
      '@id' => rtrim(SITE_URL, '/') . '/#org',
      'name' => SITE_NAME,
      'url' => rtrim(SITE_URL, '/') . '/',
      'description' => 'Platformă de investiții asistată de AI, care asociază fiecărui membru un analist financiar personal.',
      'areaServed' => 'Romania',
      'logo' => page_url('static/img/icons/apple-touch-icon.png'),
      'image' => page_url('static/img/og.webp'),
      'contactPoint' => [
        '@type' => 'ContactPoint',
        'contactType' => 'suport clienți',
        'email' => SUPPORT_EMAIL,
        'availableLanguage' => 'ro',
      ],
    ],
    [
      '@type' => 'WebSite',
      '@id' => rtrim(SITE_URL, '/') . '/#website',
      'name' => SITE_NAME,
      'url' => rtrim(SITE_URL, '/') . '/',
      'inLanguage' => 'ro',
      'publisher' => ['@id' => rtrim(SITE_URL, '/') . '/#org'],
    ],
    [
      '@type' => 'WebPage',
      '@id' => $page_canonical . '#webpage',
      'url' => $page_canonical,
      'name' => $page_title,
      'description' => $page_description,
      'inLanguage' => 'ro',
      'isPartOf' => ['@id' => rtrim(SITE_URL, '/') . '/#website'],
      'about' => ['@id' => rtrim(SITE_URL, '/') . '/#org'],
    ],
  ],
];
?>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) ?></script>
