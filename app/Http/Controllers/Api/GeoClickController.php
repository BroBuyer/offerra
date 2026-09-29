<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\OfferGeoClickService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class GeoClickController extends Controller
{
    public function __invoke(Request $request, string $token, OfferGeoClickService $clicks): Response
    {
        if ($request->isMethod('OPTIONS')) {
            return $this->cors(response()->noContent());
        }

        $input = array_merge($request->query(), $request->request->all());
        $ip = (string) $request->ip();
        $ua = Str::limit((string) $request->userAgent(), 500, '');

        $result = $clicks->handle($token, $input, $ip, $ua);

        // Always 204 for lander fire-and-forget — never leak internals.
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
