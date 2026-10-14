<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registracija');
$page_description = 'Izradite ' . SITE_NAME . ' račun i počnite ulagati uz jasno AI vodstvo.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Započnite</p>
      <h1>Otvorite investicijski račun</h1>
      <p class="lead">Minimalni depozit <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Tržišta uživo nakon kratke provjere.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Unesite svoje podatke';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
