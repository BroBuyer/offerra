<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'À propos de ' . SITE_NAME;
$page_description = 'Un compte, une vision claire de votre capital — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">La plateforme</span>
    <h1>Un compte, une vision claire de tout</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> réunit votre solde, votre stratégie et votre performance dans un seul tableau de bord transparent, pour que chaque décision soit éclairée et chaque chiffre sous les yeux.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Les personnes derrière votre compte</h2>
    <p>Derrière l’interface, des analystes étudient les marchés chaque jour, des ingénieurs font tourner la plateforme, et des spécialistes d’assistance vous répondent dans votre langue.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Des analystes de marché qui examinent les conditions chaque jour, pas une fois par trimestre.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Des ingénieurs disponibles pour la plateforme, avec une surveillance en continu.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Des spécialistes d’assistance qui gèrent l’ouverture, la vérification et les retraits.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Réglementation, risques et ce que nous ne promettons pas</h2>
    <p>Investir comporte des risques et aucune plateforme ne les supprime. Ce qu’une plateforme peut faire, c’est être claire avec vous : publier ses conditions, confier l’argent des clients à des partenaires réglementés, et documenter le fonctionnement des retraits.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Vérification d’identité avant que des fonds puissent circuler sur le compte.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Les retraits reviennent vers le même moyen que celui utilisé pour le dépôt.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Conditions, avertissement sur les risques et politique de confidentialité publiés intégralement.</span></li>
    </ul>
    <p class="jkkyl">Investir comporte des risques, y compris la perte possible d’une partie ou de la totalité du capital investi. La valeur des investissements peut baisser comme augmenter, et vous pouvez récupérer moins que ce que vous avez versé. N’investissez pas d’argent que vous ne pouvez pas vous permettre de perdre.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Commencer — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Envoyer un message</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Comment la plateforme a été construite</h2>
    <ol class="nxlk2qu">
      <li><h3>Le point de départ</h3><p>Un petit groupe d’analystes et d’ingénieurs entendait toujours la même plainte : les outils existent, mais personne ne les explique.</p></li>
      <li><h3>Première version fonctionnelle</h3><p>La première version ne faisait qu’une chose : afficher un solde et une position en termes simples. Tout le reste a été retiré jusqu’à ce que cette partie soit claire.</p></li>
      <li><h3>Ajouter le côté humain</h3><p>L’automatisation répond au quoi et au quand ; les personnes répondent au pourquoi. Des spécialistes d’assistance ont été ajoutés pour que chaque membre ait quelqu’un à qui s’adresser.</p></li>
      <li><h3>Ouverture à davantage de marchés</h3><p>Moyens de paiement locaux, langues locales et horaires d’assistance locaux.</p></li>
      <li><h3>Où nous en sommes</h3><p>Les mêmes principes à plus grande échelle : des chiffres transparents, des interlocuteurs joignables, aucune surprise dans les petites lignes.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Pourquoi nous sommes là</h2>
    <p>La plupart des personnes qui veulent investir ne commencent jamais, parce que chaque parcours semble conçu pour quelqu’un qui connaît déjà le vocabulaire. Nous avons construit l’inverse : un seul compte, un langage clair, et un spécialiste à qui vous pouvez vraiment parler.</p>
    <p>Pas de jargon là où une phrase simple suffit, pas de frais qui n’apparaissent qu’après le mouvement d’argent, et pas de promesses de rendement qu’on ne peut pas honnêtement garantir.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Utilisateurs actifs</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>Volume échangé</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Assistance</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
