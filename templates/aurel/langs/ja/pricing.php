<?php
require_once __DIR__ . '/includes/config.php';
$page_title = '料金 ' . SITE_NAME;
$page_description = 'シンプルで透明な料金 — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Pricing</span>
    <h1>シンプルで透明な料金です。</h1>
    <p class="kpnq92g"> <?= e(SITE_NAME) ?> の開始は無料です。口座開設の隠れた手数料はなく、投資すると決めた金額だけを入れます。プラットフォームとツールは含まれています。</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>費用が発生し得る箇所</h2>
    <p>ご自身で選んだ投資以外で残高から資金が出るのは、次の点だけです。</p>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">項目</th><th scope="col">請求元</th><th scope="col">備考</th></tr></thead>
      <tbody>
        <tr><td>口座開設</td><td>—</td><td>無料。</td></tr>
        <tr><td>プラットフォーム利用</td><td>—</td><td>含まれており、サブスクリプションはありません。</td></tr>
        <tr><td>市場スプレッド</td><td>ブローカー</td><td>買い値と売り値の通常の差です。</td></tr>
        <tr><td>ネットワーク／銀行手数料</td><td>決済プロバイダー</td><td>ご選択の方法によります。</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">資金にはリスクがあります。失っても差し支えない範囲のみ投資してください。</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">口座を開設</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>含まれるもの</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>口座開設は無料です。登録料やライセンス料はありません。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>入金、出金、口座維持に隠れた手数料はありません。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>適用される可能性があるのは、標準的なブローカーのスプレッドまたはネットワーク費用のみです。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>最低入金額から始め、ご自身のペースで拡大できます。</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>実際の数字のイメージ</h2>
    <h3>初回入金の手順</h3>
    <p>初回入金は費用の全体像を一箇所にまとめたものです。送金する金額、換算時のスプレッド、そして取引を決めるまでそれ以外はありません。月末の口座手数料もなく、残高を置いたままにする費用もありません。</p>
    <h4>当日の流れ</h4>
    <p>支払いが完了すると残高が表示され、何かが開かれる前に担当者が計画を一緒に確認します。お客様に代わって自動で発注されることはありません。</p>
    <h3>出金とその費用</h3>
    <p>出金は資金が入ってきた支払い方法に戻ります。これは希望ではなく要件であり、口座がお客様のものであるためです。当社側の処理は無料です。差し引かれる可能性があるのは、ご自身の銀行またはカード発行会社が適用するものだけです。</p>
    <h4>予定を立てやすいタイミング</h4>
    <p>営業日に出された依頼は当日に確認します。カードへの返金は通常3〜5営業日、銀行振込は2営業日以内に着金します。</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
