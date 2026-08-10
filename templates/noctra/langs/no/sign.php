<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrer deg');
$page_description = 'Opprett ' . SITE_NAME . '-kontoen din, og begynn å handle krypto, forex og andre markeder.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Hjem', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Registrer deg', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kom i gang</p>
      <h1>Åpne handelskontoen din</h1>
      <p class="lead">Minimumsinnskudd <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Live markeder etter verifisering.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>Opprett konto</span>
          <span class="live-pill">Sikker</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = 'Fyll inn opplysningene dine';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
