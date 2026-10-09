<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Usein kysytyt kysymykset | ' . SITE_NAME . ' - FAQ';
$page_description = 'Usein kysytyt kysymykset palvelusta ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';
$page_css = ['faq-mob.min.css', 'faq-desk.min.css'];
$page_js = ['faq.min.js'];
$page_has_form = true;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <h1>Usein kysytyt kysymykset</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Mikä on <?= e(SITE_NAME) ?> ja miten se toimii?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Monet kysyvät: «Mitä <?= e(SITE_NAME) ?> oikeastaan on?» Se on kehittynyt kaupankäyntialusta
                tekoälyn (AI) voimalla. <?= e(SITE_NAME) ?> -tekoälyn käyttö on
                helppoa: rekisteröidy, talleta rahaa tilillesi (väh. <?= e(money_min()) ?>), niin alusta
                aloittaa kaupankäynnin. Voit milloin tahansa tallettaa lisää tai nostaa varoja.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Mikä on vähimmäistalletus palvelussa <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Vähimmäistalletus on <?= e(money_min()) ?>. Tällä summalla voit kokeilla alustaa ja
                aloittaa ilman suurta pääomaa. Halutessasi voit milloin tahansa tallettaa lisää
                tai nostaa voittoja.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Millä markkinoilla <?= e(SITE_NAME) ?> käy kauppaa?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> on aktiivinen useilla rahoitusmarkkinoilla, mukaan lukien kryptovaluutat
                (Bitcoin, Ethereum, XRP, Litecoin, Dash ja muut), osakkeet, valuutat (Forex) ja
                muut rahoitusinstrumentit.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Onko <?= e(SITE_NAME) ?> luotettava?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Kysymys siitä, onko <?= e(SITE_NAME) ?> luotettava, on täysin perusteltu. Me
                vahvistamme: <?= e(SITE_NAME) ?> on täysin laillinen ja luotettava kaupankäyntialusta <?= e(geo_in()) ?>. Se
                ei ole huijaus. Käyttäjiemme varojen turvallisuus on korkein
                prioriteettimme, ja nostot käsitellään nopeasti (24&ndash;48 tunnin sisällä).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Miten <?= e(SITE_NAME) ?> toimii?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> käyttää kehittynyttä tekoälyä (AI) analysoimaan markkinoita reaaliajassa
                ja tunnistamaan tuottoisia kaupankäyntimahdollisuuksia. Monet positiiviset kokemukset
                palvelusta <?= e(SITE_NAME) ?> verkossa vahvistavat, että lähestymistapa toimii.
                Järjestelmä hallitsee pääomaasi automaattisesti, joten voit tavoitella potentiaalista tuottoa
                ilman syvällistä markkinatuntemusta.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Miten voimme auttaa?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Rekisteröidy';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
