<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Često postavljana pitanja | ' . SITE_NAME . ' - FAQ';
$page_description = 'Često postavljana pitanja o ' . SITE_NAME . '.';
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
          <h1>Često postavljana pitanja</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Što je <?= e(SITE_NAME) ?> i kako funkcionira?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Mnogi pitaju: „Što točno jest <?= e(SITE_NAME) ?>?“ To je napredna trgovačka platforma
                pokretana umjetnom inteligencijom. Korištenje <?= e(SITE_NAME) ?> AI-ja je
                jednostavno: registriraj se, uplati novac na račun (min. <?= e(money_min()) ?>) i platforma
                počinje trgovati. U bilo koj trenutku možeš uplatiti više ili povući.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Koliki je minimalni polog na <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Minimalni polog je <?= e(money_min()) ?>. Tim iznosom možeš isprobati platformu i
                početi bez velikog kapitala. Ako želiš, bilo kada možeš uplatiti više
                ili povući dobit.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Na kojim tržištima <?= e(SITE_NAME) ?> trguje?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> djeluje na raznim financijskim tržištima uključujući kriptovalute
                (Bitcoin, Ethereum, XRP, Litecoin, Dash i druge), dionice, valute (Forex) i
                druge financijske instrumente.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Je li <?= e(SITE_NAME) ?> pouzdana?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Pitanje je li <?= e(SITE_NAME) ?> pouzdana potpuno je opravdano. Potvrđujemo:
                <?= e(SITE_NAME) ?> je potpuno legalna i pouzdana trgovačka platforma <?= e(geo_in()) ?>. Nije
                prijevara. Sigurnost sredstava korisnika ima najviši
                prioritet, a isplate se obrađuju brzo (unutar 24&ndash;48 sati).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Kako <?= e(SITE_NAME) ?> funkcionira?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> koristi naprednu umjetnu inteligenciju za analizu tržišta u stvarnom
                vremenu i za pronalaženje profitabilnih prilika. Mnoga pozitivna iskustva s
                <?= e(SITE_NAME) ?> koja možeš pronaći online potvrđuju da ovaj pristup funkcionira.
                Sustav kapitalom upravlja automatski, pa i bez dubokog poznavanja tržišta
                možeš ići prema potencijalnom prinosu.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Kako ti možemo pomoći?</h2>
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
