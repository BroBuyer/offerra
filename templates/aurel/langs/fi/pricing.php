<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Hinnat ' . SITE_NAME;
$page_description = 'Yksinkertainen, läpinäkyvä hinnoittelu — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Pricing</span>
    <h1>Yksinkertainen, läpinäkyvä hinnoittelu.</h1>
    <p class="kpnq92g">Aloittaminen palvelussa <?= e(SITE_NAME) ?> on maksutonta. Tilin avaamisesta ei ole piilotettuja kuluja, ja talletatte vain sen, minkä päätätte sijoittaa: alusta ja työkalut sisältyvät.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Missä kuluja voi ilmaantua</h2>
    <p>Nämä ovat ainoat kohdat, joissa rahaa lähtee saldosta johonkin muuhun kuin valitsemaanne sijoitukseen.</p>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Kohta</th><th scope="col">Veloittaa</th><th scope="col">Huomautus</th></tr></thead>
      <tbody>
        <tr><td>Tilin avaus</td><td>—</td><td>Maksuton.</td></tr>
        <tr><td>Pääsy alustalle</td><td>—</td><td>Sisältyy, ilman tilausta.</td></tr>
        <tr><td>Markkinaspread</td><td>Välittäjä</td><td>Tavanomainen ero osto- ja myyntihinnan välillä.</td></tr>
        <tr><td>Verkko- / pankkikulu</td><td>Maksupalveluntarjoaja</td><td>Riippuu valitsemastanne tavasta.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">Pääoma on riskissä. Sijoittakaa vain se, minkä menetystä voitte sietää.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Avaa tilisi</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Mitä sisältyy</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Tilin perustaminen maksutta: ei rekisteröinti- tai lisenssimaksuja.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ei piilotettuja kuluja talletuksista, nostoista tai tilin ylläpidosta.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Vain tavanomaiset välittäjän spreadit tai verkkokulut voivat soveltua.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Aloittakaa vähimmäistalletuksesta ja skaalatkaa omaan tahtiinne.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Miltä luvut näyttävät käytännössä</h2>
    <h3>Ensimmäinen talletus vaiheittain</h3>
    <p>Ensimmäinen talletus on koko kulukuva yhdessä paikassa: summa, jonka lähetätte, spread muunnoksessa ja ei mitään muuta, ennen kuin päätätte käydä kauppaa. Ei kuukausimaksua tilistä eikä kulua siitä, että jätätte saldon paikalleen.</p>
    <h4>Mitä tapahtuu samana päivänä</h4>
    <p>Saldo näkyy, kun maksu on selvitetty, ja asiantuntija käy suunnitelman kanssanne läpi ennen kuin mitään avataan. Mitään ei tehdä automaattisesti puolestanne.</p>
    <h3>Nostot ja mitä ne maksavat</h3>
    <p>Nostot palaavat maksutavalle, josta raha tuli: se on vaatimus, ei mieltymys, jotta tili pysyy teidän. Käsittely on meidän puoleltamme maksutonta; ainoa vähennys voi olla oman pankkinne tai kortinmyöntäjän perimä.</p>
    <h4>Aikataulut, joiden mukaan voitte suunnitella</h4>
    <p>Arkipäivänä tehdyt pyynnöt käsitellään samana päivänä. Palautukset kortille selvitetään yleensä kolmessa–viidessä arkipäivässä, tilisiirrot kahdessa.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
