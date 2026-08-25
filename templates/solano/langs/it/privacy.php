<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Privacy ᐉ ' . SITE_NAME;
$page_description = 'Come ' . SITE_NAME . ' raccoglie, utilizza e protegge le tue informazioni personali.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Informazioni legali</span>
    <h1>Privacy</h1>
    <p class="etpy2">Come <?= e(SITE_NAME) ?> raccoglie, utilizza e protegge le tue informazioni personali.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Ultimo aggiornamento: gennaio 2025</p>

    <h2>1. Introduzione</h2>
    <p><?= e(SITE_NAME) ?> («noi», «nostro») si impegna a proteggere la privacy dei visitatori e dei clienti. Questa informativa sulla Privacy spiega quali dati personali raccogliamo, perché li raccogliamo e come li trattiamo quando utilizzi il nostro sito e i nostri servizi.</p>

    <h2>2. Informazioni che raccogliamo</h2>
    <ul>
      <li><strong>Dati di identità</strong> — nome, data di nascita, documento d’identità ufficiale per la verifica dell’identità e il rispetto degli obblighi KYC/AML.</li>
      <li><strong>Dati di contatto</strong> — indirizzo e-mail, numero di telefono, indirizzo postale.</li>
      <li><strong>Dati finanziari</strong> — dettagli di pagamento, storico delle transazioni, informazioni sull’origine dei fondi.</li>
      <li><strong>Dati tecnici</strong> — indirizzo IP, tipo di browser, identificatori del dispositivo, cookie e analisi di utilizzo.</li>
    </ul>

    <h2>3. Come utilizziamo i tuoi dati</h2>
    <ul>
      <li>Per verificare l’identità e adempiere agli obblighi normativi.</li>
      <li>Per fornire, mantenere e migliorare la nostra piattaforma e i nostri servizi.</li>
      <li>Per elaborare i pagamenti e rilevare attività fraudolente.</li>
      <li>Per comunicare con te riguardo al tuo conto, agli aggiornamenti e alle richieste di assistenza.</li>
      <li>Per inviare comunicazioni di marketing quando hai acconsentito (puoi annullare l’iscrizione in qualsiasi momento).</li>
    </ul>

    <h2>4. Base giuridica</h2>
    <p>Trattiamo i dati personali in base a una o più delle seguenti basi legali: esecuzione di un contratto, adempimento di un obbligo legale, nostri interessi legittimi, oppure il tuo consenso.</p>

    <h2>5. Condivisione e divulgazione</h2>
    <p>Possiamo condividere dati personali con fornitori di pagamento regolamentati, partner di verifica KYC/AML, fornitori di infrastruttura cloud, consulenti professionali e autorità competenti quando la legge lo richiede. Non vendiamo dati personali.</p>

    <h2>6. Trasferimenti internazionali</h2>
    <p>Quando i dati personali vengono trasferiti al di fuori della tua giurisdizione, ci assicuriamo che siano in atto garanzie adeguate, comprese le clausole contrattuali standard.</p>

    <h2>7. Conservazione dei dati</h2>
    <p>Conserviamo i dati personali per il tempo necessario a prestare i servizi e adempiere ai requisiti legali, regolamentari e contabili — in genere almeno cinque anni dopo la chiusura di un conto.</p>

    <h2>8. I tuoi diritti</h2>
    <p>Fatto salvo il diritto applicabile, puoi richiedere l’accesso, la rettifica, la cancellazione, la limitazione o la portabilità dei tuoi dati personali, e puoi opporti a determinati trattamenti. Per esercitare questi diritti, contattaci tramite l’indirizzo indicato di seguito.</p>

    <h2>9. Cookie</h2>
    <p>Utilizziamo cookie essenziali e analitici per far funzionare il sito e comprendere l’utilizzo. Puoi gestire i cookie tramite le impostazioni del browser.</p>

    <h2>10. Sicurezza</h2>
    <p>Applichiamo salvaguardie amministrative, tecniche e fisiche progettate per proteggere i dati personali da accesso non autorizzato, divulgazione, alterazione o distruzione. Nessun sistema è perfettamente sicuro e non possiamo garantire una sicurezza assoluta.</p>

    <h2>11. Modifiche</h2>
    <p>Possiamo aggiornare questa informativa di tanto in tanto. La versione più recente sarà sempre disponibile su questa pagina con la data aggiornata.</p>

    <h2>12. Contatti</h2>
    <p>Per domande sulla privacy o per esercitare i tuoi diritti, contatta il team Protezione dei dati tramite la nostra pagina contatti.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Torna alla home</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
