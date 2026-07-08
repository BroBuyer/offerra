<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registracija');
$page_description = 'Stvorite račun na ' . SITE_NAME . ' i počnite trgovati kripto, forex i globalnim tržištima uz alate s AI podrškom.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Početna', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Registracija', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Započni</p>
      <h1>Otvorite svoj trgovački račun</h1>
      <p class="lead">Pridružite se tisućama trgovaca. Minimalni depozit <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="form-card form-card-accent">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Unesite svoje podatke u nastavku';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
