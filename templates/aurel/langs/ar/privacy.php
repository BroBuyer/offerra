<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Privacy Policy ᐉ ' . SITE_NAME;
$page_description = 'How ' . SITE_NAME . ' collects, uses and protects your personal information.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Legal information</span>
    <h1>Privacy Policy</h1>
    <p class="rmct9">How <?= e(SITE_NAME) ?> collects, uses and protects your personal information.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Last updated: January 2025</p>

    <h2>1. Introduction</h2>
    <p><?= e(SITE_NAME) ?> ("we", "us", "our") is committed to protecting the privacy of visitors and clients. This Privacy Policy explains what personal data we collect, why we collect it and how we process it when you use our website and services.</p>

    <h2>2. Information we collect</h2>
    <ul>
      <li><strong>Identity data</strong> — name, date of birth, government-issued identification for identity verification and KYC/AML compliance.</li>
      <li><strong>Contact data</strong> — email address, phone number, postal address.</li>
      <li><strong>Financial data</strong> — payment details, transaction history, information on the source of funds.</li>
      <li><strong>Technical data</strong> — IP address, browser type, device identifiers, cookies and usage analytics.</li>
    </ul>

    <h2>3. How we use your data</h2>
    <ul>
      <li>To verify identity and meet regulatory obligations.</li>
      <li>To provide, maintain and improve our platform and services.</li>
      <li>To process payments and detect fraudulent activity.</li>
      <li>To communicate with you about your account, updates and support requests.</li>
      <li>To send marketing communications when you have consented (you may opt out at any time).</li>
    </ul>

    <h2>4. Legal basis</h2>
    <p>We process personal data on one or more of the following legal bases: performance of a contract, compliance with a legal obligation, our legitimate interests, or your consent.</p>

    <h2>5. Sharing and disclosure</h2>
    <p>We may share personal data with regulated payment providers, KYC/AML verification partners, cloud infrastructure providers, professional advisers, and competent authorities where required by law. We do not sell personal data.</p>

    <h2>6. International transfers</h2>
    <p>Where personal data is transferred outside your jurisdiction, we ensure that appropriate safeguards are in place, including standard contractual clauses.</p>

    <h2>7. Data retention</h2>
    <p>We retain personal data for as long as needed to provide services and meet legal, regulatory and accounting requirements — typically at least five years after an account is closed.</p>

    <h2>8. Your rights</h2>
    <p>Subject to applicable law, you may request access, correction, erasure, restriction or portability of your personal data, and you may object to certain processing. To exercise these rights, contact us at the address below.</p>

    <h2>9. Cookies</h2>
    <p>We use essential and analytics cookies to operate the site and understand usage. You can manage cookies through your browser settings.</p>

    <h2>10. Security</h2>
    <p>We apply administrative, technical and physical safeguards designed to protect personal data against unauthorised access, disclosure, alteration or destruction. No system is perfectly secure, and we cannot guarantee absolute security.</p>

    <h2>11. Changes</h2>
    <p>We may update this Policy from time to time. The latest version will always be available on this page with the updated date.</p>

    <h2>12. Contact</h2>
    <p>For privacy questions or to exercise your rights, contact the <?= e(SITE_NAME) ?> Data Protection team through our contact page.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Back to home</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
