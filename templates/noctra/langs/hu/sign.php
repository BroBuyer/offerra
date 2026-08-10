<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Regisztráció');
$page_description = 'Hozza létre fiókját a(z) ' . SITE_NAME . ' oldalon, és kezdjen kriptóval, forexszel és más piacokkal kereskedni.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Kezdőlap', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Regisztráció', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kezdés</p>
      <h1>Nyissa meg kereskedési fiókját</h1>
      <p class="lead">Minimális befizetés <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Élő piacok az ellenőrzés után.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>Fiók létrehozása</span>
          <span class="live-pill">Biztonságos</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = 'Adja meg adatait';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
