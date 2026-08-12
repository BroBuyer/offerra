<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('IA ed esecuzione in tempo reale | Sito ufficiale');
$page_description = SITE_NAME . ' — tecnologia di IA che analizza i mercati ed esegue ordini in tempo reale, con un analista personale al tuo fianco per costruire una nuova fonte di reddito.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">Vai al contenuto</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Principale">
 <a href="#platform">Prodotto</a>
 <a href="#how">Come funziona.</a>
 <a href="#markets">Mercati in tempo reale</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Apri il tuo account</a>
 <button class="nav-toggle" aria-label="Apri menu" aria-expanded="false" aria-controls="navLinks" type="button">
 <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
 </button>
 </div>
 </div>
</header>

<main id="top">

<!-- HERO — left: copy + trust chips + CTA · right: lead form (same layout as the reference) -->
<section class="hero" id="hero" aria-labelledby="hero-title">
 <div class="shell hero-grid">
 <div>
 <span class="eyebrow">IA in tempo reale + analisi umana</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span> — investi ora, guarda crescere il tuo capitale</h1>
 <p class="hero-sub">Un motore di intelligenza artificiale scansiona i mercati ed esegue ordini in frazioni di secondo, mentre il tuo analista personale adatta ogni decisione al tuo profilo. Nessuna esperienza necessaria — sei guidato dall’inizio alla fine.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Regolamentato</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Fondi segregati</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9.600 clienti</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> valutazione</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Protetto da SSL</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Supporto 24/7</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Esecuzione rapida</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Inizia ora — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> min.</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Apri il tuo account</h2>
 <p class="sub">Inizia in pochi minuti.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Voglio iniziare';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Indicatori chiave">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Utenti attivi</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>Volume scambiato</span></div>
 <div class="stat"><b>99,1%</b><span>Disponibilità dei segnali</span></div>
 <div class="stat"><b>24/7</b><span>Supporto</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">Dentro <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Monitora il tuo account in tempo reale</h2>
 <p class="lede">Ogni ordine eseguito dal tuo analista viene registrato qui — ingressi, uscite e risultati verificati su ogni coppia, trasmessi in diretta.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Grafici a candele e depth in tempo reale, su qualsiasi dispositivo</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Invio ordini con un tocco e conferma istantanea</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Watchlist e avvisi di prezzo che ti seguono</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Inizia ora</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — trading mobile con grafici crypto in tempo reale</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">La piattaforma</span><h2 id="features-title">Tutto ciò di cui hai bisogno, in un’unica piattaforma veloce.</h2><p class="lede">Niente grafici da sorvegliare, niente ordini da cronometrare. Il motore di <?= e(SITE_NAME) ?> monitora i order book in tempo reale sugli exchange crypto, le API azionarie globali e le principali coppie forex — e lancia ordini nell’istante in cui i modelli trovano una configurazione vantaggiosa.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Esecuzione in frazioni di secondo su ogni piazza collegata</h3><p><?= e(SITE_NAME) ?> mantiene connessioni API a bassa latenza con ogni exchange supportato. Quando il modello emette un segnale, l’ordine viene instradato, eseguito e registrato nel tuo pannello prima del tick successivo.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Attiva 24 ore su 24, in tutte le sessioni</h3><p>Il mercato crypto non dorme mai, e il motore di <?= e(SITE_NAME) ?> nemmeno. Continua a scansionare le coppie nei weekend e nei giorni festivi, così non perdi mai una finestra.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Report in più valute</h3><p>Ogni saldo, ogni ordine, ogni prelievo appare nella tua valuta locale. Nessuna fase di conversione nascosta.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Capitale segregato</h3><p>Le tue risorse restano sul tuo account. <?= e(SITE_NAME) ?> non ha mai la custodia — il motore ha solo il permesso di instradare gli ordini.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Sicurezza di livello bancario</h3><p>Crittografia TLS su tutta la piattaforma, autenticazione a due fattori di default e audit trimestrali dell’infrastruttura da terzi. Ricevute delle operazioni registrate su blockchain.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Tre classi di asset, un’unica piattaforma</h3><p>La maggior parte delle piattaforme retail si limita a un solo mercato. <?= e(SITE_NAME) ?> opera crypto, azioni quotate e le principali coppie forex nello stesso pannello.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Limiti di rischio predefiniti su ogni posizione</h3><p>Stop-loss, drawdown massimo e limiti di allocazione del capitale sono configurati per classe di asset. Il motore esce automaticamente da ogni operazione che supera un limite, e l’evento viene registrato nel tuo storico di audit.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Mercati in tempo reale</span>
 <h2 id="markets-title">Opera Bitcoin, Ethereum e molto altro</h2>
 <p class="lede">Prezzi in tempo reale, indicatori avanzati e una visione professionale dei mercati che ti interessano.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Voglio accedere ai mercati</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Mercati</span><span class="mkt-live"><i></i>Live</span></div>
 <div class="mkt-list">
 <div class="mkt-row" data-sym="BTC"><div class="mkt-c"><b>BTC</b><span>BTC/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 64.671</b><span class="chg down">-1,06%</span></div></div>
 <div class="mkt-row" data-sym="ETH"><div class="mkt-c"><b>ETH</b><span>ETH/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1.881</b><span class="chg down">-2,55%</span></div></div>
 <div class="mkt-row" data-sym="SOL"><div class="mkt-c"><b>SOL</b><span>SOL/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 76,62</b><span class="chg down">-1,72%</span></div></div>
 <div class="mkt-row" data-sym="XRP"><div class="mkt-c"><b>XRP</b><span>XRP/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1,11</b><span class="chg down">-0,97%</span></div></div>
 </div>
 </div>
 </div>
</section>

<!-- HOW IT WORKS -->
<section class="sec" id="how" aria-labelledby="how-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Come funziona</span><h2 id="how-title">Come funziona.</h2><p class="lede">Tecnologia all’avanguardia e un vero analista umano, che lavorano insieme in tempo reale per aiutarti a costruire una nuova fonte di reddito — con guida in ogni fase.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Crea il tuo account</h3><p>Registrati in pochi minuti usando solo la tua e-mail.</p></div>
 <div class="step"><div class="n">2</div><h3>Conferma la tua e-mail</h3><p>Verifica il tuo indirizzo per proteggere l’account.</p></div>
 <div class="step"><div class="n">3</div><h3>Deposita sul tuo account</h3><p>Aggiungi fondi a partire da <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> a modo tuo.</p></div>
 <div class="step"><div class="n">4</div><h3>Definisci la tua strategia</h3><p>Scegli i tuoi obiettivi; il tuo analista personalizza il piano.</p></div>
 <div class="step"><div class="n">5</div><h3>Inizia a operare</h3><p>Segui i segnali guidati e cresci al tuo ritmo.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Depositi</span><h2 id="payment-title">Deposita con metodi che conosci già</h2><p class="lede">Deposita e preleva tramite canali sicuri e familiari — senza costi nascosti.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Bonifico bancario</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Cosa dicono i membri</span><h2 id="reviews-title">Cosa dicono i nostri investitori</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>« Il mio analista mi ha spiegato tutto con chiarezza. Ho definito i miei obiettivi una sola volta e ora seguo esattamente come cresce il mio capitale — senza ansia a ogni movimento. »</p><div class="who"><div class="ini">G</div><div><b>Giulia Rossi</b><span>Roma</span></div></div></div>
 <div class="card"><p>« Non avevo mai investito prima — il mio analista ha gestito la strategia e spiegato ogni passo. Niente promesse vuote, niente pressione, e i prelievi arrivano quando previsto. »</p><div class="who"><div class="ini">M</div><div><b>Marco Bianchi</b><span>Milano</span></div></div></div>
 <div class="card"><p>« Ho iniziato con poco per testare. La trasparenza e il supporto mi hanno dato sicurezza per continuare a costruire. »</p><div class="who"><div class="ini">E</div><div><b>Elena Conti</b><span>Napoli</span></div></div></div>
 <div class="card"><p>« Le analisi arrivano a me — approvo o correggo in pochi minuti. Si adatta perfettamente alla mia routine, senza interferire con il lavoro. »</p><div class="who"><div class="ini">L</div><div><b>Luca Ferrari</b><span>Torino</span></div></div></div>
 <div class="card"><p>« Ciò che mi ha conquistato è la trasparenza: ogni decisione è spiegata e vedo il ragionamento prima che accada qualsiasi cosa. »</p><div class="who"><div class="ini">C</div><div><b>Chiara Esposito</b><span>Bologna</span></div></div></div>
 <div class="card"><p>« Il supporto è reale e sempre accessibile. La mia prima analisi è stata pratica, e la piattaforma è stata solida e prevedibile da allora. »</p><div class="who"><div class="ini">A</div><div><b>Andrea Ricci</b><span>Firenze</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Piattaforma</span><h2 id="capabilities-title">Funzionalità principali, in sintesi</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">Motore di IA</div>
 <div class="spec-v">Analisi avanzata di mercato con machine learning</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Metodi di deposito</div>
 <div class="spec-v">Carta di credito, bonifico bancario, PayPal, wallet digitali</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Accesso multipiattaforma</div>
 <div class="spec-v">Web, tablet e mobile — totalmente responsive</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Precisione dei segnali</div>
 <div class="spec-v">Fino all’85% nelle strategie di IA supportate</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Mercati</div>
 <div class="spec-v">Criptovalute, forex, azioni e materie prime</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Registrazione</div>
 <div class="spec-v">Apertura account rapida con verifica guidata</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Supporto</div>
 <div class="spec-v">Assistenza professionale 24 ore su 24 — <a href="<?= page_url('contacts.php') ?>">Invia un messaggio</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Domande</span><h2 id="faq-title">Domande frequenti.</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>Qual è il deposito minimo?</summary><p>Apri e finanzia il tuo account a partire dal deposito minimo. Puoi aggiungere fondi nel tempo man mano che il piano avanza.</p></details>
 <details><summary>Come funzionano i prelievi?</summary><p>Richiedi un prelievo in qualsiasi momento dal pannello. I fondi tornano al metodo di pagamento scelto, rispettando i tempi di elaborazione standard.</p></details>
 <details><summary>I miei soldi sono al sicuro?</summary><p>I conti sono protetti con sicurezza di livello industriale e verifica rigorosa. Come in ogni investimento, il capitale è a rischio e i valori possono scendere tanto quanto salire.</p></details>
 <details><summary>Quanto velocemente posso iniziare?</summary><p>La maggior parte dei membri completa la registrazione in pochi minuti. Non appena il primo deposito è confermato, si attiva subito un piano.</p></details>
 <details><summary>Ci sono costi nascosti?</summary><p>I costi sono mostrati con trasparenza prima che tu ti impegni. Saprai sempre esattamente cosa si applica al tuo piano — nessun addebito a sorpresa.</p></details>
 <details><summary>Qual è l’età minima per registrarsi?</summary><p>Devi avere almeno 18 anni per aprire un account e investire. Può essere richiesta una verifica per confermare età e identità.</p></details>
 <details><summary>Quali metodi di pagamento sono supportati?</summary><p>Metodi comuni come carta di debito e credito, bonifico bancario, e-wallet selezionati e criptovalute sono supportati. Le opzioni esatte compaiono nella fase di deposito.</p></details>
 <details><summary>Quando è disponibile il supporto clienti?</summary><p>Il nostro team di supporto è operativo dal lunedì al venerdì, dalle 9:00 alle 18:00, e si impegna a rispondere a ogni richiesta entro un giorno lavorativo.</p></details>
 <details><summary>Come vengono gestite le imposte?</summary><p>Le imposte sui guadagni da investimento dipendono dalle norme del tuo Paese e sono a tuo carico. Consigliamo di conservare i registri e consultare un consulente fiscale qualificato.</p></details>
 <details><summary>Cos’è il KYC e perché è obbligatorio?</summary><p>Il KYC (Know Your Customer) è una verifica standard della tua identità. Mantiene i conti al sicuro e fa parte dell’apertura di qualsiasi conto di investimento.</p></details>
 <details><summary>Devo avere esperienza?</summary><p>No. Ogni membro riceve un analista finanziario personale che lo guida in ogni passo, quindi non serve conoscenza previa dei mercati.</p></details>
 <details><summary>Chi gestisce i miei investimenti?</summary><p>Un analista finanziario dedicato, supportato da strumenti di IA, che lavora sui tuoi obiettivi e sul livello di rischio. L’analista unisce expertise professionale e tecnologia — le decisioni restano umane.</p></details>
 <details><summary>La piattaforma è regolamentata?</summary><p>Sì — rispetta gli standard finanziari e di cybersecurity nazionali, con protezione del conto e verifica rigorosa integrate.</p></details>
 <details><summary>Posso aggiungere fondi in seguito?</summary><p>Sì. Puoi versare sul tuo account in qualsiasi momento e adattare il piano con il tuo analista man mano che gli obiettivi evolvono.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">AFFIDABILE</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Recensioni</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b> recensioni · Basato su <b style="color:var(--text,#fff)">2.334</b> valutazioni</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Inizia ora</span>
 <h2 id="signup-title" class="cta-h">Apri il tuo account.</h2>
 <p class="lede">Dicci come contattarti e uno specialista ti aiuterà a fare il primo passo.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Apri il tuo account</h3>
 <p class="sub">Inizia in pochi minuti.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Voglio iniziare';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

</main>

<!-- FOOTER -->
<footer class="foot">
 <div class="shell">
 <div class="foot-top">
 <div>
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <p>Velocità dell’IA, decisione umana. Capitale a rischio — investi con responsabilità.</p>
 </div>
 <div><h4>Prodotto</h4><div class="foot-links">
 <a href="#platform">Monitora il tuo account in tempo reale</a><a href="#markets">Mercati in tempo reale</a><a href="#how">Come funziona.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Azienda</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">Chi siamo</a><a href="<?= page_url('offer.php') ?>">Prezzi</a><a href="<?= page_url('contacts.php') ?>">Contatti</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Privacy</a><a href="<?= page_url('conditions.php') ?>">Termini</a><a href="<?= page_url('conditions.php') ?>">Informativa sui rischi</a><a href="<?= page_url('contacts.php') ?>">Segnala un abuso</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. Tutti i diritti riservati. Investire comporta un rischio, inclusa la possibile perdita di capitale. · Investire comporta un rischio, inclusa la possibile perdita di parte o di tutto il capitale investito. Il valore degli investimenti può salire o scendere e puoi ricevere indietro meno di quanto hai versato. Non investire denaro che non puoi permetterti di perdere.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('it-IT',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+' €';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Attendere, prego\u2026";
 var MSG_ERR = "Impossibile inviare i dati al momento. Riprova.";
 var THANKS = "/thanks/";
 function rand(){ return (Math.random().toString(36).substring(2,12)+Math.random().toString(36).substring(2,6)).replace(/[^a-z0-9]/g,'').substring(0,16); }
 // one-time spinner CSS for the submit button's processing state
 if (!document.getElementById('ldf-spin-css')) {
 var _st = document.createElement('style'); _st.id = 'ldf-spin-css';
 _st.textContent = '.ldf-spin{display:inline-block;width:1em;height:1em;margin-right:.5em;vertical-align:-.15em;border:2px solid currentColor;border-right-color:transparent;border-radius:50%;animation:ldfspin .6s linear infinite}@keyframes ldfspin{to{transform:rotate(360deg)}}';
 (document.head || document.documentElement).appendChild(_st);
 }
 var p = new URLSearchParams(location.search);
 // our click subid → hidden field → send.php click_id → iRev aff_sub3. Accept the
 // common tracker param names so whatever the traffic source appends is captured.
 var subid = p.get('subid') || p.get('sub_id') || p.get('clickid') || p.get('click_id')
 || p.get('cid') || p.get('utm_content')
 || (window.KTracking && KTracking.getSubId ? KTracking.getSubId() : '') || '';
 document.querySelectorAll('form[data-leadform]').forEach(function (form) {
 var tok = form.querySelector('.js-token');
 var tsf = form.querySelector('.js-ts');
 var loadTime = Date.now();
 if (tsf) tsf.value = String(loadTime);
 // Anti-bot: the js_token is written ONLY after a genuine human interaction with
 // the form (focus/key/pointer). A script that POSTs the form without ever
 // touching it never gets a token, and the edge worker rejects tokenless posts.
 var armed = false;
 function arm(){ if (armed) return; armed = true; if (tok && !tok.value) tok.value = rand(); }
 ['focusin','keydown','pointerdown','touchstart'].forEach(function (ev) {
 form.addEventListener(ev, arm, { once: true, passive: true });
 });
 var dom = form.querySelector('.js-domain'); if (dom && !dom.value) dom.value = location.hostname;
 var sub = form.querySelector('.js-subid'); if (sub && subid) sub.value = subid; // only if a URL subid; else t.js fills it
 var phone = form.querySelector('input[type=tel]');
 var sending = false;
 function lock(b){ if(!b) return; b.dataset.lbl = b.dataset.lbl || b.innerHTML; b.disabled = true; b.setAttribute('aria-busy','1'); b.style.opacity='.75'; b.style.cursor='progress'; b.innerHTML='<span class="ldf-spin" aria-hidden="true"></span>'+MSG_WAIT; }
 function unlock(b){ if(!b) return; b.disabled=false; b.removeAttribute('aria-busy'); b.style.opacity=''; b.style.cursor=''; if(b.dataset.lbl) b.innerHTML=b.dataset.lbl; }
 function err(msg){ var el=form.querySelector('[data-leaderr]'); if(!el){ el=document.createElement('p'); el.setAttribute('data-leaderr','1'); el.style.cssText='margin-top:.6rem;font-size:.85rem;line-height:1.35;color:#f87171;text-align:center'; form.appendChild(el);} el.textContent=msg; }
 form.addEventListener('submit', async function (e) {
 e.preventDefault();
 if (sending) return;
 sending = true;
 // stamp the client-measured dwell (ms since load) → the worker rejects
 // instant/near-instant submits that no human could produce.
 if (tsf) tsf.value = String(Date.now() - loadTime);
 var iti = (phone && window.intlTelInputGlobals) ? window.intlTelInputGlobals.getInstance(phone) : null;
 if (iti) {
 // separateDialCode expects a NATIONAL number in the field. If the user ALSO typed the
 // country code (e.g. 351961654221 with the +351 selector) it would double to
 // +351351…; when that makes the number invalid, re-parse the raw digits as a full
 // international number so the country code isn't added twice.
 try {
 var dc = (iti.getSelectedCountryData() || {}).dialCode || '';
 var raw = (phone.value || '').replace(/[^\d+]/g, '');
 if (raw && raw.charAt(0) !== '+' && dc && raw.indexOf(dc) === 0 && !iti.isValidNumber()) {
 iti.setNumber('+' + raw);
 }
 } catch (e3) {}
 try { phone.value = iti.getNumber() || phone.value; } catch (e4) {}
 var cc = form.querySelector('[name=country]'), d = iti.getSelectedCountryData();
 if (cc && d && d.iso2) cc.value = d.iso2.toUpperCase();
 }
 var btn = form.querySelector('button[type=submit]'); lock(btn);
 var prev = form.querySelector('[data-leaderr]'); if (prev) prev.textContent = '';
 try {
 var r = await fetch(form.action, { method: 'POST', body: new FormData(form), headers: { Accept: 'application/json' } });
 var data = await r.json().catch(function () { return {}; });
 var dest = data && data.redirect_url;
 if (dest === '/thanks/' || dest === '/thanks') dest = THANKS;
 if (dest) { location.href = dest; return; }
 if (data && data.success) { location.href = THANKS; return; }
 sending = false; unlock(btn);
 err((data && data.error) || MSG_ERR);
 } catch (e2) {
 sending = false; unlock(btn);
 err(MSG_ERR);
 }
 });
 });
})();
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css" media="print" onload="this.media='all'"><noscript></noscript>
<style>
.iti{width:100%}.iti input,.iti input[type=tel]{width:100%}
/* The dropdown has a white background but inherits the design's body text colour
 (light, for dark themes) → country names render white-on-white (invisible). Force
 a readable light dropdown that the design's CSS can't override. !important beats
 the inherited colour regardless of the design. */
.iti__country-list{background:#fff!important;color:#1b1b1b!important;border:1px solid #e5e7eb;
 box-shadow:0 8px 28px rgba(0,0,0,.18);max-height:230px}
.iti__country,.iti__country-name{color:#1b1b1b!important}
.iti__dial-code{color:#6b7280!important}
.iti__country.iti__highlight,.iti__country:hover{background:#eef2ff!important}
.iti__flag-box{margin-right:8px!important}
</style>
<script>
(function () {
 var phones = document.querySelectorAll('form[data-leadform] input[type=tel]');
 if (!phones.length) return;
 var loading = false, loaded = false;
 function init() {
 phones.forEach(function (input) {
 if (input.dataset.itiReady) return;
 input.dataset.itiReady = '1';
 var form = input.closest('form');
 var hid = form ? form.querySelector('[name=phone_country]') : null;
 window.intlTelInput(input, {
 initialCountry: (hid && hid.value) || 'it',
 separateDialCode: true,
 utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js'
 });
 });
 }
 // Lazy: pull the widget (incl. the 58 KB utils.js) only when the visitor first
 // touches a phone field — keeps it off the critical path (FCP/LCP) while still
 // ready before they can finish typing a number.
 function load() {
 if (loaded) { init(); return; }
 if (window.intlTelInput) { loaded = true; init(); return; }
 if (loading) return; loading = true;
 var s = document.createElement('script');
 s.src = 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js';
 s.onload = function () { loaded = true; init(); };
 document.head.appendChild(s);
 }
 // Init immediately so the flag + dial code show on load (this script is at the end
 // of <body>, so it never blocks first paint). The heavy utils.js is still fetched
 // asynchronously by the widget AFTER init, keeping it off the critical render path.
 load();
 phones.forEach(function (input) {
 input.addEventListener('focus', load);
 input.addEventListener('touchstart', load, { passive: true });
 });
})();
</script>
<script>/*anim-failsafe*/
(function () {
 var SEL = '[data-anim],[data-animate],[data-aos],[data-reveal],[data-scroll],[class*="reveal"],[class*="fade"],[class*="aos"]';
 function show(el){
 // remove the hooks the design's opacity:0 rule targets, then force-show as backup
 ['data-anim','data-animate','data-aos','data-reveal','data-scroll'].forEach(function(a){ el.removeAttribute(a); });
 el.classList.remove('reveal','fade','fade-in','fade-up','aos-init','will-reveal','animate');
 el.style.setProperty('opacity','1','important'); el.style.setProperty('transform','none','important');
 el.style.setProperty('visibility','visible','important'); el.style.setProperty('filter','none','important');
 }
 function isHidden(el){ return el.offsetHeight > 0 && parseFloat(getComputedStyle(el).opacity) < 0.08; }
 // reveal a block only when it actually reaches the viewport, and only if its own
 // reveal is STILL missing ~1.2s after it got there (i.e. genuinely broken)
 if ('IntersectionObserver' in window) {
 var io = new IntersectionObserver(function(es){ es.forEach(function(e){
 if (!e.isIntersecting) return;
 var el = e.target; io.unobserve(el);
 setTimeout(function(){ if (isHidden(el)) show(el); }, 1200);
 }); }, {rootMargin: '0px 0px -5% 0px'});
 setTimeout(function(){ [].forEach.call(document.querySelectorAll(SEL), function(el){ if (isHidden(el)) io.observe(el); }); }, 1500);
 }
 // counter fallback: a plain number beats a stat frozen at "0" for a visitor who
 // never scrolls the count-up into view (no-op once the real count-up has run)
 setTimeout(function(){ document.querySelectorAll('[data-count]').forEach(function(el){
 var t = el.getAttribute('data-count'); if (t && !/[1-9]/.test(el.textContent||'')) el.textContent = t; }); }, 8000);
})();
</script>
<div id="ck-consent" role="dialog" aria-label="cookies" hidden style="position:fixed;left:16px;right:16px;bottom:16px;z-index:2147483000;max-width:660px;margin:0 auto;background:var(--surface,var(--panel,#12151c));color:var(--text,var(--fg,#e7e9ee));border:1px solid rgba(127,127,127,.28);border-radius:14px;padding:13px 16px;box-shadow:0 12px 40px rgba(0,0,0,.35);display:none;gap:14px;align-items:center;flex-wrap:wrap;font-size:14px;line-height:1.45">
<span style="flex:1;min-width:200px">Utilizziamo i cookie per migliorare la tua esperienza.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">Ho capito</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>
