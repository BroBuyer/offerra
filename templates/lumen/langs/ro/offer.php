<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Tarife');
$page_description = 'Începeți pe ' . SITE_NAME . ' de la ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — finanțare transparentă și acces complet la platformă.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Tarife</p>
      <h1>Începeți de la <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Un punct de intrare simplu. Acces complet după finanțare — inclusiv insight-uri AI și piețe live.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Acces la cont</h2>
        <p class="prose">
          Depozit minim <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Graficele, instrumentele și ghidarea AI se deblochează după alimentarea contului.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Creați-vă contul';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
