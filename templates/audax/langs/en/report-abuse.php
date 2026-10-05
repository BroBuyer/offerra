<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Report abuse | ' . SITE_NAME;
$page_description = 'Report abuse or suspicious activity on ' . SITE_NAME . '.';
$page_canonical = page_url('report-abuse.php');
$active_page = 'report-abuse';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text"> -->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Report abuse</h1>
            <p class="bold-title">1. Reporting abuse</p>
            <p>
              1.1. If you have encountered inappropriate content on our website, please report it to
              us via our contact form.
            </p>
            <p>Contact us: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. In this section you can provide information about any abusive behavior or content
              that violates our policies.
            </p>
            <p>
              1.3. Your report is important to us. Please provide specific details so we can
              adequately investigate the incident.
            </p>
            <p>By submitting a report you also agree to our privacy policy.</p>
            <p class="bold-title">2. Authorization to report</p>
            <p>
              2.1. If you have become a victim of abuse or have noticed inappropriate behavior, you
              have the right to report it.
            </p>
            <p>2.1.1. You must be at least 18 years old to submit a report.</p>
            <p>2.1.2. Make sure your report is truthful and based on facts.</p>
            <p>2.1.3. Use of the reporting form must be legal in your country.</p>
            <p>2.2. We are not responsible for false or malicious reports.</p>
            <p class="bold-title">3. Reporting procedure</p>
            <p>3.1. We reserve the right to investigate all abuse reports.</p>
            <p>3.2. If a report is deemed valid, we will take the necessary measures.</p>
            <p class="bold-title">4. Prohibited activities when reporting</p>
            <p>4.1. Use of the form for malicious purposes is not permitted.</p>
            <p>4.1.1. Submitting false or misleading reports is not permitted.</p>
            <p>4.1.2. Harassing other users through the reporting system is not permitted.</p>
            <p>4.1.3. Use of bots or automation to submit reports is prohibited.</p>
            <p>4.1.4. Any attempt to manipulate the reporting system will be investigated.</p>
            <p>4.1.5. Use of the system to spread false information is prohibited.</p>
            <p>4.1.6. Attempts to obstruct a report investigation are not permitted.</p>
            <p>4.1.7. Use of the system to issue threats is not permitted.</p>
            <p>4.1.8. Any illegal activity related to reporting will be penalized.</p>
            <p>4.1.9. Attempts to circumvent reporting guidelines are not permitted.</p>
            <p>4.1.10. Any attempt to abuse the reporting system is taken seriously.</p>
            <p class="bold-title">5. Intellectual property rights when reporting</p>
            <p>
              5.1. Content you submit when reporting abuse does not grant you any ownership rights.
            </p>
            <p>5.2. Users do not acquire rights to website content by submitting a report.</p>
            <p>5.3. Reports are used exclusively for investigative purposes.</p>
            <p>5.4. Third parties may not copy or modify reports.</p>
            <p class="bold-title">6. Limitation of liability when reporting</p>
            <p>6.1. By submitting a report you assume responsibility for its content.</p>
            <p>6.2. We are not responsible for consequences of submitted reports.</p>
            <p>6.3. Any loss arising from a report is the user&rsquo;s responsibility.</p>
            <p>6.4. We do not accept liability for damage caused by reports.</p>
            <p>
              6.5. Technical problems related to the reporting system are not our responsibility.
            </p>
            <p class="bold-title">7. Information about the reporting procedure</p>
            <p>
              7.1. By using the reporting system you agree that we may contact you for more
              information.
            </p>
            <p>7.2. Reports are treated confidentially.</p>
            <p>7.3. Users are advised to keep a copy of their reports.</p>
            <p class="bold-title">8. Additional links and resources</p>
            <p>8.1. For more information on how to report abuse, see our policies.</p>
            <p>8.2. Links to external sources do not constitute our endorsement.</p>
            <p>8.3. We advise you to verify each source before using it.</p>
            <p class="bold-title">9. General provisions on reports</p>
            <p>
              9.1. We reserve the right to modify, suspend, or discontinue the reporting procedure
              at any time.
            </p>
            <p>
              9.2. The terms of this reporting procedure may change at any time. Continued use of
              the reporting service after such changes constitutes acceptance of the new terms.
            </p>
            <p>9.3. By submitting a report the user fully accepts these terms.</p>
            <p>
              9.4. Any agreement or statement, written or oral, that does not fall under the
              specific points of these terms is legally invalid and not binding on either party.
            </p>
            <p>
              9.5. Any right granted by these terms that is not exercised, whether due to consent,
              negligence, or inability, is considered waived. Partial or full exercise of a right
              does not exclude or limit its later exercise.
            </p>
            <p>
              9.6. If a competent court declares a provision of these terms null and void, it shall
              be considered void. The remainder of the terms remains, however, fully in effect.
            </p>
            <p>
              9.7. It is acknowledged that these terms enable operation of the website by third
              parties, who may transfer their rights and obligations. The user may not transfer
              their rights and obligations to another party.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
