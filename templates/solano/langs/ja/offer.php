<?php
require_once __DIR__ . '/includes/config.php';
$page_title = '選ばれる理由 ' . SITE_NAME;
$page_description = '多くの方が ' . SITE_NAME . ' で始める理由';
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">このプラットフォームを選ぶ理由</span>
    <h1>ここで始める方が多い理由</h1>
    <p class="kpnq92g">売り込みではありません。具体的で確認できる理由と、すべての方に向くわけではない点です。</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>表計算も、散らかった画面も、直前の迷いもありません</h2>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">プラットフォーム</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">従来のブローカー</th><th scope="col">自力での取引</th></tr></thead>
      <tbody>
        <tr><td>AIによる注文執行</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">時間制限あり</td><td style="color:var(--muted)">手動</td></tr>
        <tr><td>すべての市場を24時間カバー</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">書類手続き</td><td style="color:var(--muted)">ご自身で</td></tr>
        <tr><td>1秒未満の注文ルーティング</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">プランによる</td><td style="color:var(--muted)">手動</td></tr>
        <tr><td>多通貨レポート</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">時間制限あり</td><td style="color:var(--muted)">ご自身で</td></tr>
        <tr><td>ペーパーレスの口座開設</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">書類手続き</td><td style="color:var(--muted)">手動</td></tr>
        <tr><td>取引所間アービトラージ</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">プランによる</td><td style="color:var(--muted)">ご自身で</td></tr>
        <tr><td>専任のパーソナルマネージャー</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">時間制限あり</td><td style="color:var(--muted)">手動</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>自力の設定では得られないもの</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">接続されたすべての市場で1秒未満の執行.</b> <?= e(SITE_NAME) ?> は対応するすべての取引所と低遅延のAPI接続を常時維持します。モデルがシグナルを生成すると、次のティックの前に注文が送信・約定され、ダッシュボードに記録されます。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">すべての市場セッションを通じ、24時間稼働します.</b> 暗号資産は休まず、 <?= e(SITE_NAME) ?> も休みません。エンジンは週末や祝日もペアを分析し、機会を逃しません。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">多通貨レポート.</b> 残高、取引、出金はすべて現地通貨で表示されます。隠れた換算ステップはありません。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">分別管理された資金.</b> 資金はお客様ご自身の口座に残ります。 <?= e(SITE_NAME) ?> が資金を保有することはありません。エンジンには注文送信の権限のみがあります。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">銀行水準のセキュリティ.</b> プラットフォーム全体のTLS暗号化、既定の二段階認証、四半期ごとの第三者インフラ監査。取引レシートはオンチェーンに記録されます。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">3つの資産クラス、ひとつのプラットフォーム.</b> 多くの個人向けプラットフォームは単一市場に限定します。 <?= e(SITE_NAME) ?> は同じダッシュボードから暗号資産、上場株式、主要通貨ペアを取引します。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">すべてのポジションに事前設定のリスク限度.</b> ストップロス、許容最大損失、資金配分の上限は資産クラスごとに設定されます。閾値を超えた取引はエンジンが自動で決済し、監査履歴に記録されます。</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>向いていない可能性がある方</h2>
    <p>率直にお伝えすることが時間の節約になります。次のいずれかに当てはまる場合は、別の方法の方が向いています。</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>保証されたリターンが必要です。誠実なプラットフォームは提供せず、当社も提供しません。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>なくては困る資金を投資したい。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>独自の執行基盤でプロ水準の取引量を扱っている。</span></li>
    </ul>
    <p class="jkkyl">投資にはリスクが伴い、投資した資金の一部または全部を失う可能性があります。投資の価値は下落することも上昇することもあり、当初の元本を下回る場合があります。失っても差し支えない資金以外は投資しないでください。</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">今すぐ始める — <?= e(money_min()) ?>から</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
