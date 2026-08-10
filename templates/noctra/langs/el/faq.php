<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Απαντήσεις για χρηματοδότηση, ασφάλεια, τέλη και εκκίνηση στο ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Πριν χρηματοδοτήσετε τον λογαριασμό σας</h1>
      <p class="lead">Ξεκάθαρες απαντήσεις για πρόσβαση, ασφάλεια και λειτουργία της πλατφόρμας.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Πώς ξεκινώ;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Δημιουργήστε λογαριασμό, επαληθεύστε email και καταθέστε από <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Γραφήματα, εργαλεία και onboarding ξεκλειδώνουν αμέσως μετά.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Πώς είναι <?= e(SITE_NAME) ?> ασφαλές;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Κρυπτογράφηση SSL, 2FA και επαληθευμένοι επεξεργαστές πληρωμών σε κάθε ενέργεια λογαριασμού.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Τι ισχύει για τα τέλη;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Τα τέλη εμφανίζονται πριν επιβεβαιώσετε. Χωρίς απροσδόκητες χρεώσεις σε καταθέσεις ή αναλήψεις.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Μπορώ να αυτοματοποιήσω συναλλαγές;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ναι — ρυθμίστε bots με AI και όρια κινδύνου, ή μείνετε χειροκίνητοι και αλλάξτε όποτε θέλετε.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Πώς λειτουργούν οι αναλήψεις;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Αίτημα από τον πίνακα ελέγχου. Οι περισσότερες μέθοδοι ολοκληρώνονται σε 1–3 εργάσιμες ημέρες.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Έχετε ακόμα ερωτήσεις;</p>
        <a href="contacts.php" class="btn btn-outline">Επικοινωνία με υποστήριξη</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
