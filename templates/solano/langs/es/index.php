<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' ᐉ un ingreso extra con análisis con IA';
$page_description = 'Un analista financiero personal, apoyado en IA, te acompaña para construir un ingreso adicional con ' . SITE_NAME . '. Genera ingresos desde ' . money_min() . '.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="wvppy2" href="#top">Saltar al contenido</a>

<svg xmlns="http://www.w3.org/2000/svg" style="display:none" aria-hidden="true">
<symbol id="i-cc-visa" viewBox="0 0 576 512"><path d="M470.1 231.3s7.6 37.2 9.3 45H446c3.3-8.9 16-43.5 16-43.5-.2.3 3.3-9.1 5.3-14.9l2.8 13.4zM576 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM152.5 331.2L215.7 176h-42.5l-39.3 106-4.3-21.5-14-71.4c-2.3-9.9-9.4-12.7-18.2-13.1H32.7l-.7 3.1c15.8 4 29.9 9.8 42.2 17.1l35.8 135h42.5zm94.4.2L272.1 176h-40.2l-25.1 155.4h40.1zm139.9-50.8c.2-17.7-10.6-31.2-33.7-42.3-14.1-7.1-22.7-11.9-22.7-19.2.2-6.6 7.3-13.4 23.1-13.4 13.1-.3 22.7 2.8 29.9 5.9l3.6 1.7 5.5-33.6c-7.9-3.1-20.5-6.6-36-6.6-39.7 0-67.6 21.2-67.8 51.4-.3 22.3 20 34.7 35.2 42.2 15.5 7.6 20.8 12.6 20.8 19.3-.2 10.4-12.6 15.2-24.1 15.2-16 0-24.6-2.5-37.7-8.3l-5.3-2.5-5.6 34.9c9.4 4.3 26.8 8.1 44.8 8.3 42.2.1 69.7-20.8 70-53zM528 331.4L495.6 176h-31.1c-9.6 0-16.9 2.8-21 12.9l-59.7 142.5H426s6.9-19.2 8.4-23.3H486c1.2 5.5 4.8 23.3 4.8 23.3H528z"/></symbol>
<symbol id="i-cc-mastercard" viewBox="0 0 576 512"><path d="M482.9 410.3c0 6.8-4.6 11.7-11.2 11.7-6.8 0-11.2-5.2-11.2-11.7 0-6.5 4.4-11.7 11.2-11.7 6.6 0 11.2 5.2 11.2 11.7zm-310.8-11.7c-7.1 0-11.2 5.2-11.2 11.7 0 6.5 4.1 11.7 11.2 11.7 6.5 0 10.9-4.9 10.9-11.7-.1-6.5-4.4-11.7-10.9-11.7zm117.5-.3c-5.4 0-8.7 3.5-9.5 8.7h19.1c-.9-5.7-4.4-8.7-9.6-8.7zm107.8.3c-6.8 0-10.9 5.2-10.9 11.7 0 6.5 4.1 11.7 10.9 11.7 6.8 0 11.2-4.9 11.2-11.7 0-6.5-4.4-11.7-11.2-11.7zm105.9 26.1c0 .3.3.5.3 1.1 0 .3-.3.5-.3 1.1-.3.3-.3.5-.5.8-.3.3-.5.5-1.1.5-.3.3-.5.3-1.1.3-.3 0-.5 0-1.1-.3-.3 0-.5-.3-.8-.5-.3-.3-.5-.5-.5-.8-.3-.5-.3-.8-.3-1.1 0-.5 0-.8.3-1.1 0-.5.3-.8.5-1.1.3-.3.5-.3.8-.5.5-.3.8-.3 1.1-.3.5 0 .8 0 1.1.3.5.3.8.3 1.1.5s.2.6.5 1.1zm-2.2 1.4c.5 0 .5-.3.8-.3.3-.3.3-.5.3-.8 0-.3 0-.5-.3-.8-.3 0-.5-.3-1.1-.3h-1.6v3.5h.8V426h.3l1.1 1.4h.8l-1.1-1.3zM576 81v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V81c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM64 220.6c0 76.5 62.1 138.5 138.5 138.5 27.2 0 53.9-8.2 76.5-23.1-72.9-59.3-72.4-171.2 0-230.5-22.6-15-49.3-23.1-76.5-23.1-76.4-.1-138.5 62-138.5 138.2zm224 108.8c70.5-55 70.2-162.2 0-217.5-70.2 55.3-70.5 162.6 0 217.5zm-142.3 76.3c0-8.7-5.7-14.4-14.7-14.7-4.6 0-9.5 1.4-12.8 6.5-2.4-4.1-6.5-6.5-12.2-6.5-3.8 0-7.6 1.4-10.6 5.4V392h-8.2v36.7h8.2c0-18.9-2.5-30.2 9-30.2 10.2 0 8.2 10.2 8.2 30.2h7.9c0-18.3-2.5-30.2 9-30.2 10.2 0 8.2 10 8.2 30.2h8.2v-23zm44.9-13.7h-7.9v4.4c-2.7-3.3-6.5-5.4-11.7-5.4-10.3 0-18.2 8.2-18.2 19.3 0 11.2 7.9 19.3 18.2 19.3 5.2 0 9-1.9 11.7-5.4v4.6h7.9V392zm40.5 25.6c0-15-22.9-8.2-22.9-15.2 0-5.7 11.9-4.8 18.5-1.1l3.3-6.5c-9.4-6.1-30.2-6-30.2 8.2 0 14.3 22.9 8.3 22.9 15 0 6.3-13.5 5.8-20.7.8l-3.5 6.3c11.2 7.6 32.6 6 32.6-7.5zm35.4 9.3l-2.2-6.8c-3.8 2.1-12.2 4.4-12.2-4.1v-16.6h13.1V392h-13.1v-11.2h-8.2V392h-7.6v7.3h7.6V416c0 17.6 17.3 14.4 22.6 10.9zm13.3-13.4h27.5c0-16.2-7.4-22.6-17.4-22.6-10.6 0-18.2 7.9-18.2 19.3 0 20.5 22.6 23.9 33.8 14.2l-3.8-6c-7.8 6.4-19.6 5.8-21.9-4.9zm59.1-21.5c-4.6-2-11.6-1.8-15.2 4.4V392h-8.2v36.7h8.2V408c0-11.6 9.5-10.1 12.8-8.4l2.4-7.6zm10.6 18.3c0-11.4 11.6-15.1 20.7-8.4l3.8-6.5c-11.6-9.1-32.7-4.1-32.7 15 0 19.8 22.4 23.8 32.7 15l-3.8-6.5c-9.2 6.5-20.7 2.6-20.7-8.6zm66.7-18.3h-8.2v4.4c-8.5-11.3-30-5.1-30 13.9 0 19.5 22.3 25 30 13.9v4.6h8.2V392zm33.7 0c-2.4-1.2-11-2.9-15.2 4.4V392h-7.9v36.7h7.9V408c0-11 9-10.3 12.8-8.4l2.4-7.6zm40.3-14.9h-7.9v19.3c-8.4-11.2-30-5.4-30 13.9 0 19.7 22.4 25 30 13.9v4.6h7.9v-51.7zm7.6-75.1v4.6h.8V302h1.9v-.8h-4.6v.8h1.9zm6.6 123.8c0-.5 0-1.1-.3-1.6-.3-.3-.5-.8-.8-1.1-.3-.3-.8-.5-1.1-.8-.5 0-1.1-.3-1.6-.3-.3 0-.8.3-1.4.3-.5.3-.8.5-1.1.8-.5.3-.8.8-.8 1.1-.3.5-.3 1.1-.3 1.6 0 .3 0 .8.3 1.4 0 .3.3.8.8 1.1.3.3.5.5 1.1.8.5.3 1.1.3 1.4.3.5 0 1.1 0 1.6-.3.3-.3.8-.5 1.1-.8.3-.3.5-.8.8-1.1.3-.6.3-1.1.3-1.4zm3.2-124.7h-1.4l-1.6 3.5-1.6-3.5h-1.4v5.4h.8v-4.1l1.6 3.5h1.1l1.4-3.5v4.1h1.1v-5.4zm4.4-80.5c0-76.2-62.1-138.3-138.5-138.3-27.2 0-53.9 8.2-76.5 23.1 72.1 59.3 73.2 171.5 0 230.5 22.6 15 49.5 23.1 76.5 23.1 76.4.1 138.5-61.9 138.5-138.4z"/></symbol>
<symbol id="i-cc-paypal" viewBox="0 0 576 512"><path d="M186.3 258.2c0 12.2-9.7 21.5-22 21.5-9.2 0-16-5.2-16-15 0-12.2 9.5-22 21.7-22 9.3 0 16.3 5.7 16.3 15.5zM80.5 209.7h-4.7c-1.5 0-3 1-3.2 2.7l-4.3 26.7 8.2-.3c11 0 19.5-1.5 21.5-14.2 2.3-13.4-6.2-14.9-17.5-14.9zm284 0H360c-1.8 0-3 1-3.2 2.7l-4.2 26.7 8-.3c13 0 22-3 22-18-.1-10.6-9.6-11.1-18.1-11.1zM576 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM128.3 215.4c0-21-16.2-28-34.7-28h-40c-2.5 0-5 2-5.2 4.7L32 294.2c-.3 2 1.2 4 3.2 4h19c2.7 0 5.2-2.9 5.5-5.7l4.5-26.6c1-7.2 13.2-4.7 18-4.7 28.6 0 46.1-17 46.1-45.8zm84.2 8.8h-19c-3.8 0-4 5.5-4.2 8.2-5.8-8.5-14.2-10-23.7-10-24.5 0-43.2 21.5-43.2 45.2 0 19.5 12.2 32.2 31.7 32.2 9 0 20.2-4.9 26.5-11.9-.5 1.5-1 4.7-1 6.2 0 2.3 1 4 3.2 4H200c2.7 0 5-2.9 5.5-5.7l10.2-64.3c.3-1.9-1.2-3.9-3.2-3.9zm40.5 97.9l63.7-92.6c.5-.5.5-1 .5-1.7 0-1.7-1.5-3.5-3.2-3.5h-19.2c-1.7 0-3.5 1-4.5 2.5l-26.5 39-11-37.5c-.8-2.2-3-4-5.5-4h-18.7c-1.7 0-3.2 1.8-3.2 3.5 0 1.2 19.5 56.8 21.2 62.1-2.7 3.8-20.5 28.6-20.5 31.6 0 1.8 1.5 3.2 3.2 3.2h19.2c1.8-.1 3.5-1.1 4.5-2.6zm159.3-106.7c0-21-16.2-28-34.7-28h-39.7c-2.7 0-5.2 2-5.5 4.7l-16.2 102c-.2 2 1.3 4 3.2 4h20.5c2 0 3.5-1.5 4-3.2l4.5-29c1-7.2 13.2-4.7 18-4.7 28.4 0 45.9-17 45.9-45.8zm84.2 8.8h-19c-3.8 0-4 5.5-4.3 8.2-5.5-8.5-14-10-23.7-10-24.5 0-43.2 21.5-43.2 45.2 0 19.5 12.2 32.2 31.7 32.2 9.3 0 20.5-4.9 26.5-11.9-.3 1.5-1 4.7-1 6.2 0 2.3 1 4 3.2 4H484c2.7 0 5-2.9 5.5-5.7l10.2-64.3c.3-1.9-1.2-3.9-3.2-3.9zm47.5-33.3c0-2-1.5-3.5-3.2-3.5h-18.5c-1.5 0-3 1.2-3.2 2.7l-16.2 104-.3.5c0 1.8 1.5 3.5 3.5 3.5h16.5c2.5 0 5-2.9 5.2-5.7L544 191.2v-.3zm-90 51.8c-12.2 0-21.7 9.7-21.7 22 0 9.7 7 15 16.2 15 12 0 21.7-9.2 21.7-21.5.1-9.8-6.9-15.5-16.2-15.5z"/></symbol>
<symbol id="i-cc-apple-pay" viewBox="0 0 576 512"><path d="M302.2 218.4c0 17.2-10.5 27.1-29 27.1h-24.3v-54.2h24.4c18.4 0 28.9 9.8 28.9 27.1zm47.5 62.6c0 8.3 7.2 13.7 18.5 13.7 14.4 0 25.2-9.1 25.2-21.9v-7.7l-23.5 1.5c-13.3.9-20.2 5.8-20.2 14.4zM576 79v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V79c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM127.8 197.2c8.4.7 16.8-4.2 22.1-10.4 5.2-6.4 8.6-15 7.7-23.7-7.4.3-16.6 4.9-21.9 11.3-4.8 5.5-8.9 14.4-7.9 22.8zM194 265.4c-.7-.4-24.6-9.5-24.9-37.5-.2-23.4 19.1-34.6 20-35.2-11-16.2-28-18-34-18.5-15.3-1-28.3 8.9-35.6 8.9-7.4 0-18.5-8.4-30.4-8.2-15.7.2-30.2 9.1-38.2 23.2-16.3 28.2-4.3 70 11.6 92.9 7.7 11.4 17 24 29.2 23.5 11.6-.5 16.1-7.5 30.1-7.5 14.1 0 18.1 7.5 30.4 7.3 12.6-.2 20.5-11.4 28.2-22.8 8.7-13 12.3-25.6 12.5-26.3-.3-.2-1-.4-1-.4zm159.2-31.4c0-27.6-19.2-46.4-46.5-46.4h-53.5v140.6h22.2v-48.1h30.6c28 0 47.6-19.2 47.6-46.1zm105 22.2c0-20.6-16.5-33.9-41.9-33.9-23.6 0-41 13.5-41.6 32h20c1.7-8.8 9.8-14.5 21-14.5 13.6 0 21.2 6.3 21.2 18v7.9l-27.7 1.7c-25.8 1.6-39.7 12.1-39.7 30.5 0 18.5 14.4 30.8 34.9 30.8 13.9 0 26.8-7 32.6-18.2h.5v17.1h20.5V256.2zm112 4.2h-22.4l-25.4 82.1h-.5l-25.4-82.1h-23.5l36.6 101.3-2 6.2c-3.3 10.4-8.6 14.4-18.1 14.4-1.7 0-5-.2-6.3-.3v17.1c1.3.3 6.6.5 8.2.5 21.6 0 31.8-8.2 40.7-33.4L570 260.2z"/></symbol>
<symbol id="i-google-pay" viewBox="0 0 640 512"><path d="M105.72,215v41.25h57.1a49.66,49.66,0,0,1-21.14,32.6c-9.54,6.55-21.72,10.28-36,10.28-27.6,0-50.93-18.91-59.3-44.22a65.61,65.61,0,0,1,0-41.61v-.11l0,0a65.24,65.24,0,0,1,59.3-44.11A58,58,0,0,1,146.24,184l30.55-30.67A102.79,102.79,0,0,0,105.72,125a107,107,0,0,0-95.68,59.22,109.13,109.13,0,0,0,0,97.56h0A107,107,0,0,0,105.72,341c28.87,0,53.23-9.55,70.94-26,20.24-18.67,31.83-46.27,31.83-79A128.24,128.24,0,0,0,206.79,215Z" style="fill:currentColor"/><path d="M622.44,171.28c-11.06-10.13-26.12-15.2-45.18-15.2-24.49,0-42.91,9-55.18,26.9l30.5,19.22q12.6-18.61,34.28-18.61a37.4,37.4,0,0,1,25,9.6,30.4,30.4,0,0,1,10.87,23.55v8a63.65,63.65,0,0,0-35.42-9.61c-17.94,0-32.32,4.19-43.06,12.68S528,247.28,528,262.3a41.72,41.72,0,0,0,14.66,32.86Q557.32,308.24,579,308.23q25.53,0,40.85-22.72h1.49v18.36H656V220.11Q656,193.6,639.48,178c-.19-.19-.38-.36-.57-.53Zm-20,110.55A44.36,44.36,0,0,1,570.7,295a34,34,0,0,1-21.79-7.35,22.9,22.9,0,0,1-9.19-18.36q0-11.75,11-19.61T578.16,242q22.36,0,34.85,10.13C613,266.26,609.4,275.86,602.42,281.83Z" style="fill:currentColor"/><path d="M446.6,308.23h-38.2V161.83H519.9V196.2H446.6Z" style="fill:currentColor"/><polygon points="640 160.2 561.6 340 522.2 340 551.3 277.1 499.7 160.2 541 160.2 569.4 228.7 570.1 228.7 597.7 160.2 640 160.2" style="fill:currentColor"/><path d="M341.61,156.08A78.29,78.29,0,0,0,283.28,180l-.09.09,25.86,25.86A45.16,45.16,0,0,1,341.61,192c19.15,0,34.86,12.87,38.14,29.6H341.61c-24.16,0-43.53,7.09-57.35,20.94a72.2,72.2,0,0,0-.16,101.94l.16.16c14,14,32.66,21.05,55.5,21.05,27.75,0,49.8-11.32,66-33.95l1.5.06v29.2h36.62v-89C443.86,196.19,401.35,156.08,341.61,156.08Zm-2.42,175.34a25.79,25.79,0,0,1-17.36-6.19,19.55,19.55,0,0,1-7.14-15.14c0-6.67,3.08-12.24,9.24-16.72s14.13-6.71,23.94-6.71c13.61,0,24.19,3,31.75,9.08C376.31,317,359.06,331.42,339.19,331.42Z" style="fill:currentColor"/></symbol>
<symbol id="i-building-columns" viewBox="0 0 512 512"><path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zM256 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></symbol>
<symbol id="i-shield-halved" viewBox="0 0 512 512"><path d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0zm0 66.8V444.8C394 378 431.1 230.1 432 141.4L256 66.8l0 0z"/></symbol>
</svg>

<header class="dx8ngh3">
  <div class="nrzt44 yd4epmn">
    <a class="jfbcnp" href="<?= page_url() ?>"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="28" height="28" decoding="async" title="<?= e(SITE_NAME) ?>" loading="eager"><?= e(SITE_NAME) ?></a>
    <nav class="gjm518" aria-label="Principal">
      <button class="nnzfxkg" type="button" aria-label="Cerrar menú">&times;</button>
      <a href="<?= page_url('product.php') ?>">Cómo funciona</a>
      <a href="#iei3g">Mercados en vivo</a>
      <a href="<?= page_url('offer.php') ?>">Por qué nosotros</a>
      <a href="<?= page_url('pricing.php') ?>">Pricing</a>
      <a href="<?= page_url('faq.php') ?>">FAQ</a>
      <a href="<?= page_url('blog.php') ?>">Blog</a>
      <a href="<?= page_url('about.php') ?>">About</a>
      <span class="iiao6"><details><summary>Legal</summary><ul><li><a href="<?= page_url('privacy.php') ?>">Privacidad</a></li><li><a href="<?= page_url('conditions.php') ?>">Términos</a></li><li><a href="<?= page_url('risk-disclosure.php') ?>">Aviso de riesgo</a></li><li><a href="<?= page_url('report-abuse.php') ?>">Denunciar abuso</a></li><li><a href="<?= page_url('privacy.php') ?>">Política de cookies</a></li><li><a href="<?= page_url('conditions.php') ?>">Política de retiradas</a></li><li><a href="<?= page_url('conditions.php') ?>">Depósitos y retiradas</a></li><li><a href="<?= page_url('conditions.php') ?>">KYC y prevención de blanqueo</a></li><li><a href="<?= page_url('conditions.php') ?>">Licencias</a></li></ul></details></span><a class="rs0voj6 ggca24u sstr1ao" href="#jsyo6">Abre tu cuenta</a>
    </nav>
    <div class="hdhwxf" hidden></div>
    <div class="eesqjj4">
      <a class="rs0voj6 ggca24u" href="#jsyo6">Abre tu cuenta</a>
      <button class="vuppvr" aria-label="Abrir menú" aria-expanded="false" type="button">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
      </button>
    </div>
  </div>
</header>

<main id="top" tabindex="-1">

<section class="pnylsh" data-hero="split" aria-labelledby="uevb7e6">
  <div class="nrzt44 qg0sgs">
    <div class="nfb5z">
    <span class="odwy4o">IA + Analistas humanos expertos</span>
    <h1 id="uevb7e6"><?= e(SITE_NAME) ?></h1>
    <p class="roc33zb">Un analista financiero personal, apoyado en IA, te acompaña para construir un ingreso adicional que crece con el tiempo — sin necesidad de experiencia previa. Tu analista te guía en cada paso.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Regulado</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Fondos segregados</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>36.000 clientes</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.6</span> valoración</span></div>
    <div class="do1sdty">
      <a class="rs0voj6 ggca24u" href="#jsyo6">Empezar — <?= e(money_min()) ?> mín.</a>
      <a class="rs0voj6 krccqy8" href="<?= page_url('product.php') ?>">Cómo funciona.</a>
    </div>
    <ul class="eok92u">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Protección SSL</li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Soporte 24/7</li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Ejecución rápida</li>
    </ul>

    
    
  </div>
    <div class="up98m" id="jsyo6" data-u="formband">
      <h2>Abre tu cuenta</h2>
      <p class="amrqy">Empieza en minutos.</p>
      
<?php
  $form_id = 'lead-form-hero';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Empezar';
  $form_class = 'leadform lead-form solano-form';
  $form_variant = 'stack';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
  <div class="yie67c">
    <a class="jvlvb1" href="#olc06f" aria-label="Ir a la siguiente sección"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 5v14M19 12l-7 7-7-7"/></svg></a>
  </div>
</section>

<div class="nrzt44 jlt10">
<details class="tte22iu" data-u="index" aria-label="En esta página">
    <summary class="gem14">En esta página</summary>
    <ol>
      <li><a href="#iei3g">Mercados en vivo</a></li>
      <li><a href="#lcgj4">Dentro de <?= e(SITE_NAME) ?></a></li>
      <li><a href="#lj60cb">Cómo funciona</a></li>
      <li><a href="#vp53s35">En cualquier pantalla</a></li>
      <li><a href="#jd8s0ag">Ganancias</a></li>
      <li><a href="#tsx31">Garantías de seguridad</a></li>
      <li><a href="#vkrcx5">Por qué <?= e(SITE_NAME) ?></a></li>
      <li><a href="#xm6kjbi">Lo que dicen nuestros miembros</a></li>
      <li><a href="#qyric">Tu analista</a></li>
      <li><a href="#ipwn2">Find your starting point</a></li>
      <li><a href="#xouiwqu">Preguntas</a></li>
    </ol>
    <a class="rs0voj6 ggca24u" href="#jsyo6">Empezar — <?= e(money_min()) ?> mín.</a>
  </details>
</div>

<div class="nrzt44 ldrp4m" id="olc06f">
    <section class="zx4mx9v" data-u="sec" id="xm6kjbi" aria-labelledby="korsty0">
      <div class="tewtadh">
        <span class="odwy4o">Lo que dicen nuestros miembros</span>
        <h2 id="korsty0">Lo que dicen los inversores</h2>
      </div>
      <div class="royrs">
        <figure class="zyrnf">
          <div class="spupxy">
            <span class="kgx9y" aria-label="5/5">★★★★★</span>
            <span class="qwur9r3">+€2.760 en 4 meses</span>
          </div>
          <blockquote style="margin:0"><p>Mi analista me lo explicó todo paso a paso. Establecí mis objetivos una sola vez y ahora veo exactamente cómo crece mi capital sin estar pendiente constantemente.</p></blockquote>
          <figcaption>
            <b>María González López</b>Madrid, España
          </figcaption>
        </figure>
        <figure class="zyrnf">
          <div class="spupxy">
            <span class="kgx9y" aria-label="5/5">★★★★★</span>
            <span class="qwur9r3">+€2.760 en 4 meses</span>
          </div>
          <blockquote style="margin:0"><p>Nunca había invertido antes — mi analista diseñó la estrategia y me explicó cada movimiento. Sin promesas falsas, sin presión, y los retiros llegan cuando digo.</p></blockquote>
          <figcaption>
            <b>Carlos Fernández Ruiz</b>Barcelona, España
          </figcaption>
        </figure>
        <figure class="zyrnf">
          <div class="spupxy">
            <span class="kgx9y" aria-label="5/5">★★★★★</span>
            <span class="qwur9r3">+€2.760 en 4 meses</span>
          </div>
          <blockquote style="margin:0"><p>Comencé con poco para probar. La claridad y el apoyo me dieron confianza para seguir aumentando mi inversión.</p></blockquote>
          <figcaption>
            <b>Lucia Martínez Castillo</b>Valencia, España
          </figcaption>
        </figure>
        <figure class="zyrnf">
          <div class="spupxy">
            <span class="kgx9y" aria-label="5/5">★★★★★</span>
            <span class="qwur9r3">+€2.760 en 4 meses</span>
          </div>
          <blockquote style="margin:0"><p>Las recomendaciones me llegan a tiempo — las reviso y apruebo en minutos. Funciona sin interferir en mi trabajo de jornada completa.</p></blockquote>
          <figcaption>
            <b>Javier Rodríguez Díaz</b>Sevilla, España
          </figcaption>
        </figure>
        <figure class="zyrnf">
          <div class="spupxy">
            <span class="kgx9y" aria-label="5/5">★★★★★</span>
            <span class="qwur9r3">+€2.760 en 4 meses</span>
          </div>
          <blockquote style="margin:0"><p>Lo que me convenció fue la transparencia: cada decisión está explicada y veo el razonamiento antes de que suceda nada.</p></blockquote>
          <figcaption>
            <b>Isabel Sánchez Moreno</b>Bilbao, España
          </figcaption>
        </figure>
        <figure class="zyrnf">
          <div class="spupxy">
            <span class="kgx9y" aria-label="5/5">★★★★★</span>
            <span class="qwur9r3">+€2.760 en 4 meses</span>
          </div>
          <blockquote style="margin:0"><p>El equipo de soporte es accesible y genuino. Mi primer análisis fue práctico y la plataforma ha sido consistente desde entonces.</p></blockquote>
          <figcaption>
            <b>Andrés Rojas García</b>Alicante, España
          </figcaption>
        </figure>
      </div>
    </section>

    <section class="zx4mx9v" data-u="sec" id="lj60cb" aria-labelledby="arm5k">
      <div class="tewtadh">
        <span class="odwy4o">Cómo funciona</span>
        <h2 id="arm5k">Cómo funciona.</h2>
        <p class="etpy2">IA moderna y un analista humano real, trabajando juntos, para ayudarte a construir un ingreso adicional, guiado en cada paso.</p>
      </div>
      <ol class="rho9v16">
        <li><span class="vio04">01</span><div><h3>Crea tu cuenta</h3><p>Regístrate en minutos con solo tu correo electrónico.</p></div></li>
        <li><span class="vio04">02</span><div><h3>Verifica tu correo</h3><p>Confirma tu dirección para proteger tu cuenta.</p></div></li>
        <li><span class="vio04">03</span><div><h3>Deposita fondos</h3><p>Ingresa desde <?= e(money_min()) ?> como depósito mínimo, a tu manera.</p></div></li>
        <li><span class="vio04">04</span><div><h3>Define tu estrategia</h3><p>Elige tus objetivos; tu analista adapta el plan.</p></div></li>
        <li><span class="vio04">05</span><div><h3>Empieza a invertir</h3><p>Sigue las señales guiadas y crece a tu propio ritmo.</p></div></li>
      </ol>
      <p style="margin-top:22px"><a class="rs0voj6 krccqy8" href="<?= page_url('product.php') ?>">Leer la guía completa</a></p>
    </section>

    <section class="zx4mx9v" data-u="sec" id="vkrcx5" aria-labelledby="db5s4j8">
      <div class="tewtadh">
        <span class="odwy4o">Por qué <?= e(SITE_NAME) ?></span>
        <h2 id="db5s4j8">Sin hojas de cálculo. Sin pantallas. Sin dudas de última hora.</h2>
        <p class="etpy2">Compara <?= e(SITE_NAME) ?> con los brókers tradicionales y con operar por tu cuenta.</p>
      </div>
      <div class="ltouuo" role="region" tabindex="0" aria-label="Sin hojas de cálculo. Sin pantallas. Sin dudas de última hora."><table class="gvdhnr">
        <thead><tr><th scope="col">Plataforma</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Bróker tradicional</th><th scope="col">Operar por tu cuenta</th></tr></thead>
        <tbody>
          <tr><td>Ejecución de órdenes impulsada por IA</td><td class="yd552">✓</td><td class="aty3riz">horario limitado</td><td class="aty3riz">manual</td></tr>
          <tr><td>Supervisión 24/7 en múltiples exchanges</td><td class="yd552">✓</td><td class="aty3riz">trámites en papel</td><td class="aty3riz">por tu cuenta</td></tr>
          <tr><td>Enrutamiento de órdenes en menos de un segundo</td><td class="yd552">✓</td><td class="aty3riz">solo por niveles</td><td class="aty3riz">manual</td></tr>
          <tr><td>Informes en múltiples divisas</td><td class="yd552">✓</td><td class="aty3riz">horario limitado</td><td class="aty3riz">por tu cuenta</td></tr>
          <tr><td>Alta sin trámites en papel</td><td class="yd552">✓</td><td class="aty3riz">trámites en papel</td><td class="aty3riz">manual</td></tr>
          <tr><td>Arbitraje entre exchanges</td><td class="yd552">✓</td><td class="aty3riz">solo por niveles</td><td class="aty3riz">por tu cuenta</td></tr>
          <tr><td>Gestor personal asignado</td><td class="yd552">✓</td><td class="aty3riz">horario limitado</td><td class="aty3riz">manual</td></tr>
        </tbody>
      </table></div>
      <p style="margin-top:22px"><a class="rs0voj6 krccqy8" href="<?= page_url('offer.php') ?>">Por qué nosotros</a></p>
    </section>

    <section class="zx4mx9v" data-u="sec" id="qyric" aria-labelledby="uzc7a7j">
      <div class="qyv6pbo qjjus96">
        <picture><img src="<?= asset('static/img/og.webp') ?>" alt="Tu analista personal en su puesto de trabajo" width="760" height="520" decoding="async" title="Tu analista personal en su puesto de trabajo" loading="lazy"></picture>
        <div>
          <div class="tewtadh">
            <span class="odwy4o">Tu analista</span>
            <h2 id="uzc7a7j">Tu analista financiero personal.</h2>
            <p class="etpy2">Cada miembro se empareja con un analista financiero personal con años de experiencia en los mercados. Con su propio conocimiento, métodos de análisis probados y herramientas de IA modernas, te ayuda a detectar oportunidades prometedoras y te acompaña en cada etapa.</p>
          </div>
          <ul class="tso61aq">
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Años de experiencia práctica en los mercados</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Estrategia diseñada según tus objetivos, riesgo y capital</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Acompañamiento activo en cada paso</span></li>
          </ul>
        </div>
      </div>
    </section>

    <section class="zx4mx9v" id="jd8s0ag" aria-labelledby="neeyq">
      <div class="tewtadh">
        <span class="odwy4o">Ganancias</span>
        <h2 id="neeyq">Un ejemplo para tu depósito.</h2>
        <p class="etpy2">Mueve el control deslizante para simular un depósito mayor: las cifras se calculan a partir de un plan representativo con el depósito mínimo. Esto es un ejemplo, no una promesa; tu ingreso real depende de cuánto inviertas y de la estrategia que elijas con tu analista.</p>
      </div>
      <div class="gvcm8u">
        <div>
          <div class="bvo3uq"><label for="calc-dep">Importe inicial</label><span class="wjcv4" id="zejsq4">€1.000</span></div>
          <input id="zlq7x" type="range" min="250" max="10000" step="50" value="1000" aria-label="Importe inicial"/>
          <div class="bvo3uq"><label for="calc-mon">Meses</label><span class="wjcv4" id="mgmlmf">6</span></div>
          <input id="bkv3u" type="range" min="1" max="24" step="1" value="6" aria-label="Meses"/>
          <p class="adqah3">Las cifras son orientativas. Tu ingreso real depende de la cantidad que inviertas y de la estrategia que elijas con tu analista.</p>
        </div>
        <div class="arsqprf">
          <small>Saldo estimado</small>
          <b id="tdueyd">€1.000</b>
          <a class="rs0voj6 ggca24u" href="#jsyo6" style="margin-top:14px;width:100%">Abrir una cuenta</a>
        </div>
      </div>
    </section>

    <div class="jyvec">
<div class="acd048l" data-u="statsband">
      <div class="xnpe0qx"><b>19.600</b><span>Usuarios activos</span></div>
      <div class="xnpe0qx"><b>€4,9B</b><span>Volumen operado</span></div>
      <div class="xnpe0qx"><b>99,7%</b><span>Disponibilidad de señales</span></div>
      <div class="xnpe0qx"><b>24/7</b><span>Soporte</span></div>
    </div>
<section class="kvxrbam" data-trust><div class="yyu0f9"><h2 class="jhi5m">Lo que respalda la plataforma</h2><p class="vrxljv2">Sin nombres ni logotipos prestados aquí — solo lo que este servicio realmente ofrece, cómo se mueve el dinero y dónde se publican las normas en su totalidad.</p><div class="hqewg"><div class="hj9dw"><p class="io36opk">Mercados y activos</p><ul class="zzs496e"><li>Bitcoin</li><li>Ethereum</li><li>Oro</li><li>Petróleo</li><li>Índices bursátiles</li><li>Pares de divisas</li></ul></div><div class="hj9dw"><p class="io36opk">Cómo se gestiona su dinero</p><ul class="xrr7tc"><li>Los fondos de los clientes se mantienen con socios de pago regulados, separados de las cuentas propias de la empresa.</li><li>La identidad se verifica antes del primer retiro — requisito estándar para cualquier servicio financiero regulado.</li><li>Un retiro regresa a la misma cuenta desde la que procedió el depósito; nunca se utiliza una cuenta de terceros.</li><li>La conexión está cifrada y el soporte responde en el plazo de un día hábil.</li></ul></div><div class="hj9dw"><p class="io36opk">Formas de financiar y retirar fondos</p><ul class="zzs496e"><li>Tarjeta bancaria</li><li>Transferencia bancaria</li><li>Monederos electrónicos</li><li>Transferencia de criptomonedas</li></ul></div><div class="hj9dw"><p class="io36opk">Documentos publicados</p><ul class="ug10n0s"><li><a href="<?= page_url('privacy.php') ?>">Privacidad</a></li><li><a href="<?= page_url('conditions.php') ?>">Términos</a></li><li><a href="<?= page_url('risk-disclosure.php') ?>">Aviso de riesgo</a></li><li><a href="<?= page_url('report-abuse.php') ?>">Denunciar abuso</a></li><li><a href="<?= page_url('privacy.php') ?>">Política de cookies</a></li><li><a href="<?= page_url('conditions.php') ?>">Política de retiradas</a></li><li><a href="<?= page_url('conditions.php') ?>">Depósitos y retiradas</a></li><li><a href="<?= page_url('conditions.php') ?>">KYC y prevención de blanqueo</a></li><li><a href="<?= page_url('conditions.php') ?>">Licencias</a></li></ul></div></div><p class="lb9p2s">La inversión conlleva riesgo, incluida la pérdida del capital que invierta. La lista anterior describe únicamente este servicio y no implica respaldo alguno por parte de terceros.</p></div></section>
</div>

<section class="zx4mx9v" id="ipwn2" aria-labelledby="ypzur9o">
      <div class="tewtadh">
        <span class="odwy4o">Find your starting point</span>
        <h2 id="ypzur9o">Three questions, then a suggested starting plan</h2>
        <p class="etpy2">No score, no grade — the answers just tell your specialist where to begin so the first call is not spent on basics.</p>
      </div>
      <form class="mwky634" id="ffuj8s" novalidate>
        <div class="rr65q" hidden aria-hidden="true"><i></i></div>
        <p class="py9af" hidden aria-live="polite" role="status"
           data-l="Question"
           data-of="of"></p>
        <fieldset class="fizujuq" data-u="quizq" tabindex="-1">
          <legend>01. How much investing have you done before?</legend>
          <div class="qs49y">
            <label><input type="radio" name="q1" value="1"/><span>None at all</span></label>
            <label><input type="radio" name="q1" value="2"/><span>A little, on my own</span></label>
            <label><input type="radio" name="q1" value="3"/><span>I invest regularly</span></label>
          </div>
        </fieldset>
        <fieldset class="fizujuq" data-u="quizq" tabindex="-1">
          <legend>02. What matters most to you right now?</legend>
          <div class="qs49y">
            <label><input type="radio" name="q2" value="1"/><span>Keeping risk low</span></label>
            <label><input type="radio" name="q2" value="2"/><span>Steady growth</span></label>
            <label><input type="radio" name="q2" value="3"/><span>Learning how it works</span></label>
          </div>
        </fieldset>
        <fieldset class="fizujuq" data-u="quizq" tabindex="-1">
          <legend>03. How much time can you give it?</legend>
          <div class="qs49y">
            <label><input type="radio" name="q3" value="1"/><span>Almost none</span></label>
            <label><input type="radio" name="q3" value="2"/><span>A few minutes a day</span></label>
            <label><input type="radio" name="q3" value="3"/><span>I like following markets</span></label>
          </div>
        </fieldset>
        <div class="zuh4exq">
          <button class="rs0voj6 krccqy8 ws86ccr" type="button" hidden>Back</button>
          <p class="vrwbx90" id="lnpv1t" hidden>Your answers are ready — leave your details and a specialist will talk them through.</p>
          <a class="rs0voj6 ggca24u ycxlw" href="#jsyo6">See my starting plan</a>
        </div>
      </form>
    </section>

    <section class="zx4mx9v" data-u="sec" id="tsx31" aria-labelledby="guzuo1">
      <div class="qyv6pbo">
        <div>
          <div class="tewtadh">
            <span class="odwy4o">Garantías de seguridad</span>
            <h2 id="guzuo1">Tu dinero, protegido por diseño</h2>
            <p class="etpy2">Los fondos de los clientes se mantienen con socios de pago regulados, el acceso se verifica y cada retirada sigue una ruta documentada de vuelta a la cuenta de origen.</p>
          </div>
          <ul class="tso61aq">
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Gráficos de velas y profundidad de mercado en tiempo real, en cualquier dispositivo</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Órdenes con un solo toque y confirmación instantánea</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Listas de seguimiento y alertas de precio que te siguen a todas partes</span></li>
          </ul>
        </div>
        <picture><img src="<?= asset('static/img/platform.webp') ?>" srcset="<?= asset('static/img/platform-640.webp') ?> 640w, <?= asset('static/img/platform.webp') ?> 800w" sizes="(max-width: 768px) 92vw, 680px" alt="Vista general de la cartera dentro de la plataforma" width="760" height="520" decoding="async" title="Vista general de la cartera dentro de la plataforma" loading="lazy"></picture>
      </div>
    </section>

    <section class="zx4mx9v" data-u="sec" id="iei3g" aria-labelledby="jo8i3q">
      <div class="tewtadh">
        <span class="odwy4o">Mercados en vivo</span>
        <h2 id="jo8i3q">Invierte en Bitcoin, Ethereum y mucho más</h2>
        <p class="etpy2">Precios en tiempo real, indicadores avanzados y una vista de nivel profesional de los mercados que te interesan.</p>
      </div>
      <div class="ltouuo" role="region" tabindex="0" aria-label="Invierte en Bitcoin, Ethereum y mucho más"><table class="kzp7d0j">
        <caption>Los precios se actualizan automáticamente mientras la página está abierta.</caption>
        <thead><tr><th scope="col">Asset</th><th scope="col">Price</th><th scope="col">24h</th></tr></thead>
        <tbody>
          <tr data-sym="BTC"><td><span class="no0qnp">Bitcoin<small>BTC/USDT</small></span></td><td class="th0yrt">€64.671</td><td class="mg1jree ixupo">-1,06%</td></tr>
          <tr data-sym="ETH"><td><span class="no0qnp">Ethereum<small>ETH/USDT</small></span></td><td class="th0yrt">€1.881</td><td class="mg1jree ixupo">-2,55%</td></tr>
          <tr data-sym="SOL"><td><span class="no0qnp">Solana<small>SOL/USDT</small></span></td><td class="th0yrt">€76,62</td><td class="mg1jree ixupo">-1,72%</td></tr>
          <tr data-sym="XRP"><td><span class="no0qnp">XRP<small>XRP/USDT</small></span></td><td class="th0yrt">€1,11</td><td class="mg1jree ixupo">-0,97%</td></tr>
        </tbody>
      </table></div>
    </section>

    <section class="zx4mx9v" data-u="sec" id="lcgj4" aria-labelledby="lz6qk">
      <div class="tewtadh">
        <span class="odwy4o">Dentro de <?= e(SITE_NAME) ?></span>
        <h2 id="lz6qk">Sigue tu cuenta en tiempo real</h2>
        <p class="etpy2">Cada operación que ejecuta tu analista queda registrada aquí: entradas, salidas y resultados verificados en cada par, actualizados al instante.</p>
      </div>
      <ol class="rho9v16">
        <li><span class="vio04">01</span><div><h3>Ejecución en menos de un segundo en cada plataforma conectada</h3><p><?= e(SITE_NAME) ?> mantiene conexiones API permanentes y de baja latencia con cada exchange compatible. Cuando el modelo lanza una señal, la orden se enruta, se ejecuta y queda registrada en tu panel antes de que aparezca el siguiente dato.</p></div></li>
        <li><span class="vio04">02</span><div><h3>Funciona 24/7, en cada sesión de mercado</h3><p>Las criptomonedas no descansan, y <?= e(SITE_NAME) ?> tampoco. El motor sigue analizando pares durante fines de semana y festivos para que no se te escape ninguna oportunidad.</p></div></li>
        <li><span class="vio04">03</span><div><h3>Informes en múltiples divisas</h3><p>Cada saldo, cada operación y cada retirada se muestran en tu moneda local. Sin conversiones ocultas en ningún punto.</p></div></li>
        <li><span class="vio04">04</span><div><h3>Capital segregado</h3><p>Tus fondos permanecen en tu propia cuenta. <?= e(SITE_NAME) ?> nunca los custodia: el motor solo tiene permiso para enrutar órdenes.</p></div></li>
        <li><span class="vio04">05</span><div><h3>Seguridad de nivel bancario</h3><p>Cifrado TLS en toda la plataforma, verificación en dos pasos incluida de serie y auditorías de infraestructura trimestrales por terceros. Recibos de operaciones registrados en blockchain.</p></div></li>
        <li><span class="vio04">06</span><div><h3>Tres clases de activos, una sola plataforma</h3><p>La mayoría de plataformas te limitan a un solo mercado. <?= e(SITE_NAME) ?> opera con criptomonedas, acciones cotizadas y los principales pares de divisas desde el mismo panel.</p></div></li>
        <li><span class="vio04">07</span><div><h3>Límites de riesgo predefinidos en cada posición</h3><p>El stop-loss, la pérdida máxima admitida y los topes de asignación de capital se configuran por clase de activo. El motor cierra automáticamente cualquier operación que supere un umbral y el evento queda registrado en tu historial.</p></div></li>
      </ol>
    </section>

    <section class="zx4mx9v" data-u="sec" id="vp53s35" aria-labelledby="ppynu">
      <div class="qyv6pbo">
        <div>
          <div class="tewtadh">
            <span class="odwy4o">En cualquier pantalla</span>
            <h2 id="ppynu">La misma cuenta en tu escritorio y en tu bolsillo</h2>
            <p class="etpy2">Un solo inicio de sesión, un solo saldo. Ábrelo en el navegador del ordenador o desde el móvil: nada que instalar y nada que funcione solo en un sitio.</p>
          </div>
          <ul class="tso61aq">
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Escritorio — panel completo, gráficos e informes</span></li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Móvil — saldos, posiciones y retiradas donde estés</span></li>
          </ul>
        </div>
        <figure class="snozao">
          <picture><img src="<?= asset('static/img/phone.webp') ?>" alt="La misma vista de cartera en la pantalla de un móvil" title="La misma vista de cartera en la pantalla de un móvil" width="896" height="1200" decoding="async" loading="lazy"></picture>
        </figure>
      </div>
    </section>

    <section class="zx4mx9v" id="xouiwqu" aria-labelledby="yr65p">
      <div class="tewtadh">
        <span class="odwy4o">Preguntas</span>
        <h2 id="yr65p">Preguntas frecuentes.</h2>
      </div>
      <div class="vzs2fc" itemscope itemtype="https://schema.org/FAQPage">
        <details open itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">¿Cuál es el depósito mínimo para comenzar?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Puedes abrir y financiar tu cuenta a partir de <?= e(money_min()) ?> mínimo. Eres libre de añadir más fondos según avanza tu plan de inversión.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">¿Cómo funcionan los retiros?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Solicita un retiro cuando quieras desde tu panel de control. Los fondos se devuelven a tu método de pago elegido, sujeto a los tiempos de procesamiento estándar.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">¿Está mi dinero protegido?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Las cuentas están protegidas con seguridad estándar de la industria y verificación robusta. Como en toda inversión, tu capital está en riesgo y su valor puede subir o bajar.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">¿Cuánto tardo en empezar a invertir?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">La mayoría de miembros completan el registro en pocos minutos. Una vez que tu primer depósito se procese, puedes activar tu plan de inversión inmediatamente.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">¿Hay comisiones ocultas?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Los costes se muestran de forma transparente antes de comprometerte. Siempre verás qué se aplica a tu plan — sin sorpresas ni cargos inesperados.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">¿Cuál es la edad mínima para registrarse?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Debes tener al menos 18 años para abrir una cuenta e invertir. Se puede requerir verificación para confirmar tu edad e identidad.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">¿Qué métodos de pago aceptáis?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Se aceptan métodos comunes como tarjetas de débito y crédito, transferencias bancarias y billeteras digitales seleccionadas. Las opciones exactas se muestran en el paso de depósito.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">¿Cuál es el horario de atención al cliente?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Nuestro equipo de soporte está disponible de lunes a viernes, de 9:00 a 18:00, y responde a cada consulta en un día hábil.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">¿Cómo se gestionan los impuestos?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Cualquier impuesto sobre ganancias de inversión depende de las normas de tu país y es tu responsabilidad. Te recomendamos mantener tus propios registros y consultar a un asesor fiscal cualificado.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">¿Qué es la verificación KYC y por qué es obligatoria?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">KYC (Conoce a tu Cliente) es una verificación estándar de tu identidad. Ayuda a mantener las cuentas seguras y es parte habitual de abrir una cuenta de inversión.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">¿Necesito experiencia en inversión?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">No. Cada miembro cuenta con un analista financiero personal que te guía en cada paso, así que no necesitas conocimientos previos sobre los mercados.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">¿Quién gestiona mis inversiones?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Un analista financiero dedicado, respaldado por herramientas de inteligencia artificial, trabajando conforme a tus objetivos y nivel de riesgo. El analista combina experiencia profesional con tecnología — las decisiones siguen siendo humanas.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">¿Es la plataforma conforme a la normativa?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Sí — cumple con los estándares financieros y de ciberseguridad nacionales, con protección de cuentas y verificación integrada.</p>
          </div>
        </details>
        <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary><h3 itemprop="name">¿Puedo añadir más dinero a mi cuenta después?</h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Sí. Puedes incrementar tu saldo cuando quieras y ajustar tu plan con tu analista conforme evolucionen tus objetivos de inversión.</p>
          </div>
        </details>
      </div>
      <p style="margin-top:22px"><a class="rs0voj6 krccqy8" href="<?= page_url('faq.php') ?>">Ver todas las preguntas</a></p>
    </section>
  </div>



<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">DE CONFIANZA</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Reseñas</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.6</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:92.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">230</b> reseñas · Basado en <b style="color:var(--text,#fff)">1.610</b> valoraciones</div></div></section><section class="lk9wh0" id="ej3hu" aria-labelledby="rfp0q">
  <div class="nrzt44 bxx9mk3">
    <div>
      <span class="odwy4o">Empieza ahora</span>
      <h2 id="rfp0q">¿Listo para poner tu capital a trabajar?</h2>
      <p class="etpy2">Abre tu cuenta en minutos, deposita desde un importe mínimo accesible y sigue tu progreso de forma transparente desde el primer día.</p>
      <ul class="tso61aq" style="margin-top:16px">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Un correo electrónico que realmente revises.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Un número de teléfono, para que un especialista pueda contactarte.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Un documento de identidad, para la verificación posterior.</span></li>
      </ul>
    </div>
    <div class="prxev6">
      <h3>Crea tu perfil</h3>
      <p class="amrqy">Empieza en minutos.</p>
      
<?php
  $form_id = 'lead-form-cta';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Empezar';
  $form_class = 'leadform lead-form solano-form';
  $form_variant = 'stack';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>

</main>

<footer class="jpbm9">
  <div class="nrzt44">
    <div class="zrxvw">
      <div>
        <a class="jfbcnp" href="<?= page_url() ?>"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="28" height="28" decoding="async" title="<?= e(SITE_NAME) ?>" loading="eager"><?= e(SITE_NAME) ?></a>
        <p>Invierte con disciplina y haz crecer tu patrimonio. Capital en riesgo — invierte de forma responsable.</p>
      </div>
      <div data-u="footcol"><h2 class="ublsk0">Soporte</h2><ul class="nxy95">
        <li><a href="<?= page_url('contacts.php') ?>">Enviar mensaje</a></li><li><a href="<?= page_url('faq.php') ?>">Preguntas frecuentes.</a></li><li><a href="<?= page_url('report-abuse.php') ?>">Denunciar abuso</a></li>
      </ul></div>
      <div data-u="footcol"><h2 class="ublsk0">Empresa</h2><ul class="nxy95">
        <li><a href="<?= page_url('about.php') ?>">About</a></li><li><a href="<?= page_url('pricing.php') ?>">Pricing</a></li><li><a href="<?= page_url('contacts.php') ?>">Contacto</a></li><li><a href="<?= page_url('sign.php') ?>">Abre tu cuenta</a></li>
      </ul></div>
      <div data-u="footcol"><h2 class="ublsk0">Producto</h2><ul class="nxy95">
        <li><a href="<?= page_url('product.php') ?>">Cómo funciona.</a></li><li><a href="#iei3g">Mercados en vivo</a></li><li><a href="<?= page_url('offer.php') ?>">Por qué nosotros</a></li><li><a href="<?= page_url('faq.php') ?>">FAQ</a></li>
      </ul></div>
    </div>
    <div class="nfphf">
      <div class="vmfqj">
        <a href="<?= page_url('blog.php') ?>">Blog</a><a href="<?= page_url('privacy.php') ?>">Privacidad</a><a href="<?= page_url('conditions.php') ?>">Condiciones de uso</a><a href="<?= page_url('risk-disclosure.php') ?>">Divulgación de riesgos</a><a href="<?= page_url('report-abuse.php') ?>">Denunciar abuso</a>
      </div>
      © <span id="okm3tz"></span> <?= e(SITE_NAME) ?>. Todos los derechos reservados. Invertir implica riesgo, incluida la posible pérdida de capital. · Invertir implica riesgo, incluida la posible pérdida de parte o de todo el capital invertido. El valor de las inversiones puede subir o bajar, y podrías recuperar menos de lo que aportaste inicialmente. No inviertas dinero que no puedas permitirte perder.
    </div>
  </div>
</footer>
<button class="fy2oj" type="button" aria-label="Volver arriba"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 19V5M5 12l7-7 7 7"/></svg></button>

<script>document.getElementById('okm3tz').textContent=new Date().getFullYear();</script>
<script>(function(){
var b=document.querySelector('.vuppvr'),n=document.querySelector('.gjm518'),
    s=document.querySelector('.hdhwxf');
if(!b||!n)return;
function set(o){n.classList.toggle('gv6tzn',o);document.body.classList.toggle('buytr',o);
  if(s)s.hidden=!o;b.setAttribute('aria-expanded',o?'true':'false');}
b.addEventListener('click',function(){set(!n.classList.contains('gv6tzn'));});
if(s)s.addEventListener('click',function(){set(false);});
n.addEventListener('click',function(e){if(e.target.tagName==='A'||e.target.closest('.nnzfxkg'))set(false);});
document.addEventListener('keydown',function(e){if(e.key==='Escape')set(false);});
})();</script>
<script>(function(){
var d=document.getElementById('zlq7x'),m=document.getElementById('bkv3u'),
    dv=document.getElementById('zejsq4'),mv=document.getElementById('mgmlmf'),out=document.getElementById('tdueyd');
if(!d||!m||!out)return;
function fmt(n){return '€'+Math.round(n).toLocaleString('es-ES');}
function calc(){var dep=+d.value,mon=+m.value;dv.textContent=fmt(dep);mv.textContent=mon;out.textContent=fmt(dep*Math.pow(1.035,mon));}
d.addEventListener('input',calc);m.addEventListener('input',calc);calc();
})();</script>
<script>(function(){
function money(n){n=+n;return '€'+n.toLocaleString('es-ES',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)});}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>(function(){
var f=document.getElementById('ffuj8s'),d=document.getElementById('lnpv1t');
if(!f||!d)return;
f.addEventListener('change',function(){
  var n=f.querySelectorAll('fieldset').length,a=new Set();
  f.querySelectorAll('input:checked').forEach(function(i){a.add(i.name);});
  d.hidden=a.size<n;});
})();</script>

<script>(function(){
var b=document.querySelector('.fy2oj');if(!b)return;
function t(){b.classList.toggle('rstsv35',window.scrollY>600);}
window.addEventListener('scroll',t,{passive:true});t();
b.addEventListener('click',function(){try{window.scrollTo({top:0,behavior:'smooth'});}catch(e){window.scrollTo(0,0);}
var m=document.getElementById('top');if(m){try{m.focus({preventScroll:true});}catch(e){}}});
})();</script>

<script>(function(){
var f=document.getElementById('ffuj8s');if(!f)return;
var qs=[].slice.call(f.querySelectorAll('.fizujuq'));if(qs.length<2)return;
var done=document.getElementById('lnpv1t'),cta=f.querySelector('.ycxlw'),
back=f.querySelector('.ws86ccr'),wrap=f.querySelector('.rr65q'),
bar=wrap?wrap.querySelector('i'):null,step=f.querySelector('.py9af'),
lbl=step?step.getAttribute('data-l'):'',of=step?step.getAttribute('data-of'):'',at=0;
f.classList.add('yd27s');
function paint(fin){
  for(var i=0;i<qs.length;i++){qs[i].hidden=fin||i!==at;}
  if(wrap){wrap.hidden=false;}
  if(bar){bar.style.width=Math.round((fin?qs.length:at)/qs.length*100)+'%';}
  if(step){step.hidden=fin;step.textContent=lbl+' '+(at+1)+' '+of+' '+qs.length;}
  if(back){back.hidden=fin||at===0;}
  if(done){done.hidden=!fin;}
  if(cta){cta.hidden=!fin;}
}
function go(n){at=n;paint(false);try{qs[at].focus({preventScroll:true});}catch(e){qs[at].focus();}}
f.addEventListener('change',function(e){
  var t=e.target;if(!t||t.type!=='radio')return;
  var q=t.closest?t.closest('.fizujuq'):null;
  if(!q){q=t.parentNode;while(q&&q.tagName!=='FIELDSET'){q=q.parentNode;}}
  var i=qs.indexOf(q);if(i<0||i!==at)return;
  setTimeout(function(){
    if(at+1<qs.length){go(at+1);}
    else{paint(true);if(cta){try{cta.focus({preventScroll:true});}catch(e){}}}
  },240);});
if(back){back.addEventListener('click',function(){if(at>0){go(at-1);}});}
paint(false);
})();</script>



<script>
(function () {
  var MSG_WAIT = "Enviando\u2026";
  var MSG_ERR  = "No hemos podido enviar tus datos ahora. Int\u00e9ntalo de nuevo.";
  var THANKS   = "/thanks/";
  function rand(){ return (Math.random().toString(36).substring(2,12)+Math.random().toString(36).substring(2,6)).replace(/[^a-z0-9]/g,'').substring(0,16); }
  // one-time spinner CSS for the submit button's processing state
  if (!document.getElementById('ldf-spin-css')) {
    var _st = document.createElement('style'); _st.id = 'ldf-spin-css';
    _st.textContent = '.jub7vj{display:inline-block;width:1em;height:1em;margin-right:.5em;vertical-align:-.15em;border:2px solid currentColor;border-right-color:transparent;border-radius:50%;animation:ldfspin .6s linear infinite}@keyframes ldfspin{to{transform:rotate(360deg)}}';
    (document.head || document.documentElement).appendChild(_st);
  }
  var p = new URLSearchParams(location.search);
  // our click subid → hidden field → send.php click_id → iRev aff_sub3. Accept the
  // common tracker param names so whatever the traffic source appends is captured.
  var subid = p.get('subid') || p.get('sub_id') || p.get('clickid') || p.get('click_id')
            || p.get('cid') || p.get('utm_content')
            || (window.KTracking && KTracking.getSubId ? KTracking.getSubId() : '') || '';
  document.querySelectorAll('form[data-leadform]').forEach(function (form) {
    var tok = form.querySelector('.uuxe4');
    var tsf = form.querySelector('.tsdzgm');
    var loadTime = Date.now();
    if (tsf) tsf.value = String(loadTime);
    // Anti-bot: the js_token is written ONLY after a genuine human interaction with
    // the form (focus/key/pointer). A script that POSTs the form without ever
    // touching it never gets a token, and the edge worker rejects tokenless posts.
    var armed = false;
    function arm(){ if (armed) return; armed = true; if (tok && !tok.value) tok.value = rand(); }
    ['focusin','keydown','pointerdown','touchstart'].forEach(function (ev) {
      form.addEventListener(ev, arm, { once: true, passive: true });
    });
    var dom = form.querySelector('.zdje6'); if (dom && !dom.value) dom.value = location.hostname;
    var sub = form.querySelector('.sxaxwp'); if (sub && subid) sub.value = subid;  // only if a URL subid; else t.js fills it
    var phone = form.querySelector('input[type=tel]');
    var sending = false;
    function lock(b){ if(!b) return; b.dataset.lbl = b.dataset.lbl || b.innerHTML; b.disabled = true; b.setAttribute('aria-busy','1'); b.style.opacity='.75'; b.style.cursor='progress'; b.innerHTML='<span class="jub7vj" aria-hidden="true"></span>'+MSG_WAIT; }
    function unlock(b){ if(!b) return; b.disabled=false; b.removeAttribute('aria-busy'); b.style.opacity=''; b.style.cursor=''; if(b.dataset.lbl) b.innerHTML=b.dataset.lbl; }
    function err(msg){ var el=form.querySelector('[data-leaderr]'); if(!el){ el=document.createElement('p'); el.setAttribute('data-leaderr','1'); el.style.cssText='margin-top:.6rem;font-size:.85rem;line-height:1.35;color:#f87171;text-align:center'; form.appendChild(el);} el.textContent=msg; }
    form.addEventListener('submit', async function (e) {
      e.preventDefault();
      if (sending) return;
      sending = true;
      // stamp the client-measured dwell (ms since load) → the worker rejects
      // instant/near-instant submits that no human could produce.
      if (tsf) tsf.value = String(Date.now() - loadTime);
      var iti = (phone && window.intlTelInputGlobals) ? window.intlTelInputGlobals.getInstance(phone) : null;
      if (iti) {
        // separateDialCode expects a NATIONAL number in the field. If the user ALSO typed the
        // country code (e.g. 351961654221 with the +351 selector) it would double to
        // +351351…; when that makes the number invalid, re-parse the raw digits as a full
        // international number so the country code isn't added twice.
        try {
          var dc = (iti.getSelectedCountryData() || {}).dialCode || '';
          var raw = (phone.value || '').replace(/[^\d+]/g, '');
          if (raw && raw.charAt(0) !== '+' && dc && raw.indexOf(dc) === 0 && !iti.isValidNumber()) {
            iti.setNumber('+' + raw);
          }
        } catch (e3) {}
        try { phone.value = iti.getNumber() || phone.value; } catch (e4) {}
        var cc = form.querySelector('[name=country]'), d = iti.getSelectedCountryData();
        if (cc && d && d.iso2) cc.value = d.iso2.toUpperCase();
      }
      var btn = form.querySelector('button[type=submit]'); lock(btn);
      var prev = form.querySelector('[data-leaderr]'); if (prev) prev.textContent = '';
      try {
        var r = await fetch(form.action, { method: 'POST', body: new FormData(form), headers: { Accept: 'application/json' } });
        var data = await r.json().catch(function () { return {}; });
        var dest = data && data.redirect_url;
        if (dest === '/thanks/' || dest === '/thanks') dest = THANKS;
        if (dest) { location.href = dest; return; }
        if (data && data.success) { location.href = THANKS; return; }
        sending = false; unlock(btn);
        err((data && data.error) || MSG_ERR);
      } catch (e2) {
        sending = false; unlock(btn);
        err(MSG_ERR);
      }
    });
  });
})();
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css" media="print" onload="this.media='all'"><noscript></noscript>

<script>
(function () {
  var phones = document.querySelectorAll('form[data-leadform] input[type=tel]');
  if (!phones.length) return;
  var loading = false, loaded = false;
  function init() {
    phones.forEach(function (input) {
      if (input.dataset.itiReady) return;
      input.dataset.itiReady = '1';
      var form = input.closest('form');
      var hid = form ? form.querySelector('[name=phone_country]') : null;
      window.intlTelInput(input, {
        initialCountry: (hid && hid.value) || 'es',
        separateDialCode: true,
        utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js'
      });
    });
  }
  // Lazy: pull the widget (incl. the 58 KB utils.js) only when the visitor first
  // touches a phone field — keeps it off the critical path (FCP/LCP) while still
  // ready before they can finish typing a number.
  function load() {
    if (loaded) { init(); return; }
    if (window.intlTelInput) { loaded = true; init(); return; }
    if (loading) return; loading = true;
    var s = document.createElement('script');
    s.src = 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js';
    s.onload = function () { loaded = true; init(); };
    document.head.appendChild(s);
  }
  // Init immediately so the flag + dial code show on load (this script is at the end
  // of <body>, so it never blocks first paint). The heavy utils.js is still fetched
  // asynchronously by the widget AFTER init, keeping it off the critical render path.
  load();
  phones.forEach(function (input) {
    input.addEventListener('focus', load);
    input.addEventListener('touchstart', load, { passive: true });
  });
})();
</script>
<script>/*slider-fill*/
(function () {
  function fill(r) {
    var mn = parseFloat(r.min) || 0, mx = parseFloat(r.max);
    if (!(mx > mn)) mx = 100;
    var p = Math.max(0, Math.min(100, ((parseFloat(r.value) || 0) - mn) / (mx - mn) * 100));
    var cs = getComputedStyle(r);
    var acc = (cs.getPropertyValue('--accent') || '#2563eb').trim();
    var trk = (cs.getPropertyValue('--border') || 'rgba(120,130,150,.22)').trim();
    r.style.background = 'linear-gradient(90deg,' + acc + ' ' + p + '%,' + trk + ' ' + p + '%)';
  }
  document.querySelectorAll('input[type=range]').forEach(function (r) {
    r.addEventListener('input', function () { fill(r); });
    fill(r);
  });
})();
</script>
<script>/*anim-failsafe*/
(function () {
  var SEL = '[data-anim],[data-animate],[data-aos],[data-reveal],[data-scroll],[class*="reveal"],[class*="fade"],[class*="aos"]';
  function show(el){
    // remove the hooks the design's opacity:0 rule targets, then force-show as backup
    ['data-anim','data-animate','data-aos','data-reveal','data-scroll'].forEach(function(a){ el.removeAttribute(a); });
    el.classList.remove('reveal','fade','fade-in','fade-up','aos-init','will-reveal','animate');
    el.style.setProperty('opacity','1','important'); el.style.setProperty('transform','none','important');
    el.style.setProperty('visibility','visible','important'); el.style.setProperty('filter','none','important');
  }
  function isHidden(el){ return el.offsetHeight > 0 && parseFloat(getComputedStyle(el).opacity) < 0.08; }
  // reveal a block only when it actually reaches the viewport, and only if its own
  // reveal is STILL missing ~1.2s after it got there (i.e. genuinely broken)
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function(es){ es.forEach(function(e){
        if (!e.isIntersecting) return;
        var el = e.target; io.unobserve(el);
        setTimeout(function(){ if (isHidden(el)) show(el); }, 1200);
    }); }, {rootMargin: '0px 0px -5% 0px'});
    setTimeout(function(){ [].forEach.call(document.querySelectorAll(SEL), function(el){ if (isHidden(el)) io.observe(el); }); }, 1500);
  }
  // counter fallback: a plain number beats a stat frozen at "0" for a visitor who
  // never scrolls the count-up into view (no-op once the real count-up has run)
  setTimeout(function(){ document.querySelectorAll('[data-count]').forEach(function(el){
      var t = el.getAttribute('data-count'); if (t && !/[1-9]/.test(el.textContent||'')) el.textContent = t; }); }, 8000);
})();
</script>
<div id="khkg1" role="dialog" aria-label="consent" hidden><div class="mybps6q"><span class="hktfw">Usamos cookies para mejorar tu experiencia.</span><button type="button" id="mcgav1">Entendido</button><button type="button" id="gngkru1">Rechazar</button></div></div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}var b=document.getElementById('khkg1');if(!b)return;b.hidden=false;b.style.display='flex';function fdbn(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}var y=document.getElementById('mcgav1'),n=document.getElementById('gngkru1');if(y)y.addEventListener('click',function(){fdbn('yes');});if(n)n.addEventListener('click',function(){fdbn('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>
