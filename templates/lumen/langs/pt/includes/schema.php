<?php
function render_schema(string $page = 'home', array $extra = []): void {
    $site = SITE_NAME;
    $url = SITE_URL;
    $platform_image = $url . '/' . platform_image_path();

    $organization = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => $site,
        'url' => $url,
        'logo' => $url . '/static/img/logo.svg',
        'description' => 'Uma plataforma de investimento clara assistida por IA para mercados cripto e multiativos.',
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
        'description' => 'Plataforma de investimento IA simples com mercados em direto, insights guiados e espaço de trading calmo.',
        'image' => $platform_image,
        'screenshot' => $platform_image,
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.7',
            'ratingCount' => '1842',
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
                'name' => 'Como começo?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Crie uma conta em minutos, conclua uma verificação curta e financie a conta com um depósito mínimo de ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Desbloqueará a plataforma completa, incluindo gráficos e ferramentas.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'O meu dinheiro e dados estão seguros?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Protegemos contas com encriptação SSL, autenticação de dois fatores e gestão segura de fundos através de prestadores de confiança. Os dados pessoais seguem políticas de segurança rigorosas.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Quando posso levantar lucros?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Os levantamentos podem ser pedidos a qualquer momento no painel. O processamento demora normalmente 1–3 dias úteis conforme o método. Taxas e prazos são mostrados à partida.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Preciso de experiência em trading?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Não é necessária experiência prévia. Onboarding guiado, tutoriais simples e ferramentas assistidas por IA ajudam ao seu ritmo, com suporte 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Como começar a operar com ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Abra a sua conta', 'text' => 'Registe-se com os dados básicos e obtenha acesso seguro à plataforma.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verifique o seu e-mail', 'text' => 'Confirme o e-mail para desbloquear o acesso completo.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Financie a sua conta', 'text' => 'Deposite no mínimo ' . MIN_DEPOSIT . ' ' . CURRENCY . ' por transferência, cartão ou carteira eletrónica.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Defina a estratégia', 'text' => 'Escolha o nível de risco e preferências — manual ou automatizado.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Comece a operar', 'text' => 'Entre no mercado com confiança usando dados em tempo real e insights de IA.'],
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
            'name' => $site . ' AI Trading Platform',
            'description' => $site . ' interface de trading móvel com gráfico cripto BTC/USDT em direto e ferramentas de portefólio',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Plataforma de trading IA — vista de gráfico móvel',
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
