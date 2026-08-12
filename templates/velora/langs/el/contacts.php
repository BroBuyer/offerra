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
      <p class="lead">Ερωτήσεις για τον λογαριασμό, καταθέσεις ή AI εργαλεία — επικοινωνήστε οποτεδήποτε.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem; margin-bottom: 10px;">Υποστήριξη</h2>
        <p class="prose">Στείλτε email στο <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Τυπικός χρόνος απόκρισης: λιγότερο από λίγες ώρες.</p>
        <div style="margin-top: 18px;">
          <?php
          $form_id = 'contact-form';
          $form_heading = 'Ή αφήστε τα στοιχεία σας';
          $form_submit = 'Αποστολή αιτήματος';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
