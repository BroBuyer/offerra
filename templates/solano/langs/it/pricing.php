<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Prezzi ' . SITE_NAME;
$page_description = 'Prezzi semplici e trasparenti — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Prezzi</span>
    <h1>Prezzi semplici e trasparenti.</h1>
    <p class="kpnq92g">Iniziare con <?= e(SITE_NAME) ?> è gratuito. Non ci sono costi nascosti per aprire un conto, e versi solo ciò che scegli di investire: la piattaforma e i suoi strumenti sono inclusi.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Dove possono comparire dei costi</h2>
    <p>Questi sono gli unici momenti in cui del denaro lascia il tuo saldo per qualcosa che non sia un investimento scelto da te.</p>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Voce</th><th scope="col">Addebitato da</th><th scope="col">Nota</th></tr></thead>
      <tbody>
        <tr><td>Apertura del conto</td><td>—</td><td>Gratuita.</td></tr>
        <tr><td>Accesso alla piattaforma</td><td>—</td><td>Incluso, senza abbonamento.</td></tr>
        <tr><td>Spread di mercato</td><td>Broker</td><td>La differenza abituale tra prezzo di acquisto e di vendita.</td></tr>
        <tr><td>Commissioni di rete / bancarie</td><td>Fornitore di pagamento</td><td>Dipende dal metodo che scegli.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">Il capitale è a rischio. Investi solo ciò che puoi permetterti di perdere.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Apri il tuo conto</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Cosa è incluso</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Apertura del conto gratuita: nessun costo di iscrizione né di licenza.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Nessun addebito nascosto su depositi, prelievi o tenuta del conto.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Possono applicarsi solo gli spread abituali del broker o i costi di rete.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Inizia dal deposito minimo e scala al tuo ritmo.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Come si presentano le cifre in pratica</h2>
    <h3>Un primo deposito, passo dopo passo</h3>
    <p>Il primo deposito riunisce tutto il quadro dei costi in un solo posto: l’importo che invii, lo spread in fase di conversione, e nient’altro finché non decidi di operare. Non c’è una quota del conto a fine mese, né un addebito per lasciare il saldo così com’è.</p>
    <h4>Cosa succede lo stesso giorno</h4>
    <p>Il saldo compare quando il pagamento è compensato, e uno specialista ripercorre il piano prima che venga aperto qualsiasi cosa. Niente viene piazzato automaticamente a tuo nome.</p>
    <h3>I prelievi e quanto costano</h3>
    <p>I prelievi tornano al metodo di pagamento con cui è arrivato il denaro: è un requisito, non una preferenza, perché il conto resti tuo. L’elaborazione è gratuita da parte nostra; l’unica detrazione che potresti vedere è quella della tua banca o dell’emittente della carta.</p>
    <h4>Tempi su cui puoi contare</h4>
    <p>Le richieste fatte in un giorno lavorativo vengono esaminate lo stesso giorno. I rimborsi su carta si regolano in genere entro tre-cinque giorni lavorativi, i bonifici entro due.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
