<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'About ' . SITE_NAME . ' | Comprehensive Trading Platform Insights';
$page_description = 'Discover ' . SITE_NAME . '\'s mission, technology, and commitment to a secure trading experience.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('About Us', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="breadcrumb"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Home</a>
            <span class="breadcrumb-item">Who We Are</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Our Identity</h1>
                      <p class="lead">Platform, features, and responsible trading.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> merges market access with analytical tools on a single, streamlined platform.</p>
            <p>We focus on robust security measures and transparent, easy-to-understand processes.</p>
            <p>Please be aware trading carries risks and returns cannot be guaranteed.</p>
            <p>Our onboarding is straightforward: register your account, confirm your email, deposit a minimum of <?= e(money_min()) ?>, then access your dashboard. Switch between manual and assisted modes, setting limits and managing risk to suit your profile.</p>            <p>Support is available to help with questions on accounts, payments, withdrawals, and platform functions. It does not provide personalised investment advice. For urgent concerns during active trades, please provide your account email and dashboard status.</p>            <p>Both newcomers and experienced traders find a clear environment: tutorials and initial guidance on one side, advanced controls and performance tracking on the other. We measure <?= e(SITE_NAME) ?> by the quality of experience — not aggressive marketing. Before registering, please review FAQs, terms, and privacy policies to understand risks, withdrawal timings, and account requirements.</p>            <p>At <?= e(SITE_NAME) ?>, you’ll find guided workflows, monitoring tools, and operational support focused on transparent account and payment processes, without promising specific market results.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Sign Up Today</a>
            </p>
          </div>
        </div>
      </div>
      <!-- support -->
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 lg:grid-cols-2">
          <div
            class="border-primary rounded-custom relative flex flex-col justify-between gap-6 overflow-hidden lg:border lg:p-8"
          >
            <h2>How can we help you today?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Create Account';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
