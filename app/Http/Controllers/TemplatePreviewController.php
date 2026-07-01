<?php

namespace App\Http\Controllers;

use App\Services\TemplateCatalog;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Throwable;

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

        $webPath = ltrim($webPath, '/');
        $requestUri = ($webPath === '' || $webPath === 'index.php')
            ? '/preview/'.$template.'/'
            : '/preview/'.$template.'/'.ltrim($webPath, '/');

        $previousCwd = getcwd() ?: '.';
        $serverBackup = [
            'HTTP_HOST' => $_SERVER['HTTP_HOST'] ?? null,
            'REQUEST_URI' => $_SERVER['REQUEST_URI'] ?? null,
            'REQUEST_METHOD' => $_SERVER['REQUEST_METHOD'] ?? null,
            'HTTPS' => $_SERVER['HTTPS'] ?? null,
        ];

        if (! defined('OFFERRA_PREVIEW')) {
            define('OFFERRA_PREVIEW', true);
        }

        putenv('OFFERRA_PREVIEW=1');
        $_ENV['OFFERRA_PREVIEW'] = '1';

        $sessionDir = sys_get_temp_dir().DIRECTORY_SEPARATOR.'offerra-preview-sessions';
        if (! is_dir($sessionDir)) {
            @mkdir($sessionDir, 0777, true);
        }

        if (is_dir($sessionDir) && is_writable($sessionDir)) {
            ini_set('session.save_path', $sessionDir);
        }

        $previousErrorReporting = error_reporting(0);
        $previousDisplayErrors = ini_get('display_errors');
        ini_set('display_errors', '0');

        $_SERVER['HTTP_HOST'] = request()->getHttpHost();
        $_SERVER['REQUEST_URI'] = $requestUri;
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_SERVER['HTTPS'] = request()->secure() ? 'on' : 'off';

        chdir(dirname($absoluteFile));

        ob_start();

        try {
            require basename($absoluteFile);
            $output = ob_get_clean();
        } catch (Throwable $e) {
            if (ob_get_level() > 0) {
                ob_end_clean();
            }

            report($e);

            abort(500, 'Помилка рендеру шаблону: '.$e->getMessage());
        } finally {
            chdir($previousCwd);
            error_reporting($previousErrorReporting);
            ini_set('display_errors', (string) $previousDisplayErrors);

            foreach ($serverBackup as $key => $value) {
                if ($value === null) {
                    unset($_SERVER[$key]);
                } else {
                    $_SERVER[$key] = $value;
                }
            }
        }

        return response($output, 200, [
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
