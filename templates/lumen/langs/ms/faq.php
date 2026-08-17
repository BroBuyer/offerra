<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Soalan lazim');
$page_description = 'Jawapan tentang pembiayaan, keselamatan, insight AI dan cara mula di ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Soalan lazim</p>
      <h1>Sebelum anda membiayai akaun</h1>
      <p class="lead">Jawapan terus tentang akses, keselamatan dan bagaimana AI membantu di platform.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Bagaimana saya bermula?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Cipta akaun, lengkapkan pengesahan singkat, dan deposit dari <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Carta, alat dan onboarding berpandu dibuka selepas itu.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Bagaimana AI membantu saya berdagang?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> memaparkan insight pasaran pendek dalam bahasa mudah. Anda sentiasa tentukan sama ada mahu bertindak.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Bagaimana akaun saya dilindungi?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Sambungan menggunakan penyulitan SSL. Kami tidak meminta kebenaran yang tidak perlu — kekalkan log masuk anda peribadi.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Adakah terdapat yuran tersembunyi?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Yuran ditunjukkan sebelum anda sahkan. Tiada caj mengejut pada deposit atau pengeluaran apabila terma dipatuhi.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
