<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Termos de utilização | ' . SITE_NAME;
$page_description = 'Termos de utilização da plataforma ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text">-->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Termos de utilização</h1>
            <p class="bold-title">1. Introdução</p>
            <p>1.1. A aceitação destes termos é necessária para usar os nossos serviços.</p>
            <p>1.2. Estes termos constituem um acordo juridicamente vinculativo.</p>
            <p>1.3. O uso continuado do sítio equivale à aceitação dos termos.</p>
            <p>
              1.4. Para qualquer pergunta podes escrever-nos para
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Direito de uso</p>
            <p>2.1. Tens de ter pelo menos 18 anos para usar os serviços.</p>
            <p>2.1.1. Tens de residir num país em que os serviços sejam lícitos.</p>
            <p>2.1.2. Não podes figurar em nenhuma lista de sanções.</p>
            <p>2.1.3. Tens de ter capacidade jurídica para contratar.</p>
            <p>2.2. Não somos responsáveis por um uso por parte de pessoas não aptas.</p>
            <p class="bold-title">3. Conta de utilizador</p>
            <p>3.1. És responsável pela segurança da tua conta.</p>
            <p>3.2. Não comuniques a palavra-passe a terceiros.</p>
            <p class="bold-title">4. Atividades proibidas</p>
            <p>4.1. O uso dos serviços para fins ilícitos não é permitido.</p>
            <p>4.1.1. O branqueamento de capitais está estritamente proibido.</p>
            <p>4.1.2. Qualquer fraude será denunciada às autoridades competentes.</p>
            <p>4.1.3. O uso de robots ou de programas de automatização não é permitido.</p>
            <p>4.1.4. Qualquer tentativa de manipular o sistema será objeto de investigação.</p>
            <p>4.1.5. A difusão de informação falsa está proibida.</p>
            <p>4.1.6. Qualquer tentativa de obstruir uma investigação não é permitida.</p>
            <p>4.1.7. As ameaças a outros utilizadores estão proibidas.</p>
            <p>4.1.8. Qualquer atividade ilícita será sancionada.</p>
            <p>4.1.9. Qualquer tentativa de contornar as normas não é permitida.</p>
            <p>4.1.10. Qualquer tentativa de abuso do sistema é tomada a sério.</p>
            <p class="bold-title">5. Propriedade intelectual</p>
            <p>5.1. O conjunto dos conteúdos do sítio é a nossa propriedade intelectual.</p>
            <p>5.2. Os utilizadores não adquirem direitos sobre os conteúdos do sítio.</p>
            <p>5.3. Os conteúdos não podem copiar-se sem autorização.</p>
            <p>5.4. Os terceiros não estão autorizados a modificar os conteúdos.</p>
            <p class="bold-title">6. Limitação de responsabilidade</p>
            <p>6.1. O uso dos serviços realiza-se por tua conta e risco.</p>
            <p>6.2. Não somos responsáveis pelas perdas ligadas ao uso dos serviços.</p>
            <p>6.3. Qualquer perda ligada ao uso do sítio é responsabilidade do utilizador.</p>
            <p>6.4. Não aceitamos qualquer responsabilidade pelos danos ligados ao uso do sítio.</p>
            <p>6.5. Os problemas técnicos não recaem na nossa responsabilidade.</p>
            <p class="bold-title">7. Informação</p>
            <p>7.1. Ao usares os serviços aceitas ser contactado.</p>
            <p>7.2. A informação é tratada de forma confidencial.</p>
            <p>7.3. Recomenda-se aos utilizadores que conservem os seus comprovativos.</p>
            <p class="bold-title">8. Ligações e recursos complementares</p>
            <p>8.1. Para mais informação consulta as nossas políticas.</p>
            <p>8.2. As ligações externas não constituem uma aprovação.</p>
            <p>8.3. Recomendamos verificar as fontes antes de as usar.</p>
            <p class="bold-title">9. Disposições gerais</p>
            <p>9.1. Reservamo-nos o direito de modificar os serviços em qualquer momento.</p>
            <p>9.2. Os termos podem evoluir em qualquer momento.</p>
            <p>9.3. Ao usares os serviços aceitas estes termos.</p>
            <p>9.4. Os acordos orais não são válidos.</p>
            <p>9.5. Os direitos não exercidos não se consideram renunciados.</p>
            <p>
              9.6. Se uma disposição for declarada nula, as restantes permanecem em vigor.
            </p>
            <p>9.7. Os serviços podem ser geridos por prestadores externos.</p>
            <p>
              9.8. O direito aplicável <?= e(geo_in()) ?> rege estes termos. Qualquer litígio será submetido ao
              tribunal competente <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
