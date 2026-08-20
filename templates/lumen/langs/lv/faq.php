<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Bieži uzdotie jautājumi');
$page_description = 'Atbildes par finansējumu, drošību, AI atziņām un sākšanu vietnē ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Pirms konta finansēšanas</h1>
      <p class="lead">Tiešas atbildes par piekļuvi, drošību un to, kā AI palīdz platformā.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Kā sākt?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Izveidojiet kontu, pabeidziet īsu verifikāciju un iemaksājiet no <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Diagrammas, rīki un vadīta ievadīšana atbloķējas uzreiz pēc tam.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kā AI palīdz man tirgoties?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> rāda īsas tirgus atziņas vienkāršā valodā. Jūs vienmēr izlemjat, vai rīkoties.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kā mans konts ir aizsargāts?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Savienojumi izmanto SSL šifrēšanu. Mēs nekad neprasām nevajadzīgas atļaujas — saglabājiet pieteikšanās datus privātus.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Vai ir slēptas komisijas?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Komisijas tiek rādītas pirms apstiprināšanas. Nav negaidītu maksājumu par iemaksām vai izmaksām, ja tiek ievēroti noteikumi.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
