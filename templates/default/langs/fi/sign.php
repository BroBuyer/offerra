<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Rekisteröidy');
$page_description = 'Luo ' . SITE_NAME . '-tilisi ja aloita kaupankäynti kryptolla, forexillä ja maailmanmarkkinoilla tekoälytyökaluilla.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Etusivu', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Rekisteröidy', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Aloita</p>
      <h1>Avaa kaupankäyntitilisi</h1>
      <p class="lead">Liity tuhansien treidaajien joukkoon. Vähimmäistalletus <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="form-card form-card-accent">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Syötä tietosi alle';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
