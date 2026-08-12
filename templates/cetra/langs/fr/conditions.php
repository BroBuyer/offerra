<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Conditions d’utilisation');
$page_description = 'Les règles applicables lorsque vous accédez à ou utilisez ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
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
      <span class="eyebrow">Legal</span>
      <h1>Conditions d’utilisation</h1>
      <p class="lede">Les règles applicables lorsque vous accédez à ou utilisez <?= e(SITE_NAME) ?>.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Dernière mise à jour : janvier 2025</p>

      <h2>1. Acceptation des Conditions</h2>
      <p>En accédant ou en utilisant le site et les services de <?= e(SITE_NAME) ?>, vous acceptez d’être lié par ces Conditions d’utilisation. Si vous n’êtes pas d’accord, n’utilisez pas les services.</p>

      <h2>2. Éligibilité</h2>
      <p>Vous devez avoir au moins 18 ans (ou l’âge de la majorité dans votre juridiction) et la capacité juridique de conclure un contrat contraignant. Les services ne sont pas proposés aux résidents de juridictions restreintes où une telle offre serait illégale.</p>

      <h2>3. Création de compte</h2>
      <p>Vous acceptez de fournir des informations exactes, à jour et complètes lors de l’inscription et de les maintenir à jour. Vous êtes responsable de la confidentialité de vos identifiants et de toutes les activités sur votre compte.</p>

      <h2>4. Services</h2>
      <p><?= e(SITE_NAME) ?> fournit des outils technologiques et des informations éducatives liés à l’investissement en ligne. Nous ne sommes pas votre conseiller financier. Rien sur ce site ne constitue un conseil en investissement personnalisé, un conseil fiscal ou une sollicitation d’achat ou de vente d’un instrument financier.</p>

      <h2>5. Frais</h2>
      <p>Les frais, marges et commissions applicables sont indiqués sur la plateforme ou dans le barème applicable. Vous êtes responsable de tout impôt découlant de vos activités.</p>

      <h2>6. Conduite interdite</h2>
      <ul>
        <li>Utiliser les services pour le blanchiment d’argent, le financement du terrorisme, la manipulation de marché ou toute fin illégale.</li>
        <li>Usurper l’identité d’autrui ou fournir de fausses informations d’identité.</li>
        <li>Tenter d’interférer, de compromettre ou de procéder à de l’ingénierie inverse sur toute partie de la plateforme.</li>
        <li>Utiliser des outils automatisés pour accéder aux services autrement que de manière expressément autorisée.</li>
      </ul>

      <h2>7. Propriété intellectuelle</h2>
      <p>Tout le contenu, les marques, les logiciels et les matériaux du site sont la propriété de <?= e(SITE_NAME) ?> ou de ses concédants et sont protégés par les lois applicables sur la propriété intellectuelle. Une licence limitée, non exclusive et révocable vous est accordée pour utiliser les services conformément à leur usage prévu.</p>

      <h2>8. Services tiers</h2>
      <p>La plateforme peut contenir des liens vers ou intégrer des services tiers. Nous ne sommes pas responsables de ces services, de leur disponibilité, précision ou contenu.</p>

      <h2>9. Avertissements</h2>
      <p>Les services sont fournis « en l’état » et « selon disponibilité » sans garanties d’aucune sorte. Le trading comporte un risque substantiel de perte. Consultez notre <a href="<?= page_url('conditions.php') ?>">Avertissement sur les risques</a> pour plus de détails.</p>

      <h2>10. Limitation de responsabilité</h2>
      <p>Dans toute la mesure permise par la loi, <?= e(SITE_NAME) ?> ne sera pas responsable des dommages indirects, accessoires, spéciaux, consécutifs ou punitifs, ni d’aucune perte de profits ou de revenus, résultant de votre utilisation des services.</p>

      <h2>11. Indemnisation</h2>
      <p>Vous acceptez d’indemniser et de dégager de toute responsabilité <?= e(SITE_NAME) ?>, ses affiliés et son personnel de toute réclamation résultant de votre violation de ces Conditions ou de votre mauvaise utilisation des services.</p>

      <h2>12. Suspension et résiliation</h2>
      <p>Nous pouvons suspendre ou résilier l’accès aux services à tout moment, avec ou sans préavis, si nous estimons que vous avez violé ces Conditions ou le droit applicable.</p>

      <h2>13. Droit applicable</h2>
      <p>Ces Conditions sont régies par les lois applicables au siège de <?= e(SITE_NAME) ?>, sans égard aux principes de conflit de lois.</p>

      <h2>14. Modifications</h2>
      <p>Nous pouvons modifier ces Conditions de temps à autre. L’utilisation continue des services après modification constitue acceptation des Conditions révisées.</p>

      <h2>15. Contact</h2>
      <p>Les questions concernant ces Conditions peuvent être envoyées via notre <a href="<?= page_url('contacts.php') ?>">page de contact</a>.</p>

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
