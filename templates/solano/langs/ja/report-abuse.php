<?php
require_once __DIR__ . '/includes/config.php';
$page_title = '不正利用を報告 ᐉ ' . SITE_NAME;
$page_description = '不正利用を報告 — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">信頼と安全</span>
    <h1>不正利用を報告</h1>
    <p class="etpy2"><?= e(SITE_NAME) ?> の安全維持にご協力ください。詐欺、なりすまし、プラットフォームやブランドの不正使用の疑いを報告してください。</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>報告する内容</h2>
    <p>次のいずれかを、信頼と安全チームにご報告ください。</p>
    <ul>
      <li><?= e(SITE_NAME) ?> を装ったフィッシングメール、詐欺サイト、偽アプリ。</li>
      <li>当社の名称、ロゴ、商標を不正に使うソーシャルメディアアカウント、広告、メッセージチャネル。</li>
      <li>口座乗っ取り、不正アクセス、身元盗用の疑い。</li>
      <li>不審な支払い要求、「リカバリー業者」、当社の代理を称する第三者。</li>
      <li>市場濫用、マネーロンダリングの懸念、当社サービスに関連する違法行為。</li>
      <li>スタッフまたはユーザーに対する侮辱的、脅迫的、または嫌がらせの行為。</li>
    </ul>

    <h2>報告方法</h2>
    <p>以下のいずれかのチャネルから、詳細な報告をお送りください。可能であれば、次を含めてください。</p>
    <ul>
      <li>事案の日時。</li>
      <li>URL、スクリーンショット、メッセージヘッダー、送信元アドレスまたは電話番号。</li>
      <li>口座情報（ご自身の口座に関する報告の場合）。</li>
      <li>調査に役立つその他の背景。</li>
    </ul>

    <div class="ziavo">
      <div class="ws86ccr">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>信頼と安全チームのメール</b>
        <span>お問い合わせページから信頼と安全チームにご連絡ください。報告は1営業日以内に振り分けます。</span>
      </div>
      <div class="ws86ccr">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>セキュリティの開示</b>
        <span>当社システムに影響するセキュリティ脆弱性の責任ある開示については、詳細を公開する前にご連絡ください。</span>
      </div>
    </div>

    <h2>その後の流れは？</h2>
    <p>すべての報告を確認します。事案の性質に応じて、追加情報のご連絡、決済プロバイダーやホスティング事業者との連携による不正コンテンツの削除、または法執行機関や規制当局への照会を行う場合があります。報告は機密として扱い、法的に可能な範囲で報告者の身元を守ります。</p>

    <h2>緊急の事案</h2>
    <p>犯罪の被害に遭ったと思われる場合は、地元の警察にもご連絡のうえ、当社にもお知らせください。口座が侵害された疑いがある場合は、直ちにパスワードを変更し、すぐにご連絡ください。</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">信頼と安全チームに連絡</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← ホームへ戻る</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
