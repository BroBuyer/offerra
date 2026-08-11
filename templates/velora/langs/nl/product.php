<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Over het platform');
$page_description = 'Bekijk hoe ' . SITE_NAME . ' handelen overzichtelijk houdt met AI-inzichten, feeds met lage latentie en een rustige werkruimte.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Over ons</p>
      <h1>Institutionele AI-architectuur, toegankelijk gemaakt</h1>
      <p class="lead">Een gerichte werkruimte voor crypto- en multi-assethandel — begeleid door AI, ontworpen voor helderheid.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>AI die nuttig blijft</h2>
        <p class="lead">
          Inzichten verschijnen wanneer ze helpen — kort, leesbaar en makkelijk om naar te handelen.
          U bevestigt altijd elke transactie zelf.
        </p>
        <ul class="feature-bullets">
          <li>Marktsamenvattingen in gewone taal</li>
          <li>Voorgestelde watchlists voor beginners</li>
          <li>Herinneringen voordat u een positie dimensioneert</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Account openen</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
