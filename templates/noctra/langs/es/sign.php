<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registro');
$page_description = 'Crea tu cuenta en ' . SITE_NAME . ' y empieza a operar con crypto, forex y otros mercados.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Inicio', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Registro', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Empezar</p>
      <h1>Abre tu cuenta de trading</h1>
      <p class="lead">Depósito mínimo <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Mercados en vivo tras la verificación.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>Crear cuenta</span>
          <span class="live-pill">Seguro</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = 'Introduce tus datos';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
