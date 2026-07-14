<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\DynadotClient;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DomainBalanceController extends Controller
{
    public function show(Request $request, DynadotClient $dynadot): JsonResponse
    {
        $settings = $this->resolveSettings($request);

        if (! $settings || ! filled($settings->dynadot_api_key)) {
            return response()->json([
                'ok' => false,
                'message' => 'Збережіть Dynadot API key у налаштуваннях.',
            ], 422);
        }

        try {
            $balance = $dynadot->getAccountBalance($settings);

            return response()->json([
                'ok' => true,
                'balance' => $balance,
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'ok' => false,
                'message' => $e->getMessage(),
            ], 422);
        }
    }

    private function resolveSettings(Request $request)
    {
        $authUser = $request->user();
        $userId = $request->integer('user_id') ?: $authUser->id;

        if ($userId !== $authUser->id && ! $authUser->isAdmin()) {
            abort(403);
        }

        $targetUser = $userId === $authUser->id
            ? $authUser
            : User::query()->findOrFail($userId);

        return $targetUser->settings;
    }
}
