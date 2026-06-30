<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('ტრეიდინგის პლატფორმა');
$page_description = 'ვაჭარეთ კრიპტო, ფორექს და გლობალურ ბაზრებზე ' . SITE_NAME . '-თან. რეალურ დროში ანალიტიკა, AI-ით დახმარებული სიგნალები და სიჩქარესა და სიცხადეზე გათვლილი პლატფორმა.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <!-- Hero -->
  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-content">
        <p class="eyebrow">AI-ით ტრეიდინგის პლატფორმა</p>
        <h1>ვაჭარეთ უფრო ჭკვიანურად.<br><span class="text-accent">მოქმედეთ სწრაფად.</span></h1>
        <p class="lead">
          ახალი სტანდარტი კრიპტო და მრავალბაზრიანი ტრეიდინგისთვის. გაძლიერებული უსაფრთხოება, გამჭვირვალე საკომისიოები,
          AI-ით მართული ინსაითები და მინიმალისტური ინტერფეისი.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL დაცული
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            მხარდაჭერა 24/7
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            სწრაფი შესრულება
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">დაიწყეთ ტრეიდინგი — მინ. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'გახსენით ანგარიში 2 წუთში';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="პლატფორმის სტატისტიკა">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">ხელმისაწვდომი ვალუტა</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">დადასტურებული მომხმარებელი</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">ტრეიდინგის მოცულობა</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">მხარდაჭერილი ქვეყანა</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="ტრეიდინგის პლატფორმის გადახედვა">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">ტრეიდინგის პლატფორმა</p>
        <h2>პროფესიონალური გრაფიკები.<br>მობილურზე ოპტიმიზებული.</h2>
        <p class="lead">
          სუფთა ინტერფეისი, როგორც თანამედროვე ბირჟაზე — BTC/USDT რეალურ დროში, პორტფელის მონიტორინგი
          და შესრულება ერთი შეხებით. შექმნილია ნდობისთვის პირველი შესვლიდან.
        </p>
        <ul class="platform-points">
          <li>სანთლის გრაფიკები რეალურ დროში</li>
          <li>პორტფელი და P/L ერთი შეხედვით</li>
          <li>უსაფრთხო ანგარიშის დაფა</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">სცადეთ პლატფორმა</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">რატომ <?= e(SITE_NAME) ?></p>
        <h2>ყველაფერი, რაც გჭირდებათ ნდობით ტრეიდინგისთვის</h2>
        <p class="lead">უსაფრთხოება, სიჩქარე და ინტელექტი — ერთ სუფთა პლატფორმაში თანამედროვე ტრეიდერებისთვის.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>ბანკის დონის უსაფრთხოება</h3>
          <p>SSL დაშიფვრა, 2FA და უსაფრთხო ფონდების მართვა იცავს თქვენს მონაცემებსა და კაპიტალს ყოველ ეტაპზე.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI ბაზრის სიგნალები</h3>
          <p>ზუსტი ინსაითები რეალურ დროში შესაძლებლობების აღსანიშნავად და უფრო სწრაფი, გონივრული გადაწყვეტილებებისთვის.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>ავტომატიზებული ტრეიდინგი</h3>
          <p>AI-ით დახმარებული ბოტები 24/7 ასრულებენ სტრატეგიებს ეფექტურად, თქვენ კი კონტროლს ინარჩუნებთ.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>მრავალბაზრიანი წვდომა</h3>
          <p>ივაჭარეთ კრიპტოზე, ფორექსზე, აქციებსა და საქონლებზე ერთი ინტერფეისიდან.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>დაბალი ლატენტურობის შესრულება</h3>
          <p>ოპტიმიზებული ინფრასტრუქტურა ორდერების სტაბილური შესრულებისთვის პიკის დროსაც კი.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>სუფთა ინტერფეისი</h3>
          <p>მინიმალისტური დიზაინი ნაკლებ გაფანტვას ნიშნავს: მეტი ფოკუსი სტრატეგიაზე, ნაკლები ნავიგაციაზე.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">ცოცხალი ბაზრები</p>
        <h2>ვაჭარეთ Bitcoin-ზე, Ethereum-ზე და სხვაზე</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          რეალურ დროში ფასები, გაფართოებული ინდიკატორები და პროფესიონალური ბაზრის ხედი იმ აქტივებზე, რომლებიც გაინტერესებთ.
        </p>
        <a href="sign.php" class="btn btn-primary">შედით ბაზრებზე</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="ბაზრის ფასები რეალურ დროში">
        <div class="exchange-panel-header">
          <span>ბაზრები</span>
          <span class="live-dot">Live</span>
        </div>
        <div class="ticker-list" data-ticker-list>
          <div class="ticker-row">
            <div><div class="ticker-symbol">BTC</div><div class="ticker-pair">BTC/USD</div></div>
            <div class="ticker-price" data-price="btc">—</div>
            <div class="ticker-change up" data-change="btc">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">ETH</div><div class="ticker-pair">ETH/USD</div></div>
            <div class="ticker-price" data-price="eth">—</div>
            <div class="ticker-change up" data-change="eth">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">SOL</div><div class="ticker-pair">SOL/USD</div></div>
            <div class="ticker-price" data-price="sol">—</div>
            <div class="ticker-change down" data-change="sol">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">XRP</div><div class="ticker-pair">XRP/USD</div></div>
            <div class="ticker-price" data-price="xrp">—</div>
            <div class="ticker-change up" data-change="xrp">—</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How it works -->
  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">როგორ დაიწყოთ</p>
        <h2>რეგისტრაციიდან პირველ ოპერაციამდე რამდენიმე წუთში</h2>
        <p class="lead">სახელმძღვანელო გზა — რთულობისა და გაურკვევლობის გარეშე.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>შექმენით ანგარიში</h3>
          <p>დარეგისტრირდით თქვენი მონაცემებით და მიიღეთ მყისიერი, უსაფრთხო წვდომა პლატფორმაზე.</p>
        </article>
        <article class="step-card">
          <h3>დაადასტურეთ ელფოსტა</h3>
          <p>დაადასტურეთ მისამართი პლატფორმაზე სრული წვდომის გასახსნელად.</p>
        </article>
        <article class="step-card">
          <h3>შეავსეთ ანგარიში</h3>
          <p>შეიტანეთ მინიმუმ <?= MIN_DEPOSIT ?> <?= CURRENCY ?> საბანკო გადარიცხვით, ბარათით ან ელექტრონული საფულით.</p>
        </article>
        <article class="step-card">
          <h3>დააყენეთ სტრატეგია</h3>
          <p>განსაზღვრეთ რისკის დონე და პარამეტრები — ხელით ან AI-ით დახმარებული ავტომატიზაციით.</p>
        </article>
        <article class="step-card">
          <h3>დაიწყეთ ტრეიდინგი</h3>
          <p>შედით ბაზარზე ცოცხალი გრაფიკებით, ინსტრუმენტებითა და მხარდაჭერით, როცა დაგჭირდებათ.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">გახსენით ანგარიში ახლა</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">დეპოზიტები</p>
      <h2 style="margin-bottom: 0.75rem;">შეიტანეთ თანხა უკვე ნაცნობი მეთოდებით</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">ბარათები, ელექტრონული საფულეები და საბანკო გადარიცხვები — SSL დაშიფვრით დაცული.</p>
      <?php
      $payment_context = 'დეპოზიტები და ანგარიშის შევსება';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">სანდო ინფრასტრუქტურა</p>
        <h2>აშენებულია ინდუსტრიული დონის პარტნიორებით</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">მიმოხილვები</p>
        <h2>რას ამბობენ ტრეიდერები</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">რეგისტრაცია ძალიან სწრაფი იყო, საკომისიოები გამჭვირვალე და მხარდაჭერა ნამდვილად პასუხობს. გამოცდილება სუფთა და სანდოა — პლატფორმას მუდამ ვიყენებ.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">დამოუკიდებელი ტრეიდერი</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">საბოლოოდ სცადე კრიპტო ტრეიდინგი აქ — არ ვნანობ. სწრაფი დაყენება და ნათელი ახსნები. შესანიშნავი არჩევანი, განსაკუთრებით დამწყებთათვის.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">კრიპტო ენთუზიასტი</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">სტაბილური და სანდო. ანგარიშის გახსნა მარტივია, პირობები ნათელი და გუნდი კომპეტენტური. საკმაოდ კომფორტული ტრეიდინგის გამოცდილება.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">ციფრული აქტივების ოპერატორი</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">ტრეიდინგი აღარ ჩანს რთულად. მარტივი რეგისტრაცია, ნათელი საკომისიოები და მხარდაჭერა, როცა სჭირდება. დამწყებისთვის ნამდვილად განსხვავებას ქმნის.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">კერძო ინვესტორი</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>ხშირი კითხვები</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            როგორ დავიწყო?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              შექმენით ანგარიში ძირითადი მონაცემებით, გაიარეთ მოკლე ვერიფიკაცია და შეიტანეთ მინიმუმ <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. გახსნით სრულ წვდომას პლატფორმაზე — ცოცხალი გრაფიკები, ტრეიდინგის ინსტრუმენტები და სახელმძღვანელო onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ჩემი თანხა და მონაცემები უსაფრთხოა?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              ვიყენებთ SSL დაშიფვრას, ორფაქტორიან ავთენტიფიკაციასა და უსაფრთხო პროცესებს სანდო პროვაიდერების მეშვეობით. პირადი მონაცემები მკაცრი უსაფრთხოების პოლიტიკით მუშავდება ყოველ დონეზე.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            როდის შემიძლია მოგების გატანა?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              გატანის მოთხოვნა ნებისმიერ დროს შეგიძლიათ პირადი ანგარიშიდან. დამუშავებას ჩვეულებრივ 1–3 სამუშაო დღე სჭირდება. საკომისიოები და ვადები ყოველთვის წინასწარ ჩანს — გაუთვალისწინებელი სიურპრიზების გარეშე.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            საჭიროა ტრეიდინგის გამოცდილება?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              არა, საერთოდ არა. სახელმძღვანელო onboarding, მარტივი სახელმძღვანელოები და AI-ით დახმარებული ინსტრუმენტები დაგეხმარებათ საკუთარი ტემპით სწავლაში. დამწყებიც იქნებით თუ გამოცდილი — მხარდაჭერა 24/7 ხელმისაწვდომია.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            რომელ ბაზრებზე შემიძლია ტრეიდინგი?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              მიიღეთ წვდომა კრიპტოვალუტებზე, ფორექსზე, გლობალურ აქციებსა და საქონლებზე ერთი ინტერფეისიდან. რეალურ დროში მონაცემები, ჩაშენებული ანალიტიკა და მხარდაჭერა ხელით ან ავტომატური სტრატეგიებისთვის.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Platform specs -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">პლატფორმა</p>
        <h2>ძირითადი ფუნქციები ერთი შეხედვით</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">AI ტრეიდინგის ძრავა</div>
          <div class="specs-value">მანქანური სწავლებაზე დაფუძნებული გაფართოებული ბაზრის ანალიზი</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">დეპოზიტის მეთოდები</div>
          <div class="specs-value">ბარათები, საბანკო გადარიცხვა, PayPal, ელექტრონული საფულე</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">მოწყობილობებიდან წვდომა</div>
          <div class="specs-value">ვებ, ტაბლეტი და მობილური — სრულად ადაპტირებადი</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">სიგნალების სიზუსტე</div>
          <div class="specs-value">85%-მდე AI-ით მხარდაჭერილ სტრატეგიებზე</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">ბაზრები</div>
          <div class="specs-value">კრიპტო, ფორექს, აქციები, საქონლები</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">სწრაფი დაყენება სახელმძღვანელო ვერიფიკაციით</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">მხარდაჭერა</div>
          <div class="specs-value">პროფესიონალური მხარდაჭერა 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">დაგვიკავშირდით</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">სანდო</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">პლატფორმა დამწყებთათვის შექმნილი</h3>
          <p style="margin-top: 0.5rem; color: var(--text-muted); max-width: 42rem;">
            სახელმძღვანელო onboarding, ერთგული მხარდაჭერა და გასაგები ინსტრუმენტები უფრო მშვიდი ტრეიდინგისთვის.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>მზად ხართ ტრეიდინგისთვის სიცხადეზე გათვლილ პლატფორმაზე?</h2>
        <p class="lead">შეუერთდით კერძო ტრეიდერებსა და კომპანიებს, რომლებიც ციფრულ აქტივებს ნდობით ყიდიან, ყიდიან და მართავენ.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'შექმენით უფასო ანგარიში';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
