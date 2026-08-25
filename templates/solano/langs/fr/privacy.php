<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Politique de confidentialité ᐉ ' . SITE_NAME;
$page_description = 'Comment ' . SITE_NAME . ' collecte, utilise et protège vos informations personnelles.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Informations juridiques</span>
    <h1>Politique de confidentialité</h1>
    <p class="etpy2">Comment <?= e(SITE_NAME) ?> collecte, utilise et protège vos informations personnelles.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Dernière mise à jour : janvier 2025</p>

    <h2>1. Introduction</h2>
    <p><?= e(SITE_NAME) ?> (« nous », « notre ») s’engage à protéger la vie privée des visiteurs et des clients. Cette politique de confidentialité explique quelles données personnelles nous collectons, pourquoi nous les collectons et comment nous les traitons lorsque vous utilisez notre site et nos services.</p>

    <h2>2. Informations que nous collectons</h2>
    <ul>
      <li><strong>Données d’identité</strong> — nom, date de naissance, pièce d’identité officielle pour la vérification d’identité et le respect des obligations KYC/AML.</li>
      <li><strong>Données de contact</strong> — adresse e-mail, numéro de téléphone, adresse postale.</li>
      <li><strong>Données financières</strong> — détails de paiement, historique des transactions, informations sur l’origine des fonds.</li>
      <li><strong>Données techniques</strong> — adresse IP, type de navigateur, identifiants d’appareil, cookies et analyses d’usage.</li>
    </ul>

    <h2>3. Comment nous utilisons vos données</h2>
    <ul>
      <li>Pour vérifier l’identité et satisfaire aux obligations réglementaires.</li>
      <li>Pour fournir, maintenir et améliorer notre plateforme et nos services.</li>
      <li>Pour traiter les paiements et détecter les activités frauduleuses.</li>
      <li>Pour communiquer avec vous au sujet de votre compte, des mises à jour et des demandes d’assistance.</li>
      <li>Pour envoyer des communications marketing lorsque vous y avez consenti (vous pouvez vous désinscrire à tout moment).</li>
    </ul>

    <h2>4. Base juridique</h2>
    <p>Nous traitons les données personnelles sur l’une ou plusieurs des bases juridiques suivantes : exécution d’un contrat, respect d’une obligation légale, nos intérêts légitimes, ou votre consentement.</p>

    <h2>5. Partage et divulgation</h2>
    <p>Nous pouvons partager des données personnelles avec des prestataires de paiement réglementés, des partenaires de vérification KYC/AML, des fournisseurs d’infrastructure cloud, des conseillers professionnels, et les autorités compétentes lorsque la loi l’exige. Nous ne vendons pas de données personnelles.</p>

    <h2>6. Transferts internationaux</h2>
    <p>Lorsque des données personnelles sont transférées hors de votre juridiction, nous veillons à ce que des garanties appropriées soient en place, y compris des clauses contractuelles types.</p>

    <h2>7. Conservation des données</h2>
    <p>Nous conservons les données personnelles aussi longtemps que nécessaire pour fournir les services et satisfaire aux exigences légales, réglementaires et comptables — en général au moins cinq ans après la clôture d’un compte.</p>

    <h2>8. Vos droits</h2>
    <p>Sous réserve du droit applicable, vous pouvez demander l’accès, la rectification, l’effacement, la limitation ou la portabilité de vos données personnelles, et vous opposer à certains traitements. Pour exercer ces droits, contactez-nous à l’adresse indiquée ci-dessous.</p>

    <h2>9. Cookies</h2>
    <p>Nous utilisons des cookies essentiels et d’analyse pour faire fonctionner le site et comprendre son usage. Vous pouvez gérer les cookies via les paramètres de votre navigateur.</p>

    <h2>10. Sécurité</h2>
    <p>Nous appliquons des mesures administratives, techniques et physiques destinées à protéger les données personnelles contre l’accès, la divulgation, l’altération ou la destruction non autorisés. Aucun système n’est parfaitement sûr, et nous ne pouvons pas garantir une sécurité absolue.</p>

    <h2>11. Modifications</h2>
    <p>Nous pouvons mettre à jour cette politique de temps à autre. La dernière version sera toujours disponible sur cette page, avec la date de mise à jour.</p>

    <h2>12. Contact</h2>
    <p>Pour toute question relative à la confidentialité ou pour exercer vos droits, contactez l’équipe Protection des données de <?= e(SITE_NAME) ?> via notre page de contact.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Retour à l’accueil</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
