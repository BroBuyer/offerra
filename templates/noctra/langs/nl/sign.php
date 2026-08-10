<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registreren');
$page_description = 'Maak uw ' . SITE_NAME . '-account aan en begin met handelen in crypto, forex en andere markten.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Registreren', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Starten</p>
      <h1>Open uw tradingaccount</h1>
      <p class="lead">Minimale storting <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Live markten na verificatie.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>Account aanmaken</span>
          <span class="live-pill">Veilig</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = 'Vul uw gegevens in';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
