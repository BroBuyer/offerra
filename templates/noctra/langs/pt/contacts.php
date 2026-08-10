<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contacto');
$page_description = 'Contacte o suporte da ' . SITE_NAME . ' — ajuda com conta, trading e questões técnicas 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contacto</p>
      <h1>Fale com o suporte</h1>
      <p class="lead">Questões de conta, trading e técnicas — cobertas a qualquer hora.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Suporte por e-mail</h3>
          <p style="margin-bottom: 1rem;">Para pedidos de conta e gerais:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Tempo de resposta</h3>
          <p>A maioria dos pedidos é resolvida em poucas horas. Questões de trading em direto têm prioridade.</p>
        </article>
        <article class="feature-card">
          <h3>Prefere self-service?</h3>
          <p style="margin-bottom: 1rem;">Abra uma conta em minutos — sem chamada necessária.</p>
          <a href="sign.php" class="btn btn-primary">Criar conta</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
