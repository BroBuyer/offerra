<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Prezzi');
$page_description = 'Inizia con ' . SITE_NAME . ' da ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — finanziamento trasparente e accesso completo alla piattaforma.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Prezzi</p>
      <h1>Inizia da <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Un punto d’ingresso semplice. Accesso completo alla piattaforma dopo il finanziamento — inclusi gli insight IA e i mercati live.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Accesso all’account</h2>
        <p class="prose" style="margin-bottom:18px">
          Deposito minimo <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Grafici, strumenti e guida IA si sbloccano quando il tuo account è finanziato.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Crea il tuo account';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
