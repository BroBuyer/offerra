<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contact');
$page_description = 'Επικοινωνία ' . SITE_NAME . ' — βοήθεια για λογαριασμό, συναλλαγές και τεχνικά θέματα 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Επικοινωνία</p>
      <h1>Μιλήστε με την υποστήριξη</h1>
      <p class="lead">Ερωτήσεις για λογαριασμό, συναλλαγές και τεχνικά — κάλυψη όλο το 24ωρο.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Υποστήριξη email</h3>
          <p style="margin-bottom: 1rem;">Για λογαριασμό και γενικά αιτήματα:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Χρόνος απόκρισης</h3>
          <p>Τα περισσότερα αιτήματα κλείνουν σε λίγες ώρες. Προτεραιότητα στα ζητήματα live συναλλαγών.</p>
        </article>
        <article class="feature-card">
          <h3>Προτιμάτε self-service;</h3>
          <p style="margin-bottom: 1rem;">Ανοίξτε λογαριασμό σε λίγα λεπτά — χωρίς κλήση.</p>
          <a href="sign.php" class="btn btn-primary">Δημιουργία λογαριασμού</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
