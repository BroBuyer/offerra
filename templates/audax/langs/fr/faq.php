<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Foire aux questions | ' . SITE_NAME . ' - FAQ';
$page_description = 'Foire aux questions sur ' . SITE_NAME . '.';
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
          <h1>Foire aux questions</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Qu’est-ce que <?= e(SITE_NAME) ?> et comment ça fonctionne ?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                On nous demande souvent : « Qu’est-ce que <?= e(SITE_NAME) ?> exactement ? » C’est une plateforme de trading
                avancée, propulsée par l’intelligence artificielle. Utiliser l’IA <?= e(SITE_NAME) ?> est
                simple : inscrivez-vous, déposez de l’argent sur votre compte (min. <?= e(money_min()) ?>), et la plateforme
                commence à trader. Vous pouvez à tout moment déposer davantage ou retirer vos fonds.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Quel est le dépôt minimum sur <?= e(SITE_NAME) ?> ?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Le dépôt minimum est de <?= e(money_min()) ?>. Avec ce montant, vous pouvez tester la plateforme et
                commencer à trader sans gros investissement. Si vous le souhaitez, vous pouvez déposer davantage
                ou retirer vos gains à tout moment.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Sur quels marchés <?= e(SITE_NAME) ?> intervient-elle ?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> est active sur plusieurs marchés financiers, notamment les cryptomonnaies
                (Bitcoin, Ethereum, XRP, Litecoin, Dash, etc.), les actions, les devises (Forex) et
                d’autres actifs financiers.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2><?= e(SITE_NAME) ?> est-elle fiable ?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Se demander si <?= e(SITE_NAME) ?> est légitime est parfaitement légitime. Nous
                le confirmons : <?= e(SITE_NAME) ?> est une plateforme de trading pleinement légale et fiable <?= e(geo_in()) ?>. Ce
                n’est ni une arnaque ni une fraude. La sécurité des fonds de nos utilisateurs est notre priorité
                absolue, et les retraits sont traités rapidement (sous 24&ndash;48 heures).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Comment fonctionne <?= e(SITE_NAME) ?> ?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> utilise une intelligence artificielle avancée pour analyser les marchés en temps
                réel et identifier des opportunités de trading rentables. Les nombreux retours positifs sur
                <?= e(SITE_NAME) ?> que l’on trouve en ligne confirment l’efficacité de cette approche.
                Le système gère automatiquement votre capital, afin que vous puissiez viser un rendement potentiel
                même sans connaissance approfondie des marchés.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Comment pouvons-nous vous aider ?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Rejoindre';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
