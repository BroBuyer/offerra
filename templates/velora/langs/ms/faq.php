<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Jawapan tentang pembiayaan, keselamatan, cerapan AI dan cara bermula di ' . SITE_NAME . '.';
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
      <h1>Soalan lazim</h1>
      <p class="lead">Jawapan terus tentang pendaftaran, keselamatan dan bagaimana AI membantu di platform.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Bagaimana saya bermula?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Cipta akaun, lengkapkan pengesahan ringkas, dan deposit daripada <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Carta, alat dan pendaftaran berpandu dibuka serta-merta selepas itu. Anda juga boleh bersembang dengan Lisa di sudut.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Bagaimana AI membantu saya berdagang?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> memaparkan cerapan pasaran ringkas dalam bahasa mudah. Anda sentiasa memutuskan sama ada untuk bertindak.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Bagaimana akaun saya dilindungi?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Sambungan menggunakan penyulitan SSL. Kami tidak pernah meminta kebenaran yang tidak perlu — pastikan log masuk anda peribadi.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Adakah terdapat yuran tersembunyi?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Yuran dipaparkan sebelum anda mengesahkan. Tiada caj mengejut pada deposit atau pengeluaran apabila terma dipatuhi.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Siapakah Lisa dalam widget sembang?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisa ialah pembantu pendaftaran kami. Dia membimbing anda melalui kuiz ringkas dan membantu anda menghantar permintaan akaun yang selamat.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
