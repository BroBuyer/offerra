<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Termos e condições | Acordo de utilizador com ' . SITE_NAME;
$page_description = 'Consulta os termos da plataforma, as regras de trading e as políticas de assistência de ' . SITE_NAME . '.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Termos e condições', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="percurso de navegação" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Início</a>
            <span class="breadcrumb-item">Termos e condições</span>
        </nav>
        <h1>Termos e condições</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Introdução</h2>
    <p>Este site apresenta serviços de trading de terceiros. Ao continuares, aceitas estes termos e a nossa política de privacidade. Os termos podem ser atualizados.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Elegibilidade</h2>
    <p>Tens de ter pelo menos 18 anos e estar legalmente autorizado a aceitar estes termos, segundo a lei local. Recusamos responsabilidade em caso de uso indevido da plataforma.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Limitações de acesso</h2>
    <p>O acesso pode ser restringido em certas regiões ou perante limites regulatórios. Alguns serviços podem não estar disponíveis em determinados locais.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Uso adequado</h2>
    <p>O uso não autorizado é proibido, incluindo atividades ilícitas, infração de direitos, divulgação de conteúdo prejudicial ou bots. As infrações podem implicar a suspensão da conta.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Propriedade intelectual</h2>
    <p>Todo o conteúdo, as marcas e os direitos de propriedade intelectual pertencem-nos a nós ou aos nossos afiliados. O uso do site é pessoal; copiar ou modificar o conteúdo não é permitido.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Limitação de responsabilidade</h2>
    <p>Os serviços e o site são oferecidos «tal como estão». Não aceitamos responsabilidade por erros, perdas ou danos decorrentes do uso.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Conteúdo de terceiros</h2>
    <p>Podem aparecer conteúdos ou ligações de terceiros sem garantia de exatidão ou disponibilidade; verifica por ti.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Ligações externas</h2>
    <p>As ligações externas são oferecidas por comodidade. Não endossamos nem controlamos esses sites e recusamos responsabilidade pelo respetivo conteúdo.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Disposições adicionais</h2>
    <p>Podemos atualizar serviços e termos. Estes termos constituem o acordo completo. Não exercer um direito não implica renúncia.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
