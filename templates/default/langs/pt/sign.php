<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registo');
$page_description = 'Crie a sua conta na ' . SITE_NAME . ' e comece a operar cripto, forex e mercados globais com ferramentas assistidas por IA.';
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
      <p class="lead">Junte-se a milhares de traders. Depósito mínimo <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="form-card form-card-accent">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Introduza os seus dados abaixo';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
