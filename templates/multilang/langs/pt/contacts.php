<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contactos');
$page_description = 'Contacte o apoio da ' . SITE_NAME . ' ou a nossa equipa comercial. Estamos disponíveis 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contactos</p>
      <h1>Estamos aqui para ajudar</h1>
      <p class="lead">Apoio profissional 24 horas por dia para questões de conta, trading e técnicas.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Apoio por e-mail</h3>
          <p style="margin-bottom: 1rem;">Para questões gerais e assistência de conta:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Tempo de resposta</h3>
          <p>A maioria dos pedidos é respondida em poucas horas. Questões urgentes de trading têm prioridade.</p>
        </article>
        <article class="feature-card">
          <h3>Pronto para começar?</h3>
          <p style="margin-bottom: 1rem;">Abra uma conta em minutos — sem necessidade de chamada.</p>
          <a href="sign.php" class="btn btn-primary">Criar conta</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
