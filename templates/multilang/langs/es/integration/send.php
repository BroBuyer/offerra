<?php
declare(strict_types=1);

ini_set('display_errors', '0');

header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');

date_default_timezone_set('Europe/Kyiv');

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/LeadProcessor.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Method not allowed'], JSON_UNESCAPED_UNICODE);
    exit;
}

$lead = LeadProcessor::parsePayload();

if (!$lead) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Empty request'], JSON_UNESCAPED_UNICODE);
    exit;
}

$result = LeadProcessor::process($lead);
$status = (int) ($result['http_status'] ?? 200);
unset($result['http_status']);

http_response_code($status);
echo json_encode($result, JSON_UNESCAPED_UNICODE);
