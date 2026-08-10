<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Plattform');
$page_description = 'Sehen Sie, wie ' . SITE_NAME . ' Investieren mit KI-Einblicken, klaren Preisen und einer ruhigen Handelsumgebung einfach hält.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Plattform</p>
      <h1>Alles, was Sie brauchen. Nichts Überflüssiges.</h1>
      <p class="lead">Ein fokussierter Workspace für Krypto- und Multi-Asset-Investments — von KI geführt, für Klarheit gemacht.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>KI im Hintergrund</h2>
        <p class="lead">
          Einblicke erscheinen, wenn sie helfen — kurz, lesbar und umsetzbar. Jeden Trade bestätigen Sie selbst.
        </p>
        <ul class="feature-list">
          <li>Marktzusammenfassungen in klarer Sprache</li>
          <li>Vorgeschlagene Watchlists für Einsteiger</li>
          <li>Erinnerungen vor der Positionsgröße</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Konto eröffnen</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
