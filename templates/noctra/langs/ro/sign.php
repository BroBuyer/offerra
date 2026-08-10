<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Înregistrare');
$page_description = 'Creează-ți contul la ' . SITE_NAME . ' și începe să tranzacționezi crypto, forex și alte piețe.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Acasă', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Înregistrare', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Începe</p>
      <h1>Deschide contul de trading</h1>
      <p class="lead">Depozit minim <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Piețe live după verificare.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>Creează cont</span>
          <span class="live-pill">Securizat</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = 'Introdu datele tale';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
