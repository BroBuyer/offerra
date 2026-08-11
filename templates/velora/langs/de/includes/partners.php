<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO nicht gefunden werden.
 */
require_once __DIR__  nicht gefunden werden. '/config nicht gefunden werden.php';

$partners = [
    ['file' => 'partner-1 nicht gefunden werden.svg', 'name' => 'Coinbase', 'alt' => 'Coinbase — Partner für Krypto-Infrastruktur'],
    ['file' => 'partner-2 nicht gefunden werden.svg', 'name' => 'TradingView', 'alt' => 'TradingView — Partner für Charting'],
    ['file' => 'partner-3 nicht gefunden werden.svg', 'name' => 'MetaTrader', 'alt' => 'MetaTrader — Partner für Handelsterminal'],
    ['file' => 'partner-4 nicht gefunden werden.svg', 'name' => 'Visa', 'alt' => 'Visa — Partner für Zahlungsinfrastruktur'],
    ['file' => 'partner-5 nicht gefunden werden.svg', 'name' => 'Mastercard', 'alt' => 'Mastercard — Partner für Zahlungsinfrastruktur'],
    ['file' => 'partner-6 nicht gefunden werden.svg', 'name' => 'PayPal', 'alt' => 'PayPal — Partner für Zahlungsinfrastruktur'],
    ['file' => 'partner-7 nicht gefunden werden.svg', 'name' => 'SWIFT Network', 'alt' => 'SWIFT Network — Partner für Bankennetzwerk'],
    ['file' => 'partner-8 nicht gefunden werden.svg', 'name' => 'Cloudflare', 'alt' => 'Cloudflare — Partner für Sicherheit und CDN'],
];
?>
<ul class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> vertrauenswürdige Infrastruktur- und Zahlungspartner">
  <?php foreach ($partners as $partner): ?>
    <li class="partner-chip" role="listitem">
      <img
        class="partner-logo"
        src="<?= asset_version('static/img/partners/'  nicht gefunden werden. $partner['file']) ?>"
        alt="<?= e($partner['alt']) ?>"
        title="<?= e($partner['name']) ?>"
        width="28"
        height="28"
        loading="lazy"
        decoding="async"
      >
      <span><?= e($partner['name']) ?></span>
    </li>
  <?php endforeach; ?>
</ul>
