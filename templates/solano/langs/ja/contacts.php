<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'お問い合わせ ' . SITE_NAME . ' ᐉ サポートいたします';
$page_description = ' ' . SITE_NAME . ' または口座についてご質問がありますか？';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">お問い合わせ</span>
    <h1>サポートいたします</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> または口座についてご質問がありますか？サポートチームが喜んでお手伝いします。ご連絡いただければ、できるだけ早く返信します。</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>ご連絡の前に</h2>
    <p>ご質問の多くはすでにサイト上に回答があります。先に確認する方が、返信を待つより通常は早いです。</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">よくある質問</a> — 費用、出金、本人確認、最低金額。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">仕組み</a> — 登録後の流れを、手順ごとに。</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">料金</a> — 無料のものと、費用が発生し得る箇所。</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">今すぐ始める — <?= e(money_min()) ?>から</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>お問い合わせ方法</h2>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">チャネル</th><th scope="col">適している用途</th><th scope="col">対応</th></tr></thead>
      <tbody>
        <tr><td>メールサポート — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>口座に関するご質問、本人確認、出金</td><td>通常、1営業日以内に返信します。</td></tr>
        <tr><td>折り返し電話の依頼</td><td>電話の方が説明しやすい内容</td><td>サポート時間：月曜日〜金曜日、9:00〜18:00</td></tr>
        <tr><td>不正利用の報告 — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/report-abuse</a></td><td>なりすまし、ブランドの不正使用、不審なメッセージ</td><td>受領後に確認</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>ご連絡後の流れ</h2>
    <h3>どのチャネルを使うか</h3>
    <p>添付がある場合はメールが適切です。本人確認、出金の照会、明細書に関するご質問などです。それ以外は折り返し電話のフォームをご利用ください。口座に関するご質問の多くは、4通のメッセージより2分の会話の方が早く解決します。</p>
    <h4>サポート時間外</h4>
    <p>夕方や週末に送られたメッセージはキューに残り、次の営業日の始業時に、到着順に回答します。</p>
    <h3>記載するとよい詳細</h3>
    <p>登録メールと、お尋ねの内容のおよその日付があれば口座を特定できます。パスワード、カード番号の全桁、ワンタイムコードは送らないでください。当社の誰もそれらを求めることはありません。</p>
    <h4>様子がおかしい場合</h4>
    <p>当日中にご報告ください。身に覚えのない支払いに関することは、通常のキューを待たず直ちに対応します。</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
