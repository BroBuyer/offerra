<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Report abuse ᐉ ' . SITE_NAME;
$page_description = 'Report abuse — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Trust and safety</span>
    <h1>Report abuse</h1>
    <p class="etpy2">Help us keep <?= e(SITE_NAME) ?> safe. Report suspected fraud, impersonation or misuse of our platform or brand.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>What to report</h2>
    <p>Please report any of the following to our Trust and Safety team:</p>
    <ul>
      <li>Phishing emails, fraudulent websites or fake apps pretending to be <?= e(SITE_NAME) ?>.</li>
      <li>Social media accounts, adverts or messaging channels that misuse our name, logo or trade marks.</li>
      <li>Suspected account takeover, unauthorised access or identity theft.</li>
      <li>Suspicious payment requests, “recovery agents” or third parties claiming to act on our behalf.</li>
      <li>Market abuse, money-laundering concerns or any illegal activity linked to our services.</li>
      <li>Abusive, threatening or harassing behaviour towards our staff or users.</li>
    </ul>

    <h2>How to report</h2>
    <p>Send us a detailed report through any of the channels below. If you can, include:</p>
    <ul>
      <li>The date and time of the incident.</li>
      <li>URLs, screenshots, message headers, sender addresses or phone numbers.</li>
      <li>Your account information (if the report concerns your account).</li>
      <li>Any other context that may help us investigate.</li>
    </ul>

    <div class="ziavo">
      <div class="ws86ccr">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>Trust and Safety email</b>
        <span>Use the contact page to reach our Trust and Safety team. Reports are triaged within one working day.</span>
      </div>
      <div class="ws86ccr">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Security disclosure</b>
        <span>For responsible disclosure of security vulnerabilities affecting our systems, contact us before sharing details publicly.</span>
      </div>
    </div>

    <h2>What happens next?</h2>
    <p>We review every report. Depending on the nature of the issue, we may contact you for more information, work with payment providers or hosting platforms to remove fraudulent content, or refer matters to law-enforcement or regulators. We treat reports confidentially and, where legally possible, protect the identity of reporters.</p>

    <h2>Urgent matters</h2>
    <p>If you believe you have been the victim of a crime, contact your local law-enforcement authority as well as telling us. If you suspect your account has been compromised, change your password immediately and notify us at once.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Contact Trust and Safety</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Back to home</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
