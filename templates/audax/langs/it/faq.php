<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Domande frequenti | ' . SITE_NAME . ' - FAQ';
$page_description = 'Domande frequenti su ' . SITE_NAME . '.';
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
          <h1>Domande frequenti</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Che cos’è <?= e(SITE_NAME) ?> e come funziona?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Ci chiedono spesso: «Che cos’è esattamente <?= e(SITE_NAME) ?>?» È una piattaforma di trading
                avanzata, alimentata dall’intelligenza artificiale. Usare l’IA di <?= e(SITE_NAME) ?> è
                semplice: iscriviti, versa sul conto (min. <?= e(money_min()) ?>) e la piattaforma
                inizia a fare trading. In qualsiasi momento puoi versare altro o prelevare i fondi.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Qual è il deposito minimo su <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Il deposito minimo è di <?= e(money_min()) ?>. Con questo importo puoi provare la piattaforma e
                iniziare a fare trading senza un grande investimento. Se vuoi, puoi versare di più
                o prelevare i guadagni in qualsiasi momento.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Su quali mercati opera <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> è attiva su diversi mercati finanziari, in particolare criptovalute
                (Bitcoin, Ethereum, XRP, Litecoin, Dash, ecc.), azioni, valute (Forex) e
                altri asset finanziari.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2><?= e(SITE_NAME) ?> è affidabile?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Chiedersi se <?= e(SITE_NAME) ?> sia legittima è del tutto lecito. Lo
                confermiamo: <?= e(SITE_NAME) ?> è una piattaforma di trading pienamente legale e affidabile <?= e(geo_in()) ?>. Non
                è una truffa né una frode. La sicurezza dei fondi degli utenti è la nostra priorità
                assoluta e i prelievi vengono elaborati in tempi rapidi (entro 24&ndash;48 ore).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Come funziona <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> usa un’intelligenza artificiale avanzata per analizzare i mercati in tempo
                reale e individuare opportunità di trading redditizie. I numerosi riscontri positivi su
                <?= e(SITE_NAME) ?> che si trovano online confermano l’efficacia di questo approccio.
                Il sistema gestisce automaticamente il capitale, così puoi puntare a un rendimento potenziale
                anche senza una conoscenza approfondita dei mercati.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Come possiamo aiutarti?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Iscriviti';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
