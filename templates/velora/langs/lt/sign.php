<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registruotis');
$page_description = 'Sukurkite savo' . SITE_NAME . 'sąskaitą ir pradėkite prekiauti vadovaudamiesi aiškiomis AI gairėmis.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Pradėkite</p>
      <h1>Susikurkite paskyrą</h1>
      <p class="lead">Minimalus depozitas<?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Trunka mažiau nei 3 minutes.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Įveskite savo duomenis';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
