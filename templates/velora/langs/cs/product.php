<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('O platformě');
$page_description = 'Podívejte se, jak ' . SITE_NAME . ' udržuje obchodování přehledné díky AI insightům, nízkolatenčním feedům a klidnému pracovnímu prostředí.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">O nás</p>
      <h1>Institucionální AI architektura, přístupná pro každého</h1>
      <p class="lead">Zaměřené pracovní prostředí pro krypto a multi-asset obchodování — vedené AI, navržené pro jasnost.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>AI, která zůstává užitečná</h2>
        <p class="lead">
          Insight se objeví, když pomáhá — krátký, čitelný a snadno použitelný.
          Každý obchod vždy potvrzujete sami.
        </p>
        <ul class="feature-bullets">
          <li>Tržní souhrny v jednoduchém jazyce</li>
          <li>Navrhované watchlisty pro začátečníky</li>
          <li>Připomínky před dimenzováním pozice</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Otevřít účet</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
