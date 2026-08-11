<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title("Moteur de trading IA premium pour les marchés mondiaux");
$page_description = SITE_NAME . ' — une manière plus intelligente et plus claire d’accéder aux marchés mondiaux grâce à des outils IA structurés pour la crypto, le forex et les actions.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-section" id="signup">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content">
          <h1><?= e(SITE_NAME) ?>: un moyen plus intelligent et plus clair d’accéder aux <span class="text-accent">marchés mondiaux</span></h1>

          <p class="hero-desc">
            Vous débutez dans le trading ? <?= e(SITE_NAME) ?> propose des outils structurés assistés par IA, conçus pour garder votre parcours clair et fluide.
            Découvrez la crypto, le forex et les actions sans le chaos technique.
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">Démarrer le trading — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">Découvrir les fonctionnalités</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              Protégé par le protocole SSL
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Un parcours guidé pour les débutants
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">Créez votre compte</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = 'En moins de 3 minutes. Aucun frais de configuration.';
            $form_submit = 'Créer un compte gratuit';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="stats-bar">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M3 3v18h18"/>
              <path d="m18.7 8-5.1 5.2-2.8-2.7L7 14.3"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">80+</div>
            <div class="stat-label">Actifs négociables</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Rapide</div>
            <div class="stat-label">Mise en place du compte</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">24/7</div>
            <div class="stat-label">Assistance</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Sécurisé</div>
            <div class="stat-label">Traitement des données</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">Un espace de travail intelligent</div>

          <h2 class="section-title">
            Des graphiques professionnels.<br>
            <span class="text-accent">Conçus pour des décisions simples.</span>
          </h2>

          <p class="section-subtitle">
            Suivez les prix en direct et passez à l’action grâce à une interface claire, conçue pour réduire la charge cognitive et le trading émotionnel.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Des graphiques enrichis par l’IA en temps réel
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Un système d’exécution de marché en un clic
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">Voir les fonctionnalités de la plateforme</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">Exécution instantanée disponible</h4>
                <p>
                  Pour acheminer cette commande immédiatement et capturer le niveau de prix actif, activez votre terminal sécurisé <?= e(SITE_NAME) ?>.
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  Créer un compte sécurisé
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">Tableau BTC / USD</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                EN DIRECT
              </span>
            </div>

            <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>

            <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
              +0,15% Aujourd’hui
            </div>

            <div class="mockup-chart mockup-chart-placeholder" id="mockupChart">
              <div class="chart-track" id="mockupChartTrack">
                <div class="chart-bar" style="height: 60%;"></div>
                <div class="chart-bar" style="height: 55%;"></div>
                <div class="chart-bar" style="height: 65%;"></div>
                <div class="chart-bar" style="height: 70%;"></div>
                <div class="chart-bar" style="height: 85%;"></div>
                <div class="chart-bar" style="height: 80%;"></div>
                <div class="chart-bar" style="height: 75%;"></div>
              </div>
            </div>

            <div class="mockup-actions">
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">Vendre</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">Acheter</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Platform capabilities</div>
        <h2 class="section-title">Tout ce dont vous avez besoin pour trader en confiance sur <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Sécurité, rapidité et intelligence de marché neuronale réunies dans une présentation claire</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Sécurité de niveau bancaire</h3>
          <p>Chiffrement SSL, traitement des données sécurisé et architecture de compte entièrement protégée.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4"/>
              <path d="M12 8h.01"/>
            </svg>
          </div>
          <h3>Analyse de marché par IA</h3>
          <p>Calculs de machine learning en temps réel, axés sur la détection des changements de marché significatifs.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>Flux à faible latence</h3>
          <p>Une infrastructure agile dédiée à un traitement rapide des ordres pendant les périodes à forte activité.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">Actifs en temps réel</div>
          <h2 class="section-title">Tableau de bord unifié <?= e(SITE_NAME) ?> pour les indicateurs mondiaux</h2>
          <p class="section-subtitle">
            Suivez les variations des actifs en temps réel, surveillez l’élan et utilisez l’analyse IA automatisée pour identifier les schémas rapidement.
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>Efficacité opérationnelle :</strong>
              Dans le trading traditionnel, il faut observer des centaines d’indicateurs manuellement.
              Les algorithmes de <?= e(SITE_NAME) ?> traitent des milliers de variations de prix chaque milliseconde,
              générant des modèles mathématiques clairs pour détecter les mouvements tôt.
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">Accéder aux marchés</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>Actif</span>
              <span style="text-align:right; padding-right:16px;">Prix</span>
              <span style="text-align:right;">Variation 24h</span>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">BTC</span>
                <span class="asset-fullname">Bitcoin</span>
              </div>
              <div class="asset-price" id="t-btc-p">$67,420.50</div>
              <div class="asset-change trend-up" id="t-btc-c">+0.15%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">ETH</span>
                <span class="asset-fullname">Ethereum</span>
              </div>
              <div class="asset-price" id="t-eth-p">$3,450.25</div>
              <div class="asset-change trend-up" id="t-eth-c">+2.10%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">SOL</span>
                <span class="asset-fullname">Solana</span>
              </div>
              <div class="asset-price" id="t-sol-p">$184.80</div>
              <div class="asset-change trend-down" id="t-sol-c">-0.65%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">BNB</span>
                <span class="asset-fullname">BNB Chain</span>
              </div>
              <div class="asset-price" id="t-bnb-p">$582.40</div>
              <div class="asset-change trend-up" id="t-bnb-c">+1.05%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">XRP</span>
                <span class="asset-fullname">Ripple</span>
              </div>
              <div class="asset-price" id="t-xrp-p">$0.5920</div>
              <div class="asset-change trend-down" id="t-xrp-c">-1.42%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">ADA</span>
                <span class="asset-fullname">Cardano</span>
              </div>
              <div class="asset-price" id="t-ada-p">$0.4850</div>
              <div class="asset-change trend-up" id="t-ada-c">+0.88%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">DOT</span>
                <span class="asset-fullname">Polkadot</span>
              </div>
              <div class="asset-price" id="t-dot-p">$6.75</div>
              <div class="asset-change trend-down" id="t-dot-c">-0.12%</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="onboarding">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Processus d’onboarding</div>
        <h2 class="section-title"><?= e(SITE_NAME) ?> rend le démarrage sans stress</h2>
        <p class="section-subtitle">Vous n’avez jamais négocié de crypto ? Notre guide automatisé vous accompagne à chaque étape.</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Inscription sécurisée</h3>
            <p>Saisissez vos informations de contact de base via notre système de formulaire hautement chiffré.</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>Configuration guidée par IA</h3>
            <p>La plateforme propose des options d’interface adaptées à vos préférences.</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Financement sécurisé</h3>
            <p>Activez votre plage de trading via des moyens de paiement standard et fiables.</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>Déployer les signaux</h3>
            <p>Commencez à interagir avec les marchés mondiaux grâce à des flux de données neuronales en direct.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="mobile-app">
    <div class="container">
      <div class="app-promo-grid">
        <div class="app-promo-visual">
          <div class="app-glow"></div>
          <?php
          $as_phone = true;
          require __DIR__ . '/includes/platform-image.php';
          ?>
        </div>

        <div>
          <div class="section-label">Accès mobile</div>
          <h2 class="section-title">Votre portefeuille, à portée de main</h2>
          <p class="section-subtitle">
            Le moteur complet <?= e(SITE_NAME) ?>, compressé pour une expérience mobile rapide et fidèle au natif.
            Suivez les actifs, exécutez les opérations et suivez les signaux IA depuis n’importe où.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Recevoir des alertes pour les mouvements de prix critiques
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Connexion biométrique avec stockage local chiffré
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Suite de graphiques complète, optimisée pour le tactile
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">Découvrir l’expérience de l’application</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Un cadre équilibré</div>
        <h2 class="section-title">Des paramètres de fonctionnement transparents</h2>
          <p class="section-subtitle">
          Nous croyons à une totale transparence. Voici ce qui distingue notre système — et où se situent généralement les limites du secteur.
        </p>
      </div>

      <div class="comparison-grid">
        <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>Avantages clés</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Un tableau de bord minimaliste optimisé pour la vitesse d’exécution institutionnelle.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Une analyse neuronale en continu, 24/7, sur l’ensemble des actifs.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Zéro marge transactionnelle cachée ni frais de gestion surprises.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Une architecture de compte cryptographique SSL directe.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Une intégration guidée en quelques minutes, pas en jours.
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">Other platforms</div>
          <h3>Limites courantes du secteur</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Des tableaux encombrés et saturés de publicités qui ralentissent les décisions.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Des rapports statiques en fin de journée au lieu d’une analyse continue en direct.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Des spreads cachés, des frais de retrait et une tarification peu claire.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Une infrastructure obsolète partagée avec une protection des données inégale.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Une vérification lente et lourde, pouvant prendre plusieurs jours.
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        La comparaison reflète des schémas typiques du trading de détail et reste indicative ; les offres des concurrents peuvent varier.
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">Fonctionnalités essentielles de la plateforme en un coup d’œil</h2>
        <p class="section-subtitle">Découvrez les paramètres fonctionnels intégrés à votre cadre d’accès au compte.</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>Fonction</th>
              <th>Détail fonctionnel</th>
              <th class="cap-table-center">Inclus</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Cadre de trading par IA</strong></td>
              <td>Traitement algorithmique fournissant des calculs macro-structurels dynamiques.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
            <tr>
              <td><strong>Flux agrégés</strong></td>
              <td>Graphiques consolidés en temps réel pour les indices mondiaux et les tokens modernes.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
            <tr>
              <td><strong>Stabilité multi-supports</strong></td>
              <td>Rendu entièrement adaptatif sur mobile, desktop et tablettes.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
            <tr>
              <td><strong>Couverture multi-actifs</strong></td>
              <td>Accès unifié à la crypto, au forex et aux indices d’actions via une seule couche de compte.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
            <tr>
              <td><strong>Alertes de risque automatisées</strong></td>
              <td>Notifications configurables signalant une volatilité inhabituelle avant qu’elle n’impacte les positions.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
            <tr>
              <td><strong>Coffre de données chiffrées</strong></td>
              <td>Données personnelles et du compte isolées derrière des contrôles d’accès cryptographiques en couches.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>Assistance humaine 24/7</strong></td>
              <td>Opérateurs techniques en direct prêts à répondre immédiatement aux questions de configuration.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Included">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">Dépôts</div>
      <h2 class="section-title">Financez votre compte avec les méthodes que vous connaissez déjà</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        Cartes, portefeuilles électroniques et virements bancaires — tous protégés par un chiffrement SSL 256 bits.
      </p>

      <ul class="payment-icons-list" role="list" aria-label="Méthodes de dépôt et de financement acceptées">
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <rect x="2" y="5" width="20" height="14" rx="2.5"/>
            <path d="M2 10h20"/>
          </svg>
          <span>Visa</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <circle cx="9" cy="12" r="6"/>
            <circle cx="15" cy="12" r="6"/>
          </svg>
          <span>Mastercard</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M6 3h9a5 5 0 0 1 0 10H9l-1 8H4z"/>
          </svg>
          <span>PayPal</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2a5 5 0 0 0-5 5v3H5a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-2V7a5 5 0 0 0-5-5z"/>
          </svg>
          <span>Apple Pay</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 8v8M8 12h8"/>
          </svg>
          <span>Google Pay</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <rect x="3" y="10" width="18" height="9" rx="1"/>
            <path d="M3 10 12 4l9 6"/>
            <path d="M7 10v9M12 10v9M17 10v9"/>
          </svg>
          <span>Virement bancaire</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>Protégé par SSL</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Infrastructure fiable</div>
        <h2 class="section-title">Conçu avec des partenaires de niveau industriel</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
        <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
          <div class="section-label">Avis des utilisateurs</div>
          <h2 class="section-title">Ce que les traders disent sur <?= e(SITE_NAME) ?></h2>
          <p class="section-subtitle">Des retours honnêtes de notre communauté mondiale multi-marchés.</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 out of 5 stars">★★★★★</div>
            <p class="review-text">
              En tant que débutant, la crypto me semblait intimidante. <?= e(SITE_NAME) ?> a rendu le tableau de bord tellement intuitif que je me suis senti confiant en quelques minutes. L’analyse IA est d’une clarté parfaite.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>Verified retail operator · UK</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 out of 5 stars">★★★★★</div>
            <p class="review-text">
              L’interface épurée me fait gagner des heures. Le filtrage de l’« informatif bruit du marché » par l’IA, ramené aux tendances principales, a changé la façon dont je gère mes positions au quotidien.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>Crypto asset analyst · Canada</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 out of 5 stars">★★★★★</div>
            <p class="review-text">
              L’exécution à faible latence et les alertes intelligentes me permettent d’ajuster mes objectifs à la volée, sans lancer plusieurs programmes.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>Private portfolio manager · Germany</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 out of 5 stars">★★★★★</div>
            <p class="review-text">
              L’assistance m’a répondu en deux minutes pendant que je configurais la vérification. Un cadre de service exceptionnel, de niveau institutionnel.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>Algorithmic trader · France</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="seo-content">
        <h2 style="font-size: 38px; margin-bottom: 28px; font-weight: 800;">
          <?= e(SITE_NAME) ?> : donner aux traders les moyens grâce à une architecture IA institutionnelle
        </h2>

        <p class="seo-intro">
          Les interactions avec les actifs exigent une clarté totale. Lorsque les structures de données sont encombrées par des bannières promotionnelles
          ou par des couches d’interface lourdes, les performances de l’utilisateur chutent. <?= e(SITE_NAME) ?> réduit la complexité systémique en déployant
          un environnement central élégant et réactif, optimisé pour une exécution stratégique à long terme. Chaque module de la plateforme,
          de l’onboarding à l’exécution en direct, repose sur le même principe : supprimer le bruit pour laisser les données sous-jacentes
          parler d’elles-mêmes — sans sacrifier la profondeur attendue par les participants expérimentés.
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>Actifs avancés pour le <span>trading crypto</span></h3>
            <p>
              La liquidité des blockchains évolue rapidement, rendant une infrastructure à faible latence essentielle.
              <?= e(SITE_NAME) ?> connecte des nœuds personnalisés aux principales plateformes d’actifs numériques, avec des boucles de feedback de prix en direct.
              Des indicateurs visuels clairs transforment des structures multi-chaînes chaotiques en canaux de données organisés et lisibles.
            </p>
            <p>
              Au-delà des flux de prix bruts, la plateforme contextualise les variations de volume et la profondeur de liquidité afin que les pics
              soudains soient plus faciles à interpréter — pas seulement des signaux réactifs. Cette cohérence compte surtout pendant les sessions volatiles,
              lorsque des outils fragmentés ralentissent les décisions exactement quand la clarté est la plus nécessaire.
            </p>
          </div>

          <div class="seo-block">
            <h3>Analyse de marché <span>neuronale approfondie</span></h3>
            <p>
              Des algorithmes automatisés analysent les données de marché entrantes pour calculer les changements structurels sur le forex et les matières premières internationales.
              <?= e(SITE_NAME) ?> distille des calculs complexes en tendances de données claires qui soutiennent le jugement indépendant, sans le remplacer.
            </p>
            <p>
              Comme les modèles fonctionnent en continu plutôt que selon un calendrier fixe, les changements d’élan apparaissent au moment où ils se produisent,
              plutôt que dans un résumé retardé. Le résultat : une couche de recherche qui soutient le jugement indépendant,
              tout en conservant la décision finale entre les mains de l’utilisateur.
            </p>
          </div>

          <div class="seo-block">
            <h3><span>Création de compte</span> sans friction</h3>
            <p>
              La conformité ne doit pas être compliquée. Notre pipeline d’inscription structuré protège les paramètres privés
              grâce à des processus de vérification sécurisés, conçus pour durer moins de trois minutes entre le début et l’accès au terminal.
            </p>
            <p>
              Chaque champ du parcours explique pourquoi il est demandé, pour que les débutants n’aient jamais à deviner
              le but d’une étape de vérification. Une fois soumis, les contrôles d’identité chiffrés s’exécutent en arrière-plan,
              pendant que le reste du tableau de bord reste entièrement consultable.
            </p>
          </div>

          <div class="seo-block">
            <h3>Des <span>contrôles de risque</span> de qualité institutionnelle</h3>
            <p>
              Le dimensionnement des positions, les limites d’exposition et les indicateurs automatiques de volatilité condensent
              des outils historiquement utilisés par des desks professionnels en de simples interrupteurs — pour que les nouveaux participants héritent de la discipline quotidienne
              des traders expérimentés.
            </p>
            <p>
              Les alertes sont configurables par actif, de sorte que l’attention ne se porte que sur les marchés qui en valent vraiment la peine.
              Cette approche ciblée aide à éviter la lassitude face aux alertes, qui pousse souvent les gens à ignorer les notifications
              sur des plateformes moins sélectives.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="faq">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Centre d’assistance</div>
        <h2 class="section-title">Questions fréquentes</h2>
        <p class="section-subtitle">Réponses immédiates sur l’inscription et l’accès à la plateforme.</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span>Comment démarrer avec <?= e(SITE_NAME) ?> ?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              Remplissez le formulaire d’inscription ci-dessus, suivez notre onboarding sécurisé étape par étape,
              puis activez les paramètres de votre compte via notre système structuré de traitement des paiements.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Faut-il une expérience crypto avancée ?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Non. <?= e(SITE_NAME) ?> propose un mode tableau de bord débutant, des explications analytiques automatisées,
              et des espaces de travail simplifiés pour aider les nouveaux traders à évoluer en toute sécurité.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Quel est le minimum requis pour trader ?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              L’activation de base standard est de <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Elle sert de capital opérationnel de trading et reste sous votre contrôle manuel.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Y a-t-il des frais opérationnels cachés ?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Non. <?= e(SITE_NAME) ?> fonctionne avec une transparence totale des prix.
              Nous n’appliquons aucune marge d’accès à la plateforme inattendue et aucun calcul de retrait caché.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Comment fonctionne le module d’intelligence IA ?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Les systèmes neuronaux évaluent des marqueurs statistiques de volatilité approfondis sur plusieurs couches de marché,
              puis convertissent les données brutes en tendances simplifiées pour une évaluation plus facile.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Mes données personnelles sont-elles totalement protégées ?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Oui. Chaque pipeline de compte est masquée grâce à une protection SSL sécurisée et des protocoles cryptographiques robustes,
              afin d’isoler totalement les plages de données privées.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="final-cta" style="background-color:#0F172A;">
    <div class="container">
      <div class="final-cta-grid">
        <div class="final-cta-content">
          <h2>Prêt à découvrir la clarté de <?= e(SITE_NAME) ?> ?</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            Rejoignez un système moderne optimisé pour des opérations rapides, la protection des données et un accès transparent.
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">Créez votre compte</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = 'Créer un compte gratuit';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
