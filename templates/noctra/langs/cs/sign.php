<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrace');
$page_description = 'Vytvořte účet u ' . SITE_NAME . ' a začněte obchodovat krypto, forex a další trhy.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Domů', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Registrace', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Začít</p>
      <h1>Otevřete obchodní účet</h1>
      <p class="lead">Minimální vklad <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Živé trhy po ověření.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>Vytvořit účet</span>
          <span class="live-pill">Bezpečné</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = 'Zadejte své údaje';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
