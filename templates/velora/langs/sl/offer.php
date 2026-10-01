<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Cene');
$page_description = 'Začni naprej' . SITE_NAME . 'od' . MIN_DEPOSIT . ' ' . CURRENCY . '— pregledno financiranje in popoln dostop do platforme.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Cene</p>
      <h1>Začnite od<?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Ena preprosta vstopna točka. Popoln dostop do platforme po financiranju – vključno z vpogledi AI in trgi v živo.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Dostop do računa</h2>
        <p class="prose" style="margin-bottom:18px">
          Minimalni depozit<strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Grafikoni, orodja in navodila za umetno inteligenco se odklenejo, ko je vaš račun financiran.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Ustvarite svoj račun';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
