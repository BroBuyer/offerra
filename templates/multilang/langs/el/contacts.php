<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Επικοινωνία');
$page_description = 'Επικοινωνήστε με την υποστήριξη του ' . SITE_NAME . ' ή την εμπορική μας ομάδα. Είμαστε διαθέσιμοι 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Επικοινωνία</p>
      <h1>Είμαστε εδώ για να σας βοηθήσουμε</h1>
      <p class="lead">Επαγγελματική υποστήριξη 24/7 για ερωτήσεις λογαριασμού, συναλλαγών και τεχνικά θέματα.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Υποστήριξη μέσω email</h3>
          <p style="margin-bottom: 1rem;">Για γενικά αιτήματα και βοήθεια λογαριασμού:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Χρόνοι απόκρισης</h3>
          <p>Απαντάμε στα περισσότερα αιτήματα εντός λίγων ωρών. Τα επείγοντα θέματα που σχετίζονται με συναλλαγές έχουν προτεραιότητα.</p>
        </article>
        <article class="feature-card">
          <h3>Έτοιμοι να ξεκινήσετε;</h3>
          <p style="margin-bottom: 1rem;">Ανοίξτε τον λογαριασμό σας σε λίγα λεπτά, χωρίς ανάγκη τηλεφωνημάτων.</p>
          <a href="sign.php" class="btn btn-primary">Δημιουργία λογαριασμού</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
