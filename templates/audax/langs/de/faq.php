<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Häufige Fragen | ' . SITE_NAME . ' - FAQ';
$page_description = 'Häufige Fragen zu ' . SITE_NAME . '.';
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
          <h1>Häufige Fragen</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Was ist <?= e(SITE_NAME) ?> und wie funktioniert es?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Viele fragen: «Was genau ist <?= e(SITE_NAME) ?>?» Es ist eine fortschrittliche Trading-Plattform
                auf Basis künstlicher Intelligenz. Die KI von <?= e(SITE_NAME) ?> zu nutzen ist
                einfach: registrieren, Geld auf das Konto einzahlen (mind. <?= e(money_min()) ?>), und die Plattform
                beginnt zu handeln. Sie können jederzeit nachzahlen oder auszahlen.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Wie hoch ist die Mindesteinzahlung bei <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Die Mindesteinzahlung beträgt <?= e(money_min()) ?>. Mit diesem Betrag können Sie die Plattform testen und
                ohne großes Kapital handeln. Wenn Sie möchten, können Sie jederzeit weitere Beträge
                einzahlen oder Gewinne abheben.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Auf welchen Märkten handelt <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> ist auf verschiedenen Finanzmärkten aktiv, darunter Kryptowährungen
                (Bitcoin, Ethereum, XRP, Litecoin, Dash und weitere), Aktien, Devisen (Forex) und
                andere Finanzinstrumente.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Ist <?= e(SITE_NAME) ?> verlässlich?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Die Frage, ob <?= e(SITE_NAME) ?> seriös ist, ist berechtigt. Wir
                bestätigen: <?= e(SITE_NAME) ?> ist eine vollständig legale und verlässliche Trading-Plattform <?= e(geo_in()) ?>. Es
                handelt sich nicht um Betrug. Die Sicherheit der Gelder unserer Nutzer hat höchste
                Priorität, und Auszahlungen werden zügig bearbeitet (innerhalb von 24&ndash;48 Stunden).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Wie funktioniert <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> nutzt fortschrittliche künstliche Intelligenz, um Märkte in Echtzeit
                zu analysieren und rentable Trading-Chancen zu erkennen. Die zahlreichen positiven Erfahrungen mit
                <?= e(SITE_NAME) ?>, die Sie online finden, bestätigen die Wirksamkeit dieses Ansatzes.
                Das System steuert das Kapital automatisch, sodass Sie auch ohne tiefes Marktwissen
                potenzielle Erträge anstreben können.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Wie können wir Ihnen helfen?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Jetzt registrieren';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
