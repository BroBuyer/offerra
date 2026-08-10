<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Kontaktirajte podršku ' . SITE_NAME . ' — pomažemo s financiranjem, provjerom i početkom.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Tu smo da pomognemo</h1>
      <p class="lead">Pitanja o računu, uplatama ili AI alatima — javite se bilo kada.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem;">Podrška</h2>
        <p class="prose">Pišite nam na <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Tipično vrijeme odgovora je nekoliko sati.</p>
        <a href="sign.php" class="btn btn-primary">Otvorite račun</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
