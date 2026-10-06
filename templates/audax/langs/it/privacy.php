<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Informativa sulla privacy | ' . SITE_NAME;
$page_description = 'Informativa sulla privacy di ' . SITE_NAME . '.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Informativa sulla privacy</h1>
            <p>
              I tuoi dati personali e i tuoi asset sono per noi di importanza capitale. Ci
              impegniamo pienamente a proteggerli.
            </p>
            <p>
              <?= e(SITE_NAME) ?> raccoglie e conserva i dati essenziali per le tue operazioni di trading. Le
              modalità di questa raccolta e conservazione sono descritte nella presente informativa.
            </p>
            <p>La nostra informativa si fonda sui seguenti principi:</p>
            <p class="circle">
              Al fine di garantire la massima trasparenza sui nostri processi di raccolta e
              conservazione dei tuoi dati personali:
            </p>
            <p>
              Il nostro obiettivo è che tu comprenda come raccogliamo e trattiamo i tuoi dati, così da poter
              decidere con consapevolezza. Applichiamo regole e processi chiari per il trattamento dei dati su
              questo sito. La nostra informativa descrive in dettaglio i metodi che usiamo per darti
              un’informazione chiara e concreta sull’uso dei dati. Sei tu a decidere.
            </p>
            <p>
              Ti informeremo senza ritardo quando lo riterremo necessario. La trasparenza è per noi
              di importanza fondamentale.
            </p>
            <p>
              Il nostro team specializzato resta disponibile per rispondere a tutte le tue domande su qualsiasi aspetto
              dei nostri processi, compresi i nostri obblighi ai sensi del diritto <?= e(geo_in()) ?> e dei regolamenti
              europei. Puoi scriverci a:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Nessun altro uso dei dati personali è autorizzato da parte nostra, salvo i casi previsti dalla nostra
              informativa sulla privacy.
            </p>
            <p>
              Possiamo trattare dati personali per le seguenti finalità, in particolare per garantire il corretto
              funzionamento dei servizi <?= e(SITE_NAME) ?> e per mettere in relazione gli utenti con piattaforme
              di trading terze. Il trattamento può anche essere necessario per mantenere e migliorare
              le funzionalità e i servizi del sito; per proteggere i nostri diritti e per adempiere agli obblighi legali e
              di altro tipo. Infine, questi dati sono usati, se necessario, per assicurare le funzioni amministrative
              e operative legate ai servizi che ti sono forniti.
            </p>
            <p>
              Per proporre servizi più adatti alle tue preferenze e alle tue esigenze, <?= e(SITE_NAME) ?>
              usa dati personali.
            </p>
            <p class="circle">
              Al fine di usare gli strumenti indispensabili per proteggere i tuoi dati personali e garantire i tuoi
              diritti al riguardo:
            </p>
            <p>
              Puoi in qualsiasi momento contattarci e accedere all’insieme dei tuoi dati personali. Possiamo anche
              modificarli o cancellarli se necessario. Trattiamo inoltre le richieste di trasferimento di tali
              dati verso di te o un terzo che indichi. Offriamo questo servizio perché tu possa
              esercitare pienamente i tuoi diritti di privacy e di controllo.
            </p>
            <p class="circle">Proteggi i tuoi dati personali:</p>
            <p>
              I nostri sistemi di sicurezza sono di altissimo livello e integrano misure di livello bancario. Anche se
              una protezione assoluta non può essere garantita, ci impegniamo a mantenere in permanenza i nostri
              sistemi al massimo livello e a rafforzare le misure già in atto.
            </p>
            <p>
              Disponiamo di informative sulla privacy dettagliate e di sistemi di sicurezza di primo piano.
            </p>
            <p class="bold-title">1. Ambito di applicazione</p>
            <p>
              La presente informativa descrive le nostre procedure di raccolta, trattamento e comunicazione di
              tutti i dati relativi a persone fisiche.
            </p>
            <p>
              Le disposizioni della nostra informativa si applicano a tutte le persone fisiche identificabili o
              identificate. Riguardano in particolare ogni persona fisica identificabile a partire da
              dati che ci sono affidati, a cui abbiamo accesso e/o che possiamo combinare.
            </p>
            <p>
              Il trattamento dei dati, ai sensi dell’informativa sulla privacy, include in particolare la conservazione,
              la gestione e l’organizzazione dei dati personali.
            </p>
            <p>
              Non raccogliamo né tentiamo di raccogliere informazioni su persone di età inferiore a 18 anni.
              Non consentiamo nemmeno ai minori di 18 anni di usare la nostra piattaforma, per qualsiasi
              fine. Se constatiamo che un utente ha meno di 18 anni, cancelleremo quei dati immediatamente.
            </p>
            <p class="bold-title">2. Quali dati personali raccogliamo?</p>
            <p>
              All’iscrizione raccogliamo i dati personali necessari all’uso dei nostri servizi. Se serve,
              possiamo anche chiedere dati per la verifica, ad esempio per
              confermare che il conto ti appartiene. Per migliorare e mantenere la qualità dei nostri
              servizi, raccogliamo e analizziamo informazioni sul tuo uso della piattaforma e
              dei servizi terzi associati.
            </p>
            <p class="bold-title">
              3. In nessun caso sei tenuto a comunicarci i tuoi dati personali.
            </p>
            <p>
              Anche se non sei tenuto a trasmetterci i dati, la scelta di non farlo
              può limitare la fornitura dei nostri servizi. Ciò può anche comportare
              limitazioni d’uso della piattaforma.
            </p>
            <p class="bold-title">
              4. Quali dati personali raccogliamo? Accedendo al nostro sito possiamo raccogliere i
              seguenti dati personali:
            </p>
            <p>
              Non raccogliamo dati che consentano di identificarti personalmente. Raccogliamo informazioni quali
              l’attività del tuo conto, gli indirizzi IP e le date e ore di accesso. Per la manutenzione,
              la sicurezza e l’assistenza, conserviamo i report di errore, le informazioni del browser e il tipo
              di dispositivo usato per accedere al tuo conto. Registriamo anche la lingua impostata sul tuo conto.
            </p>
            <p>
              Quanto ai dati personali, raccogliamo e conserviamo unicamente le informazioni
              che fornisci collegandoti a una piattaforma di trading terza tramite i nostri servizi.
            </p>
            <p>
              I dati personali comunicati a piattaforme terze possono comprendere in particolare:
              nome e cognome, indirizzo, numero di telefono e indirizzo e-mail.
            </p>
            <p class="bold-title">
              5. Perché l’azienda ha bisogno dei miei dati e il trattamento è lecito?
            </p>
            <p>
              L’azienda raccoglie, conserva e tratta i tuoi dati personali esclusivamente per le
              finalità previste dall’informativa. Tutti gli usi e i trattamenti descritti sono conformi al
              diritto applicabile <?= e(geo_in()) ?> e ai regolamenti europei.
            </p>
            <p>
              L’azienda gestisce, tratta o trasferisce i tuoi dati solo in conformità alla
              normativa applicabile <?= e(geo_in()) ?>. Le basi giuridiche pertinenti sono elencate di seguito:
            </p>
            <p class="circle">
              Hai acconsentito alla conservazione e al trattamento dei tuoi dati personali da parte
              dell’azienda. Trasmettendoci i dati, ci autorizzi a inoltrarli alla
              piattaforma di trading terza interessata. Hai inoltre acconsentito al
              trattamento dei tuoi dati personali per una o più finalità.
            </p>
            <p class="circle">
              Per migliorare i servizi, per esercitare o difendere diritti in giudizio e per proteggere interessi
              legittimi, può in particolare essere necessario che l’azienda conservi e
              tratti i tuoi dati personali.
            </p>
            <p class="circle">Il trattamento dei dati è necessario per adempiere a obblighi legali.</p>
            <p>
              Se desideri più informazioni sui trattamenti che l’azienda è tenuta
              a effettuare, non esitare a scriverci.
            </p>
            <p>
              Di seguito trovi l’elenco delle finalità precise e della base giuridica che ci autorizza
              a trattare i tuoi dati personali.
            </p>
            <p class="green">Finalità</p>
            <p class="green">Base giuridica</p>
            <p>
              1. Per facilitare il tuo accesso al trading digitale e, esclusivamente su tua richiesta, noi
              condividiamo i tuoi dati personali con piattaforme terze. I tuoi dati possono essere raccolti
              e condivisi con terzi, esclusivamente su tua richiesta e secondo la tua scelta.
            </p>
            <p>
              Hai acconsentito al trattamento dei tuoi dati personali per una o più finalità.
            </p>
            <p>
              2. Ti preghiamo di trasmetterci le informazioni necessarie affinché possiamo rispondere in modo rapido ed
              efficace alle tue richieste, preoccupazioni e domande sui nostri servizi.
            </p>
            <p>
              Per il perseguimento degli interessi legittimi dell’azienda o di un terzo identificato,
              il trattamento dei dati personali è necessario.
            </p>
            <p>
              3. Per adempiere ai nostri obblighi legali e amministrativi, il trattamento dei dati personali è necessario.
            </p>
            <p>Per rispettare i nostri obblighi legali dobbiamo trattare alcuni dati personali.</p>
            <p>
              4. Per migliorare i nostri servizi abbiamo bisogno di dati anonimizzati e dobbiamo seguire l’uso,
              compresi i report di errore.
            </p>
            <p>
              Per la protezione degli interessi legittimi dell’azienda e dei fornitori
              esterni, il trattamento e la conservazione dei dati personali sono necessari.
            </p>
            <p>5. Ciò è necessario per prevenire frodi e abusi del nostro servizio.</p>
            <p>
              Per garantire gli interessi legittimi dell’azienda e dei fornitori terzi,
              il trattamento e la conservazione dei dati personali sono necessari.
            </p>
            <p>
              6. Le esigenze del nostro servizio ci obbligano a seguire e a trattare i dati per
              lo sviluppo commerciale, le decisioni strategiche, il monitoraggio, la conformità normativa e
              altre attività operative.
            </p>
            <p>
              Al fine di proteggere gli interessi legittimi dell’azienda e dei fornitori
              esterni, il trattamento e la conservazione dei dati personali sono necessari.
            </p>
            <p>
              7. Usiamo strumenti statistici e di analisi dei dati per orientare le decisioni su un ampio
              ventaglio dei nostri servizi e nella pianificazione strategica.
            </p>
            <p>
              Per la protezione degli interessi legittimi dell’azienda e dei nostri fornitori
              esterni, il trattamento e la conservazione dei dati personali sono necessari.
            </p>
            <p>
              8. Nella misura necessaria a proteggere i diritti, i beni e gli interessi
              dell’azienda e dei fornitori terzi, e in conformità alle leggi locali e
              ai regolamenti applicabili, ai contratti e alle nostre condizioni, possiamo trattare
              dati personali. Tale trattamento avviene solo secondo procedure necessarie e
              stabilite.
            </p>
            <p>
              Per la protezione degli interessi legittimi dell’azienda e di ciascun fornitore
              terzo, il trattamento e la conservazione dei dati personali sono necessari.
            </p>
            <p class="bold-title">6. Condivisione dei dati personali con terzi</p>
            <p>
              Per la conservazione e il trattamento degli indirizzi IP, per le indagini e l’analisi d’uso,
              nonché per altri servizi associati, l’azienda può condividere dati anonimizzati con
              fornitori esterni.
            </p>
            <p>
              Su tua richiesta condivideremo alcuni dati personali che ci hai trasmesso con
              fornitori esterni. In tal caso, il trattamento dei tuoi dati è soggetto all’
              informativa sulla privacy di tale azienda. Ciò può includere diverse piattaforme di trading digitale.
            </p>
            <p>
              Al fine di migliorare il servizio clienti e ottimizzare i nostri servizi in generale,
              l’azienda può condividere dati personali con le sue società affiliate e i suoi partner commerciali.
            </p>
            <p>
              Quando la legge lo richiede o per proteggere i diritti e i beni dell’azienda e dei
              terzi interessati, possiamo comunicare i dati alle autorità giudiziarie o di controllo competenti.
            </p>
            <p>
              Nell’ambito di operazioni strutturanti, come la cessione dell’azienda,
              una raccolta di capitali o una domanda di credito, i dati pertinenti possono essere condivisi
              in modo lecito e adeguato. Ciò vale anche per fusioni, ristrutturazioni,
              aggregazioni o insolvenza dell’azienda, in conformità alla legge.
            </p>
            <p class="bold-title">7. Cookie e servizi terzi</p>
            <p>
              Per l’analisi del sito e in collaborazione con agenzie pubblicitarie, cookie e altre
              tecnologie simili possono essere usati in conformità alla legge e alle prassi.
            </p>
            <p>
              I cookie, piccoli file di testo salvati sul tuo dispositivo quando visiti un sito, servono a
              raccogliere informazioni sulla navigazione, sulle preferenze e su altri dati. Il loro
              scopo è personalizzare e migliorare la tua esperienza. Ci aiutano a memorizzare i tuoi
              parametri e preferenze e ad adattare la nostra offerta. Servono anche
              all’analisi del sito e alla produzione di statistiche per la pianificazione.
            </p>
            <p>
              Questo sito usa in genere due tipi di cookie: i cookie di sessione, conservati
              solo per la durata della sessione e cancellati alla chiusura del browser;
              e i cookie persistenti, che restano nel browser dopo la fine della sessione. Questi
              ultimi consentono al sito di riconoscerti come visitatore di ritorno e di facilitarne l’uso.
            </p>
            <p class="bold-title">Tipi di cookie:</p>
            <p>I cookie possono essere usati secondo le esigenze, in funzione della finalità:</p>
            <p class="green">Tipo di cookie</p>
            <p>Questi cookie sono strettamente necessari</p>
            <p class="green">Finalità</p>
            <p>
              I cookie servono a identificarti come cliente, per fornirti le informazioni,
              i parametri e i servizi che hai richiesto.
              Facilitano anche la navigazione sul sito e l’accesso allo stesso.
            </p>
            <p>
              Usiamo cookie affinché il tuo dispositivo possa scaricare e riprodurre contenuti. Consentono
              anche di accedere alle funzioni essenziali e di tornare alle pagine già visitate.
            </p>
            <p class="green">Informazioni complementari</p>
            <p>
              Per un accesso rapido e semplice al sito, i cookie memorizzano e trattano alcuni
              dati personali, come il nome utente e la data di ultimo accesso, se chiedi al sito di
              ricordarti al momento dell’accesso.
            </p>
            <p>I cookie di sessione vengono cancellati alla chiusura del browser.</p>
            <p class="green">Tipo di cookie</p>
            <p>Cookie funzionali</p>
            <p class="green">Finalità</p>
            <p>
              Grazie ai cookie possiamo salvare e applicare i tuoi parametri e preferenze in modo sicuro.
              Ci consentono anche di riconoscerti quando torni sul sito.
            </p>
            <p class="green">Informazioni complementari</p>
            <p>
              I cookie persistenti restano salvati dopo la sessione e restano attivi fino alla
              data di scadenza.
            </p>
            <p class="green">Tipo di cookie</p>
            <p>Cookie di prestazione</p>
            <p class="green">Finalità</p>
            <p>
              Per migliorare i nostri servizi, raccogliamo dati statistici tramite cookie. Questi cookie
              ci informano sulle prestazioni del sito e sul suo uso.
            </p>
            <p class="green">Informazioni complementari</p>
            <p>
              Tutte le informazioni memorizzate tramite cookie sono anonime e non consentono di identificare persone.
            </p>
            <p>
              I cookie di sessione vengono cancellati alla chiusura del browser, mentre i cookie persistenti
              restano attivi fino alla scadenza o a tempo indeterminato, salvo cancellazione manuale.
            </p>
            <p>Cookie bloccati o cancellati</p>
            <p>
              Se desideri cancellare o bloccare i cookie, devi farlo nelle
              impostazioni del browser. Consulta i link seguenti per le istruzioni dettagliate dei browser più diffusi.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Il blocco dei cookie può impedire ad alcune funzioni del sito di funzionare correttamente.
            </p>
            <p class="bold-title">Durata di conservazione dei dati personali</p>
            <p>
              I tuoi dati personali sono conservati solo per il tempo strettamente necessario ai
              trattamenti, come indicato in altre sezioni di questa informativa. Possono esserlo più a lungo se
              le leggi locali, i regolamenti o le policy interne lo richiedono.
            </p>
            <p>
              I tuoi dati personali sono condivisi, su tua richiesta e secondo la tua scelta, con piattaforme
              di trading terze per 12 mesi. Al termine di tale periodo e con il tuo
              consenso, tali dati sono condivisi per ulteriori 12 mesi.
            </p>
            <p>
              Le nostre procedure prevedono una valutazione regolare di tutti i dati personali per determinare se
              siano ancora necessari.
            </p>
            <p class="bold-title">
              9. Trasferimento di dati personali verso paesi terzi o organizzazioni internazionali
            </p>
            <p>
              Quando è necessario per fornire i nostri servizi e/o per motivi di sicurezza, possiamo trasferire
              dati personali verso altri paesi (fuori dal tuo) e verso organizzazioni internazionali
              secondo protocolli di sicurezza completi. Applichiamo misure di protezione dei dati al
              massimo livello per proteggere le tue informazioni e garantire il tuo accesso ai ricorsi
              e ai diritti previsti dalla legge, in qualsiasi momento.
            </p>
            <p>
              Nello Spazio economico europeo (SEE), tutti i residenti beneficiano di una protezione dei dati e di garanzie.
            </p>
            <p class="circle">
              I trasferimenti di dati avvengono sempre sotto giurisdizione e autorità europee, in conformità
              agli standard e protocolli di protezione previsti dall’articolo 45, paragrafo 3, del regolamento
              (UE) 2016/679 del Parlamento europeo e del Consiglio del 27 aprile 2016
              (&ldquo;GDPR&rdquo;).
            </p>
            <p class="circle">
              Qualsiasi trasferimento di dati tra autorità pubbliche avviene ai sensi dell’articolo
              46, paragrafo 2. Si tratta di un accordo giuridicamente vincolante ed esecutivo.
            </p>
            <p class="circle">
              Le clausole contrattuali tipo della Commissione europea ai sensi dell’articolo 46, paragrafo 2, lettera c), del GDPR fissano
              le condizioni del trasferimento, e tali trasferimenti avvengono in conformità a
              esse. Puoi consultare tali disposizioni all’indirizzo
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Per maggiori informazioni sulle misure di sicurezza specifiche adottate dall’azienda per
              proteggere i tuoi dati personali in caso di trasferimento verso un paese terzo, puoi inviare una richiesta
              via e-mail a <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Protezione dei dati personali</p>
            <p>
              I dati personali sono protetti da misure tecniche e organizzative del più alto
              livello, applicate secondo procedure di riferimento. Tali procedure sono efficaci
              nel prevenire qualsiasi distruzione di dati dovuta a un evento illecito o imprevisto, nonché
              la loro perdita o modifica.
            </p>
            <p>
              Anche se applichiamo la massima cura e procedure conformi agli standard più
              rigorosi di protezione dei dati e alla legge, in nessuna circostanza può essere garantito
              che i tuoi dati personali siano privi di errori. Non possiamo quindi accettare alcuna responsabilità se
              i dati personali subiscono un danno accidentale, immateriale o indiretto, o una divulgazione.
              Ciò include le situazioni fuori dal nostro controllo, come le divulgazioni dovute a errori di
              trasmissione, ad accessi non autorizzati da parte di terzi o ad altre cause simili.
            </p>
            <p>
              Quando riceviamo richieste giuridicamente vincolanti da autorità di controllo o da altri
              organismi pubblici investiti di poteri di legge, possiamo essere tenuti a trasmettere i tuoi dati
              personali a tali organismi. Una volta trasmessi in forza di un obbligo legale, non abbiamo più
              alcun controllo su come tali organismi trattino, conservino o proteggano i tuoi dati.
            </p>
            <p>
              Tutto ciò che transita su internet, comprese le informazioni personali, comporta un
              certo rischio di intercettazione e non è sicuro al 100%. L’azienda non può garantire la
              sicurezza dei dati inviati online.
            </p>
            <p class="bold-title">11. Link verso siti terzi</p>
            <p>
              Questo sito contiene link verso applicazioni e siti terzi. Ti preghiamo di
              notare che non sono collegati all’azienda né posti sotto il suo controllo, e che la nostra
              informativa sulla privacy non si applica a tali terzi. Operano secondo le loro
              proprie procedure e priorità di raccolta e trattamento dei dati; non
              accettiamo quindi alcuna responsabilità per tali attività. Usali a tua discrezione.
            </p>
            <p>
              Consulta sempre l’informativa sulla privacy dell’azienda o del servizio quando visiti il suo sito
              prima di comunicare dati personali. Verifica se le loro regole di raccolta, uso e
              trattamento corrispondono alle tue aspettative. Se decidi di condividere dati, fallo
              direttamente presso il fornitore.
            </p>
            <p class="bold-title">12. Aggiornamenti dell’informativa</p>
            <p>
              Ci riserviamo il diritto di aggiornare o modificare questa informativa in qualsiasi momento. Ti informeremo
              delle modifiche tramite il sito e i canali interessati. La versione aggiornata dell’informativa sulla
              privacy sarà pubblicata sul sito, e l’informativa revisionata produce effetti
              dalla pubblicazione, salvo diversa indicazione.
            </p>
            <p class="bold-title">13. I tuoi diritti sui dati personali</p>
            <p>
              Mantieni il controllo e l’ultima parola sull’uso di tutti i tuoi dati personali, il che
              include la verifica della loro esattezza, la correzione degli errori, nonché il diritto alla cancellazione o
              alla limitazione del nostro trattamento, nella portata come nella natura.
            </p>
            <p>I residenti del SEE troveranno in questa pagina le informazioni che li riguardano:</p>
            <p>
              I tuoi dati personali sono protetti dai diritti descritti qui. Inviando un’e-mail all’
              indirizzo sotto, puoi esercitarli immediatamente.
            </p>
            <p>Accesso ai tuoi diritti</p>
            <p>
              Se i dati personali che hai fornito sono esatti, puoi accedervi in qualsiasi momento. Tutti
              i dati personali che trattiamo ci sono accessibili e quindi verificabili.
            </p>
            <p>
              Puoi in qualsiasi momento richiedere i tuoi dati personali per verifica; ti saranno
              comunicati in forma elettronica. Se richiedi copie aggiuntive dei tuoi
              dati già forniti, possono essere addebitati costi ragionevoli.
            </p>
            <p>
              I diritti riconosciuti dalla legge e dall’informativa sulla privacy non devono pregiudicare i diritti dei
              terzi. L’azienda si riserva il diritto di rifiutare o limitare l’accesso ai dati personali
              se ciò pregiudica i diritti e le libertà di terzi.
            </p>
            <p>Diritto di rettifica</p>
            <p>
              Qualsiasi errore nei tuoi dati personali, derivante da omissione o inesattezza,
              può essere corretto da te o dall’azienda per assicurare un trattamento corretto.
            </p>
            <p>Diritto alla cancellazione</p>
            <p>
              Hai il diritto di chiedere la cancellazione dei tuoi dati personali nei
              seguenti casi: 1) se sono stati trattati senza il tuo consenso o fuori dai limiti di legge; 2)
              su tua richiesta, se desideri la loro cancellazione e l’azienda non ha alcun obbligo legale di
              conservarli; 3) se ti opponi al nostro trattamento o non vi acconsenti più, anche se è
              lecito e fondato sui nostri interessi o su quelli di terzi; e 4) se la legge
              ci obbliga a cancellarli.
            </p>
            <p>
              Il diritto alla cancellazione non si applica in caso di obblighi legali dell’UE o
              di uno Stato membro. Non si applica nemmeno se i dati sono necessari per esercitare o
              difendere diritti in giudizio.
            </p>
            <p>Diritto alla limitazione del trattamento</p>
            <p>
              Hai il diritto di chiedere la limitazione del trattamento dei tuoi dati personali se
              ritieni che contengano inesattezze.
            </p>
            <p>
              Se chiedi la limitazione dell’uso dei tuoi dati personali, ne limiteremo il trattamento, salvo nei
              seguenti casi: 1) se il diritto dell’Unione europea o di uno dei suoi
              Stati membri vi si oppone; 2) con il tuo consenso, se è necessario per difendere o esercitare
              diritti in giudizio; 3) per proteggere i diritti di un’altra persona fisica.
            </p>
            <p>Diritto alla portabilità</p>
            <p>
              Hai il diritto di accedere ai dati personali che hai fornito e di mantenerne il controllo, nella
              misura in cui hai acconsentito alla loro raccolta, e se il loro trattamento
              avviene tramite sistemi automatizzati.
            </p>
            <p>
              Hai il diritto di chiedere il trasferimento di tutti i tuoi dati personali verso un’altra azienda o
              organizzazione, nella misura tecnicamente possibile. Questo diritto non pregiudica il tuo
              diritto alla cancellazione. Non si applica se il suo esercizio pregiudica i diritti
              o le libertà di un’altra persona fisica.
            </p>
            <p>Diritto di opposizione al trattamento</p>
            <p>
              Fatto salvo il diritto dell’azienda di perseguire i nostri interessi legittimi o
              quelli di un terzo che agisce come fornitore, hai il diritto di opporti al
              trattamento e di chiederne la cessazione. Questo diritto non si applica se esiste un bisogno
              giuridico impellente di proseguire il trattamento, sia per difendersi sia per esercitare
              diritti in giudizio. In tali casi possiamo proseguire il trattamento dei tuoi dati.
            </p>
            <p>
              Puoi in qualsiasi momento opporti al trattamento dei tuoi dati personali a fini di prospezione commerciale.
            </p>
            <p>
              Diritto di revocare il consenso
            </p>
            <p>
              Puoi revocare in qualsiasi momento il consenso al trattamento dei tuoi dati personali,
              con effetto immediato. Tale revoca non ha effetto retroattivo sui trattamenti già
              effettuati prima della revoca.
            </p>
            <p>
              Se non sei soddisfatto, hai il diritto di presentare un reclamo presso un’
              autorità giudiziaria, di controllo o altro organismo competente.
            </p>
            <p>
              Se ritieni che i tuoi diritti e le tue libertà riguardo al trattamento dei dati personali
              siano stati violati, gli Stati membri dell’Unione europea dispongono di autorità di controllo
              a tale fine. Puoi adire tali autorità se lo ritieni opportuno.
            </p>
            <p>
              La sezione 13 descrive le situazioni in cui i tuoi diritti sui dati personali possono essere
              limitati dal diritto dell’Unione europea o degli Stati membri.
            </p>
            <p>
              Quando riceviamo la tua richiesta sui dati personali e sul loro trattamento, ti
              daremo accesso alle informazioni richieste, come indicato nella sezione 13 di questa informativa.
              Possiamo prolungare tale termine di due mesi al massimo, a seconda dell’ampiezza della richiesta
              e della sua natura. Se serve, ti informeremo del prolungamento
              entro un mese dal ricevimento della tua richiesta.
            </p>
            <p>
              Ti invieremo le informazioni richieste per via elettronica e gratuitamente, salvo se
              ciò è contrario alla legge o alle disposizioni della sezione 13. Ci riserviamo il diritto di
              addebitare costi ragionevoli o di rifiutare una richiesta se è ritenuta infondata, eccessiva o ripetitiva.
            </p>
            <p>
              Ci riserviamo il diritto di chiedere una verifica di identità complementare se esiste un
              dubbio ragionevole sulla persona all’origine di una richiesta relativa ai dati personali, al fine di
              proteggere e assicurare la sicurezza dei dati.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
