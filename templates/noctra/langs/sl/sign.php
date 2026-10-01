<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Prijavite se');
$page_description = 'Ustvarite račun ' . SITE_NAME . ' in začnite trgovati s kriptovalutami, forexom in drugimi trgi.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Domov', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Prijavite se', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Začnite</p>
      <h1>Odprite trgovalni račun</h1>
      <p class="lead">Minimalni depozit <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Trgi v živo po preverjanju.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>Ustvari račun</span>
          <span class="live-pill">Varno</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = 'Vnesite svoje podatke';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
