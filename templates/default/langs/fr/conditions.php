<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Conditions d\'utilisation');
$page_description = 'Consultez les conditions générales d\'utilisation de la plateforme de trading et du site ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Conditions d'utilisation</h1>
      <p class="lead">Dernière mise à jour : <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>En accédant à <?= e(SITE_NAME) ?>, vous acceptez ces Conditions d'utilisation. Si vous n'êtes pas d'accord, veuillez ne pas utiliser nos services.</p>

      <h2>Éligibilité</h2>
      <p>Vous devez avoir au moins 18 ans et être légalement autorisé à trader des instruments financiers dans votre juridiction.</p>

      <h2>Divulgation des risques</h2>
      <p>Le trading de cryptomonnaies, de forex, de CFD et d'autres instruments financiers comporte un risque substantiel de perte. Les performances passées ne garantissent pas les résultats futurs. Ne tradez qu'avec un capital que vous pouvez vous permettre de perdre.</p>

      <h2>Responsabilités du compte</h2>
      <p>Vous êtes responsable de la confidentialité de vos identifiants de compte et de toute activité effectuée sur celui-ci.</p>

      <h2>Disponibilité du service</h2>
      <p>Nous nous efforçons d'assurer une disponibilité continue, mais nous ne garantissons pas un accès ininterrompu. La maintenance, les conditions de marché ou des problèmes techniques peuvent affecter le service.</p>

      <h2>Limitation de responsabilité</h2>
      <p><?= e(SITE_NAME) ?> n'est pas responsable des pertes de trading ni des dommages résultant de l'utilisation des informations sur ce site. Consultez un conseiller financier indépendant lorsque cela est approprié.</p>

      <h2>Contact</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
