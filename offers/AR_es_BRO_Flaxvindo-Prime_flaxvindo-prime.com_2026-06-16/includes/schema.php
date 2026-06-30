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
        'logo' => $url . '/assets/img/logo.svg',
        'description' => 'Plataforma de trading con IA para cripto, forex y mercados globales.',
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
        'description' => 'Plataforma de trading inteligente con análisis de mercado en tiempo real y señales asistidas por IA.',
        'image' => $platform_image,
        'screenshot' => $platform_image,
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
                'name' => '¿Cómo puedo empezar?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Creá una cuenta en pocos minutos, completá un breve paso de verificación y depositá en tu cuenta con un depósito mínimo de ' . MIN_DEPOSIT . ' ' . CURRENCY . '. Desbloquearás el acceso completo a la plataforma, incluidos gráficos en tiempo real y herramientas de trading.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Mis fondos y mis datos están seguros?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Protegemos las cuentas con cifrado SSL, autenticación de dos factores y gestión segura de fondos a través de proveedores de pago confiables. Tus datos personales se gestionan según estrictas políticas de seguridad.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Cuándo puedo retirar las ganancias?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Los retiros pueden solicitarse en cualquier momento desde tu área personal. El procesamiento suele tardar de 1 a 3 días hábiles según el método. Las comisiones y los plazos se muestran por adelantado.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Se necesita experiencia en trading?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No se requiere experiencia previa. La incorporación guiada, tutoriales simples y herramientas asistidas por IA te ayudan a aprender a tu ritmo, con soporte 24/7 disponible.',
                ],
            ],
        ],
    ];

    $howto = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Cómo empezar a operar con ' . $site,
        'step' => [
            ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Creá tu cuenta', 'text' => 'Registrate con tus datos básicos y obtené acceso seguro a la plataforma.'],
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verificá tu correo', 'text' => 'Confirmá tu correo electrónico para desbloquear el acceso completo a la plataforma.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Depositá en tu cuenta', 'text' => 'Depositá un mínimo de ' . MIN_DEPOSIT . ' ' . CURRENCY . ' mediante transferencia, tarjeta o billetera electrónica.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Configurá tu estrategia', 'text' => 'Elegí el nivel de riesgo y las preferencias de trading — manual o automático.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Empezá a operar', 'text' => 'Entrá al mercado con confianza usando datos en tiempo real e insights con IA.'],
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
            'name' => $site . ' | Plataforma de trading',
            'description' => $site . ' interfaz de trading móvil con gráfico cripto BTC/USDT en tiempo real y herramientas de portafolio',
            'contentUrl' => $platform_image,
            'thumbnailUrl' => $platform_image,
            'caption' => $site . ' | Plataforma de trading — vista de gráfico desde el móvil',
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
