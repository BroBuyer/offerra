<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Raportați un abuz ᐉ ' . SITE_NAME;
$page_description = 'Raportați un abuz — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Încredere și siguranță</span>
    <h1>Raportați un abuz</h1>
    <p class="etpy2">Ajutați-ne să menținem <?= e(SITE_NAME) ?> în siguranță. Raportați suspiciuni de fraudă, impersonare sau folosire abuzivă a platformei ori a mărcii.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>Ce să raportați</h2>
    <p>Vă rugăm să raportați echipei Încredere și siguranță oricare dintre următoarele:</p>
    <ul>
      <li>E-mailuri de phishing, site-uri frauduloase sau aplicații false care pretind a fi <?= e(SITE_NAME) ?>.</li>
      <li>Conturi de social media, reclame sau canale de mesagerie care folosesc abuziv numele, logo-ul sau mărcile noastre.</li>
      <li>Suspiciune de preluare a contului, acces neautorizat sau furt de identitate.</li>
      <li>Solicitări de plată suspecte, „agenți de recuperare” sau terți care pretind că acționează în numele nostru.</li>
      <li>Abuz de piață, suspiciuni de spălare de bani sau orice activitate ilegală legată de serviciile noastre.</li>
      <li>Comportament abuziv, amenințător sau de hărțuire față de personalul sau utilizatorii noștri.</li>
    </ul>

    <h2>Cum să raportați</h2>
    <p>Trimiteți-ne un raport detaliat prin oricare dintre canalele de mai jos. Dacă puteți, includeți:</p>
    <ul>
      <li>Data și ora incidentului.</li>
      <li>URL-uri, capturi de ecran, anteturi de mesaje, adrese ale expeditorului sau numere de telefon.</li>
      <li>Informațiile contului (dacă raportul privește contul dumneavoastră).</li>
      <li>Orice alt context care ne poate ajuta la investigație.</li>
    </ul>

    <div class="ziavo">
      <div class="ws86ccr">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>E-mail Încredere și siguranță</b>
        <span>Folosiți pagina de contact pentru a ajunge la echipa Încredere și siguranță. Rapoartele sunt triate în termen de o zi lucrătoare.</span>
      </div>
      <div class="ws86ccr">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Dezvăluirea vulnerabilităților</b>
        <span>Pentru dezvăluirea responsabilă a vulnerabilităților de securitate care afectează sistemele noastre, contactați-ne înainte de a împărtăși detaliile public.</span>
      </div>
    </div>

    <h2>Ce urmează?</h2>
    <p>Analizăm fiecare raport. În funcție de natura problemei, vă putem contacta pentru mai multe informații, putem colabora cu furnizorii de plăți sau de hosting pentru a elimina conținutul fraudulos sau putem sesiza autoritățile. Tratăm rapoartele confidențial și, acolo unde legea permite, protejăm identitatea celor care raportează.</p>

    <h2>Situații urgente</h2>
    <p>Dacă credeți că ați fost victima unei infracțiuni, contactați autoritatea locală de aplicare a legii și anunțați-ne și pe noi. Dacă bănuiți că contul a fost compromis, schimbați imediat parola și notificați-ne de îndată.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Contactați Încredere și siguranță</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Înapoi acasă</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
