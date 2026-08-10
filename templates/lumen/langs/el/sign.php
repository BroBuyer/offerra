<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Εγγραφή');
$page_description = 'Δημιουργήστε τον λογαριασμό ' . SITE_NAME . ' και ξεκινήστε να επενδύετε με καθαρή καθοδήγηση ΤΝ.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Ξεκινήστε</p>
      <h1>Ανοίξτε τον επενδυτικό σας λογαριασμό</h1>
      <p class="lead">Ελάχιστη κατάθεση <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Ζωντανές αγορές μετά από σύντομη επαλήθευση.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Εισαγάγετε τα στοιχεία σας';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
