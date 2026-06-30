<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Răspunsuri despre tranzacționare, funcționalități, securitate, comisioane și cum să începi cu ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Întrebări frecvente</h1>
      <p class="lead">Tot ce trebuie să știi înainte de a începe.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Cum pot începe?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Creează un cont, verifică-ți emailul și depune minimum <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Vei avea acces imediat la grafice, instrumente și ghiduri introductive.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <?= e(SITE_NAME) ?> este sigur și de încredere?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Folosim criptare SSL, autentificare în doi pași și procesatori de plăți verificați. Securitatea este integrată la fiecare nivel al platformei.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Care sunt comisioanele?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Comisioanele sunt transparente și afișate înainte de a confirma orice operațiune. Fără costuri ascunse la depuneri sau retrageri.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Pot folosi tranzacționarea automată?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Da. Poți configura roboți cu asistență AI în funcție de profilul tău de risc, sau poți opera manual — poți schimba oricând.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Cum funcționează retragerile?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Solicită o retragere din zona ta personală. Procesarea durează de obicei 1–3 zile lucrătoare, în funcție de metoda de plată.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Mai ai întrebări?</p>
        <a href="contacts.php" class="btn btn-outline">Contactează asistența</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
