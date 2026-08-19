<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('AIとリアルタイム執行 | 公式サイト');
$page_description = SITE_NAME . ' — 市場を分析し、リアルタイムで注文を執行するAI技術です。専任アナリストがお客様に寄り添い、新しい収入源の構築を支援します。';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">コンテンツへスキップ</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="メイン">
 <a href="#platform">製品</a>
 <a href="#how">仕組み。</a>
 <a href="#markets">リアルタイム市場</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">口座を開設</a>
 <button class="nav-toggle" aria-label="メニューを開く" aria-expanded="false" aria-controls="navLinks" type="button">
 <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
 </button>
 </div>
 </div>
</header>

<main id="top">

<!-- HERO — left: copy + trust chips + CTA · right: lead form (same layout as the reference) -->
<section class="hero" id="hero" aria-labelledby="hero-title">
 <div class="shell hero-grid">
 <div>
 <span class="eyebrow">リアルタイムAI + 人間による分析</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span> — 今すぐ投資して、資本の成長をご確認ください</h1>
 <p class="hero-sub">人工知能エンジンが市場をスキャンし、1秒未満で注文を執行します。一方、専任アナリストがお客様のプロファイルに合わせて各判断を調整します。経験は不要です — 最初から最後までご案内します。</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>規制対象</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>分別管理</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9,600名のお客様</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> 評価</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>SSL保護</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>24時間365日サポート</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>高速執行</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">今すぐ始める — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> から</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">口座を開設</h2>
 <p class="sub">数分で始められます。</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = '今すぐ始める';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="主要指標">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>アクティブユーザー</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>取引高</span></div>
 <div class="stat"><b>99,1%</b><span>シグナル稼働率</span></div>
 <div class="stat"><b>24/7</b><span>サポート</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">内部： <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">口座をリアルタイムで確認</h2>
 <p class="lede">アナリストが執行したすべての注文がここに記録されます — 各通貨ペアのエントリー、エグジット、検証済みの結果がライブで配信されます。</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>どの端末でもリアルタイムのローソク足チャートと板情報</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>ワンタップの注文送信と即時確認</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>お客様に追従するウォッチリストと価格アラート</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">今すぐ始める</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — リアルタイムの暗号資産チャートによるモバイル取引</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">プラットフォーム</span><h2 id="features-title">必要なものがすべて、ひとつの高速プラットフォームに。</h2><p class="lede">監視すべきチャートも、タイミングを計る注文もありません。<?= e(SITE_NAME) ?> のエンジンは、暗号資産取引所、グローバル株式API、主要外国為替ペアのリアルタイム板情報を監視し、モデルが有利な局面を見つけた瞬間に注文を出します。</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>接続されたすべての市場で1秒未満の執行</h3><p><?= e(SITE_NAME) ?> は、対応する各取引所と低遅延のAPI接続を維持しています。モデルがシグナルを出すと、次のティックの前に注文がルーティング、執行され、ダッシュボードに記録されます。</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>すべてのセッションで24時間稼働</h3><p>暗号資産市場は休むことがなく、<?= e(SITE_NAME) ?> のエンジンも同様です。週末や祝日もペアをスキャンし続け、機会を逃さないようにします。</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>多通貨レポート</h3><p>残高、注文、出金はすべて現地通貨で表示されます。隠れた換算ステップはありません。</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>分別管理された資本</h3><p>資金はお客様ご自身の口座に留まります。<?= e(SITE_NAME) ?> がカストディを持つことはありません — エンジンは注文のルーティングのみが許可されています。</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>銀行水準のセキュリティ</h3><p>プラットフォーム全体のTLS暗号化、標準の二要素認証、四半期ごとの第三者によるインフラ監査。取引レシートはブロックチェーンに記録されます。</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>3つの資産クラス、ひとつのプラットフォーム</h3><p>多くのリテール向けプラットフォームは単一市場に限定されています。<?= e(SITE_NAME) ?> は暗号資産、上場株式、主要外国為替ペアを同じダッシュボードで運用します。</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>すべてのポジションに事前設定されたリスク限度</h3><p>ストップロス、最大ドローダウン、資本配分限度は資産クラスごとに設定されます。エンジンは限度を超えた取引から自動的に撤退し、その事象は監査履歴に記録されます。</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">リアルタイム市場</span>
 <h2 id="markets-title">ビットコイン、イーサリアムなどを取引</h2>
 <p class="lede">リアルタイム価格、高度な指標、お客様に重要な市場のプロフェッショナルな視点。</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">市場へのアクセスを希望</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>市場</span><span class="mkt-live"><i></i>ライブ</span></div>
 <div class="mkt-list">
 <div class="mkt-row" data-sym="BTC"><div class="mkt-c"><b>BTC</b><span>BTC/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 64.671</b><span class="chg down">-1,06%</span></div></div>
 <div class="mkt-row" data-sym="ETH"><div class="mkt-c"><b>ETH</b><span>ETH/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1.881</b><span class="chg down">-2,55%</span></div></div>
 <div class="mkt-row" data-sym="SOL"><div class="mkt-c"><b>SOL</b><span>SOL/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 76,62</b><span class="chg down">-1,72%</span></div></div>
 <div class="mkt-row" data-sym="XRP"><div class="mkt-c"><b>XRP</b><span>XRP/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1,11</b><span class="chg down">-0,97%</span></div></div>
 </div>
 </div>
 </div>
</section>

<!-- HOW IT WORKS -->
<section class="sec" id="how" aria-labelledby="how-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">仕組み</span><h2 id="how-title">仕組み。</h2><p class="lede">最先端の技術と実際の人間のアナリストがリアルタイムで協働し、新しい収入源の構築を支援します — 各ステップでご案内します。</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>口座を作成</h3><p>メールアドレスだけで数分で登録できます。</p></div>
 <div class="step"><div class="n">2</div><h3>メールを確認</h3><p>口座を保護するため、アドレスをご確認ください。</p></div>
 <div class="step"><div class="n">3</div><h3>口座に入金</h3><p>次の金額からご入金ください <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> ご都合のよい方法で。</p></div>
 <div class="step"><div class="n">4</div><h3>戦略を設定</h3><p>目標をお選びください。アナリストがプランを個別に調整します。</p></div>
 <div class="step"><div class="n">5</div><h3>取引を開始</h3><p>案内付きシグナルに沿って、ご自身のペースで成長できます。</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">入金</span><h2 id="payment-title">使い慣れた方法で入金</h2><p class="lede">安全で使い慣れたチャネルで入出金できます — 隠れた手数料はありません。</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>銀行振込</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">メンバーの声</span><h2 id="reviews-title">投資家の声</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>「担当アナリストがすべてをわかりやすく説明してくれました。目標を一度設定しただけで、値動きのたびに不安になることなく、資本がどのように増えているかを正確に確認できています。」</p><div class="who"><div class="ini">佐</div><div><b>佐藤美咲</b><span>東京</span></div></div></div>
 <div class="card"><p>「これまでに投資をしたことがありませんでしたが、担当アナリストが戦略を立て、各ステップを説明してくれました。空約束もプレッシャーもなく、出金も予定どおり届きます。」</p><div class="who"><div class="ini">田</div><div><b>田中健太</b><span>大阪</span></div></div></div>
 <div class="card"><p>「少額から試してみました。透明性とサポートのおかげで、そこから続けて積み上げる自信が持てました。」</p><div class="who"><div class="ini">鈴</div><div><b>鈴木陽子</b><span>横浜</span></div></div></div>
 <div class="card"><p>「分析が届くので、数分で承認または調整します。仕事の邪魔にならず、日常にぴったり合っています。」</p><div class="who"><div class="ini">高</div><div><b>高橋翔</b><span>名古屋</span></div></div></div>
 <div class="card"><p>「心をつかまれたのは透明性です。すべての判断が説明され、何かが起こる前に理由を確認できます。」</p><div class="who"><div class="ini">伊</div><div><b>伊藤彩</b><span>福岡</span></div></div></div>
 <div class="card"><p>「サポートは本物で、いつでも連絡できます。最初の分析は実践的で、それ以来プラットフォームは安定して予測しやすいものでした。」</p><div class="who"><div class="ini">渡</div><div><b>渡辺大輔</b><span>京都</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">プラットフォーム</span><h2 id="capabilities-title">主な機能の概要</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">AIエンジン</div>
 <div class="spec-v">機械学習による高度な市場分析</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">入金方法</div>
 <div class="spec-v">クレジットカード、銀行振込、PayPal、デジタルウォレット</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">マルチプラットフォーム対応</div>
 <div class="spec-v">Web、タブレット、スマートフォン — 完全レスポンシブ</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">シグナル精度</div>
 <div class="spec-v">対応するAI戦略で最大85%</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">市場</div>
 <div class="spec-v">暗号資産、外国為替、株式、商品</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">登録</div>
 <div class="spec-v">案内付き確認による迅速な口座開設</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">サポート</div>
 <div class="spec-v">24時間対応の専門サポート — <a href="<?= page_url('contacts.php') ?>">メッセージを送る</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">ご質問</span><h2 id="faq-title">よくある質問。</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>最低入金額はいくらですか？</summary><p>最低入金額から口座を開設し、ご入金いただけます。プランの進行に合わせて、後から残高を追加できます。</p></details>
 <details><summary>出金はどのように行われますか？</summary><p>ダッシュボードからいつでも出金を申請できます。資金は標準の処理期間に従い、選択した支払い方法に戻ります。</p></details>
 <details><summary>資金は安全ですか？</summary><p>口座は業界標準のセキュリティと厳格な確認で保護されています。あらゆる投資と同様、資本にはリスクがあり、価値は上昇することも下落することもあります。</p></details>
 <details><summary>どのくらい早く始められますか？</summary><p>ほとんどのメンバーは数分で登録を完了します。初回入金が確認されると、すぐにプランが有効になります。</p></details>
 <details><summary>隠れた手数料はありますか？</summary><p>費用はご契約前に透明に表示されます。プランに適用される内容を常に正確に把握できます — 予期しない請求はありません。</p></details>
 <details><summary>登録の最低年齢は何歳ですか？</summary><p>口座開設と投資には18歳以上である必要があります。年齢と身元の確認が求められる場合があります。</p></details>
 <details><summary>どの支払い方法に対応していますか？</summary><p>デビットカード、クレジットカード、銀行振込、一部の電子ウォレット、暗号資産などの一般的な方法に対応しています。正確な選択肢は入金ステップに表示されます。</p></details>
 <details><summary>カスタマーサポートはいつ利用できますか？</summary><p>サポートチームは月曜日から金曜日の9時から18時まで対応し、各ご依頼に1営業日以内に回答するよう努めています。</p></details>
 <details><summary>税金はどのように扱われますか？</summary><p>投資益に対する税金はお住まいの国の規則により、お客様ご自身の責任です。記録を保管し、資格のある税務アドバイザーにご相談することをおすすめします。</p></details>
 <details><summary>KYCとは何ですか、なぜ必須なのですか？</summary><p>KYC（顧客確認）は標準的な身元確認です。口座の安全を保ち、投資口座開設の一部となっています。</p></details>
 <details><summary>経験は必要ですか？</summary><p>いいえ。すべてのメンバーに、各ステップを案内する専任の金融アナリストが付きますので、事前の市場知識は不要です。</p></details>
 <details><summary>投資は誰が管理しますか？</summary><p>AIツールに支えられた専任の金融アナリストが、お客様の目標とリスク水準に沿って対応します。アナリストは専門知識と技術を組み合わせます — 判断は人間が行います。</p></details>
 <details><summary>プラットフォームは規制されていますか？</summary><p>はい — 国内の金融およびサイバーセキュリティ基準に適合し、口座保護と厳格な確認が組み込まれています。</p></details>
 <details><summary>後から残高を追加できますか？</summary><p>はい。いつでも口座に資金を追加でき、目標の変化に合わせてアナリストとプランを調整できます。</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">信頼</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?>のレビュー</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b>件のレビュー · <b style="color:var(--text,#fff)">2.334</b>件の評価に基づく</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">今すぐ始める</span>
 <h2 id="signup-title" class="cta-h">口座を開設してください。</h2>
 <p class="lede">ご連絡先をお知らせください。専門スタッフが最初の一歩をサポートします。</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>口座を開設</h3>
 <p class="sub">数分で始められます。</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = '今すぐ始める';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

</main>

<!-- FOOTER -->
<footer class="foot">
 <div class="shell">
 <div class="foot-top">
 <div>
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <p>AIの速度、人間の判断。資本にはリスクがあります — 責任を持って投資してください。</p>
 </div>
 <div><h4>製品</h4><div class="foot-links">
 <a href="#platform">口座をリアルタイムで確認</a><a href="#markets">リアルタイム市場</a><a href="#how">仕組み。</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>会社情報</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">会社概要</a><a href="<?= page_url('offer.php') ?>">料金</a><a href="<?= page_url('contacts.php') ?>">お問い合わせ</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">プライバシーポリシー</a><a href="<?= page_url('conditions.php') ?>">利用規約</a><a href="<?= page_url('conditions.php') ?>">リスク開示</a><a href="<?= page_url('contacts.php') ?>">不正利用を報告</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. 無断転載を禁じます。 投資にはリスクが伴い、資本を失う可能性があります。 · 投資にはリスクが伴い、投資した資本の一部または全部を失う可能性があります。投資の価値は上昇することも下落することもあり、当初の投資額を下回る場合があります。失っても差し支えない資金以外は投資しないでください。</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('ja-JP',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+'円';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "しばらくお待ちください\u2026";
 var MSG_ERR = "ただいまお客様の情報を送信できませんでした。もう一度お試しください。";
 var THANKS = "/thanks/";
 function rand(){ return (Math.random().toString(36).substring(2,12)+Math.random().toString(36).substring(2,6)).replace(/[^a-z0-9]/g,'').substring(0,16); }
 // one-time spinner CSS for the submit button's processing state
 if (!document.getElementById('ldf-spin-css')) {
 var _st = document.createElement('style'); _st.id = 'ldf-spin-css';
 _st.textContent = '.ldf-spin{display:inline-block;width:1em;height:1em;margin-right:.5em;vertical-align:-.15em;border:2px solid currentColor;border-right-color:transparent;border-radius:50%;animation:ldfspin .6s linear infinite}@keyframes ldfspin{to{transform:rotate(360deg)}}';
 (document.head || document.documentElement).appendChild(_st);
 }
 var p = new URLSearchParams(location.search);
 // our click subid → hidden field → send.php click_id → iRev aff_sub3. Accept the
 // common tracker param names so whatever the traffic source appends is captured.
 var subid = p.get('subid') || p.get('sub_id') || p.get('clickid') || p.get('click_id')
 || p.get('cid') || p.get('utm_content')
 || (window.KTracking && KTracking.getSubId ? KTracking.getSubId() : '') || '';
 document.querySelectorAll('form[data-leadform]').forEach(function (form) {
 var tok = form.querySelector('.js-token');
 var tsf = form.querySelector('.js-ts');
 var loadTime = Date.now();
 if (tsf) tsf.value = String(loadTime);
 // Anti-bot: the js_token is written ONLY after a genuine human interaction with
 // the form (focus/key/pointer). A script that POSTs the form without ever
 // touching it never gets a token, and the edge worker rejects tokenless posts.
 var armed = false;
 function arm(){ if (armed) return; armed = true; if (tok && !tok.value) tok.value = rand(); }
 ['focusin','keydown','pointerdown','touchstart'].forEach(function (ev) {
 form.addEventListener(ev, arm, { once: true, passive: true });
 });
 var dom = form.querySelector('.js-domain'); if (dom && !dom.value) dom.value = location.hostname;
 var sub = form.querySelector('.js-subid'); if (sub && subid) sub.value = subid; // only if a URL subid; else t.js fills it
 var phone = form.querySelector('input[type=tel]');
 var sending = false;
 function lock(b){ if(!b) return; b.dataset.lbl = b.dataset.lbl || b.innerHTML; b.disabled = true; b.setAttribute('aria-busy','1'); b.style.opacity='.75'; b.style.cursor='progress'; b.innerHTML='<span class="ldf-spin" aria-hidden="true"></span>'+MSG_WAIT; }
 function unlock(b){ if(!b) return; b.disabled=false; b.removeAttribute('aria-busy'); b.style.opacity=''; b.style.cursor=''; if(b.dataset.lbl) b.innerHTML=b.dataset.lbl; }
 function err(msg){ var el=form.querySelector('[data-leaderr]'); if(!el){ el=document.createElement('p'); el.setAttribute('data-leaderr','1'); el.style.cssText='margin-top:.6rem;font-size:.85rem;line-height:1.35;color:#f87171;text-align:center'; form.appendChild(el);} el.textContent=msg; }
 form.addEventListener('submit', async function (e) {
 e.preventDefault();
 if (sending) return;
 sending = true;
 // stamp the client-measured dwell (ms since load) → the worker rejects
 // instant/near-instant submits that no human could produce.
 if (tsf) tsf.value = String(Date.now() - loadTime);
 var iti = (phone && window.intlTelInputGlobals) ? window.intlTelInputGlobals.getInstance(phone) : null;
 if (iti) {
 // separateDialCode expects a NATIONAL number in the field. If the user ALSO typed the
 // country code (e.g. 351961654221 with the +351 selector) it would double to
 // +351351…; when that makes the number invalid, re-parse the raw digits as a full
 // international number so the country code isn't added twice.
 try {
 var dc = (iti.getSelectedCountryData() || {}).dialCode || '';
 var raw = (phone.value || '').replace(/[^\d+]/g, '');
 if (raw && raw.charAt(0) !== '+' && dc && raw.indexOf(dc) === 0 && !iti.isValidNumber()) {
 iti.setNumber('+' + raw);
 }
 } catch (e3) {}
 try { phone.value = iti.getNumber() || phone.value; } catch (e4) {}
 var cc = form.querySelector('[name=country]'), d = iti.getSelectedCountryData();
 if (cc && d && d.iso2) cc.value = d.iso2.toUpperCase();
 }
 var btn = form.querySelector('button[type=submit]'); lock(btn);
 var prev = form.querySelector('[data-leaderr]'); if (prev) prev.textContent = '';
 try {
 var r = await fetch(form.action, { method: 'POST', body: new FormData(form), headers: { Accept: 'application/json' } });
 var data = await r.json().catch(function () { return {}; });
 var dest = data && data.redirect_url;
 if (dest === '/thanks/' || dest === '/thanks') dest = THANKS;
 if (dest) { location.href = dest; return; }
 if (data && data.success) { location.href = THANKS; return; }
 sending = false; unlock(btn);
 err((data && data.error) || MSG_ERR);
 } catch (e2) {
 sending = false; unlock(btn);
 err(MSG_ERR);
 }
 });
 });
})();
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css" media="print" onload="this.media='all'"><noscript></noscript>
<style>
.iti{width:100%}.iti input,.iti input[type=tel]{width:100%}
/* The dropdown has a white background but inherits the design's body text colour
 (light, for dark themes) → country names render white-on-white (invisible). Force
 a readable light dropdown that the design's CSS can't override. !important beats
 the inherited colour regardless of the design. */
.iti__country-list{background:#fff!important;color:#1b1b1b!important;border:1px solid #e5e7eb;
 box-shadow:0 8px 28px rgba(0,0,0,.18);max-height:230px}
.iti__country,.iti__country-name{color:#1b1b1b!important}
.iti__dial-code{color:#6b7280!important}
.iti__country.iti__highlight,.iti__country:hover{background:#eef2ff!important}
.iti__flag-box{margin-right:8px!important}
</style>
<script>
(function () {
 var phones = document.querySelectorAll('form[data-leadform] input[type=tel]');
 if (!phones.length) return;
 var loading = false, loaded = false;
 function init() {
 phones.forEach(function (input) {
 if (input.dataset.itiReady) return;
 input.dataset.itiReady = '1';
 var form = input.closest('form');
 var hid = form ? form.querySelector('[name=phone_country]') : null;
 window.intlTelInput(input, {
 initialCountry: (hid && hid.value) || 'jp',
 separateDialCode: true,
 utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js'
 });
 });
 }
 // Lazy: pull the widget (incl. the 58 KB utils.js) only when the visitor first
 // touches a phone field — keeps it off the critical path (FCP/LCP) while still
 // ready before they can finish typing a number.
 function load() {
 if (loaded) { init(); return; }
 if (window.intlTelInput) { loaded = true; init(); return; }
 if (loading) return; loading = true;
 var s = document.createElement('script');
 s.src = 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js';
 s.onload = function () { loaded = true; init(); };
 document.head.appendChild(s);
 }
 // Init immediately so the flag + dial code show on load (this script is at the end
 // of <body>, so it never blocks first paint). The heavy utils.js is still fetched
 // asynchronously by the widget AFTER init, keeping it off the critical render path.
 load();
 phones.forEach(function (input) {
 input.addEventListener('focus', load);
 input.addEventListener('touchstart', load, { passive: true });
 });
})();
</script>
<script>/*anim-failsafe*/
(function () {
 var SEL = '[data-anim],[data-animate],[data-aos],[data-reveal],[data-scroll],[class*="reveal"],[class*="fade"],[class*="aos"]';
 function show(el){
 // remove the hooks the design's opacity:0 rule targets, then force-show as backup
 ['data-anim','data-animate','data-aos','data-reveal','data-scroll'].forEach(function(a){ el.removeAttribute(a); });
 el.classList.remove('reveal','fade','fade-in','fade-up','aos-init','will-reveal','animate');
 el.style.setProperty('opacity','1','important'); el.style.setProperty('transform','none','important');
 el.style.setProperty('visibility','visible','important'); el.style.setProperty('filter','none','important');
 }
 function isHidden(el){ return el.offsetHeight > 0 && parseFloat(getComputedStyle(el).opacity) < 0.08; }
 // reveal a block only when it actually reaches the viewport, and only if its own
 // reveal is STILL missing ~1.2s after it got there (i.e. genuinely broken)
 if ('IntersectionObserver' in window) {
 var io = new IntersectionObserver(function(es){ es.forEach(function(e){
 if (!e.isIntersecting) return;
 var el = e.target; io.unobserve(el);
 setTimeout(function(){ if (isHidden(el)) show(el); }, 1200);
 }); }, {rootMargin: '0px 0px -5% 0px'});
 setTimeout(function(){ [].forEach.call(document.querySelectorAll(SEL), function(el){ if (isHidden(el)) io.observe(el); }); }, 1500);
 }
 // counter fallback: a plain number beats a stat frozen at "0" for a visitor who
 // never scrolls the count-up into view (no-op once the real count-up has run)
 setTimeout(function(){ document.querySelectorAll('[data-count]').forEach(function(el){
 var t = el.getAttribute('data-count'); if (t && !/[1-9]/.test(el.textContent||'')) el.textContent = t; }); }, 8000);
})();
</script>
<div id="ck-consent" role="dialog" aria-label="cookies" hidden style="position:fixed;left:16px;right:16px;bottom:16px;z-index:2147483000;max-width:660px;margin:0 auto;background:var(--surface,var(--panel,#12151c));color:var(--text,var(--fg,#e7e9ee));border:1px solid rgba(127,127,127,.28);border-radius:14px;padding:13px 16px;box-shadow:0 12px 40px rgba(0,0,0,.35);display:none;gap:14px;align-items:center;flex-wrap:wrap;font-size:14px;line-height:1.45">
<span style="flex:1;min-width:200px">お客様の体験向上のためにCookieを使用しています。</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">了解しました</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>
