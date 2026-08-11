<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Precios');
$page_description = 'Empieza en ' . SITE_NAME . ' desde ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — financiación transparente y acceso total a la plataforma.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Precios</p>
      <h1>Empieza desde <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Un acceso simple. Acceso total a la plataforma después de financiar — incluidos insights de IA y mercados en vivo.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Acceso a la cuenta</h2>
        <p class="prose" style="margin-bottom:18px">
          Depósito mínimo <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Los gráficos, las herramientas y la guía de IA se desbloquean cuando tu cuenta esté financiada.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Crea tu cuenta';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
