<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ofertă');
$page_description = 'Alege planul ' . SITE_NAME . ' — începe cu o depunere minimă de ' . MIN_DEPOSIT . ' ' . CURRENCY . ' și deblochează accesul complet la platformă.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Acasă', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Ofertă', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Ofertă</p>
      <h1>Obține trackerul de portofoliu — gratuit la înregistrare</h1>
      <p class="lead">Începe cu <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Mărește când ești pregătit.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Acces de bază</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> depunere minimă · Platformă completă · Semnale AI · Asistență 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Ce include</div>
          <div class="specs-value">Grafice live, tranzacționare multi-piață, tracker portofoliu, onboarding ghidat</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Depuneri</div>
          <div class="specs-value">Card, transfer bancar, PayPal, e-wallet</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Retrageri</div>
          <div class="specs-value">Oricând · 1–3 zile lucrătoare · Comisioane vizibile din timp</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dispozitive</div>
          <div class="specs-value">Web, tabletă, mobil — fără descărcare</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Solicită oferta acum';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
