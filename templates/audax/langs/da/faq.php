<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ofte stillede spørgsmål | ' . SITE_NAME . ' - FAQ';
$page_description = 'Ofte stillede spørgsmål om ' . SITE_NAME . '.';
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
          <h1>Ofte stillede spørgsmål</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Hvad er <?= e(SITE_NAME) ?>, og hvordan fungerer det?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Mange spørger: «Hvad er <?= e(SITE_NAME) ?> egentlig?» Det er en avanceret handelsplatform
                drevet af kunstig intelligens. At bruge <?= e(SITE_NAME) ?>-AI er
                enkelt: tilmeld dig, indbetal penge på kontoen (min. <?= e(money_min()) ?>), så begynder platformen
                at handle. Du kan når som helst indbetale mere eller hæve.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Hvad er mindsteindbetalingen hos <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Mindsteindbetalingen er <?= e(money_min()) ?>. Med dette beløb kan du prøve platformen og
                starte uden stor kapital. Hvis du vil, kan du når som helst indbetale mere
                eller hæve gevinst.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Hvilke markeder handler <?= e(SITE_NAME) ?> på?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> er aktiv på flere finansielle markeder, herunder kryptovaluta
                (Bitcoin, Ethereum, XRP, Litecoin, Dash og mere), aktier, valuta (Forex) og
                andre finansielle instrumenter.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Er <?= e(SITE_NAME) ?> pålidelig?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Spørgsmålet om, hvorvidt <?= e(SITE_NAME) ?> er troværdig, er berettiget. Vi
                bekræfter: <?= e(SITE_NAME) ?> er en helt lovlig og pålidelig handelsplatform <?= e(geo_in()) ?>. Den
                er ikke svindel. Sikkerheden for brugernes penge har højeste
                prioritet, og udbetalinger behandles hurtigt (inden for 24&ndash;48 timer).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Hvordan fungerer <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> bruger avanceret kunstig intelligens til at analysere markeder i realtid
                og finde profitable handelsmuligheder. De mange positive erfaringer med
                <?= e(SITE_NAME) ?>, du finder online, bekræfter, at tilgangen virker.
                Systemet styrer kapitalen automatisk, så du også uden dyb markedskendskab
                kan sigte efter potentielt afkast.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Hvordan kan vi hjælpe dig?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Tilmeld dig';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
