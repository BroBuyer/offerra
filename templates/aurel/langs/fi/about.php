<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Tietoa: ' . SITE_NAME;
$page_description = 'Yksi tili, selkeä näkymä pääomaan — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Alusta</span>
    <h1>Yksi tili, selkeä näkymä kaikkeen</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> kokoaa saldon, strategian ja tuloksen yhteen läpinäkyvään koontinäyttöön, jotta jokainen päätös on perusteltu ja jokainen luku näkyvissä.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Ihmiset tilinne takana</h2>
    <p>Käyttöliittymän takana ovat analyytikot, jotka tutkivat markkinoita joka päivä, insinöörit, jotka pitävät alustan käynnissä, ja tukiasiantuntijat, jotka vastaavat kielellänne.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Markkina-analyytikot, jotka arvioivat olosuhteita päivittäin, ei kerran neljänneksessä.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Insinöörit alustan käytettävissä, ympärivuorokautisella valvonnalla.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Tukiasiantuntijat käyttöönottoon, vahvistukseen ja nostoihin.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Sääntely, riski ja mitä emme lupaa</h2>
    <p>Sijoittamiseen liittyy riski, eikä mikään alusta poista sitä. Alusta voi olla teille selkeä: julkaista ehdot, pitää asiakasvarat säännellyillä partnereilla ja dokumentoida, miten nostot toimivat.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Henkilöllisyyden vahvistus, ennen kuin varat voivat liikkua tilillä.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Nostot palaavat samalle tavalle kuin talletus.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ehdot, riskitiedote ja tietosuojakäytäntö julkaistu kokonaan.</span></li>
    </ul>
    <p class="jkkyl">Sijoittamiseen liittyy riski, mukaan lukien osan tai koko pääoman mahdollinen menetys. Sijoitusten arvo voi laskea tai nousta, ja voitte saada takaisin vähemmän kuin alun perin panitte. Teidän ei tulisi sijoittaa rahaa, jonka menetystä ette voi sietää.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Aloita — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Lähetä viesti</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Miten alusta rakennettiin</h2>
    <ol class="nxlk2qu">
      <li><h3>Aloituspiste</h3><p>Pieni ryhmä analyytikkoja ja insinöörejä kuuli yhä saman valituksen: työkalut ovat olemassa, mutta kukaan ei selitä niitä.</p></li>
      <li><h3>Ensimmäinen toimiva versio</h3><p>Ensimmäinen versio teki yhden asian: näytti saldon ja position selkeästi. Kaikki muu riisuttiin, kunnes se osa oli kirkas.</p></li>
      <li><h3>Inhimillinen puoli mukaan</h3><p>Automaatio vastaa mitä ja milloin; ihmiset vastaavat miksi. Tukiasiantuntijat lisättiin, jotta jokaisella jäsenellä on joku, jolta kysyä.</p></li>
      <li><h3>Avautuminen uusille markkinoille</h3><p>Paikalliset maksutavat, kielet ja tukiajat.</p></li>
      <li><h3>Missä olemme nyt</h3><p>Samat periaatteet suuremmassa mittakaavassa: läpinäkyvät luvut, ihmiset, jotka tavoitatte, ei yllätyksiä pienessä präntissä.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Miksi olemme täällä</h2>
    <p>Useimmat, jotka haluavat sijoittaa, eivät koskaan aloita, koska jokainen polku näyttää suunnitellulta sille, joka jo tuntee sanaston. Rakensimme päinvastaisen: yksi tili, selkeä kieli ja asiantuntija, jonka kanssa todella puhutte.</p>
    <p>Ei jargonia siellä, missä tavallinen lause riittää, ei kuluja, jotka ilmestyvät vasta rahan liikuttua, eikä tuottolupauksia, joita kukaan ei voi rehellisesti taata.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Aktiiviset käyttäjät</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>Kaupankäyntivolyymi</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Tuki</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
