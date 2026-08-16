<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Conditions générales | Accord utilisateur avec ' . SITE_NAME;
$page_description = 'Consultez les conditions de la plateforme, les règles de trading et les politiques d’assistance de ' . SITE_NAME . '.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Conditions générales', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="fil d’Ariane" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Accueil</a>
            <span class="breadcrumb-item">Conditions générales</span>
        </nav>
        <h1>Conditions générales</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Introduction</h2>
    <p>Ce site présente des services de trading de tiers. En continuant, vous acceptez ces conditions et notre politique de confidentialité. Les conditions peuvent être mises à jour.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Éligibilité</h2>
    <p>Vous devez avoir au moins 18 ans et être légalement autorisé à accepter ces conditions, conformément au droit local. Nous déclinons toute responsabilité en cas d’usage impropre de la plateforme.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Limitations d’accès</h2>
    <p>L’accès peut être restreint dans certaines régions ou en cas de limitations réglementaires. Certains services peuvent être indisponibles selon le lieu.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Usage approprié</h2>
    <p>L’usage non autorisé est interdit, y compris les activités illégales, l’atteinte aux droits, la diffusion de contenus nuisibles ou les bots. Les infractions peuvent entraîner la suspension du compte.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Propriété intellectuelle</h2>
    <p>Tous les contenus, marques et droits de propriété intellectuelle nous appartiennent ou appartiennent à nos affiliés. L’usage du site est personnel ; copier ou modifier le contenu n’est pas autorisé.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Limitation de responsabilité</h2>
    <p>Les services et le site sont fournis « en l’état ». Nous n’acceptons aucune responsabilité pour les erreurs, pertes ou dommages résultant de l’utilisation.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Contenus tiers</h2>
    <p>Des contenus ou liens tiers peuvent figurer sans garantie d’exactitude ni de disponibilité ; vérifiez-les de manière indépendante.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Liens externes</h2>
    <p>Les liens externes sont fournis pour votre commodité. Nous n’approuvons ni ne contrôlons ces sites et déclinons toute responsabilité quant à leur contenu.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Dispositions complémentaires</h2>
    <p>Nous pouvons mettre à jour les services et les conditions. Ces conditions constituent l’intégralité de l’accord. Le non-exercice d’un droit ne vaut pas renonciation.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
