<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Vanliga frågor | ' . SITE_NAME . ' - FAQ';
$page_description = 'Vanliga frågor om ' . SITE_NAME . '.';
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
          <h1>Vanliga frågor</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Vad är <?= e(SITE_NAME) ?> och hur fungerar det?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Många frågar: «Vad är <?= e(SITE_NAME) ?> egentligen?» Det är en avancerad handelsplattform
                driven av artificiell intelligens. Att använda <?= e(SITE_NAME) ?>-AI är
                enkelt: registrera dig, sätt in pengar på kontot (min. <?= e(money_min()) ?>), så börjar plattformen
                handla. Du kan när som helst sätta in mer eller ta ut.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Vad är minsta insättning hos <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Minsta insättning är <?= e(money_min()) ?>. Med det beloppet kan du prova plattformen och
                starta utan stort kapital. Om du vill kan du när som helst sätta in mer
                eller ta ut vinst.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Vilka marknader handlar <?= e(SITE_NAME) ?> på?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> är aktiv på flera finansiella marknader, bland annat kryptovaluta
                (Bitcoin, Ethereum, XRP, Litecoin, Dash och mer), aktier, valuta (Forex) och
                andra finansiella instrument.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Är <?= e(SITE_NAME) ?> tillförlitlig?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Frågan om <?= e(SITE_NAME) ?> är trovärdig är befogad. Vi
                bekräftar: <?= e(SITE_NAME) ?> är en helt laglig och tillförlitlig handelsplattform <?= e(geo_in()) ?>. Den
                är inte bedrägeri. Säkerheten för användarnas pengar har högsta
                prioritet, och utbetalningar behandlas snabbt (inom 24&ndash;48 timmar).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Hur fungerar <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> använder avancerad artificiell intelligens för att analysera marknader i realtid
                och hitta lönsamma handelsmöjligheter. De många positiva erfarenheterna med
                <?= e(SITE_NAME) ?> som du hittar online bekräftar att upplägget fungerar.
                Systemet styr kapitalet automatiskt, så att du även utan djup marknadskunskap
                kan sikta på potentiell avkastning.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Hur kan vi hjälpa dig?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Registrera dig';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
