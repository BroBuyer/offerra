<?php
require_once __DIR__ . '/includes/config.php';

$brand = SITE_NAME;
$audience = market_audience();

$page_title = page_title_lead('FAQ');
$page_description = 'Pogosta vprašanja o ' . $brand . ' — kako trgovalna platforma z umetno inteligenco deluje za ' . $audience
    . ', varnost, provizije, trgi in kako odpreti račun.';
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
            Ali je <?= e($brand) ?> varna?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
 <?= e($brand) ?> uporablja SSL, 2FA in preverjene plačilne procesorje. Trgovanje še vedno prinaša tveganje izgube kapitala.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kakšne so provizije <?= e($brand) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
 <?= e($brand) ?> pred potrditvijo transakcije pokaže provizije. Ni skritih stroškov pri pologih ali dvigih razen tistih, ki so navedeni na zaslonu <?= e($brand) ?>.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ali lahko na <?= e($brand) ?> uporabljam avtomatizacijo?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Da. Nastavite bote <?= e($brand) ?> z umetno inteligenco glede na tveganje ali trgujte ročno — preklopite kadar koli v <?= e($brand) ?>.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako delujejo dvigi na <?= e($brand) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Dvig zahtevajte z nadzorne plošče <?= e($brand) ?>. Obdelava običajno traja 1–3 delovne dni, glede na način.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ali <?= e($brand) ?> deluje na telefonu?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Da. <?= e($brand) ?> je odziven. Seznami spremljanja in opozorila ostanejo usklajeni med telefonom in brskalnikom.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako stopim v stik z <?= e($brand) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Za vprašanja o računu, pologu in platformi uporabite <a href="contacts.php">kontaktno stran</a> <?= e($brand) ?>.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
