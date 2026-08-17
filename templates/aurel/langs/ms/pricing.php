<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Harga ' . SITE_NAME;
$page_description = 'Simple, transparent pricing — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Harga</span>
    <h1>Simple, transparent pricing.</h1>
    <p class="kpnq92g">Getting started with <?= e(SITE_NAME) ?> is free. There are no hidden fees for opening an account, and you only put in what you choose to invest: the platform and its tools are included.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Where costs can appear</h2>
    <p>These are the only points where money leaves your balance for something other than an investment you have chosen.</p>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Item</th><th scope="col">Charged by</th><th scope="col">Note</th></tr></thead>
      <tbody>
        <tr><td>Account opening</td><td>—</td><td>Free.</td></tr>
        <tr><td>Platform access</td><td>—</td><td>Included, with no subscription.</td></tr>
        <tr><td>Market spread</td><td>Broker</td><td>The usual difference between buy and sell price.</td></tr>
        <tr><td>Network / bank fee</td><td>Payment provider</td><td>Depends on the method you choose.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">Capital is at risk. Only invest what you can afford to lose.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Buka akaun account</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>What is included</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Free account setup: no registration or licence fees.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>No hidden charges on deposits, withdrawals or account maintenance.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Only standard broker spreads or network costs may apply.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Start from the minimum deposit and scale at your own pace.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>What the numbers look like in practice</h2>
    <h3>A first deposit, step by step</h3>
    <p>A first deposit is the whole cost picture in one place: the amount you send, the spread when it is converted, and nothing else until you decide to trade. There is no account fee waiting at the end of the month and no charge for leaving the balance where it is.</p>
    <h4>What happens on the same day</h4>
    <p>The balance appears once the payment clears, and a specialist walks through the plan before anything is opened. Nothing is placed automatically on your behalf.</p>
    <h3>Withdrawals and what they cost</h3>
    <p>Withdrawals return to the payment method the money arrived from: that is a requirement, not a preference, so the account stays yours. Processing is free from our side; the only deduction you may see is the one your own bank or card issuer applies.</p>
    <h4>Timing you can plan around</h4>
    <p>Requests made on a working day are reviewed the same day. Card returns usually settle within three to five working days, bank transfers within two.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
