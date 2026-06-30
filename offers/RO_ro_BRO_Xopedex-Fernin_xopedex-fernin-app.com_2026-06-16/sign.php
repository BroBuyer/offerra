<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Înregistrare');
$page_description = 'Creează-ți contul pe ' . SITE_NAME . ' și începe să tranzacționezi cripto, forex și piețe globale cu instrumente asistate de AI.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Acasă', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Înregistrare', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Începe acum</p>
      <h1>Deschide-ți contul de tranzacționare</h1>
      <p class="lead">Alătură-te miilor de traderi. Depunere minimă <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="form-card form-card-accent">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Introdu datele tale mai jos';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
