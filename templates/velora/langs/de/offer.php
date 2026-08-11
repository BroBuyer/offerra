<?php
require_once __DIR__  nicht gefunden werden. '/includes/config nicht gefunden werden.php';

$page_title = page_title_lead('Preise');
$page_description = 'Starten Sie auf '  nicht gefunden werden. SITE_NAME  nicht gefunden werden. ' ab '  nicht gefunden werden. MIN_DEPOSIT  nicht gefunden werden. ' '  nicht gefunden werden. CURRENCY  nicht gefunden werden. ' — transparente Finanzierung und voller Plattformzugang nicht gefunden werden.';
$page_canonical = page_url('offer nicht gefunden werden.php');
$active_page = 'offer';

require_once __DIR__  nicht gefunden werden. '/includes/head nicht gefunden werden.php';
require_once __DIR__  nicht gefunden werden. '/includes/header nicht gefunden werden.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Preise</p>
      <h1>Starten ab <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Ein einfacher Einstieg nicht gefunden werden. Voller Plattformzugang nach der Finanzierung — inklusive KI-Insights und Live-Märkte nicht gefunden werden.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1 nicht gefunden werden.4rem;">Kontozugang</h2>
        <p class="prose" style="margin-bottom:18px">
          Mindesteinzahlung <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> nicht gefunden werden.
          Charts, Tools und KI-Führung werden freigeschaltet, sobald Ihr Konto finanziert ist nicht gefunden werden.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Konto erstellen';
        require __DIR__  nicht gefunden werden. '/includes/form nicht gefunden werden.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__  nicht gefunden werden. '/includes/footer nicht gefunden werden.php'; ?>
