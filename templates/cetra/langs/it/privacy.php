<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Informativa sulla privacy');
$page_description = 'Come ' . SITE_NAME . ' raccoglie, utilizza e protegge i tuoi dati personali.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Principale">
      <a href="<?= page_url() ?>#platform">Piattaforma</a>
      <a href="<?= page_url() ?>#how">Come funziona</a>
      <a href="<?= page_url() ?>#markets">Mercati</a>
      <a href="<?= page_url() ?>#faq">Domande frequenti</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Inizia</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Informazioni legali</span>
      <h1>Informativa sulla privacy</h1>
      <p class="lede">Come <?= e(SITE_NAME) ?> raccoglie, utilizza e protegge i tuoi dati personali.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Ultimo aggiornamento: gennaio 2025</p>

      <h2>1. Introduzione</h2>
      <p><?= e(SITE_NAME) ?> (« noi », « nostro », « nostri ») si impegna a proteggere la privacy di visitatori e clienti. Questa Informativa sulla privacy spiega quali dati personali raccogliamo, perché e come li trattiamo quando utilizzi il nostro sito e i servizi.</p>

      <h2>2. Informazioni che raccogliamo</h2>
      <ul>
        <li>Dati di identità — nome, data di nascita, documenti di identificazione emessi dal governo per la registrazione e la conformità KYC/AML.</li>
        <li>Dati di contatto — indirizzo e-mail, numero di telefono, indirizzo postale.</li>
        <li>Dati finanziari — dettagli di pagamento, storico delle transazioni, informazioni sull’origine dei fondi.</li>
        <li>Dati tecnici — indirizzo IP, tipo di browser, identificatori del dispositivo, cookie e analisi di utilizzo.</li>
      </ul>

      <h2>3. Come utilizziamo i tuoi dati</h2>
      <ul>
        <li>Per verificare l’identità e rispettare gli obblighi normativi.</li>
        <li>Per fornire, mantenere e migliorare la nostra piattaforma e i servizi.</li>
        <li>Per elaborare i pagamenti e rilevare attività fraudolente.</li>
        <li>Per comunicare con te riguardo al tuo account, aggiornamenti e richieste di supporto.</li>
        <li>Per inviare comunicazioni di marketing quando hai acconsentito (puoi annullare l’iscrizione in qualsiasi momento).</li>
      </ul>

      <h2>4. Base giuridica</h2>
      <p>Trattiamo i dati personali sulla base di uno o più dei seguenti fondamenti legittimi: esecuzione di un contratto, adempimento di un obbligo legale, i nostri interessi legittimi, o il tuo consenso.</p>

      <h2>5. Condivisione e divulgazione</h2>
      <p>Possiamo condividere dati personali con fornitori di pagamento regolamentati, partner di verifica KYC/AML, fornitori di infrastruttura cloud, consulenti professionali e autorità competenti quando richiesto dalla legge. Non vendiamo dati personali.</p>

      <h2>6. Trasferimenti internazionali</h2>
      <p>Quando i dati personali vengono trasferiti fuori dalla tua giurisdizione, garantiamo che siano in vigore salvaguardie appropriate, comprese clausole contrattuali standard.</p>

      <h2>7. Conservazione dei dati</h2>
      <p>Conserviamo i dati personali per il tempo necessario a prestare i servizi e soddisfare i requisiti legali, regolamentari e contabili — tipicamente almeno cinque anni dopo la chiusura del conto.</p>

      <h2>8. I tuoi diritti</h2>
      <p>Fatte salve le leggi applicabili, puoi richiedere accesso, rettifica, cancellazione, limitazione o portabilità dei tuoi dati personali, e opporti a determinati trattamenti. Per esercitare questi diritti, contattaci all’indirizzo sotto.</p>

      <h2>9. Cookie</h2>
      <p>Utilizziamo cookie essenziali e analitici per far funzionare il sito e comprendere l’utilizzo. Puoi gestire i cookie nelle impostazioni del browser.</p>

      <h2>10. Sicurezza</h2>
      <p>Applichiamo salvaguardie amministrative, tecniche e fisiche progettate per proteggere i dati personali da accessi non autorizzati, divulgazione, alterazione o distruzione. Nessun sistema è perfettamente sicuro e non possiamo garantire una sicurezza assoluta.</p>

      <h2>11. Modifiche</h2>
      <p>Possiamo aggiornare questa Informativa di volta in volta. La versione più recente sarà sempre disponibile in questa pagina con la data aggiornata.</p>

      <h2>12. Contatti</h2>
      <p>Per questioni di privacy o per esercitare i tuoi diritti, contatta il team Protezione dati <?= e(SITE_NAME) ?> tramite la nostra <a href="<?= page_url('contacts.php') ?>">pagina di contatto</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Torna alla home</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Tutti i diritti riservati ·
      <a href="<?= page_url('privacy.php') ?>">Privacy</a> ·
      <a href="<?= page_url('conditions.php') ?>">Termini</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
