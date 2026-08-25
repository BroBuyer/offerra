<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Contatti ' . SITE_NAME . ' ᐉ Siamo qui per aiutarti';
$page_description = 'Hai una domanda su ' . SITE_NAME . ' o sul tuo conto?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Contatti</span>
    <h1>Siamo qui per aiutarti</h1>
    <p class="kpnq92g">Hai una domanda su <?= e(SITE_NAME) ?> o sul tuo conto? Il nostro team di assistenza sarà lieto di aiutarti. Scrivici e ti risponderemo il prima possibile.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Prima di scriverci</h2>
    <p>La maggior parte delle domande ha già una risposta sul sito, e controllare prima è in genere più rapido che aspettare una risposta.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">FAQ</a> — costi, prelievi, verifica e importi minimi.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Come funziona</a> — cosa succede dopo la registrazione, passo dopo passo.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Prezzi</a> — cosa è gratuito e dove può comparire un costo.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Inizia — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Come contattarci</h2>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Canale</th><th scope="col">Ideale per</th><th scope="col">Risposta</th></tr></thead>
      <tbody>
        <tr><td>Assistenza e-mail — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Domande sul conto, verifica, prelievi</td><td>In genere rispondiamo entro un giorno lavorativo.</td></tr>
        <tr><td>Richiesta di richiamo</td><td>Tutto ciò che si spiega più facilmente a voce</td><td>Orari di assistenza: dal lunedì al venerdì, dalle 9:00 alle 18:00</td></tr>
        <tr><td>Segnalazione di abuso — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/report-abuse</a></td><td>Usurpazione, uso improprio del marchio, messaggi sospetti</td><td>Esaminato alla ricezione</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Cosa aspettarti quando ci contatti</h2>
    <h3>Quale canale usare</h3>
    <p>L’e-mail è la scelta giusta per tutto ciò che include un allegato: controlli d’identità, domande sui prelievi, dubbi su un estratto. Il modulo di richiamo va bene per il resto, perché la maggior parte delle domande sul conto si risolve più in fretta in due minuti di conversazione che in quattro messaggi.</p>
    <h4>Fuori dagli orari di assistenza</h4>
    <p>I messaggi inviati di sera o nel weekend restano in coda e vengono gestiti per primi il giorno lavorativo successivo, in ordine di arrivo.</p>
    <h3>Le informazioni utili da indicare</h3>
    <p>L’e-mail di registrazione e la data approssimativa di ciò di cui parli bastano per ritrovare il conto. Non inviare mai una password, un numero di carta completo o un codice monouso: nessun membro del nostro team te li chiederà.</p>
    <h4>Se qualcosa non ti sembra normale</h4>
    <p>Segnalalo lo stesso giorno. Tutto ciò che riguarda un pagamento che non riconosci viene trattato subito, senza attendere nella coda abituale.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
