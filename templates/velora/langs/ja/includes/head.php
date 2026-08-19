<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schema.php';

$page_title = $page_title ?? SITE_NAME . ' | グローバル市場向けプレミアムAIトレーディングエンジン';
$page_description = $page_description ?? 'よりスマートで洗練された方法でグローバル市場にアクセスできる ' . SITE_NAME . ' — 暗号資産、外国為替、株式向けの構造化されたAIツールです。';
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
      themeToggleDarkText: '🌙 ダーク',
      themeToggleLightText: '☀️ ライト',
      themeToggleDarkAria: 'ダークテーマに切り替える',
      themeToggleLightAria: 'ライトテーマに切り替える',
      mockupToday: '本日',
      orderPendingAllocation: '注文は割り当て待ちです',
      chatStep1Bot: "こんにちは。オンボーディングアシスタントのLisaです。いくつかの簡単なステップで取引口座を開設する準備はできていますか？",
      chatStep1Yes: "はい、始めましょう",
      chatStep1More: '先にもう少し教えてください',
      chatStep2Bot: 'ありがとうございます。これまで暗号資産や外国為替の取引をしたことはありますか？',
      chatStep2New: "初めてです",
      chatStep2Mid: '多少の経験があります',
      chatStep2Pro: "経験があります",
      chatStep3Bot: 'いま最も関心があるのは何ですか？',
      chatStep3Crypto: '暗号資産',
      chatStep3Forex: '外国為替',
      chatStep3Stocks: '株式 / 指数',
      chatStep3All: '上記のすべて',
      chatStep4Bot: "承知しました。無料アカウントのフォームをご用意します — 所要時間は3分未満で、チームが設定完了のためにお電話します。",
      chatStep4Form: 'フォームを開く',
      chatMoreReply: '初心者の方には、すっきりしたダッシュボード、わかりやすい言葉でのAI市場ヒント、最低入金額からの安全な資金拠出でご案内します。続けますか？',
      chatContinue: "はい、続けましょう",
      chatFormPrompt: "以下に詳細をご入力のうえ送信してください — ご不明な点があれば、こちらで対応します。",
      valPhoneRequired: '電話番号を入力してください',
      valPhoneInvalid: '有効な電話番号を入力してください',
      valPhoneCountry: '国番号が無効です',
      valPhoneShort: '電話番号が短すぎます',
      valPhoneLong: '電話番号が長すぎます',
      valSessionExpired: 'セッションの有効期限が切れました。ページを再読み込みして、もう一度お試しください。',
      valGenericError: '問題が発生しました。しばらくしてからもう一度お試しください。',
      valConnectionError: '接続エラーです。インターネット接続を確認して、もう一度お試しください。'
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
