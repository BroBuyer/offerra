<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Întrebări frecvente | ' . SITE_NAME . ' - FAQ';
$page_description = 'Întrebări frecvente despre ' . SITE_NAME . '.';
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
          <h1>Întrebări frecvente</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Ce este <?= e(SITE_NAME) ?> și cum funcționează?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Mulți întreabă: „Ce este exact <?= e(SITE_NAME) ?>?“ Este o platformă avansată de tranzacționare
                alimentată de inteligență artificială. Folosirea <?= e(SITE_NAME) ?> AI este
                simplă: înregistrează-te, depune bani în cont (min. <?= e(money_min()) ?>) și platforma
                începe să tranzacționeze. Oricând poți depune mai mult sau retrage.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Care este depozitul minim pe <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Depozitul minim este <?= e(money_min()) ?>. Cu această sumă poți testa platforma și
                începe fără un capital mare. Dacă vrei, oricând poți depune mai mult
                sau retrage profitul.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Pe ce piețe tranzacționează <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> activează pe diverse piețe financiare, inclusiv criptomonede
                (Bitcoin, Ethereum, XRP, Litecoin, Dash și altele), acțiuni, valute (Forex) și
                alte instrumente financiare.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Este <?= e(SITE_NAME) ?> de încredere?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Întrebarea dacă <?= e(SITE_NAME) ?> este legitimă e pe deplin justificată. Confirmăm:
                <?= e(SITE_NAME) ?> este o platformă de tranzacționare complet legală și de încredere <?= e(geo_in()) ?>. Nu este
                o înșelătorie. Securitatea fondurilor utilizatorilor are cea mai înaltă
                prioritate, iar plățile se procesează rapid (în 24&ndash;48 de ore).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Cum funcționează <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> folosește inteligență artificială avansată pentru a analiza piețele în timp
                real și a identifica oportunități profitabile. Multe experiențe pozitive cu
                <?= e(SITE_NAME) ?> pe care le găsești online confirmă că această abordare funcționează.
                Sistemul gestionează capitalul automat, astfel că fără o cunoaștere profundă a pieței
                poți tinde spre un randament potențial.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Cum te putem ajuta?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Înregistrare';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
