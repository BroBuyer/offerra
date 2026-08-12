<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Σχετικά με την πλατφόρμα');
$page_description = 'Δείτε πώς ' . SITE_NAME . ' κρατά τις συναλλαγές σαφείς με AI insights, feeds χαμηλής καθυστέρησης και ήρεμο χώρο εργασίας.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Σχετικά</p>
      <h1>Θεσμική AI αρχιτεκτονική, προσιτή για όλους</h1>
      <p class="lead">Εστιασμένος χώρος εργασίας για crypto και multi-asset trading — καθοδηγούμενος από AI, σχεδιασμένος για σαφήνεια.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>AI που παραμένει χρήσιμη</h2>
        <p class="lead">
          Τα insights εμφανίζονται όταν βοηθούν — σύντομα, αναγνώσιμα και εύκολα στην εφαρμογή.
          Επιβεβαιώνετε πάντα κάθε συναλλαγή μόνοι σας.
        </p>
        <ul class="feature-bullets">
          <li>Συνόψεις αγοράς σε απλή γλώσσα</li>
          <li>Προτεινόμενες watchlists για αρχάριους</li>
          <li>Υπενθυμίσεις πριν καθορίσετε μέγεθος θέσης</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Άνοιγμα λογαριασμού</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
