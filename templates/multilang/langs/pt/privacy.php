<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Política de Privacidade');
$page_description = 'Saiba como a ' . SITE_NAME . ' recolhe, utiliza e protege os seus dados pessoais.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Política de Privacidade</h1>
      <p class="lead">Última atualização: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Esta Política de Privacidade descreve como a <?= e(SITE_NAME) ?> («nós») recolhe e trata informações pessoais quando utiliza o nosso site e os nossos serviços.</p>

      <h2>Informações que recolhemos</h2>
      <p>Podemos recolher: nome, endereço de e-mail, número de telefone, país de residência, endereço IP e informações que forneça através de formulários ou pedidos de apoio.</p>

      <h2>Como utilizamos as suas informações</h2>
      <ul>
        <li>Para criar e gerir a sua conta</li>
        <li>Para fornecer acesso à plataforma de trading e apoio ao cliente</li>
        <li>Para cumprir obrigações legais e regulamentares</li>
        <li>Para melhorar os nossos serviços e prevenir fraudes</li>
      </ul>

      <h2>Segurança dos dados</h2>
      <p>Implementamos medidas técnicas e organizativas, incluindo encriptação SSL e controlos de acesso, para proteger os seus dados.</p>

      <h2>Os seus direitos</h2>
      <p>Consoante a sua jurisdição, pode ter direito a aceder, corrigir ou eliminar os seus dados pessoais. Contacte <?= e(SUPPORT_EMAIL) ?> para exercer esses direitos.</p>

      <h2>Contactos</h2>
      <p>Questões sobre esta política? Envie um e-mail para <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
