<?php
declare(strict_types=1);

ini_set('display_errors', '0');

header('Content-Type: application/json; charset=UTF-8');

date_default_timezone_set('Europe/Kyiv');

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/FormToken.php';
require_once __DIR__ . '/LeadProcessor.php';

/**
 * Soft-block: look like a normal success so bots/AI still “win”,
 * but nothing goes to CRM / Telegram.
 */
function form_token_silent_ok(): void
{
    http_response_code(200);
    echo json_encode(FormToken::silentSuccessPayload(), JSON_UNESCAPED_UNICODE);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Method not allowed'], JSON_UNESCAPED_UNICODE);
    exit;
}

if (! FormToken::requestViaCloudflare() || ! FormToken::requestLooksSameOrigin()) {
    form_token_silent_ok();
}

if (FormToken::looksLikeBotUa()) {
    form_token_silent_ok();
}

if (FormToken::submitRateExceeded()) {
    form_token_silent_ok();
}

$lead = LeadProcessor::parsePayload();

if (! $lead) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Empty request'], JSON_UNESCAPED_UNICODE);
    exit;
}

$token = trim((string) ($lead['form_token'] ?? ''));
unset($lead['form_token']);

$consumed = FormToken::consume($token);
if (! ($consumed['ok'] ?? false) || ! empty($consumed['drop'])) {
    form_token_silent_ok();
}

FormToken::hitSubmitRate();

$result = LeadProcessor::process($lead);
$status = (int) ($result['http_status'] ?? 200);
unset($result['http_status']);

http_response_code($status);
echo json_encode($result, JSON_UNESCAPED_UNICODE);
