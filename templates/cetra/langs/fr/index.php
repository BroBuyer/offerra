<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('IA et exécution en temps réel | Site officiel');
$page_description = SITE_NAME . ' — une technologie d’IA qui analyse les marchés et exécute des ordres en temps réel, avec un analyste personnel à vos côtés pour construire une nouvelle source de revenus.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">Aller au contenu</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Principal">
 <a href="#platform">Produit</a>
 <a href="#how">Comment ça marche.</a>
 <a href="#markets">Marchés en temps réel</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Ouvrez votre compte</a>
 <button class="nav-toggle" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="navLinks" type="button">
 <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
 </button>
 </div>
 </div>
</header>

<main id="top">

<!-- HERO — left: copy + trust chips + CTA · right: lead form (same layout as the reference) -->
<section class="hero" id="hero" aria-labelledby="hero-title">
 <div class="shell hero-grid">
 <div>
 <span class="eyebrow">IA en temps réel + analyse humaine</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span> — investissez maintenant, voyez croître votre capital</h1>
 <p class="hero-sub">Un moteur d’intelligence artificielle scanne les marchés et exécute des ordres en fractions de seconde, tandis que votre analyste personnel adapte chaque décision à votre profil. Aucune expérience requise — vous êtes guidé du début à la fin.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Régulé</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Fonds ségrégués</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9 600 clients</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> note</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Protégé par SSL</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Assistance 24/7</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Exécution rapide</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Commencez maintenant — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> min.</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Ouvrez votre compte</h2>
 <p class="sub">Commencez en quelques minutes.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Je veux commencer';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Indicateurs clés">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Utilisateurs actifs</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>Volume négocié</span></div>
 <div class="stat"><b>99,1%</b><span>Disponibilité des signaux</span></div>
 <div class="stat"><b>24/7</b><span>Support</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">À l’intérieur de <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Suivez votre compte en temps réel</h2>
 <p class="lede">Chaque ordre exécuté par votre analyste est enregistré ici — entrées, sorties et résultats vérifiés sur chaque paire, diffusés en direct.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Graphiques en chandeliers et profondeur en temps réel, sur tout appareil</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Envoi d’ordres en un tap et confirmation instantanée</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Listes de suivi et alertes de prix qui vous suivent</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Commencer maintenant</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — trading mobile avec graphiques crypto en temps réel</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">La plateforme</span><h2 id="features-title">Tout ce dont vous avez besoin, sur une seule plateforme rapide.</h2><p class="lede">Sans graphiques à surveiller, sans ordres à chronométrer. Le moteur de <?= e(SITE_NAME) ?> surveille les carnets d’ordres en temps réel sur les exchanges crypto, les API d’actions mondiales et les principales paires forex — et déclenche des ordres dès que les modèles trouvent une configuration avantageuse.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Exécution en fractions de seconde sur chaque place connectée</h3><p><?= e(SITE_NAME) ?> maintient des connexions API à faible latence avec chaque exchange pris en charge. Lorsque le modèle émet un signal, l’ordre est routé, exécuté et enregistré dans votre tableau de bord avant le prochain tick.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Active 24 h/24, sur toutes les sessions</h3><p>Le marché crypto ne dort jamais, et le moteur de <?= e(SITE_NAME) ?> non plus. Il continue de scanner les paires pendant les week-ends et jours fériés, pour que vous ne manquiez jamais une fenêtre.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Rapports en plusieurs devises</h3><p>Chaque solde, chaque ordre, chaque retrait apparaît dans votre devise locale. Aucune étape de conversion cachée.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Capital ségrégué</h3><p>Vos fonds restent sur votre propre compte. <?= e(SITE_NAME) ?> n’a jamais la garde — le moteur a seulement l’autorisation de router les ordres.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Sécurité de niveau bancaire</h3><p>Chiffrement TLS sur toute la plateforme, authentification à deux facteurs par défaut et audits trimestriels d’infrastructure par des tiers. Reçus d’opérations enregistrés sur blockchain.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Trois classes d’actifs, une seule plateforme</h3><p>La plupart des plateformes grand public se limitent à un seul marché. <?= e(SITE_NAME) ?> opère la crypto, les actions cotées et les principales paires forex dans le même tableau de bord.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Limites de risque prédéfinis sur chaque position</h3><p>Stop-loss, drawdown maximum et limites d’allocation de capital sont configurés par classe d’actifs. Le moteur sort automatiquement de toute opération qui franchit une limite, et l’événement est enregistré dans votre historique d’audit.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Marchés en temps réel</span>
 <h2 id="markets-title">Tradez Bitcoin, Ethereum et bien plus</h2>
 <p class="lede">Prix en temps réel, indicateurs avancés et une vision professionnelle des marchés qui vous intéressent.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Je veux accéder aux marchés</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Marchés</span><span class="mkt-live"><i></i>En direct</span></div>
 <div class="mkt-list">
 <div class="mkt-row" data-sym="BTC"><div class="mkt-c"><b>BTC</b><span>BTC/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 64.671</b><span class="chg down">-1,06%</span></div></div>
 <div class="mkt-row" data-sym="ETH"><div class="mkt-c"><b>ETH</b><span>ETH/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1.881</b><span class="chg down">-2,55%</span></div></div>
 <div class="mkt-row" data-sym="SOL"><div class="mkt-c"><b>SOL</b><span>SOL/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 76,62</b><span class="chg down">-1,72%</span></div></div>
 <div class="mkt-row" data-sym="XRP"><div class="mkt-c"><b>XRP</b><span>XRP/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1,11</b><span class="chg down">-0,97%</span></div></div>
 </div>
 </div>
 </div>
</section>

<!-- HOW IT WORKS -->
<section class="sec" id="how" aria-labelledby="how-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Comment ça marche</span><h2 id="how-title">Comment ça marche.</h2><p class="lede">Une technologie de pointe et un véritable analyste humain, travaillant ensemble en temps réel, pour vous aider à construire une nouvelle source de revenus — avec un accompagnement à chaque étape.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Créez votre compte</h3><p>Inscrivez-vous en quelques minutes avec seulement votre e-mail.</p></div>
 <div class="step"><div class="n">2</div><h3>Confirmez votre e-mail</h3><p>Vérifiez votre adresse pour sécuriser votre compte.</p></div>
 <div class="step"><div class="n">3</div><h3>Déposez sur votre compte</h3><p>Ajoutez des fonds à partir de <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> à votre façon.</p></div>
 <div class="step"><div class="n">4</div><h3>Définissez votre stratégie</h3><p>Choisissez vos objectifs ; votre analyste personnalise le plan.</p></div>
 <div class="step"><div class="n">5</div><h3>Commencez à trader</h3><p>Suivez les signaux guidés et progressez à votre rythme.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Dépôts</span><h2 id="payment-title">Déposez avec des méthodes que vous connaissez déjà</h2><p class="lede">Déposez et retirez via des canaux sécurisés et familiers — sans frais cachés.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Virement bancaire</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Ce que disent les membres</span><h2 id="reviews-title">Ce que disent nos investisseurs</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>« Mon analyste m’a tout expliqué clairement. J’ai défini mes objectifs une seule fois, et maintenant je suis exactement comment mon capital croît — sans angoisse à chaque mouvement. »</p><div class="who"><div class="ini">C</div><div><b>Camille Dupont</b><span>Paris</span></div></div></div>
 <div class="card"><p>« Je n’avais jamais investi auparavant — mon analyste a géré la stratégie et expliqué chaque étape. Pas de fausses promesses, pas de pression, et les retraits arrivent comme prévu. »</p><div class="who"><div class="ini">T</div><div><b>Thomas Bernard</b><span>Lyon</span></div></div></div>
 <div class="card"><p>« J’ai commencé avec peu pour tester. La transparence et le support m’ont donné confiance pour continuer à construire. »</p><div class="who"><div class="ini">S</div><div><b>Sophie Martin</b><span>Marseille</span></div></div></div>
 <div class="card"><p>« Les analyses me parviennent — j’approuve ou j’ajuste en quelques minutes. Ça s’intègre parfaitement à ma routine, sans gêner le travail. »</p><div class="who"><div class="ini">A</div><div><b>Antoine Lefèvre</b><span>Toulouse</span></div></div></div>
 <div class="card"><p>« Ce qui m’a convaincu, c’est la transparence : chaque décision est expliquée, et je vois le raisonnement avant que quoi que ce soit se produise. »</p><div class="who"><div class="ini">L</div><div><b>Léa Moreau</b><span>Nice</span></div></div></div>
 <div class="card"><p>« Le support est réel et toujours accessible. Ma première analyse a été concrète, et la plateforme est restée stable et prévisible depuis. »</p><div class="who"><div class="ini">N</div><div><b>Nicolas Petit</b><span>Bordeaux</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Plateforme</span><h2 id="capabilities-title">Principales fonctionnalités, en bref</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">Moteur d’IA</div>
 <div class="spec-v">Analyse avancée des marchés avec apprentissage automatique</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Modes de dépôt</div>
 <div class="spec-v">Carte de crédit, virement bancaire, PayPal, portefeuilles numériques</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Accès multiplateforme</div>
 <div class="spec-v">Web, tablette et mobile — entièrement responsive</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Précision des signaux</div>
 <div class="spec-v">Jusqu’à 85 % sur les stratégies d’IA prises en charge</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Marchés</div>
 <div class="spec-v">Cryptomonnaies, forex, actions et matières premières</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Inscription</div>
 <div class="spec-v">Ouverture de compte rapide avec vérification guidée</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Support</div>
 <div class="spec-v">Assistance professionnelle 24 h/24 — <a href="<?= page_url('contacts.php') ?>">Envoyer un message</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Questions</span><h2 id="faq-title">Questions fréquentes.</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>Quel est le dépôt minimum ?</summary><p>Ouvrez et financez votre compte à partir du dépôt minimum. Vous pouvez ajouter des fonds au fil du temps à mesure que votre plan progresse.</p></details>
 <details><summary>Comment fonctionnent les retraits ?</summary><p>Demandez un retrait à tout moment depuis le tableau de bord. Les fonds reviennent vers le moyen de paiement choisi, selon les délais de traitement standards.</p></details>
 <details><summary>Mon argent est-il en sécurité ?</summary><p>Les comptes sont protégés par une sécurité de niveau industriel et une vérification stricte. Comme pour tout investissement, votre capital est à risque et les valeurs peuvent baisser autant que monter.</p></details>
 <details><summary>À quelle vitesse puis-je commencer ?</summary><p>La plupart des membres terminent l’inscription en quelques minutes. Dès que votre premier dépôt est confirmé, un plan s’active immédiatement.</p></details>
 <details><summary>Y a-t-il des frais cachés ?</summary><p>Les coûts sont affichés en toute transparence avant que vous ne vous engagiez. Vous saurez toujours exactement ce qui s’applique à votre plan — aucun frais surprise.</p></details>
 <details><summary>Quel est l’âge minimum pour s’inscrire ?</summary><p>Vous devez avoir au moins 18 ans pour ouvrir un compte et investir. Une vérification peut être exigée pour confirmer votre âge et votre identité.</p></details>
 <details><summary>Quels moyens de paiement sont pris en charge ?</summary><p>Les moyens courants comme carte de débit et de crédit, virement bancaire, e-wallets sélectionnés et cryptomonnaies sont pris en charge. Les options exactes apparaissent à l’étape du dépôt.</p></details>
 <details><summary>Quand le support client est-il disponible ?</summary><p>Notre équipe support est disponible du lundi au vendredi, de 9 h à 18 h, et s’engage à répondre à chaque demande sous un jour ouvré.</p></details>
 <details><summary>Comment les impôts sont-ils traités ?</summary><p>Les impôts sur les gains d’investissement dépendent des règles de votre pays et sont votre responsabilité. Nous recommandons de conserver des registres et de consulter un conseiller fiscal qualifié.</p></details>
 <details><summary>Qu’est-ce que le KYC et pourquoi est-il obligatoire ?</summary><p>Le KYC (Know Your Customer) est une vérification standard de votre identité. Il sécurise les comptes et fait partie de l’ouverture de tout compte d’investissement.</p></details>
 <details><summary>Faut-il avoir de l’expérience ?</summary><p>Non. Chaque membre reçoit un analyste financier personnel qui le guide à chaque étape, donc aucune connaissance préalable des marchés n’est nécessaire.</p></details>
 <details><summary>Qui gère mes investissements ?</summary><p>Un analyste financier dédié, soutenu par des outils d’IA, travaillant autour de vos objectifs et de votre niveau de risque. L’analyste allie expertise professionnelle et technologie — les décisions restent humaines.</p></details>
 <details><summary>La plateforme est-elle réglementée ?</summary><p>Oui — elle répond aux normes financières et de cybersécurité nationales, avec protection de compte et vérification stricte intégrées.</p></details>
 <details><summary>Puis-je ajouter des fonds plus tard ?</summary><p>Oui. Vous pouvez alimenter votre compte à tout moment et ajuster votre plan avec votre analyste à mesure que vos objectifs évoluent.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">DE CONFIANCE</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Avis</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b> avis · Basé sur <b style="color:var(--text,#fff)">2.334</b> notes</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Commencez maintenant</span>
 <h2 id="signup-title" class="cta-h">Ouvrez votre compte.</h2>
 <p class="lede">Indiquez-nous comment vous joindre et un expert vous aidera à faire le premier pas.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Ouvrez votre compte</h3>
 <p class="sub">Commencez en quelques minutes.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Je veux commencer';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

</main>

<!-- FOOTER -->
<footer class="foot">
 <div class="shell">
 <div class="foot-top">
 <div>
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <p>Vitesse de l’IA, décision humaine. Capital à risque — investissez de manière responsable.</p>
 </div>
 <div><h4>Produit</h4><div class="foot-links">
 <a href="#platform">Suivez votre compte en temps réel</a><a href="#markets">Marchés en temps réel</a><a href="#how">Comment ça marche.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Entreprise</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">À propos</a><a href="<?= page_url('offer.php') ?>">Tarifs</a><a href="<?= page_url('contacts.php') ?>">Contact</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Confidentialité</a><a href="<?= page_url('conditions.php') ?>">Conditions</a><a href="<?= page_url('conditions.php') ?>">Avertissement sur les risques</a><a href="<?= page_url('contacts.php') ?>">Signaler un abus</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. Tous droits réservés. Investir comporte un risque, y compris une possible perte de capital. · Investir comporte un risque, y compris la possible perte d’une partie ou de la totalité du capital investi. La valeur des investissements peut monter ou baisser, et vous pouvez récupérer moins que ce que vous avez engagé. N’investissez pas d’argent que vous ne pouvez pas vous permettre de perdre.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('fr-FR',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+' €';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Veuillez patienter\u2026";
 var MSG_ERR = "Impossible d’envoyer vos donn\u00e9es pour le moment. R\u00e9essayez.";
 var THANKS = "/thanks/";
 function rand(){ return (Math.random().toString(36).substring(2,12)+Math.random().toString(36).substring(2,6)).replace(/[^a-z0-9]/g,'').substring(0,16); }
 // one-time spinner CSS for the submit button's processing state
 if (!document.getElementById('ldf-spin-css')) {
 var _st = document.createElement('style'); _st.id = 'ldf-spin-css';
 _st.textContent = '.ldf-spin{display:inline-block;width:1em;height:1em;margin-right:.5em;vertical-align:-.15em;border:2px solid currentColor;border-right-color:transparent;border-radius:50%;animation:ldfspin .6s linear infinite}@keyframes ldfspin{to{transform:rotate(360deg)}}';
 (document.head || document.documentElement).appendChild(_st);
 }
 var p = new URLSearchParams(location.search);
 // our click subid → hidden field → send.php click_id → iRev aff_sub3. Accept the
 // common tracker param names so whatever the traffic source appends is captured.
 var subid = p.get('subid') || p.get('sub_id') || p.get('clickid') || p.get('click_id')
 || p.get('cid') || p.get('utm_content')
 || (window.KTracking && KTracking.getSubId ? KTracking.getSubId() : '') || '';
 document.querySelectorAll('form[data-leadform]').forEach(function (form) {
 var tok = form.querySelector('.js-token');
 var tsf = form.querySelector('.js-ts');
 var loadTime = Date.now();
 if (tsf) tsf.value = String(loadTime);
 // Anti-bot: the js_token is written ONLY after a genuine human interaction with
 // the form (focus/key/pointer). A script that POSTs the form without ever
 // touching it never gets a token, and the edge worker rejects tokenless posts.
 var armed = false;
 function arm(){ if (armed) return; armed = true; if (tok && !tok.value) tok.value = rand(); }
 ['focusin','keydown','pointerdown','touchstart'].forEach(function (ev) {
 form.addEventListener(ev, arm, { once: true, passive: true });
 });
 var dom = form.querySelector('.js-domain'); if (dom && !dom.value) dom.value = location.hostname;
 var sub = form.querySelector('.js-subid'); if (sub && subid) sub.value = subid; // only if a URL subid; else t.js fills it
 var phone = form.querySelector('input[type=tel]');
 var sending = false;
 function lock(b){ if(!b) return; b.dataset.lbl = b.dataset.lbl || b.innerHTML; b.disabled = true; b.setAttribute('aria-busy','1'); b.style.opacity='.75'; b.style.cursor='progress'; b.innerHTML='<span class="ldf-spin" aria-hidden="true"></span>'+MSG_WAIT; }
 function unlock(b){ if(!b) return; b.disabled=false; b.removeAttribute('aria-busy'); b.style.opacity=''; b.style.cursor=''; if(b.dataset.lbl) b.innerHTML=b.dataset.lbl; }
 function err(msg){ var el=form.querySelector('[data-leaderr]'); if(!el){ el=document.createElement('p'); el.setAttribute('data-leaderr','1'); el.style.cssText='margin-top:.6rem;font-size:.85rem;line-height:1.35;color:#f87171;text-align:center'; form.appendChild(el);} el.textContent=msg; }
 form.addEventListener('submit', async function (e) {
 e.preventDefault();
 if (sending) return;
 sending = true;
 // stamp the client-measured dwell (ms since load) → the worker rejects
 // instant/near-instant submits that no human could produce.
 if (tsf) tsf.value = String(Date.now() - loadTime);
 var iti = (phone && window.intlTelInputGlobals) ? window.intlTelInputGlobals.getInstance(phone) : null;
 if (iti) {
 // separateDialCode expects a NATIONAL number in the field. If the user ALSO typed the
 // country code (e.g. 351961654221 with the +351 selector) it would double to
 // +351351…; when that makes the number invalid, re-parse the raw digits as a full
 // international number so the country code isn't added twice.
 try {
 var dc = (iti.getSelectedCountryData() || {}).dialCode || '';
 var raw = (phone.value || '').replace(/[^\d+]/g, '');
 if (raw && raw.charAt(0) !== '+' && dc && raw.indexOf(dc) === 0 && !iti.isValidNumber()) {
 iti.setNumber('+' + raw);
 }
 } catch (e3) {}
 try { phone.value = iti.getNumber() || phone.value; } catch (e4) {}
 var cc = form.querySelector('[name=country]'), d = iti.getSelectedCountryData();
 if (cc && d && d.iso2) cc.value = d.iso2.toUpperCase();
 }
 var btn = form.querySelector('button[type=submit]'); lock(btn);
 var prev = form.querySelector('[data-leaderr]'); if (prev) prev.textContent = '';
 try {
 var r = await fetch(form.action, { method: 'POST', body: new FormData(form), headers: { Accept: 'application/json' } });
 var data = await r.json().catch(function () { return {}; });
 var dest = data && data.redirect_url;
 if (dest === '/thanks/' || dest === '/thanks') dest = THANKS;
 if (dest) { location.href = dest; return; }
 if (data && data.success) { location.href = THANKS; return; }
 sending = false; unlock(btn);
 err((data && data.error) || MSG_ERR);
 } catch (e2) {
 sending = false; unlock(btn);
 err(MSG_ERR);
 }
 });
 });
})();
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css" media="print" onload="this.media='all'"><noscript></noscript>
<style>
.iti{width:100%}.iti input,.iti input[type=tel]{width:100%}
/* The dropdown has a white background but inherits the design's body text colour
 (light, for dark themes) → country names render white-on-white (invisible). Force
 a readable light dropdown that the design's CSS can't override. !important beats
 the inherited colour regardless of the design. */
.iti__country-list{background:#fff!important;color:#1b1b1b!important;border:1px solid #e5e7eb;
 box-shadow:0 8px 28px rgba(0,0,0,.18);max-height:230px}
.iti__country,.iti__country-name{color:#1b1b1b!important}
.iti__dial-code{color:#6b7280!important}
.iti__country.iti__highlight,.iti__country:hover{background:#eef2ff!important}
.iti__flag-box{margin-right:8px!important}
</style>
<script>
(function () {
 var phones = document.querySelectorAll('form[data-leadform] input[type=tel]');
 if (!phones.length) return;
 var loading = false, loaded = false;
 function init() {
 phones.forEach(function (input) {
 if (input.dataset.itiReady) return;
 input.dataset.itiReady = '1';
 var form = input.closest('form');
 var hid = form ? form.querySelector('[name=phone_country]') : null;
 window.intlTelInput(input, {
 initialCountry: (hid && hid.value) || 'fr',
 separateDialCode: true,
 utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js'
 });
 });
 }
 // Lazy: pull the widget (incl. the 58 KB utils.js) only when the visitor first
 // touches a phone field — keeps it off the critical path (FCP/LCP) while still
 // ready before they can finish typing a number.
 function load() {
 if (loaded) { init(); return; }
 if (window.intlTelInput) { loaded = true; init(); return; }
 if (loading) return; loading = true;
 var s = document.createElement('script');
 s.src = 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js';
 s.onload = function () { loaded = true; init(); };
 document.head.appendChild(s);
 }
 // Init immediately so the flag + dial code show on load (this script is at the end
 // of <body>, so it never blocks first paint). The heavy utils.js is still fetched
 // asynchronously by the widget AFTER init, keeping it off the critical render path.
 load();
 phones.forEach(function (input) {
 input.addEventListener('focus', load);
 input.addEventListener('touchstart', load, { passive: true });
 });
})();
</script>
<script>/*anim-failsafe*/
(function () {
 var SEL = '[data-anim],[data-animate],[data-aos],[data-reveal],[data-scroll],[class*="reveal"],[class*="fade"],[class*="aos"]';
 function show(el){
 // remove the hooks the design's opacity:0 rule targets, then force-show as backup
 ['data-anim','data-animate','data-aos','data-reveal','data-scroll'].forEach(function(a){ el.removeAttribute(a); });
 el.classList.remove('reveal','fade','fade-in','fade-up','aos-init','will-reveal','animate');
 el.style.setProperty('opacity','1','important'); el.style.setProperty('transform','none','important');
 el.style.setProperty('visibility','visible','important'); el.style.setProperty('filter','none','important');
 }
 function isHidden(el){ return el.offsetHeight > 0 && parseFloat(getComputedStyle(el).opacity) < 0.08; }
 // reveal a block only when it actually reaches the viewport, and only if its own
 // reveal is STILL missing ~1.2s after it got there (i.e. genuinely broken)
 if ('IntersectionObserver' in window) {
 var io = new IntersectionObserver(function(es){ es.forEach(function(e){
 if (!e.isIntersecting) return;
 var el = e.target; io.unobserve(el);
 setTimeout(function(){ if (isHidden(el)) show(el); }, 1200);
 }); }, {rootMargin: '0px 0px -5% 0px'});
 setTimeout(function(){ [].forEach.call(document.querySelectorAll(SEL), function(el){ if (isHidden(el)) io.observe(el); }); }, 1500);
 }
 // counter fallback: a plain number beats a stat frozen at "0" for a visitor who
 // never scrolls the count-up into view (no-op once the real count-up has run)
 setTimeout(function(){ document.querySelectorAll('[data-count]').forEach(function(el){
 var t = el.getAttribute('data-count'); if (t && !/[1-9]/.test(el.textContent||'')) el.textContent = t; }); }, 8000);
})();
</script>
<div id="ck-consent" role="dialog" aria-label="cookies" hidden style="position:fixed;left:16px;right:16px;bottom:16px;z-index:2147483000;max-width:660px;margin:0 auto;background:var(--surface,var(--panel,#12151c));color:var(--text,var(--fg,#e7e9ee));border:1px solid rgba(127,127,127,.28);border-radius:14px;padding:13px 16px;box-shadow:0 12px 40px rgba(0,0,0,.35);display:none;gap:14px;align-items:center;flex-wrap:wrap;font-size:14px;line-height:1.45">
<span style="flex:1;min-width:200px">Nous utilisons des cookies pour améliorer votre expérience.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">J’ai compris</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>
