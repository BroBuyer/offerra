<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Datenschutzerklärung');
$page_description = 'Erfahren Sie, wie ' . SITE_NAME . ' Ihre personenbezogenen Daten erhebt, verwendet und schützt.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Datenschutzerklärung</h1>
      <p class="lead">Letzte Aktualisierung: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>This Datenschutzerklärung describes how <?= e(SITE_NAME) ?> ("we", "us") collects and processes personal information when you use our website and services.</p>

      <h2>Information we collect</h2>
      <p>We may collect: name, email address, phone number, country of residence, IP address, and information you provide through forms or support requests.</p>

      <h2>How we use your information</h2>
      <ul>
        <li>To create and manage your account</li>
        <li>To provide trading platform access and customer support</li>
        <li>To comply with legal and regulatory obligations</li>
        <li>To improve our services and prevent fraud</li>
      </ul>

      <h2>Data security</h2>
      <p>We implement technical and organisational measures including SSL encryption and access controls to protect your data.</p>

      <h2>Ihre Kontoanfrage bei rights</h2>
      <p>Depending on your jurisdiction, you may have rights to access, correct, or delete your personal data. Kontaktieren Sie den Support von <?= e(SUPPORT_EMAIL) ?> to exercise these rights.</p>

      <h2>Kontakt</h2>
      <p>Questions about this policy? E-mail <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
