<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Über die Plattform');
$page_description = 'Sehen Sie, wie ' . SITE_NAME . ' Trading klar hält — mit KI-Insights, latenzarmen Feeds und einem ruhigen Workspace.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Über uns</p>
      <h1>Institutionelle KI-Architektur, zugänglich gemacht</h1>
      <p class="lead">Ein fokussierter Workspace für Krypto- und Multi-Asset-Trading — von KI geführt, für Klarheit designed.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>KI, die nützlich bleibt</h2>
        <p class="lead">
          Insights erscheinen, wenn sie helfen — kurz, lesbar und leicht umsetzbar.
          Sie bestätigen jeden Trade selbst.
        </p>
        <ul class="feature-bullets">
          <li>Marktzusammenfassungen in klarer Sprache</li>
          <li>Vorgeschlagene Watchlists für Einsteiger</li>
          <li>Erinnerungen, bevor Sie eine Position dimensionieren</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Konto eröffnen</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
