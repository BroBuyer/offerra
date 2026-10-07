<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ofte stilte spørsmål | ' . SITE_NAME . ' - FAQ';
$page_description = 'Ofte stilte spørsmål om ' . SITE_NAME . '.';
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
          <h1>Ofte stilte spørsmål</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Hva er <?= e(SITE_NAME) ?>, og hvordan fungerer det?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Mange spør: «Hva er <?= e(SITE_NAME) ?> egentlig?» Det er en avansert tradingplattform
                drevet av kunstig intelligens. Å bruke <?= e(SITE_NAME) ?>-AI er
                enkelt: registrer deg, sett inn penger på kontoen (min. <?= e(money_min()) ?>), så begynner plattformen
                å handle. Du kan når som helst sette inn mer eller ta ut.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Hva er minsteinnskuddet hos <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Minsteinnskuddet er <?= e(money_min()) ?>. Med dette beløpet kan du prøve plattformen og
                starte uten stor kapital. Hvis du vil, kan du når som helst sette inn mer
                eller ta ut gevinst.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Hvilke markeder handler <?= e(SITE_NAME) ?> i?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> er aktiv i flere finansmarkeder, inkludert kryptovaluta
                (Bitcoin, Ethereum, XRP, Litecoin, Dash og mer), aksjer, valuta (Forex) og
                andre finansielle instrumenter.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Er <?= e(SITE_NAME) ?> pålitelig?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Spørsmålet om <?= e(SITE_NAME) ?> er troverdig, er berettiget. Vi
                bekrefter: <?= e(SITE_NAME) ?> er en helt lovlig og pålitelig tradingplattform <?= e(geo_in()) ?>. Den
                er ikke svindel. Sikkerheten til brukernes penger har høyeste
                prioritet, og utbetalinger behandles raskt (innen 24&ndash;48 timer).
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
                <?= e(SITE_NAME) ?> bruker avansert kunstig intelligens til å analysere markeder i sanntid
                og finne lønnsomme tradingmuligheter. De mange positive erfaringene med
                <?= e(SITE_NAME) ?> du finner på nett, bekrefter at tilnærmingen fungerer.
                Systemet styrer kapitalen automatisk, slik at du også uten dyp markedskunnskap
                kan sikte mot potensiell avkastning.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Hvordan kan vi hjelpe deg?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Registrer deg';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
