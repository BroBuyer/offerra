<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Εγγραφή');
$page_description = 'Δημιουργήστε τον λογαριασμό σας στην ' . SITE_NAME . ' και ξεκινήστε trading σε crypto, forex και παγκόσμιες αγορές με εργαλεία υποστηριζόμενα από AI.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Αρχική', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Εγγραφή', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Ξεκινήστε</p>
      <h1>Ανοίξτε τον λογαριασμό trading σας</h1>
      <p class="lead">Γίνετε μέλος χιλιάδων traders. Ελάχιστη κατάθεση <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="form-card form-card-accent">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Συμπληρώστε τα στοιχεία σας παρακάτω';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
