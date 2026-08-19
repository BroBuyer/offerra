<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI投資プラットフォーム');
$page_description = 'AIを活用したシンプルな投資プラットフォーム — わかりやすい市場、ガイド付きの判断、' . SITE_NAME . 'での迅速な口座開設。';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="はじめに">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>明確に投資する。<br><span class="text-accent">AIがシンプルに保ちます。</span></h1>
        <p class="lead">
          市場を平易な言葉で説明し、役立つAIインサイトを示し、余計なものを除いて取引できる、現代的な投資プラットフォームです。
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">開始金額 <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">仕組みを見る</a>
        </div>
      </div>

      <div class="hero-lumen__visual">
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="how">
    <div class="container">
      <div class="section-intro" data-reveal>
        <p class="eyebrow">初心者向けに設計</p>
        <h2>3つのステップ。あとは取引です。</h2>
        <p class="lead">専門用語はありません — 登録から最初のポジションまで、明確な道筋だけです。</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>口座を開設</h3>
          <p>いくつかの情報をご記入ください。本人確認は短く、案内付きです。</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>安全に入金</h3>
          <p>信頼できる決済方法で <?= MIN_DEPOSIT ?> <?= CURRENCY ?> から入金できます。</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>AIのサポートで取引</h3>
          <p>平易なインサイトに沿って、準備ができたら注文を出します。</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">役立つAI</p>
        <h2>実際に理解できるシグナル</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?>は市場のノイズを短く読みやすいヒントに変えます — 推測を減らし、判断に時間を使えます。
        </p>
        <ul class="feature-list">
          <li>明確な買い / 保有 / 注視の手がかり</li>
          <li>確定前のリスクリマインダー</li>
          <li>プレッシャー下でも落ち着いたインターフェース</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">プラットフォームを試す</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="インサイトの例">
        <p class="insight-panel__label">ライブインサイト</p>
        <p class="insight-panel__title">BTC / USD · 安定したモメンタム</p>
        <p class="insight-panel__body">
          ボラティリティは落ち着きつつあります。AIはサイズを上げる前に次のセッションを注視することを提案します — すべての注文はご自身で管理します。
        </p>
        <div class="insight-panel__meta">
          <span>信頼度：高</span>
          <span>たった今更新</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">今すぐ始める</p>
        <h2>あなたの <?= e(SITE_NAME) ?>口座を作成</h2>
        <p class="lead lead-light">
          プレミアムでありながらシンプルなプラットフォームに参加 — 初日からAIガイド付きです。
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = '2分以内に開設';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">信頼の基盤</p>
        <h2>インフラパートナー</h2>
        <p class="lead">確立されたプロバイダーを通じた決済と市場アクセス。</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">よくある質問</p>
        <h2>簡単な回答</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            取引経験は必要ですか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              いいえ。<?= e(SITE_NAME) ?>は初めての投資家向けです — AIのヒントは平易な言葉で書かれています。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            最低入金額はいくらですか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= MIN_DEPOSIT ?> <?= CURRENCY ?> から始められます。手数料は確定前に表示されます。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            サポートはありますか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              はい — 入金と口座設定について、チームがいつでも対応します。
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">よくある質問の全文を読む →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
