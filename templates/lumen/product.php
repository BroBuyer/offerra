<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Platform');
$page_description = 'See how ' . SITE_NAME . ' keeps investing simple with AI insights, clear pricing, and a calm trading workspace.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Platform</p>
      <h1>Everything you need. Nothing you don’t.</h1>
      <p class="lead">A focused workspace for crypto and multi-asset investing — guided by AI, designed for clarity.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>AI that stays in the background</h2>
        <p class="lead">
          Insights appear when they help — short, readable, and easy to act on.
          You always confirm every trade yourself.
        </p>
        <ul class="feature-list">
          <li>Market summaries in plain English</li>
          <li>Suggested watchlists for beginners</li>
          <li>Reminders before you size a position</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Open account</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
