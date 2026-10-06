<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Offre | ' . SITE_NAME . ' - Commencez votre parcours';
$page_description = 'Commencez à trader sur ' . SITE_NAME . '. Inscrivez-vous gratuitement dès maintenant.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$page_css = ['angebot-mob.min.css', 'angebot-desk.min.css'];
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
              Créez votre compte dès aujourd’hui sur <?= e(SITE_NAME) ?>. Votre tableau de bord portefeuille est
              prêt !
            </h1>
            <p>
              En moins de 5 minutes, créez votre compte gratuit, effectuez un dépôt et commencez à
              trader. Commencez aujourd’hui : c’est l’occasion de construire un avenir financier solide.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">S’inscrire</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Comment ça marche</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Icône création de compte" />
                <h3>Création de compte</h3>
                <p>
                  Vous pouvez créer votre compte en quelques secondes. Vous accédez immédiatement à nos
                  outils de trading et aux opportunités qui vous attendent.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Icône dépôt" />
                <h3>Déposer des fonds</h3>
                <p>Déposez simplement des fonds pour commencer à trader.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Icône achat et vente" />
                <h3>Achetez et vendez</h3>
                <p>
                  Renforcez votre portefeuille en toute confiance. Entrez sur le marché sans
                  hésiter !
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Ne passez pas à côté ! Rejoignez des milliers de traders qui réussissent !</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Suivez votre portefeuille avec des soldes actualisés et des gains en temps réel.</h3>
            </div>
            <div class="half right">
              <p>
                Ne manquez aucun détail grâce à l’analyse approfondie de <?= e(SITE_NAME) ?> sur les
                schémas de trading et des données sans cesse actualisées. Suivez toutes vos statistiques clés
                — solde, profits et variations de prix. Avec ces outils, vous
                maximisez vos rendements et prenez des décisions d’investissement éclairées. L’avenir,
                c’est maintenant : commencez dès aujourd’hui !
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Commencer</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
