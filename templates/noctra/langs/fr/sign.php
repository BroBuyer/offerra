<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Inscription');
$page_description = 'Créez votre compte ' . SITE_NAME . ' et commencez à trader la crypto, le forex et d\'autres marchés.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Inscription', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Pour commencer</p>
      <h1>Ouvrez votre compte de trading</h1>
      <p class="lead">Dépôt minimum <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Marchés en direct après vérification.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>Créer un compte</span>
          <span class="live-pill">Sécurisé</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = 'Entrez vos informations';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
