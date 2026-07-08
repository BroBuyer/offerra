<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Inscription');
$page_description = 'Créez votre compte sur ' . SITE_NAME . ' et commencez à trader les cryptomonnaies, le forex et les marchés mondiaux avec des outils assistés par IA.';
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
      <p class="eyebrow">Commencer</p>
      <h1>Ouvrez votre compte de trading</h1>
      <p class="lead">Rejoignez des milliers de traders. Dépôt minimum <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="form-card form-card-accent">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Saisissez vos coordonnées ci-dessous';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
