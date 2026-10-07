<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Gyakran ismételt kérdések | ' . SITE_NAME . ' - FAQ';
$page_description = 'Gyakran ismételt kérdések a ' . SITE_NAME . '.';
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
          <h1>Gyakran ismételt kérdések</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Mi a <?= e(SITE_NAME) ?>, és hogyan működik?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Sokan kérdezik: „Mi pontosan a <?= e(SITE_NAME) ?>?” Fejlett kereskedési platform
                mesterséges intelligenciával. A <?= e(SITE_NAME) ?> AI használata
                egyszerű: regisztrálj, fizess be a számlára (min. <?= e(money_min()) ?>), és a platform
                elkezd kereskedni. Bármikor befizethetsz többet, vagy kivehetsz.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Mennyi a minimális befizetés a <?= e(SITE_NAME) ?> platformon?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                A minimális befizetés <?= e(money_min()) ?>. Ezzel az összeggel kipróbálhatod a platformot, és
                nagy tőke nélkül kezdhetsz. Ha szeretnéd, bármikor befizethetsz többet
                vagy kiveheted a nyereséget.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Mely piacokon kereskedik a <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                A <?= e(SITE_NAME) ?> több pénzügyi piacon aktív, köztük kriptovalutákon
                (Bitcoin, Ethereum, XRP, Litecoin, Dash és mások), részvényeken, devizákon (Forex) és
                más pénzügyi instrumentumokon.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Megbízható a <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Jogos a kérdés, hogy megbízható-e a <?= e(SITE_NAME) ?>. Megerősítjük:
                a <?= e(SITE_NAME) ?> teljesen jogszerű és megbízható kereskedési platform <?= e(geo_in()) ?>. Nem
                csalás. A felhasználók pénzének biztonsága a legfontosabb
                prioritás, a kifizetéseket gyorsan feldolgozzuk (24&ndash;48 órán belül).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Hogyan működik a <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                A <?= e(SITE_NAME) ?> fejlett mesterséges intelligenciát használ a piacok valós idejű
                elemzésére és a jövedelmező lehetőségek megtalálására. A <?= e(SITE_NAME) ?> platformmal
                kapcsolatos, online megtalálható pozitív tapasztalatok megerősítik, hogy ez a megközelítés működik.
                A rendszer automatikusan kezeli a tőkét, így mély piaci tudás nélkül is
                potenciális hozam felé haladhatsz.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Miben segíthetünk?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Regisztráció';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
