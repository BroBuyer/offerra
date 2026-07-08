<?php
/**
 * JSON-LD schema blocks. Pass $schema_type and optional $schema_data.
 */
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
        'description' => 'Plataforma de trading asistida por IA para criptomonedas, forex y mercados globales.',
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
        'description' => 'Plataforma de trading inteligente con analisis de mercado en tiempo real y senales asistidas por IA.',
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
                'name' => 'Como puedo empezar?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Crea tu cuenta en pocos minutos, completa una breve verificacion y deposita al menos ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Desbloquearas la plataforma completa con graficos en vivo y herramientas de trading.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Estan seguros mi dinero y mis datos?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Protegemos las cuentas mediante cifrado SSL, autenticacion en dos pasos y procesamiento seguro de fondos con proveedores de pago de confianza. Gestionamos los datos personales bajo estrictos protocolos de seguridad.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Cuando puedo retirar beneficios?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Puedes solicitar un retiro en cualquier momento desde tu panel. El procesamiento suele tardar de 1 a 3 dias laborables segun el metodo. Veras comisiones y plazos por adelantado.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Necesito experiencia en trading?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No necesitas experiencia previa. El onboarding asistido, las guias simples y las herramientas con IA te ayudan a aprender a tu ritmo, con soporte disponible 24/7.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Como empezar a operar con ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Crea tu cuenta', 'text' => 'Registrate con datos basicos y consigue acceso seguro a la plataforma.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verifica tu correo', 'text' => 'Confirma tu correo y desbloquea acceso completo a la plataforma.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Deposita fondos', 'text' => 'Ingresa al menos ' . MIN_DEPOSIT . ' ' . CURRENCY . ' mediante transferencia bancaria, tarjeta o monedero electronico.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Configura tu estrategia', 'text' => 'Define tu nivel de riesgo y preferencias de trading, de forma manual o automatizada.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Empieza a operar', 'text' => 'Entra al mercado con confianza gracias a datos en tiempo real e insights de IA.'],
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
            'name' => $site . ' plataforma de trading con IA',
            'description' => $site . ' interfaz movil de trading con grafico BTC/USDT en vivo y herramientas de cartera',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | plataforma de trading con IA - vista movil del grafico',
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
