<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registracija');
$page_description = 'Otvorite račun kod ' . SITE_NAME . ' i počnite trgovati kriptovalutama, forexom i drugim tržištima.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Početna', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Registracija', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Započnite</p>
      <h1>Otvorite trgovački račun</h1>
      <p class="lead">Minimalni depozit <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Živa tržišta nakon verifikacije.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>Otvorite račun</span>
          <span class="live-pill">Sigurno</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = 'Unesite svoje podatke';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
