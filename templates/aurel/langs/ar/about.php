<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'About ' . SITE_NAME;
$page_description = 'One account, a clear view of your capital — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">The platform</span>
    <h1>One account, a clear view of everything</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> brings your balance, your strategy and your performance into a single transparent dashboard, so every decision is informed and every figure is in sight.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>The people behind your account</h2>
    <p>Behind the interface are analysts who study the markets every day, engineers who keep the platform running, and support specialists who reply in your language.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Market analysts who review conditions daily, not once a quarter.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Engineers on hand for the platform, with round-the-clock monitoring.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Support specialists who handle onboarding, verification and withdrawals.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Regulation, risk and what we do not promise</h2>
    <p>Investing involves risk and no platform removes it. What a platform can do is be clear with you: publish its terms, keep client money with regulated partners, and document how withdrawals work.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Identity verification before funds can move in the account.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Withdrawals return to the same method used for the deposit.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Terms, risk disclosure and privacy policy published in full.</span></li>
    </ul>
    <p class="jkkyl">Investment involves risk, including the possible loss of some or all of the capital you invest. The value of investments can go down as well as up, and you may receive back less than you originally put in. You should not invest money that you cannot afford to lose.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Start — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Send a message</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>How the platform was built</h2>
    <ol class="nxlk2qu">
      <li><h3>The starting point</h3><p>A small group of analysts and engineers kept hearing the same complaint: the tools exist, but nobody explains them.</p></li>
      <li><h3>First working version</h3><p>The first version did one thing: show a balance and a position in plain terms. Everything else was stripped out until that part was clear.</p></li>
      <li><h3>Bringing in the human side</h3><p>Automation answers what and when; people answer why. Support specialists were added so every member has someone to ask.</p></li>
      <li><h3>Opening to more markets</h3><p>Local payment methods, local languages and local support hours.</p></li>
      <li><h3>Where we are now</h3><p>The same principles at a larger scale: transparent figures, people you can reach, no surprises in the small print.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>What we are here for</h2>
    <p>Most people who want to invest never start, because every path looks designed for someone who already knows the vocabulary. We built the opposite: one account, clear language, and a specialist you can actually talk to.</p>
    <p>No jargon where a plain sentence will do, no fees that appear only after the money has moved, and no return promises that nobody can honestly guarantee.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Active users</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>Traded volume</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Support</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
