<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Réponses sur le trading, les fonctionnalités, la sécurité, les frais et comment démarrer avec ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Questions fréquentes</h1>
      <p class="lead">Tout ce que vous devez savoir avant de commencer.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Comment puis-je commencer ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Créez un compte, vérifiez votre e-mail et déposez un minimum de <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Vous aurez un accès immédiat aux graphiques, aux outils et aux guides d'intégration.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <?= e(SITE_NAME) ?> est-elle sûre et légitime ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Nous utilisons le chiffrement SSL, l'authentification à deux facteurs et des processeurs de paiement vérifiés. La sécurité est intégrée à tous les niveaux de la plateforme.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Quels sont les frais ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Les frais sont transparents et affichés avant de confirmer toute transaction. Aucun frais caché sur les dépôts ou les retraits.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Puis-je utiliser le trading automatisé ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Oui. Configurez des bots assistés par IA selon votre profil de risque, ou tradez manuellement — vous pouvez alterner à tout moment.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Comment fonctionnent les retraits ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Demandez un retrait depuis votre tableau de bord. Le traitement prend généralement 1 à 3 jours ouvrables, selon le mode de paiement.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Vous avez encore des questions ?</p>
        <a href="contacts.php" class="btn btn-outline">Contacter l'assistance</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
