<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendCrmLeadRequest;
use App\Services\CrmLeadResendService;
use Illuminate\Http\JsonResponse;
use Inertia\Inertia;
use Inertia\Response;
use RuntimeException;

class CrmLeadController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Panel/Leads/Send');
    }

    public function store(SendCrmLeadRequest $request, CrmLeadResendService $sender): JsonResponse
    {
        try {
            $result = $sender->send($request->user(), $request->validated());
        } catch (RuntimeException $e) {
            return response()->json([
                'ok' => false,
                'message' => $e->getMessage(),
            ], 422);
        }

        return response()->json($result);
    }
}
