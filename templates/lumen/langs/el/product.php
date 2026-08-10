<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Πλατφόρμα');
$page_description = 'Δείτε πώς το ' . SITE_NAME . ' κρατά την επένδυση απλή με πληροφορίες ΤΝ, καθαρή τιμολόγηση και ήρεμο χώρο συναλλαγών.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Πλατφόρμα</p>
      <h1>Ό,τι χρειάζεστε. Τίποτα περιττό.</h1>
      <p class="lead">Ένας εστιασμένος χώρος για επενδύσεις crypto και πολλαπλών περιουσιακών στοιχείων — με καθοδήγηση ΤΝ, σχεδιασμένος για σαφήνεια.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>ΤΝ που μένει στο παρασκήνιο</h2>
        <p class="lead">
          Οι πληροφορίες εμφανίζονται όταν βοηθούν — σύντομες, ευανάγνωστες και εύκολες στην εφαρμογή. Επιβεβαιώνετε πάντα κάθε συναλλαγή μόνοι σας.
        </p>
        <ul class="feature-list">
          <li>Περιλήψεις αγοράς σε απλή γλώσσα</li>
          <li>Προτεινόμενες λίστες παρακολούθησης για αρχάριους</li>
          <li>Υπενθυμίσεις πριν τον καθορισμό μεγέθους θέσης</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Άνοιγμα λογαριασμού</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
