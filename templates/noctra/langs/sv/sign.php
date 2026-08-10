<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrera dig');
$page_description = 'Skapa ditt ' . SITE_NAME . '-konto och börja handla med crypto, forex och andra marknader.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Hem', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Registrera dig', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kom igång</p>
      <h1>Öppna ditt handelskonto</h1>
      <p class="lead">Minsta insättning <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Live marknader efter verifiering.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>Skapa konto</span>
          <span class="live-pill">Säker</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = 'Ange dina uppgifter';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
