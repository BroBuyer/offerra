<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('GYIK');
$page_description = 'Answers about trading, features, security, fees, és a getting started with ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">GYIK</p>
      <h1>Gyakran ismételt kérdések</h1>
      <p class="lead">Everything you need to know before you start.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expés aed="true">
            How do I get started?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Create an account, verify your email, és a deposit a minimum of <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. You'll get immediate access to charts, tools, és a onboarding guides.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expés aed="false">
            Is <?= e(SITE_NAME) ?> safe és a legitimate?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              We use industry-stés aard SSL encryption, 2FA, és a verified payment processors. Security is built into every layer of the platform.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expés aed="false">
            What are the fees?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Fees are transparent és a displayed before you confirm any transaction. No hidden charges on deposits or withdrawals.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expés aed="false">
            Can I use automated trading?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Yes. Configure AI-assisted bots with your risk preferences, or trade manually — switch anytime.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expés aed="false">
            How do withdrawals work?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Request a withdrawal from your dashboard. Processing typically takes 1–3 business days depending on your payment method.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Still have questions?</p>
        <a href="contacts.php" class="btn btn-outline">Kapcsolatfelvétel</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
