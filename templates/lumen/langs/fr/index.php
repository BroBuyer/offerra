<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Plateforme d’investissement IA');
$page_description = 'Une plateforme d’investissement simple propulsée par l’IA — marchés clairs, décisions guidées et ouverture de compte rapide sur ' . SITE_NAME . '.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Introduction">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Investissez en toute clarté.<br><span class="text-accent">Laissez l’IA garder les choses simples.</span></h1>
        <p class="lead">
          Une plateforme moderne qui explique les marchés en langage clair, met en avant des insights IA utiles et vous aide à passer des ordres sans superflu.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Commencer dès <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Voir comment ça marche</a>
        </div>
      </div>

      <div class="hero-lumen__visual">
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="how">
    <div class="container">
      <div class="section-intro" data-reveal>
        <p class="eyebrow">Pensé pour les débutants</p>
        <h2>Trois étapes. Puis vous tradez.</h2>
        <p class="lead">Pas de jargon de terminal — un parcours clair de l’inscription à votre première position.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Ouvrez votre compte</h3>
          <p>Quelques informations suffisent. La vérification est courte et guidée.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Alimentez en toute sécurité</h3>
          <p>Déposez dès <?= MIN_DEPOSIT ?> <?= CURRENCY ?> avec des moyens de paiement de confiance.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Tradez avec l’aide de l’IA</h3>
          <p>Suivez des insights en langage clair et placez des ordres quand vous êtes prêt.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">Une IA vraiment utile</p>
        <h2>Des signaux que vous comprenez vraiment</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> transforme le bruit du marché en messages courts et lisibles — moins de conjectures, plus de décisions.
        </p>
        <ul class="feature-list">
          <li>Indices clairs achat / conserver / surveiller</li>
          <li>Rappels de risque avant confirmation</li>
          <li>Une interface qui reste calme sous pression</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Essayer la plateforme</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Exemple d’insight">
        <p class="insight-panel__label">Insight en direct</p>
        <p class="insight-panel__title">BTC / USD · momentum stable</p>
        <p class="insight-panel__body">
          La volatilité se calme. L’IA suggère d’observer la prochaine séance avant d’augmenter la taille — vous gardez le contrôle de chaque ordre.
        </p>
        <div class="insight-panel__meta">
          <span>Confiance élevée</span>
          <span>Mis à jour à l’instant</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Commencer</p>
        <h2>Créez votre compte <?= e(SITE_NAME) ?></h2>
        <p class="lead lead-light">
          Rejoignez une plateforme premium qui reste simple — guidance IA dès le premier jour.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Ouverture en moins de 2 minutes';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Infrastructures de confiance</p>
        <h2>Partenaires d’infrastructure</h2>
        <p class="lead">Paiements et accès aux marchés via des prestataires établis.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">FAQ</p>
        <h2>Réponses rapides</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Ai-je besoin d’expérience en trading ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Non. <?= e(SITE_NAME) ?> est conçu pour les investisseurs débutants — les conseils IA sont rédigés en langage clair.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Quel est le dépôt minimum ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Vous pouvez commencer dès <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Les frais restent visibles avant confirmation.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Le support est-il disponible ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Oui — notre équipe est disponible 24 h/24 pour l’alimentation et la configuration du compte.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Lire la FAQ complète →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
