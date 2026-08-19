<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('利用規約');
$page_description = '' . SITE_NAME . ' にアクセスまたはご利用になる際に適用される規則。';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="メイン">
      <a href="<?= page_url() ?>#platform">プラットフォーム</a>
      <a href="<?= page_url() ?>#how">仕組み</a>
      <a href="<?= page_url() ?>#markets">市場</a>
      <a href="<?= page_url() ?>#faq">よくある質問</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">始める</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Legal</span>
      <h1>利用規約</h1>
      <p class="lede"><?= e(SITE_NAME) ?> にアクセスまたはご利用になる際に適用される規則。</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">最終更新：2025年1月</p>

      <h2>1. 規約の承諾</h2>
      <p><?= e(SITE_NAME) ?> のウェブサイトおよびサービスにアクセスまたは利用することにより、本利用規約に拘束されることに同意したものとみなします。同意しない場合は、サービスを利用しないでください。</p>

      <h2>2. 利用資格</h2>
      <p>18歳以上（または管轄地の成年年齢）であり、拘束力のある契約を締結する法的能力が必要です。そのような提供が違法となる制限管轄の居住者にはサービスを提供しません。</p>

      <h2>3. 口座登録</h2>
      <p>登録時に正確、最新かつ完全な情報を提供し、最新の状態に保つことに同意します。認証情報の機密保持および口座上のすべての活動について責任を負います。</p>

      <h2>4. サービス</h2>
      <p><?= e(SITE_NAME) ?> はオンライン投資に関連する技術ツールと教育情報を提供します。当社はお客様のファイナンシャルアドバイザーではありません。本サイトのいかなる内容も、個別の投資助言、税務助言、または金融商品の売買勧誘ではありません。</p>

      <h2>5. 手数料</h2>
      <p>適用される手数料、スプレッド、コミッションはプラットフォームまたは手数料表に開示されます。活動から生じる税金はお客様の責任です。</p>

      <h2>6. 禁止行為</h2>
      <ul>
        <li>マネーロンダリング、テロ資金供与、市場操作、その他違法目的でのサービスの利用。</li>
        <li>他人になりすますこと、または虚偽の身元情報を提供すること。</li>
        <li>プラットフォームのいかなる部分への妨害、侵害、またはリバースエンジニアリングの試み。</li>
        <li>明示的に許可された場合を除き、自動ツールでサービスにアクセスすること。</li>
      </ul>

      <h2>7. 知的財産</h2>
      <p>サイト上のすべてのコンテンツ、商標、ソフトウェア、資料は <?= e(SITE_NAME) ?> またはライセンサーの財産であり、適用される知的財産法で保護されています。意図された目的でサービスを利用するための、限定的、非独占的、取消可能なライセンスが付与されます。</p>

      <h2>8. 第三者サービス</h2>
      <p>プラットフォームには第三者サービスへのリンクや統合が含まれる場合があります。当該サービスの可用性、正確性、内容について当社は責任を負いません。</p>

      <h2>9. 免責事項</h2>
      <p>サービスは「現状有姿」および「提供可能な範囲」で、いかなる種類の保証もなく提供されます。取引には重大な損失リスクが伴います。当社の <a href="<?= page_url('conditions.php') ?>">リスク開示</a>をご覧ください。</p>

      <h2>10. 責任の制限</h2>
      <p>法律で認められる最大限の範囲で、<?= e(SITE_NAME) ?> はサービスの利用から生じる間接的、付随的、特別、結果的、懲罰的損害、または利益・収益の損失について責任を負いません。</p>

      <h2>11. 補償</h2>
      <p>本規約の違反またはサービスの誤用から生じる請求について、<?= e(SITE_NAME) ?>、関連会社およびスタッフを補償し、免責することに同意します。</p>

      <h2>12. 停止および終了</h2>
      <p>本規約または適用法に違反したと判断した場合、通知の有無を問わず、いつでもサービスへのアクセスを停止または終了できます。</p>

      <h2>13. 準拠法</h2>
      <p>本規約は、抵触法の原則にかかわらず、<?= e(SITE_NAME) ?> の所在地に適用される法令に準拠します。</p>

      <h2>14. 変更</h2>
      <p>本規約は随時変更する場合があります。変更後の継続利用は、改定規約の承諾とみなされます。</p>

      <h2>15. お問い合わせ</h2>
      <p>本規約に関するご質問は、当社の<a href="<?= page_url('contacts.php') ?>">お問い合わせページ</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← ホームへ戻る</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. 無断転載を禁じます ·
      <a href="<?= page_url('privacy.php') ?>">プライバシーポリシー</a> ·
      <a href="<?= page_url('conditions.php') ?>">利用規約</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
