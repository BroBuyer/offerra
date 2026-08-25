<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Conditions d’utilisation ᐉ ' . SITE_NAME;
$page_description = 'Conditions d’utilisation de ' . SITE_NAME;
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Juridique</span>
    <h1>Conditions d’utilisation</h1>
    <p class="etpy2">Les règles qui s’appliquent lorsque vous accédez à <?= e(SITE_NAME) ?> ou l’utilisez.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Dernière mise à jour : janvier 2025</p>

    <h2>1. Acceptation des conditions</h2>
    <p>En accédant au site et aux services de <?= e(SITE_NAME) ?> ou en les utilisant, vous acceptez d’être lié par les présentes conditions d’utilisation. Si vous n’êtes pas d’accord, n’utilisez pas les services.</p>

    <h2>2. Éligibilité</h2>
    <p>Vous devez avoir au moins 18 ans (ou l’âge de la majorité dans votre juridiction) et être juridiquement capable de conclure un contrat. Les services ne sont pas proposés aux résidents de juridictions restreintes où une telle offre serait illicite.</p>

    <h2>3. Inscription du compte</h2>
    <p>Vous acceptez de fournir des informations exactes, actuelles et complètes lors de l’inscription, et de les tenir à jour. Vous êtes responsable de la confidentialité de vos identifiants et de toute activité sur votre compte.</p>

    <h2>4. Services</h2>
    <p><?= e(SITE_NAME) ?> fournit des outils technologiques et des informations pédagogiques liés à l’investissement en ligne. Nous ne sommes pas votre conseiller financier. Rien sur ce site ne constitue un conseil en investissement personnalisé, un conseil fiscal ni une sollicitation d’achat ou de vente d’un instrument financier.</p>

    <h2>5. Frais</h2>
    <p>Les frais, spreads et commissions applicables sont indiqués sur la plateforme ou dans le barème de frais applicable. Vous êtes responsable de toute taxe découlant de vos activités.</p>

    <h2>6. Conduites interdites</h2>
    <ul>
      <li>Utiliser les services à des fins de blanchiment d’argent, de financement du terrorisme, de manipulation de marché ou à toute fin illicite.</li>
      <li>Usurper l’identité d’une autre personne ou fournir de fausses informations d’identité.</li>
      <li>Tenter d’interférer avec, de compromettre ou de rétroconcevoir une quelconque partie de la plateforme.</li>
      <li>Utiliser des outils automatisés pour accéder aux services autrement que de façon expressément autorisée.</li>
    </ul>

    <h2>7. Propriété intellectuelle</h2>
    <p>Tous les contenus, marques, logiciels et supports du site sont la propriété de <?= e(SITE_NAME) ?> ou de ses concédants et sont protégés par les lois applicables en matière de propriété intellectuelle. Il vous est accordé une licence limitée, non exclusive et révocable d’utiliser les services conformément à leur objet.</p>

    <h2>8. Services de tiers</h2>
    <p>La plateforme peut contenir des liens vers des services de tiers ou s’y intégrer. Nous ne sommes pas responsables de ces services, ni de leur disponibilité, de leur exactitude ou de leur contenu.</p>

    <h2>9. Exclusions de garantie</h2>
    <p>Les services sont fournis « en l’état » et « selon disponibilité », sans garantie d’aucune sorte. Le trading comporte un risque substantiel de perte. Consultez notre <a href="<?= page_url('risk-disclosure.php') ?>" style="color:var(--accent)">Avertissement sur les risques</a> pour plus de détails.</p>

    <h2>10. Limitation de responsabilité</h2>
    <p>Dans toute la mesure permise par la loi, <?= e(SITE_NAME) ?> ne saurait être tenu responsable de tout préjudice indirect, accessoire, spécial, consécutif ou punitif, ni de toute perte de profits ou de chiffre d’affaires, découlant de votre utilisation des services.</p>

    <h2>11. Indemnisation</h2>
    <p>Vous acceptez d’indemniser et de dégager de toute responsabilité <?= e(SITE_NAME) ?>, ses affiliés et son personnel à l’égard de toute réclamation ou demande découlant de votre violation des présentes conditions ou de votre usage abusif des services.</p>

    <h2>12. Suspension et résiliation</h2>
    <p>Nous pouvons suspendre ou résilier l’accès aux services à tout moment, avec ou sans préavis, si nous estimons que vous avez enfreint les présentes conditions ou la loi applicable.</p>

    <h2>13. Droit applicable</h2>
    <p>Les présentes conditions sont régies par les lois applicables au siège de <?= e(SITE_NAME) ?>, sans égard aux principes de conflit de lois.</p>

    <h2>14. Modifications</h2>
    <p>Nous pouvons modifier les présentes conditions de temps à autre. La poursuite de l’utilisation des services après les modifications vaut acceptation des conditions révisées.</p>

    <h2>15. Contact</h2>
    <p>Les questions relatives aux présentes conditions peuvent être envoyées via notre page de contact.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Retour à l’accueil</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
