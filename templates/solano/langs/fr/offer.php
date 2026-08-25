<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Pourquoi nous ' . SITE_NAME;
$page_description = 'Pourquoi les gens choisissent de commencer avec ' . SITE_NAME;
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Pourquoi cette plateforme</span>
    <h1>Pourquoi les gens choisissent de commencer ici</h1>
    <p class="kpnq92g">Pas un argumentaire commercial : des raisons précises et vérifiables, plus les points qui ne conviendront pas à tout le monde.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Pas de tableurs. Pas d’écrans surchargés. Pas de doutes de dernière minute</h2>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Plateforme</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Courtier traditionnel</th><th scope="col">Trading en autonomie</th></tr></thead>
      <tbody>
        <tr><td>Exécution des ordres par IA</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">horaires limités</td><td style="color:var(--muted)">manuel</td></tr>
        <tr><td>Couverture 24/7 sur tous les marchés</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">paperasse</td><td style="color:var(--muted)">À faire soi-même</td></tr>
        <tr><td>Routage d’ordres en moins d’une seconde</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">selon le palier uniquement</td><td style="color:var(--muted)">manuel</td></tr>
        <tr><td>Reporting multi-devises</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">horaires limités</td><td style="color:var(--muted)">À faire soi-même</td></tr>
        <tr><td>Ouverture de compte sans papier</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">paperasse</td><td style="color:var(--muted)">manuel</td></tr>
        <tr><td>Arbitrage inter-places</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">selon le palier uniquement</td><td style="color:var(--muted)">À faire soi-même</td></tr>
        <tr><td>Gestionnaire personnel dédié</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">horaires limités</td><td style="color:var(--muted)">manuel</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Ce que vous obtenez qu’une configuration en autonomie n’offre pas</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Exécution en moins d’une seconde sur chaque marché connecté.</b> <?= e(SITE_NAME) ?> maintient des connexions API permanentes à faible latence avec chaque place prise en charge. Lorsque le modèle génère un signal, l’ordre est envoyé, exécuté et consigné sur votre tableau de bord avant le tick suivant.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Cela fonctionne 24/7, à chaque séance de marché.</b> Les cryptos ne se reposent pas, et <?= e(SITE_NAME) ?> non plus. Le moteur continue d’analyser les paires pendant les week-ends et les jours fériés pour qu’une opportunité ne soit pas manquée.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Reporting multi-devises.</b> Chaque solde, chaque opération et chaque retrait s’affiche dans votre devise locale. Aucune étape de conversion cachée à aucun moment.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Capital ségrégué.</b> Vos fonds restent sur votre propre compte. <?= e(SITE_NAME) ?> ne les détient jamais : le moteur n’a que l’autorisation d’envoyer des ordres.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Sécurité de niveau bancaire.</b> Chiffrement TLS sur toute la plateforme, vérification en deux étapes par défaut, et audits trimestriels d’infrastructure par des tiers. Reçus d’opérations consignés on-chain.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Trois classes d’actifs, une seule plateforme.</b> La plupart des plateformes grand public vous limitent à un seul marché. <?= e(SITE_NAME) ?> négocie des cryptomonnaies, des actions cotées et les principales paires de devises depuis le même tableau de bord.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Limites de risque prédéfinies sur chaque position.</b> Stop-loss, perte maximale acceptée et plafonds d’allocation de capital sont configurés par classe d’actifs. Le moteur clôture automatiquement toute opération qui dépasse un seuil, et l’événement est consigné dans votre historique d’audit.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>À qui cela ne convient probablement pas</h2>
    <p>Être direct à ce sujet fait gagner du temps à tout le monde. Si l’un des points suivants vous décrit, une autre voie vous conviendra mieux.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Vous avez besoin de rendements garantis. Aucune plateforme honnête n’en propose, et nous non plus.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Vous voulez investir de l’argent dont vous ne pouvez pas vous passer.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Vous négociez à volume professionnel avec votre propre infrastructure d’exécution.</span></li>
    </ul>
    <p class="jkkyl">Investir comporte des risques, y compris la perte possible d’une partie ou de la totalité du capital investi. La valeur des investissements peut baisser comme augmenter, et vous pouvez récupérer moins que ce que vous avez versé. N’investissez pas d’argent que vous ne pouvez pas vous permettre de perdre.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Commencer — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
