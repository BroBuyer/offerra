<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Cenas');
$page_description = 'Sāciet ar ' . SITE_NAME . ' no ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — caurspīdīga finansēšana un pilna platformas piekļuve.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Cenas</p>
      <h1>Sāciet no <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Viens vienkāršs ieejas punkts. Pilna platformas piekļuve pēc finansēšanas — ieskaitot AI ieskatus un reāllaika tirgus.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Konta piekļuve</h2>
        <p class="prose" style="margin-bottom:18px">
          Minimālā iemaksa <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Grafiki, rīki un AI vadība atbloķējas, kad jūsu konts ir finansēts.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Izveidojiet kontu';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
