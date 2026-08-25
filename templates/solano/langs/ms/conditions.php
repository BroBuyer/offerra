<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Terma Penggunaan ᐉ ' . SITE_NAME;
$page_description = 'Terms of use for ' . SITE_NAME;
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Undang-undang</span>
    <h1>Terma Penggunaan</h1>
    <p class="etpy2">The rules that apply when you access or use <?= e(SITE_NAME) ?>.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Kemas kini terakhir: January 2025</p>

    <h2>1. Acceptance of Terms</h2>
    <p>By accessing or using the website and services of <?= e(SITE_NAME) ?>, you agree to be bound by these Terma Penggunaan. If you do not agree, do not use the services.</p>

    <h2>2. Eligibility</h2>
    <p>You must be at least 18 years of age (or the age of majority in your jurisdiction) and legally capable of entering a binding contract. The services are not offered to residents of restricted jurisdictions where such an offer would be unlawful.</p>

    <h2>3. Account registration</h2>
    <p>You agree to provide accurate, current and complete information during registration and to keep this information up to date. You are responsible for maintaining the confidentiality of your credentials and for all activity on your account.</p>

    <h2>4. Services</h2>
    <p><?= e(SITE_NAME) ?> provides technological tools and educational information related to online investing. We are not your financial adviser. Nothing on this site constitutes personalised investment advice, tax advice or a solicitation to buy or sell any financial instrument.</p>

    <h2>5. Fees</h2>
    <p>Applicable fees, spreads and commissions are disclosed on the platform or in the applicable fee schedule. You are responsible for any tax arising from your activities.</p>

    <h2>6. Prohibited conduct</h2>
    <ul>
      <li>Using the services for money laundering, terrorist financing, market manipulation or any unlawful purpose.</li>
      <li>Impersonating another person or providing false identity information.</li>
      <li>Attempting to interfere with, compromise or reverse-engineer any part of the platform.</li>
      <li>Using automated tools to access the services other than as expressly permitted.</li>
    </ul>

    <h2>7. Intellectual property</h2>
    <p>All content, trade marks, software and materials on the website are the property of <?= e(SITE_NAME) ?> or its licensors and are protected by applicable intellectual property laws. You are granted a limited, non-exclusive, revocable licence to use the services for their intended purpose.</p>

    <h2>8. Third-party services</h2>
    <p>The platform may contain links to or integrate with third-party services. We are not responsible for such services, nor for their availability, accuracy or content.</p>

    <h2>9. Disclaimers</h2>
    <p>The services are provided "as is" and "as available" without warranties of any kind. Trading involves a substantial risk of loss. See our <a href="<?= page_url('risk-disclosure.php') ?>" style="color:var(--accent)">Pendedahan risiko</a> for further details.</p>

    <h2>10. Limitation of liability</h2>
    <p>To the maximum extent permitted by law, <?= e(SITE_NAME) ?> shall not be liable for any indirect, incidental, special, consequential or punitive damages, or any loss of profits or revenue, arising from your use of the services.</p>

    <h2>11. Indemnification</h2>
    <p>You agree to indemnify and hold harmless <?= e(SITE_NAME) ?>, its affiliates and staff from any claim or demand arising from your breach of these Terms or your misuse of the services.</p>

    <h2>12. Suspension and termination</h2>
    <p>We may suspend or terminate access to the services at any time, with or without notice, if we believe you have breached these Terms or applicable law.</p>

    <h2>13. Governing law</h2>
    <p>These Terms are governed by the laws applicable at the seat of <?= e(SITE_NAME) ?>, without regard to conflict-of-law principles.</p>

    <h2>14. Changes</h2>
    <p>We may amend these Terms from time to time. Continued use of the services after changes constitutes acceptance of the revised Terms.</p>

    <h2>15. Hubungi</h2>
    <p>Questions about these Terms may be sent through our contact page.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Kembali ke laman utama</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
