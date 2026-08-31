<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('AI搭載の取引プラットフォーム');
$page_description = '暗号資産、外国為替、世界市場を ' . SITE_NAME . ' で。リアルタイム分析、AI支援シグナル、スピードと明瞭さのために設計されたプラットフォームです。';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <!-- Hero -->
  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-content">
        <p class="eyebrow">AI取引プラットフォーム</p>
        <h1>よりスマートに取引。<br><span class="text-accent">より速く動く。</span></h1>
        <p class="lead">
          暗号資産とマルチマーケット取引の新たな基準。高度なセキュリティ、透明な手数料、AIによるインサイト、邪魔にならないインターフェース。
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL保護
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            24時間サポート
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            高速執行
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">取引を開始 — <?= MIN_DEPOSIT ?> <?= CURRENCY ?>から</a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = '2分で口座開設';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="プラットフォームの統計">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">取扱通貨</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">認証済みユーザー</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">取引高</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">対応国数</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="取引プラットフォームのプレビュー">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">取引プラットフォーム</p>
        <h2>プロ仕様のチャート。<br>モバイル対応。</h2>
        <p class="lead">
          現代の取引所のような明快な画面 — ライブBTC/USDTデータ、ポートフォリオ追跡、ワンタップ執行。初回ログインから自信を持てる設計です。
        </p>
        <ul class="platform-points">
          <li>リアルタイムのローソク足チャート</li>
          <li>ポートフォリオと損益を一目で</li>
          <li>安全な口座ダッシュボード</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">プラットフォームを試す</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow"><?= e(SITE_NAME) ?>が選ばれる理由</p>
        <h2>自信を持って取引するために必要なすべて</h2>
        <p class="lead">セキュリティ、スピード、インテリジェンスを、現代のトレーダー向けの明快なプラットフォームに統合しました。</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>銀行水準のセキュリティ</h3>
          <p>SSL暗号化、二要素認証、安全な資金管理が、あらゆる段階でデータと資本を守ります。</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI市場シグナル</h3>
          <p>正確なリアルタイムのインサイトが、チャンスを見極め、より迅速で的確な判断を支えます。</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>自動取引</h3>
          <p>AIボットが昼夜を問わず戦略を効率よく執行します。最終的な判断は常にお客様にあります。</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>マルチマーケット対応</h3>
          <p>暗号資産、外国為替、株式、コモディティを、ひとつの環境で取引できます。</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>低遅延の執行</h3>
          <p>最適化されたインフラが、市場が混雑していても安定した注文執行を実現します。</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>明快なインターフェース</h3>
          <p>ノイズを抑えたミニマルなデザインで、操作ではなく戦略に集中できます。</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ライブ市場 -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">ライブ市場</p>
        <h2>ビットコイン、イーサリアムなどを取引</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          リアルタイム価格、高度なインジケーター、注目市場のプロ仕様ビュー。
        </p>
        <a href="sign.php" class="btn btn-primary">市場にアクセス</a>
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

  <!-- 仕組み -->
  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">始め方</p>
        <h2>登録から最初の取引まで、数分で</h2>
        <p class="lead">迷わない案内付きの手順です。複雑さも当て推量もありません。</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>口座を作成</h3>
          <p>必要事項でご登録いただくと、すぐに安全にプラットフォームへアクセスできます。</p>
        </article>
        <article class="step-card">
          <h3>メールアドレスを確認</h3>
          <p>アドレスを確認すると、取引環境のすべてが利用できます。</p>
        </article>
        <article class="step-card">
          <h3>口座に入金</h3>
          <p>銀行振込、カード、または電子ウォレットで、最低 <?= MIN_DEPOSIT ?> <?= CURRENCY ?> をご入金ください。</p>
        </article>
        <article class="step-card">
          <h3>戦略を設定</h3>
          <p>リスク水準と好みを設定 — 手動でも、AI自動化に執行を任せても構いません。</p>
        </article>
        <article class="step-card">
          <h3>取引を開始</h3>
          <p>ライブチャート、ツール、必要なときのサポートとともに市場へ。</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">今すぐ口座を開設</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">入金</p>
      <h2 style="margin-bottom: 0.75rem;">使い慣れた方法で入金</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">カード、電子ウォレット、銀行振込 — SSL暗号化で保護されています。</p>
      <?php
      $payment_context = '口座への入金';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">信頼のインフラ</p>
        <h2>業界標準のパートナー基盤</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Reviews</p>
        <h2>トレーダーの声</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">登録は数分、手数料は明確で、サポートも実際に返事が来ます。安定して使いやすく、続けたいプラットフォームです。</p>
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
          <p class="review-text">ここで暗号資産取引を始めて後悔はありません。設定は早く、説明も明快。特にこれから始める方に向いています。</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">暗号資産愛好家</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">安定して信頼できます。口座開設は簡単、条件は明確、チームも詳しい。驚くほど快適な取引体験でした。</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">デジタル資産オペレーター</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">取引が重荷に感じなくなりました。簡単な登録、明確な手数料、必要なときのサポート。初心者にはそれが決定的です。</p>
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

  <!-- FAQ -->
  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>よくある質問</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            始め方を教えてください。
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              基本情報で口座を開設し、簡単な確認を済ませ、最低 <?= MIN_DEPOSIT ?> <?= CURRENCY ?> をご入金ください。ライブチャート、取引ツール、案内付きオンボーディングが利用できます。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            資金とデータは安全ですか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              SSL暗号化、二要素認証、信頼できる事業者による安全な処理を用いています。個人データはあらゆる層で厳格なセキュリティ方針のもと扱われます。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            利益の出金はいつできますか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              ダッシュボードからいつでも出金を申請できます。処理は通常1〜3営業日です。手数料と所要時間は事前に表示されます。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            取引経験は必要ですか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              不要です。案内付きの始め方、わかりやすいチュートリアル、AI支援ツールで自分のペースで学べます。初心者でも経験者でも、サポートは24時間利用できます。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            どの市場を取引できますか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              暗号資産、外国為替、世界の株式、コモディティにひとつの画面からアクセス。リアルタイムデータ、統合分析、手動・自動の両方の戦略に対応します。
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Platform specs -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Platform</p>
        <h2>主な機能一覧</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI取引エンジン</div>
          <div class="specs-value">機械学習による高度な市場分析</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">入金方法</div>
          <div class="specs-value">クレジットカード、銀行振込、PayPal、電子ウォレット</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">対応デバイス</div>
          <div class="specs-value">Web、タブレット、モバイル — 完全レスポンシブ</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">シグナル精度</div>
          <div class="specs-value">対応するAI戦略で最大85%</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Markets</div>
          <div class="specs-value">暗号資産、外国為替、株式、コモディティ</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">始め方</div>
          <div class="specs-value">案内付き確認で迅速な口座開設</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Support</div>
          <div class="specs-value">24時間の専門サポート — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">お問い合わせ</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">信頼</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> のレビュー</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong>件のレビュー · 評価数 <strong>1,842</strong>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>明快さのために作られたプラットフォームで取引を始めますか？</h2>
        <p class="lead">デジタル資産を自信を持って売買・管理する個人トレーダーと企業に加わりましょう。</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = '無料口座を開設';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
