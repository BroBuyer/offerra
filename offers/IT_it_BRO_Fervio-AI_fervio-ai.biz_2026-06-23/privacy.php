<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Informativa sulla privacy');
$page_description = 'Scopri come ' . SITE_NAME . ' raccoglie, utilizza e protegge i tuoi dati personali.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Informativa sulla privacy</h1>
      <p class="lead">Ultimo aggiornamento: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Questa Informativa descrive come <?= e(SITE_NAME) ?> raccoglie e tratta le informazioni personali quando utilizzi il nostro sito e i nostri servizi.</p>

      <h2>Informazioni che raccogliamo</h2>
      <p>Possiamo raccogliere: nome, indirizzo email, numero di telefono, paese di residenza, indirizzo IP e informazioni fornite tramite moduli o richieste di assistenza.</p>

      <h2>Come utilizziamo le informazioni</h2>
      <ul>
        <li>Per creare e gestire il tuo account</li>
        <li>Per fornire accesso alla piattaforma e assistenza clienti</li>
        <li>Per adempiere a obblighi legali e normativi</li>
        <li>Per migliorare i servizi e prevenire frodi</li>
      </ul>

      <h2>Sicurezza dei dati</h2>
      <p>Adottiamo misure tecniche e organizzative, inclusa la crittografia SSL e controlli di accesso, per proteggere i tuoi dati.</p>

      <h2>I tuoi diritti</h2>
      <p>A seconda della tua giurisdizione, potresti avere il diritto di accedere, correggere o cancellare i tuoi dati personali. Contatta <?= e(SUPPORT_EMAIL) ?> per esercitare tali diritti.</p>

      <h2>Contatti</h2>
      <p>Domande su questa informativa? Scrivi a <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
