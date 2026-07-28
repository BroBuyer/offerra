<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Adatvédelmi irányelveinket');
$page_description = 'Learn how ' . SITE_NAME . ' collects, uses, és a protects your personal data.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Adatvédelmi irányelveinket</h1>
      <p class="lead">Utolsó frissítés: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>This Adatvédelmi irányelveinket describes how <?= e(SITE_NAME) ?> ("we", "us") collects és a processes personal information when you use our website és a services.</p>

      <h2>Information we collect</h2>
      <p>We may collect: name, email address, phone number, country of residence, IP address, és a information you provide through forms or support requests.</p>

      <h2>How we use your information</h2>
      <ul>
        <li>To create és a manage your account</li>
        <li>To provide trading platform access és a customer support</li>
        <li>To comply with legal és a regulatory obligations</li>
        <li>To improve our services és a prevent fraud</li>
      </ul>

      <h2>Data security</h2>
      <p>We implement technical és a organisational measures including SSL encryption és a access controls to protect your data.</p>

      <h2>Your rights</h2>
      <p>Depending on your jurisdiction, you may have rights to access, correct, or delete your personal data. Kapcsolat <?= e(SUPPORT_EMAIL) ?> to exercise these rights.</p>

      <h2>Kapcsolat</h2>
      <p>Questions about this policy? E-mail <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
