<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Preços');
$page_description = 'Comece em ' . SITE_NAME . ' a partir de ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — financiamento transparente e acesso completo à plataforma.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Preços</p>
      <h1>Comece a partir de <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Uma entrada simples. Acesso completo à plataforma após o financiamento — incluindo insights de IA e mercados em direto.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Acesso à conta</h2>
        <p class="prose" style="margin-bottom:18px">
          Depósito mínimo <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Gráficos, ferramentas e orientação de IA desbloqueiam-se assim que a conta estiver financiada.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Crie a sua conta';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
