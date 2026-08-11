<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Preise');
$page_description = 'Starten Sie auf ' . SITE_NAME . ' ab ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — transparente Finanzierung und voller Plattformzugang.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Preise</p>
      <h1>Starten ab <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Ein einfacher Einstieg. Voller Plattformzugang nach der Finanzierung — inklusive KI-Insights und Live-Märkte.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Kontozugang</h2>
        <p class="prose" style="margin-bottom:18px">
          Mindesteinzahlung <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Charts, Tools und KI-Führung werden freigeschaltet, sobald Ihr Konto finanziert ist.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Konto erstellen';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
