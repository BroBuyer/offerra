<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Privacy Policy');
$page_description = 'How ' . SITE_NAME . ' collects, uses and protects your personal data.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
require __DIR__ . '/includes/head.php';
?>
<header class="ra-header">
  <div class="ra-shell ra-header__inner">
    <a class="ra-brand" href="<?= page_url() ?>"><?= e(SITE_NAME) ?></a>
  </div>
</header>
<main class="ra-legal">
  <div class="ra-shell">
    <div class="ra-card">
      <h1>Privacy Policy</h1>
      <p class="meta">Last updated: January 2026</p>

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
      <p>Subject to applicable law, you may request access, correction, erasure, restriction or portability of your personal data, and may object to certain processing. To exercise these rights, contact us at <?= e(SUPPORT_EMAIL) ?>.</p>

      <h2>9. Cookies</h2>
      <p>We use essential and analytics cookies to operate the site and understand usage. You can manage cookies through your browser settings.</p>

      <h2>10. Security</h2>
      <p>We apply administrative, technical and physical safeguards designed to protect personal data against unauthorised access, disclosure, alteration or destruction. No system is perfectly secure, and we cannot guarantee absolute security.</p>

      <h2>11. Changes</h2>
      <p>We may update this Policy from time to time. The latest version will always be available on this page with the updated date.</p>

      <h2>12. Contact</h2>
      <p>For privacy questions or to exercise your rights, contact the <?= e(SITE_NAME) ?> Data Protection team at <?= e(SUPPORT_EMAIL) ?>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Back to home</a></p>
    </div>
  </div>
</main>
<footer class="ra-footer">
  <div class="ra-shell ra-footer__inner">
    <p><?= e(SITE_NAME) ?> ©<?= date('Y') ?>. All rights reserved.</p>
    <p>
      <a href="<?= page_url('conditions.php') ?>">Terms of Use</a>
      <a href="<?= page_url('privacy.php') ?>">Privacy Policy</a>
    </p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
