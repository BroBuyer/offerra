<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registo');
$page_description = 'Crie a sua conta ' . SITE_NAME . ' e comece a negociar cripto, forex e outros mercados.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Início', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Registo', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Começar</p>
      <h1>Abra a sua conta de trading</h1>
      <p class="lead">Depósito mínimo <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Mercados em direto após verificação.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>Criar conta</span>
          <span class="live-pill">Seguro</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = 'Introduza os seus dados';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
