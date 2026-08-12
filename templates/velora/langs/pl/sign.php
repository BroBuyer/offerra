<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Rejestracja');
$page_description = 'Utwórz konto ' . SITE_NAME . ' i zacznij handlować kryptowalutami, forex i innymi rynkami.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Strona główna', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Rejestracja', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Zacznij</p>
      <h1>Otwórz konto tradingowe</h1>
      <p class="lead">Minimalny depozyt <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Rynki na żywo po weryfikacji.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>Utwórz konto</span>
          <span class="live-pill">Bezpieczne</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = 'Podaj swoje dane';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
