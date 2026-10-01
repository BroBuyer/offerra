<?php
/**
 * i18n helpers for recupero template.
 * Load after SITE_NAME / SUPPORT_EMAIL are defined.
 */
function ra_i18n(): array
{
    static $cache;
    if ($cache !== null) {
        return $cache;
    }
    $cache = require __DIR__ . '/i18n.php';

    return $cache;
}

function t(string $key, array $extra = []): string
{
    $map = ra_i18n();
    $text = $map[$key] ?? $key;
    $repl = array_merge([
        '{brand}' => SITE_NAME,
        '{email}' => defined('SUPPORT_EMAIL') ? SUPPORT_EMAIL : ('support@' . site_domain()),
    ], $extra);

    return strtr($text, $repl);
}

function te(string $key, array $extra = []): string
{
    return e(t($key, $extra));
}

/** HTML-aware: allows intentional <strong> etc. from i18n strings. */
function th(string $key, array $extra = []): string
{
    $allowed = '<strong><em><br>';
    return strip_tags(t($key, $extra), $allowed);
}
