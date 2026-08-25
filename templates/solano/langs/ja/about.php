<?php
require_once __DIR__ . '/includes/config.php';
$page_title = '会社概要 ' . SITE_NAME;
$page_description = 'ひとつの口座で、資金を明確に把握 — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">プラットフォーム</span>
    <h1>ひとつの口座で、すべてを明確に把握</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> は残高、戦略、実績をひとつの透明なダッシュボードにまとめます。すべての判断が情報に基づき、すべての数字が見えます。</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>口座の裏側にいる人々</h2>
    <p>インターフェースの裏側には、毎日市場を研究するアナリスト、プラットフォームを動かし続けるエンジニア、お客様の言語で返信するサポート担当者がいます。</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>四半期に一度ではなく、毎日状況を確認する市場アナリスト。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>プラットフォーム担当のエンジニアが、24時間監視します。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>オンボーディング、本人確認、出金を担当するサポートスペシャリスト。</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>規制、リスク、約束しないこと</h2>
    <p>投資にはリスクが伴い、どのプラットフォームもそれを取り除けません。できるのは明確であることです。規約を公開し、お客様の資金を規制されたパートナーのもとで保管し、出金の仕組みを文書化します。</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>口座で資金が動く前の本人確認。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>出金は入金と同じ方法に戻ります。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>利用規約、リスク開示、プライバシーポリシーを全文公開。</span></li>
    </ul>
    <p class="jkkyl">投資にはリスクが伴い、投資した資金の一部または全部を失う可能性があります。投資の価値は下落することも上昇することもあり、当初の元本を下回る場合があります。失っても差し支えない資金以外は投資しないでください。</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">今すぐ始める — <?= e(money_min()) ?>から</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">メッセージを送る</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>プラットフォームの成り立ち</h2>
    <ol class="nxlk2qu">
      <li><h3>出発点</h3><p>少人数のアナリストとエンジニアが、同じ不満を聞き続けていました。ツールはあるが、誰も説明してくれない、というものです。</p></li>
      <li><h3>最初の実用版</h3><p>最初の版が行ったことはひとつです。残高とポジションをわかりやすく示すことです。それが明確になるまで、それ以外は取り除きました。</p></li>
      <li><h3>人の側を取り入れる</h3><p>自動化は何をいつかを答え、人はなぜかを答えます。すべての会員が尋ねられる相手を持てるよう、サポート担当者を加えました。</p></li>
      <li><h3>より多くの市場へ</h3><p>現地の支払い方法、現地の言語、現地のサポート時間。</p></li>
      <li><h3>現在の位置</h3><p>同じ原則をより大きな規模で。透明な数字、連絡できる人、細則での不意はありません。</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>私たちの役割</h2>
    <p>投資したい人の多くは始められません。どの道も、すでに用語を知っている人向けに見えるからです。私たちは逆を作りました。ひとつの口座、わかりやすい言葉、実際に話せる担当者です。</p>
    <p>普通の文で足りるところに専門用語は使いません。資金が動いたあと初めて現れる手数料もなく、誰も誠実に保証できないリターンの約束もありません。</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>アクティブユーザー</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>取引高</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>サポート</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
