<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Reģistrācija');
$page_description = 'Izveidojiet ' . SITE_NAME . ' kontu un sāciet ieguldīt ar skaidru AI vadību.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Sāciet</p>
      <h1>Atveriet ieguldījumu kontu</h1>
      <p class="lead">Minimālā iemaksa <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Tiešraides tirgi pēc īsas verifikācijas.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Ievadiet savus datus';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
