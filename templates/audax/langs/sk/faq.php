<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Často kladené otázky | ' . SITE_NAME . ' - FAQ';
$page_description = 'Často kladené otázky o ' . SITE_NAME . '.';
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
          <h1>Často kladené otázky</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Čo je <?= e(SITE_NAME) ?> a ako to funguje?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Mnohí sa pýtajú: „Čo presne je <?= e(SITE_NAME) ?>?“ Je to pokročilá obchodná platforma
                poháňaná umelou inteligenciou. Používanie <?= e(SITE_NAME) ?> AI je
                jednoduché: zaregistrujte sa, vložte peniaze na účet (min. <?= e(money_min()) ?>) a platforma
                začne obchodovať. Kedykoľvek môžete vložiť viac alebo vybrať.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Aký je minimálny vklad u <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Minimálny vklad je <?= e(money_min()) ?>. Touto sumou môžete platformu vyskúšať a
                začať bez veľkého kapitálu. Ak chcete, kedykoľvek môžete vložiť viac
                alebo vybrať zisk.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Na akých trhoch <?= e(SITE_NAME) ?> obchoduje?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> pôsobí na rôznych finančných trhoch vrátane kryptomien
                (Bitcoin, Ethereum, XRP, Litecoin, Dash a ďalšie), akcií, mien (Forex) a
                ďalších finančných nástrojov.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Je <?= e(SITE_NAME) ?> spoľahlivá?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Otázka, či je <?= e(SITE_NAME) ?> dôveryhodná, je oprávnená. Potvrdzujeme:
                <?= e(SITE_NAME) ?> je plne legálna a spoľahlivá obchodná platforma <?= e(geo_in()) ?>. Nie je
                to podvod. Bezpečnosť prostriedkov používateľov má najvyššiu
                prioritu a výplaty sa spracúvajú rýchlo (do 24&ndash;48 hodín).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Ako <?= e(SITE_NAME) ?> funguje?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> používa pokročilú umelú inteligenciu na analýzu trhov v reálnom
                čase a na nájdenie ziskových príležitostí. Mnoho pozitívnych skúseností s
                <?= e(SITE_NAME) ?>, ktoré nájdete online, potvrdzuje, že tento prístup funguje.
                Systém kapitál spravuje automaticky, takže aj bez hlbokej znalosti trhu
                môžete smerovať k potenciálnemu výnosu.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Ako vám môžeme pomôcť?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Registrovať sa';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
