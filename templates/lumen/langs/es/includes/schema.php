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
        'description' => 'Una plataforma de inversión clara asistida por IA para cripto y multi-activo.',
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
        'description' => 'Plataforma simple de inversión con IA, mercados en vivo, ideas guiadas y un espacio calmado.',
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
                'name' => '¿Cómo empiezo?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Crea una cuenta en minutos, completa una verificación breve y financia con un mínimo de ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Desbloquearás gráficos y herramientas.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Están seguros mi dinero y mis datos?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Protegemos las cuentas con SSL, 2FA opcional y pagos seguros. Los datos personales siguen políticas estrictas.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Cuándo puedo retirar beneficios?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Puedes solicitar retiros en cualquier momento desde el panel. El proceso suele tardar 1–3 días hábiles según el método.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Necesito experiencia en trading?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No hace falta experiencia previa. El onboarding guiado y las herramientas de IA te ayudan a tu ritmo, con soporte 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Cómo empezar a operar con ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Abre tu cuenta', 'text' => 'Regístrate con tus datos básicos y obtén acceso seguro.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verifica tu email', 'text' => 'Confirma tu email para desbloquear el acceso completo.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Financia tu cuenta', 'text' => 'Deposita un mínimo de ' . MIN_DEPOSIT . ' ' . CURRENCY . ' por transferencia, tarjeta o monedero electrónico.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Define tu estrategia', 'text' => 'Elige riesgo y preferencias — manual o asistida.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Empieza a operar', 'text' => 'Entra al mercado con datos en tiempo real e ideas de IA, controlando cada orden.'],
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
            'description' => $site . ' interfaz móvil de trading con gráfico BTC/USDT en vivo y herramientas de cartera',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Plataforma de trading con IA — vista de gráfico móvil',
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
