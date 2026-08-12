<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Εγγραφή');
$page_description = 'Δημιουργήστε τον ' . SITE_NAME . ' λογαριασμό σας και ξεκινήστε συναλλαγές με σαφή AI καθοδήγηση.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Ξεκινήστε</p>
      <h1>Δημιουργήστε λογαριασμό</h1>
      <p class="lead">Ελάχιστη κατάθεση <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Διαρκεί λιγότερο από 3 λεπτά.</p>
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
