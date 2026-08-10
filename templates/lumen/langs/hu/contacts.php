<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kapcsolat');
$page_description = 'Lépjen kapcsolatba a ' . SITE_NAME . ' támogatással — segítünk feltöltésben, ellenőrzésben és az indulásban.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kapcsolat</p>
      <h1>Itt vagyunk, hogy segítsünk</h1>
      <p class="lead">Kérdések a számláról, befizetésekről vagy MI-eszközökről — írjon bármikor.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem;">Támogatás</h2>
        <p class="prose">Írjon a <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a> címre. Tipikus válaszidő néhány óra.</p>
        <a href="sign.php" class="btn btn-primary">Számla nyitása</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
