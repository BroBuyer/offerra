<?php
/**
 * JSON-LD schema blocks. Pass $schema_type and optional $schema_data.
 */
function render_schema(string $page = 'home', array $extra = []): void {
    $site = SITE_NAME;
    $url = SITE_URL;
    $platform_image = page_url(platform_image_path());
    $logo_url = page_url('static/img/logo.webp');

    $organization = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => $site,
        'url' => $url,
        'logo' => $logo_url,
        'description' => 'Acede a criptomoedas, forex e ativos globais a partir de uma só plataforma. ' . $site . ' combina análise em direto, automatização assistida e suporte especializado.',
    ];

    $website = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => $site,
        'url' => $url,
        'publisher' => ['@type' => 'Organization', 'name' => $site],
    ];

    $software = [
        '@context' => 'https://schema.org',
        '@type' => 'SoftwareApplication',
        'name' => $site,
        'operatingSystem' => 'Web, Android, iOS',
        'applicationCategory' => 'FinanceApplication',
        'description' => $site . ' — plataforma de trading com IA, análise em direto, automatização assistida e acesso a vários mercados.',
        'image' => $platform_image,
        'screenshot' => $platform_image,
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.7',
            'ratingCount' => '337',
            'bestRating' => '5',
        ],
        'offers' => [
            '@type' => 'Offer',
            'price' => MIN_DEPOSIT,
            'priceCurrency' => CURRENCY,
        ],
    ];

    $faq = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => 'Quais são os passos para começar a operar?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Regista-te com os teus dados essenciais, confirma o e-mail e deposita na conta um mínimo de ' . money_min() . '. Assim desbloqueias gráficos em direto, ferramentas de trading, análise de mercado e suporte dedicado.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'O ' . $site . ' é fiável para gerir o meu dinheiro e a minha informação?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'As sessões vão cifradas com SSL, há autenticação de dois fatores e as transações financeiras passam por parceiros de confiança. As práticas de privacidade descrevem-se no site.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Quanto demora um levantamento de fundos?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Os levantamentos podem ser pedidos a qualquer momento no portal da conta. O processamento costuma demorar 1 a 3 dias úteis consoante o método. Comissões e prazos aparecem antes de confirmares.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'É preciso experiência em trading para começar?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Não é preciso experiência prévia. Onboarding, tutoriais e ferramentas potenciadas por IA ajudam-te a aprender ao teu ritmo.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Como começar a operar com ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Cria a tua conta', 'text' => 'Regista-te com os teus dados básicos e obtém acesso seguro à plataforma.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verifica o teu e-mail', 'text' => 'Confirma o e-mail para desbloquear o acesso completo.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Deposita na conta', 'text' => 'Deposita um mínimo de ' . money_min() . ' por transferência, cartão ou carteira eletrónica.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Define a tua estratégia', 'text' => 'Escolhe o nível de risco e as preferências — manual ou automatizado.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Começa a operar', 'text' => 'Entra no mercado com confiança, com dados em tempo real e insights de IA.'],
        ],
    ];

    $blocks = [$organization, $website];

    if ($page === 'home') {
        $blocks[] = $software;
        $blocks[] = $faq;
        $blocks[] = $howto;
        $blocks[] = [
            '@context' => 'https://schema.org',
            '@type' => 'ImageObject',
            'name' => $site . ' — plataforma de trading com IA',
            'description' => $site . ' — interface móvel com gráfico cripto BTC/USDT em direto e ferramentas de carteira',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Plataforma de trading com IA — vista de gráfico móvel',
            'representativeOfPage' => true,
        ];
    }

    if (!empty($extra['breadcrumb'])) {
        $blocks[] = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $extra['breadcrumb'],
        ];
    }

    foreach ($blocks as $block) {
        echo '<script type="application/ld+json">' . json_encode($block, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }
}
