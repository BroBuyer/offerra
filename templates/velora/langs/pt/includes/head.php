<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | Motor de trading premium com IA para mercados globais';
$page_description = $page_description ?? 'Uma forma mais inteligente e clara de aceder aos mercados globais com ' . SITE_NAME . ' — ferramentas de IA estruturadas para cripto, forex e ações.';
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
  <link rel="stylesheet" href="<?= asset_version('static/css/main.css') ?>">
  <link rel="stylesheet" href="<?= asset_version('integration/default-integration.css') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css">

  <script>
    window.APP_LANG = {
      themeToggleDarkText: '🌙 Escuro',
      themeToggleLightText: '☀️ Claro',
      themeToggleDarkAria: 'Mudar para o tema escuro',
      themeToggleLightAria: 'Mudar para o tema claro',
      mockupToday: 'Hoje',
      orderPendingAllocation: 'ordem pendente de alocação',
      chatStep1Bot: "Olá! Sou a Lisa, a sua assistente de onboarding. Pronto para abrir uma conta de trading em poucos passos rápidos?",
      chatStep1Yes: "Sim, vamos começar",
      chatStep1More: 'Conte-me mais primeiro',
      chatStep2Bot: 'Ótimo. Já negociou cripto ou forex antes?',
      chatStep2New: "Sou novo",
      chatStep2Mid: 'Alguma experiência',
      chatStep2Pro: "Sou experiente",
      chatStep3Bot: 'O que mais lhe interessa neste momento?',
      chatStep3Crypto: 'Cripto',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Ações / índices',
      chatStep3All: 'Tudo o acima',
      chatStep4Bot: "Perfeito. Vou preparar um formulário de conta gratuita — demora menos de 3 minutos e a nossa equipa ligará para concluir a configuração.",
      chatStep4Form: 'Abrir o formulário',
      chatMoreReply: 'Guiamos principiantes com um painel limpo, dicas de mercado com IA em linguagem clara e financiamento seguro a partir do seu depósito mínimo. Continuamos?',
      chatContinue: "Sim, vamos continuar",
      chatFormPrompt: "Introduza os seus dados abaixo e submeta — fico aqui se precisar de alguma coisa.",
      valPhoneRequired: 'Introduza o seu número de telefone',
      valPhoneInvalid: 'Introduza um número de telefone válido',
      valPhoneCountry: 'Código de país inválido',
      valPhoneShort: 'O número de telefone é demasiado curto',
      valPhoneLong: 'O número de telefone é demasiado longo',
      valSessionExpired: 'Sessão expirada. Recarregue a página e tente novamente.',
      valGenericError: 'Algo correu mal. Tente novamente mais tarde.',
      valConnectionError: 'Erro de ligação. Verifique a sua ligação à internet e tente novamente.'
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
