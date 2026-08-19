<?php
require_once __DIR__ . '/includes/config.php';
$page_title = '新規登録 ' . SITE_NAME;
$page_description = ' ' . SITE_NAME . ' で口座を開設';
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">今すぐ始める</span>
    <h1>口座を開設</h1>
    <p class="kpnq92g">最初にいくつかの情報をいただき、その後は担当者が進めます。このステップでお支払いは発生しません。</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>次の流れ</h2>
    <ol class="nxlk2qu">
      <li><h3>フォームを送信</h3><p>数分で完了し、費用はかかりません。</p></li>
      <li><h3>担当者がお電話します</h3><p>情報を確認し、ご質問にお答えし、次のステップを説明します。入金を迫ることはありません。</p></li>
      <li><h3>本人確認し、金額を選びます</h3><p>その時点で初めて資金が動き、お客様が選んだ金額だけです。</p></li>
    </ol>
    <p class="jkkyl">投資にはリスクが伴い、投資した資金の一部または全部を失う可能性があります。投資の価値は下落することも上昇することもあり、当初の元本を下回る場合があります。失っても差し支えない資金以外は投資しないでください。</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">今すぐ始める — <?= e(money_min()) ?>から</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">よくある質問</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>必要なもの</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>実際に確認するメールアドレス。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>担当者が連絡できる電話番号。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>後の確認ステップ用の本人確認書類。</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>フォーム送信後の流れ</h2>
    <h3>確認の電話</h3>
    <p>担当者がお電話し、送信いただいた情報を確認し、ご質問にお答えし、妥当な開始金額を一緒に決めます。通話は会話であり、営業台本ではありません。非現実的な期待で開いた口座は誰の役にも立ちません。</p>
    <h4>所要時間</h4>
    <p>通常、10〜15分の通話1回です。特定の時間に電話してほしい場合はフォームに記載してください。その時間を守ります。</p>
    <h3>本人確認の説明</h3>
    <p>初回入金の前に、顔写真付き身分証明書と、住所が分かる直近の書類をご提出いただきます。規制された金融サービスに共通の要件であり、出金がお客様ご自身にしか戻らないようにするためです。</p>
    <h4>ご利用いただける書類</h4>
    <p>パスポートまたはマイナンバーカードなどの身分証明書と、過去3か月以内に発行された公共料金の請求書または銀行明細書です。スマートフォンで撮影した鮮明な写真で問題ありません。</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>口座を開設</h2>
      <p class="pt6joj">数分で始められます。</p>
<?php
  $form_id = 'sign-form';
  $form_submit = '今すぐ始める';
  $form_class = 'leadform lead-form aurel-form';
  $form_variant = 'band';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
