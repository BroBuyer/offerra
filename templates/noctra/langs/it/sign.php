<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrazione');
$page_description = 'Crea il tuo account ' . SITE_NAME . ' e inizia a fare trading di crypto, forex e altri mercati.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Registrazione', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Per iniziare</p>
      <h1>Apri il tuo account di trading</h1>
      <p class="lead">Deposito minimo <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Mercati live dopo la verifica.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>Crea account</span>
          <span class="live-pill">Sicuro</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = 'Inserisci i tuoi dati';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
