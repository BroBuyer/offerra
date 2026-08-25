<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'FAQ ' . SITE_NAME;
$page_description = 'Questions, answered — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Questions</span>
    <h1>Questions, answered clearly</h1>
    <p class="kpnq92g">What people ask before they open an account, and the answers we would give you on the phone.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Questions about the money</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Is <?= e(SITE_NAME) ?> a scam?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">No: <?= e(SITE_NAME) ?> operates with verification checks, publishes its terms and risk disclosure in full, and withdrawals always return to the original payment method. That said, every investment carries real risk and no serious platform promises guaranteed returns — be wary of anyone who does.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">How much does it cost to open an account?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Opening an account is free. There is no registration fee and no subscription; you only put in the amount you choose to invest.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">How long do withdrawals take?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Requests are processed on working days and returned to the method you deposited with. Bank transfers take longer than cards or e-wallets.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Is there a minimum amount?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Yes, and it is deliberately low, from <?= e(money_min()) ?>, so you can start small and add more later. The exact figure is shown before you confirm anything.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Frequently asked questions</h2>
    <div class="fjl4d">
      <details open><summary>What is the minimum deposit to get started?</summary><p>You can open and fund your account from <?= e(money_min()) ?> minimum. You are free to add more funds as your investment plan progresses.</p></details>
      <details><summary>How do withdrawals work?</summary><p>Request a withdrawal any time from your dashboard. Funds return to your chosen payment method, with the usual processing times.</p></details>
      <details><summary>Is my money kept securely?</summary><p>Accounts are protected with professional-grade security and identity checks. As with any investment, your capital is at risk and values can go down as well as up.</p></details>
      <details><summary>How long does it take to start investing?</summary><p>Most members complete registration in a few minutes. Once your first deposit is processed, you can activate a plan straight away.</p></details>
      <details><summary>Are there hidden fees?</summary><p>All costs are shown transparently before you commit. You will always see what applies to your plan, with no surprises.</p></details>
      <details><summary>What is the minimum age to register?</summary><p>You must be at least 18 to open an account and invest. Verification may be requested to confirm your age and identity.</p></details>
      <details><summary>Which payment methods are accepted?</summary><p>Common methods such as debit and credit cards, bank transfers, selected e-wallets and cryptocurrencies are accepted. The exact options are shown at the deposit step.</p></details>
      <details><summary>When is customer support available?</summary><p>Our support team is available Monday to Friday, 9:00 to 18:00, and commits to answering each enquiry within one working day.</p></details>
      <details><summary>How are taxes on gains handled?</summary><p>Taxes on investment gains depend on the rules in your country and are your responsibility. We recommend keeping your own records and speaking to a qualified tax adviser.</p></details>
      <details><summary>What is KYC verification and why is it required?</summary><p>KYC (Know Your Customer) is a standard check of your identity. It helps keep accounts secure and is a routine part of opening an investment account.</p></details>
      <details><summary>Do I need prior investment experience?</summary><p>No. Every member has a personal financial analyst who guides you at every step, so you do not need prior knowledge of the markets.</p></details>
      <details><summary>Who manages my investments?</summary><p>A dedicated financial analyst, backed by AI tools, working around your goals and risk level. The analyst combines professional expertise with technology — decisions remain human.</p></details>
      <details><summary>Does the platform meet regulatory standards?</summary><p>Yes — it meets national financial and cybersecurity standards, with account protection and verification built in.</p></details>
      <details><summary>Can I add more funds to my account later?</summary><p>Yes. You can top up your account at any time and adjust your plan with your analyst as your goals evolve.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Account and security</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">How does sign-in work on <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">You sign in with your registered email and password from the website or from a mobile browser. If you have turned on two-step verification, you will be asked for an extra code; if you forget your password, you can reset it from the sign-in screen itself.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Why do you need my identity documents?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Verification is required before an account can move funds. It also stops someone else opening an account in your name.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Do I need prior experience?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">No. Most members start with none. A specialist walks you through the first steps, and a demo balance lets you practise.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Can I use it on a phone?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Yes, the platform works in a mobile browser with nothing to install.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Start — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Send a message</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
