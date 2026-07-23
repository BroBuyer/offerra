<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Προϊόν');
$page_description = 'Ανακαλύψτε τα εργαλεία trading της ' . SITE_NAME . ' - ανάλυση σε πραγματικό χρόνο, σήματα AI, πρόσβαση σε πολλές αγορές και αυτοματοποιημένες στρατηγικές.';
$page_canonical = page_url('product.php');
$active_page = 'product';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Αρχική', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Προϊόν', 'item' => page_url('product.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Προϊόν</p>
      <h1>Ψηφιακή ανάλυση σχεδιασμένη για traders</h1>
      <p class="lead">Μία πλατφόρμα. Όλες οι αγορές. Εργαλεία που ακολουθούν τον ρυθμό σας.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Γραφήματα σε πραγματικό χρόνο</h3>
          <p>Ζωντανά feeds τιμών, προηγμένοι δείκτες και βάθος αγοράς σε όλα τα υποστηριζόμενα assets.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Μηχανή σημάτων AI</h3>
          <p>Τα μοντέλα machine learning αναδεικνύουν setups υψηλής πιθανότητας με σαφές πλαίσιο για είσοδο και έξοδο.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Σουίτα αυτοματισμού</h3>
          <p>Ρυθμίστε bots με εξατομικευμένη διαχείριση κινδύνου: παρακολουθήστε και βελτιστοποιήστε, ή λειτουργήστε χειροκίνητα παράλληλα.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/><path d="M9 12l2 2 4-4"/></svg>
          </div>
          <h3>Διαχείριση κινδύνου</h3>
          <p>Εργαλεία stop-loss, take-profit και sizing θέσεων ενσωματωμένα σε κάθε λειτουργική ροή εργασίας.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          </div>
          <h3>Παρακολούθηση χαρτοφυλακίου</h3>
          <p>Ενιαία εικόνα θέσεων, P&amp;L και κατανομής μεταξύ crypto και παραδοσιακών αγορών.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
          </div>
          <h3>Κέντρο εκπαίδευσης</h3>
          <p>Πρακτικοί οδηγοί και επεξηγήσεις αγορών για αρχάριους και μεσαίου επιπέδου traders.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="sign.php" class="btn btn-primary">Δοκιμάστε την <?= e(SITE_NAME) ?> δωρεάν</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
