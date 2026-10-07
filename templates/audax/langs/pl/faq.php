<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Często zadawane pytania | ' . SITE_NAME . ' - FAQ';
$page_description = 'Często zadawane pytania o ' . SITE_NAME . '.';
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
          <h1>Często zadawane pytania</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Czym jest <?= e(SITE_NAME) ?> i jak to działa?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Wielu pyta: „Czym właściwie jest <?= e(SITE_NAME) ?>?” To zaawansowana platforma tradingowa
                napędzana sztuczną inteligencją. Korzystanie z <?= e(SITE_NAME) ?> AI jest
                proste: zarejestruj się, wpłać pieniądze na konto (min. <?= e(money_min()) ?>), a platforma
                zacznie handlować. W każdej chwili możesz wpłacić więcej lub wypłacić.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Jaka jest minimalna wpłata w <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Minimalna wpłata to <?= e(money_min()) ?>. Tą kwotą możesz wypróbować platformę i
                zacząć bez dużego kapitału. Jeśli chcesz, w każdej chwili możesz wpłacić więcej
                lub wypłacić zysk.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Na jakich rynkach handluje <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> działa na różnych rynkach finansowych, w tym kryptowalutach
                (Bitcoin, Ethereum, XRP, Litecoin, Dash i inne), akcjach, walutach (Forex) i
                innych instrumentach finansowych.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Czy <?= e(SITE_NAME) ?> jest niezawodna?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Pytanie, czy <?= e(SITE_NAME) ?> jest wiarygodna, jest uzasadnione. Potwierdzamy:
                <?= e(SITE_NAME) ?> to w pełni legalna i niezawodna platforma tradingowa <?= e(geo_in()) ?>. To
                nie jest oszustwem. Bezpieczeństwo środków użytkowników ma najwyższy
                priorytet, a wypłaty są realizowane szybko (w ciągu 24&ndash;48 godzin).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Jak działa <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> wykorzystuje zaawansowaną sztuczną inteligencję do analizy rynków w czasie
                rzeczywistym i znajdowania zyskownych okazji. Wiele pozytywnych doświadczeń z
                <?= e(SITE_NAME) ?>, które znajdziesz w sieci, potwierdza, że to podejście działa.
                System zarządza kapitałem automatycznie, więc nawet bez głębokiej wiedzy o rynku
                możesz dążyć do potencjalnego zwrotu.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Jak możemy Ci pomóc?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Zarejestruj się';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
