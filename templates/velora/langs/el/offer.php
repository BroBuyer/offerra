<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Τιμολόγηση');
$page_description = 'Ξεκινήστε στο ' . SITE_NAME . ' από ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — διαφανής χρηματοδότηση και πλήρης πρόσβαση στην πλατφόρμα.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Τιμολόγηση</p>
      <h1>Ξεκινήστε από <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Ένα απλό σημείο εισόδου. Πλήρης πρόσβαση στην πλατφόρμα μετά τη χρηματοδότηση — συμπεριλαμβανομένων AI insights και ζωντανών αγορών.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Πρόσβαση λογαριασμού</h2>
        <p class="prose" style="margin-bottom:18px">
          Ελάχιστη κατάθεση <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Γραφήματα, εργαλεία και AI καθοδήγηση ξεκλειδώνουν μόλις χρηματοδοτηθεί ο λογαριασμός σας.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Δημιουργήστε λογαριασμό';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
