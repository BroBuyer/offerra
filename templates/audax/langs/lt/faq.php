<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Dažnai užduodami klausimai | ' . SITE_NAME . ' - FAQ';
$page_description = 'Dažnai užduodami klausimai apie ' . SITE_NAME . '.';
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
          <h1>Dažnai užduodami klausimai</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Kas yra <?= e(SITE_NAME) ?> ir kaip tai veikia?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Daugelis klausia: „Kas iš tikrųjų yra <?= e(SITE_NAME) ?>?“ Tai pažangi prekybos platforma,
                veikianti dirbtiniu intelektu. Naudoti <?= e(SITE_NAME) ?> DI
                paprasta: užsiregistruokite, įneškite pinigus į paskyrą (min. <?= e(money_min()) ?>), ir platforma
                pradės prekiauti. Bet kada galite įnešti daugiau arba išsiimti.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Koks minimalus įnašas <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Minimalus įnašas yra <?= e(money_min()) ?>. Šia suma galite išbandyti platformą ir
                pradėti be didelio kapitalo. Jei norite, bet kada galite įnešti daugiau
                arba išsiimti pelną.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Kokiose rinkose prekiauja <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> veikia įvairiose finansų rinkose, įskaitant kriptovaliutas
                (Bitcoin, Ethereum, XRP, Litecoin, Dash ir kt.), akcijas, valiutas (Forex) ir
                kitas finansines priemones.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Ar <?= e(SITE_NAME) ?> patikima?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Klausimas, ar <?= e(SITE_NAME) ?> yra teisėta, visiškai pagrįstas. Mes
                patvirtiname: <?= e(SITE_NAME) ?> yra visiškai teisėta ir patikima prekybos platforma <?= e(geo_in()) ?>. Tai
                nėra sukčiavimas. Naudotojų lėšų saugumas yra didžiausias
                prioritetas, o išmokos tvarkomos greitai (per 24&ndash;48 valandas).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Kaip veikia <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> naudoja pažangų dirbtinį intelektą rinkoms analizuoti realiuoju
                laiku ir rasti pelningas prekybos galimybes. Daug teigiamų patirčių su
                <?= e(SITE_NAME) ?>, kurias rasite internete, patvirtina, kad šis požiūris veikia.
                Sistema kapitalą valdo automatiškai, todėl net be gilių rinkos žinių
                galite siekti potencialios grąžos.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Kaip galime jums padėti?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Registruotis';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
