<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Plateforme de trading avec IA');
$page_description = 'Tradez les cryptomonnaies, le forex et les marchés mondiaux avec ' . SITE_NAME . '. Analyse en temps réel, signaux assistés par IA et une plateforme conçue pour la rapidité et la clarté.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <!-- Hero -->
  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-content">
        <p class="eyebrow">Plateforme de trading avec IA</p>
        <h1>Tradez plus intelligemment.<br><span class="text-accent">Agissez plus vite.</span></h1>
        <p class="lead">
          Un nouveau standard dans le trading crypto et multi-marchés. Sécurité avancée, frais transparents,
          insights pilotés par l'IA et une interface qui ne vous gêne pas.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL sécurisé
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Assistance 24h/24
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Exécution rapide
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Commencer à trader — min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Ouvrez votre compte en 2 minutes';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Statistiques de la plateforme">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Devises disponibles</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Utilisateurs vérifiés</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Volume de trading</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Pays pris en charge</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Aperçu de la plateforme de trading">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Plateforme de trading</p>
        <h2>Graphiques professionnels.<br>Prête pour le mobile.</h2>
        <p class="lead">
          Une interface épurée, comme sur une exchange moderne — données BTC/USDT en temps réel, suivi de portefeuille
          et exécution en un clic. Conçue pour vous donner confiance dès la première connexion.
        </p>
        <ul class="platform-points">
          <li>Graphiques en chandeliers en temps réel</li>
          <li>Portefeuille et P/L en un coup d'œil</li>
          <li>Tableau de bord de compte sécurisé</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Essayer la plateforme</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Pourquoi <?= e(SITE_NAME) ?></p>
        <h2>Tout ce dont vous avez besoin pour trader en confiance</h2>
        <p class="lead">Sécurité, rapidité et intelligence — réunies dans une plateforme claire conçue pour les traders modernes.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Sécurité de niveau bancaire</h3>
          <p>Le chiffrement SSL, la 2FA et la gestion sécurisée des fonds protègent vos données et votre capital à chaque étape.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Signaux de marché IA</h3>
          <p>Des insights précis en temps réel vous aident à identifier les opportunités et à prendre des décisions plus rapides et éclairées.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Trading automatisé</h3>
          <p>Des bots assistés par IA travaillent 24 heures sur 24 pour exécuter des stratégies efficacement, tout en gardant le contrôle.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Accès multi-marchés</h3>
          <p>Tradez les cryptomonnaies, le forex, les actions et les matières premières dans un environnement unifié.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Exécution à faible latence</h3>
          <p>Infrastructure optimisée pour une exécution stable des ordres, même en période de forte activité de marché.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Interface épurée</h3>
          <p>Un design minimaliste qui réduit le bruit pour vous concentrer sur la stratégie, pas sur la navigation.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Marchés en temps réel</p>
        <h2>Tradez Bitcoin, Ethereum et bien plus</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Prix en temps réel, indicateurs avancés et une vue professionnelle des marchés qui vous intéressent.
        </p>
        <a href="sign.php" class="btn btn-primary">Accéder aux marchés</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Prix de marché en temps réel">
        <div class="exchange-panel-header">
          <span>Marchés</span>
          <span class="live-dot">Live</span>
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

  <!-- How it works -->
  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Comment commencer</p>
        <h2>De l'inscription à la première opération en quelques minutes</h2>
        <p class="lead">Un parcours guidé — sans complexité, sans incertitude.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Créez votre compte</h3>
          <p>Inscrivez-vous avec vos coordonnées et obtenez un accès immédiat et sécurisé à la plateforme.</p>
        </article>
        <article class="step-card">
          <h3>Vérifiez votre e-mail</h3>
          <p>Confirmez votre adresse pour débloquer l'environnement de trading complet.</p>
        </article>
        <article class="step-card">
          <h3>Alimentez votre compte</h3>
          <p>Déposez un minimum de <?= MIN_DEPOSIT ?> <?= CURRENCY ?> par virement bancaire, carte ou portefeuille électronique.</p>
        </article>
        <article class="step-card">
          <h3>Définissez votre stratégie</h3>
          <p>Définissez le niveau de risque et vos préférences — manuel ou avec automatisation assistée par IA.</p>
        </article>
        <article class="step-card">
          <h3>Commencez à trader</h3>
          <p>Entrez sur le marché avec des graphiques en temps réel, des outils et une assistance quand vous en avez besoin.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Ouvrir un compte maintenant</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Financement</p>
      <h2 style="margin-bottom: 0.75rem;">Déposez avec des méthodes en lesquelles vous avez déjà confiance</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Cartes, portefeuilles électroniques et virements bancaires — protégés par chiffrement SSL.</p>
      <?php
      $payment_context = 'dépôts et financement de compte';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infrastructure de confiance</p>
        <h2>Construite avec des partenaires de référence du secteur</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Avis</p>
        <h2>Ce que disent les traders</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">L'inscription a pris quelques minutes, les frais sont transparents et l'assistance répond vraiment. Une expérience fluide et fiable — une plateforme avec laquelle je suis ravi de continuer.</p>
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
          <p class="review-text">J'ai enfin essayé le trading crypto ici — aucun regret. Configuration rapide et tout expliqué clairement. Excellent choix, surtout si vous débutez.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Passionnée de crypto</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Stable et fiable. Ouverture de compte simple, conditions claires et équipe qui maîtrise son sujet. Une expérience de trading étonnamment confortable.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Opérateur d'actifs numériques</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Le trading ne semble plus si compliqué. Inscription simple, frais clairs et assistance quand j'en ai besoin. En tant que débutant, cela fait toute la différence.</p>
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

  <!-- FAQ -->
  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>Questions fréquentes</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Comment puis-je commencer ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Créez un compte avec vos coordonnées de base, complétez une courte étape de vérification et déposez le minimum de <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Vous aurez accès à la plateforme complète — graphiques en temps réel, outils de trading et intégration guidée.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Mon argent et mes données sont-ils en sécurité ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Nous utilisons le chiffrement SSL, l'authentification à deux facteurs et un traitement sécurisé via des prestataires de confiance. Vos données personnelles sont traitées selon des politiques de sécurité strictes à tous les niveaux.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Quand puis-je retirer mes profits ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Demandez des retraits à tout moment depuis votre tableau de bord. Le traitement prend généralement 1 à 3 jours ouvrables. Les frais et les délais sont toujours affichés à l'avance — sans surprise.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ai-je besoin d'expérience en trading ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Pas du tout. L'intégration guidée, des tutoriels simples et des outils assistés par IA vous aident à apprendre à votre rythme. Que vous soyez débutant ou expérimenté, l'assistance est disponible 24h/24.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Sur quels marchés puis-je trader ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Accédez aux cryptomonnaies, au forex, aux actions mondiales et aux matières premières dans une interface unique. Données en temps réel, analyses intégrées et prise en charge des stratégies manuelles ou automatisées.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Platform specs -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Plateforme</p>
        <h2>Capacités principales en un coup d'œil</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Moteur de trading IA</div>
          <div class="specs-value">Analyse de marché avancée avec machine learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Méthodes de financement</div>
          <div class="specs-value">Cartes de crédit, virements bancaires, PayPal, portefeuilles électroniques</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Accès par appareil</div>
          <div class="specs-value">Web, tablette et mobile — entièrement responsive</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Précision des signaux</div>
          <div class="specs-value">Jusqu'à 85 % sur les stratégies IA prises en charge</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Marchés</div>
          <div class="specs-value">Crypto, forex, actions, matières premières</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Intégration</div>
          <div class="specs-value">Configuration rapide du compte avec vérification guidée</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Assistance</div>
          <div class="specs-value">Support professionnel 24h/24 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Contactez-nous</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">De confiance</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Avis sur <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> avis · Basé sur <strong>1&nbsp;842</strong> évaluations
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Prêt à trader sur une plateforme conçue pour la clarté ?</h2>
        <p class="lead">Rejoignez des traders privés et des entreprises qui achètent, vendent et gèrent des actifs numériques en toute confiance.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Créez votre compte gratuit';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
