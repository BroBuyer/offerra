<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI取引プラットフォーム');
$page_description = '暗号資産とその他市場を ' . SITE_NAME . ' で — 安全な口座、明確な料金、役立つAIツール、迅速な注文執行。';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <div class="market-tape" aria-hidden="true">
    <div class="container market-tape-inner">
      <span class="tape-item"><strong>BTC</strong> <span class="tape-up" data-change="btc">—</span></span>
      <span class="tape-item"><strong>ETH</strong> <span class="tape-up" data-change="eth">—</span></span>
      <span class="tape-item"><strong>SOL</strong> <span class="tape-down" data-change="sol">—</span></span>
      <span class="tape-item"><strong>XRP</strong> <span class="tape-up" data-change="xrp">—</span></span>
      <span class="tape-item"><strong>スプレッド</strong> 0.1から</span>
      <span class="tape-item"><strong>速度</strong> 40ms未満</span>
      <span class="tape-item"><strong>市場</strong> 24時間</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> AI搭載の取引プラットフォーム</div>
        <h1>暗号資産とその他市場を取引。<br><span class="text-accent"><?= e(SITE_NAME) ?> で始める</span></h1>
        <p class="lead">
          暗号資産とマルチアセット取引のためのシンプルなプラットフォーム — 強固なセキュリティ、明確な料金、役立つAIインサイト、わかりやすい画面。
        </p>
        <div class="hero-badges" aria-label="プラットフォームの特長">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            暗号化された接続（SSL）
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            カスタマーサポート 24時間対応
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            迅速な注文執行
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">今すぐ始める — 最低入金 <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>口座を作成</span>
          <span class="live-pill">安全</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = '2分以内に登録';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">ライブ市場</p>
        <h2>価格をリアルタイムで確認。準備ができたら始められます。</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          ビットコイン、イーサリアムなどの主要ペアを明快な市場パネルで追い、口座を開いて最初の取引を出せます。
        </p>
        <a href="sign.php" class="btn btn-primary">市場アクセスを開く</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="ライブ市場価格">
        <div class="exchange-panel-header">
          <span>市場</span>
          <span class="live-dot">ライブ</span>
        </div>
        <div class="ticker-list" data-ticker-list>
          <div class="ticker-row">
            <div><div class="ticker-symbol">BTC</div><div class="ticker-pair">BTC/USD</div></div>
            <div class="ticker-price" data-price="btc">—</div>
            <div class="ticker-change up" data-change="btc">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">ETH</div><div class="ticker-pair">ETH/USD</div></div>
            <div class="ticker-price" data-price="eth">—</div>
            <div class="ticker-change up" data-change="eth">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">SOL</div><div class="ticker-pair">SOL/USD</div></div>
            <div class="ticker-price" data-price="sol">—</div>
            <div class="ticker-change down" data-change="sol">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">XRP</div><div class="ticker-pair">XRP/USD</div></div>
            <div class="ticker-price" data-price="xrp">—</div>
            <div class="ticker-change up" data-change="xrp">—</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="platform-section" id="platform" aria-label="取引プラットフォームのプレビュー">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Platform</p>
        <h2>明快なチャート。<br>すぐに取引できる。</h2>
        <p class="lead">
          ライブチャート、損益、ワンタップ注文のモバイル向け画面 — 初回ログインからわかりやすい。
        </p>
        <ul class="platform-points">
          <li>ライブチャートと市場価格</li>
          <li>ポートフォリオ残高を一目で</li>
          <li>二要素認証付きの安全な口座パネル</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">プラットフォームを開く</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Features</p>
        <h2><?= e(SITE_NAME) ?> で得られるもの</h2>
        <p class="lead">セキュリティ、スピード、明快なツール — 画面は混みません。</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>強固な口座セキュリティ</h3>
            <p>SSL暗号化、二要素ログイン、保護された資金フローが、資金とデータを守ります。</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>AI市場インサイト</h3>
            <p>タイミングとトレンドを示す役立つシグナル — 価格が速く動くときに有用です。</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>必要なときの自動化</h3>
            <p>任意の取引ボットがルールに沿って24時間稼働します — コントロールはお客様のままです。</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>複数市場を一箇所で</h3>
            <p>暗号資産、外国為替、株式、コモディティを、ひとつのシンプルなプラットフォームで。</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>迅速な注文処理</h3>
            <p>市場が混雑していても、確実な注文発注のために作られています。</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>シンプルで明快なレイアウト</h3>
            <p>視覚ノイズを減らし、チャートと次の注文のための余白を確保します。</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">始め方</p>
        <h2>最初の取引までの5ステップ</h2>
        <p class="lead">登録からライブ市場までの明確な道筋。</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>口座を開設</h3>
            <p>情報を送信すると、プラットフォームへ安全にアクセスできます。</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>メールを確認</h3>
            <p>アドレスを確認すると、取引環境のすべてが利用できます。</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>入金する</h3>
            <p>カード、銀行振込、または電子ウォレットで <?= MIN_DEPOSIT ?> <?= CURRENCY ?> からご入金ください。</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>取引方法を選ぶ</h3>
            <p>手動で取引するか、ご自身で設定した明確な上限付きのAI支援ツールを使います。</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>ライブで取引</h3>
            <p>チャート、ツール、必要なときの24時間サポートをご利用ください。</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">今すぐ始める</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">お支払い</p>
      <h2 style="margin-bottom: 0.75rem;">使い慣れた方法で入金</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">カード、ウォレット、銀行振込 — エンドツーエンドで暗号化。</p>
      <?php
      $payment_context = '口座への入金';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">インフラ</p>
        <h2>インフラパートナー</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Reviews</p>
        <h2>トレーダーの声</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">登録は早く、手数料は明確で、サポートも返答がありました。続けられるプラットフォームだと感じます。</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">個人トレーダー</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">アプリを渡り歩いたあとここで暗号資産を試しました — 設定は明快で、チャート配置もようやくわかります。</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">暗号資産トレーダー</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">注文は確実に通り、条件は平易な言葉で、チームも製品を理解しています。堅実なプラットフォームです。</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">デジタル資産トレーダー</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">初心者には派手さより明快さが必要でした。登録、手数料、困ったときの助け — それで十分でした。</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">個人投資家</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>入金の前に</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            始め方を教えてください。
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              口座を開設し、簡単な確認を済ませ、<?= MIN_DEPOSIT ?> <?= CURRENCY ?> からご入金ください。チャート、ツール、案内付きオンボーディングが利用できます。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            資金とデータはどう守られますか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              SSL暗号化、二要素認証、厳格なデータ方針のもと信頼できる決済事業者を使用しています。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            出金にはどのくらいかかりますか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              ダッシュボードからいつでも出金を申請できます。多くの方法は1〜3営業日で、手数料は事前表示です。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            事前の取引経験は必要ですか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              不要です。案内付きの手順とAI支援ツールで自分のペースで学べ、24時間サポートも利用できます。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            どの市場が利用できますか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              暗号資産、外国為替、世界の株式、コモディティ — 手動でも自動でも — ひとつの画面から。
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">概要</p>
        <h2>プラットフォーム一覧</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AIツール</div>
          <div class="specs-value">機械学習インサイトによる市場分析</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">入金</div>
          <div class="specs-value">カード、銀行振込、PayPal、電子ウォレット</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">デバイス</div>
          <div class="specs-value">Web、タブレット、モバイル — 完全レスポンシブ</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">AIシグナル品質</div>
          <div class="specs-value">対応戦略で最大85%*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Markets</div>
          <div class="specs-value">暗号資産、外国為替、株式、コモディティ</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">始め方</div>
          <div class="specs-value">案内付き確認で迅速な設定</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Support</div>
          <div class="specs-value">24時間サポート — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">お問い合わせ</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">評価</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> スコア</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong>件のレビュー · 評価数 <strong>1,842</strong>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>より明快な取引の仕方はいかがですか？</h2>
        <p class="lead">ライブ市場、明確な手数料、使いやすいプラットフォームを求めるトレーダーに加わりましょう。</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>口座を開設</span>
          <span class="live-pill">無料</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = '無料口座を開設';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
