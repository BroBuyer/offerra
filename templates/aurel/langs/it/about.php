<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Chi siamo ' . SITE_NAME;
$page_description = 'Un conto, una visione chiara del tuo capitale — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">La piattaforma</span>
    <h1>Un conto, una visione chiara di tutto</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> riunisce il tuo saldo, la tua strategia e i tuoi risultati in un unico pannello trasparente, così ogni decisione è informata e ogni cifra è sotto gli occhi.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Le persone dietro il tuo conto</h2>
    <p>Dietro l’interfaccia ci sono analisti che studiano i mercati ogni giorno, ingegneri che fanno funzionare la piattaforma e specialisti dell’assistenza che rispondono nella tua lingua.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Analisti di mercato che esaminano le condizioni ogni giorno, non una volta al trimestre.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ingegneri disponibili per la piattaforma, con supervisione continua.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Specialisti dell’assistenza che gestiscono l’apertura, la verifica e i prelievi.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Normativa, rischi e ciò che non promettiamo</h2>
    <p>Investire comporta rischi e nessuna piattaforma li elimina. Quello che una piattaforma può fare è essere chiara con te: pubblicare le proprie condizioni, custodire il denaro dei clienti presso partner regolamentati e documentare come funzionano i prelievi.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Verifica dell’identità prima che i fondi possano circolare sul conto.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>I prelievi tornano sullo stesso metodo usato per il deposito.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Condizioni, informativa sui rischi e privacy pubblicate per intero.</span></li>
    </ul>
    <p class="jkkyl">Investire comporta rischi, inclusa la possibile perdita di parte o di tutto il capitale investito. Il valore degli investimenti può scendere come salire, e potresti recuperare meno di quanto hai versato. Non investire denaro che non puoi permetterti di perdere.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Inizia — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Invia un messaggio</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Come è stata costruita la piattaforma</h2>
    <ol class="nxlk2qu">
      <li><h3>Il punto di partenza</h3><p>Un piccolo gruppo di analisti e ingegneri sentiva sempre la stessa lamentela: gli strumenti esistono, ma nessuno li spiega.</p></li>
      <li><h3>Prima versione funzionante</h3><p>La prima versione faceva una sola cosa: mostrare un saldo e una posizione in termini semplici. Tutto il resto è stato rimosso finché quella parte non è risultata chiara.</p></li>
      <li><h3>Aggiungere il lato umano</h3><p>L’automazione risponde al cosa e al quando; le persone rispondono al perché. Sono stati aggiunti specialisti dell’assistenza perché ogni membro abbia qualcuno a cui rivolgersi.</p></li>
      <li><h3>Apertura a più mercati</h3><p>Metodi di pagamento locali, lingue locali e orari di assistenza locali.</p></li>
      <li><h3>Dove siamo ora</h3><p>Gli stessi principi su scala più ampia: cifre trasparenti, interlocutori raggiungibili, nessuna sorpresa nelle clausole minute.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Perché siamo qui</h2>
    <p>La maggior parte delle persone che vuole investire non inizia mai, perché ogni percorso sembra pensato per chi conosce già il vocabolario. Noi abbiamo costruito l’opposto: un solo conto, un linguaggio chiaro e uno specialista con cui puoi davvero parlare.</p>
    <p>Niente gergo dove basta una frase semplice, niente commissioni che compaiono solo dopo aver mosso il denaro, e niente promesse di rendimento che nessuno può garantire onestamente.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Utenti attivi</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>Volume scambiato</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Assistenza</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
