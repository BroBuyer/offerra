<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Platform');
$page_description = 'Zie hoe ' . SITE_NAME . ' beleggen eenvoudig houdt met AI-inzichten, heldere prijzen en een rustige handelsomgeving.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Platform</p>
      <h1>Alles wat u nodig heeft. Niets wat u niet nodig heeft.</h1>
      <p class="lead">Een gerichte werkruimte voor crypto- en multi-assetbeleggen — geleid door AI, ontworpen voor helderheid.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>AI die op de achtergrond blijft</h2>
        <p class="lead">
          Inzichten verschijnen wanneer ze helpen — kort, leesbaar en makkelijk om te zetten. U bevestigt elke trade zelf.
        </p>
        <ul class="feature-list">
          <li>Marktsamenvattingen in gewone taal</li>
          <li>Voorgestelde watchlists voor beginners</li>
          <li>Herinneringen vóór u een positie dimensionert</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Account openen</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
