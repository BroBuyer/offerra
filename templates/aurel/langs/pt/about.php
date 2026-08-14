<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Sobre ' . SITE_NAME;
$page_description = 'Uma conta, uma visão clara do seu capital — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">A plataforma</span>
    <h1>Uma conta, uma visão clara de tudo</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> reúne o seu saldo, a sua estratégia e o seu rendimento num único painel transparente, para que cada decisão seja informada e cada valor esteja à vista.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>As pessoas por trás da sua conta</h2>
    <p>Por trás da interface há analistas que estudam os mercados diariamente, engenheiros que mantêm a plataforma a funcionar e especialistas de apoio que respondem no seu idioma.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Analistas de mercado que revêm as condições diariamente, não uma vez por trimestre.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Engenheiros disponíveis para a plataforma, com supervisão permanente.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Especialistas de apoio que gerem a abertura, a verificação e os reembolsos.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Regulamentação, risco e o que não prometemos</h2>
    <p>Investir implica risco e nenhuma plataforma o elimina. O que uma plataforma pode fazer é ser clara consigo: publicar as suas condições, manter o dinheiro dos clientes com parceiros regulados e documentar como funcionam os reembolsos.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Verificação de identidade antes de poder movimentar fundos na conta.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Os reembolsos são devolvidos ao mesmo método utilizado no depósito.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Condições, aviso de risco e política de privacidade publicados na íntegra.</span></li>
    </ul>
    <p class="jkkyl">Investir implica risco, incluindo a possível perda de parte ou de todo o capital. O valor dos investimentos pode subir ou descer, e poderá recuperar menos do que investiu. Não invista dinheiro que não possa perder.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Começar — <?= e(money_min()) ?> mín.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Enviar mensagem</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Como a plataforma foi construída</h2>
    <ol class="nxlk2qu">
      <li><h3>O ponto de partida</h3><p>Um pequeno grupo de analistas e engenheiros ouvia sempre a mesma queixa: as ferramentas existem, mas ninguém as explica.</p></li>
      <li><h3>Primeira versão funcional</h3><p>A primeira versão fazia uma única coisa: mostrar um saldo e uma posição em termos simples. Todo o resto foi eliminado até essa parte ficar clara.</p></li>
      <li><h3>Incorporar o lado humano</h3><p>A automatização responde ao quê e ao quando; as pessoas respondem ao porquê. Foram adicionados especialistas de apoio para que cada membro tenha a quem perguntar.</p></li>
      <li><h3>Abertura a mais mercados</h3><p>Métodos de pagamento locais, idiomas locais e horários de apoio locais.</p></li>
      <li><h3>Onde estamos agora</h3><p>Os mesmos princípios à maior escala: valores transparentes, pessoas acessíveis, sem surpresas nas letras pequenas.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Para que estamos aqui</h2>
    <p>A maioria das pessoas que quer investir nunca começa, porque cada caminho parece pensado para alguém que já conhece o vocabulário. Construímos o oposto: uma única conta, linguagem clara e um especialista com quem realmente pode falar.</p>
    <p>Sem jargão onde basta uma frase simples, sem comissões que aparecem só depois de movimentar o dinheiro, e sem promessas de rentabilidade que ninguém pode garantir honestamente.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Utilizadores ativos</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>Volume negociado</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Apoio</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
