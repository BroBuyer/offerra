<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Privacy Policy');
$page_description = 'How ' . SITE_NAME . ' collects, uses and protects your personal data.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Main">
      <a href="<?= page_url() ?>#platform">Platform</a>
      <a href="<?= page_url() ?>#how">How it works</a>
      <a href="<?= page_url() ?>#markets">Markets</a>
      <a href="<?= page_url() ?>#faq">Frequently Asked Questions</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Get started</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Legal information</span>
      <h1>Privacy Policy</h1>
      <p class="lede">How <?= e(SITE_NAME) ?> collects, uses and protects your personal data.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Last updated: January 2025</p>

      <h2>1. Introduction</h2>
      <p><?= e(SITE_NAME) ?> ("we", "our", "ours") is committed to protecting the privacy of visitors and clients. This Privacy Policy explains what personal data we collect, why we collect it and how we process it when you use our website and services.</p>

      <h2>2. Information we collect</h2>
      <ul>
        <li>Identity data — name, date of birth, government-issued ID documents for registration and KYC/AML compliance.</li>
        <li>Contact data — email address, phone number, postal address.</li>
        <li>Financial data — payment details, transaction history, information on the source of funds.</li>
        <li>Technical data — IP address, browser type, device identifiers, cookies and usage analytics.</li>
      </ul>

      <h2>3. How we use your data</h2>
      <ul>
        <li>To verify identity and meet regulatory obligations.</li>
        <li>To provide, maintain and improve our platform and services.</li>
        <li>To process payments and detect fraudulent activity.</li>
        <li>To communicate with you about your account, updates and support requests.</li>
        <li>To send marketing communications when you have consented (you may unsubscribe at any time).</li>
      </ul>

      <h2>4. Legal basis</h2>
      <p>We process personal data based on one or more of the following lawful grounds: performance of a contract, compliance with a legal obligation, our legitimate interests, or your consent.</p>

      <h2>5. Sharing and disclosure</h2>
      <p>We may share personal data with regulated payment providers, KYC/AML verification partners, cloud infrastructure providers, professional advisers and competent authorities when required by law. We do not sell personal data.</p>

      <h2>6. International transfers</h2>
      <p>When personal data is transferred outside your jurisdiction, we ensure appropriate safeguards are in place, including standard contractual clauses.</p>

      <h2>7. Data retention</h2>
      <p>We retain personal data for as long as needed to provide services and meet legal, regulatory and accounting requirements — typically at least five years after account closure.</p>

      <h2>8. Your rights</h2>
      <p>Subject to applicable law, you may request access, correction, erasure, restriction or portability of your personal data, and may object to certain processing. To exercise these rights, contact us at the address below.</p>

      <h2>9. Cookies</h2>
      <p>We use essential and analytics cookies to operate the site and understand usage. You can manage cookies through your browser settings.</p>

      <h2>10. Security</h2>
      <p>We apply administrative, technical and physical safeguards designed to protect personal data against unauthorised access, disclosure, alteration or destruction. No system is perfectly secure, and we cannot guarantee absolute security.</p>

      <h2>11. Changes</h2>
      <p>We may update this Policy from time to time. The latest version will always be available on this page with the updated date.</p>

      <h2>12. Contact</h2>
      <p>For privacy questions or to exercise your rights, contact the <?= e(SITE_NAME) ?> Data Protection team via our <a href="<?= page_url('contacts.php') ?>">contact page</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Back to home</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. All rights reserved ·
      <a href="<?= page_url('privacy.php') ?>">Privacy</a> ·
      <a href="<?= page_url('conditions.php') ?>">Terms</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
