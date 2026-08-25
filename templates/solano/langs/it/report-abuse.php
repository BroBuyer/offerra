<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Segnala un abuso ᐉ ' . SITE_NAME;
$page_description = 'Segnala un abuso — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Fiducia e sicurezza</span>
    <h1>Segnala un abuso</h1>
    <p class="rmct9">Aiutaci a proteggere <?= e(SITE_NAME) ?>. Segnala una frode sospetta, un’usurpazione d’identità o un uso improprio della nostra piattaforma o del nostro marchio.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>Cosa segnalare</h2>
    <p>Segnala al nostro team Fiducia e sicurezza uno dei seguenti casi:</p>
    <ul>
      <li>E-mail di phishing, siti fraudolenti o app false che si spacciano per <?= e(SITE_NAME) ?>.</li>
      <li>Account sui social, annunci o canali di messaggistica che abusano del nostro nome, logo o marchi.</li>
      <li>Sospetto di dirottamento del conto, accesso non autorizzato o furto d’identità.</li>
      <li>Richieste di pagamento sospette, «agenti di recupero» o terzi che affermano di agire per nostro conto.</li>
      <li>Abuso di mercato, sospetti di riciclaggio o qualsiasi attività illegale legata ai nostri servizi.</li>
      <li>Comportamento abusivo, minaccioso o molesto verso il nostro personale o i nostri utenti.</li>
    </ul>

    <h2>Come segnalare</h2>
    <p>Inviaci una segnalazione dettagliata tramite uno dei canali qui sotto. Se possibile, allega:</p>
    <ul>
      <li>La data e l’ora dell’incidente.</li>
      <li>URL, screenshot, intestazioni dei messaggi, indirizzi del mittente o numeri di telefono.</li>
      <li>Le informazioni del tuo conto (se la segnalazione riguarda il tuo conto).</li>
      <li>Qualsiasi altro contesto che possa aiutarci a indagare.</li>
    </ul>

    <div class="ziavo">
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>E-mail Fiducia e sicurezza</b>
        <span>Usa la pagina contatti per raggiungere il nostro team Fiducia e sicurezza. Le segnalazioni vengono classificate entro un giorno lavorativo.</span>
      </div>
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Divulgazione di sicurezza</b>
        <span>Per una divulgazione responsabile di vulnerabilità di sicurezza che riguardano i nostri sistemi, contattaci prima di condividere i dettagli pubblicamente.</span>
      </div>
    </div>

    <h2>Cosa succede dopo?</h2>
    <p>Esaminiamo ogni segnalazione. A seconda della natura del problema, possiamo contattarti per ulteriori informazioni, collaborare con fornitori di pagamento o host per rimuovere contenuti fraudolenti, oppure coinvolgere le forze dell’ordine o le autorità. Trattiamo le segnalazioni in modo confidenziale e, quando la legge lo consente, proteggiamo l’identità di chi segnala.</p>

    <h2>Situazioni urgenti</h2>
    <p>Se ritieni di essere vittima di un reato, contatta anche le autorità locali oltre a informarci. Se sospetti che il tuo conto sia stato compromesso, cambia subito la password e avvisaci senza indugio.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Contatta Fiducia e sicurezza</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Torna alla home</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
