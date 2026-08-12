<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Prețuri');
$page_description = 'Începe pe ' . SITE_NAME . ' de la ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — finanțare transparentă și acces complet la platformă.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Prețuri</p>
      <h1>Începe de la <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Un singur punct de intrare simplu. Acces complet la platformă după finanțare — inclusiv insight-uri AI și piețe live.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Acces la cont</h2>
        <p class="prose" style="margin-bottom:18px">
          Depozit minim <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Graficele, instrumentele și ghidarea AI se deblochează odată ce contul este finanțat.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Creează-ți contul';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
