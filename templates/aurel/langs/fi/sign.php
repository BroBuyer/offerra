<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Rekisteröityminen ' . SITE_NAME;
$page_description = 'Avaa tilisi palvelussa ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Aloita nyt</span>
    <h1>Avaa tilisi</h1>
    <p class="kpnq92g">Muutama tieto aluksi, sitten asiantuntija jatkaa. Tässä vaiheessa ei oteta maksua.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Mitä seuraavaksi</h2>
    <ol class="nxlk2qu">
      <li><h3>Lähetätte lomakkeen</h3><p>Se vie muutaman minuutin eikä maksa mitään.</p></li>
      <li><h3>Asiantuntija soittaa</h3><p>He vahvistavat tietonne, vastaavat kysymyksiin ja selittävät seuraavan vaiheen. Ei painostusta talletukseen.</p></li>
      <li><h3>Vahvistatte ja valitsette summan</h3><p>Vasta sitten raha liikkuu, ja vain valitsemanne summa.</p></li>
    </ol>
    <p class="jkkyl">Sijoittamiseen liittyy riski, mukaan lukien osan tai koko pääoman mahdollinen menetys. Sijoitusten arvo voi laskea tai nousta, ja voitte saada takaisin vähemmän kuin alun perin panitte. Teidän ei tulisi sijoittaa rahaa, jonka menetystä ette voi sietää.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Aloita — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">UKK</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Mitä tarvitsette</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Sähköpostiosoite, jota todella luette.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Puhelinnumero, jotta asiantuntija tavoittaa teidät.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Henkilöllisyystodistus myöhempää vahvistusta varten.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Mitä tapahtuu lomakkeen lähettämisen jälkeen</h2>
    <h3>Vahvistuspuhelu</h3>
    <p>Asiantuntija soittaa vahvistaakseen lähettämänne tiedot, vastatakseen kysymyksiin ja sopiakseen järkevän aloitussumman. Puhelu on keskustelu, ei myyntikäsikirjoitus: epärealistisilla odotuksilla avattu tili ei auta ketään.</p>
    <h4>Kuinka kauan se kestää</h4>
    <p>Yleensä yksi puhelu, kymmenestä viiteentoista minuuttiin. Jos haluatte, että teille soitetaan tiettyyn aikaan, kertokaa se lomakkeessa, niin aikaa noudatetaan.</p>
    <h3>Henkilöllisyystarkistukset selitettynä</h3>
    <p>Ennen ensimmäistä talletusta teiltä pyydetään valokuvallinen henkilöllisyystodistus ja tuore asiakirja osoitteestanne. Sama vaatimus on jokaisella säännellyllä rahoituspalvelulla — jotta nosto voi palata vain teille.</p>
    <h4>Mitä hyväksytään</h4>
    <p>Passi tai henkilökortti sekä sähkölasku tai tiliote viimeiseltä kolmelta kuukaudelta. Selkeä puhelimella otettu kuva riittää.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Avaa tilisi</h2>
      <p class="pt6joj">Pääsette alkuun muutamassa minuutissa.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Aloita nyt';
  $form_class = 'leadform lead-form aurel-form';
  $form_variant = 'band';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
