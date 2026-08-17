<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Sign-up ' . SITE_NAME;
$page_description = 'Buka akaun account with ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Mula sekarang</span>
    <h1>Buka akaun account</h1>
    <p class="kpnq92g">A few details to start, then a specialist takes it from there. No payment is taken at this step.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>What happens next</h2>
    <ol class="nxlk2qu">
      <li><h3>You send the form</h3><p>It takes a few minutes and costs nothing.</p></li>
      <li><h3>A specialist calls</h3><p>They confirm your details, answer questions and explain the next step. No pressure to deposit.</p></li>
      <li><h3>You verify and choose an amount</h3><p>Only then does any money move, and only the amount you pick.</p></li>
    </ol>
    <p class="jkkyl">Investment involves risk, including the possible loss of some or all of the capital you invest. The value of investments can go down as well as up, and you may receive back less than you originally put in. You should not invest money that you cannot afford to lose.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Start — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">FAQ</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>What you need</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>An email address you actually read.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>A phone number, so a specialist can reach you.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>An identity document, for the verification step later.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>What happens after you send the form</h2>
    <h3>The verification call</h3>
    <p>A specialist calls to confirm the details you submitted, answer questions and agree what a sensible starting amount looks like for you. The call is a conversation, not a sales script: an account opened on unrealistic expectations is no use to anybody.</p>
    <h4>How long it takes</h4>
    <p>Usually one call of ten to fifteen minutes. If you would rather be called at a specific time, say so in the form and that time is respected.</p>
    <h3>Identity checks explained</h3>
    <p>Before the first deposit you will be asked for a photo ID and a recent document showing your address. This is the same requirement any regulated financial service has, and it exists so that a withdrawal can only ever return to you.</p>
    <h4>What is accepted</h4>
    <p>A passport or national ID card, and a utility bill or bank statement issued within the last three months. A clear photo taken on a phone is fine.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Buka akaun account</h2>
      <p class="pt6joj">Get started in a few minutes.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Mula sekarang';
  $form_class = 'leadform lead-form aurel-form';
  $form_variant = 'band';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
