<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | Moteur de trading IA premium pour les marchés mondiaux';
$page_description = $page_description ?? 'Un accès plus simple et plus clair aux marchés mondiaux avec ' . SITE_NAME . ' — des outils d’IA structurés pour la crypto, le forex et les actions.';
$page_canonical = isset($page_canonical) ? canonical_url($page_canonical) : page_url();
$active_page = $active_page ?? 'home';
$og_image = page_url($og_image_path ?? og_image_path());
?>
<!DOCTYPE html>
<html lang="<?= e(site_locale()) ?>" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= e($page_title) ?></title>
  <meta name="description" content="<?= e($page_description) ?>">
  <link rel="canonical" href="<?= e($page_canonical) ?>">
<?php if (!empty($noindex)): ?>
  <meta name="robots" content="noindex, nofollow">
<?php else: ?>
  <meta name="robots" content="index, follow, max-image-preview:large">
<?php endif; ?>

  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= e($page_title) ?>">
  <meta property="og:description" content="<?= e($page_description) ?>">
  <meta property="og:url" content="<?= e($page_canonical) ?>">
  <meta property="og:image" content="<?= e($og_image) ?>">
  <meta property="og:site_name" content="<?= e(SITE_NAME) ?>">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= e($page_title) ?>">
  <meta name="twitter:description" content="<?= e($page_description) ?>">
  <meta name="twitter:image" content="<?= e($og_image) ?>">

  <link rel="icon" type="image/svg+xml" href="<?= asset('static/img/logo.svg') ?>">
  <?php if (($active_page ?? '') === 'home' || ($active_page ?? '') === 'product'): ?>
  <link rel="preload" as="image" href="<?= asset(platform_image_path()) ?>" type="image/png">
  <?php endif; ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= asset('static/css/main.css') ?>">
  <link rel="stylesheet" href="<?= asset_version('integration/default-integration.css') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css">

  <script>
    window.APP_LANG = {
      themeToggleDarkText: '🌙 Sombre',
      themeToggleLightText: '☀️ Clair',
      themeToggleDarkAria: 'Passer au thème sombre',
      themeToggleLightAria: 'Passer au thème clair',
      mockupToday: 'Aujourd’hui',
      orderPendingAllocation: 'commande en attente d’allocation',
      chatStep1Bot: "Salut ! Je suis Lisa, votre assistante d’onboarding. Prêt(e) à ouvrir un compte de trading en quelques étapes rapides ?",
      chatStep1Yes: 'Oui, commençons',
      chatStep1More: "Dites-m’en plus d’abord",
      chatStep2Bot: 'Génial. Avez-vous déjà négocié des cryptos ou du forex auparavant ?',
      chatStep2New: 'Je débute',
      chatStep2Mid: "J’ai un peu d’expérience",
      chatStep2Pro: "Je suis expérimenté(e)",
      chatStep3Bot: 'Qu’est-ce qui vous intéresse le plus en ce moment ?',
      chatStep3Crypto: 'Crypto',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Actions / indices',
      chatStep3All: 'Tout ce qui précède',
      chatStep4Bot: "Parfait. Je vais préparer un formulaire de compte gratuit — cela prend moins de 3 minutes et notre équipe vous appellera pour finaliser la configuration.",
      chatStep4Form: 'Ouvrir le formulaire',
      chatMoreReply: 'Nous guidons les débutants avec un tableau de bord clair, des conseils IA sur le marché en langage simple, et un financement sécurisé grâce à votre dépôt minimum. On continue ?',
      chatContinue: 'Oui, continuons',
      chatFormPrompt: 'Veuillez saisir vos coordonnées ci-dessous et envoyer — je reste ici si vous avez besoin de quelque chose.',
      valPhoneRequired: 'Entrez votre numéro de téléphone',
      valPhoneInvalid: 'Entrez un numéro de téléphone valide',
      valPhoneCountry: 'Code pays invalide',
      valPhoneShort: 'Le numéro de téléphone est trop court',
      valPhoneLong: 'Le numéro de téléphone est trop long',
      valSessionExpired: 'Session expirée. Veuillez recharger la page et réessayer.',
      valGenericError: 'Une erreur est survenue. Veuillez réessayer plus tard.',
      valConnectionError: 'Erreur de connexion. Vérifiez votre connexion internet et réessayez.'
    };
  </script>
  <script>
    (function () {
      try {
        var t = localStorage.getItem('brandTheme') || 'dark';
        document.documentElement.setAttribute('data-theme', t);
      } catch (e) {}
    })();
  </script>

  <?php render_schema($active_page === 'home' ? 'home' : 'page', $schema_extra ?? []); ?>
<?php if (function_exists('offer_vitals_head')) { offer_vitals_head(); } ?>
</head>
<body data-theme="dark">
<script>
  (function () {
    try {
      var t = localStorage.getItem('brandTheme') || 'dark';
      document.body.dataset.theme = t;
      document.documentElement.setAttribute('data-theme', t);
    } catch (e) {}
  })();
</script>
