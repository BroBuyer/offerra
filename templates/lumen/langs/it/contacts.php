<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contatti');
$page_description = 'Contatta il supporto ' . SITE_NAME . ' — ti aiutiamo con depositi, verifica e primi passi.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contatti</p>
      <h1>Siamo qui per aiutarti</h1>
      <p class="lead">Domande su account, depositi o strumenti IA — scrivici in qualsiasi momento.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem;">Supporto</h2>
        <p class="prose">Scrivici a <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Il tempo di risposta tipico è di poche ore.</p>
        <a href="sign.php" class="btn btn-primary">Apri un account</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
