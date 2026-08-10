<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Tilmeld dig');
$page_description = 'Opret din ' . SITE_NAME . '-konto, og begynd at handle crypto, forex og andre markeder.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Hjem', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Tilmeld dig', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kom i gang</p>
      <h1>Åbn din handelskonto</h1>
      <p class="lead">Minimumsindskud <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Live markeder efter verificering.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>Opret konto</span>
          <span class="live-pill">Sikker</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = 'Indtast dine oplysninger';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
