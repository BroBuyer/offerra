<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Terms of Use');
$page_description = 'The rules that apply when you access or use ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
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
      <span class="eyebrow">Legal</span>
      <h1>Terms of Use</h1>
      <p class="lede">The rules that apply when you access or use <?= e(SITE_NAME) ?>.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Last updated: January 2025</p>

      <h2>1. Acceptance of Terms</h2>
      <p>By accessing or using the website and services of <?= e(SITE_NAME) ?>, you agree to be bound by these Terms of Use. If you do not agree, do not use the services.</p>

      <h2>2. Eligibility</h2>
      <p>You must be at least 18 years of age (or the age of majority in your jurisdiction) and have legal capacity to enter a binding contract. The services are not offered to residents of restricted jurisdictions where such an offer would be illegal.</p>

      <h2>3. Account registration</h2>
      <p>You agree to provide accurate, current and complete information during registration and to keep this information up to date. You are responsible for maintaining the confidentiality of your credentials and for all activity on your account.</p>

      <h2>4. Services</h2>
      <p><?= e(SITE_NAME) ?> provides technological tools and educational information related to online investing. We are not your financial adviser. Nothing on this site constitutes personalised investment advice, tax advice or a solicitation to buy or sell any financial instrument.</p>

      <h2>5. Fees</h2>
      <p>Applicable fees, spreads and commissions are disclosed on the platform or in the applicable fee schedule. You are responsible for any taxes arising from your activities.</p>

      <h2>6. Prohibited conduct</h2>
      <ul>
        <li>Using the services for money laundering, terrorist financing, market manipulation or any illegal purpose.</li>
        <li>Impersonating another person or providing false identity information.</li>
        <li>Attempting to interfere with, compromise or reverse-engineer any part of the platform.</li>
        <li>Using automated tools to access the services other than as expressly permitted.</li>
      </ul>

      <h2>7. Intellectual property</h2>
      <p>All content, trademarks, software and materials on the site are the property of <?= e(SITE_NAME) ?> or its licensors and are protected by applicable intellectual property laws. You are granted a limited, non-exclusive, revocable licence to use the services for their intended purpose.</p>

      <h2>8. Third-party services</h2>
      <p>The platform may contain links to or integrate third-party services. We are not responsible for such services, their availability, accuracy or content.</p>

      <h2>9. Disclaimers</h2>
      <p>The services are provided “as is” and “as available” without warranties of any kind. Trading involves substantial risk of loss. See our <a href="<?= page_url('conditions.php') ?>">Risk disclosure</a> for details.</p>

      <h2>10. Limitation of liability</h2>
      <p>To the maximum extent permitted by law, <?= e(SITE_NAME) ?> shall not be liable for any indirect, incidental, special, consequential or punitive damages, or any loss of profits or revenue, arising from your use of the services.</p>

      <h2>11. Indemnification</h2>
      <p>You agree to indemnify and hold harmless <?= e(SITE_NAME) ?>, its affiliates and staff from any claim or demand arising from your breach of these Terms or your misuse of the services.</p>

      <h2>12. Suspension and termination</h2>
      <p>We may suspend or terminate access to the services at any time, with or without notice, if we believe you have violated these Terms or applicable law.</p>

      <h2>13. Governing law</h2>
      <p>These Terms are governed by the laws applicable at the seat of <?= e(SITE_NAME) ?>, without regard to conflict-of-law principles.</p>

      <h2>14. Changes</h2>
      <p>We may change these Terms from time to time. Continued use of the services after changes constitutes acceptance of the revised Terms.</p>

      <h2>15. Contact</h2>
      <p>Questions about these Terms may be sent via our <a href="<?= page_url('contacts.php') ?>">contact page</a>.</p>

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
