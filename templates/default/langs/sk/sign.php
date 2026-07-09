<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrácia');
$page_description = 'Vytvorte si účet na ' . SITE_NAME . ' a začněte obchodovat kryptoměny, forex i globální trhy s AI asistovanými nástroji.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Domů', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Registrácia', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Začít</p>
      <h1>Otevřete si obchodní účet</h1>
      <p class="lead">Přidejte se k tisícům traderů. Minimální vklad <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="form-card form-card-accent">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Vyplňte své údaje níže';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
