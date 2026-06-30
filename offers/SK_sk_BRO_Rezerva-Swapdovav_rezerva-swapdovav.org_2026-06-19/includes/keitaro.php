<?php
/**
 * Keitaro KClient PHP — server-side click tracking (URL трекера не світиться у фронті).
 * Потрібен офіційний integration/kclient.php з панелі Keitaro (Campaign → Integration → KClient PHP).
 */

function keitaro_is_enabled(): bool
{
    return defined('KEITARO_ENABLED')
        && KEITARO_ENABLED
        && defined('KEITARO_CAMPAIGN_TOKEN')
        && trim((string) KEITARO_CAMPAIGN_TOKEN) !== '';
}

function keitaro_should_track(): bool
{
    if (!keitaro_is_enabled()) {
        return false;
    }

    $uri = strtolower((string) ($_SERVER['REQUEST_URI'] ?? ''));

    if (str_contains($uri, '/integration/')) {
        return false;
    }

    if (str_contains($uri, 'sitemap') || str_contains($uri, 'robots.php')) {
        return false;
    }

    return true;
}

function keitaro_session_key(): string
{
    return site_slug() . '_keitaro_subid';
}

function keitaro_subid(): string
{
    if (!keitaro_is_enabled()) {
        return '';
    }

    $key = keitaro_session_key();

    if (!empty($_SESSION[$key])) {
        return trim((string) $_SESSION[$key]);
    }

    if (!empty($_SESSION['subid'])) {
        return trim((string) $_SESSION['subid']);
    }

    $cookieKey = $key;
    if (!empty($_COOKIE[$cookieKey])) {
        return trim((string) $_COOKIE[$cookieKey]);
    }

    return '';
}

function keitaro_create_client()
{
    $trackerUrl = rtrim((string) KEITARO_TRACKER_URL, '/') . '/';
    $token = (string) KEITARO_CAMPAIGN_TOKEN;

    if (class_exists('KClient')) {
        return new KClient($trackerUrl, $token);
    }

    if (class_exists('KClickClient')) {
        return new KClickClient($trackerUrl, $token);
    }

    return null;
}

function keitaro_client_subid(object $client): string
{
    if (method_exists($client, 'getSubId')) {
        $subid = trim((string) $client->getSubId());
        if ($subid !== '' && $subid !== 'no_subid') {
            return $subid;
        }
    }

    if (method_exists($client, 'getSubid')) {
        $subid = trim((string) $client->getSubid());
        if ($subid !== '' && $subid !== 'no_subid') {
            return $subid;
        }
    }

    return keitaro_client_subid_from_result($client);
}

/** KClient 4.x часто віддає subid лише в cookies відповіді API, не в info.subId. */
function keitaro_client_subid_from_result(object $client): string
{
    if (!method_exists($client, 'performRequest')) {
        return '';
    }

    try {
        $result = $client->performRequest();
    } catch (Throwable $e) {
        return '';
    }

    if ($result === null || empty($result->cookies) || !is_iterable($result->cookies)) {
        return '';
    }

    foreach ($result->cookies as $cookie) {
        $name = is_object($cookie) ? (string) ($cookie->name ?? '') : (string) ($cookie['name'] ?? '');
        $value = is_object($cookie) ? (string) ($cookie->value ?? '') : (string) ($cookie['value'] ?? '');

        if (in_array($name, ['_subid', 'subid', 'sub_id'], true) && $value !== '') {
            return trim($value);
        }
    }

    return '';
}

function keitaro_store_subid(string $subid): void
{
    if ($subid === '') {
        return;
    }

    $key = keitaro_session_key();
    $_SESSION[$key] = $subid;

    $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
    setcookie($key, $subid, [
        'expires' => time() + 86400 * 30,
        'path' => '/',
        'secure' => $secure,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
}

function keitaro_bootstrap(): void
{
    if (!keitaro_should_track()) {
        return;
    }

    if (!extension_loaded('curl')) {
        if (defined('KEITARO_DEBUG') && KEITARO_DEBUG) {
            error_log('[Keitaro] PHP extension curl is not enabled');
        }

        return;
    }

    $kclientPath = dirname(__DIR__) . '/integration/kclient.php';
    if (!is_file($kclientPath)) {
        return;
    }

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    require_once $kclientPath;

    if (!class_exists('KClient') && !class_exists('KClickClient')) {
        return;
    }

    $client = keitaro_create_client();
    if ($client === null) {
        return;
    }

    $sessionFlag = site_slug() . '_keitaro_tracked';

    try {
        if (!empty($_SESSION[$sessionFlag])) {
            if (method_exists($client, 'restoreFromSession')) {
                $client->restoreFromSession();
            }

            $subid = keitaro_client_subid($client);
            if ($subid !== '') {
                keitaro_store_subid($subid);
            }

            return;
        }

        if (method_exists($client, 'sendAllParams')) {
            $client->sendAllParams();
        }

        if (method_exists($client, 'sendUtmLabels')) {
            $client->sendUtmLabels();
        }

        if (method_exists($client, 'currentPageAsReferrer')) {
            $client->currentPageAsReferrer();
        }

        // false, false — тільки трекінг, без виводу тіла/заголовків від Keitaro у HTML
        if (method_exists($client, 'execute')) {
            $client->execute(false, false);
        }

        $subid = keitaro_client_subid($client);
        if ($subid !== '') {
            keitaro_store_subid($subid);
        }

        $_SESSION[$sessionFlag] = true;
    } catch (Throwable $e) {
        if (defined('KEITARO_DEBUG') && KEITARO_DEBUG) {
            error_log('[Keitaro] ' . $e->getMessage());
        }
    }
}
