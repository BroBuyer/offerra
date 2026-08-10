<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Prijzen');
$page_description = 'Start op ' . SITE_NAME . ' vanaf ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — transparante funding en volledige platformtoegang.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Prijzen</p>
      <h1>Start vanaf <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Eén eenvoudige instap. Volledige toegang na funding — inclusief AI-inzichten en live markten.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Accounttoegang</h2>
        <p class="prose">
          Minimale storting <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Grafieken, tools en AI-begeleiding worden vrijgegeven zodra uw account is gefinancierd.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Maak uw account';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
