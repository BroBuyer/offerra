<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Η σελίδα δεν βρέθηκε');
$page_description = 'Η σελίδα που ζητήσατε δεν βρέθηκε στο ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Η σελίδα δεν βρέθηκε</h1>
      <p class="lead">Αυτός ο σύνδεσμος δεν υπάρχει. Επιστρέψτε στην αρχική ή ανοίξτε λογαριασμό για να ξεκινήσετε.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Αρχική</a>
        <a href="sign.php" class="btn btn-ghost">Άνοιγμα λογαριασμού</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
