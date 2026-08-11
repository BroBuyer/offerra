<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contatti');
$page_description = 'Contatta l’assistenza ' . SITE_NAME . ' — ti aiutiamo con finanziamento, verifica e avvio.';
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
      <p class="lead">Domande sul tuo account, sui depositi o sugli strumenti IA — scrivici quando vuoi.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem; margin-bottom: 10px;">Supporto</h2>
        <p class="prose">Scrivici a <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Di solito rispondiamo entro poche ore.</p>
        <div style="margin-top: 18px;">
          <?php
          $form_id = 'contact-form';
          $form_heading = 'Oppure lascia i tuoi dati';
          $form_submit = 'Invia la richiesta';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
