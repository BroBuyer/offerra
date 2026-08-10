<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Cenník');
$page_description = 'Začnite na ' . SITE_NAME . ' od ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — transparentné financovanie a plný prístup k platforme.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Cenník</p>
      <h1>Začať od <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Jeden jednoduchý vstup. Po financovaní plný prístup — vrátane AI poznatkov a živých trhov.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Prístup k účtu</h2>
        <p class="prose">
          Minimálny vklad <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Grafy, nástroje a vedenie AI sa odomknú po financovaní účtu.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Vytvoriť účet';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
