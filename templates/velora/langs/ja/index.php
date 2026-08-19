<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('グローバル市場向けプレミアムAIトレーディングエンジン');
$page_description = SITE_NAME . ' — 暗号資産、外国為替、株式向けの構造化されたAIツールで、よりスマートかつ洗練された方法でグローバル市場にアクセスできます。';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-section" id="signup">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content">
          <h1><?= e(SITE_NAME) ?>: よりスマートで洗練された方法でアクセスする <span class="text-accent">グローバル市場</span></h1>

          <p class="hero-desc">
            取引は初めてですか？ <?= e(SITE_NAME) ?> は、透明性を保ちながら進められるよう設計された、構造化されたAI支援ツールを提供します。
            技術的な混乱なく、暗号資産、外国為替、株式を探索できます。
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">取引を始める — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">機能を見る</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              SSLプロトコルで保護されています
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              初心者向けの案内付きパス
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">アカウントを作成</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = '所要時間は3分未満です。初期費用はかかりません。';
            $form_submit = '無料アカウントを作成';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="stats-bar">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M3 3v18h18"/>
              <path d="m18.7 8-5.1 5.2-2.8-2.7L7 14.3"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">80+</div>
            <div class="stat-label">取引可能資産</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">高速</div>
            <div class="stat-label">アカウント設定</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">24/7</div>
            <div class="stat-label">サポート</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">安全</div>
            <div class="stat-label">データ処理</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">スマートワークスペース</div>

          <h2 class="section-title">
            プロフェッショナルなチャート。<br>
            <span class="text-accent">シンプルな判断のために設計されています。</span>
          </h2>

          <p class="section-subtitle">
            認知負荷と感情的な取引を減らすために設計された、すっきりしたインターフェースからライブ価格を確認し、行動できます。
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              リアルタイムのAI強化チャート
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              ワンタップのマーケット執行システム
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">プラットフォームの機能を見る</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">即時執行が可能です</h4>
                <p>
                  この注文を直ちにルーティングし、現在の価格水準を捉えるには、安全な <?= e(SITE_NAME) ?> ターミナルを有効化してください。
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  セキュアアカウントを作成
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">BTC / USD ダッシュボード</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                LIVE
              </span>
            </div>

            <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>

            <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
              +0.15% 本日
            </div>

            <div class="mockup-chart mockup-chart-placeholder" id="mockupChart">
              <div class="chart-track" id="mockupChartTrack">
                <div class="chart-bar" style="height: 60%;"></div>
                <div class="chart-bar" style="height: 55%;"></div>
                <div class="chart-bar" style="height: 65%;"></div>
                <div class="chart-bar" style="height: 70%;"></div>
                <div class="chart-bar" style="height: 85%;"></div>
                <div class="chart-bar" style="height: 80%;"></div>
                <div class="chart-bar" style="height: 75%;"></div>
              </div>
            </div>

            <div class="mockup-actions">
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">売却</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">購入</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">プラットフォーム機能</div>
        <h2 class="section-title">自信を持って取引するために必要なすべてが <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">セキュリティ、速度、ニューラル市場インテリジェンスを、わかりやすい形で組み合わせています</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>銀行水準のセキュリティ</h3>
          <p>SSL暗号化、安全なデータ処理、そして完全に保護されたアカウントアーキテクチャ。</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4"/>
              <path d="M12 8h.01"/>
            </svg>
          </div>
          <h3>AI市場分析</h3>
          <p>顕著な市場の変化を捉えることに焦点を当てた、リアルタイムの機械学習計算です。</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>低遅延フィード</h3>
          <p>活発な時間帯でも迅速な注文処理に焦点を当てた、機敏なインフラストラクチャです。</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">リアルタイム資産</div>
          <h2 class="section-title">統合 <?= e(SITE_NAME) ?> ダッシュボードでグローバル指標を把握</h2>
          <p class="section-subtitle">
            資産の動きをリアルタイムで追跡し、モメンタムを監視し、自動AI分析でパターンをすばやく把握できます。
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>運用効率:</strong>
              従来の取引では、数百の指標を手動で監視する必要がありました。
              <?= e(SITE_NAME) ?> のアルゴリズムは、毎ミリ秒数千の価格変動を処理し、
              明確な数理モデルを生成するため、動きをいち早く捉えることができます。
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">市場にアクセス</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>資産</span>
              <span style="text-align:right; padding-right:16px;">価格</span>
              <span style="text-align:right;">24時間変動</span>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">BTC</span>
                <span class="asset-fullname">Bitcoin</span>
              </div>
              <div class="asset-price" id="t-btc-p">$67,420.50</div>
              <div class="asset-change trend-up" id="t-btc-c">+0.15%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">ETH</span>
                <span class="asset-fullname">Ethereum</span>
              </div>
              <div class="asset-price" id="t-eth-p">$3,450.25</div>
              <div class="asset-change trend-up" id="t-eth-c">+2.10%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">SOL</span>
                <span class="asset-fullname">Solana</span>
              </div>
              <div class="asset-price" id="t-sol-p">$184.80</div>
              <div class="asset-change trend-down" id="t-sol-c">-0.65%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">BNB</span>
                <span class="asset-fullname">BNB Chain</span>
              </div>
              <div class="asset-price" id="t-bnb-p">$582.40</div>
              <div class="asset-change trend-up" id="t-bnb-c">+1.05%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">XRP</span>
                <span class="asset-fullname">Ripple</span>
              </div>
              <div class="asset-price" id="t-xrp-p">$0.5920</div>
              <div class="asset-change trend-down" id="t-xrp-c">-1.42%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">ADA</span>
                <span class="asset-fullname">Cardano</span>
              </div>
              <div class="asset-price" id="t-ada-p">$0.4850</div>
              <div class="asset-change trend-up" id="t-ada-c">+0.88%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">DOT</span>
                <span class="asset-fullname">Polkadot</span>
              </div>
              <div class="asset-price" id="t-dot-p">$6.75</div>
              <div class="asset-change trend-down" id="t-dot-c">-0.12%</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="onboarding">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">オンボーディングの流れ</div>
        <h2 class="section-title"><?= e(SITE_NAME) ?> なら、始め方がストレスフリーです</h2>
        <p class="section-subtitle">暗号資産の経験がなくても大丈夫です。自動ガイドがすべてのステップをご案内します。</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>安全な登録</h3>
            <p>高度に暗号化されたフォームで、基本的な連絡先情報をご入力ください。</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>AIガイド付き設定</h3>
            <p>プラットフォームが、ご希望に合わせたインターフェースオプションをご提示します。</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>安全な入金</h3>
            <p>標準的で信頼性の高い決済手段で、取引可能範囲を有効化できます。</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>シグナルを展開</h3>
            <p>ライブのニューラルデータフィードを使って、グローバル市場とのやり取りを始められます。</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="mobile-app">
    <div class="container">
      <div class="app-promo-grid">
        <div class="app-promo-visual">
          <div class="app-glow"></div>
          <?php
          $as_phone = true;
          require __DIR__ . '/includes/platform-image.php';
          ?>
        </div>

        <div>
          <div class="section-label">モバイルアクセス</div>
          <h2 class="section-title">ポートフォリオを、ポケットの中に</h2>
          <p class="section-subtitle">
            フルスペックの <?= e(SITE_NAME) ?> エンジンを、ネイティブのような高速モバイル体験に凝縮しています。
            どこからでも資産を追跡し、取引を執行し、AIシグナルを確認できます。
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              重要な価格変動のプッシュ通知
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              暗号化ローカルストレージによる生体認証ログイン
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              タッチ操作用に最適化されたフルチャートスイート
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">アプリ体験を始める</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">バランスの取れた枠組み</div>
        <h2 class="section-title">透明性のある運用パラメータ</h2>
        <p class="section-subtitle">
          私たちは徹底した誠実さを信条としています。当社のシステムが際立つ点と、業界でよく見られる限界をご説明します。
        </p>
      </div>

      <div class="comparison-grid">
        <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>主な特長</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              機関投資家水準の執行速度に合わせて調整された、ミニマルなダッシュボード。
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              資産横断で24時間365日稼働するニューラル分析。
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              隠れた取引マージンや予期せぬ管理手数料は一切ありません。
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              直接的なSSL暗号アカウントアーキテクチャ。
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              数日ではなく数分で完了する案内付きの導入。
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">他のプラットフォーム</div>
          <h3>業界に多い制約</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              広告が多く煩雑なダッシュボードで、判断が遅れます。
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              継続的なライブ分析ではなく、静的な終日レポートです。
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              隠れたスプレッド、出金手数料、不明瞭な料金体系。
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              データ保護が不均一な、共有の旧式インフラストラクチャ。
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              書類が多く、数日かかることもある遅い本人確認。
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        比較はリテール取引でよく見られる傾向を示すものであり、例示です。競合の提供内容は異なります。
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">コアプラットフォーム機能の一覧</h2>
        <p class="section-subtitle">アカウントアクセスの枠組みに組み込まれた機能パラメータをご確認ください。</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>機能</th>
              <th>機能の詳細</th>
              <th class="cap-table-center">含まれる</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>AIトレーディングフレームワーク</strong></td>
              <td>動的なマクロ構造計算を提供するアルゴリズム処理です。</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="含まれる">✓</span></td>
            </tr>
            <tr>
              <td><strong>集約フィード</strong></td>
              <td>現代のグローバル指数およびトークン向けの、リアルタイム統合チャートです。</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="含まれる">✓</span></td>
            </tr>
            <tr>
              <td><strong>クロスプラットフォームの安定性</strong></td>
              <td>モバイル、デスクトップ、タブレットで完全にレスポンシブに描画されます。</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="含まれる">✓</span></td>
            </tr>
            <tr>
              <td><strong>マルチ資産カバレッジ</strong></td>
              <td>1つのアカウント層から、暗号資産、外国為替、株式指数へ統合アクセスできます。</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="含まれる">✓</span></td>
            </tr>
            <tr>
              <td><strong>自動リスクアラート</strong></td>
              <td>ポジションに影響する前に異常なボラティリティを知らせる、設定可能な通知です。</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="含まれる">✓</span></td>
            </tr>
            <tr>
              <td><strong>暗号化データボールト</strong></td>
              <td>個人情報およびアカウントデータは、多層の暗号アクセス制御の内側に隔離されます。</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="含まれる">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>24時間365日の人的サポート</strong></td>
              <td>設定に関するご質問にすぐお答えできる、ライブのテクニカルオペレーターが待機しています。</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="含まれる">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">入金</div>
      <h2 class="section-title">すでにご存知の方法で口座に入金できます</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        カード、電子ウォレット、銀行振込 — すべて256ビットSSL暗号化で保護されています。
      </p>

      <ul class="payment-icons-list" role="list" aria-label="ご利用いただける入金・資金調達方法">
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <rect x="2" y="5" width="20" height="14" rx="2.5"/>
            <path d="M2 10h20"/>
          </svg>
          <span>Visa</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <circle cx="9" cy="12" r="6"/>
            <circle cx="15" cy="12" r="6"/>
          </svg>
          <span>Mastercard</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M6 3h9a5 5 0 0 1 0 10H9l-1 8H4z"/>
          </svg>
          <span>PayPal</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2a5 5 0 0 0-5 5v3H5a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-2V7a5 5 0 0 0-5-5z"/>
          </svg>
          <span>Apple Pay</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 8v8M8 12h8"/>
          </svg>
          <span>Google Pay</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <rect x="3" y="10" width="18" height="9" rx="1"/>
            <path d="M3 10 12 4l9 6"/>
            <path d="M7 10v9M12 10v9M17 10v9"/>
          </svg>
          <span>銀行振込</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>SSL保護</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">信頼性の高いインフラ</div>
        <h2 class="section-title">業界水準のパートナーとともに構築</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">ユーザーの声</div>
        <h2 class="section-title">トレーダーの声 — <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">グローバルなマルチマーケットコミュニティからの率直なフィードバックです。</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5つ星中5つ">★★★★★</div>
            <p class="review-text">
              初心者だった私は、暗号資産に戸惑いました。 <?= e(SITE_NAME) ?> のダッシュボードはとても直感的で、数分で自信が持てました。AI分析は非常に明快です。
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>認証済みリテールオペレーター · 英国</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5つ星中5つ">★★★★★</div>
            <p class="review-text">
              すっきりしたインターフェースのおかげで、何時間も節約できています。市場ノイズを主要なトレンドまで絞り込むAIにより、日々のポジション管理の仕方が変わりました。
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>暗号資産アナリスト · カナダ</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5つ星中5つ">★★★★★</div>
            <p class="review-text">
              低遅延の執行とスマートアラートのおかげで、複数のプログラムを起動せずに、その場で目標を調整できます。
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>プライベートポートフォリオマネージャー · ドイツ</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5つ星中5つ">★★★★★</div>
            <p class="review-text">
              本人確認の設定中に、サポートが2分で返信してくれました。機関投資家水準の卓越したサービス体制です。
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>アルゴリズムトレーダー · フランス</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="seo-content">
        <h2 style="font-size: 38px; margin-bottom: 28px; font-weight: 800;">
          <?= e(SITE_NAME) ?>: 機関投資家水準のAIアーキテクチャでトレーダーを支援します
        </h2>

        <p class="seo-intro">
          現代の資産とのやり取りには、絶対的な明快さが求められます。データ枠組みが宣伝バナーで煩雑になったり、
          重いインターフェース層で覆われたりすると、ユーザーのパフォーマンスは低下します。 <?= e(SITE_NAME) ?> は、次のような環境を展開することで構造的な複雑さを解消します。
          長期的な戦略的執行に最適化された、洗練されたレスポンシブなコア環境です。すべてのプラットフォームモジュールは、
          オンボーディングからライブ執行まで、同じ原則で構築されています。ノイズを取り除き、基盤となるデータが
          自ら語れるようにします — 経験豊富な参加者が期待する深みを損なうことなく。
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>高度な <span>暗号資産トレーディング資産</span></h3>
            <p>
              ブロックチェーンの流動性は急速に変化するため、低遅延インフラが不可欠です。
              <?= e(SITE_NAME) ?> は、独自ノードを主要なデジタル資産取引会場に接続し、ライブ価格のフィードバックループを提供します。
              明快な視覚指標が、混沌としたマルチチェーン構造を整理された読みやすいデータチャネルに変えます。
            </p>
            <p>
              生の価格フィードを超えて、プラットフォームは出来高の変化と流動性の深さを文脈化するため、急なスパイクも
              解釈しやすくなります — 単なる反応的なシグナルではありません。その一貫性が最も重要なのは、変動の激しいセッションで、
              断片化されたツールが、まさに明快さが最も必要なときに判断を遅らせる場合です。
            </p>
          </div>

          <div class="seo-block">
            <h3>深層の <span>ニューラル市場分析</span></h3>
            <p>
              自動化されたアルゴリズムが、受信した市場データを分析し、外国為替および国際商品にわたる構造的な変化を計算します。
              <?= e(SITE_NAME) ?> は、複雑な計算を、判断を置き換えるのではなく独立した判断を支える、明快なデータトレンドに凝縮します。
            </p>
            <p>
              モデルは固定スケジュールではなく継続的に稼働するため、モメンタムの変化は発生した時点で現れます。
              遅延した要約ではありません。その結果、独立した判断を支えるリサーチ層となり、
              最終決定はユーザーの手元に残します。
            </p>
          </div>

          <div class="seo-block">
            <h3>摩擦のない <span>アカウント設定</span></h3>
            <p>
              コンプライアンスは複雑である必要はありません。構造化された登録パイプラインが、非公開の設定を
              開始からターミナルアクセスまで3分未満で完了するよう設計された、安全な本人確認プロセスで保護します。
            </p>
            <p>
              手続きの各項目には、なぜ尋ねるのかが説明されているため、初心者が
              本人確認ステップの目的を推測する必要はありません。送信後、暗号化された本人確認はバックグラウンドで実行され、残りの
              ダッシュボードは引き続きすべて閲覧できます。
            </p>
          </div>

          <div class="seo-block">
            <h3>機関投資家品質の <span>リスク管理</span></h3>
            <p>
              ポジションサイズ、エクスポージャー上限、自動ボラティリティ指標が、従来はプロのデスクで使われていたツールを
              シンプルなトグルに凝縮します — そのため、新しい参加者も経験豊富なトレーダーの日々の規律を引き継げます。
            </p>
            <p>
              アラートは資産ごとに設定できるため、本当に注意が必要な市場にだけ意識が向きます。
              この集中的なアプローチは、人々が通知を無視する原因になりがちなアラート疲れを防ぐのに役立ちます。
              選別の甘いプラットフォームでは特にそうです。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="faq">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">サポートセンター</div>
        <h2 class="section-title">よくある質問</h2>
        <p class="section-subtitle">登録とプラットフォームアクセスに関する、すぐに使える手続き上の回答です。</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span>どうすれば <?= e(SITE_NAME) ?>?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              上の登録フォームにご記入のうえ、安全なステップバイステップのオンボーディングに従い、
              構造化された決済処理システムでアカウント設定を有効化してください。
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>高度な暗号資産の経験は必要ですか？</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              いいえ。 <?= e(SITE_NAME) ?> は、初心者向けダッシュボードモード、自動の分析解説、
              新しいトレーダーが安全に操作できるよう、簡素化されたワークスペースを提供します。
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>取引の最低条件は何ですか？</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              標準の基本有効化額は <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              です。これは運用上の取引資本となり、お客様の手動管理下に置かれます。
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>隠れた運用手数料はありますか？</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              いいえ。 <?= e(SITE_NAME) ?> は、料金の透明性を徹底しています。
              予期せぬプラットフォーム利用マージンや、隠れた出金計算は適用しません。
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>AIインテリジェンスの仕組みはどのようなものですか？</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              ニューラルシステムが、複数の市場層にわたる深い統計的ボラティリティ指標を評価し、
              生のテレメトリを、より評価しやすい簡略化されたトレンドラインに変換します。
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>個人データは完全に保護されていますか？</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              はい。すべてのアカウントパイプラインは、安全なSSL保護と堅牢な暗号プロトコルでマスクされ、
              非公開データ範囲を完全に隔離します。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="final-cta" style="background-color:#0F172A;">
    <div class="container">
      <div class="final-cta-grid">
        <div class="final-cta-content">
          <h2>さあ、 <?= e(SITE_NAME) ?> の明快さを体験する準備はできましたか？</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            迅速な運用、データ保護、透明性のあるアクセスに最適化された、現代的なシステムにご参加ください。
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">アカウントを作成</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = '無料アカウントを作成';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
