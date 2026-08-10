<?php
declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Η σελίδα δεν βρέθηκε');
$page_description = 'Η σελίδα που ζητήσατε δεν είναι διαθέσιμη. Επιστρέψτε στο ' . SITE_NAME . ' για να συνεχίσετε τις συναλλαγές.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="not-found">
    <div class="container">
      <div class="not-found-code" aria-hidden="true">404</div>
      <p class="eyebrow" style="justify-content: center;">Η σελίδα δεν βρέθηκε</p>
      <h1>Αυτή η σελίδα δεν υπάρχει</h1>
      <p class="lead">
        Ο σύνδεσμος μπορεί να είναι παλιός ή λανθασμένος. Επιστρέψτε στην αρχική για να συνεχίσετε.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Επιστροφή στην αρχική</a>
        <a href="contacts.php" class="btn btn-outline">Επικοινωνία με υποστήριξη</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
