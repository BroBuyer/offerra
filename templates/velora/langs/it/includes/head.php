<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | Motore di trading IA premium per i mercati globali';
$page_description = $page_description ?? 'Un modo più semplice e pulito per accedere ai mercati globali con ' . SITE_NAME . ' — strumenti IA strutturati per crypto, forex ed azioni.';
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
      themeToggleDarkText: '🌙 Scuro',
      themeToggleLightText: '☀️ Chiaro',
      themeToggleDarkAria: 'Passa al tema scuro',
      themeToggleLightAria: 'Passa al tema chiaro',
      mockupToday: 'Oggi',
      orderPendingAllocation: 'ordine in attesa di allocazione',
      chatStep1Bot: "Ciao! Sono Lisa, la tua assistente di onboarding. Sei pronto a aprire un conto di trading in pochi semplici passaggi?",
      chatStep1Yes: 'Sì, iniziamo',
      chatStep1More: 'Dimmi prima di più',
      chatStep2Bot: 'Ottimo. Hai già tradato crypto o forex in passato?',
      chatStep2New: 'Sono alle prime armi',
      chatStep2Mid: 'Ho un po’ di esperienza',
      chatStep2Pro: 'Ho esperienza',
      chatStep3Bot: 'Cosa ti interessa di più in questo momento?',
      chatStep3Crypto: 'Crypto',
      chatStep3Forex: 'Forex',
      chatStep3Stocks: 'Azioni / indici',
      chatStep3All: 'Tutte le opzioni',
      chatStep4Bot: "Perfetto. Preparerò un modulo per un conto gratuito — ci vogliono meno di 3 minuti e il nostro team ti chiamerà per completare l’impostazione.",
      chatStep4Form: 'Apri il modulo',
      chatMoreReply: 'Guidiamo i principianti con una dashboard pulita, consigli IA sul mercato in linguaggio semplice e finanziamento sicuro dal tuo deposito minimo. Continuiamo?',
      chatContinue: 'Sì, continuiamo',
      chatFormPrompt: 'Inserisci i tuoi dati qui sotto e invia — resterò qui se hai bisogno di qualcosa.',
      valPhoneRequired: 'Inserisci il tuo numero di telefono',
      valPhoneInvalid: 'Inserisci un numero di telefono valido',
      valPhoneCountry: 'Codice paese non valido',
      valPhoneShort: 'Il numero di telefono è troppo corto',
      valPhoneLong: 'Il numero di telefono è troppo lungo',
      valSessionExpired: 'Sessione scaduta. Ricarica la pagina e riprova.',
      valGenericError: 'Qualcosa è andato storto. Riprova più tardi.',
      valConnectionError: 'Errore di connessione. Controlla la tua connessione internet e riprova.'
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
