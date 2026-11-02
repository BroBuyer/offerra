<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\OfferClickIdService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClickIdController extends Controller
{
    public function __invoke(Request $request, string $token, OfferClickIdService $clicks): Response
    {
        if ($request->isMethod('OPTIONS')) {
            return $this->cors(response()->noContent());
        }

        $input = array_merge($request->query(), $request->request->all());
        $result = $clicks->register($token, $input);

        if (! ($result['ok'] ?? false) && in_array(($result['reason'] ?? ''), ['invalid_token', 'unknown_token'], true)) {
            return $this->cors(response('', 403));
        }

        return $this->cors(response('', 204));
    }

    private function cors(Response $response): Response
    {
        return $response
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type')
            ->header('Cache-Control', 'no-store');
    }
}
