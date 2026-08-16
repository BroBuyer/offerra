<?php
require_once __DIR__ . '/includes/config.php';

$page_title = str_replace('Althera Pro', SITE_NAME, "Privacy Overview | Data Protection at Althera Pro");
$page_description = str_replace('Althera Pro', SITE_NAME, "Understand how Althera Pro safeguards your data through our detailed Privacy Policy.");
$page_canonical = page_url("privacy.php");
$active_page = "privacy";


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="breadcrumb"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Home</a>
  <span class="breadcrumb-item">Privacy Policy</span>
</nav>
<h1>Our Dedication to Protecting Your Privacy</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Last updated on: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> ("We", "Us"), protecting your personal data is a priority. This statement explains how we collect, use, and safeguard your information.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Transparency in Data Handling</p>
    <p>
      We aim for openness about our data handling. Contact us at      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Purpose of Data Usage</p>
    <p>We use your information to provide services, enhance our platform, and comply with legal obligations.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Access to Your Data</p>
    <p>You may at any time request access to, correction, or deletion of your personal data.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Security Practices</p>
    <p>We apply robust security measures but cannot promise absolute protection of your personal data.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Information We Gather</h2>
    <p>We gather information including IP addresses, device specifics, browser types, and any data you provide directly.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Grounds for Processing</h2>
    <p>Our handling of your data is based on your consent, legitimate interests, and compliance with applicable laws.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Sharing of Data</h2>
    <p>Your details might be shared with trusted partners, service providers, and legal authorities when legally required.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Cookie Usage</h2>
    <p>Cookies support website functionality and user analysis, but you can choose to disable them if you wish.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Data Retention Period</h2>
    <p>We retain your information only for as long as necessary to fulfil the outlined purposes.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. International Data Transfers</h2>
    <p>Data may be transferred across borders with appropriate safeguards in place.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Links to Other Sites</h2>
    <p>We do not assume responsibility for external websites linked through our platform or their practices.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Updates to This Policy</h2>
    <p>This privacy policy may be updated from time to time.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Your Legal Rights</h2>
    <p>You have rights to access, amend, erase, limit data processing, move your personal info, withdraw consent, and file complaints if needed.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
