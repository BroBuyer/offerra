<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrering');
$page_description = 'Opprett og konto bij ' . SITE_NAME . ' og start å handle krypto, forex og globale markeder med AI-støttede verktøy.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Hjem', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Registrering', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kom i gang</p>
      <h1>Åpne handelskontoen din</h1>
      <p class="lead">Bli med tusenvis av tradere. Minsteinnskudd <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="form-card form-card-accent">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Fyll inn opplysningene dine nedenfor';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
