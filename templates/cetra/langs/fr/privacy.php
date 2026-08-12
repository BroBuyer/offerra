<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Politique de confidentialité');
$page_description = 'Comment ' . SITE_NAME . ' collecte, utilise et protège vos données personnelles.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Principal">
      <a href="<?= page_url() ?>#platform">Plateforme</a>
      <a href="<?= page_url() ?>#how">Comment ça marche</a>
      <a href="<?= page_url() ?>#markets">Marchés</a>
      <a href="<?= page_url() ?>#faq">Questions fréquentes</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Commencer</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Informations juridiques</span>
      <h1>Politique de confidentialité</h1>
      <p class="lede">Comment <?= e(SITE_NAME) ?> collecte, utilise et protège vos données personnelles.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Dernière mise à jour : janvier 2025</p>

      <h2>1. Introduction</h2>
      <p><?= e(SITE_NAME) ?> (« nous », « notre », « nos ») s’engage à protéger la confidentialité des visiteurs et clients. Cette Politique de confidentialité explique quelles données personnelles nous collectons, pourquoi et comment nous les traitons lorsque vous utilisez notre site et nos services.</p>

      <h2>2. Informations que nous collectons</h2>
      <ul>
        <li>Données d’identité — prénom/nom, date de naissance, documents d’identité délivrés par l’État pour l’inscription et la conformité KYC/AML.</li>
        <li>Données de contact — adresse e-mail, numéro de téléphone, adresse postale.</li>
        <li>Données financières — détails de paiement, historique des transactions, informations sur l’origine des fonds.</li>
        <li>Données techniques — adresse IP, type de navigateur, identifiants d’appareil, cookies et analyses d’utilisation.</li>
      </ul>

      <h2>3. Comment nous utilisons vos données</h2>
      <ul>
        <li>Pour vérifier l’identité et respecter les obligations réglementaires.</li>
        <li>Pour fournir, maintenir et améliorer notre plateforme et nos services.</li>
        <li>Pour traiter les paiements et détecter les activités frauduleuses.</li>
        <li>Pour communiquer avec vous concernant votre compte, les mises à jour et les demandes d’assistance.</li>
        <li>Pour envoyer des communications marketing lorsque vous y avez consenti (désinscription possible à tout moment).</li>
      </ul>

      <h2>4. Base légale</h2>
      <p>Nous traitons les données personnelles sur la base d’un ou plusieurs des fondements légitimes suivants : exécution d’un contrat, respect d’une obligation légale, nos intérêts légitimes, ou votre consentement.</p>

      <h2>5. Partage et divulgation</h2>
      <p>Nous pouvons partager des données personnelles avec des prestataires de paiement réglementés, des partenaires de vérification KYC/AML, des fournisseurs d’infrastructure cloud, des conseillers professionnels et les autorités compétentes lorsque la loi l’exige. Nous ne vendons pas de données personnelles.</p>

      <h2>6. Transferts internationaux</h2>
      <p>Lorsque des données personnelles sont transférées hors de votre juridiction, nous veillons à ce que des garanties appropriées soient en place, y compris des clauses contractuelles types.</p>

      <h2>7. Conservation des données</h2>
      <p>Nous conservons les données personnelles le temps nécessaire pour fournir les services et satisfaire aux exigences légales, réglementaires et comptables — typiquement au moins cinq ans après la clôture du compte.</p>

      <h2>8. Vos droits</h2>
      <p>Sous réserve du droit applicable, vous pouvez demander l’accès, la correction, l’effacement, la limitation ou la portabilité de vos données personnelles, et vous opposer à certains traitements. Pour exercer ces droits, contactez-nous à l’adresse ci-dessous.</p>

      <h2>9. Cookies</h2>
      <p>Nous utilisons des cookies essentiels et analytiques pour faire fonctionner le site et comprendre l’utilisation. Vous pouvez gérer les cookies via les paramètres de votre navigateur.</p>

      <h2>10. Sécurité</h2>
      <p>Nous appliquons des mesures administratives, techniques et physiques conçues pour protéger les données personnelles contre l’accès non autorisé, la divulgation, l’altération ou la destruction. Aucun système n’est parfaitement sûr, et nous ne pouvons garantir une sécurité absolue.</p>

      <h2>11. Modifications</h2>
      <p>Nous pouvons mettre à jour cette Politique de temps à autre. La version la plus récente sera toujours disponible sur cette page avec la date mise à jour.</p>

      <h2>12. Contact</h2>
      <p>Pour les questions de confidentialité ou pour exercer vos droits, contactez l’équipe Protection des données <?= e(SITE_NAME) ?> via notre <a href="<?= page_url('contacts.php') ?>">page de contact</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Retour à l’accueil</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Tous droits réservés ·
      <a href="<?= page_url('privacy.php') ?>">Confidentialité</a> ·
      <a href="<?= page_url('conditions.php') ?>">Conditions</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
