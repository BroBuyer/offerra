<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Privacy policy | ' . SITE_NAME;
$page_description = 'Privacy policy for ' . SITE_NAME . '.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Privacy policy</h1>
            <p>
              Your personal data and your assets are of the utmost importance to us. We are fully
              committed to protecting them.
            </p>
            <p>
              <?= e(SITE_NAME) ?> collects and stores essential data for your trading transactions. How
              this data is collected and stored is described in the following privacy policy.
            </p>
            <p>Our policy is based on the following principles:</p>
            <p class="circle">
              With the aim of ensuring maximum transparency about our processes for collecting and
              storing your personal data:
            </p>
            <p>
              Our goal is for you to understand how we collect and process your data so you can make
              informed decisions. We apply clear guidelines and processes for data processing on
              this website. Our policy describes in detail the specific methods we use to provide
              you with clear and concrete information about data use. You are in control.
            </p>
            <p>
              We will notify you immediately when we deem it necessary. Transparency is of
              fundamental importance to us.
            </p>
            <p>
              Our specialized team is always available to answer all your questions about any aspect
              of our processes, including our obligations under <?= e(geo_country_name()) ?> legislation and EU
              regulations. You can contact us at:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              No other use of personal data is permitted on our part, except as provided in our
              privacy policy.
            </p>
            <p>
              We may process personal data for the following purposes, including ensuring the proper
              functioning of <?= e(SITE_NAME) ?> services and connecting trading members with third-party
              trading platforms. In addition, processing may be necessary to maintain and improve
              website features and services; to protect our rights and to meet legal and other
              obligations. Finally, this data is used, as necessary, to provide administrative
              and other business functions related to the services provided to you, the client.
            </p>
            <p>
              To offer higher-quality services tailored to your preferences and needs, <?= e(SITE_NAME) ?>
              uses personal data.
            </p>
            <p class="circle">
              With the aim of using essential tools to protect your personal data and safeguard your
              rights in relation to them:
            </p>
            <p>
              At any time you can contact us and gain access to all your personal data. We can also
              modify or delete it if necessary. In addition, we process requests to transfer that
              data to you or a third party you designate. We offer this service and support so you
              can optimally exercise your privacy and control rights.
            </p>
            <p class="circle">Protect your personal data:</p>
            <p>
              Our security systems are of the highest quality and have bank-level measures. Although
              absolute protection cannot be guaranteed, we commit to continuously maintaining our
              systems at the highest level and strengthening already implemented measures.
            </p>
            <p>
              We have comprehensive and detailed privacy policies and first-class security systems.
            </p>
            <p class="bold-title">1. Scope of application</p>
            <p>
              This policy describes our procedures for collecting, processing, and disclosing all
              data of natural persons.
            </p>
            <p>
              The provisions of our policy apply to all natural persons who can be identified or are
              identified. Specifically to every natural person who can be identified in connection
              with data entrusted to us, to which we have access and/or which we can combine.
            </p>
            <p>
              Data processing, as defined in the privacy policy, includes in particular the storage,
              management, and organization of personal data.
            </p>
            <p>
              We neither collect nor attempt to collect information about persons under 18 years of
              age. We also do not allow persons under 18 years of age to use our platform for any
              purpose. If we discover that a user is under 18 years of age, we will delete that data
              immediately.
            </p>
            <p class="bold-title">2. What personal data do we collect?</p>
            <p>
              Upon registration we collect personal data required to use our services. If necessary,
              we may also request submission of personal data for verification, for example to
              confirm account ownership. To improve and maintain the highest quality of our
              services, we collect and analyze information about your use of our platform and
              related third-party services.
            </p>
            <p class="bold-title">
              3. Under no circumstances are you obliged to provide your personal data to the
              company.
            </p>
            <p>
              Although you are not obliged to provide us with your data, the decision not to do so
              may result in limitations in the provision of our services. In addition, it may lead
              to limitations in use of our platform.
            </p>
            <p class="bold-title">
              4. What personal data do we collect? By accessing our website we may collect the
              following personal data:
            </p>
            <p>
              We do not collect data that personally identifies you. We collect information such as
              your account activity, user IP addresses, and access dates and times. For maintenance,
              security, and support we store system error reports, browser information, and the type
              of device you use to access your account. We also record the language set on your
              account.
            </p>
            <p>
              Regarding collection of personal data, we collect and store exclusively information
              you provide when connecting to a third-party trading platform through our services.
            </p>
            <p>
              Personal data you have provided to third-party platforms may include the following:
              full name, address, phone number, and email address.
            </p>
            <p class="bold-title">
              5. Why does the company need my personal data and is processing lawful?
            </p>
            <p>
              The company collects, stores, and processes your personal data exclusively for the
              purposes provided in the policy. All stated uses and processing are in accordance with
              applicable <?= e(geo_country_name()) ?> legislation and EU regulations.
            </p>
            <p>
              The company will manage, process, or transfer your data only in accordance with
              applicable regulations in <?= e(geo_country_name()) ?>. The relevant legal bases are listed below:
            </p>
            <p class="circle">
              You have given consent for storage and processing of your personal data by the
              company. By submitting your data to the company, you authorize us to forward it to the
              appropriate third-party trading platform. In addition, you have given your consent for
              processing of your personal data for one or more purposes.
            </p>
            <p class="circle">
              To improve services, to submit or defend legal claims, and to protect legitimate
              interests, among other things, it may be necessary for the company to store and
              process your personal data.
            </p>
            <p class="circle">To fulfill legal obligations, data processing is necessary.</p>
            <p>
              If you would like more information about data processing the company is required to
              perform, feel free to contact us by email.
            </p>
            <p>
              Below you will find a list of specific purposes and the legal basis that authorizes us
              to process your personal data.
            </p>
            <p class="green">Purpose</p>
            <p class="green">Legal basis</p>
            <p>
              1. To facilitate your access to digital trading and, exclusively at your request, we
              will share your personal data with third-party platforms. Your data may be collected
              and shared with third parties, exclusively at your request and at your discretion.
            </p>
            <p>
              You have given consent for processing of your personal data for one or more purposes.
            </p>
            <p>
              2. Please provide us with the necessary information so we can respond quickly and
              effectively to your requests, concerns, and questions about our services.
            </p>
            <p>
              For the pursuit of legitimate interests of the company or a named third party,
              processing of personal data is necessary.
            </p>
            <p>
              3. To fulfill our legal and administrative obligations, processing of personal data is
              necessary.
            </p>
            <p>To fulfill our legal obligations, we must process certain personal data.</p>
            <p>
              4. To improve our services, we need anonymized personal data and must monitor usage,
              including error reports.
            </p>
            <p>
              For the protection of legitimate interests of the company and external service
              providers, processing and storage of personal data is necessary.
            </p>
            <p>5. This is necessary to prevent fraud and abuse of our service.</p>
            <p>
              To ensure legitimate interests of the company and third-party service providers,
              processing and storage of personal data is necessary.
            </p>
            <p>
              6. Requirements of our service oblige us to monitor and conduct data processing for
              business development, strategic decisions, monitoring and regulatory compliance, and
              other business activities.
            </p>
            <p>
              With the aim of protecting legitimate interests of the company and external service
              providers, processing and storage of personal data is necessary.
            </p>
            <p>
              7. We use statistical and data analysis tools to support decisions across a broad
              spectrum of our services and in strategic planning.
            </p>
            <p>
              For the protection of legitimate interests of the company and our external service
              providers, processing and storage of personal data is necessary.
            </p>
            <p>
              8. To the extent necessary to protect the rights, property, and interests of the
              company and third-party service providers and in accordance with all local laws and
              applicable regulations, contracts, and our own terms and guidelines, we may process
              personal data. Such processing takes place exclusively according to necessary and
              established procedures.
            </p>
            <p>
              For the protection of legitimate interests of the company and each third-party service
              provider, processing and storage of personal data is necessary.
            </p>
            <p class="bold-title">6. Sharing personal data with third parties</p>
            <p>
              For storage and processing of IP addresses, for conducting surveys and user analysis,
              and for other related services, the company may share anonymized personal data with
              external service providers.
            </p>
            <p>
              At your request we will share some personal data you have provided with external
              service providers. In that case, processing of your data is subject to that
              company&rsquo;s privacy policy. This may include various digital trading platforms.
            </p>
            <p>
              With the aim of improving our customer service and optimizing our services in general,
              the company may share personal data with its affiliated companies and business
              partners.
            </p>
            <p>
              When legally required or to protect the rights and property of the company and related
              third parties, we may share data with relevant legal or supervisory authorities.
            </p>
            <p>
              Within the framework of critical business operations, such as sale of the company,
              obtaining investment, or submitting a credit application, relevant data may be shared
              in a lawful and appropriate manner. This also applies to mergers, restructurings,
              consolidations, or insolvency of the company in accordance with the law.
            </p>
            <p class="bold-title">7. Cookies and third-party services</p>
            <p>
              For website analysis and in cooperation with advertising agencies, cookies and other
              similar technologies may be used in accordance with the law and common practice.
            </p>
            <p>
              Cookies, small text files stored on your device when you visit a website, are used to
              collect information about your browsing behavior, preferences, and other data. Their
              purpose is to personalize and improve your user experience. They help us remember your
              settings and preferences and adapt our service offering accordingly. They are also
              used for website analysis and obtaining statistics for strategic planning.
            </p>
            <p>
              Generally, this website uses two types of cookies: session cookies, which are stored
              only for the duration of your browser session and deleted when you close the browser;
              and persistent cookies, which remain in your browser even after your session ends. The
              latter enable the website to recognize you as a returning visitor and facilitate use.
            </p>
            <p class="bold-title">Types of cookies:</p>
            <p>Cookies may be used as needed depending on purpose:</p>
            <p class="green">Cookie type</p>
            <p>These cookies are strictly necessary</p>
            <p class="green">Purpose</p>
            <p>
              Cookies are used to identify you as a client, so we can provide the information,
              settings, and services you have requested.
              They also facilitate navigation on our website and enable access to it.
            </p>
            <p>
              We use cookies so your device can download and stream content. They also
              enable access to essential functions and return to previously visited pages.
            </p>
            <p class="green">Additional information</p>
            <p>
              To enable fast and simple access to the website, cookies store and process certain
              personal data, such as username and last access date, if you ask the website to
              remember you when logging in.
            </p>
            <p>Session cookies are deleted when you close the web browser.</p>
            <p class="green">Cookie type</p>
            <p>Functional cookies</p>
            <p class="green">Purpose</p>
            <p>
              With cookies we can securely store and apply your settings and preferences.
              They also enable us to recognize you when you visit our website.
            </p>
            <p class="green">Additional information</p>
            <p>
              Persistent cookies remain stored after your browser session and stay active until the
              expiration date.
            </p>
            <p class="green">Cookie type</p>
            <p>Performance cookies</p>
            <p class="green">Purpose</p>
            <p>
              To improve our services, we collect statistical data using cookies. These cookies
              provide us with information about website performance and its use.
            </p>
            <p class="green">Additional information</p>
            <p>
              All information stored via cookies is anonymous and does not enable identification of
              individuals.
            </p>
            <p>
              Session cookies are deleted when you close the browser, while persistent cookies
              remain active until the expiration date or indefinitely, unless you delete them
              manually.
            </p>
            <p>Cookies are blocked or deleted</p>
            <p>
              If you wish to remove or block cookies, you must do so in your browser
              settings. See the following links for detailed instructions for the most popular
              browsers.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Blocking cookies may stop some website features from working as intended.
            </p>
            <p class="bold-title">How long we keep personal data</p>
            <p>
              Your personal data is stored for as long as strictly necessary for the required
              processes, as stated in other sections of this policy. It may be stored longer if
              required by local laws and regulations and internal company policies.
            </p>
            <p>
              Your personal data is shared at your request and at your discretion with third-party
              trading platforms for a period of 12 months. After that period expires and with your
              consent, that data is shared for an additional 12 months.
            </p>
            <p>
              Our procedures provide for regular assessment of all personal data to evaluate whether
              it is still needed or not.
            </p>
            <p class="bold-title">
              9. Transfer of personal data to third countries or international organizations
            </p>
            <p>
              When necessary to provide our services and/or for security reasons, we may transfer
              personal data to other countries (outside yours) and to international organizations
              using comprehensive security protocols. We implement data protection measures to the
              highest standards to protect your information and ensure your access to legal remedies
              and statutory rights at all times.
            </p>
            <p>
              In the European Economic Area (EEA), all residents enjoy data protection and
              guarantees.
            </p>
            <p class="circle">
              Data transfers always take place under EU jurisdiction and authority, in accordance
              with data protection standards and protocols provided in Article 45(3) of Regulation
              (EU) 2016/679 of the European Parliament and of the Council of 27 April 2016
              (&ldquo;GDPR&rdquo;).
            </p>
            <p class="circle">
              Any transfer of data between public bodies or authorities takes place under Article
              46(2). This is a legally binding and enforceable agreement.
            </p>
            <p class="circle">
              Standard contractual clauses of the European Commission under Article 46.2.c) GDPR set
              the conditions for data transfer, and such transfers take place in accordance with
              them. You can view the provisions at
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              For more information about the specific security measures the company has taken to
              protect your personal data during transfer to third countries, you can send a request
              by email to <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Protection of personal data</p>
            <p>
              Personal data is protected by technical and organizational measures of the highest
              level, applied in accordance with reference procedures. These procedures are effective
              in preventing any destruction of data due to unlawful or unforeseen events, as well as
              their loss or modification.
            </p>
            <p>
              Although we apply the greatest possible care and procedures that meet the strictest
              data protection standards and the law, under all circumstances it cannot be guaranteed
              that your personal data is error-free. Therefore we cannot accept liability if
              personal data suffers accidental, immaterial, or consequential damage or disclosure.
              This includes situations beyond our control, such as disclosures due to transmission
              errors, unauthorized access by third parties, or other similar causes.
            </p>
            <p>
              When we receive legally binding requests from supervisory authorities or other
              government bodies with statutory powers, we may be obliged to forward your personal
              data to those bodies. Once forwarded on the basis of a legal obligation, we have no
              control over how those bodies handle, store, or protect your data.
            </p>
            <p>
              Everything transmitted over the internet, including personal information, carries a
              certain risk of interception and is not 100% secure. The company cannot guarantee the
              security of data sent online.
            </p>
            <p class="bold-title">11. Links to third-party websites</p>
            <p>
              On this website you will find links to third-party applications and websites. Please
              note that they are not connected to the company nor under its control and that our
              privacy policy does not apply to those third parties. They operate according to their
              own procedures and priorities for collecting and processing personal data, therefore
              we do not accept liability for those activities. Use them at your own discretion.
            </p>
            <p>
              Always check the privacy policy of the company or service when you visit their website
              before providing personal data. Verify whether their rules for collection, use, and
              processing match your preferences and priorities. If you decide to share data, share
              it directly with the service provider.
            </p>
            <p class="bold-title">12. Policy updates</p>
            <p>
              We reserve the right to update or modify this policy at any time. We will inform you
              of changes via the website and relevant channels. The updated version of the privacy
              policy will be published on the website, and the revised policy takes effect
              immediately upon publication, unless otherwise stated.
            </p>
            <p class="bold-title">13. Your rights regarding personal data</p>
            <p>
              You have absolute control and the final say over use of all your personal data, which
              includes verifying its accuracy, correcting errors, and the right to deletion or
              restriction of our data processing, both in scope and in nature.
            </p>
            <p>On this page EEA residents will find relevant information for them:</p>
            <p>
              Your personal data is protected by the rights described here. By sending an email to
              the address below you can immediately exercise those rights.
            </p>
            <p>Access to your rights</p>
            <p>
              If the personal data you have provided is accurate, you can access it at any time. All
              personal data we process is available to us and therefore verifiable.
            </p>
            <p>
              At any time you can request your personal data for verification, and it will be made
              available to you in electronic form. If you request additional copies of your
              processed data beyond the copy already provided, a reasonable fee may be charged.
            </p>
            <p>
              Rights recognized by law and privacy policy must not affect the rights of third
              parties. The company reserves the right to refuse or restrict access to personal data
              if it violates the rights and freedoms of third parties.
            </p>
            <p>Right to correction of errors</p>
            <p>
              Any error in your personal data, whether due to omission or inaccurate information,
              can be corrected by you or the company to ensure its proper processing.
            </p>
            <p>Right to deletion of data</p>
            <p>
              You have the right to request deletion of your personal data in the following
              circumstances: 1) if it was processed without your consent or outside legal limits; 2)
              at your request, if you want it deleted and the company has no legal obligation to
              retain it; 3) if you object to our processing or no longer consent to it, even if it
              is lawful and covered by our interests or those of third parties; and 4) if the law
              obliges us to delete it.
            </p>
            <p>
              The right to deletion does not apply if there are legal obligations of the EU or
              member state legislation. It also does not apply if the data is needed to pursue or
              defend legal claims.
            </p>
            <p>Right to restriction of data processing</p>
            <p>
              You have the right to request restriction of processing of your personal data if you
              believe it contains inaccuracies.
            </p>
            <p>
              If you request restriction of use of your personal data, we will restrict its processing, except in
              the following cases: 1) if applicable legislation in the European Union or one of its
              member states prevents it; 2) with your consent, if necessary to defend or pursue
              legal claims; 3) to protect the rights of another natural person.
            </p>
            <p>Right to data portability</p>
            <p>
              You have the right to access and control personal data you have provided, to the
              extent you have given consent for its collection in any way and if its processing
              takes place through automated systems.
            </p>
            <p>
              You have the right to request transfer of all your personal data to another company or
              organization, to the extent technically possible. This right does not affect your
              right to deletion of your data. It does not apply if its exercise violates the rights
              or freedoms of another natural person.
            </p>
            <p>Right to object to data processing</p>
            <p>
              Without prejudice to the company&rsquo;s right to pursue our legitimate interests or
              those of a third party acting as a service provider, you have the right to object to
              processing and request its cessation. This right does not apply if there is an urgent
              legal need to continue processing, whether to defend against legal claims or to pursue
              legal claims. In such cases we may continue processing your personal data.
            </p>
            <p>
              At any time you can object to processing of your personal data for direct marketing
              purposes.
            </p>
            <p>
              Right to withdraw consent
            </p>
            <p>
              You can withdraw your consent for our processing of your personal data at any time,
              with immediate effect. Such withdrawal has no retroactive effect on processing carried
              out before your withdrawal.
            </p>
            <p>
              If you are dissatisfied for any reason, you have the right to file a complaint with a
              legal, supervisory, or other control body.
            </p>
            <p>
              If you believe your rights and freedoms regarding processing of your personal data
              have been violated, member states of the European Union have supervisory and control
              bodies for that purpose. You may file a complaint with those bodies if you deem it
              appropriate.
            </p>
            <p>
              Section 13 describes situations in which your rights regarding personal data may be
              limited by laws of the European Union or member states.
            </p>
            <p>
              When we receive your request regarding your personal data and its processing, we will
              give you access to the requested information as stated in Section 13 of this policy.
              We may extend this period by up to two months depending on the scope of the request
              and the nature of your request. If necessary, we will notify you of the extension
              within one month of receiving your request.
            </p>
            <p>
              We will send you the requested information electronically and free of charge, unless
              this is contrary to the law or provisions in Section 13. We reserve the right to
              charge a reasonable fee or refuse a request if it is deemed unfounded, excessive, or
              repetitive.
            </p>
            <p>
              We reserve the right to request additional identity verification if there is
              reasonable suspicion about the person submitting a request for personal data, in order
              to protect and ensure data security.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
