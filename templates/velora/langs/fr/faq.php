<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Réponses sur le financement, la sécurité, les informations IA et la prise en main sur ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';

$faq_chevron = '<svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Questions fréquentes</h1>
      <p class="lead">Des réponses claires sur l’inscription, la sécurité et la façon dont l’IA aide sur la plateforme.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Comment démarrer ?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Créez un compte, complétez une courte vérification, puis déposez à partir de <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Les graphiques, les outils et l’onboarding guidé se débloquent immédiatement. Vous pouvez aussi discuter avec Lisa dans le coin.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Comment l’IA m’aide à trader ?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> présente des informations marché courtes, en langage simple. Vous décidez toujours d’agir ou non.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Comment mon compte est-il sécurisé ?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Les connexions utilisent le chiffrement SSL. Nous ne demandons jamais d’autorisations inutiles — gardez votre connexion privée.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Y a-t-il des frais cachés ?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Les frais s’affichent avant la confirmation. Aucun frais inattendu sur les dépôts ou retraits lorsque les conditions sont respectées.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Qui est Lisa dans le widget de chat ?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisa est notre assistante d’onboarding. Elle vous guide à travers un court questionnaire et vous aide à envoyer une demande de compte sécurisée.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
