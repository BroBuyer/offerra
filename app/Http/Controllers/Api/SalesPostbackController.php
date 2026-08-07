<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\SalesPostbackService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SalesPostbackController extends Controller
{
    public function __invoke(Request $request, string $token, SalesPostbackService $postbacks): Response
    {
        $input = array_merge($request->query(), $request->request->all());

        $result = $postbacks->handle($token, $input);

        if (! ($result['ok'] ?? false)) {
            $reason = (string) ($result['reason'] ?? 'error');

            if (in_array($reason, ['invalid_token', 'unknown_token'], true)) {
                return response('Forbidden', 403)->header('Content-Type', 'text/plain; charset=UTF-8');
            }

            if ($reason === 'missing_subid') {
                return response('Bad Request', 400)->header('Content-Type', 'text/plain; charset=UTF-8');
            }

            // Telegram hiccup — still 200 so Keitaro does not hammer retries forever
            return response('OK', 200)->header('Content-Type', 'text/plain; charset=UTF-8');
        }

        return response('OK', 200)->header('Content-Type', 'text/plain; charset=UTF-8');
    }
}
