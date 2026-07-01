<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Odpovědi na otázky o obchodování, funkcích, bezpečnosti, poplatcích a začátku s ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Často kladené otázky</h1>
      <p class="lead">Vše, co potřebujete vědět před začátkem.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Jak mohu začít?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Vytvořte si účet, ověřte e-mail a vložte minimálně <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Okamžitě získáte přístup ke grafům, nástrojům a průvodci onboardingem.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Je <?= e(SITE_NAME) ?> bezpečná a důvěryhodná?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Používáme SSL šifrování, dvoufázové ověření a ověřené platební procesory. Bezpečnost je integrována na všech úrovních platformy.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jaké jsou poplatky?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Poplatky jsou transparentní a zobrazují se před potvrzením každé transakce. Žádné skryté poplatky za vklady ani výběry.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Mohu využívat automatizované obchodování?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ano. Nastavte AI asistované boty podle svého rizikového profilu nebo obchodujte manuálně — mezi režimy můžete kdykoli přepínat.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jak fungují výběry?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Výběr zadáte ze svého dashboardu. Zpracování obvykle trvá 1 až 3 pracovní dny podle zvolené platební metody.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Máte ještě otázky?</p>
        <a href="contacts.php" class="btn btn-outline">Kontaktovat podporu</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
