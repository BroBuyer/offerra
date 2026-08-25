<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Tarifs ' . SITE_NAME;
$page_description = 'Des tarifs simples et transparents — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Tarifs</span>
    <h1>Des tarifs simples et transparents.</h1>
    <p class="kpnq92g">Commencer avec <?= e(SITE_NAME) ?> est gratuit. Il n’y a pas de frais cachés pour ouvrir un compte, et vous ne versez que ce que vous choisissez d’investir : la plateforme et ses outils sont inclus.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Où des coûts peuvent apparaître</h2>
    <p>Voici les seuls moments où de l’argent quitte votre solde pour autre chose qu’un investissement que vous avez choisi.</p>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Élément</th><th scope="col">Facturé par</th><th scope="col">Remarque</th></tr></thead>
      <tbody>
        <tr><td>Ouverture de compte</td><td>—</td><td>Gratuit.</td></tr>
        <tr><td>Accès à la plateforme</td><td>—</td><td>Inclus, sans abonnement.</td></tr>
        <tr><td>Spread de marché</td><td>Courtier</td><td>L’écart habituel entre le prix d’achat et le prix de vente.</td></tr>
        <tr><td>Frais de réseau / bancaires</td><td>Prestataire de paiement</td><td>Selon le moyen que vous choisissez.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">Le capital est à risque. N’investissez que ce que vous pouvez vous permettre de perdre.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Ouvrir votre compte</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Ce qui est inclus</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ouverture de compte gratuite : aucun frais d’inscription ni de licence.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Aucun frais caché sur les dépôts, les retraits ou la tenue de compte.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Seuls les spreads de courtier habituels ou les coûts de réseau peuvent s’appliquer.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Commencez avec le dépôt minimum et évoluez à votre rythme.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>À quoi ressemblent les chiffres en pratique</h2>
    <h3>Un premier dépôt, étape par étape</h3>
    <p>Un premier dépôt rassemble tout le tableau des coûts en un seul endroit : le montant que vous envoyez, le spread lors de la conversion, et rien d’autre jusqu’à ce que vous décidiez d’opérer. Il n’y a pas de frais de compte qui attendent en fin de mois, ni de charge pour laisser le solde tel quel.</p>
    <h4>Ce qui se passe le jour même</h4>
    <p>Le solde apparaît une fois le paiement compensé, et un spécialiste parcourt le plan avant que quoi que ce soit soit ouvert. Rien n’est placé automatiquement en votre nom.</p>
    <h3>Les retraits et ce qu’ils coûtent</h3>
    <p>Les retraits reviennent vers le moyen de paiement par lequel l’argent est arrivé : c’est une exigence, pas une préférence, pour que le compte reste le vôtre. Le traitement est gratuit de notre côté ; la seule déduction que vous pourriez voir est celle appliquée par votre banque ou l’émetteur de votre carte.</p>
    <h4>Des délais sur lesquels vous pouvez compter</h4>
    <p>Les demandes faites un jour ouvré sont examinées le jour même. Les retours par carte se règlent en général sous trois à cinq jours ouvrés, les virements bancaires sous deux.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
