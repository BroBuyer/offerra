<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Acerca de ' . SITE_NAME . ' | A plataforma de trading em detalhe';
$page_description = 'Descobre a missão, a tecnologia e o compromisso de ' . SITE_NAME . ' com uma experiência de trading segura.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Quem somos', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="percurso de navegação"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Início</a>
            <span class="breadcrumb-item">Quem somos</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>A nossa identidade</h1>
                      <p class="lead">Plataforma, funções e trading responsável.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> une o acesso ao mercado e as ferramentas de análise numa plataforma única e ágil.</p>
            <p>Centramo-nos em medidas de segurança sólidas e processos transparentes, fáceis de perceber.</p>
            <p>O trading envolve riscos e os rendimentos não podem ser garantidos.</p>
            <p>O onboarding é simples: cria a conta, confirma o e-mail, deposita um mínimo de <?= e(money_min()) ?>, e acede ao painel. Passa do modo manual ao assistido, define limites e gere o risco segundo o teu perfil.</p>            <p>O suporte ajuda com contas, pagamentos, levantamentos e funções da plataforma. Não oferece aconselhamento de investimento personalizado. Se houver urgência durante uma operação ativa, indica o e-mail da conta e o estado do painel.</p>            <p>Principiantes e traders com experiência encontram um ambiente claro: tutoriais de um lado, controlos avançados e acompanhamento de desempenho do outro. Medimos <?= e(SITE_NAME) ?> pela qualidade da experiência — não por marketing agressivo. Antes de te registares, lê FAQ, termos e privacidade: riscos, prazos de levantamento e requisitos da conta.</p>            <p>At <?= e(SITE_NAME) ?>, encontras fluxos guiados, ferramentas de acompanhamento e suporte operativo centrado em processos de conta e pagamento transparentes, sem prometer resultados de mercado.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Regista-te hoje</a>
            </p>
          </div>
        </div>
      </div>
      <!-- support -->
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 lg:grid-cols-2">
          <div
            class="border-primary rounded-custom relative flex flex-col justify-between gap-6 overflow-hidden lg:border lg:p-8"
          >
            <h2>Como podemos ajudar-te?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Criar conta';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
