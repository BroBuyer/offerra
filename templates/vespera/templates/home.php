<?php
require __DIR__ . '/../includes/header.php';
$h = $langData['hero'];
$live = $langData['live'];
$trust = $langData['trust'];
$features = $langData['features'];
$earn = $langData['earnings'];
$ai = $langData['ai'];
$testimonials = $langData['testimonials'];
$scar = $langData['scarcity'];
$howto = $langData['howto'];
$faq = $langData['faq'];
$seo = $langData['seo'];
$office = $langData['office'];
$quiz = $langData['quiz'];
$contactUrl = lang_path($lang, 'contact');
$officeMore = str_replace('{contact}', e($contactUrl), $office['more']);

$tierIcons = [
    'layers' => '<path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>',
    'pulse' => '<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>',
    'star' => '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>',
    'award' => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>',
];
$yearColors = [
    ['w' => '58%', 'c' => '#3b82f6'],
    ['w' => '65%', 'c' => '#06b6d4'],
    ['w' => '72%', 'c' => '#10b981'],
    ['w' => '88%', 'c' => '#e879b0'],
];
?>

<section class="hero" aria-label="Hero">
  <div class="container hero-grid">
    <div class="hero-left">
      <div class="sys-status" id="sysStatus" aria-live="polite">
        <span class="sys-live-dot" aria-hidden="true"></span>
        <span class="sys-live-text"><?= e($live['label']) ?></span>
        <span class="sys-divider" aria-hidden="true"></span>
        <span class="sys-metric">
          <span class="sys-metric-label"><?= e($live['latency']) ?></span>
          <span class="sys-metric-val" id="live-latency">—</span>
        </span>
        <span class="sys-divider" aria-hidden="true"></span>
        <span class="sys-metric">
          <span class="sys-metric-label"><?= e($live['api']) ?></span>
          <span class="sys-metric-val sys-ok"><?= e($live['api_live']) ?></span>
        </span>
        <span class="sys-divider" aria-hidden="true"></span>
        <span class="sys-metric">
          <span class="sys-metric-label"><?= e($live['orders']) ?></span>
          <span class="sys-metric-val" id="live-orders">—</span>
        </span>
        <span class="sys-divider" aria-hidden="true"></span>
        <span class="sys-metric-val" id="live-clock">—</span>
      </div>

      <h1 class="hero-h1">
        <?= e($h['title_before']) ?><span class="accent"><?= e($h['title_accent']) ?></span><?= e($h['title_mid']) ?><span class="accent"><?= e($h['title_accent2']) ?></span>
      </h1>
      <div class="hero-desc">
        <p><?= $h['lead'] ?></p>
      </div>

      <div class="golv-trust-band reveal">
        <div class="golv-trust-card">
          <span class="golv-trust-badge"><?= e($trust['label']) ?></span>
          <div class="golv-trust-body">
            <h3 class="golv-trust-heading"><?= e($trust['heading']) ?></h3>
            <div class="golv-trust-score">
              <span class="golv-trust-num"><?= e($trust['score']) ?></span>
              <span class="golv-trust-stars">★★★★★</span>
            </div>
            <p class="golv-trust-meta"><?= $trust['based'] ?></p>
          </div>
        </div>
      </div>
    </div>

    <?php
      $formId = 'lead-form';
      $wrapId = 'lead-form-wrap';
      require __DIR__ . '/../includes/lead-form.php';
    ?>
  </div>
</section>

<section class="u21-market" aria-label="Market">
  <div class="container">
    <div class="u21-market-grid">
      <?php foreach ($features as $f): ?>
      <article class="u21-market-card reveal">
        <p class="u21-market-kicker"><?= e($f['tag']) ?></p>
        <h3><?= e($f['title']) ?></h3>
        <p><?= e($f['text']) ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="earn-section" id="earnings" aria-label="Earnings">
  <div class="earn-bg-grid" aria-hidden="true"></div>
  <div class="earn-bg-glow earn-bg-glow--left" aria-hidden="true"></div>
  <div class="earn-bg-glow earn-bg-glow--right" aria-hidden="true"></div>

  <div class="container">
    <div class="earn-header">
      <div class="earn-label">
        <span class="earn-label-dot" aria-hidden="true"></span>
        <?= e($earn['badge']) ?>
      </div>
      <h2 class="earn-title">
        <?= e($earn['title_before']) ?><span class="earn-accent"><?= e($earn['title_accent']) ?></span><?= e($earn['title_after']) ?>
      </h2>
      <p class="earn-subtitle"><?= $earn['lead'] ?></p>
    </div>

    <div class="earn-kpi-strip" id="earnKpis">
      <?php foreach ($earn['stats'] as $i => $s):
        $decimals = (int) ($s['decimals'] ?? (str_contains((string) $s['value'], '.') ? 1 : 0));
        $kpiPrefix = (string) ($s['prefix'] ?? '');
        $kpiSuffix = (string) ($s['suffix'] ?? '');
        $kpiDisplay = $decimals > 0
            ? number_format((float) $s['value'], $decimals, '.', '')
            : (string) $s['value'];
      ?>
      <?php if ($i > 0): ?><div class="earn-kpi-divider" aria-hidden="true"></div><?php endif; ?>
      <div class="earn-kpi">
        <div class="earn-kpi-value"
          data-count="<?= e($s['value']) ?>"
          data-prefix="<?= e($kpiPrefix) ?>"
          data-suffix="<?= e($kpiSuffix) ?>"
          data-decimals="<?= $decimals ?>"><?= e($kpiPrefix.$kpiDisplay.$kpiSuffix) ?></div>
        <div class="earn-kpi-label"><?= e($s['label']) ?></div>
        <div class="earn-kpi-sub"><?= e($s['note']) ?></div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="earn-main-grid">
      <div class="earn-income-panel">
        <div class="earn-card-label"><?= e($earn['tiers_label']) ?></div>
        <div class="earn-card-title">
          <?= $earn['tiers_title_before'] ?><span class="pink"><?= e($earn['tiers_title_accent']) ?></span>
        </div>
        <p class="earn-income-intro"><?= e($earn['tiers_lead']) ?></p>
        <div class="earn-xp-rows">
          <?php foreach ($earn['tiers'] as $tier):
            $icon = $tierIcons[$tier['icon'] ?? 'star'] ?? $tierIcons['star'];
            $top = !empty($tier['top']);
          ?>
          <div class="earn-xp-row<?= $top ? ' earn-xp-row--top' : '' ?>" style="--bc:<?= e($tier['color']) ?>">
            <div class="earn-xp-left">
              <div class="earn-xp-badge" style="--bc:<?= e($tier['color']) ?>">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><?= $icon ?></svg>
              </div>
              <div>
                <div class="earn-xp-title"><?= e($tier['title']) ?></div>
                <div class="earn-xp-desc"><?= e($tier['desc']) ?></div>
              </div>
            </div>
            <div class="earn-xp-amount">
              <span class="earn-xp-val<?= $top ? ' earn-xp-val--top' : '' ?>" style="color:<?= e($tier['color']) ?>"><?= e($tier['value']) ?></span>
              <?php if (($tier['unit'] ?? '') !== ''): ?>
              <span class="earn-xp-day"><?= e($tier['unit']) ?></span>
              <?php endif; ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <p class="earn-income-note"><?= e($earn['disclaimer']) ?></p>
      </div>

      <div class="earn-aihead-wrap">
        <img src="<?= e(hero_image_url()) ?>" alt="<?= e($earn['ai_alt']) ?>" title="<?= e($earn['ai_alt']) ?>" class="earn-aihead-img" loading="eager" decoding="async" width="560" height="560">
        <div class="earn-chip earn-chip--tl">
          <div class="earn-chip-val">94.7%</div>
          <div class="earn-chip-desc"><?= e($ai['precision']) ?></div>
        </div>
        <div class="earn-chip earn-chip--br">
          <div class="earn-chip-val">3,000+</div>
          <div class="earn-chip-desc"><?= e($ai['signals']) ?></div>
        </div>
      </div>
    </div>

    <div class="earn-winrate-section">
      <div class="earn-winrate-left">
        <div class="earn-card-label"><?= e($earn['trend_label']) ?></div>
        <h3 class="earn-winrate-title"><?= e($ai['title']) ?></h3>
        <p class="earn-winrate-desc"><?= e($ai['lead']) ?></p>
        <div class="earn-winrate-stats">
          <?php foreach ($ai['kpis'] as $kpi): ?>
          <div class="earn-ws">
            <div class="earn-ws-val"><?= e($kpi['value']) ?></div>
            <div class="earn-ws-label"><?= e($kpi['label']) ?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="earn-winrate-right">
        <div class="earn-winrate-chart glass-card">
          <div class="earn-wc-header">
            <span><?= e($ai['chart_label']) ?></span>
            <span class="earn-wc-current"><?= e($ai['chart_highlight']) ?></span>
          </div>
          <div class="earn-wc-rows">
            <?php foreach ($ai['years'] as $yi => $y):
              $meta = $yearColors[$yi] ?? ['w' => $y['rate'] . '%', 'c' => '#2dd4bf'];
              $w = $y['w'] ?? $meta['w'];
              $c = $y['c'] ?? $meta['c'];
              $active = !empty($y['up']);
            ?>
            <div class="earn-wc-row<?= $active ? ' earn-wc-row--active' : '' ?>">
              <span class="earn-wc-year"><?= e($y['year']) ?></span>
              <div class="earn-wc-bar-wrap">
                <div class="earn-wc-bar" style="--w:<?= e($w) ?>;--c:<?= e($c) ?>"></div>
              </div>
              <span class="earn-wc-pct<?= $active ? ' earn-wc-pct--active' : '' ?>"><?= (int) $y['rate'] ?>%<?= $active ? ' ↑' : '' ?></span>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="earn-wc-footer">
            <span class="earn-trend-arrow">↗</span> <?= e($ai['growth']) ?>
          </div>
        </div>
      </div>
    </div>

    <div class="earn-earners">
      <div class="earn-earners-header">
        <div class="earn-card-label"><?= e($testimonials['eyebrow']) ?></div>
        <h3 class="earn-earners-title"><?= e($testimonials['title']) ?></h3>
      </div>
      <div class="earn-earners-grid">
        <?php foreach ($testimonials['items'] as $t):
          $featured = !empty($t['featured']) || ($t['badge'] ?? '') !== '';
        ?>
        <article class="earn-earner-card glass-card<?= $featured ? ' earn-earner-card--featured' : '' ?>">
          <?php if (($t['badge'] ?? '') !== ''): ?>
          <div class="earn-earner-featured-badge"><?= e($t['badge']) ?></div>
          <?php endif; ?>
          <img src="<?= e(public_url('assets/img/' . ($t['avatar'] ?? 'avatar-1.webp'))) ?>" alt="" class="earn-earner-avatar" loading="lazy" width="200" height="200" decoding="async">
          <div class="earn-earner-body">
            <div class="earn-earner-name"><?= e($testimonials['verified']) ?> <span class="earn-earner-flag"><?= e($t['flag']) ?></span></div>
            <div class="earn-earner-role"><?= e($t['role']) ?></div>
            <div class="earn-earner-profit<?= $featured ? ' earn-earner-profit--featured' : '' ?>">
              <?= e($t['result']) ?> <span><?= e($t['result_span'] ?? '') ?></span>
            </div>
            <div class="earn-earner-quote">“<?= e($t['quote']) ?>”</div>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="earn-bottom-cta">
      <div class="earn-bottom-cta-inner glass-card cta-timer-wrap">
        <div class="cta-timer-slots">
          <span class="cta-timer-dot" aria-hidden="true"></span>
          <?= $scar['places'] ?>
        </div>
        <h3 class="cta-timer-headline"><?= e($scar['title']) ?></h3>
        <div class="cta-timer-blocks" id="countdown">
          <div class="cta-tb"><span class="cta-tb-val" data-cd="d">02</span><span class="cta-tb-label"><?= e($scar['days']) ?></span></div>
          <div class="cta-tb-sep">:</div>
          <div class="cta-tb"><span class="cta-tb-val" data-cd="h">13</span><span class="cta-tb-label"><?= e($scar['hours']) ?></span></div>
          <div class="cta-tb-sep">:</div>
          <div class="cta-tb"><span class="cta-tb-val" data-cd="m">04</span><span class="cta-tb-label"><?= e($scar['minutes']) ?></span></div>
          <div class="cta-tb-sep">:</div>
          <div class="cta-tb"><span class="cta-tb-val" data-cd="s">43</span><span class="cta-tb-label"><?= e($scar['seconds']) ?></span></div>
        </div>
        <a href="#lead-form" class="btn-primary cta-timer-btn"><?= e($scar['cta']) ?></a>
        <p class="cta-timer-manager-note">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true" style="flex-shrink:0;margin-top:2px"><path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.61 21 3 13.39 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.46.57 3.58a1 1 0 0 1-.25 1.01l-2.2 2.2z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <?= e($scar['note']) ?>
        </p>
      </div>
    </div>
  </div>
</section>

<section class="section howto-section" id="how-it-works">
  <div class="container reveal">
    <div class="section-eyebrow"><?= e($howto['eyebrow']) ?></div>
    <h2><?= e($howto['title']) ?></h2>
    <ol class="howto-steps">
      <?php foreach ($howto['steps'] as $step): ?>
      <li class="howto-step card">
        <h3><?= e($step['title']) ?></h3>
        <p><?= e($step['text']) ?></p>
      </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<section class="section" aria-label="FAQ">
  <div class="container reveal">
    <div class="section-eyebrow"><?= e($faq['eyebrow']) ?></div>
    <h2><?= e($faq['title']) ?></h2>
    <p class="section-lead"><?= e($faq['subtitle']) ?></p>
    <div class="faq-list">
      <?php foreach ($faq['items'] as $item): ?>
      <div class="faq-item">
        <button type="button"><?= e($item['q']) ?></button>
        <div class="faq-a"><?= e($item['a']) ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container reveal">
    <div class="section-eyebrow"><?= e($seo['eyebrow']) ?></div>
    <h2><?= e($seo['title']) ?></h2>
    <p><?= e($seo['p1']) ?></p>
    <p style="margin-top:1rem"><?= e($seo['p2']) ?></p>
    <p style="margin-top:1rem"><?= e($seo['p3']) ?></p>
    <p style="margin-top:1rem"><?= e($seo['p4']) ?></p>
    <div class="seo-grid">
      <?php foreach ($seo['cards'] as $card): ?>
      <article class="seo-card card">
        <h3><?= e($card['title']) ?></h3>
        <p><?= e($card['text']) ?></p>
      </article>
      <?php endforeach; ?>
    </div>
    <p class="risk-note"><?= e($seo['risk']) ?></p>
  </div>
</section>

<section class="section office-section" aria-label="Office">
  <div class="container reveal">
    <div class="section-eyebrow"><?= e($office['eyebrow']) ?></div>
    <h2><?= e($office['title']) ?></h2>
    <p class="section-lead"><?= e($office['lead']) ?></p>

    <div class="office-hq">
      <div class="office-map-wrap">
        <iframe title="<?= e($office['hq']) ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
          src="https://maps.google.com/maps?q=200%20Park%20Avenue%20New%20York%20NY%2010166&t=&z=12&ie=UTF8&iwloc=&output=embed"></iframe>
        <span class="office-map-pill">
          <span class="office-map-pill-dot" aria-hidden="true"></span>
          <?= e($office['hq']) ?>
        </span>
      </div>

      <div class="office-info card">
        <div class="office-brand">
          <img class="office-brand-logo" src="<?= e(public_url('assets/icons/logo.svg')) ?>" width="36" height="36" alt="" aria-hidden="true">
          <span class="office-brand-name"><?= e(SITE_NAME) ?></span>
        </div>

        <div class="office-rows">
          <div class="office-row">
            <span class="office-ico" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21s7-5.2 7-11a7 7 0 1 0-14 0c0 5.8 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
            </span>
            <div>
              <div class="office-row-label"><?= e($office['address_label']) ?></div>
              <div class="office-row-val"><?= e($office['address']) ?></div>
            </div>
          </div>
          <div class="office-row">
            <span class="office-ico" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M3 12h18"/></svg>
            </span>
            <div>
              <div class="office-row-label"><?= e($office['building_label']) ?></div>
              <div class="office-row-val"><?= e($office['building']) ?></div>
            </div>
          </div>
          <div class="office-row">
            <span class="office-ico" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
            </span>
            <div>
              <div class="office-row-label"><?= e($office['hours_label']) ?></div>
              <div class="office-row-val"><?= e($office['hours']) ?></div>
            </div>
          </div>
          <div class="office-row">
            <span class="office-ico" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 7 9-7"/></svg>
            </span>
            <div>
              <div class="office-row-label"><?= e($office['email_label']) ?></div>
              <div class="office-row-val"><a class="office-mail" href="mailto:<?= e($office['email']) ?>"><?= e($office['email']) ?></a></div>
            </div>
          </div>
        </div>

        <a class="office-directions" href="https://maps.google.com/?q=200+Park+Avenue+New+York+NY+10166" target="_blank" rel="noopener">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 2 11 13"/><path d="M22 2 15 22l-4-9-9-4 20-7z"/></svg>
          <?= e($office['directions']) ?>
        </a>
      </div>
    </div>

    <div class="office-more">
      <span class="office-more-ico" aria-hidden="true">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M3 12h18"/><path d="M12 3a15 15 0 0 1 0 18"/><path d="M12 3a15 15 0 0 0 0 18"/></svg>
      </span>
      <p><?= $officeMore ?></p>
    </div>
  </div>
</section>

<section class="section u21-quiz" aria-label="Quiz">
  <div class="container reveal">
    <form class="quiz-panel glass-card" id="fit-quiz">
      <div class="section-eyebrow"><?= e($quiz['eyebrow']) ?></div>
      <h2 class="quiz-panel-title"><?= e($quiz['title']) ?></h2>
      <p class="quiz-panel-lead"><?= e($quiz['lead']) ?></p>
      <div class="quiz-block">
        <div class="quiz-q"><?= e($quiz['q1']) ?></div>
        <div class="quiz-options">
          <label><input type="radio" name="q1" value="a" required> <span><?= e($quiz['q1a']) ?></span></label>
          <label><input type="radio" name="q1" value="b"> <span><?= e($quiz['q1b']) ?></span></label>
          <label><input type="radio" name="q1" value="c"> <span><?= e($quiz['q1c']) ?></span></label>
        </div>
      </div>
      <div class="quiz-block">
        <div class="quiz-q"><?= e($quiz['q2']) ?></div>
        <div class="quiz-options">
          <label><input type="radio" name="q2" value="a" required> <span><?= e($quiz['q2a']) ?></span></label>
          <label><input type="radio" name="q2" value="b"> <span><?= e($quiz['q2b']) ?></span></label>
          <label><input type="radio" name="q2" value="c"> <span><?= e($quiz['q2c']) ?></span></label>
        </div>
      </div>
      <div class="quiz-block">
        <div class="quiz-q"><?= e($quiz['q3']) ?></div>
        <div class="quiz-options">
          <label><input type="radio" name="q3" value="a" required> <span><?= e($quiz['q3a']) ?></span></label>
          <label><input type="radio" name="q3" value="b"> <span><?= e($quiz['q3b']) ?></span></label>
        </div>
      </div>
      <button class="btn-primary" type="submit"><?= e($quiz['cta']) ?></button>
    </form>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
