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
        'description' => 'Accede a criptomonedas, forex y activos globales desde una sola plataforma. ' . $site . ' combina analítica en vivo, automatización asistida y soporte experto.',
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
        'description' => $site . ' — plataforma de trading con IA, analítica en vivo, automatización asistida y acceso multimercado.',
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
                'name' => '¿Cuáles son los pasos para empezar a operar?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Regístrate con tus datos esenciales, confirma el correo y deposita en la cuenta un mínimo de ' . money_min() . '. Así desbloqueas gráficos en vivo, herramientas de trading, análisis de mercado y soporte dedicado.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿' . $site . ' es fiable para gestionar mi dinero y mi información?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Las sesiones van cifradas con SSL, hay autenticación de dos factores y las transacciones financieras pasan por partners de confianza. Las prácticas de privacidad se describen en el sitio.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Cuánto tarda un retiro de fondos?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Los retiros se pueden solicitar en cualquier momento desde el portal de la cuenta. El procesamiento suele tardar de 1 a 3 días hábiles según el método. Comisiones y plazos se muestran antes de confirmar.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '¿Hace falta experiencia en trading para empezar?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No hace falta experiencia previa. Onboarding, tutoriales y herramientas potenciadas por IA te ayudan a aprender a tu ritmo.',
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
            ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Verifica tu correo', 'text' => 'Confirma el correo para desbloquear el acceso completo.'],
            ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Deposita en la cuenta', 'text' => 'Deposita un mínimo de ' . money_min() . ' por transferencia, tarjeta o monedero electrónico.'],
            ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Define tu estrategia', 'text' => 'Elige el nivel de riesgo y las preferencias — manual o automatizado.'],
            ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Empieza a operar', 'text' => 'Entra en el mercado con confianza, con datos en tiempo real e insights de IA.'],
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
            'name' => $site . ' — plataforma de trading con IA',
            'description' => $site . ' — interfaz móvil con gráfico cripto BTC/USDT en vivo y herramientas de cartera',
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
