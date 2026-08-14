<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Registo ' . SITE_NAME;
$page_description = 'Abra a sua conta em ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Comece já</span>
    <h1>Abra a sua conta</h1>
    <p class="kpnq92g">Alguns dados para começar, e um especialista trata do resto. Neste passo não se cobra nada.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>O que acontece depois</h2>
    <ol class="nxlk2qu">
      <li><h3>Envia o formulário</h3><p>Demora alguns minutos e não custa nada.</p></li>
      <li><h3>Liga-lhe um especialista</h3><p>Confirma os seus dados, responde a perguntas e explica o passo seguinte. Sem pressão para depositar.</p></li>
      <li><h3>Verifica e escolhe um montante</h3><p>Só então se movimenta dinheiro, e apenas a quantidade que escolher.</p></li>
    </ol>
    <p class="jkkyl">Investir implica risco, incluindo a possível perda de parte ou de todo o capital. O valor dos investimentos pode subir ou descer, e poderá recuperar menos do que investiu. Não invista dinheiro que não possa perder.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Começar — <?= e(money_min()) ?> mín.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">Perguntas frequentes</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>O que precisa</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Um correio que consulte regularmente.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Um telefone, para que um especialista o possa contactar.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Um documento de identidade, para a verificação posterior.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>O que acontece depois de enviar o formulário</h2>
    <h3>A chamada de verificação</h3>
    <p>Um especialista liga para confirmar os dados que enviou, responder a perguntas e acordar um montante inicial razoável para si. É uma conversa, não um guião de vendas: uma conta aberta com expectativas irreais não serve a ninguém.</p>
    <h4>Quanto demora</h4>
    <p>Costuma ser uma chamada de dez a quinze minutos. Se preferir que o chamem a uma hora concreta, indique-o no formulário e será respeitado.</p>
    <h3>A verificação de identidade, explicada</h3>
    <p>Antes do primeiro depósito pedir-lhe-ão um documento de identidade com fotografia e um comprovativo recente de morada. É o mesmo requisito de qualquer serviço financeiro regulado, e existe para que um levantamento só possa regressar a si.</p>
    <h4>O que é aceite</h4>
    <p>Passaporte ou cartão de cidadão, e uma fatura ou extrato bancário dos últimos três meses. Uma fotografia nítida feita com o telemóvel é suficiente.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Abra a sua conta</h2>
      <p class="pt6joj">Comece em poucos minutos.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Começar agora';
  $form_class = 'leadform lead-form aurel-form';
  $form_variant = 'band';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
