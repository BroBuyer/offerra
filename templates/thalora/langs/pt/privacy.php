<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Privacidade | Proteção de dados em ' . SITE_NAME;
$page_description = 'Descobre como ' . SITE_NAME . ' protege os teus dados com a nossa política de privacidade.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Política de privacidade', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="percurso de navegação"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Início</a>
  <span class="breadcrumb-item">Política de privacidade</span>
</nav>
<h1>O nosso compromisso com a tua privacidade</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Última atualização: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> («nós»), a proteção dos teus dados pessoais é uma prioridade. Esta declaração explica como recolhemos, usamos e protegemos a tua informação.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Transparência no tratamento de dados</p>
    <p>
      Procuramos clareza sobre o tratamento de dados. Contacta-nos em      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Finalidade do uso de dados</p>
    <p>Usamos a tua informação para prestar serviços, melhorar a plataforma e cumprir obrigações legais.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Acesso aos teus dados</p>
    <p>Podes pedir a qualquer momento acesso, correção ou eliminação dos teus dados pessoais.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Práticas de segurança</p>
    <p>Aplicamos medidas de segurança sólidas, sem podermos garantir uma proteção absoluta.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Informação que recolhemos</h2>
    <p>Recolhemos, entre outros, endereços IP, dados do dispositivo, tipos de browser e a informação que nos facultares.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Bases do tratamento</h2>
    <p>O tratamento baseia-se no consentimento, nos nossos interesses legítimos e no cumprimento das leis aplicáveis.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Partilha de dados</h2>
    <p>Os teus dados podem ser partilhados com parceiros de confiança, fornecedores e autoridades quando a lei o exigir.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Cookies</h2>
    <p>Os cookies permitem o funcionamento do site e a análise de uso; podes desativá-los se o desejares.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Período de conservação</h2>
    <p>Conservamos a informação só o tempo necessário para as finalidades descritas.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Transferências internacionais</h2>
    <p>Os dados podem ser transferidos para fora do país, com as salvaguardas adequadas.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Ligações a outros sites</h2>
    <p>Não assumimos responsabilidade pelos sites externos ligados a partir da plataforma nem pelas suas práticas.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Atualizações desta política</h2>
    <p>Esta política de privacidade pode ser atualizada.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Os teus direitos</h2>
    <p>Tens direito a aceder, retificar, apagar, limitar o tratamento, transferir os dados, retirar o consentimento e apresentar uma reclamação.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
