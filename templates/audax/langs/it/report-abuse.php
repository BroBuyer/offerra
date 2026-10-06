<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Segnala un abuso | ' . SITE_NAME;
$page_description = 'Segnala un abuso o un’attività sospetta su ' . SITE_NAME . '.';
$page_canonical = page_url('report-abuse.php');
$active_page = 'report-abuse';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text"> -->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Segnala un abuso</h1>
            <p class="bold-title">1. Segnalazione di un abuso</p>
            <p>
              1.1. Se hai trovato contenuti inappropriati sul nostro sito, segnalacelo
              tramite il modulo di contatto.
            </p>
            <p>Contattaci: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. In questa sezione puoi descrivere qualsiasi comportamento abusivo o contenuto
              che viola le nostre regole.
            </p>
            <p>
              1.3. La tua segnalazione è importante. Fornisci elementi precisi così possiamo
              indagare correttamente sui fatti.
            </p>
            <p>Inviando una segnalazione accetti anche la nostra informativa sulla privacy.</p>
            <p class="bold-title">2. Chi può segnalare</p>
            <p>
              2.1. Se sei vittima di un abuso o constati un comportamento inappropriato, hai
              il diritto di segnalarlo.
            </p>
            <p>2.1.1. Devi avere almeno 18 anni per presentare una segnalazione.</p>
            <p>2.1.2. La segnalazione deve essere veritiera e basata su fatti.</p>
            <p>2.1.3. L’uso del modulo di segnalazione deve essere lecito nel tuo paese.</p>
            <p>2.2. Non siamo responsabili di segnalazioni false o dolose.</p>
            <p class="bold-title">3. Procedura di segnalazione</p>
            <p>3.1. Ci riserviamo il diritto di esaminare tutte le segnalazioni di abuso.</p>
            <p>3.2. Se una segnalazione è ritenuta fondata, adotteremo le misure necessarie.</p>
            <p class="bold-title">4. Attività vietate in fase di segnalazione</p>
            <p>4.1. L’uso del modulo a fini dolosi non è consentito.</p>
            <p>4.1.1. Le segnalazioni false o fuorvianti non sono consentite.</p>
            <p>4.1.2. Molestare altri utenti tramite il sistema di segnalazione non è consentito.</p>
            <p>4.1.3. L’uso di robot o di automazione per inviare segnalazioni è vietato.</p>
            <p>4.1.4. Qualsiasi tentativo di manipolare il sistema di segnalazione sarà oggetto di indagine.</p>
            <p>4.1.5. L’uso del sistema per diffondere informazioni false è vietato.</p>
            <p>4.1.6. Qualsiasi tentativo di ostacolare un’indagine non è consentito.</p>
            <p>4.1.7. L’uso del sistema per proferire minacce non è consentito.</p>
            <p>4.1.8. Qualsiasi attività illecita legata alla segnalazione sarà sanzionata.</p>
            <p>4.1.9. Qualsiasi tentativo di eludere le regole di segnalazione non è consentito.</p>
            <p>4.1.10. Qualsiasi tentativo di abuso del sistema di segnalazione è preso sul serio.</p>
            <p class="bold-title">5. Diritti di proprietà intellettuale in fase di segnalazione</p>
            <p>
              5.1. I contenuti che trasmetti segnalando un abuso non ti conferiscono alcun diritto di proprietà.
            </p>
            <p>5.2. Gli utenti non acquisiscono diritti sui contenuti del sito presentando una segnalazione.</p>
            <p>5.3. Le segnalazioni sono usate esclusivamente a fini di indagine.</p>
            <p>5.4. I terzi non possono copiare né modificare le segnalazioni.</p>
            <p class="bold-title">6. Limitazione di responsabilità in fase di segnalazione</p>
            <p>6.1. Presentando una segnalazione ti assumi la responsabilità del suo contenuto.</p>
            <p>6.2. Non siamo responsabili delle conseguenze delle segnalazioni presentate.</p>
            <p>6.3. Qualsiasi perdita derivante da una segnalazione è responsabilità dell’utente.</p>
            <p>6.4. Non accettiamo alcuna responsabilità per i danni causati da segnalazioni.</p>
            <p>
              6.5. I problemi tecnici legati al sistema di segnalazione non rientrano nella nostra responsabilità.
            </p>
            <p class="bold-title">7. Informazioni sulla procedura di segnalazione</p>
            <p>
              7.1. Usando il sistema di segnalazione accetti che possiamo contattarti per ottenere ulteriori informazioni.
            </p>
            <p>7.2. Le segnalazioni sono trattate in modo riservato.</p>
            <p>7.3. Si consiglia agli utenti di conservare una copia delle proprie segnalazioni.</p>
            <p class="bold-title">8. Link e risorse complementari</p>
            <p>8.1. Per saperne di più sulla segnalazione di un abuso, consulta le nostre policy.</p>
            <p>8.2. I link a fonti esterne non costituiscono un’approvazione da parte nostra.</p>
            <p>8.3. Ti consigliamo di verificare ogni fonte prima di usarla.</p>
            <p class="bold-title">9. Disposizioni generali sulle segnalazioni</p>
            <p>
              9.1. Ci riserviamo il diritto di modificare, sospendere o interrompere la procedura di segnalazione
              in qualsiasi momento.
            </p>
            <p>
              9.2. Le condizioni di questa procedura possono evolvere in qualsiasi momento. Il proseguimento dell’uso
              del servizio di segnalazione dopo tali modifiche vale come accettazione delle nuove condizioni.
            </p>
            <p>9.3. Presentando una segnalazione, l’utente accetta pienamente queste condizioni.</p>
            <p>
              9.4. Qualsiasi accordo o dichiarazione, scritta o orale, che non rientri nei
              punti specifici di queste condizioni è giuridicamente nullo e non vincola nessuna delle parti.
            </p>
            <p>
              9.5. Qualsiasi diritto conferito da queste condizioni e non esercitato, per consenso,
              negligenza o impossibilità, si considera rinunciato. L’esercizio parziale o totale di un diritto
              non esclude né limita il suo esercizio successivo.
            </p>
            <p>
              9.6. Se un tribunale competente dichiara nulla una disposizione di queste condizioni, essa sarà
              considerata nulla. Il resto delle condizioni resta comunque pienamente in vigore.
            </p>
            <p>
              9.7. Si intende che queste condizioni consentono la gestione del sito da parte di terzi,
              che possono cedere i propri diritti e obblighi. L’utente non può cedere
              i propri diritti e obblighi a un terzo.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
