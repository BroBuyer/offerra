<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' ᐉ Cara ia berfungsi — From the first click to your first position';
$page_description = 'The full journey with ' . SITE_NAME . ', from start to finish.';
$page_canonical = page_url("product.php");
$active_page = "product";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Cara ia berfungsi</span>
    <h1>From the first click to your first position</h1>
    <p class="kpnq92g">The full journey, from start to finish, with nothing left assumed. Set-up takes minutes, and you decide every amount along the way.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>What happens after you register</h2>
    <p>Registration is the small part. Here is the rest, in the order it actually happens.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>A specialist contacts you to confirm your details and answer your questions.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>You verify your identity, a standard step before any funds move.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>You choose a starting amount. Nobody decides it for you.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>You can practise with a demo balance before trading live.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Withdrawals return to your deposit method, with a stated processing time.</span></li>
    </ul>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Start — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">FAQ</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>The parts people ask about most</h2>
    <h3>Who is on the other side</h3>
    <p>Each account is assigned a single specialist, not a rotating shift, so the person you speak to in the third month is the same person who set everything up in the first. They walk through the plan, explain what each step does, and answer questions in plain language.</p>
    <h4>What they will not do</h4>
    <p>They will not place anything without your instruction, and they will not push you to increase a balance. If a call ever feels like that, say so: that is not how the service is meant to work.</p>
    <h3>Tracking what happens next</h3>
    <p>The dashboard shows the balance, open positions and every movement in and out, with the same figures that appear on the statement. Nothing is collapsed into a single number that hides the detail underneath.</p>
    <h4>How to withdraw your money</h4>
    <p>A withdrawal is requested from the same dashboard and returned to the method you paid with. There is no minimum holding period and no charge from our side for requesting it.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>What you can hold in your portfolio</h2>
    <p>A single account covers several asset classes, so you will not need to open a second platform as soon as your interests widen.</p>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Asset class</th><th scope="col">Examples</th><th scope="col">Good to know</th></tr></thead>
      <tbody>
        <tr><td>Cryptocurrencies</td><td>BTC, ETH, SOL, XRP</td><td>Trades around the clock, including weekends.</td></tr>
        <tr><td>Currencies</td><td>EUR/USD, GBP/USD</td><td>Follows the main session hours.</td></tr>
        <tr><td>Indices</td><td>S&P 500, DAX</td><td>Broad exposure without picking single companies.</td></tr>
        <tr><td>Commodities</td><td>Gold, oil</td><td>Often used to balance a portfolio.</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Cara ia berfungsi</h2>
    <p>Modern AI and a real human analyst, working together, to help you build an additional source of income, guiding you at every step and showing you every movement of your capital.</p>
    <ol class="nxlk2qu" itemscope itemtype="https://schema.org/HowTo">
      <meta itemprop="name" content="Cara ia berfungsi"/>
      <li itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
        <h3 itemprop="name">Cipta akaun anda</h3><p itemprop="text">Register in a few minutes with your email only.</p></li>
      <li itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
        <h3 itemprop="name">Sahkan e-mel anda</h3><p itemprop="text">Confirm your address to protect your account.</p></li>
      <li itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
        <h3 itemprop="name">Deposit funds</h3><p itemprop="text">Add capital from <?= e(money_min()) ?>, with the method you prefer.</p></li>
      <li itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
        <h3 itemprop="name">Tetapkan strategi anda</h3><p itemprop="text">Choose your goals; your analyst shapes the plan around you.</p></li>
      <li itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
        <h3 itemprop="name">Start investing</h3><p itemprop="text">Follow the guided signals and watch your progress in real time.</p></li>
    </ol>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
