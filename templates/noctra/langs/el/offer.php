<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Offer');
$page_description = 'Ανοίξτε ' . SITE_NAME . ' με ελάχιστη κατάθεση ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — πλήρης πρόσβαση, πληροφορίες AI και υποστήριξη 24/7.';
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
      <h1>Πρόσβαση στην πλατφόρμα από <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Πλήρη χαρακτηριστικά από την πρώτη ημέρα — γραφήματα, σήματα και υποστήριξη.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Αρχικό πλάνο</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> ελάχιστη · Πλήρης πλατφόρμα · Πληροφορίες AI · Υποστήριξη 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Περιλαμβάνεται</div>
          <div class="specs-value">Ζωντανές αγορές, multi-asset συναλλαγές, προβολή χαρτοφυλακίου, καθοδηγούμενη εκκίνηση</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Χρηματοδότηση</div>
          <div class="specs-value">Κάρτα, τραπεζική μεταφορά, PayPal, ηλεκτρονικά πορτοφολιά</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Αναλήψεις</div>
          <div class="specs-value">Ανά πάσα στιγμή · 1–3 εργάσιμες ημέρες · Τέλη εκ των προτέρων</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Συσκευές</div>
          <div class="specs-value">Web, tablet, κινητό — χωρίς εγκατάσταση</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Ξεκινήστε</span>
          <span class="live-pill">Ανοιχτό</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Εγγραφείτε για να ξεκλειδώσετε την προσφορά';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
