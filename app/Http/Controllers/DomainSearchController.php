<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchDomainsRequest;
use App\Services\DynadotClient;
use Illuminate\Http\JsonResponse;

class DomainSearchController extends Controller
{
    public function store(SearchDomainsRequest $request, DynadotClient $dynadot): JsonResponse
    {
        $settings = $request->user()->settings;

        if (! $settings || ! filled($settings->dynadot_api_key)) {
            return response()->json([
                'ok' => false,
                'message' => 'Збережіть Dynadot API key у налаштуваннях.',
            ], 422);
        }

        try {
            $query = trim($request->string('query')->toString());
            $results = $dynadot->search($settings, $query);

            return response()->json([
                'ok' => true,
                'query' => $query,
                'results' => $results,
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'ok' => false,
                'message' => $e->getMessage(),
            ], 422);
        }
    }
}
