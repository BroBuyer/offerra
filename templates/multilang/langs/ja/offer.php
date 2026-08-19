<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('オファー');
$page_description = 'Choose your ' . SITE_NAME . ' plan — start with a ' . MIN_DEPOSIT . ' ' . CURRENCY . ' minimum deposit and unlock the full 取引プラットフォーム.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'オファー', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">オファー</p>
      <h1>Get your portfolio tracker — free with signup</h1>
      <p class="lead">Start with <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Scale when you're ready.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Starter access</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimum deposit · Full platform · AI signals · 24時間サポート</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">What's included</div>
          <div class="specs-value">Live charts, multi-market trading, portfolio tracker, guided onboarding</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Funding</div>
          <div class="specs-value">Card, bank transfer, PayPal, e-wallets</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Withdrawals</div>
          <div class="specs-value">Anytime · 1–3 business days · Fees shown upfront</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Devices</div>
          <div class="specs-value">Web, tablet, mobile — no download required</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Claim your offer now';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
