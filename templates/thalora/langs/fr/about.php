<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'À propos de ' . SITE_NAME . ' | La plateforme de trading en détail';
$page_description = 'Découvrez la mission, la technologie et l’engagement de ' . SITE_NAME . ' pour une expérience de trading sécurisée.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('À propos', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="fil d’Ariane"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Accueil</a>
            <span class="breadcrumb-item">Qui nous sommes</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Notre identité</h1>
                      <p class="lead">Plateforme, fonctionnalités et trading responsable.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> réunit accès au marché et outils d’analyse sur une plateforme unique et fluide.</p>
            <p>Nous misons sur une sécurité solide et des processus transparents, faciles à comprendre.</p>
            <p>Le trading comporte des risques et les rendements ne peuvent pas être garantis.</p>
            <p>L’onboarding est simple : créez votre compte, confirmez votre e-mail, déposez un minimum de <?= e(money_min()) ?>, puis accédez au tableau de bord. Passez du mode manuel à l’assisté, définissez des limites et gérez le risque selon votre profil.</p>            <p>Le support aide pour les comptes, paiements, retraits et fonctions de la plateforme. Il ne fournit pas de conseil en investissement personnalisé. En cas d’urgence pendant un trade actif, indiquez l’e-mail du compte et le statut du tableau de bord.</p>            <p>Débutants et traders expérimentés trouvent un environnement clair : tutoriels d’un côté, contrôles avancés et suivi de performance de l’autre. Nous mesurons <?= e(SITE_NAME) ?> à la qualité de l’expérience — pas au marketing agressif. Avant de vous inscrire, lisez la FAQ, les conditions et la politique de confidentialité : risques, délais de retrait et exigences de compte.</p>            <p>At <?= e(SITE_NAME) ?>, vous trouverez des parcours guidés, des outils de suivi et un support opérationnel centré sur des processus de compte et de paiement transparents, sans promettre de résultats de marché.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">S’inscrire aujourd’hui</a>
            </p>
          </div>
        </div>
      </div>
      <!-- support -->
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 lg:grid-cols-2">
          <div
            class="border-primary rounded-custom relative flex flex-col justify-between gap-6 overflow-hidden lg:border lg:p-8"
          >
            <h2>Comment pouvons-nous vous aider ?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Créer un compte';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
