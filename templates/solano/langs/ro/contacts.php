<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Contact ' . SITE_NAME . ' ᐉ Suntem aici să vă ajutăm';
$page_description = 'Aveți o întrebare despre ' . SITE_NAME . ' sau despre contul dumneavoastră?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Contact</span>
    <h1>Suntem aici să vă ajutăm</h1>
    <p class="kpnq92g">Aveți o întrebare despre <?= e(SITE_NAME) ?> sau despre cont? Echipa de suport vă va ajuta cu plăcere. Scrieți-ne și vom răspunde cât de curând putem.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Înainte să ne scrieți</h2>
    <p>Majoritatea întrebărilor au deja un răspuns pe site, iar verificarea mai întâi este de obicei mai rapidă decât așteptarea unui răspuns.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">Întrebări frecvente</a> — costuri, retrageri, verificare și sume minime.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Cum funcționează</a> — ce se întâmplă după înregistrare, pas cu pas.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Prețuri</a> — ce este gratuit și unde poate apărea un cost.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Începeți — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Cum să ne contactați</h2>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Canal</th><th scope="col">Cel mai potrivit pentru</th><th scope="col">Răspuns</th></tr></thead>
      <tbody>
        <tr><td>Suport prin e-mail — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Întrebări despre cont, verificare, retrageri</td><td>De obicei răspundem în termen de o zi lucrătoare.</td></tr>
        <tr><td>Solicitare de apel invers</td><td>Orice se explică mai ușor la telefon</td><td>Ore de suport: luni–vineri, 9:00–18:00</td></tr>
        <tr><td>Raport de abuz — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/report-abuse</a></td><td>Impersonare, folosire abuzivă a mărcii, mesaje suspecte</td><td>Analizat la primire</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Ce să așteptați când ne contactați</h2>
    <h3>Ce canal să folosiți</h3>
    <p>E-mailul este alegerea potrivită pentru orice cu atașament: verificări de identitate, întrebări despre retrageri, chestiuni privind un extras. Formularul de apel invers este pentru restul, deoarece majoritatea întrebărilor despre cont se rezolvă mai rapid în două minute de conversație decât în patru mesaje.</p>
    <h4>În afara orelor de suport</h4>
    <p>Mesajele trimise seara sau în weekend rămân în coadă și primesc răspuns primul lucru în următoarea zi lucrătoare, în ordinea sosirii.</p>
    <h3>Detalii care merită incluse</h3>
    <p>E-mailul înregistrat și data aproximativă a ceea ce întrebați sunt suficiente pentru a găsi contul. Nu trimiteți niciodată o parolă, un număr complet de card sau un cod unic: nimeni din echipă nu vi le va cere vreodată.</p>
    <h4>Dacă ceva nu pare în regulă</h4>
    <p>Raportați-l în aceeași zi. Orice implică o plată pe care nu o recunoașteți este tratat imediat, fără a aștepta în coada obișnuită.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
