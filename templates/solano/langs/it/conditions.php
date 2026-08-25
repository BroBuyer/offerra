<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Condizioni d’uso ᐉ ' . SITE_NAME;
$page_description = 'Condizioni d’uso di ' . SITE_NAME;
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Legale</span>
    <h1>Condizioni d’uso</h1>
    <p class="rmct9">Le regole che si applicano quando accedi o utilizzi <?= e(SITE_NAME) ?>.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Ultimo aggiornamento: gennaio 2025</p>

    <h2>1. Accettazione delle Condizioni</h2>
    <p>Accedendo o utilizzando il sito web e i servizi di <?= e(SITE_NAME) ?>, accetti di essere vincolato da queste Condizioni d’uso. Se non sei d’accordo, non utilizzare i servizi.</p>

    <h2>2. Idoneità</h2>
    <p>Devi avere almeno 18 anni (o l’età della maggiore età nella tua giurisdizione) ed essere legalmente capace di stipulare un contratto vincolante. I servizi non sono offerti ai residenti di giurisdizioni sottoposte a restrizioni in cui tale offerta sarebbe illegale.</p>

    <h2>3. Registrazione del conto</h2>
    <p>Accetti di fornire informazioni accurate, aggiornate e complete durante la registrazione e di mantenere tali informazioni aggiornate. Sei responsabile della riservatezza delle tue credenziali e di tutte le attività sul tuo conto.</p>

    <h2>4. Servizi</h2>
    <p><?= e(SITE_NAME) ?> fornisce strumenti tecnologici e informazioni educative relativi all’investimento online. Non siamo il tuo consulente finanziario. Nulla su questo sito costituisce consulenza di investimento personalizzata, consulenza fiscale o una sollecitazione ad acquistare o vendere qualsiasi strumento finanziario.</p>

    <h2>5. Commissioni</h2>
    <p>Le commissioni, gli spread e le commissioni applicabili sono comunicati all’interno della piattaforma o nella tabella delle commissioni pertinente. Sei responsabile di qualsiasi imposta derivante dalle tue attività.</p>

    <h2>6. Condotta vietata</h2>
    <ul>
      <li>Utilizzare i servizi per riciclaggio di denaro, finanziamento del terrorismo, manipolazione del mercato o qualsiasi scopo illegale.</li>
      <li>Usurpare l’identità di un’altra persona o fornire informazioni di identità false.</li>
      <li>Tentare di interferire con, compromettere o decodificare qualsiasi parte della piattaforma.</li>
      <li>Utilizzare strumenti automatizzati per accedere ai servizi in modo diverso da quello espressamente consentito.</li>
    </ul>

    <h2>7. Proprietà intellettuale</h2>
    <p>Tutti i contenuti, i marchi, il software e i materiali sul sito web sono di proprietà di <?= e(SITE_NAME) ?> o dei suoi licenzianti e sono protetti dalle leggi sulla proprietà intellettuale applicabili. Ti viene concessa una licenza limitata, non esclusiva e revocabile per utilizzare i servizi per lo scopo previsto.</p>

    <h2>8. Servizi di terzi</h2>
    <p>La piattaforma può contenere collegamenti a servizi di terzi o integrarsi con essi. Non siamo responsabili di tali servizi né della loro disponibilità, accuratezza o contenuto.</p>

    <h2>9. Limitazioni di responsabilità</h2>
    <p>I servizi sono forniti «così come sono» e «secondo disponibilità» senza garanzie di alcun tipo. Il trading comporta un rischio sostanziale di perdita. Consulta la nostra <a href="<?= page_url('risk-disclosure.php') ?>" style="color:var(--accent)">Informativa sui rischi</a> per maggiori dettagli.</p>

    <h2>10. Limitazione di responsabilità</h2>
    <p>Nella misura massima consentita dalla legge, <?= e(SITE_NAME) ?> non sarà responsabile di danni indiretti, incidentali, speciali, consequenziali o punitivi, né di alcuna perdita di utili o ricavi, derivanti dall’uso dei servizi.</p>

    <h2>11. Indennizzo</h2>
    <p>Ti impegni a indennizzare e tenere indenne <?= e(SITE_NAME) ?>, le sue affiliate e il personale da qualsiasi reclamo o domanda derivante dalla violazione di queste Condizioni o dall’uso improprio dei servizi.</p>

    <h2>12. Sospensione e risoluzione</h2>
    <p>Possiamo sospendere o terminare l’accesso ai servizi in qualsiasi momento, con o senza preavviso, se riteniamo che tu abbia violato queste Condizioni o la legge applicabile.</p>

    <h2>13. Legge applicabile</h2>
    <p>Queste Condizioni sono regolate dalle leggi applicabili nella sede di <?= e(SITE_NAME) ?>, senza riguardo ai principi di conflitto di leggi.</p>

    <h2>14. Modifiche</h2>
    <p>Possiamo modificare queste Condizioni di tanto in tanto. L’uso continuato dei servizi dopo le modifiche costituisce accettazione delle Condizioni riviste.</p>

    <h2>15. Contatti</h2>
    <p>Le domande su queste Condizioni possono essere inviate tramite la nostra pagina contatti.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Torna alla home</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
