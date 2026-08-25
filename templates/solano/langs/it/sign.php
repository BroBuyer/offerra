<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Registrazione ' . SITE_NAME;
$page_description = 'Apri il tuo conto su ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Inizia</span>
    <h1>Apri il tuo conto</h1>
    <p class="kpnq92g">Alcuni dati per partire, poi uno specialista si occupa del resto. In questa fase non viene chiesto alcun pagamento.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Cosa succede dopo</h2>
    <ol class="nxlk2qu">
      <li><h3>Invii il modulo</h3><p>Ci vogliono pochi minuti e non costa nulla.</p></li>
      <li><h3>Ti chiama uno specialista</h3><p>Conferma i tuoi dati, risponde alle domande e spiega il passo successivo. Nessuna pressione a depositare.</p></li>
      <li><h3>Verifichi l’identità e scegli un importo</h3><p>Solo allora circola denaro, e soltanto l’importo che scegli tu.</p></li>
    </ol>
    <p class="jkkyl">Investire comporta rischi, inclusa la possibile perdita di parte o di tutto il capitale investito. Il valore degli investimenti può scendere come salire, e potresti recuperare meno di quanto hai versato. Non investire denaro che non puoi permetterti di perdere.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Inizia — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">FAQ</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Di cosa hai bisogno</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Un’e-mail che consulti davvero.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Un telefono, così uno specialista può raggiungerti.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Un documento d’identità, per la verifica successiva.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Cosa succede dopo l’invio del modulo</h2>
    <h3>La chiamata di verifica</h3>
    <p>Uno specialista chiama per confermare i dati che hai inviato, rispondere alle domande e concordare un importo iniziale ragionevole per te. È una conversazione, non uno script commerciale: un conto aperto su aspettative irrealistiche non serve a nessuno.</p>
    <h4>Quanto tempo richiede</h4>
    <p>In genere una chiamata di dieci-quindici minuti. Se preferisci essere richiamato a un orario preciso, indicarlo nel modulo: la fascia viene rispettata.</p>
    <h3>I controlli d’identità spiegati</h3>
    <p>Prima del primo deposito ti verranno chiesti un documento d’identità con foto e un giustificativo recente di domicilio. È lo stesso requisito di qualsiasi servizio finanziario regolamentato, ed esiste perché un prelievo possa tornare solo a te.</p>
    <h4>Cosa è accettato</h4>
    <p>Passaporto o carta d’identità, e una bolletta o un estratto conto degli ultimi tre mesi. Una foto nitida scattata col telefono è sufficiente.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Apri il tuo conto</h2>
      <p class="pt6joj">Inizia in pochi minuti.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Inizia ora';
  $form_class = 'leadform lead-form solano-form';
  $form_variant = 'band';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
