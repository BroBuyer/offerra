<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Termini di utilizzo');
$page_description = 'Le regole che si applicano quando accedi o utilizzi ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
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
      <span class="eyebrow">Legal</span>
      <h1>Termini di utilizzo</h1>
      <p class="lede">Le regole che si applicano quando accedi o utilizzi <?= e(SITE_NAME) ?>.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Ultimo aggiornamento: gennaio 2025</p>

      <h2>1. Accettazione dei Termini</h2>
      <p>Accedendo o utilizzando il sito e i servizi di <?= e(SITE_NAME) ?>, accetti di essere vincolato da questi Termini di utilizzo. Se non sei d’accordo, non utilizzare i servizi.</p>

      <h2>2. Idoneità</h2>
      <p>Devi avere almeno 18 anni (o l’età della maggiore età nella tua giurisdizione) e la capacità giuridica di stipulare un contratto vincolante. I servizi non sono offerti a residenti in giurisdizioni ristrette dove tale offerta sarebbe illegale.</p>

      <h2>3. Registrazione dell’account</h2>
      <p>Accetti di fornire informazioni accurate, aggiornate e complete durante la registrazione e di mantenerle aggiornate. Sei responsabile della riservatezza delle credenziali e di tutte le attività sul tuo account.</p>

      <h2>4. Servizi</h2>
      <p><?= e(SITE_NAME) ?> fornisce strumenti tecnologici e informazioni educative relativi all’investimento online. Non siamo il tuo consulente finanziario. Nulla su questo sito costituisce consulenza di investimento personalizzata, consulenza fiscale o una sollecitazione ad acquistare o vendere uno strumento finanziario.</p>

      <h2>5. Commissioni</h2>
      <p>Le commissioni, i margini e i costi applicabili sono indicati sulla piattaforma o nel listino applicabile. Sei responsabile di eventuali imposte derivanti dalle tue attività.</p>

      <h2>6. Condotta vietata</h2>
      <ul>
        <li>Utilizzare i servizi per riciclaggio di denaro, finanziamento del terrorismo, manipolazione di mercato o qualsiasi fine illegale.</li>
        <li>Impersonare un’altra persona o fornire informazioni di identità false.</li>
        <li>Tentare di interferire, compromettere o fare reverse engineering di qualsiasi parte della piattaforma.</li>
        <li>Utilizzare strumenti automatizzati per accedere ai servizi in modo diverso da quanto espressamente consentito.</li>
      </ul>

      <h2>7. Proprietà intellettuale</h2>
      <p>Tutti i contenuti, marchi, software e materiali del sito sono di proprietà di <?= e(SITE_NAME) ?> o dei suoi licenzianti e sono protetti dalle leggi applicabili sulla proprietà intellettuale. Ti viene concessa una licenza limitata, non esclusiva e revocabile per utilizzare i servizi per lo scopo previsto.</p>

      <h2>8. Servizi di terzi</h2>
      <p>La piattaforma può contenere collegamenti a o integrare servizi di terzi. Non siamo responsabili di tali servizi, della loro disponibilità, accuratezza o contenuto.</p>

      <h2>9. Esclusioni di responsabilità</h2>
      <p>I servizi sono forniti « così come sono » e « come disponibili » senza garanzie di alcun tipo. Il trading comporta un rischio sostanziale di perdita. Consulta la nostra <a href="<?= page_url('conditions.php') ?>">Informativa sui rischi</a> per i dettagli.</p>

      <h2>10. Limitazione di responsabilità</h2>
      <p>Nella massima misura consentita dalla legge, <?= e(SITE_NAME) ?> non sarà responsabile di danni indiretti, incidentali, speciali, consequenziali o punitivi, né di alcuna perdita di profitti o ricavi, derivanti dal tuo utilizzo dei servizi.</p>

      <h2>11. Indennizzo</h2>
      <p>Accetti di indennizzare e manlevare <?= e(SITE_NAME) ?>, i suoi affiliati e il personale da qualsiasi reclamo derivante dalla violazione di questi Termini o dall’uso improprio dei servizi.</p>

      <h2>12. Sospensione e risoluzione</h2>
      <p>Possiamo sospendere o risolvere l’accesso ai servizi in qualsiasi momento, con o senza preavviso, se riteniamo che tu abbia violato questi Termini o la legge applicabile.</p>

      <h2>13. Legge applicabile</h2>
      <p>Questi Termini sono regolati dalle leggi applicabili nella sede di <?= e(SITE_NAME) ?>, senza riguardo ai principi di conflitto di leggi.</p>

      <h2>14. Modifiche</h2>
      <p>Possiamo modificare questi Termini di volta in volta. L’uso continuato dei servizi dopo le modifiche costituisce accettazione dei Termini rivisti.</p>

      <h2>15. Contatti</h2>
      <p>Le domande su questi Termini possono essere inviate tramite la nostra <a href="<?= page_url('contacts.php') ?>">pagina di contatto</a>.</p>

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
