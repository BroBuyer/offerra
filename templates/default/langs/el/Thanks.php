<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ευχαριστούμε');
$page_description = 'Λάβαμε το αίτημα λογαριασμού σας στην ' . SITE_NAME . '.';
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
      <h1>Έγινε!</h1>
      <p class="lead thanks-lead">
        Ευχαριστούμε που εγγραφήκατε στην <?= e(SITE_NAME) ?>.
        Η ομάδα μας θα επικοινωνήσει σύντομα μαζί σας για να ολοκληρώσει τη ρύθμιση του λογαριασμού σας. Κρατήστε το τηλέφωνό σας κοντά σας.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
