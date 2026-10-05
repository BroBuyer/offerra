<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Terms of use | ' . SITE_NAME;
$page_description = 'Terms of use for the ' . SITE_NAME . ' platform.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text">-->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Terms of use</h1>
            <p class="bold-title">1. Introduction</p>
            <p>1.1. Acceptance of these terms is required to use our services.</p>
            <p>1.2. These terms constitute a legally binding agreement.</p>
            <p>1.3. Continued use of the website means acceptance of the terms.</p>
            <p>
              1.4. For questions you can contact us at
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Right to use</p>
            <p>2.1. You must be at least 18 years old to use the services.</p>
            <p>2.1.1. You must live in a country where the services are legal.</p>
            <p>2.1.2. You must not be on a sanctions list.</p>
            <p>2.1.3. You must have legal capacity to enter into contracts.</p>
            <p>2.2. We are not responsible for use by inappropriate users.</p>
            <p class="bold-title">3. User account</p>
            <p>3.1. You are responsible for the security of your account.</p>
            <p>3.2. Do not share your password with third parties.</p>
            <p class="bold-title">4. Prohibited activities</p>
            <p>4.1. Use of the services for illegal purposes is not permitted.</p>
            <p>4.1.1. Money laundering is strictly prohibited.</p>
            <p>4.1.2. Fraud will be reported to the relevant authorities.</p>
            <p>4.1.3. Use of bots or automation software is not permitted.</p>
            <p>4.1.4. Any attempt to manipulate the system will be investigated.</p>
            <p>4.1.5. Spreading false information is prohibited.</p>
            <p>4.1.6. Attempts to obstruct investigations are not permitted.</p>
            <p>4.1.7. Threats to other users are prohibited.</p>
            <p>4.1.8. Any illegal activity will be penalized.</p>
            <p>4.1.9. Attempts to circumvent guidelines are not permitted.</p>
            <p>4.1.10. Any attempt to abuse the system is taken seriously.</p>
            <p class="bold-title">5. Intellectual property</p>
            <p>5.1. All content on the website is our intellectual property.</p>
            <p>5.2. Users do not acquire rights to website content.</p>
            <p>5.3. Content may not be copied without permission.</p>
            <p>5.4. Third parties are not permitted to modify content.</p>
            <p class="bold-title">6. Limitation of liability</p>
            <p>6.1. Use of the services is at your own risk.</p>
            <p>6.2. We are not responsible for losses arising from use of the services.</p>
            <p>6.3. Any loss arising from use of the website is the user&rsquo;s responsibility.</p>
            <p>6.4. We do not accept liability for damage caused by use of the website.</p>
            <p>6.5. Technical problems are not our responsibility.</p>
            <p class="bold-title">7. Information</p>
            <p>7.1. By using the services you agree to be contacted.</p>
            <p>7.2. Information is treated confidentially.</p>
            <p>7.3. Users are advised to keep records.</p>
            <p class="bold-title">8. Links and additional resources</p>
            <p>8.1. For more information see our policies.</p>
            <p>8.2. External links do not constitute endorsement.</p>
            <p>8.3. We recommend verifying sources before use.</p>
            <p class="bold-title">9. General provisions</p>
            <p>9.1. We reserve the right to modify the services at any time.</p>
            <p>9.2. Terms may change at any time.</p>
            <p>9.3. By using the services you accept these terms.</p>
            <p>9.4. Oral agreements are not valid.</p>
            <p>9.5. Unused rights are not considered waived.</p>
            <p>
              9.6. If a provision is declared invalid, the remaining provisions remain in effect.
            </p>
            <p>9.7. Services may be managed by external providers.</p>
            <p>
              9.8. <?= e(geo_country_name()) ?> law applies to these terms. All disputes will be submitted to the
              competent court in <?= e(geo_country_name()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
