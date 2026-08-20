<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('BUJ');
$page_description = 'Atbildes par finansēšanu, drošību, AI ieskatiem un sākšanu ar ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';

$faq_chevron = '<svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">BUJ</p>
      <h1>Bieži uzdotie jautājumi</h1>
      <p class="lead">Tiešas atbildes par reģistrāciju, drošību un to, kā AI palīdz platformā.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Kā sākt?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Izveidojiet kontu, aizpildiet īsu verifikāciju un iemaksājiet no <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Grafiki, rīki un vadīta ievadīšana atbloķējas uzreiz pēc tam. Varat arī tērzēt ar Lisu stūrī.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kā AI man palīdz tirgoties?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> parāda īsus tirgus ieskatus vienkāršā valodā. Jūs vienmēr izlemjat, vai rīkoties.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kā mans konts ir aizsargāts?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Savienojumi izmanto SSL šifrēšanu. Mēs nekad neprasām liekas atļaujas — saglabājiet pieteikšanās datus privātus.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Vai ir slēptas maksas?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Maksas tiek rādītas pirms apstiprināšanas. Nav negaidītu maksājumu par iemaksām vai izņemšanām, kad tiek ievēroti noteikumi.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kas ir Lisa tērzēšanas logrīkā?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisa ir mūsu ievadīšanas asistente. Viņa jūs izved cauri īsam testam un palīdz iesniegt drošu konta pieprasījumu.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
