<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('KI und Echtzeit-Ausführung | Offizielle Website');
$page_description = SITE_NAME . ' — KI-Technologie, die Märkte analysiert und Orders in Echtzeit ausführt, mit einem persönlichen Analysten an Ihrer Seite, um eine neue Einkommensquelle aufzubauen.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">Zum Inhalt springen</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Hauptseite">
 <a href="#platform">Produkt</a>
 <a href="#how">So funktioniert es.</a>
 <a href="#markets">Märkte in Echtzeit</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Eröffnen Sie Ihr Konto</a>
 <button class="nav-toggle" aria-label="Menü öffnen" aria-expanded="false" aria-controls="navLinks" type="button">
 <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
 </button>
 </div>
 </div>
</header>

<main id="top">

<!-- HERO — left: copy + trust chips + CTA · right: lead form (same layout as the reference) -->
<section class="hero" id="hero" aria-labelledby="hero-title">
 <div class="shell hero-grid">
 <div>
 <span class="eyebrow">KI in Echtzeit + menschliche Analyse</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span> — investieren Sie jetzt und sehen Sie Ihr Kapital wachsen</h1>
 <p class="hero-sub">Eine künstliche Intelligenz scannt die Märkte und führt Orders in Bruchteilen einer Sekunde aus, während Ihr persönlicher Analyst jede Entscheidung an Ihr Profil anpasst. Keine Erfahrung nötig — Sie werden von Anfang bis Ende begleitet.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Reguliert</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Getrennte Gelder</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9.600 Kunden</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> Bewertung</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Durch SSL geschützt</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Support 24/7</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Schnelle Ausführung</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Jetzt starten — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> Min.</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Eröffnen Sie Ihr Konto</h2>
 <p class="sub">Starten Sie in wenigen Minuten.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Ich möchte starten';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Kennzahlen">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Aktive Nutzer</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>Handelsvolumen</span></div>
 <div class="stat"><b>99,1%</b><span>Verfügbarkeit der Signale</span></div>
 <div class="stat"><b>24/7</b><span>Support</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">Einblick in <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Verfolgen Sie Ihr Konto in Echtzeit</h2>
 <p class="lede">Jede von Ihrem Analysten ausgeführte Order wird hier erfasst — Einstiege, Ausstiege und verifizierte Ergebnisse für jedes Paar, live übertragen.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Kerzencharts und Markttiefe in Echtzeit, auf jedem Gerät</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Orders per Tipp senden mit sofortiger Bestätigung</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Watchlists und Kursalarme, die Sie begleiten</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Jetzt starten</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — Mobiles Trading mit Krypto-Charts in Echtzeit</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Die Plattform</span><h2 id="features-title">Alles, was Sie brauchen, auf einer schnellen Plattform.</h2><p class="lede">Keine Charts beobachten, keine Orders timen. Die Engine von <?= e(SITE_NAME) ?> überwacht Orderbücher in Echtzeit an Krypto-Börsen, globale Aktien-APIs und die wichtigsten Forex-Paare — und löst Orders aus, sobald die Modelle ein vorteilhaftes Setup finden.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Ausführung in Bruchteilen einer Sekunde an jedem verbundenen Handelsplatz</h3><p><?= e(SITE_NAME) ?> hält latenzarme API-Verbindungen zu jeder unterstützten Börse. Wenn das Modell ein Signal auslöst, wird die Order geroutet, ausgeführt und in Ihrem Dashboard erfasst — vor dem nächsten Tick.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>24 Stunden aktiv, in allen Sitzungen</h3><p>Der Kryptomarkt schläft nie — und die Engine von <?= e(SITE_NAME) ?> auch nicht. Sie scannt Paare weiter an Wochenenden und Feiertagen, damit Sie kein Fenster verpassen.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Berichte in mehreren Währungen</h3><p>Jeder Saldo, jede Order, jede Auszahlung erscheint in Ihrer Landeswährung. Kein versteckter Umrechnungsschritt.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Getrenntes Kapital</h3><p>Ihre Mittel bleiben auf Ihrem eigenen Konto. <?= e(SITE_NAME) ?> hat niemals die Verwahrung — die Engine darf nur Orders routen.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Sicherheit auf Bankniveau</h3><p>TLS-Verschlüsselung auf der gesamten Plattform, Zwei-Faktor-Authentifizierung standardmäßig und vierteljährliche Infrastruktur-Audits durch Dritte. Handelsbelege auf der Blockchain erfasst.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Drei Anlageklassen, eine Plattform</h3><p>Die meisten Retail-Plattformen beschränken sich auf einen Markt. <?= e(SITE_NAME) ?> handelt Krypto, notierte Aktien und wichtige Forex-Paare im selben Dashboard.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Voreingestellte Risikolimits bei jeder Position</h3><p>Stop-Loss, maximaler Drawdown und Kapitalallokationslimits werden pro Anlageklasse konfiguriert. Die Engine schließt automatisch jedes Geschäft, das ein Limit überschreitet — der Vorgang wird in Ihrer Audit-Historie erfasst.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Märkte in Echtzeit</span>
 <h2 id="markets-title">Handeln Sie Bitcoin, Ethereum und mehr</h2>
 <p class="lede">Echtzeitkurse, erweiterte Indikatoren und ein professioneller Blick auf die Märkte, die Sie interessieren.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Ich möchte Marktzugang</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Märkte</span><span class="mkt-live"><i></i>Live</span></div>
 <div class="mkt-list">
 <div class="mkt-row" data-sym="BTC"><div class="mkt-c"><b>BTC</b><span>BTC/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 64.671</b><span class="chg down">-1,06%</span></div></div>
 <div class="mkt-row" data-sym="ETH"><div class="mkt-c"><b>ETH</b><span>ETH/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1.881</b><span class="chg down">-2,55%</span></div></div>
 <div class="mkt-row" data-sym="SOL"><div class="mkt-c"><b>SOL</b><span>SOL/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 76,62</b><span class="chg down">-1,72%</span></div></div>
 <div class="mkt-row" data-sym="XRP"><div class="mkt-c"><b>XRP</b><span>XRP/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1,11</b><span class="chg down">-0,97%</span></div></div>
 </div>
 </div>
 </div>
</section>

<!-- HOW IT WORKS -->
<section class="sec" id="how" aria-labelledby="how-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">So funktioniert es</span><h2 id="how-title">So funktioniert es.</h2><p class="lede">Modernste Technologie und ein echter menschlicher Analyst, die in Echtzeit zusammenarbeiten, um Ihnen beim Aufbau einer neuen Einkommensquelle zu helfen — mit Begleitung bei jedem Schritt.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Konto erstellen</h3><p>Registrieren Sie sich in Minuten nur mit Ihrer E-Mail.</p></div>
 <div class="step"><div class="n">2</div><h3>E-Mail bestätigen</h3><p>Bestätigen Sie Ihre Adresse, um Ihr Konto zu schützen.</p></div>
 <div class="step"><div class="n">3</div><h3>Auf Ihr Konto einzahlen</h3><p>Fügen Sie Guthaben ab <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> auf Ihre Weise hinzu.</p></div>
 <div class="step"><div class="n">4</div><h3>Strategie festlegen</h3><p>Wählen Sie Ihre Ziele; Ihr Analyst personalisiert den Plan.</p></div>
 <div class="step"><div class="n">5</div><h3>Mit dem Handel beginnen</h3><p>Folgen Sie geführten Signalen und wachsen Sie in Ihrem Tempo.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Einzahlungen</span><h2 id="payment-title">Einzahlen mit Methoden, die Sie bereits kennen</h2><p class="lede">Ein- und auszahlen über sichere, vertraute Kanäle — ohne versteckte Gebühren.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Banküberweisung</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Was Mitglieder sagen</span><h2 id="reviews-title">Was unsere Investoren sagen</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>„Mein Analyst hat mir alles klar erklärt. Ich habe meine Ziele einmal festgelegt und sehe jetzt genau, wie mein Kapital wächst — ohne bei jeder Bewegung nervös zu werden.“</p><div class="who"><div class="ini">A</div><div><b>Anna Schneider</b><span>Berlin</span></div></div></div>
 <div class="card"><p>„Ich hatte noch nie investiert — mein Analyst kümmerte sich um die Strategie und erklärte jeden Schritt. Keine leeren Versprechen, kein Druck, und Auszahlungen kommen wie erwartet.“</p><div class="who"><div class="ini">T</div><div><b>Thomas Müller</b><span>München</span></div></div></div>
 <div class="card"><p>„Ich habe klein angefangen zum Testen. Transparenz und Support gaben mir die Sicherheit, weiter aufzubauen.“</p><div class="who"><div class="ini">S</div><div><b>Sophie Weber</b><span>Hamburg</span></div></div></div>
 <div class="card"><p>„Die Analysen kommen zu mir — ich genehmige oder passe in Minuten an. Das passt perfekt in meinen Alltag, ohne die Arbeit zu stören.“</p><div class="who"><div class="ini">L</div><div><b>Lukas Fischer</b><span>Köln</span></div></div></div>
 <div class="card"><p>„Was mich überzeugt hat, war die Transparenz: jede Entscheidung wird erklärt, und ich sehe die Begründung, bevor etwas passiert.“</p><div class="who"><div class="ini">L</div><div><b>Laura Becker</b><span>Frankfurt</span></div></div></div>
 <div class="card"><p>„Der Support ist echt und immer erreichbar. Meine erste Analyse war praxisnah, und die Plattform ist seither stabil und vorhersehbar.“</p><div class="who"><div class="ini">M</div><div><b>Markus Hoffmann</b><span>Stuttgart</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Plattform</span><h2 id="capabilities-title">Wichtigste Funktionen im Überblick</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">KI-Engine</div>
 <div class="spec-v">Fortschrittliche Marktanalyse mit maschinellem Lernen</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Einzahlungsmethoden</div>
 <div class="spec-v">Kreditkarte, Banküberweisung, PayPal, digitale Wallets</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Plattformübergreifender Zugang</div>
 <div class="spec-v">Web, Tablet und Mobil — vollständig responsiv</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Signalgenauigkeit</div>
 <div class="spec-v">Bis zu 85 % bei unterstützten KI-Strategien</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Märkte</div>
 <div class="spec-v">Kryptowährungen, Forex, Aktien und Rohstoffe</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Registrierung</div>
 <div class="spec-v">Schnelle Kontoeröffnung mit geführter Verifizierung</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Support</div>
 <div class="spec-v">Professioneller Support rund um die Uhr — <a href="<?= page_url('contacts.php') ?>">Nachricht senden</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Fragen</span><h2 id="faq-title">Häufig gestellte Fragen.</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>Wie hoch ist die Mindesteinzahlung?</summary><p>Eröffnen und finanzieren Sie Ihr Konto ab der Mindesteinzahlung. Sie können im Laufe der Zeit Guthaben hinzufügen, während Ihr Plan voranschreitet.</p></details>
 <details><summary>Wie funktionieren Auszahlungen?</summary><p>Beantragen Sie jederzeit eine Auszahlung im Dashboard. Die Mittel kehren zur gewählten Zahlungsmethode zurück, unter Einhaltung der üblichen Bearbeitungszeiten.</p></details>
 <details><summary>Ist mein Geld sicher?</summary><p>Konten sind mit branchenüblicher Sicherheit und strenger Verifizierung geschützt. Wie bei jeder Investition ist Ihr Kapital einem Risiko ausgesetzt und Werte können fallen oder steigen.</p></details>
 <details><summary>Wie schnell kann ich starten?</summary><p>Die meisten Mitglieder schließen die Registrierung in wenigen Minuten ab. Sobald Ihre erste Einzahlung bestätigt ist, wird sofort ein Plan aktiviert.</p></details>
 <details><summary>Gibt es versteckte Gebühren?</summary><p>Kosten werden transparent angezeigt, bevor Sie sich verpflichten. Sie wissen immer genau, was für Ihren Plan gilt — keine Überraschungen.</p></details>
 <details><summary>Wie alt muss man mindestens sein, um sich zu registrieren?</summary><p>Sie müssen mindestens 18 Jahre alt sein, um ein Konto zu eröffnen und zu investieren. Zur Bestätigung von Alter und Identität kann eine Verifizierung erforderlich sein.</p></details>
 <details><summary>Welche Zahlungsmethoden werden unterstützt?</summary><p>Übliche Methoden wie Debit- und Kreditkarte, Banküberweisung, ausgewählte E-Wallets und Kryptowährungen werden unterstützt. Die genauen Optionen erscheinen beim Einzahlungsschritt.</p></details>
 <details><summary>Wann ist der Kundensupport erreichbar?</summary><p>Unser Support-Team arbeitet montags bis freitags von 9 bis 18 Uhr und verpflichtet sich, jede Anfrage innerhalb eines Werktags zu beantworten.</p></details>
 <details><summary>Wie werden Steuern behandelt?</summary><p>Steuern auf Anlagegewinne hängen von den Regeln Ihres Landes ab und liegen in Ihrer Verantwortung. Wir empfehlen, Aufzeichnungen zu führen und einen qualifizierten Steuerberater zu konsultieren.</p></details>
 <details><summary>Was ist KYC und warum ist es verpflichtend?</summary><p>KYC (Know Your Customer) ist eine Standardprüfung Ihrer Identität. Sie schützt Konten und gehört zur Eröffnung jedes Anlagekontos.</p></details>
 <details><summary>Brauche ich Erfahrung?</summary><p>Nein. Jedes Mitglied erhält einen persönlichen Finanzanalysten, der bei jedem Schritt begleitet — Vorkenntnisse der Märkte sind nicht nötig.</p></details>
 <details><summary>Wer verwaltet meine Investitionen?</summary><p>Ein dedizierter Finanzanalyst, unterstützt durch KI-Tools, der um Ihre Ziele und Ihr Risikoniveau herum arbeitet. Der Analyst verbindet fachliche Expertise mit Technologie — Entscheidungen bleiben menschlich.</p></details>
 <details><summary>Ist die Plattform reguliert?</summary><p>Ja — sie erfüllt nationale Finanz- und Cybersicherheitsstandards, mit integriertem Kontoschutz und strenger Verifizierung.</p></details>
 <details><summary>Kann ich später Guthaben hinzufügen?</summary><p>Ja. Sie können Ihr Konto jederzeit aufladen und Ihren Plan mit Ihrem Analysten anpassen, wenn sich Ihre Ziele weiterentwickeln.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">VERTRAUENSWÜRDIG</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Bewertungen</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b> Bewertungen · Basierend auf <b style="color:var(--text,#fff)">2.334</b> Bewertungen</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Jetzt starten</span>
 <h2 id="signup-title" class="cta-h">Eröffnen Sie Ihr Konto.</h2>
 <p class="lede">Sagen Sie uns, wie wir Sie erreichen können — ein Experte hilft beim ersten Schritt.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Eröffnen Sie Ihr Konto</h3>
 <p class="sub">Starten Sie in wenigen Minuten.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Ich möchte starten';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

</main>

<!-- FOOTER -->
<footer class="foot">
 <div class="shell">
 <div class="foot-top">
 <div>
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <p>KI-Geschwindigkeit, menschliche Entscheidung. Kapital ist risikobehaftet — investieren Sie verantwortungsvoll.</p>
 </div>
 <div><h4>Produkt</h4><div class="foot-links">
 <a href="#platform">Verfolgen Sie Ihr Konto in Echtzeit</a><a href="#markets">Märkte in Echtzeit</a><a href="#how">So funktioniert es.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Unternehmen</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">Über uns</a><a href="<?= page_url('offer.php') ?>">Preise</a><a href="<?= page_url('contacts.php') ?>">Kontakt</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Datenschutz</a><a href="<?= page_url('conditions.php') ?>">Bedingungen</a><a href="<?= page_url('conditions.php') ?>">Risikohinweis</a><a href="<?= page_url('contacts.php') ?>">Missbrauch melden</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. Alle Rechte vorbehalten. Investieren birgt Risiken, einschließlich möglicher Kapitalverluste. · Investieren birgt Risiken, einschließlich des möglichen Verlusts eines Teils oder des gesamten investierten Kapitals. Der Wert von Anlagen kann steigen oder fallen, und Sie können weniger zurückerhalten als ursprünglich eingesetzt. Investieren Sie kein Geld, das Sie sich nicht leisten können zu verlieren.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('de-DE',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+' €';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Bitte warten\u2026";
 var MSG_ERR = "Ihre Daten konnten gerade nicht gesendet werden. Bitte versuchen Sie es erneut.";
 var THANKS = "/thanks/";
 function rand(){ return (Math.random().toString(36).substring(2,12)+Math.random().toString(36).substring(2,6)).replace(/[^a-z0-9]/g,'').substring(0,16); }
 // one-time spinner CSS for the submit button's processing state
 if (!document.getElementById('ldf-spin-css')) {
 var _st = document.createElement('style'); _st.id = 'ldf-spin-css';
 _st.textContent = '.ldf-spin{display:inline-block;width:1em;height:1em;margin-right:.5em;vertical-align:-.15em;border:2px solid currentColor;border-right-color:transparent;border-radius:50%;animation:ldfspin .6s linear infinite}@keyframes ldfspin{to{transform:rotate(360deg)}}';
 (document.head || document.documentElement).appendChild(_st);
 }
 var p = new URLSearchParams(location.search);
 // our click subid → hidden field → send.php click_id → iRev aff_sub3. Accept the
 // common tracker param names so whatever the traffic source appends is captured.
 var subid = p.get('subid') || p.get('sub_id') || p.get('clickid') || p.get('click_id')
 || p.get('cid') || p.get('utm_content')
 || (window.KTracking && KTracking.getSubId ? KTracking.getSubId() : '') || '';
 document.querySelectorAll('form[data-leadform]').forEach(function (form) {
 var tok = form.querySelector('.js-token');
 var tsf = form.querySelector('.js-ts');
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
 var dom = form.querySelector('.js-domain'); if (dom && !dom.value) dom.value = location.hostname;
 var sub = form.querySelector('.js-subid'); if (sub && subid) sub.value = subid; // only if a URL subid; else t.js fills it
 var phone = form.querySelector('input[type=tel]');
 var sending = false;
 function lock(b){ if(!b) return; b.dataset.lbl = b.dataset.lbl || b.innerHTML; b.disabled = true; b.setAttribute('aria-busy','1'); b.style.opacity='.75'; b.style.cursor='progress'; b.innerHTML='<span class="ldf-spin" aria-hidden="true"></span>'+MSG_WAIT; }
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
<style>
.iti{width:100%}.iti input,.iti input[type=tel]{width:100%}
/* The dropdown has a white background but inherits the design's body text colour
 (light, for dark themes) → country names render white-on-white (invisible). Force
 a readable light dropdown that the design's CSS can't override. !important beats
 the inherited colour regardless of the design. */
.iti__country-list{background:#fff!important;color:#1b1b1b!important;border:1px solid #e5e7eb;
 box-shadow:0 8px 28px rgba(0,0,0,.18);max-height:230px}
.iti__country,.iti__country-name{color:#1b1b1b!important}
.iti__dial-code{color:#6b7280!important}
.iti__country.iti__highlight,.iti__country:hover{background:#eef2ff!important}
.iti__flag-box{margin-right:8px!important}
</style>
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
 initialCountry: (hid && hid.value) || 'de',
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
<div id="ck-consent" role="dialog" aria-label="cookies" hidden style="position:fixed;left:16px;right:16px;bottom:16px;z-index:2147483000;max-width:660px;margin:0 auto;background:var(--surface,var(--panel,#12151c));color:var(--text,var(--fg,#e7e9ee));border:1px solid rgba(127,127,127,.28);border-radius:14px;padding:13px 16px;box-shadow:0 12px 40px rgba(0,0,0,.35);display:none;gap:14px;align-items:center;flex-wrap:wrap;font-size:14px;line-height:1.45">
<span style="flex:1;min-width:200px">Wir verwenden Cookies, um Ihre Erfahrung zu verbessern.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">Verstanden</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>
