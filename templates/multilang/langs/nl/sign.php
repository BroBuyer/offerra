<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registratie');
$page_description = 'Maak een account aan bij ' . SITE_NAME . ' en start met handelen in crypto, forex en wereldwijde markten met AI-ondersteunde tools.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Registratie', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Starten</p>
      <h1>Open uw tradingaccount</h1>
      <p class="lead">Sluit u aan bij duizenden traders. Minimale storting <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="form-card form-card-accent">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Vul hieronder uw gegevens in';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
