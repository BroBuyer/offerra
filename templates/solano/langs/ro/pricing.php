<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Prețuri ' . SITE_NAME;
$page_description = 'Prețuri simple și transparente — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Pricing</span>
    <h1>Prețuri simple și transparente.</h1>
    <p class="kpnq92g">Începutul cu <?= e(SITE_NAME) ?> este gratuit. Nu există comisioane ascunse pentru deschiderea unui cont și depuneți doar ceea ce alegeți să investiți: platforma și instrumentele sunt incluse.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Unde pot apărea costuri</h2>
    <p>Acestea sunt singurele puncte în care banii părăsesc soldul pentru altceva decât o investiție aleasă de dumneavoastră.</p>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Element</th><th scope="col">Perceput de</th><th scope="col">Notă</th></tr></thead>
      <tbody>
        <tr><td>Deschiderea contului</td><td>—</td><td>Gratuit.</td></tr>
        <tr><td>Acces la platformă</td><td>—</td><td>Inclus, fără abonament.</td></tr>
        <tr><td>Spread de piață</td><td>Broker</td><td>Diferența obișnuită dintre prețul de cumpărare și cel de vânzare.</td></tr>
        <tr><td>Comision de rețea / bancar</td><td>Furnizor de plăți</td><td>Depinde de metoda pe care o alegeți.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">Capitalul este în risc. Investiți doar ceea ce vă puteți permite să pierdeți.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Deschideți contul</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Ce este inclus</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Configurarea contului gratuită: fără taxe de înregistrare sau de licență.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Fără comisioane ascunse la depuneri, retrageri sau administrarea contului.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Se pot aplica doar spread-urile standard ale brokerului sau costurile de rețea.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Începeți de la depunerea minimă și creșteți în ritmul dumneavoastră.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Cum arată cifrele în practică</h2>
    <h3>O primă depunere, pas cu pas</h3>
    <p>Prima depunere este imaginea completă a costurilor, într-un loc: suma pe care o trimiteți, spread-ul la conversie și nimic altceva până decideți să tranzacționați. Nu există o taxă de cont la sfârșitul lunii și nicio taxă pentru a lăsa soldul nemișcat.</p>
    <h4>Ce se întâmplă în aceeași zi</h4>
    <p>Soldul apare după ce plata este decontată, iar un specialist parcurge planul înainte să se deschidă ceva. Nimic nu este plasat automat în numele dumneavoastră.</p>
    <h3>Retragerile și ce costă</h3>
    <p>Retragerile revin prin metoda de plată prin care au venit banii: este o cerință, nu o preferință, ca să rămână contul al dumneavoastră. Procesarea este gratuită din partea noastră; singura reținere pe care o puteți vedea este cea aplicată de banca sau emitentul cardului dumneavoastră.</p>
    <h4>Termene cu care puteți planifica</h4>
    <p>Solicitările dintr-o zi lucrătoare sunt analizate în aceeași zi. Returnările pe card se decontează de obicei în trei până la cinci zile lucrătoare, transferurile bancare în două.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
