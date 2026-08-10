<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Answers on funding, security, AI insights, and getting started on ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';

$faq_chevron = '<svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Frequently asked questions</h1>
      <p class="lead">Straight answers on registration, safety, and how AI helps on the platform.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            How do I get started?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Create an account, complete a short verification, and deposit from <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Charts, tools, and guided onboarding unlock right after. You can also chat with Lisa in the corner.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            How does AI help me trade?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> surfaces short market insights in plain language. You always decide whether to act.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            How is my account secured?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Connections use SSL encryption. We never ask for unnecessary permissions — keep your login private.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Are there hidden fees?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Fees are shown before you confirm. No surprise charges on deposits or withdrawals when terms are followed.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Who is Lisa in the chat widget?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisa is our onboarding assistant. She walks you through a short quiz and helps you submit a secure account request.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
