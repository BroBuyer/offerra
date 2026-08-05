<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Plateforme de trading IA');
$page_description = 'Tradez la crypto et d\'autres marchés sur ' . SITE_NAME . ' — compte sécurisé, tarifs clairs, outils IA utiles et exécution rapide des ordres.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <div class="market-tape" aria-hidden="true">
    <div class="container market-tape-inner">
      <span class="tape-item"><strong>BTC</strong> <span class="tape-up" data-change="btc">—</span></span>
      <span class="tape-item"><strong>ETH</strong> <span class="tape-up" data-change="eth">—</span></span>
      <span class="tape-item"><strong>SOL</strong> <span class="tape-down" data-change="sol">—</span></span>
      <span class="tape-item"><strong>XRP</strong> <span class="tape-up" data-change="xrp">—</span></span>
      <span class="tape-item"><strong>Écarts</strong> dès 0,1</span>
      <span class="tape-item"><strong>Vitesse</strong> sous 40 ms</span>
      <span class="tape-item"><strong>Marchés</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> Plateforme de trading assistée par l'IA</div>
        <h1>Tradez la crypto et d'autres marchés.<br><span class="text-accent">Commencez avec <?= e(SITE_NAME) ?></span></h1>
        <p class="lead">
          Une plateforme simple pour le trading crypto et multi-actifs — sécurité solide, tarifs clairs,
          analyses IA utiles, et une interface facile à suivre.
        </p>
        <div class="hero-badges" aria-label="Points forts de la plateforme">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Connexion chiffrée sécurisée (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Assistance client disponible 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Exécution rapide des ordres
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Commencer aujourd'hui — dépôt min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Créer un compte</span>
          <span class="live-pill">Sécurisé</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Inscrivez-vous en moins de 2 minutes';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Marchés en direct</p>
        <h2>Voyez les prix en temps réel. Commencez quand vous êtes prêt.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Suivez Bitcoin, Ethereum et d'autres paires majeures dans un panneau clair —
          puis ouvrez votre compte et placez votre premier ordre.
        </p>
        <a href="sign.php" class="btn btn-primary">Accéder aux marchés</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Prix des marchés en direct">
        <div class="exchange-panel-header">
          <span>Marchés</span>
          <span class="live-dot">En direct</span>
        </div>
        <div class="ticker-list" data-ticker-list>
          <div class="ticker-row">
            <div><div class="ticker-symbol">BTC</div><div class="ticker-pair">BTC/USD</div></div>
            <div class="ticker-price" data-price="btc">—</div>
            <div class="ticker-change up" data-change="btc">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">ETH</div><div class="ticker-pair">ETH/USD</div></div>
            <div class="ticker-price" data-price="eth">—</div>
            <div class="ticker-change up" data-change="eth">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">SOL</div><div class="ticker-pair">SOL/USD</div></div>
            <div class="ticker-price" data-price="sol">—</div>
            <div class="ticker-change down" data-change="sol">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">XRP</div><div class="ticker-pair">XRP/USD</div></div>
            <div class="ticker-price" data-price="xrp">—</div>
            <div class="ticker-change up" data-change="xrp">—</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="platform-section" id="platform" aria-label="Aperçu de la plateforme de trading">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Plateforme</p>
        <h2>Des graphiques clairs.<br>Prêt à trader.</h2>
        <p class="lead">
          Un écran de trading adapté au mobile avec graphiques en direct, gains et pertes,
          et ordres en un tap — simple à comprendre dès la première connexion.
        </p>
        <ul class="platform-points">
          <li>Graphiques et prix de marché en direct</li>
          <li>Solde du portefeuille en un coup d'œil</li>
          <li>Espace compte sécurisé avec 2FA</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Ouvrir la plateforme</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Fonctionnalités</p>
        <h2>Ce que vous obtenez avec <?= e(SITE_NAME) ?></h2>
        <p class="lead">Sécurité, rapidité et outils clairs — sans écran surchargé.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Sécurité de compte renforcée</h3>
            <p>Chiffrement SSL, connexion à deux facteurs et flux de fonds protégés pour mieux sécuriser votre argent et vos données.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>Analyses de marché par IA</h3>
            <p>Des signaux utiles qui indiquent le timing et les tendances — pratique quand les prix bougent vite.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Automatisation quand vous le voulez</h3>
            <p>Des bots de trading optionnels peuvent suivre vos règles 24 h/24 — vous gardez le contrôle.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Plusieurs marchés au même endroit</h3>
            <p>Crypto, forex, actions et matières premières depuis une seule plateforme simple.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Traitement rapide des ordres</h3>
            <p>Conçu pour placer vos ordres de façon fiable, même quand les marchés sont agités.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Mise en page claire et simple</h3>
            <p>Moins de bruit visuel — plus de place pour le graphique et votre prochain ordre.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Pour commencer</p>
        <h2>Cinq étapes jusqu'à votre premier trade</h2>
        <p class="lead">Un parcours clair, de l'inscription aux marchés en direct.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Ouvrez un compte</h3>
            <p>Envoyez vos informations et obtenez un accès sécurisé à la plateforme.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>Confirmez l'e-mail</h3>
            <p>Vérifiez votre adresse pour débloquer l'environnement de trading complet.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Ajoutez des fonds</h3>
            <p>Déposez à partir de <?= MIN_DEPOSIT ?> <?= CURRENCY ?> par carte, virement bancaire ou portefeuille électronique.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Choisissez comment trader</h3>
            <p>Tradez manuellement ou utilisez des outils assistés par l'IA avec des limites que vous définissez.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Tradez en direct</h3>
            <p>Utilisez graphiques, outils et une assistance 24/7 dès que vous avez besoin d'aide.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Commencer maintenant</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Paiements</p>
      <h2 style="margin-bottom: 0.75rem;">Déposez avec des moyens que vous connaissez déjà</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Cartes, portefeuilles et virements — chiffrés de bout en bout.</p>
      <?php
      $payment_context = 'approvisionnement du compte et dépôts';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infrastructure</p>
        <h2>Partenaires d'infrastructure</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Avis</p>
        <h2>Ce que disent les traders</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Inscription rapide, frais clairs, et le support a répondu. Une plateforme avec laquelle je peux rester.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Trader indépendant</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">J'ai testé la crypto ici après plusieurs apps — la prise en main est claire et les graphiques ont enfin du sens.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Trader crypto</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Les ordres passent de façon fiable, les conditions sont en langage simple, et l'équipe connaît le produit. Une plateforme solide.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Trader d'actifs numériques</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">En débutant, j'avais besoin de clarté plus que d'effets. Inscription, frais et aide en cas de blocage — c'était suffisant.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Investisseuse privée</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>Avant d'alimenter votre compte</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Comment commencer ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Créez un compte, complétez une courte vérification et déposez à partir de <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Cela débloque les graphiques, les outils et un accompagnement guidé.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Comment mon argent et mes données sont-ils protégés ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Nous utilisons le chiffrement SSL, l'authentification à deux facteurs et des prestataires de paiement de confiance sous des politiques de données strictes.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Combien de temps prennent les retraits ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Demandez un paiement à tout moment depuis le tableau de bord. La plupart des moyens se règlent en 1 à 3 jours ouvrés, avec les frais indiqués à l'avance.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Faut-il déjà avoir de l'expérience en trading ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Non. Des étapes guidées et des outils assistés par l'IA vous aident à apprendre à votre rythme, avec une assistance 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Quels marchés sont disponibles ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Cryptomonnaies, forex, actions internationales et matières premières — en manuel ou automatisé — depuis une seule interface.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Aperçu</p>
        <h2>La plateforme en un coup d'œil</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Outils IA</div>
          <div class="specs-value">Analyse de marché avec insights par apprentissage automatique</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Financement</div>
          <div class="specs-value">Cartes, virements bancaires, PayPal, portefeuilles électroniques</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Appareils</div>
          <div class="specs-value">Web, tablette, mobile — entièrement responsive</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Qualité des signaux IA</div>
          <div class="specs-value">Jusqu'à 85 % sur les stratégies prises en charge*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Marchés</div>
          <div class="specs-value">Crypto, forex, actions, matières premières</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Prise en main</div>
          <div class="specs-value">Configuration rapide avec vérification guidée</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Assistance</div>
          <div class="specs-value">Assistance 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Nous contacter</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Noté</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Score <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> avis · Basé sur <strong>1 842</strong> notes
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Prêt pour une façon plus claire de trader ?</h2>
        <p class="lead">Rejoignez des traders qui veulent des marchés en direct, des frais clairs et une plateforme facile à utiliser.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Ouvrir un compte</span>
          <span class="live-pill">Gratuit</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Créez votre compte gratuit';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
