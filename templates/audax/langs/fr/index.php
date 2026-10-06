<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — L’investissement IA intelligent ' . geo_in();
$page_description = 'Trading automatisé ' . geo_in() . '. Commencez avec ' . money_min() . ' grâce à notre technologie d’IA. Sécurisé, transparent et simple.';
$page_canonical = page_url();
$active_page = 'home';
$page_css = ['home-mob.min.css', 'home-desk.min.css', 'calculator.css', 'tinyslider.min.css'];
$page_js = ['tinyslider.min.js', 'index.min.js', 'calculator.js'];
$page_has_form = true;
// Keep the slider's span proportional to the offer's minimum instead of a fixed $10,000.
$calc_deposit_max = max(10000, (int) MIN_DEPOSIT * 40);
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero hero-v_2">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h1>Plateforme <?= e(SITE_NAME) ?></h1>
              <p>
                Qu’est-ce qui distingue <?= e(SITE_NAME) ?> ? C’est l’occasion d’investir plus intelligemment
                <?= e(geo_in()) ?>. Notre plateforme de trading fiable, assistée par l’IA, vous aide à décider en connaissance de cause
                et à maîtriser le risque. Découvrez ce que l’IA <?= e(SITE_NAME) ?> peut vous apporter.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Noté 4,7 étoiles par plus de 2 804 utilisateurs satisfaits</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Note de 4,7 sur 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Rejoindre <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Rejoindre';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    En renseignant vos informations personnelles et en cliquant sur le bouton « Rejoindre », vous
                    confirmez accepter la
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">Politique de confidentialité</a> et les
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">Conditions d’utilisation</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Moyens de paiement" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Noté 4,7 étoiles par plus de 2 804 utilisateurs satisfaits</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Note de 4,7 sur 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Calculateur de gains">
        <div
          class="calc-widget is-ltr"
          dir="ltr"
          id="calculator"
          data-calc-root
          data-currency="<?= e(currency_symbol()) ?>"
          data-locale="<?= e(site_locale()) ?>"
          style="
            --calc-accent: #c2410c;
            --calc-cta-bg: #ee6129;
            --calc-cta-text-color: #ffffff;
            --calc-track: #d9deef;
            --calc-radius: 18px;
            --calc-title-color: #1a1a1a;
            --calc-subtitle-color: #555;
            --calc-label-color: #555;
            --calc-value-color: #555;
            --calc-minmax-color: #555;
            --calc-result-bg: #ee6129;
            --calc-result-title-color: #e9e4e3;
            --calc-result-value-color: #ffffff;
            --calc-result-label-color: #e9e4e3;
          "
        >
          <h2 class="calc-widget__title">Calculez vos gains potentiels</h2>
          <p class="calc-widget__subtitle">
            Choisissez le montant et la durée de votre investissement pour estimer vos gains potentiels
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Votre dépôt :</label>
                <div class="calc-widget__value"><span data-calc="deposit_value"><?= e(money_min()) ?></span></div>
                <input
                  id="calc-deposit"
                  class="calc-widget__range"
                  type="range"
                  data-calc="deposit"
                  min="<?= (int) MIN_DEPOSIT ?>"
                  max="<?= (int) $calc_deposit_max ?>"
                  step="1"
                  value="<?= (int) MIN_DEPOSIT ?>"
                />
                <div class="calc-widget__minmax">
                  <span data-calc="deposit_min"><?= e(money_min()) ?></span>
                  <span data-calc="deposit_max"><?= e(currency_symbol() . number_format($calc_deposit_max)) ?></span>
                </div>
              </div>
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-days">Durée de l’investissement :</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>jours</span>
                </div>
                <input
                  id="calc-days"
                  class="calc-widget__range"
                  type="range"
                  data-calc="days"
                  min="1"
                  max="90"
                  step="1"
                  value="45"
                />
                <div class="calc-widget__minmax">
                  <span>À partir d’1 jour</span>
                  <span>Jusqu’à 3 mois</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Vous pouvez gagner</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Rentabilité</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Gains</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Demander un calcul personnalisé
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Fermer">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Laissez vos coordonnées : l’un de nos spécialistes vous recontactera dès
              que possible.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Rejoindre';
  $form_phone_id = 'calc-phone';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
      <section class="cards-img">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Votre accès <?= e(geo_from()) ?> aux principales plateformes de trading crypto.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Icône 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> s’appuie sur l’intelligence artificielle et l’apprentissage automatique pour
                    repérer de nouvelles opportunités sur les marchés financiers.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Icône 2" />
                </div>
                <div class="text">
                  <p>
                    Les investisseurs en cryptoactifs <?= e(geo_in()) ?> accèdent aux plus grandes places d’échange du
                    secteur et peuvent négocier des actifs de référence comme Bitcoin et Ethereum, ainsi qu’un
                    large éventail d’altcoins et de stablecoins.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Nos partenaires de confiance</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Logo Crypto.com" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Logo Binance" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="Logo CoinDesk" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="Logo TradingView" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Logo Deloitte" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Logo Ledger" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Logo Decrypt" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Logo Nansen" />
          </div>
        </div>
      </section>

      <section class="advantages cards-img">
        <div class="container">
          <h2>Pourquoi choisir <?= e(SITE_NAME) ?> <?= e(geo_in()) ?> ?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Icône avantage 1" />
              </div>
              <div class="text">
                <h3>Sécurité <?= e(geo_in()) ?></h3>
                <p>
                  En tant que plateforme reconnue, nous plaçons la sécurité au premier plan. Nous utilisons le SSL,
                  un chiffrement de niveau bancaire et la 2FA pour garantir la fiabilité de <?= e(SITE_NAME) ?> et la protection
                  de vos données.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Icône avantage 2" />
              </div>
              <div class="text">
                <h3>Algorithmes d’IA puissants</h3>
                <p>
                  Nos robots s’adaptent, appliquent des stratégies d’IA avancées et les exécutent en autonomie. Vous
                  fixez l’approche et gardez le contrôle du risque, des marchés et des objectifs, afin de
                  vous concentrer sur l’essentiel.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Icône avantage 3" />
              </div>
              <div class="text">
                <h3>Frais transparents. Aucun coût caché.</h3>
                <p>
                  Tous nos frais sont transparents et nous ne facturons jamais les investisseurs <?= e(geo_in()) ?> pour l’usage de
                  <?= e(SITE_NAME) ?>. L’argent que vous déposez pour trader vous appartient entièrement : vous l’utilisez
                  comme vous l’entendez. Nous n’en retenons rien. Commencez dès <?= e(money_min()) ?> et gardez le contrôle
                  de vos investissements.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Icône avantage 4" />
              </div>
              <div class="text">
                <h3>Interface intuitive</h3>
                <p>
                  Notre tableau de bord simple et intuitif allie fonctionnalités, exigence et
                  facilité d’usage, pour les débutants comme pour les traders expérimentés.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Comment fonctionne <?= e(SITE_NAME) ?> ?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Icône liste 1" />
              <p>
                Notre logiciel propriétaire surveille en parallèle plusieurs plateformes de trading et
                identifie les écarts de prix exploitables.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Icône liste 2" />
              <p>
                <?= e(SITE_NAME) ?> achète au plus bas sur un marché et revend plus cher sur un autre,
                en exploitant les opportunités d’arbitrage. Cette approche peut générer un profit en
                cumulant les rendements issus de petits mouvements de prix.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Icône liste 3" />
              <p>Découvrez comment <?= e(SITE_NAME) ?> peut améliorer votre expérience de trading.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Rejoignez <?= e(SITE_NAME) ?> et construisons ensemble l’avenir de la finance <?= e(geo_in()) ?> !
              </h2>
              <p>
                <?= e(SITE_NAME) ?> propose une large gamme d’outils pour trader des cryptoactifs <?= e(geo_in()) ?>. La plateforme
                intègre les grandes places d’échange mondiales et donne accès à de nombreuses
                cryptomonnaies, des leaders comme Bitcoin jusqu’à d’autres comme XRP. Elle vous permet
                aussi de tirer parti des variations de prix.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Rejoindre';
  $form_phone_id = 'UhZgSohZrA';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>

      <section class="reviews">
        <div class="container">
          <div class="reviews-wrap">
            <div class="review">
              <h3>Marc, 37 ans, Lyon</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Note 1"
                />
              </div>
              <p class="review-text">
                J’ai commencé avec <?= e(money_min()) ?>, et je retire désormais <?= e(currency_symbol() . '2,000') ?> par mois !
              </p>
            </div>
            <div class="review">
              <h3>Claire, 42 ans, Marseille</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Note 2"
                />
              </div>
              <p class="review-text">Plateforme simple : tout est transparent et concret.</p>
            </div>
            <div class="review">
              <h3>Sophie, 45 ans, Bordeaux</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Note 3"
                />
              </div>
              <p class="review-text">La meilleure solution pour un revenu passif.</p>
            </div>
            <div class="review">
              <h3>Julien, 34 ans, Nantes</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Note 4"
                />
              </div>
              <p class="review-text">Des gains stables, même quand je suis en vacances.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>L’offre crypto de <?= e(SITE_NAME) ?></h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Avantage 1"
                />
                <h3>La clé du trading crypto</h3>
                <p>
                  Notre logiciel de dernière génération constitue le cœur du système de trading. Il est
                  conçu pour exploiter les petits écarts de prix entre les principales places
                  d’échange de cryptomonnaies.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben2.svg') ?>"
                  width="100"
                  height="100"
                  alt="Avantage 2"
                />
                <h3>Trading d’actifs à l’échelle mondiale</h3>
                <p>
                  Les cours des actions et des autres actifs évoluent en permanence ; <?= e(SITE_NAME) ?> fournit les
                  outils pour réagir vite aux mouvements de marché et améliorer vos chances de rendements
                  solides.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben3.svg') ?>"
                  width="100"
                  height="100"
                  alt="Avantage 3"
                />
                <h3>Trading Forex</h3>
                <p>
                  Les taux de change évoluent sans cesse et créent des opportunités. <?= e(SITE_NAME) ?>
                  vous aide à tirer parti même des plus petits mouvements du marché des devises.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben4.svg') ?>"
                  width="100"
                  height="100"
                  alt="Avantage 4"
                />
                <h3><?= e(SITE_NAME) ?> et Bitcoin</h3>
                <p>
                  Bitcoin reste le leader du marché, la cryptomonnaie la plus visible et la plus stable
                  financièrement. En identifiant et en exploitant méthodiquement la volatilité,
                  <?= e(SITE_NAME) ?> facilite des rendements plus réguliers.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>Informations sur la plateforme</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Confidentialité</h3>
                  <p><?= e(SITE_NAME) ?> respecte la réglementation applicable en matière de confidentialité <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Actifs</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash et d’autres cryptomonnaies majeures.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Type de plateforme</h3>
                  <p>
                    <?= e(SITE_NAME) ?> offre aux investisseurs <?= e(geo_in()) ?> la possibilité de tirer parti des variations de prix
                    des grandes cryptomonnaies, y compris des altcoins comme XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Pays</h3>
                  <p>Notre plateforme est disponible dans le monde entier, y compris <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Options de dépôt</h3>
                  <p>Cartes bancaires, PayPal et virement.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Coûts</h3>
                  <p>L’accès à <?= e(SITE_NAME) ?> est gratuit <?= e(geo_from()) ?>.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta sec">
        <div class="container">
          <div class="content-wrap">
            <div class="half left bg-elem">
              <h2><?= e(SITE_NAME) ?> est-elle fiable ?</h2>
              <p>
                <?= e(SITE_NAME) ?> travaille avec des courtiers de premier plan, particulièrement fiables et
                expérimentés. Nous appliquons des mesures de sécurité de niveau bancaire, comme le chiffrement TLS/SSL
                et l’authentification à deux facteurs (2FA), pour protéger vos actifs et vos données. Notre
                grille tarifaire est entièrement transparente, sans frais cachés. Nous respectons la
                réglementation applicable.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Graphique de fiabilité" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Nos systèmes d’intelligence artificielle et d’apprentissage automatique produisent une analyse de marché
                en temps réel et des recommandations de trading concrètes pour optimiser vos résultats.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Trading en copie</h3>
                  <p>
                    Les meilleurs traders le sont pour une raison. Avec <?= e(SITE_NAME) ?>, vous pouvez suivre
                    et copier leurs positions pour profiter de leur expérience et de leur stratégie.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Actions fractionnées</h3>
                  <p>
                    En diversifiant votre portefeuille, vous accédez à des actifs de qualité même avec un
                    capital limité.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Ressources pédagogiques</h3>
                  <p>
                    Pour progresser, nous proposons des ressources pédagogiques : tutoriels,
                    webinaires et guides.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Application mobile</h3>
                  <p>Tradez à tout moment, où que vous soyez.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Assistance 24 h/24</h3>
                  <p>Notre service client est disponible 24 heures sur 24, 7 jours sur 7.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Trading assisté par l’IA</h3>
                  <p>
                    Grâce à nos algorithmes avancés d’intelligence artificielle et d’apprentissage automatique,
                    <?= e(SITE_NAME) ?> analyse en continu les dernières données de marché. Les opportunités
                    au plus fort potentiel de rendement sont ainsi identifiées rapidement.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Stratégies personnalisables</h3>
                  <p>
                    Une fois votre profil de risque et vos objectifs définis, vous pouvez vous en servir pour
                    affiner votre stratégie de trading sur notre plateforme multi-actifs.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Accès à des actifs variés</h3>
                  <p>
                    Bien que spécialisés dans les cryptomonnaies, nous prenons aussi en charge le trading
                    de devises, d’actions, d’autres titres et de matières premières.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="register last">
        <div class="container">
          <div class="content-wrap bg">
            <div class="half left">
              <h2>Vous pouvez trader depuis chez vous, analyser les marchés et suivre vos positions.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Rejoindre';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Vous pouvez trader depuis chez vous, analyser les marchés et suivre vos positions.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="S’inscrire" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
