<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseDomainRequest;
use App\Services\DynadotClient;
use Illuminate\Http\JsonResponse;

class DomainPurchaseController extends Controller
{
    public function store(PurchaseDomainRequest $request, DynadotClient $dynadot): JsonResponse
    {
        $settings = $request->user()->settings;

        if (! $settings || ! filled($settings->dynadot_api_key)) {
            return response()->json([
                'ok' => false,
                'message' => 'Збережіть Dynadot API key у налаштуваннях.',
            ], 422);
        }

        try {
            $domain = trim($request->string('domain')->toString());
            $years = $request->integer('years') ?: null;
            $result = $dynadot->register($settings, $domain, $years);

            if (! $result['ok']) {
                return response()->json([
                    'ok' => false,
                    'message' => $result['message'] ?? 'Не вдалося зареєструвати домен.',
                    'result' => $result,
                ], 422);
            }

            return response()->json([
                'ok' => true,
                'message' => 'Домен зареєстровано.',
                'result' => $result,
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'ok' => false,
                'message' => $e->getMessage(),
            ], 422);
        }
    }
}
