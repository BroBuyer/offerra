<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Pertanyaan umum');
$page_description = 'Jawapan tentang pembiayaan, keamanan, insight AI dan cara mula di ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Pertanyaan umum</p>
      <h1>Sebelum anda membiayai akun</h1>
      <p class="lead">Jawapan terus tentang akses, keamanan dan bagaimana AI membantu di platform.</p>
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
              Buat akun, lengkapkan verifikasi singkat, dan deposit dari <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Carta, alat dan onboarding berpandu dibuka selepas itu.
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
              <?= e(SITE_NAME) ?> memaparkan insight pasar pendek dalam bahasa mudah. Anda sentiasa tentukan sama ada ingin bertindak.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Bagaimana akun saya dilindungi?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Sambungan menggunakan penyulitan SSL. Kami tidak meminta kebenaran yang tidak perlu — kekalkan log masuk anda pribadi.
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
              Yuran ditunjukkan sebelum anda sahkan. Tiada caj mengejut pada deposit atau pengeluaran ketika terma dipatuhi.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
