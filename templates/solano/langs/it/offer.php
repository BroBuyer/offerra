<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Perché noi ' . SITE_NAME;
$page_description = 'Perché le persone scelgono di iniziare con ' . SITE_NAME;
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Perché questa piattaforma</span>
    <h1>Perché le persone scelgono di iniziare qui</h1>
    <p class="kpnq92g">Non un discorso commerciale: motivi precisi e verificabili, e anche i punti che non convengono a tutti.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Niente fogli di calcolo. Niente schermi. Niente dubbi dell’ultimo minuto</h2>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Piattaforma</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Broker tradizionale</th><th scope="col">Trading in autonomia</th></tr></thead>
      <tbody>
        <tr><td>Esecuzione degli ordini con IA</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">orari limitati</td><td style="color:var(--muted)">manuale</td></tr>
        <tr><td>Copertura 24/7 su tutti i mercati</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">burocrazia</td><td style="color:var(--muted)">In autonomia</td></tr>
        <tr><td>Instradamento degli ordini in meno di un secondo</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">solo per livello</td><td style="color:var(--muted)">manuale</td></tr>
        <tr><td>Report multi-valuta</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">orari limitati</td><td style="color:var(--muted)">In autonomia</td></tr>
        <tr><td>Apertura conto senza carta</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">burocrazia</td><td style="color:var(--muted)">manuale</td></tr>
        <tr><td>Arbitraggio tra exchange</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">solo per livello</td><td style="color:var(--muted)">In autonomia</td></tr>
        <tr><td>Gestore personale dedicato</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">orari limitati</td><td style="color:var(--muted)">manuale</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Cosa ottieni che un approccio in autonomia non offre</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Esecuzione in meno di un secondo su ogni mercato collegato.</b> <?= e(SITE_NAME) ?> mantiene connessioni API permanenti a bassa latenza con ogni exchange supportato. Quando il modello genera un segnale, l’ordine viene inviato, eseguito e registrato sul tuo pannello prima del tick successivo.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Funziona 24/7, in ogni sessione di mercato.</b> Le crypto non riposano, e <?= e(SITE_NAME) ?> nemmeno. Il motore continua ad analizzare le coppie nei weekend e nei giorni festivi perché un’opportunità non venga persa.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Report multi-valuta.</b> Ogni saldo, ogni operazione e ogni prelievo viene mostrato nella tua valuta locale. Nessun passaggio di conversione nascosto in nessun momento.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Capitale segregato.</b> I tuoi fondi restano sul tuo conto. <?= e(SITE_NAME) ?> non li custodisce mai: il motore ha solo l’autorizzazione a inviare ordini.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Sicurezza di livello bancario.</b> Crittografia TLS su tutta la piattaforma, verifica in due passaggi di default e audit trimestrali dell’infrastruttura da parte di terzi. Ricevute delle operazioni registrate on-chain.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Tre classi di asset, un’unica piattaforma.</b> La maggior parte delle piattaforme al dettaglio ti limita a un solo mercato. <?= e(SITE_NAME) ?> opera criptovalute, azioni quotate e le principali coppie di valute dallo stesso pannello.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Limiti di rischio predefiniti su ogni posizione.</b> Stop-loss, perdita massima accettata e tetti di allocazione del capitale sono configurati per classe di asset. Il motore chiude automaticamente qualsiasi operazione che superi una soglia e l’evento viene registrato nel tuo storico di audit.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>A chi probabilmente non conviene</h2>
    <p>Dirlo chiaramente fa risparmiare tempo a tutti. Se uno di questi punti ti descrive, un’altra strada ti starà meglio.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Hai bisogno di rendimenti garantiti. Nessuna piattaforma onesta li offre, e noi nemmeno.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Vuoi investire denaro di cui non puoi fare a meno.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Operi a volume professionale con la tua infrastruttura di esecuzione.</span></li>
    </ul>
    <p class="jkkyl">Investire comporta rischi, inclusa la possibile perdita di parte o di tutto il capitale investito. Il valore degli investimenti può scendere come salire, e potresti recuperare meno di quanto hai versato. Non investire denaro che non puoi permetterti di perdere.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Inizia — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
