<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Προσφορά');
$page_description = 'Επιλέξτε την προσφορά του ' . SITE_NAME . ' — ξεκινήστε με ελάχιστη κατάθεση ' . MIN_DEPOSIT . ' ' . CURRENCY . ' και ξεκλειδώστε πλήρη πρόσβαση στην πλατφόρμα.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Αρχική', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Προσφορά', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Προσφορά</p>
      <h1>Αποκτήστε δωρεάν διαχείριση χαρτοφυλακίου με την εγγραφή</h1>
      <p class="lead">Ξεκινήστε από <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Όταν είστε έτοιμοι, μπορείτε να αναπτυχθείτε περαιτέρω.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Αρχική πρόσβαση</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> ελάχιστη κατάθεση · Πλήρης πλατφόρμα · Σήματα AI · Υποστήριξη 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Τι περιλαμβάνει</div>
          <div class="specs-value">Γραφήματα σε πραγματικό χρόνο, συναλλαγές πολλαπλών αγορών, διαχείριση χαρτοφυλακίου, υποστηριζόμενη ένταξη</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Καταθέσεις</div>
          <div class="specs-value">Κάρτα, τραπεζική μεταφορά, PayPal, ηλεκτρονικά πορτοφόλια</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Αναλήψεις</div>
          <div class="specs-value">Ανά πάσα στιγμή · 1–3 εργάσιμες ημέρες · Κόστη εμφανίζονται εκ των προτέρων</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Συσκευές</div>
          <div class="specs-value">Web, tablet, κινητό — χωρίς εγκατάσταση</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Επωφεληθείτε αμέσως από την προσφορά';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
