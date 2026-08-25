<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Riskitiedote ᐉ ' . SITE_NAME;
$page_description = 'Riskitiedote — ' . SITE_NAME;
$page_canonical = page_url("risk-disclosure.php");
$active_page = "risk";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Tärkeää</span>
    <h1>Riskitiedote</h1>
    <p class="rmct9">Lukekaa tämä tiedote huolellisesti ennen <?= e(SITE_NAME) ?>:n tai siihen liittyvän palvelun käyttöä.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Viimeksi päivitetty: tammikuu 2025</p>

    <div class="ntr9c">
      <strong>Sijoittamiseen liittyy riski.</strong> Sijoitusten arvo voi laskea tai nousta. Voitte menettää osan tai koko sijoittamanne pääoman. <strong>Aiempi tuotto ei ole luotettava indikaattori tulevista tuloksista.</strong> Sijoittakaa vain rahaa, jonka menetystä voitte sietää.
    </div>

    <h2>1. Yleinen varoitus</h2>
    <p>Kaupankäynti ja sijoittaminen rahoitusvälineisiin, kryptovaluuttoihin ja muihin digitaalisiin omaisuuseriin sisältää korkean riskin eikä välttämättä sovi kaikille sijoittajille. Ennen <?= e(SITE_NAME) ?>:n käyttöä harkitkaa huolellisesti sijoitustavoitteitanne, kokemustanne ja riskinsietoa.</p>

    <h2>2. Markkinariski</h2>
    <p>Rahoitusvälineiden ja digitaalisten omaisuuserien hinnat voivat vaihdella merkittävästi lyhyessä ajassa markkinoiden, makrotalouden, sääntelyn, likviditeetin ja muiden hallitsemattomiemme tekijöiden vuoksi. Viputuotteissa tappiot voivat ylittää alkuperäisen talletuksen.</p>

    <h2>3. Digitaalisten omaisuuserien volatiliteetti</h2>
    <p>Kryptovaluutat ja muut digitaaliset omaisuuserät ovat erityisen volatiileja. Arvoon voivat vaikuttaa verkkotapahtumat, forkit, pörssien katkokset, hakkerointi tai äkillinen luottamuksen menetys. Ei ole takeita, että omaisuuserä säilyttää tietyn arvon tai pysyy kaupankäynnin kohteena.</p>

    <h2>4. Vipuriski</h2>
    <p>Kun vipu on saatavilla, se vahvistaa sekä voittoja että tappioita. Suhteellisen pieni markkinaliike voi aiheuttaa suhteessa suuremman liikkeen positionne arvossa ja johtaa varojen täydelliseen menetykseen tai talletuksen ylittäviin velkoihin.</p>

    <h2>5. Teknologia- ja toteutusriski</h2>
    <p>Verkkokaupankäyntialustoihin voivat vaikuttaa häiriöt, kuten järjestelmäviat, viiveet, yhteysongelmat ja kyberhyökkäykset. Ne voivat estää toimeksiantojen toteutuksen pyydetyillä hinnoilla tai kokonaan.</p>

    <h2>6. Ei sijoitusneuvontaa</h2>
    <p><?= e(SITE_NAME) ?>:n tiedot, mukaan lukien tekoälyn signaalit, koontinäytöt, koulutus tai analyysit, ovat vain tiedoksi eivätkä ole räätälöityä sijoitusneuvontaa, suositusta tai kehotusta ostaa tai myydä rahoitusvälinettä. Sijoituspäätöksistä vastaatte yksin te.</p>

    <h2>7. Aiempi tuotto</h2>
    <p><strong>Aiempi tuotto ei ole luotettava indikaattori tulevasta tuotosta.</strong> Backtestit, simulaatiot, mallituotot ja hypoteettiset tulokset sisältävät luontaisia rajoituksia eivätkä heijasta todellisia kaupankäyntituloksia.</p>

    <h2>8. Sääntely- ja veronäkökohdat</h2>
    <p>Rahoitusvälineiden ja digitaalisten omaisuuserien sääntelykohtelu vaihtelee lainkäyttöalueittain ja kehittyy. Vastuussanne on ymmärtää ja noudattaa teihin sovellettavia lakeja, mukaan lukien toiminnasta syntyvät verovelvoitteet.</p>

    <h2>9. Hakekaa riippumatonta neuvontaa</h2>
    <p>Jos teillä on epäilystä <?= e(SITE_NAME) ?>:n kautta tarjotun tuotteen tai palvelun sopivuudesta, hakekaa riippumatonta asiantuntija-apua ennen jatkamista.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Takaisin etusivulle</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
