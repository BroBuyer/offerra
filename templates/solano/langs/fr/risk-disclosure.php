<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Avertissement sur les risques ᐉ ' . SITE_NAME;
$page_description = 'Avertissement sur les risques — ' . SITE_NAME;
$page_canonical = page_url("risk-disclosure.php");
$active_page = "risk";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Important</span>
    <h1>Avertissement sur les risques</h1>
    <p class="etpy2">Veuillez lire attentivement cet avis avant d’utiliser <?= e(SITE_NAME) ?> ou tout service associé.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Dernière mise à jour : janvier 2025</p>

    <div class="ntr9c">
      <strong>Investir comporte des risques.</strong> La valeur des investissements peut baisser comme augmenter. Vous pouvez perdre une partie ou la totalité du capital investi. <strong>Les performances passées ne sont pas un indicateur fiable des résultats futurs.</strong> N’investissez que de l’argent que vous pouvez vous permettre de perdre.
    </div>

    <h2>1. Avertissement général</h2>
    <p>Le trading et l’investissement dans des instruments financiers, des cryptomonnaies et d’autres actifs numériques comportent un niveau de risque élevé et peuvent ne pas convenir à tous les investisseurs. Avant de décider d’utiliser <?= e(SITE_NAME) ?>, vous devez examiner attentivement vos objectifs d’investissement, votre niveau d’expérience et votre tolérance au risque.</p>

    <h2>2. Risque de marché</h2>
    <p>Les prix des instruments financiers et des actifs numériques peuvent fluctuer fortement sur de courtes périodes en raison des conditions de marché, d’événements macroéconomiques, d’évolutions réglementaires, des conditions de liquidité et d’autres facteurs hors de notre contrôle. Sur les produits à effet de levier, les pertes peuvent dépasser les dépôts initiaux.</p>

    <h2>3. Volatilité des actifs numériques</h2>
    <p>Les cryptomonnaies et autres actifs numériques sont particulièrement volatils. Leur valeur peut être affectée par des événements de réseau, des forks, des pannes de places d’échange, des piratages ou une perte soudaine de confiance. Rien ne garantit qu’un actif numérique conservera une valeur particulière ou restera négociable.</p>

    <h2>4. Risque lié à l’effet de levier</h2>
    <p>Lorsque l’effet de levier est disponible, il amplifie à la fois les gains et les pertes. Un mouvement de marché relativement faible peut entraîner un mouvement proportionnellement plus important de la valeur de votre position, et peut aboutir à la perte totale de vos fonds ou à des montants dus dépassant votre dépôt.</p>

    <h2>5. Risque technologique et d’exécution</h2>
    <p>Les plateformes de trading en ligne peuvent être affectées par des interruptions telles que des pannes système, des retards, des problèmes de connectivité et des cyberattaques. Celles-ci peuvent empêcher l’exécution des ordres aux prix demandés, ou empêcher toute exécution.</p>

    <h2>6. Absence de conseil en investissement</h2>
    <p>Les informations fournies par <?= e(SITE_NAME) ?>, y compris les signaux générés par intelligence artificielle, les tableaux de bord, les contenus pédagogiques ou l’analyse, sont fournies à titre d’information uniquement et ne constituent pas un conseil en investissement personnalisé, une recommandation ni une sollicitation d’achat ou de vente d’un instrument financier. Vous êtes seul responsable de vos décisions d’investissement.</p>

    <h2>7. Performances passées</h2>
    <p><strong>Les performances passées ne sont pas un indicateur fiable des performances futures.</strong> Les backtests, simulations, rendements de modèles et résultats hypothétiques ont des limites inhérentes et ne reflètent pas des résultats de trading réels.</p>

    <h2>8. Considérations réglementaires et fiscales</h2>
    <p>Le traitement réglementaire des instruments financiers et des actifs numériques varie selon les juridictions et évolue. Il vous appartient de comprendre et de respecter les lois qui s’appliquent à vous, y compris les obligations fiscales découlant de vos activités.</p>

    <h2>9. Recourir à un conseil indépendant</h2>
    <p>Si vous avez un doute sur l’adéquation d’un produit ou service proposé via <?= e(SITE_NAME) ?>, vous devriez demander un conseil professionnel indépendant avant de poursuivre.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Retour à l’accueil</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
