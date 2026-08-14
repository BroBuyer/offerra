<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' ᐉ Full live control of your investment';
$page_description = 'Follow in real time how your capital is working with ' . SITE_NAME . ': clear reports, a personal analyst and AI. Generate extra income from ' . money_min();
$page_canonical = page_url();
$active_page = "home";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="tl154k" aria-labelledby="rrqdpt">
  <div class="ggh3sm">
    <span class="vd7z9k">AI + expert human analysts</span>
    <h1 id="rrqdpt"><?= e(SITE_NAME) ?></h1>
    <p class="ymraes">A personal financial analyst, backed by AI, who helps ordinary people generate an extra income stream, with no prior experience. Your analyst guides you at every step, while the dashboard shows in real time how your capital is working.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Regulated</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Segregated funds</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>39,600 clients</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.9</span> rating</span></div>
    <div class="vseuxnl">
      <a class="qou73xg fi3abjs" href="#nl3qm8">Start — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('product.php') ?>">How it works</a>
    </div>
    <ul class="wxlxk">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>SSL protection</li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>24/7 support</li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Fast execution</li>
    </ul>

    <div class="hu2v3" id="nl3qm8" data-u="formband">
      <h2>Open your account</h2>
      <p class="pt6joj">Get started in a few minutes.</p>
      <?php
  $form_id = 'lead-form-hero';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Start now';
  $form_class = 'leadform lead-form aurel-form';
  $form_variant = 'band';
  require __DIR__ . '/includes/form.php';
?>
    </div>
    <div class="mcitl7d">
      <div class="ohqkun7"><b>33,000</b><span>Active users</span></div>
      <div class="ohqkun7"><b>€0.6B</b><span>Traded volume</span></div>
      <div class="ohqkun7"><b>99.8%</b><span>Signal uptime</span></div>
      <div class="ohqkun7"><b>24/7</b><span>Support</span></div>
    </div>
  </div>
</section>

<div class="ggh3sm jx8jnza">
  <details class="tjbln" open aria-label="On this page">
    <summary class="eik0loi">On this page</summary>
    <ol>
      <li><a href="#exd9dmd">Live markets</a></li>
      <li><a href="#sor9s"><?= e(SITE_NAME) ?></a></li>
      <li><a href="#dmobczk">How it works</a></li>
      <li><a href="#gp0nit">On any screen</a></li>
      <li><a href="#esypwbx">Returns</a></li>
      <li><a href="#evp8w6d">Safeguards</a></li>
      <li><a href="#vzo0q">Why <?= e(SITE_NAME) ?></a></li>
      <li><a href="#br1y4s">What members say</a></li>
      <li><a href="#vatll">Your analyst</a></li>
      <li><a href="#rb8p3">Your starting point</a></li>
      <li><a href="#nw3j7wd">Questions</a></li>
    </ol>
    <a class="qou73xg fi3abjs" href="#nl3qm8">Start — <?= e(money_min()) ?> min.</a>
  </details>

  <div>
    <section class="xrn58" data-u="sec" id="br1y4s" aria-labelledby="es9pra">
      <div class="wdsnx3j">
        <span class="vd7z9k">What members say</span>
        <h2 id="es9pra">What traders are saying</h2>
      </div>
      <div class="vdaz1q">
        <figure class="qkl7dd8" itemscope itemtype="https://schema.org/Review">
          <div class="dnjuv">
            <span class="cc91z" aria-label="5/5">★★★★★</span>
            <span class="ue1r1">+€2,200 in 4 months</span>
          </div>
          <blockquote style="margin:0" itemprop="reviewBody"><p>My analyst explained every step. I set my goals once, and now I can see exactly how my capital is working, without second-guessing every decision.</p></blockquote>
          <figcaption itemprop="author" itemscope itemtype="https://schema.org/Person">
            <b itemprop="name">Emma Thompson</b>London
          </figcaption>
          <meta itemprop="datePublished" content="2026-01-01"/>
          <div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
            <meta itemprop="ratingValue" content="5"/><meta itemprop="bestRating" content="5"/>
          </div>
          <span itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization" itemid="<?= e(rtrim(SITE_URL, '/')) ?>/#org" hidden><meta itemprop="name" content="<?= e(SITE_NAME) ?>"/><link itemprop="url" href="<?= e(rtrim(SITE_URL, '/')) ?>/"/></span>
        </figure>
        <figure class="qkl7dd8" itemscope itemtype="https://schema.org/Review">
          <div class="dnjuv">
            <span class="cc91z" aria-label="5/5">★★★★★</span>
            <span class="ue1r1">+€2,200 in 4 months</span>
          </div>
          <blockquote style="margin:0" itemprop="reviewBody"><p>I had never invested — my analyst designed the strategy and explained every move. No empty promises, no pressure, and withdrawals arrive when I expect them.</p></blockquote>
          <figcaption itemprop="author" itemscope itemtype="https://schema.org/Person">
            <b itemprop="name">James Wilson</b>Manchester
          </figcaption>
          <meta itemprop="datePublished" content="2026-01-01"/>
          <div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
            <meta itemprop="ratingValue" content="5"/><meta itemprop="bestRating" content="5"/>
          </div>
          <span itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization" itemid="<?= e(rtrim(SITE_URL, '/')) ?>/#org" hidden><meta itemprop="name" content="<?= e(SITE_NAME) ?>"/><link itemprop="url" href="<?= e(rtrim(SITE_URL, '/')) ?>/"/></span>
        </figure>
        <figure class="qkl7dd8" itemscope itemtype="https://schema.org/Review">
          <div class="dnjuv">
            <span class="cc91z" aria-label="5/5">★★★★★</span>
            <span class="ue1r1">+€2,200 in 4 months</span>
          </div>
          <blockquote style="margin:0" itemprop="reviewBody"><p>I started small to try it out. The genuine transparency and ongoing support gave me the confidence to grow from there.</p></blockquote>
          <figcaption itemprop="author" itemscope itemtype="https://schema.org/Person">
            <b itemprop="name">Sophie Clarke</b>Birmingham
          </figcaption>
          <meta itemprop="datePublished" content="2026-01-01"/>
          <div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
            <meta itemprop="ratingValue" content="5"/><meta itemprop="bestRating" content="5"/>
          </div>
          <span itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization" itemid="<?= e(rtrim(SITE_URL, '/')) ?>/#org" hidden><meta itemprop="name" content="<?= e(SITE_NAME) ?>"/><link itemprop="url" href="<?= e(rtrim(SITE_URL, '/')) ?>/"/></span>
        </figure>
        <figure class="qkl7dd8" itemscope itemtype="https://schema.org/Review">
          <div class="dnjuv">
            <span class="cc91z" aria-label="5/5">★★★★★</span>
            <span class="ue1r1">+€2,200 in 4 months</span>
          </div>
          <blockquote style="margin:0" itemprop="reviewBody"><p>The proposals come to me — I approve or adjust in minutes. It fits around my working life without becoming an obsession.</p></blockquote>
          <figcaption itemprop="author" itemscope itemtype="https://schema.org/Person">
            <b itemprop="name">Oliver Bennett</b>Edinburgh
          </figcaption>
          <meta itemprop="datePublished" content="2026-01-01"/>
          <div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
            <meta itemprop="ratingValue" content="5"/><meta itemprop="bestRating" content="5"/>
          </div>
          <span itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization" itemid="<?= e(rtrim(SITE_URL, '/')) ?>/#org" hidden><meta itemprop="name" content="<?= e(SITE_NAME) ?>"/><link itemprop="url" href="<?= e(rtrim(SITE_URL, '/')) ?>/"/></span>
        </figure>
        <figure class="qkl7dd8" itemscope itemtype="https://schema.org/Review">
          <div class="dnjuv">
            <span class="cc91z" aria-label="5/5">★★★★★</span>
            <span class="ue1r1">+€2,200 in 4 months</span>
          </div>
          <blockquote style="margin:0" itemprop="reviewBody"><p>What convinced me was the total clarity: every decision is justified, and I see the reasoning before anything happens.</p></blockquote>
          <figcaption itemprop="author" itemscope itemtype="https://schema.org/Person">
            <b itemprop="name">Charlotte Hayes</b>Bristol
          </figcaption>
          <meta itemprop="datePublished" content="2026-01-01"/>
          <div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
            <meta itemprop="ratingValue" content="5"/><meta itemprop="bestRating" content="5"/>
          </div>
          <span itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization" itemid="<?= e(rtrim(SITE_URL, '/')) ?>/#org" hidden><meta itemprop="name" content="<?= e(SITE_NAME) ?>"/><link itemprop="url" href="<?= e(rtrim(SITE_URL, '/')) ?>/"/></span>
        </figure>
        <figure class="qkl7dd8" itemscope itemtype="https://schema.org/Review">
          <div class="dnjuv">
            <span class="cc91z" aria-label="5/5">★★★★★</span>
            <span class="ue1r1">+€2,200 in 4 months</span>
          </div>
          <blockquote style="margin:0" itemprop="reviewBody"><p>Customer service is real and reachable. My first analysis was personalised, and the platform has been stable and predictable ever since.</p></blockquote>
          <figcaption itemprop="author" itemscope itemtype="https://schema.org/Person">
            <b itemprop="name">William Parker</b>Leeds
          </figcaption>
          <meta itemprop="datePublished" content="2026-01-01"/>
          <div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
            <meta itemprop="ratingValue" content="5"/><meta itemprop="bestRating" content="5"/>
          </div>
          <span itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization" itemid="<?= e(rtrim(SITE_URL, '/')) ?>/#org" hidden><meta itemprop="name" content="<?= e(SITE_NAME) ?>"/><link itemprop="url" href="<?= e(rtrim(SITE_URL, '/')) ?>/"/></span>
        </figure>
      </div>
    </section>

    <section class="xrn58" data-u="sec" id="vzo0q" aria-labelledby="mzn56z">
      <div class="wdsnx3j">
        <span class="vd7z9k">Why <?= e(SITE_NAME) ?></span>
        <h2 id="mzn56z">No spreadsheets. No screens. No last-minute doubts</h2>
        <p class="rmct9">See how <?= e(SITE_NAME) ?> compares with traditional brokers and with trading by hand.</p>
      </div>
      <div class="smnsm2" role="region" tabindex="0" aria-label="No spreadsheets. No screens. No last-minute doubts"><table class="by635s">
        <thead><tr><th scope="col">Platform</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Traditional broker</th><th scope="col">Trading on your own</th></tr></thead>
        <tbody>
          <tr><td>AI order execution</td><td class="bfe2o6f">✓</td><td class="byuav">limited hours</td><td class="byuav">manual</td></tr>
          <tr><td>24/7 coverage across all markets</td><td class="bfe2o6f">✓</td><td class="byuav">paperwork</td><td class="byuav">on your own</td></tr>
          <tr><td>Sub-second order routing</td><td class="bfe2o6f">✓</td><td class="byuav">by tier only</td><td class="byuav">manual</td></tr>
          <tr><td>Multi-currency reporting</td><td class="bfe2o6f">✓</td><td class="byuav">limited hours</td><td class="byuav">on your own</td></tr>
          <tr><td>Paperless account opening</td><td class="bfe2o6f">✓</td><td class="byuav">paperwork</td><td class="byuav">manual</td></tr>
          <tr><td>Cross-exchange arbitrage</td><td class="bfe2o6f">✓</td><td class="byuav">by tier only</td><td class="byuav">on your own</td></tr>
          <tr><td>Dedicated personal manager</td><td class="bfe2o6f">✓</td><td class="byuav">limited hours</td><td class="byuav">manual</td></tr>
        </tbody>
      </table></div>
      <p style="margin-top:22px"><a class="qou73xg ec2hno" href="<?= page_url('offer.php') ?>">Why us</a></p>
    </section>

    <section class="xrn58" data-u="sec" id="evp8w6d" aria-labelledby="ykur4hl">
      <div class="tsgf5eq">
        <div>
          <div class="wdsnx3j">
            <span class="vd7z9k">Safeguards</span>
            <h2 id="ykur4hl">Your money, protected by design</h2>
            <p class="rmct9">Client funds sit with regulated payment partners, access is verified, and every withdrawal follows a documented route back to the account it came from.</p>
          </div>
          <ul class="ibiqy0k">
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Real-time candlestick charts and market depth, on any device</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>One-tap orders with instant confirmation</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Watchlists and price alerts that follow you everywhere</span></li>
          </ul>
        </div>
        <img src="<?= asset('static/img/platform.webp') ?>" srcset="<?= asset('static/img/platform-640.webp') ?> 640w, <?= asset('static/img/platform.webp') ?> 800w" sizes="(max-width: 768px) 92vw, 680px" alt="Portfolio overview inside the platform" width="760" height="520" decoding="async" title="Portfolio overview inside the platform" loading="lazy">
      </div>
    </section>

    <section class="xrn58" data-u="sec" id="vatll" aria-labelledby="iouvw">
      <div class="tsgf5eq mudjf">
        <img src="<?= asset('static/img/platform.webp') ?>" srcset="<?= asset('static/img/platform-640.webp') ?> 640w, <?= asset('static/img/platform.webp') ?> 800w" sizes="(max-width: 768px) 92vw, 680px" alt="Your personal analyst at their desk" width="760" height="520" decoding="async" title="Your personal analyst at their desk" loading="lazy">
        <div>
          <div class="wdsnx3j">
            <span class="vd7z9k">Your analyst</span>
            <h2 id="iouvw">Your personal financial analyst</h2>
            <p class="rmct9">Every member is paired with a personal financial analyst with years of market experience. With their own expertise, proven analysis methods and modern AI tools, they help you spot promising opportunities and stay with you at every stage.</p>
          </div>
          <ul class="ibiqy0k">
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Years of practical market experience</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>A strategy designed around your goals, risk and capital</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Close support at every step</span></li>
          </ul>
        </div>
      </div>
    </section>

    <section class="xrn58" id="esypwbx" aria-labelledby="rq8es">
      <div class="wdsnx3j">
        <span class="vd7z9k">Returns</span>
        <h2 id="rq8es">An example with your deposit</h2>
        <p class="rmct9">Move the slider to simulate a larger deposit: the figures are calculated from a representative plan with the minimum deposit of <?= e(money_min()) ?>. This is an example, not a promise; your actual returns depend on how much you invest and the strategy you choose with your analyst.</p>
      </div>
      <div class="wmuyc">
        <div>
          <?php
            $calc_min = max(1, (int) MIN_DEPOSIT);
            $calc_max = 10000;
            $calc_default = min($calc_max, max($calc_min, 1000));
          ?>
          <div class="vcf9ca"><label for="calc-dep">Starting amount</label><span class="cj9i15q" id="csezcv1"><?= e(currency_symbol() . number_format($calc_default, 0)) ?></span></div>
          <input id="lsm9on" type="range" min="<?= (int) $calc_min ?>" max="<?= (int) $calc_max ?>" step="50" value="<?= (int) $calc_default ?>" aria-label="Starting amount"/>
          <div class="vcf9ca"><label for="calc-mon">Months</label><span class="cj9i15q" id="ywprvgd">6</span></div>
          <input id="gqz8w" type="range" min="1" max="24" step="1" value="6" aria-label="Months"/>
          <p class="ifuciwq">The figures are illustrative. Your actual returns depend on the amount you invest and the strategy you choose with your analyst.</p>
        </div>
        <div class="gbastl">
          <small>Projected balance</small>
          <b id="aowtjsf">€1,000</b>
          <a class="qou73xg fi3abjs" href="#nl3qm8" style="margin-top:14px;width:100%">Open an account</a>
        </div>
      </div>
    </section>

    <section class="xrn58" id="rb8p3" aria-labelledby="dv0846">
      <div class="wdsnx3j">
        <span class="vd7z9k">Find your starting point</span>
        <h2 id="dv0846">Three questions, then a suggested starting plan</h2>
        <p class="rmct9">No score, no grade — the answers just tell your specialist where to begin so the first call is not spent on basics.</p>
      </div>
      <form class="yw6xmlm" id="sqw38g" novalidate>
        <div class="jpmo5sl" hidden aria-hidden="true"><i></i></div>
        <p class="sdahnb" hidden aria-live="polite" role="status"
           data-l="Question"
           data-of="of"></p>
        <fieldset class="hpwy9" data-u="quizq" tabindex="-1">
          <legend>01. How much investing have you done before?</legend>
          <div class="bjatk">
            <label><input type="radio" name="q1" value="1"/><span>None at all</span></label>
            <label><input type="radio" name="q1" value="2"/><span>A little, on my own</span></label>
            <label><input type="radio" name="q1" value="3"/><span>I invest regularly</span></label>
          </div>
        </fieldset>
        <fieldset class="hpwy9" data-u="quizq" tabindex="-1">
          <legend>02. What matters most to you right now?</legend>
          <div class="bjatk">
            <label><input type="radio" name="q2" value="1"/><span>Keeping risk low</span></label>
            <label><input type="radio" name="q2" value="2"/><span>Steady growth</span></label>
            <label><input type="radio" name="q2" value="3"/><span>Learning how it works</span></label>
          </div>
        </fieldset>
        <fieldset class="hpwy9" data-u="quizq" tabindex="-1">
          <legend>03. How much time can you give it?</legend>
          <div class="bjatk">
            <label><input type="radio" name="q3" value="1"/><span>Almost none</span></label>
            <label><input type="radio" name="q3" value="2"/><span>A few minutes a day</span></label>
            <label><input type="radio" name="q3" value="3"/><span>I like following markets</span></label>
          </div>
        </fieldset>
        <div class="beqazp3">
          <button class="qou73xg ec2hno sihas5z" type="button" hidden>Back</button>
          <p class="ubn7i4v" id="bpisnbk" hidden>Your answers are ready — leave your details and a specialist will talk them through.</p>
          <a class="qou73xg fi3abjs pk4h2" href="#nl3qm8">See my starting plan</a>
        </div>
      </form>
    </section>

    <section class="xrn58" data-u="sec" id="dmobczk" aria-labelledby="dl5sp">
      <div class="wdsnx3j">
        <span class="vd7z9k">How it works</span>
        <h2 id="dl5sp">How it works</h2>
        <p class="rmct9">Modern AI and a real human analyst, working together, to help you build an additional source of income, guiding you at every step and showing you every movement of your capital.</p>
      </div>
      <ol class="zzk9i">
        <li><span class="vpx6kk">01</span><div><h3>Create your account</h3><p>Register in a few minutes with your email only.</p></div></li>
        <li><span class="vpx6kk">02</span><div><h3>Verify your email</h3><p>Confirm your address to protect your account.</p></div></li>
        <li><span class="vpx6kk">03</span><div><h3>Deposit funds</h3><p>Add capital from <?= e(money_min()) ?> with the method you prefer.</p></div></li>
        <li><span class="vpx6kk">04</span><div><h3>Set your strategy</h3><p>Choose your goals; your analyst shapes the plan around you.</p></div></li>
        <li><span class="vpx6kk">05</span><div><h3>Start investing</h3><p>Follow the guided signals and watch your progress in real time.</p></div></li>
      </ol>
      <p style="margin-top:22px"><a class="qou73xg ec2hno" href="<?= page_url('product.php') ?>">Read the full guide</a></p>
    </section>

    <section class="xrn58" data-u="sec" id="exd9dmd" aria-labelledby="rlolt2l">
      <div class="wdsnx3j">
        <span class="vd7z9k">Live markets</span>
        <h2 id="rlolt2l">Trade Bitcoin, Ethereum and much more</h2>
        <p class="rmct9">Real-time prices, advanced indicators and a professional-level view of the markets that interest you.</p>
      </div>
      <div class="smnsm2" role="region" tabindex="0" aria-label="Trade Bitcoin, Ethereum and much more"><table class="nd3owbf">
        <caption>Prices update automatically while the page is open.</caption>
        <thead><tr><th scope="col">Asset</th><th scope="col">Price</th><th scope="col">24h</th></tr></thead>
        <tbody>
          <tr data-sym="BTC"><td><span class="jtcrzrj">Bitcoin<small>BTC/USDT</small></span></td><td class="qsd2h">€64,671</td><td class="dprrq gv5fw2">-1.06%</td></tr>
          <tr data-sym="ETH"><td><span class="jtcrzrj">Ethereum<small>ETH/USDT</small></span></td><td class="qsd2h">€1,881</td><td class="dprrq gv5fw2">-2.55%</td></tr>
          <tr data-sym="SOL"><td><span class="jtcrzrj">Solana<small>SOL/USDT</small></span></td><td class="qsd2h">€76.62</td><td class="dprrq gv5fw2">-1.72%</td></tr>
          <tr data-sym="XRP"><td><span class="jtcrzrj">XRP<small>XRP/USDT</small></span></td><td class="qsd2h">€1.11</td><td class="dprrq gv5fw2">-0.97%</td></tr>
        </tbody>
      </table></div>
    </section>

    <section class="xrn58" data-u="sec" id="gp0nit" aria-labelledby="jg778dx">
      <div class="tsgf5eq">
        <div>
          <div class="wdsnx3j">
            <span class="vd7z9k">On any screen</span>
            <h2 id="jg778dx">The same account on your desk and in your pocket</h2>
            <p class="rmct9">One login, one balance. Open it from a computer browser or from your phone: nothing to install and nothing that only works on one device.</p>
          </div>
          <ul class="ibiqy0k">
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Desktop — full dashboard, charts and reports</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Mobile — balances, positions and withdrawals wherever you are</span></li>
          </ul>
        </div>
        <figure class="nb2zw0m">
          <img src="<?= asset('static/img/phone.webp') ?>" alt="The same portfolio view on a phone screen" title="The same portfolio view on a phone screen" width="896" height="1200" decoding="async" loading="lazy">
        </figure>
      </div>
    </section>

    <section class="xrn58" data-u="sec" id="sor9s" aria-labelledby="onidtj">
      <div class="wdsnx3j">
        <span class="vd7z9k"><?= e(SITE_NAME) ?></span>
        <h2 id="onidtj">Watch your account in real time</h2>
        <p class="rmct9">Every trade your analyst places is logged here — entries, exits and verified results on every pair, streaming live.</p>
      </div>
      <ol class="zzk9i">
        <li><span class="vpx6kk">01</span><div><h3>Sub-second execution on every connected market</h3><p><?= e(SITE_NAME) ?> keeps permanent low-latency API connections with every supported exchange. When the model generates a signal, the order is sent, filled and logged on your dashboard before the next tick.</p></div></li>
        <li><span class="vpx6kk">02</span><div><h3>It runs 24/7, through every market session</h3><p>Crypto does not rest, and neither does <?= e(SITE_NAME) ?>. The engine keeps analysing pairs through weekends and holidays so an opportunity is not missed.</p></div></li>
        <li><span class="vpx6kk">03</span><div><h3>Multi-currency reporting</h3><p>Every balance, every trade and every withdrawal is shown in your local currency. No hidden conversion steps at any point.</p></div></li>
        <li><span class="vpx6kk">04</span><div><h3>Segregated capital</h3><p>Your funds stay in your own account. <?= e(SITE_NAME) ?> never holds them: the engine only has permission to send orders.</p></div></li>
        <li><span class="vpx6kk">05</span><div><h3>Bank-grade security</h3><p>TLS encryption across the platform, two-step verification by default, and quarterly third-party infrastructure audits. Trade receipts logged on-chain.</p></div></li>
        <li><span class="vpx6kk">06</span><div><h3>Three asset classes, one platform</h3><p>Most retail platforms limit you to a single market. <?= e(SITE_NAME) ?> trades cryptocurrencies, listed shares and the major currency pairs from the same dashboard.</p></div></li>
        <li><span class="vpx6kk">07</span><div><h3>Pre-set risk limits on every position</h3><p>Stop-loss, maximum accepted loss and capital-allocation caps are configured by asset class. The engine automatically closes any trade that breaches a threshold, and the event is logged in your audit history.</p></div></li>
      </ol>
    </section>

    <section class="xrn58" id="nw3j7wd" aria-labelledby="wysa9hx">
      <div class="wdsnx3j">
        <span class="vd7z9k">Questions</span>
        <h2 id="wysa9hx">Frequently asked questions</h2>
      </div>
      <div class="hnxh4ir" itemscope itemtype="https://schema.org/FAQPage">
        <details open itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">What is the minimum deposit to get started?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">You can open and fund your account from <?= e(money_min()) ?> minimum. You are free to add more funds as your investment plan progresses.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">How do withdrawals work?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Request a withdrawal any time from your dashboard. Funds return to your chosen payment method, with the usual processing times.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Is my money kept securely?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Accounts are protected with professional-grade security and identity checks. As with any investment, your capital is at risk and values can go down as well as up.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">How long does it take to start investing?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Most members complete registration in a few minutes. Once your first deposit is processed, you can activate a plan straight away.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Are there hidden fees?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">All costs are shown transparently before you commit. You will always see what applies to your plan, with no surprises.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">What is the minimum age to register?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">You must be at least 18 to open an account and invest. Verification may be requested to confirm your age and identity.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Which payment methods are accepted?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Common methods such as debit and credit cards, bank transfers, selected e-wallets and cryptocurrencies are accepted. The exact options are shown at the deposit step.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">When is customer support available?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Our support team is available Monday to Friday, 9:00 to 18:00, and commits to answering each enquiry within one working day.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">How are taxes on gains handled?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Taxes on investment gains depend on the rules in your country and are your responsibility. We recommend keeping your own records and speaking to a qualified tax adviser.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">What is KYC verification and why is it required?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">KYC (Know Your Customer) is a standard check of your identity. It helps keep accounts secure and is a routine part of opening an investment account.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Do I need prior investment experience?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">No. Every member has a personal financial analyst who guides you at every step, so you do not need prior knowledge of the markets.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Who manages my investments?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">A dedicated financial analyst, backed by AI tools, working around your goals and risk level. The analyst combines professional expertise with technology — decisions remain human.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Does the platform meet regulatory standards?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Yes — it meets national financial and cybersecurity standards, with account protection and verification built in.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">Can I add more funds to my account later?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Yes. You can top up your account at any time and adjust your plan with your analyst as your goals evolve.</p>
          </div>
        </details>
      </div>
      <p style="margin-top:22px"><a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">See all questions</a></p>
    </section>
  </div>
</div>

<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">TRUSTED</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Reviews</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.9</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:98.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">817</b> reviews · Based on <b style="color:var(--text,#fff)">4,902</b> ratings</div></div></section><section class="bjiwuc" id="nlokf" aria-labelledby="fglj2pf">
  <div class="ggh3sm kdbtf1i">
    <div>
      <span class="vd7z9k">Get started</span>
      <h2 id="fglj2pf">Ready to see your capital in motion?</h2>
      <p class="rmct9">Open your account in minutes, deposit from a modest minimum and start tracking your progress transparently from day one.</p>
      <ul class="ibiqy0k" style="margin-top:16px">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>An email address you actually read.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>A phone number, so a specialist can reach you.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>An identity document, for the verification step later.</span></li>
      </ul>
    </div>
    <div class="bv1ft5">
      <h3>Create your profile</h3>
      <p class="pt6joj">Get started in a few minutes.</p>
      <?php
  $form_id = 'lead-form-cta';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Start now';
  $form_class = 'leadform lead-form aurel-form aurel-stack';
  $form_variant = 'stack';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
