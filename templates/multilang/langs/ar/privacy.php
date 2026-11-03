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
      <p>La presente Informativa sulla privacy descrive come <?= e(SITE_NAME) ?> ("noi") raccoglie e tratta i dati personali durante l'utilizzo del nostro sito e dei nostri servizi.</p>

      <h2>Quali informazioni raccogliamo</h2>
      <p>Possiamo raccogliere: nome, indirizzo email, numero di telefono, paese di residenza, indirizzo IP e informazioni fornite tramite moduli o richieste di supporto.</p>

      <h2>Come utilizziamo le tue informazioni</h2>
      <ul>
        <li>Per creare e gestire il tuo account</li>
        <li>Per fornirti accesso alla piattaforma di trading e all'assistenza clienti</li>
        <li>Per adempiere a obblighi legali e normativi</li>
        <li>Per migliorare i nostri servizi e prevenire le frodi</li>
      </ul>

      <h2>Sicurezza dei dati</h2>
      <p>Applichiamo misure tecniche e organizzative, inclusa la crittografia SSL e il controllo degli accessi, per proteggere i tuoi dati.</p>

      <h2>I tuoi diritti</h2>
      <p>In base alla tua giurisdizione, puoi avere il diritto di accesso, rettifica o cancellazione dei dati personali. Per esercitare questi diritti, contatta <?= e(SUPPORT_EMAIL) ?>.</p>

      <h2>Contatti</h2>
      <p>Hai domande su questa informativa? Scrivici a <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
