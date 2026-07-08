<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Rejestracja');
$page_description = 'Utwórz konto na ' . SITE_NAME . ' i zacznij handlować kryptowalutami, forexem i rynkami globalnymi z narzędziami wspieranymi przez AI.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Strona główna', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Rejestracja', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Rozpocznij</p>
      <h1>Otwórz konto tradingowe</h1>
      <p class="lead">Dołącz do tysięcy traderów. Minimalna wpłata <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="form-card form-card-accent">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Wypełnij swoje dane poniżej';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
