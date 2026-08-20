<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Lietošanas noteikumi');
$page_description = 'Read the terms and conditions for using the ' . SITE_NAME . ' tirdzniecības platformas funkcijas and website.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Lietošanas noteikumi</h1>
      <p class="lead">Pēdējoreiz atjaunināts: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>By accessing <?= e(SITE_NAME) ?> you agree to these Lietošanas noteikumi. If you do not agree, please do not use our services.</p>

      <h2>Eligibility</h2>
      <p>You must be at least 18 years old and legally permitted to trade financial instruments in your jurisdiction.</p>

      <h2>Risku atklāšana</h2>
      <p>Trading cryptocurrencies, forex, CFDs, and other financial instruments involves substantial risk of loss. Past performance does not guarantee future results. Only trade with capital you can afford to lose.</p>

      <h2>Account responsibilities</h2>
      <p>You are responsible for maintaining the confidentiality of your account credentials and for all activity under your account.</p>

      <h2>Service availability</h2>
      <p>We strive for continuous availability but do not guarantee uninterrupted access. Maintenance, market conditions, or technical issues may affect service.</p>

      <h2>Limitation of liability</h2>
      <p><?= e(SITE_NAME) ?> is not liable for trading losses or damages arising from use of information on this site. Seek independent financial advice where appropriate.</p>

      <h2>Kontakti</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
