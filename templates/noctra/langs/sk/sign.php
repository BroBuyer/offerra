<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrácia');
$page_description = 'Vytvorte účet u ' . SITE_NAME . ' a začnite obchodovať krypto, forex a ďalšie trhy.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Domov', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Registrácia', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Začať</p>
      <h1>Otvorte obchodní účet</h1>
      <p class="lead">Minimálny vklad <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Živé trhy po overení.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>Vytvoriť účet</span>
          <span class="live-pill">Bezpečné</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = 'Zadajte svoje údaje';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
