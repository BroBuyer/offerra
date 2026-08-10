<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Réponses sur le financement, la sécurité, les insights IA et le démarrage sur ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Avant d’alimenter votre compte</h1>
      <p class="lead">Des réponses directes sur l’accès, la sécurité et le rôle de l’IA sur la plateforme.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Comment démarrer ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Créez un compte, complétez une courte vérification et déposez dès <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Graphiques, outils et onboarding guidé se débloquent ensuite.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Comment l’IA m’aide-t-elle à trader ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> propose de courts insights de marché en langage clair. C’est toujours vous qui décidez d’agir.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Comment mon compte est-il sécurisé ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Les connexions utilisent le chiffrement SSL. Nous ne demandons jamais d’autorisations inutiles — gardez vos identifiants privés.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Y a-t-il des frais cachés ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Les frais s’affichent avant confirmation. Aucune surprise sur les dépôts ou retraits lorsque les conditions sont respectées.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
