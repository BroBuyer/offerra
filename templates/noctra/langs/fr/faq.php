<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Réponses sur le financement, la sécurité, les frais et les premiers pas sur ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Avant d'alimenter votre compte</h1>
      <p class="lead">Des réponses directes sur l'accès, la sécurité et le fonctionnement de la plateforme.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Comment commencer ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Créez un compte, vérifiez l'e-mail et déposez à partir de <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Graphiques, outils et prise en main se débloquent aussitôt après.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Comment <?= e(SITE_NAME) ?> est-il sécurisé ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Chiffrement SSL, authentification à deux facteurs et prestataires de paiement vérifiés sous-tendent chaque action sur le compte.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Qu'en est-il des frais ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Les frais s'affichent avant confirmation. Pas de frais surprises sur les dépôts ou les retraits.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Puis-je automatiser mes trades ?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Oui — configurez des bots assistés par l'IA avec des limites de risque, ou restez entièrement en manuel et changez à tout moment.
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
              Faites la demande depuis le tableau de bord. La plupart des moyens se règlent en 1 à 3 jours ouvrés selon le mode de paiement.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Encore des questions ?</p>
        <a href="contacts.php" class="btn btn-outline">Contacter l'assistance</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
