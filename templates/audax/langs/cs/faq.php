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
                <h2>Co je <?= e(SITE_NAME) ?> a jak to funguje?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Mnozí se ptají: „Co přesně je <?= e(SITE_NAME) ?>?“ Je to pokročilá obchodní platforma
                poháněná umělou inteligencí. Používání <?= e(SITE_NAME) ?> AI je
                jednoduché: zaregistrujte se, vložte peníze na účet (min. <?= e(money_min()) ?>) a platforma
                začne obchodovat. Kdykoli můžete vložit víc nebo vybrat.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Jaký je minimální vklad u <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Minimální vklad je <?= e(money_min()) ?>. Touto částkou můžete platformu vyzkoušet a
                začít bez velkého kapitálu. Pokud chcete, kdykoli můžete vložit víc
                nebo vybrat zisk.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Na jakých trzích <?= e(SITE_NAME) ?> obchoduje?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> působí na různých finančních trzích včetně kryptoměn
                (Bitcoin, Ethereum, XRP, Litecoin, Dash a další), akcií, měn (Forex) a
                dalších finančních nástrojů.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Je <?= e(SITE_NAME) ?> spolehlivá?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Otázka, zda je <?= e(SITE_NAME) ?> důvěryhodná, je oprávněná. Potvrzujeme:
                <?= e(SITE_NAME) ?> je plně legální a spolehlivá obchodní platforma <?= e(geo_in()) ?>. Není
                to podvod. Bezpečnost prostředků uživatelů má nejvyšší
                prioritu a výplaty se zpracovávají rychle (do 24&ndash;48 hodin).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Jak <?= e(SITE_NAME) ?> funguje?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> používá pokročilou umělou inteligenci k analýze trhů v reálném
                čase a k nalezení ziskových příležitostí. Mnoho pozitivních zkušeností s
                <?= e(SITE_NAME) ?>, které najdete online, potvrzuje, že tento přístup funguje.
                Systém kapitál spravuje automaticky, takže i bez hluboké znalosti trhu
                můžete směřovat k potenciálnímu výnosu.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Jak vám můžeme pomoci?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Registrovat se';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
