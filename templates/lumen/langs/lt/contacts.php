<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Susisiekite');
$page_description = 'Susisiekite su ' . SITE_NAME . ' palaikymo komanda – padedame finansuoti, patvirtinti ir pradėti.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Susisiekite</p>
      <h1>Esame čia, kad padėtume</h1>
      <p class="lead">Jei turite klausimų apie paskyrą, indėlius ar AI įrankius, kreipkitės bet kuriuo metu.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem;">Palaikymas</h2>
        <p class="prose">Parašykite mums el. laišką adresu {email}. Įprastas atsako laikas yra mažiau nei kelios valandos.</p>
        <a href="sign.php" class="btn btn-primary">Atidarykite paskyrą</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
