<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Termini di utilizzo | ' . SITE_NAME;
$page_description = 'Termini di utilizzo della piattaforma ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text">-->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Termini di utilizzo</h1>
            <p class="bold-title">1. Introduzione</p>
            <p>1.1. L’accettazione di queste condizioni è richiesta per usare i nostri servizi.</p>
            <p>1.2. Queste condizioni costituiscono un accordo giuridicamente vincolante.</p>
            <p>1.3. Il proseguimento dell’uso del sito vale come accettazione delle condizioni.</p>
            <p>
              1.4. Per qualsiasi domanda puoi scriverci a
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Diritto di utilizzo</p>
            <p>2.1. Devi avere almeno 18 anni per usare i servizi.</p>
            <p>2.1.1. Devi risiedere in un paese in cui i servizi sono leciti.</p>
            <p>2.1.2. Non devi figurare in nessuna lista di sanzioni.</p>
            <p>2.1.3. Devi avere la capacità giuridica di contrarre.</p>
            <p>2.2. Non siamo responsabili di un uso da parte di persone non idonee.</p>
            <p class="bold-title">3. Conto utente</p>
            <p>3.1. Sei responsabile della sicurezza del tuo conto.</p>
            <p>3.2. Non comunicare la password a terzi.</p>
            <p class="bold-title">4. Attività vietate</p>
            <p>4.1. L’uso dei servizi a fini illeciti non è consentito.</p>
            <p>4.1.1. Il riciclaggio di denaro è strettamente vietato.</p>
            <p>4.1.2. Qualsiasi frode sarà segnalata alle autorità competenti.</p>
            <p>4.1.3. L’uso di robot o software di automazione non è consentito.</p>
            <p>4.1.4. Qualsiasi tentativo di manipolare il sistema sarà oggetto di indagine.</p>
            <p>4.1.5. La diffusione di informazioni false è vietata.</p>
            <p>4.1.6. Qualsiasi tentativo di ostacolare un’indagine non è consentito.</p>
            <p>4.1.7. Le minacce verso altri utenti sono vietate.</p>
            <p>4.1.8. Qualsiasi attività illecita sarà sanzionata.</p>
            <p>4.1.9. Qualsiasi tentativo di eludere le regole non è consentito.</p>
            <p>4.1.10. Qualsiasi tentativo di abuso del sistema è preso sul serio.</p>
            <p class="bold-title">5. Proprietà intellettuale</p>
            <p>5.1. L’insieme dei contenuti del sito è nostra proprietà intellettuale.</p>
            <p>5.2. Gli utenti non acquisiscono diritti sui contenuti del sito.</p>
            <p>5.3. I contenuti non possono essere copiati senza autorizzazione.</p>
            <p>5.4. I terzi non sono autorizzati a modificare i contenuti.</p>
            <p class="bold-title">6. Limitazione di responsabilità</p>
            <p>6.1. L’uso dei servizi avviene a tuo rischio.</p>
            <p>6.2. Non siamo responsabili delle perdite legate all’uso dei servizi.</p>
            <p>6.3. Qualsiasi perdita legata all’uso del sito è responsabilità dell’utente.</p>
            <p>6.4. Non accettiamo alcuna responsabilità per i danni legati all’uso del sito.</p>
            <p>6.5. I problemi tecnici non rientrano nella nostra responsabilità.</p>
            <p class="bold-title">7. Informazioni</p>
            <p>7.1. Usando i servizi accetti di essere contattato.</p>
            <p>7.2. Le informazioni sono trattate in modo riservato.</p>
            <p>7.3. Si consiglia agli utenti di conservare i propri giustificativi.</p>
            <p class="bold-title">8. Link e risorse complementari</p>
            <p>8.1. Per maggiori informazioni consulta le nostre policy.</p>
            <p>8.2. I link esterni non costituiscono un’approvazione.</p>
            <p>8.3. Consigliamo di verificare le fonti prima dell’uso.</p>
            <p class="bold-title">9. Disposizioni generali</p>
            <p>9.1. Ci riserviamo il diritto di modificare i servizi in qualsiasi momento.</p>
            <p>9.2. Le condizioni possono evolvere in qualsiasi momento.</p>
            <p>9.3. Usando i servizi accetti queste condizioni.</p>
            <p>9.4. Gli accordi orali non sono validi.</p>
            <p>9.5. I diritti non esercitati non si considerano rinunciati.</p>
            <p>
              9.6. Se una disposizione è dichiarata nulla, le altre restano in vigore.
            </p>
            <p>9.7. I servizi possono essere gestiti da fornitori esterni.</p>
            <p>
              9.8. Il diritto applicabile <?= e(geo_in()) ?> regola queste condizioni. Qualsiasi controversia sarà sottoposta al
              tribunale competente <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
