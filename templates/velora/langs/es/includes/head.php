<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | Motor de trading con IA premium para mercados globales';
$page_description = $page_description ?? 'Una forma más inteligente y limpia de acceder a los mercados globales con ' . SITE_NAME . ' — herramientas de IA estructuradas para cripto, forex y acciones.';
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
      themeToggleDarkText: '🌙 Oscuro',
      themeToggleLightText: '☀️ Claro',
      themeToggleDarkAria: 'Cambiar al tema oscuro',
      themeToggleLightAria: 'Cambiar al tema claro',
      mockupToday: 'Hoy',
      orderPendingAllocation: 'orden pendiente de asignación',
      chatStep1Bot: "¡Hola! Soy Lisa, tu asistente de onboarding. ¿Listo para abrir una cuenta de trading en pocos pasos?",
      chatStep1Yes: 'Sí, empecemos',
      chatStep1More: 'Dime más primero',
      chatStep2Bot: '¡Genial! ¿Ya has operado cripto o forex antes?',
      chatStep2New: 'Soy nuevo',
      chatStep2Mid: 'Tengo algo de experiencia',
      chatStep2Pro: 'Soy experimentado',
      chatStep3Bot: '¿Qué te interesa más ahora mismo?',
      chatStep3Crypto: 'Cripto',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Acciones / índices',
      chatStep3All: 'Todo lo anterior',
      chatStep4Bot: "Perfecto. Prepararé un formulario para tu cuenta gratuita — tarda menos de 3 minutos y nuestro equipo te llamará para finalizar la configuración.",
      chatStep4Form: 'Abrir el formulario',
      chatMoreReply: 'Guiamos a los principiantes con un panel limpio, consejos de mercado con IA en lenguaje sencillo y financiación segura con tu depósito mínimo. ¿Continuamos?',
      chatContinue: 'Sí, continuemos',
      chatFormPrompt: 'Por favor, introduce tus datos abajo y envía — me quedo aquí si necesitas algo.',
      valPhoneRequired: 'Introduce tu número de teléfono',
      valPhoneInvalid: 'Introduce un número de teléfono válido',
      valPhoneCountry: 'Código de país no válido',
      valPhoneShort: 'El número de teléfono es demasiado corto',
      valPhoneLong: 'El número de teléfono es demasiado largo',
      valSessionExpired: 'Sesión expirada. Recarga la página e inténtalo de nuevo.',
      valGenericError: 'Algo salió mal. Vuelve a intentarlo más tarde.',
      valConnectionError: 'Error de conexión. Revisa tu internet y vuelve a intentarlo.'
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
