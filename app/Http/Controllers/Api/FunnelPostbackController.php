<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\FunnelAlertService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FunnelPostbackController extends Controller
{
    public function __invoke(Request $request, FunnelAlertService $alerts): JsonResponse
    {
        $bearer = $request->bearerToken() ?? '';

        $result = $alerts->handle($bearer, $request->all());

        if (! ($result['ok'] ?? false)) {
            $reason = (string) ($result['reason'] ?? 'error');

            if ($reason === 'invalid_token') {
                return response()->json(['error' => 'forbidden'], 403);
            }

            if ($reason === 'missing_fields') {
                return response()->json(['error' => 'missing_fields'], 422);
            }

            return response()->json(['error' => $reason], 400);
        }

        return response()->json(['ok' => true]);
    }
}
