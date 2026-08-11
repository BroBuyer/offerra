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
        'description' => 'Una plataforma clara de inversión asistida por IA para mercados cripto y multi-activo.',
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
        'description' => 'Plataforma sencilla de inversión con IA, con mercados en vivo, insights guiados y un espacio de operaciones tranquilo.',
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
                    'text' => 'Crea una cuenta en minutos, completa un breve paso de verificación y financia tu cuenta con un depósito mínimo de ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Desbloquearás la plataforma completa, incluidos gráficos en vivo y herramientas de trading.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Están seguros mi dinero y mis datos?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Protegemos las cuentas con cifrado SSL, autenticación en dos factores y gestión segura de fondos a través de proveedores de pago de confianza. Tus datos personales se gestionan bajo políticas de seguridad estrictas.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Cuándo puedo retirar beneficios?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Los retiros se pueden solicitar en cualquier momento desde el panel de tu cuenta. El procesamiento suele tardar 1–3 días hábiles según el método. Las comisiones y plazos se muestran por adelantado.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Necesito experiencia en trading?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No se requiere experiencia previa. El onboarding guiado, tutoriales sencillos y herramientas asistidas por IA te ayudan a aprender a tu ritmo, con soporte 24/7 disponible.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Cómo empezar a operar con ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Crea tu cuenta', 'text' => 'Regístrate con tus datos básicos y obtén acceso seguro a la plataforma.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verifica tu email', 'text' => 'Confirma tu email para desbloquear el acceso completo a la plataforma.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Financia tu cuenta', 'text' => 'Deposita un mínimo de ' . MIN_DEPOSIT . ' ' . CURRENCY . ' mediante transferencia bancaria, tarjeta o monedero electrónico.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Define tu estrategia', 'text' => 'Elige el nivel de riesgo y las preferencias de trading — manual o automatizado.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Empieza a operar', 'text' => 'Entra en el mercado con confianza usando datos en tiempo real e insights de IA.'],
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
            'name' => $site . ' Plataforma de Trading con IA',
            'description' => $site . ' interfaz de trading móvil con gráfico de criptomoneda BTC/USDT en vivo y herramientas de portafolio',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Plataforma de Trading con IA — vista de gráfico móvil',
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
