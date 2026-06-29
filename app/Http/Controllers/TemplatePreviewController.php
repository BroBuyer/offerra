<?php

namespace App\Http\Controllers;

use App\Services\TemplateCatalog;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Process;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class TemplatePreviewController extends Controller
{
    public function __construct(
        private readonly TemplateCatalog $catalog,
    ) {}

    public function show(string $template, ?string $path = null): Response|BinaryFileResponse
    {
        if (! in_array($template, $this->catalog->ids(), true)) {
            abort(404);
        }

        $basePath = rtrim(config('offerra.templates_path'), DIRECTORY_SEPARATOR)
            .DIRECTORY_SEPARATOR.$template;

        if (! is_dir($basePath)) {
            abort(404);
        }

        $path = trim((string) $path, '/');

        if ($path === '') {
            $path = 'index.php';
        }

        if ($path === 'robots.txt') {
            $path = 'robots.php';
        }

        if ($path === 'sitemap.xml') {
            $path = 'sitemap.php';
        }

        $fullPath = $basePath.DIRECTORY_SEPARATOR.str_replace('/', DIRECTORY_SEPARATOR, $path);
        $realBase = realpath($basePath);
        $realFile = realpath($fullPath);

        if (! $realBase || ! $realFile || ! str_starts_with($realFile, $realBase)) {
            abort(404);
        }

        if (is_dir($realFile)) {
            $index = $realFile.DIRECTORY_SEPARATOR.'index.php';

            if (! is_file($index)) {
                abort(404);
            }

            return $this->servePhp($template, $index, $path);
        }

        $extension = strtolower(pathinfo($realFile, PATHINFO_EXTENSION));

        if ($extension === 'php') {
            return $this->servePhp($template, $realFile, $path);
        }

        if (! in_array($extension, ['css', 'js', 'svg', 'png', 'jpg', 'jpeg', 'webp', 'gif', 'ico', 'woff', 'woff2', 'ttf', 'map', 'json', 'txt'], true)) {
            abort(404);
        }

        return response()->file($realFile, [
            'Content-Type' => $this->mimeType($extension),
        ]);
    }

    private function servePhp(string $template, string $absoluteFile, string $webPath): Response
    {
        if (! is_file($absoluteFile)) {
            abort(404);
        }

        $script = base_path('scripts/render-offer-php.php');
        $requestUri = '/preview/'.$template.'/'.ltrim($webPath, '/');
        $httpHost = request()->getHttpHost();

        $result = Process::timeout(30)->run([
            PHP_BINARY,
            $script,
            $absoluteFile,
            $requestUri,
            $httpHost,
        ]);

        if (! $result->successful()) {
            abort(500, 'Помилка рендеру шаблону: '.trim($result->errorOutput()));
        }

        return response($result->output(), 200, [
            'Content-Type' => 'text/html; charset=UTF-8',
        ]);
    }

    private function mimeType(string $extension): string
    {
        return match ($extension) {
            'css' => 'text/css; charset=UTF-8',
            'js' => 'application/javascript; charset=UTF-8',
            'svg' => 'image/svg+xml',
            'png' => 'image/png',
            'jpg', 'jpeg' => 'image/jpeg',
            'webp' => 'image/webp',
            'gif' => 'image/gif',
            'ico' => 'image/x-icon',
            'woff' => 'font/woff',
            'woff2' => 'font/woff2',
            'ttf' => 'font/ttf',
            'json' => 'application/json; charset=UTF-8',
            'txt' => 'text/plain; charset=UTF-8',
            default => 'application/octet-stream',
        };
    }
}
