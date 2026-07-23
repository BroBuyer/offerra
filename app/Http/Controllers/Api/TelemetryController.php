<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\MirrorProbeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class TelemetryController extends Controller
{
    public function ping(Request $request, string $token, MirrorProbeService $mirrors): JsonResponse|Response
    {
        if ($request->isMethod('OPTIONS')) {
            return $this->cors(response()->noContent());
        }

        $host = (string) ($request->input('h') ?: $request->input('host') ?: $request->header('X-Host') ?: '');
        $path = (string) ($request->input('p') ?: $request->input('path') ?: '/');

        if ($host === '' && $request->headers->has('Origin')) {
            $origin = parse_url((string) $request->headers->get('Origin'), PHP_URL_HOST);
            $host = is_string($origin) ? $origin : '';
        }

        $payload = $mirrors->handlePing($token, $host, [
            'path' => $path,
            'ip' => (string) $request->ip(),
            'ua' => Str::limit((string) $request->userAgent(), 500, ''),
        ]);

        return $this->cors(response()->json($payload));
    }

    private function cors(JsonResponse|Response $response): JsonResponse|Response
    {
        return $response
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, X-Host')
            ->header('Cache-Control', 'no-store');
    }
}
