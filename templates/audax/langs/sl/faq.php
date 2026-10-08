<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Pogosta vprašanja | ' . SITE_NAME . ' - FAQ';
$page_description = 'Pogosta vprašanja o ' . SITE_NAME . '.';
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
          <h1>Pogosta vprašanja</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Kaj je <?= e(SITE_NAME) ?> in kako deluje?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Mnogi sprašujejo: „Kaj točno je <?= e(SITE_NAME) ?>?“ To je napredna trgovalna platforma
                na umetni inteligenci. Uporaba <?= e(SITE_NAME) ?> AI je
                preprosta: registriraj se, vplačaj denar na račun (min. <?= e(money_min()) ?>) in platforma
                začne trgovati. Kadarkoli lahko vplačaš več ali dvigneš.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Kakšen je minimalni polog na <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Minimalni polog je <?= e(money_min()) ?>. S tem zneskom lahko preizkusiš platformo in
                začneš brez velikega kapitala. Če želiš, lahko kadarkoli vplačaš več
                ali dvigneš dobiček.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Na katerih trgih <?= e(SITE_NAME) ?> trguje?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> deluje na različnih finančnih trgih, vključno s kriptovalutami
                (Bitcoin, Ethereum, XRP, Litecoin, Dash in druge), delnicami, valutami (Forex) in
                drugimi finančnimi instrumenti.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Je <?= e(SITE_NAME) ?> zanesljiva?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Vprašanje, ali je <?= e(SITE_NAME) ?> zanesljiva, je povsem upravičeno. Potrjujemo:
                <?= e(SITE_NAME) ?> je popolnoma zakonita in zanesljiva trgovalna platforma <?= e(geo_in()) ?>. Ni
                prevara. Varnost sredstev uporabnikov ima najvišjo
                prioriteto, izplačila pa se obdelajo hitro (v 24&ndash;48 urah).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Kako <?= e(SITE_NAME) ?> deluje?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> uporablja napredno umetno inteligenco za analizo trgov v realnem
                času in za iskanje donosnih priložnosti. Mnoge pozitivne izkušnje z
                <?= e(SITE_NAME) ?>, ki jih najdeš na spletu, potrjujejo, da ta pristop deluje.
                Sistem kapital upravlja samodejno, zato tudi brez globokega poznavanja trga
                lahko stremiš k potencialnemu donosu.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Kako ti lahko pomagamo?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Registracija';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
