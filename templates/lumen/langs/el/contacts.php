<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Επικοινωνία');
$page_description = 'Επικοινωνήστε με την υποστήριξη ' . SITE_NAME . ' — βοηθάμε με χρηματοδότηση, επαλήθευση και έναρξη.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Επικοινωνία</p>
      <h1>Είμαστε εδώ για να βοηθήσουμε</h1>
      <p class="lead">Ερωτήσεις για λογαριασμό, καταθέσεις ή εργαλεία ΤΝ — επικοινωνήστε οποιαδήποτε στιγμή.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem;">Υποστήριξη</h2>
        <p class="prose">Στείλτε μας email στο <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Ο τυπικός χρόνος απόκρισης είναι λίγες ώρες.</p>
        <a href="sign.php" class="btn btn-primary">Ανοίξτε λογαριασμό</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
