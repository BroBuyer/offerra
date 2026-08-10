<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('About the platform');
$page_description = 'See how ' . SITE_NAME . ' keeps trading clear with AI insights, low-latency feeds, and a calm workspace.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">About</p>
      <h1>Institutional AI architecture, made approachable</h1>
      <p class="lead">A focused workspace for crypto and multi-asset trading — guided by AI, designed for clarity.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>AI that stays useful</h2>
        <p class="lead">
          Insights appear when they help — short, readable, and easy to act on.
          You always confirm every trade yourself.
        </p>
        <ul class="feature-bullets">
          <li>Market summaries in plain language</li>
          <li>Suggested watchlists for beginners</li>
          <li>Reminders before you size a position</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Open account</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
