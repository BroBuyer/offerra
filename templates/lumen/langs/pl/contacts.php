<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Skontaktuj się ze wsparciem ' . SITE_NAME . ' — pomagamy przy wpłatach, weryfikacji i starcie.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Jesteśmy, by pomóc</h1>
      <p class="lead">Pytania o konto, wpłaty lub narzędzia AI — napisz w dowolnym momencie.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem;">Wsparcie</h2>
        <p class="prose">Napisz na <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Typowy czas odpowiedzi to kilka godzin.</p>
        <a href="sign.php" class="btn btn-primary">Otwórz konto</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
