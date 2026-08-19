<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'よくある質問 ' . SITE_NAME;
$page_description = 'ご質問にお答えします — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">ご質問</span>
    <h1>ご質問に明確にお答えします</h1>
    <p class="kpnq92g">口座開設前によくあるご質問と、お電話でもお伝えする回答です。</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>資金についてのご質問</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name"><?= e(SITE_NAME) ?> は詐欺ですか？</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">いいえ。<?= e(SITE_NAME) ?> は本人確認を実施し、利用規約とリスク開示を全文公開しており、出金は常に当初の支払い方法に戻ります。ただし、あらゆる投資には実際のリスクが伴い、信頼できるプラットフォームが収益を保証することはありません。保証する者にはご注意ください。</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">口座開設にはいくらかかりますか？</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">口座開設は無料です。登録料もサブスクリプションもなく、投資すると決めた金額だけを入れます。</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">出金にはどのくらいかかりますか？</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">依頼は営業日に処理され、入金した方法に戻ります。銀行振込はカードや電子ウォレットより時間がかかります。</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">最低金額はありますか？</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">はい。意図的に低く設定しており、 <?= e(money_min()) ?> から少額で始め、後から追加できます。正確な金額は何かを確定する前に表示されます。</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>よくある質問</h2>
    <div class="fjl4d">
      <details open><summary>始めるための最低入金額はいくらですか？</summary><p>口座の開設と入金は <?= e(money_min()) ?> から可能です。投資計画の進行に合わせて、追加の資金を自由に入れられます。</p></details>
      <details><summary>出金はどのように行われますか？</summary><p>ダッシュボードからいつでも出金を依頼できます。資金はご指定の支払い方法に、通常の処理時間で戻ります。</p></details>
      <details><summary>資金は安全に保管されますか？</summary><p>口座はプロ水準のセキュリティと本人確認で保護されます。あらゆる投資と同様、資金にはリスクがあり、価値は下落することも上昇することもあります。</p></details>
      <details><summary>投資を始めるまでどのくらいかかりますか？</summary><p>ほとんどの会員は数分で登録を完了します。初回入金が処理されれば、すぐにプランを有効化できます。</p></details>
      <details><summary>隠れた手数料はありますか？</summary><p>すべての費用はご承諾の前に透明に表示されます。プランに適用される内容は常に確認でき、不意の請求はありません。</p></details>
      <details><summary>登録の最低年齢は何歳ですか？</summary><p>口座開設と投資には18歳以上である必要があります。年齢と身元の確認のため、本人確認を求める場合があります。</p></details>
      <details><summary>どの支払い方法が利用できますか？</summary><p>デビットカード、クレジットカード、銀行振込、一部の電子ウォレット、暗号資産など一般的な方法をご利用いただけます。正確な選択肢は入金ステップで表示されます。</p></details>
      <details><summary>カスタマーサポートはいつ利用できますか？</summary><p>サポートチームは月曜日から金曜日の9:00〜18:00にご利用いただけます。各お問い合わせには1営業日以内に回答することをお約束します。</p></details>
      <details><summary>利益に対する税金はどのように扱われますか？</summary><p>投資益への課税はお住まいの国の規則により、お客様ご自身の責任です。記録を残し、資格のある税理士にご相談いただくことをおすすめします。</p></details>
      <details><summary>KYC確認とは何ですか。なぜ必要ですか？</summary><p>KYC（Know Your Customer）は標準的な本人確認です。口座の安全を守り、投資口座開設の通常の手続きです。</p></details>
      <details><summary>事前の投資経験は必要ですか？</summary><p>いいえ。すべての会員に専任の金融アナリストが付き、各ステップで案内します。市場の事前知識は必要ありません。</p></details>
      <details><summary>投資は誰が管理しますか？</summary><p>AIツールに支えられた専任の金融アナリストが、目標とリスク水準に沿って対応します。専門知識と技術を組み合わせますが、判断は人が行います。</p></details>
      <details><summary>プラットフォームは規制基準を満たしていますか？</summary><p>はい。国内の金融およびサイバーセキュリティ基準を満たし、口座保護と本人確認が組み込まれています。</p></details>
      <details><summary>後から口座に資金を追加できますか？</summary><p>はい。いつでも口座に追加でき、目標の変化に合わせてアナリストとプランを調整できます。</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>口座とセキュリティ</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name"><?= e(SITE_NAME) ?> へのログインはどのように行いますか？</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">登録済みのメールアドレスとパスワードで、ウェブサイトまたはモバイルブラウザからログインします。二段階認証を有効にしている場合は追加のコードが求められます。パスワードを忘れた場合は、ログイン画面から再設定できます。</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">なぜ本人確認書類が必要ですか？</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">口座が資金を動かす前に本人確認が必要です。他人がお客様の名義で口座を開設するのも防ぎます。</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">事前の経験は必要ですか？</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">いいえ。ほとんどの会員は未経験から始めます。担当者が最初のステップをご案内し、デモ残高で練習できます。</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">スマートフォンで使えますか？</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">はい。インストールなしで、モバイルブラウザでプラットフォームをご利用いただけます。</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">今すぐ始める — <?= e(money_min()) ?>から</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">メッセージを送る</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
