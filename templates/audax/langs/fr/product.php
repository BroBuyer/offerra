<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Produit | ' . SITE_NAME . ' - Plateforme de trading IA';
$page_description = SITE_NAME . ' : plateforme d’IA avancée pour les cryptomonnaies ' . geo_in() . '.';
$page_canonical = page_url('product.php');
$active_page = 'product';
$page_css = ['produkt-mob.min.css', 'produkt-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <div class="content-wrap">
            <h1>
              Avec <?= e(SITE_NAME) ?>, l’analyse digitale vous aide à faire croître votre patrimoine
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Grâce à une intelligence artificielle de premier plan et à des algorithmes avancés, <?= e(SITE_NAME) ?>
              analyse en continu les marchés mondiaux. La plateforme identifie ainsi rapidement
              les opportunités les plus prometteuses. Le moment est venu de franchir le pas vers le succès avec
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Commencer</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Votre plateforme de trading digital tout-en-un</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Avantage 1"
                  />
                </div>
                <h3>Gestion des cryptomonnaies</h3>
                <p>Gérez facilement tous vos actifs numériques au même endroit.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-2.svg') ?>"
                    width="100"
                    height="100"
                    alt="Avantage 2"
                  />
                </div>
                <h3>Retrouvez l’information sur tous vos actifs depuis une seule plateforme et une seule interface</h3>
                <p>Optimisez votre gestion financière grâce à une vue d’ensemble claire.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-3.svg') ?>"
                    width="100"
                    height="100"
                    alt="Avantage 3"
                  />
                </div>
                <h3>Marchés de capitaux</h3>
                <p>Gardez une longueur d’avance grâce aux données et analyses en temps réel.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-4.svg') ?>"
                    width="100"
                    height="100"
                    alt="Avantage 4"
                  />
                </div>
                <h3>Accès mobile</h3>
                <p>
                  Notre site mobile entièrement optimisé vous permet de suivre votre portefeuille à tout moment, où que vous soyez.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-5.svg') ?>"
                    width="100"
                    height="100"
                    alt="Avantage 5"
                  />
                </div>
                <h3>Statistiques en direct</h3>
                <p>
                  Suivez vos rendements et vos analyses avec une précision exceptionnelle, à chaque seconde de
                  la journée.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="row">
            <h2>
              Téléchargez l’application dès aujourd’hui et gérez vos finances en temps réel depuis votre smartphone.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">S’inscrire</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Découvrez l’analyse IA de pointe de la plateforme <?= e(SITE_NAME) ?> et une interface de trading
            d’actifs intuitive <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Fonctionnalité 1" />
              </div>
              <div class="text">
                <h4>Portefeuille</h4>
                <p>
                  Renforcez votre profil financier grâce à nos stratégies de trading éprouvées et
                  innovantes.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Fonctionnalité 2" />
              </div>
              <div class="text">
                <h4>Analyse crypto</h4>
                <p>
                  Exploitez la dernière génération d’intelligence artificielle <?= e(SITE_NAME) ?> et ses
                  algorithmes avancés d’apprentissage automatique pour identifier rapidement les opportunités rentables.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Fonctionnalité 3" />
              </div>
              <div class="text">
                <h4>Achat simplifié</h4>
                <p>
                  Nous proposons des fonctionnalités avancées et un accompagnement pour trader les cryptomonnaies
                  de façon simple et intuitive. Aucun frais caché, exécution ultra-rapide. C’est votre
                  occasion de maximiser vos gains de trading grâce à la puissance de l’IA !
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Fonctionnalité 4" />
              </div>
              <div class="text">
                <h4>Actifs numériques</h4>
                <p>
                  Saisissez l’occasion de maximiser vos profits sur le trading d’actifs, qu’il s’agisse
                  de cryptomonnaies ou d’autres actifs. Constituez un portefeuille diversifié avec notre logiciel
                  et nos algorithmes d’apprentissage automatique. Le moment est venu de franchir le pas et de commencer
                  votre parcours de trading !
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
