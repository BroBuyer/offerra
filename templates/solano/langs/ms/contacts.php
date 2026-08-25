<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Hubungi ' . SITE_NAME . ' ᐉ Kami sedia membantu';
$page_description = 'Have a question about ' . SITE_NAME . ' or your account?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/HubungiPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Hubungi</span>
    <h1>Kami sedia membantu</h1>
    <p class="kpnq92g">Have a question about <?= e(SITE_NAME) ?> or your account? Our support team will be glad to help. Write to us and we will reply as soon as we can.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Before you write to us</h2>
    <p>Most questions already have an answer on the site, and checking first is usually faster than waiting for a reply.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">FAQ</a> — costs, withdrawals, verification and minimum amounts.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Cara ia berfungsi</a> — what happens after you register, step by step.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Harga</a> — what is free and where a cost can appear.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Start — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>How to contact us</h2>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Channel</th><th scope="col">Best for</th><th scope="col">Response</th></tr></thead>
      <tbody>
        <tr><td>E-mel support — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Account questions, verification, withdrawals</td><td>We usually reply within one working day.</td></tr>
        <tr><td>Callback request</td><td>Anything easier to explain by phone</td><td>Sokongan hours: Monday to Friday, 9:00–18:00</td></tr>
        <tr><td>Abuse report — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/report-abuse</a></td><td>Impersonation, brand misuse, suspicious messages</td><td>Reviewed on receipt</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>What to expect when you get in touch</h2>
    <h3>Which channel to use</h3>
    <p>E-mel is the right choice for anything with an attachment: identity checks, withdrawal queries, questions about a statement. The callback form is for everything else, because most account questions are resolved faster in two minutes of conversation than in four messages.</p>
    <h4>Outside support hours</h4>
    <p>Messages sent in the evening or at the weekend stay in the queue and are answered first thing on the next working day, in the order they arrived.</p>
    <h3>Details worth including</h3>
    <p>The registered email and the approximate date of what you are asking about are enough to find the account. Never send a password, a full card number or a one-time code: no member of our team will ever ask you for those.</p>
    <h4>If something does not look right</h4>
    <p>Report it the same day. Anything involving a payment you do not recognise is handled immediately, without waiting in the usual queue.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
