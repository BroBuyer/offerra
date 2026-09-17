<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Why us ' . SITE_NAME;
$page_description = 'Why people choose to start with ' . SITE_NAME;
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Why this platform</span>
    <h1>Why people choose to start here</h1>
    <p class="kpnq92g">Not a sales pitch: specific, checkable reasons, plus the parts that will not suit everyone.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>No spreadsheets. No cluttered screens. No last-minute doubts</h2>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Platform</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Traditional broker</th><th scope="col">Trading on your own</th></tr></thead>
      <tbody>
        <tr><td>AI order execution</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">limited hours</td><td style="color:var(--muted)">manual</td></tr>
        <tr><td>24/7 coverage across all markets</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">paperwork</td><td style="color:var(--muted)">Do it yourself</td></tr>
        <tr><td>Sub-second order routing</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">by tier only</td><td style="color:var(--muted)">manual</td></tr>
        <tr><td>Multi-currency reporting</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">limited hours</td><td style="color:var(--muted)">Do it yourself</td></tr>
        <tr><td>Paperless account opening</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">paperwork</td><td style="color:var(--muted)">manual</td></tr>
        <tr><td>Cross-exchange arbitrage</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">by tier only</td><td style="color:var(--muted)">Do it yourself</td></tr>
        <tr><td>Dedicated personal manager</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">limited hours</td><td style="color:var(--muted)">manual</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>What you get that a do-it-yourself setup does not</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Sub-second execution on every connected market.</b> <?= e(SITE_NAME) ?> keeps permanent low-latency API connections with every supported exchange. When the model generates a signal, the order is sent, filled and logged on your dashboard before the next tick.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">It runs 24/7, through every market session.</b> Crypto does not rest, and neither does <?= e(SITE_NAME) ?>. The engine keeps analysing pairs through weekends and holidays so an opportunity is not missed.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Multi-currency reporting.</b> Every balance, every trade and every withdrawal is shown in your local currency. No hidden conversion steps at any point.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Segregated capital.</b> Your funds stay in your own account. <?= e(SITE_NAME) ?> never holds them: the engine only has permission to send orders.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Bank-grade security.</b> TLS encryption across the platform, two-step verification by default, and quarterly third-party infrastructure audits. Trade receipts logged on-chain.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Three asset classes, one platform.</b> Most retail platforms limit you to a single market. <?= e(SITE_NAME) ?> trades cryptocurrencies, listed shares and the major currency pairs from the same dashboard.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Pre-set risk limits on every position.</b> Stop-loss, maximum accepted loss and capital-allocation caps are configured by asset class. The engine automatically closes any trade that breaches a threshold, and the event is logged in your audit history.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Who this is probably not for</h2>
    <p>Being straight about this saves everyone time. If any of the following describes you, a different route will suit you better.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>You need guaranteed returns. No honest platform offers them, and neither do we.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>You want to invest money you cannot afford to be without.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>You trade at professional volume with your own execution stack.</span></li>
    </ul>
    <p class="jkkyl">Investment involves risk, including the possible loss of some or all of the capital you invest. The value of investments can go down as well as up, and you may receive back less than you originally put in. You should not invest money that you cannot afford to lose.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Start — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
