<?php
require_once __DIR__ . '/includes/config.php';

$brand = SITE_NAME;
$audience = market_audience();

$page_title = page_title_lead('FAQ');
$page_description = 'FAQ for ' . $brand . ' — how the AI trading platform works for ' . $audience
    . ', security, fees, markets, and how to open an account.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow"><?= e($brand) ?> FAQ</p>
      <h1>Vanliga frågor about <?= e($brand) ?></h1>
      <p class="lead">What <?= e($audience) ?> usually ask before opening a <?= e($brand) ?> account.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            What is <?= e($brand) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              <?= e($brand) ?> is an AI-assisted trading platform for <?= e($audience) ?>. It analyses markets in real time and puts charts, alerts, and account tools on one dashboard.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            How do I get started with <?= e($brand) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Create a <?= e($brand) ?> account, verify your email, and deposit a minimum of <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. You then get charts, tools, and onboarding guides inside <?= e($brand) ?>.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Is <?= e($brand) ?> safe?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e($brand) ?> uses SSL, 2FA, and verified payment processors. Trading still involves a risk of losing capital.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            What are <?= e($brand) ?> fees?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e($brand) ?> shows fees before you confirm a transaction. No hidden charges on deposits or withdrawals beyond what the <?= e($brand) ?> screen lists.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Can I use automation on <?= e($brand) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Yes. Configure <?= e($brand) ?> AI-assisted bots with your risk preferences, or trade manually — switch anytime inside <?= e($brand) ?>.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            How do <?= e($brand) ?> withdrawals work?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Request a withdrawal from the <?= e($brand) ?> dashboard. Processing typically takes 1–3 business days depending on the method.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Does <?= e($brand) ?> work on mobile?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Yes. <?= e($brand) ?> is responsive. Watchlists and alerts stay in sync between phone and browser.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            How do I contact <?= e($brand) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Use the <?= e($brand) ?> <a href="contacts.php">contact page</a> for account, deposit, and platform questions.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
