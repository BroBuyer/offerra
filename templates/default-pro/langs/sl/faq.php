<?php
require_once __DIR__ . '/includes/config.php';

$brand = SITE_NAME;
$audience = market_audience();

$page_title = page_title_lead('FAQ');
$page_description = 'Pogosta vprašanja o ' . $brand . ' — kako trgovalna platforma z umetno inteligenco deluje za ' . $audience
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
      <h1>Pogosta vprašanja o <?= e($brand) ?></h1>
      <p class="lead">Kar <?= e($audience) ?> običajno vprašajo pred odprtjem računa <?= e($brand) ?>.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Kaj je <?= e($brand) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
 <?= e($brand) ?> je trgovalna platforma z umetno inteligenco za <?= e($audience) ?>. V realnem času analizira trge in na eni nadzorni plošči združi grafikone, opozorila in orodja računa.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako začnem z <?= e($brand) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ustvarite račun <?= e($brand) ?>, potrdite e-pošto in položite najmanj <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Nato v <?= e($brand) ?> dobite grafikone, orodja in vodnike za uvajanje.
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
