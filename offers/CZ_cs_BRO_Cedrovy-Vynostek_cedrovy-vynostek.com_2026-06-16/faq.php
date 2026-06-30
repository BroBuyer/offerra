<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Odpovědi na otázky o obchodování, funkcích, bezpečnosti, poplatcích a jak začít s ' . SITE_NAME . '.';
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
              Vytvořte si účet, ověřte svůj e-mail a vložte minimálně <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Získáte okamžitý přístup k grafům, nástrojům a úvodním průvodcům.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Je <?= e(SITE_NAME) ?> bezpečné a spolehlivé?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Používáme SSL šifrování, 2FA a ověřené platební procesory. Bezpečnost je integrována na každé úrovni platformy.
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
              Poplatky jsou transparentní a zobrazeny před potvrzením jakékoli operace. Žádné skryté náklady za vklady nebo výběry.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Mohu používat automatické obchodování?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ano. Můžete nastavit boty s podporou AI podle svého rizikového profilu, nebo obchodovat manuálně — můžete kdykoli přepnout.
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
              Požádejte o výběr ze svého osobního účtu. Zpracování obvykle trvá 1–3 pracovní dny v závislosti na platební metodě.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Máte další otázky?</p>
        <a href="contacts.php" class="btn btn-outline">Kontaktujte podporu</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
