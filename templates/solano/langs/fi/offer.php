<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Miksi me ' . SITE_NAME;
$page_description = 'Miksi ihmiset aloittavat palvelussa ' . SITE_NAME;
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Miksi tämä alusta</span>
    <h1>Miksi ihmiset aloittavat täällä</h1>
    <p class="kpnq92g">Ei myyntipuhetta: konkreettiset, tarkistettavat syyt — sekä se, mikä ei sovi kaikille.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Ei taulukoita. Ei täyteen ahdettuja näyttöjä. Ei viime hetken epäilyksiä</h2>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Alusta</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Perinteinen välittäjä</th><th scope="col">Kaupankäynti itse</th></tr></thead>
      <tbody>
        <tr><td>Tekoälyn toimeksiantojen toteutus</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">rajoitetut tunnit</td><td style="color:var(--muted)">manuaalisesti</td></tr>
        <tr><td>24/7-kattavuus kaikilla markkinoilla</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">paperityöt</td><td style="color:var(--muted)">Itse</td></tr>
        <tr><td>Alle sekunnin toimeksiantojen reititys</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">vain tason mukaan</td><td style="color:var(--muted)">manuaalisesti</td></tr>
        <tr><td>Monivaluuttaraportointi</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">rajoitetut tunnit</td><td style="color:var(--muted)">Itse</td></tr>
        <tr><td>Paperiton tilinavaus</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">paperityöt</td><td style="color:var(--muted)">manuaalisesti</td></tr>
        <tr><td>Pörssien välinen arbitraasi</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">vain tason mukaan</td><td style="color:var(--muted)">Itse</td></tr>
        <tr><td>Oma henkilökohtainen manageri</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">rajoitetut tunnit</td><td style="color:var(--muted)">manuaalisesti</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Mitä saatte, mitä itse-tehty asetus ei anna</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Alle sekunnin toteutus jokaisella yhdistetyllä markkinalla.</b> <?= e(SITE_NAME) ?> pitää pysyvät matalan viiveen API-yhteydet jokaiseen tuettuun pörssiin. Kun malli tuottaa signaalin, toimeksianto lähetetään, toteutetaan ja kirjataan koontinäyttöön ennen seuraavaa tikkiä.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Se toimii 24/7, jokaisessa markkinaistunnossa.</b> Krypto ei lepää, eikä myöskään <?= e(SITE_NAME) ?>. Moottori analysoi pareja viikonloppuisin ja pyhäpäivinä, jotta tilaisuus ei jää väliin.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Monivaluuttaraportointi.</b> Jokainen saldo, kauppa ja nosto näytetään paikallisessa valuutassanne. Ei piilotettuja muunnosvaiheita missään kohdassa.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Eroteltu pääoma.</b> Varanne pysyvät omalla tilillänne. <?= e(SITE_NAME) ?> ei koskaan pidä niitä: moottorilla on vain oikeus lähettää toimeksiantoja.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Pankkitason tietoturva.</b> TLS-salaus koko alustalla, kaksivaiheinen vahvistus oletuksena ja neljännesvuosittaiset kolmannen osapuolen infrastruktuuriauditoinnit. Kauppakuitit kirjataan ketjuun.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Kolme omaisuusluokkaa, yksi alusta.</b> Useimmat vähittäisalustat rajaavat teidät yhdelle markkinalle. <?= e(SITE_NAME) ?> käy kauppaa kryptovaluutoilla, listatuilla osakkeilla ja tärkeimmillä valuuttapareilla samalta koontinäytöltä.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Ennalta asetetut riskirajat jokaiselle positiolle.</b> Stop-loss, suurin hyväksytty tappio ja pääoman allokointikatot asetetaan omaisuusluokan mukaan. Moottori sulkee automaattisesti kaupan, joka ylittää kynnyksen, ja tapahtuma kirjataan auditointihistoriaan.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Kenelle tämä todennäköisesti ei ole</h2>
    <p>Suoruus säästää kaikkien aikaa. Jos jokin seuraavista kuvaa teitä, toinen reitti sopii paremmin.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Tarvitsette taatut tuotot. Yksikään rehellinen alusta ei tarjoa niitä, emmekä mekään.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Haluatte sijoittaa rahaa, jota ette voi olla ilman.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Käytte kauppaa ammattivolyymilla omalla toteutusinfrastruktuurillanne.</span></li>
    </ul>
    <p class="jkkyl">Sijoittamiseen liittyy riski, mukaan lukien osan tai koko pääoman mahdollinen menetys. Sijoitusten arvo voi laskea tai nousta, ja voitte saada takaisin vähemmän kuin alun perin panitte. Teidän ei tulisi sijoittaa rahaa, jonka menetystä ette voi sietää.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Aloita — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
