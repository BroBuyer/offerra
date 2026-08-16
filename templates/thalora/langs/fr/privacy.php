<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Confidentialité | Protection des données chez ' . SITE_NAME;
$page_description = 'Comprenez comment ' . SITE_NAME . ' protège vos données grâce à notre politique de confidentialité.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Politique de confidentialité', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="fil d’Ariane"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Accueil</a>
  <span class="breadcrumb-item">Politique de confidentialité</span>
</nav>
<h1>Notre engagement pour protéger votre vie privée</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Dernière mise à jour : 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> (« nous »), la protection de vos données personnelles est une priorité. Cette déclaration explique comment nous collectons, utilisons et protégeons vos informations.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Transparence dans le traitement des données</p>
    <p>
      Nous visons la clarté sur le traitement des données. Contactez-nous à      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Finalités d’utilisation des données</p>
    <p>Nous utilisons vos informations pour fournir les services, améliorer la plateforme et respecter nos obligations légales.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Accès à vos données</p>
    <p>Vous pouvez à tout moment demander l’accès, la correction ou la suppression de vos données personnelles.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Pratiques de sécurité</p>
    <p>Nous appliquons des mesures de sécurité robustes, sans pouvoir garantir une protection absolue.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Informations collectées</h2>
    <p>Nous collectons notamment les adresses IP, les caractéristiques d’appareil, les types de navigateur et les données que vous fournissez directement.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Bases du traitement</h2>
    <p>Le traitement repose sur votre consentement, nos intérêts légitimes et le respect des lois applicables.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Partage des données</h2>
    <p>Vos informations peuvent être partagées avec des partenaires de confiance, des prestataires et les autorités lorsque la loi l’exige.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Cookies</h2>
    <p>Les cookies assurent le fonctionnement du site et l’analyse d’usage ; vous pouvez les désactiver si vous le souhaitez.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Durée de conservation</h2>
    <p>Nous conservons vos informations uniquement le temps nécessaire aux finalités décrites.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Transferts internationaux</h2>
    <p>Des données peuvent être transférées hors frontière, avec des garanties appropriées.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Liens vers d’autres sites</h2>
    <p>Nous n’assumons pas la responsabilité des sites externes liés depuis la plateforme ni de leurs pratiques.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Mises à jour de cette politique</h2>
    <p>Cette politique de confidentialité peut être mise à jour.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Vos droits</h2>
    <p>Vous avez le droit d’accéder, de rectifier, d’effacer, de limiter le traitement, de transférer vos données, de retirer votre consentement et d’introduire une réclamation.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
