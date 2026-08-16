<?php
require_once __DIR__ . '/includes/config.php';

$page_title = str_replace('Althera Pro', SITE_NAME, "Terms &amp; Conditions | User Agreement with Althera Pro");
$page_description = str_replace('Althera Pro', SITE_NAME, "Review Althera Pro’s platform terms, trading rules, and customer support policies.");
$page_canonical = page_url("conditions.php");
$active_page = "terms";


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="breadcrumb" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Homepage</a>
            <span class="breadcrumb-item">Terms & Conditions</span>
        </nav>
        <h1>Terms and Conditions</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Introduction</h2>
    <p>This website provides information about third-party trading services. By proceeding, you agree to these Terms and our Privacy Policy. Terms may be updated.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. User Eligibility</h2>
    <p>You must be at least 18 years old and legally permitted to accept these Terms, in accordance with your local laws. We disclaim liability for improper platform use.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Access Limitations</h2>
    <p>Access may be restricted in certain regions or where regulatory limitations exist. Some services may be unavailable in specific locations.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Appropriate Use</h2>
    <p>Unauthorized use of this website is prohibited, including illegal activities, infringement of rights, distribution of harmful content, or automated bots. Violations can result in account suspension.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Intellectual Property</h2>
    <p>All content, trademarks, and intellectual property are owned by us or our affiliates. Site usage is personal; copying or modifying content is not permitted.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Liability Disclaimer</h2>
    <p>Services and the website are provided "as is." We accept no responsibility for errors, losses, or damages resulting from use.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Third-Party Content</h2>
    <p>Third-party content or links may be included but are not guaranteed for accuracy or availability; please verify independently.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. External Links</h2>
    <p>External links are offered for convenience. We do not endorse or control these sites and accept no liability for their content.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Additional Terms</h2>
    <p>We may update services and Terms at our discretion. These Terms represent the complete agreement. Failure to enforce rights does not imply waiver.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
