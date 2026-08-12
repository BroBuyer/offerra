<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('AI and real-time execution | Official site');
$page_description = SITE_NAME . ' — AI technology that analyses markets and executes orders in real time, with a personal analyst by your side to build a new income stream.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">Skip to content</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Main">
 <a href="#platform">Product</a>
 <a href="#how">How it works.</a>
 <a href="#markets">Real-time markets</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Open your account</a>
 <button class="nav-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="navLinks" type="button">
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
 <span class="eyebrow">Real-time AI + human analysis</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span> — invest now, watch your capital grow</h1>
 <p class="hero-sub">An artificial intelligence engine scans the markets and executes orders in fractions of a second, while your personal analyst adapts every decision to your profile. No experience required — you are guided from start to finish.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Regulated</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Segregated funds</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9,600 clients</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> rating</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Protected by SSL</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>24/7 support</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Fast execution</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Start now — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> min.</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Open your account</h2>
 <p class="sub">Get started in a few minutes.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'I want to start';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Key indicators">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Active users</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>Trading volume</span></div>
 <div class="stat"><b>99,1%</b><span>Signal availability</span></div>
 <div class="stat"><b>24/7</b><span>Support</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">Inside <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Follow your account in real time</h2>
 <p class="lede">Every order executed by your analyst is logged here — entries, exits and verified results on each pair, streamed live.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Candlestick charts and depth in real time, on any device</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>One-tap order submission with instant confirmation</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Watchlists and price alerts that follow you</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Start now</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — mobile trading with real-time crypto charts</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">The platform</span><h2 id="features-title">Everything you need, on one fast platform.</h2><p class="lede">No charts to watch, no orders to time. The <?= e(SITE_NAME) ?> engine monitors real-time order books on crypto exchanges, global equity APIs and major forex pairs — and fires orders the moment models find a favourable setup.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Sub-second execution on every connected venue</h3><p><?= e(SITE_NAME) ?> maintains low-latency API connections with every supported exchange. When the model fires a signal, the order is routed, executed and logged on your dashboard before the next tick.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Active 24 hours a day, across all sessions</h3><p>The crypto market never sleeps, and neither does the <?= e(SITE_NAME) ?> engine. It keeps scanning pairs through weekends and holidays so you never miss a window.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Multi-currency reports</h3><p>Every balance, every order, every withdrawal appears in your local currency. No hidden conversion step.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Segregated capital</h3><p>Your funds stay in your own account. <?= e(SITE_NAME) ?> never takes custody — the engine only has permission to route orders.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Bank-grade security</h3><p>TLS encryption across the platform, two-factor authentication by default and quarterly third-party infrastructure audits. Trade receipts recorded on blockchain.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Three asset classes, one platform</h3><p>Most retail platforms are limited to a single market. <?= e(SITE_NAME) ?> runs crypto, listed equities and major forex pairs in the same dashboard.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Preset risk limits on every position</h3><p>Stop-loss, maximum drawdown and capital allocation limits are configured per asset class. The engine automatically exits any trade that crosses a limit, and the event is logged in your audit history.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Real-time markets</span>
 <h2 id="markets-title">Trade Bitcoin, Ethereum and more</h2>
 <p class="lede">Real-time prices, advanced indicators and a professional view of the markets that matter to you.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">I want market access</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Markets</span><span class="mkt-live"><i></i>Live</span></div>
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
 <div class="sec-head"><span class="eyebrow">How it works</span><h2 id="how-title">How it works.</h2><p class="lede">Cutting-edge technology and a real human analyst, working together in real time, to help you build a new income stream — with guidance at every step.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Create your account</h3><p>Sign up in minutes using only your email.</p></div>
 <div class="step"><div class="n">2</div><h3>Confirm your email</h3><p>Verify your address to protect your account.</p></div>
 <div class="step"><div class="n">3</div><h3>Deposit into your account</h3><p>Add funds from <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> your way.</p></div>
 <div class="step"><div class="n">4</div><h3>Set your strategy</h3><p>Choose your goals; your analyst personalises the plan.</p></div>
 <div class="step"><div class="n">5</div><h3>Start trading</h3><p>Follow guided signals and grow at your own pace.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Deposits</span><h2 id="payment-title">Deposit with methods you already know</h2><p class="lede">Deposit and withdraw through secure, familiar channels — with no hidden fees.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Bank transfer</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">What members say</span><h2 id="reviews-title">What our investors say</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>“My analyst explained everything clearly. I set my goals once, and now I can see exactly how my capital is growing — without worrying about every move.”</p><div class="who"><div class="ini">E</div><div><b>Emma Clarke</b><span>London</span></div></div></div>
 <div class="card"><p>“I had never invested before — my analyst handled the strategy and explained every step. No empty promises, no pressure, and withdrawals arrive when expected.”</p><div class="who"><div class="ini">J</div><div><b>James Wilson</b><span>Manchester</span></div></div></div>
 <div class="card"><p>“I started small to test it. The transparency and support gave me the confidence to keep building from there.”</p><div class="who"><div class="ini">S</div><div><b>Sophie Hughes</b><span>Birmingham</span></div></div></div>
 <div class="card"><p>“The analyses come to me — I approve or adjust in minutes. It fits perfectly into my routine without disrupting work.”</p><div class="who"><div class="ini">O</div><div><b>Oliver Bennett</b><span>Bristol</span></div></div></div>
 <div class="card"><p>“What won me over was the transparency: every decision is explained, and I see the reasoning before anything happens.”</p><div class="who"><div class="ini">C</div><div><b>Charlotte Reid</b><span>Edinburgh</span></div></div></div>
 <div class="card"><p>“Support is genuine and always available. My first analysis was hands-on, and the platform has been steady and predictable ever since.”</p><div class="who"><div class="ini">W</div><div><b>William Hayes</b><span>Leeds</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platform</span><h2 id="capabilities-title">Key features, at a glance</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">AI engine</div>
 <div class="spec-v">Advanced market analysis with machine learning</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Deposit methods</div>
 <div class="spec-v">Credit card, bank transfer, PayPal, digital wallets</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Multi-platform access</div>
 <div class="spec-v">Web, tablet and mobile — fully responsive</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Signal accuracy</div>
 <div class="spec-v">Up to 85% on supported AI strategies</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Markets</div>
 <div class="spec-v">Cryptocurrencies, forex, stocks and commodities</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Sign-up</div>
 <div class="spec-v">Fast account opening with guided verification</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Support</div>
 <div class="spec-v">Professional support around the clock — <a href="<?= page_url('contacts.php') ?>">Send a message</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Questions</span><h2 id="faq-title">Frequently asked questions.</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>What is the minimum deposit?</summary><p>Open and fund your account from the minimum deposit. You can add balance over time as your plan progresses.</p></details>
 <details><summary>How do withdrawals work?</summary><p>Request a withdrawal any time from the dashboard. Funds return to your chosen payment method, subject to standard processing times.</p></details>
 <details><summary>Is my money safe?</summary><p>Accounts are protected with industry-standard security and rigorous verification. As with any investment, your capital is at risk and values can fall as well as rise.</p></details>
 <details><summary>How quickly can I start?</summary><p>Most members complete registration in a few minutes. Once your first deposit is confirmed, a plan activates immediately.</p></details>
 <details><summary>Are there hidden fees?</summary><p>Costs are shown transparently before you commit. You will always know exactly what applies to your plan — no surprise charges.</p></details>
 <details><summary>What is the minimum age to register?</summary><p>You must be at least 18 to open an account and invest. Verification may be required to confirm your age and identity.</p></details>
 <details><summary>Which payment methods are supported?</summary><p>Common methods such as debit and credit cards, bank transfer, selected e-wallets and cryptocurrencies are supported. Exact options appear at the deposit step.</p></details>
 <details><summary>When is customer support available?</summary><p>Our support team operates Monday to Friday, 9am to 6pm, and commits to answering each request within one business day.</p></details>
 <details><summary>How are taxes handled?</summary><p>Taxes on investment gains depend on your country's rules and are your responsibility. We recommend keeping records and consulting a qualified tax adviser.</p></details>
 <details><summary>What is KYC and why is it required?</summary><p>KYC (Know Your Customer) is a standard identity check. It keeps accounts secure and is part of opening any investment account.</p></details>
 <details><summary>Do I need experience?</summary><p>No. Every member gets a personal financial analyst who guides them at every step, so no prior market knowledge is required.</p></details>
 <details><summary>Who manages my investments?</summary><p>A dedicated financial analyst, backed by AI tools, working around your goals and risk level. The analyst combines professional expertise with technology — decisions remain human.</p></details>
 <details><summary>Is the platform regulated?</summary><p>Yes — it meets national financial and cybersecurity standards, with account protection and rigorous verification built in.</p></details>
 <details><summary>Can I add funds later?</summary><p>Yes. You can fund your account any time and adjust your plan with your analyst as your goals evolve.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">TRUSTED</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Reviews</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b> reviews · Based on <b style="color:var(--text,#fff)">2.334</b> ratings</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Start now</span>
 <h2 id="signup-title" class="cta-h">Open your account.</h2>
 <p class="lede">Tell us how to reach you and a specialist will help you take the first step.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Open your account</h3>
 <p class="sub">Get started in a few minutes.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'I want to start';
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
 <p>AI speed, human decision. Capital at risk — invest responsibly.</p>
 </div>
 <div><h4>Product</h4><div class="foot-links">
 <a href="#platform">Follow your account in real time</a><a href="#markets">Real-time markets</a><a href="#how">How it works.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Company</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">About</a><a href="<?= page_url('offer.php') ?>">Pricing</a><a href="<?= page_url('contacts.php') ?>">Contact</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Privacy</a><a href="<?= page_url('conditions.php') ?>">Terms</a><a href="<?= page_url('conditions.php') ?>">Risk disclosure</a><a href="<?= page_url('contacts.php') ?>">Report abuse</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. All rights reserved. Investing involves risk, including possible loss of capital. · Investing involves risk, including the possible loss of some or all of the capital invested. The value of investments can go up or down, and you may get back less than you originally put in. Do not invest money you cannot afford to lose.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('en-GB',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+' €';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Please wait\u2026";
 var MSG_ERR = "We could not submit your details right now. Please try again.";
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
 initialCountry: (hid && hid.value) || 'gb',
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
<span style="flex:1;min-width:200px">We use cookies to improve your experience.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">Got it</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>
