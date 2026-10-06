<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Veelgestelde vragen | ' . SITE_NAME . ' - FAQ';
$page_description = 'Veelgestelde vragen over ' . SITE_NAME . '.';
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
          <h1>Veelgestelde vragen</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Wat is <?= e(SITE_NAME) ?> en hoe werkt het?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Veel mensen vragen: «Wat is <?= e(SITE_NAME) ?> precies?» Het is een geavanceerd tradingplatform
                op basis van kunstmatige intelligentie. De AI van <?= e(SITE_NAME) ?> gebruiken is
                eenvoudig: meld je aan, stort geld op je account (min. <?= e(money_min()) ?>) en het platform
                begint te handelen. Je kunt altijd bijstorten of opnemen.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Wat is de minimale storting bij <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                De minimale storting is <?= e(money_min()) ?>. Met dit bedrag kun je het platform uitproberen en
                zonder groot kapitaal handelen. Als je wilt, kun je altijd extra
                storten of winst opnemen.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Op welke markten handelt <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> is actief op verschillende financiële markten, waaronder cryptovaluta
                (Bitcoin, Ethereum, XRP, Litecoin, Dash en meer), aandelen, valuta (Forex) en
                andere financiële instrumenten.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Is <?= e(SITE_NAME) ?> betrouwbaar?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                De vraag of <?= e(SITE_NAME) ?> betrouwbaar is, is terecht. Wij
                bevestigen: <?= e(SITE_NAME) ?> is een volledig legaal en betrouwbaar tradingplatform <?= e(geo_in()) ?>. Het
                is geen oplichting of fraude. De veiligheid van het geld van onze gebruikers heeft de hoogste
                prioriteit, en uitbetalingen worden snel verwerkt (binnen 24&ndash;48 uur).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Hoe werkt <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> gebruikt geavanceerde kunstmatige intelligentie om markten in realtime
                te analyseren en winstgevende tradingkansen te herkennen. De vele positieve ervaringen met
                <?= e(SITE_NAME) ?> die je online vindt, bevestigen de werking van deze aanpak.
                Het systeem stuurt het kapitaal automatisch, zodat je ook zonder diepgaande marktkennis
                potentieel rendement kunt nastreven.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Hoe kunnen we je helpen?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Meld je aan';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
