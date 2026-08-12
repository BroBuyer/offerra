<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ευχαριστούμε');
$page_description = 'Το αίτημα ' . SITE_NAME . ' λογαριασμού σας ελήφθη.';
$page_canonical = page_url('Thanks.php');
$active_page = 'thanks';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <div class="thanks-icon" aria-hidden="true">✓</div>
      <h1>Είστε μέσα.</h1>
      <p class="lead thanks-lead">
        Ευχαριστούμε για την εγγραφή στο <?= e(SITE_NAME) ?>.
        Η ομάδα μας θα επικοινωνήσει σύντομα για να ολοκληρώσει τη ρύθμιση του λογαριασμού σας — κρατήστε το τηλέφωνο κοντά.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
