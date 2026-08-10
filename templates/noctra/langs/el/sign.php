<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Εγγραφή');
$page_description = 'Δημιουργήστε τον ' . SITE_NAME . ' λογαριασμό σας και ξεκινήστε συναλλαγές crypto, forex και άλλων αγορών.';
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
      <h1>Ανοίξτε τον λογαριασμό συναλλαγών σας</h1>
      <p class="lead">Ελάχιστη κατάθεση <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Ζωντανές αγορές μετά την επαλήθευση.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="board-card">
        <div class="board-card-head">
          <span>Δημιουργία λογαριασμού</span>
          <span class="live-pill">Ασφαλές</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'signup-form';
          $form_heading = 'Εισαγάγετε τα στοιχεία σας';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
