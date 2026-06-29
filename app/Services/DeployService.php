<?php

namespace App\Services;

use App\Models\Offer;
use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;
use League\Flysystem\Filesystem;
use League\Flysystem\Visibility;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RuntimeException;

class DeployService
{
    private const DEPLOY_TIMEOUT = 180;

    /** @var array<string, true> */
    private array $knownRemoteDirs = [];

    /** @var array<string, string> */
    private const UPLOAD_CONFIG = [
        'visibility' => Visibility::PUBLIC,
        'directory_visibility' => Visibility::PUBLIC,
    ];

    /** @var list<string> */
    private const SKIP_FILES = [
        'dev-server.ps1',
        'router.php',
        '.gitignore',
    ];

    public function __construct(
        private readonly DeployConnection $connection,
        private readonly OfferGenerator $generator,
        private readonly string $offersPath,
    ) {}

    public function resetStuckDeploys(int $minutes = 3): int
    {
        return Offer::query()
            ->where('status', 'deploying')
            ->where('updated_at', '<', now()->subMinutes($minutes))
            ->update([
                'status' => 'failed',
                'deploy_error' => 'Деплой перервано (таймаут або збій з\'єднання). Спробуйте ще раз.',
            ]);
    }

    public function deploy(User $user, Offer $offer): Offer
    {
        @set_time_limit(0);
        ignore_user_abort(true);

        $this->knownRemoteDirs = [];

        $settings = $user->settings;

        if (! $settings || ! $this->settingsReady($settings)) {
            throw new InvalidArgumentException(
                'Заповніть SFTP-налаштування в розділі «Деплой на Hestia».',
            );
        }

        $localPath = rtrim($this->offersPath, DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR.$offer->folder;

        if (! File::isDirectory($localPath)) {
            throw new RuntimeException("Локальна папка не знайдена: {$offer->folder}");
        }

        $this->generator->migrateLegacyAssets($localPath);

        $offer->update([
            'status' => 'deploying',
            'deploy_error' => null,
        ]);

        try {
            $config = $this->configFromSettings($settings);
            $remotePath = $this->connection->resolveRemotePath(
                $config['path_template'],
                $config['username'],
                $offer->domain,
            );

            $filesystem = $this->connection->connect($config, self::DEPLOY_TIMEOUT);

            if (! $filesystem->directoryExists($remotePath)) {
                throw new RuntimeException(
                    "Папка на сервері не знайдена: {$remotePath}. Створіть домен у Hestia.",
                );
            }

            Log::info('Deploy started', ['offer' => $offer->id, 'domain' => $offer->domain, 'remote' => $remotePath]);

            $removed = $this->cleanRemoteDirectory($filesystem, $remotePath);

            if ($removed > 0) {
                Log::info('Deploy cleaned remote directory', ['offer' => $offer->id, 'removed' => $removed]);
            }

            $this->knownRemoteDirs = [$remotePath => true];

            $uploaded = $this->uploadDirectory($filesystem, $localPath, $remotePath);

            try {
                $this->connection->chmodPublicRecursive($config, $remotePath, self::DEPLOY_TIMEOUT);
            } catch (\Throwable $chmodError) {
                Log::warning('Deploy chmod skipped', [
                    'path' => $remotePath,
                    'error' => $chmodError->getMessage(),
                ]);
            }

            Log::info('Deploy upload finished', ['offer' => $offer->id, 'files' => $uploaded]);

            $this->updateManifest($localPath, $offer, $settings, $remotePath);

            $offer->update([
                'status' => 'deployed',
                'deploy_panel_name' => $settings->deploy_panel_name ?? 'Hestia',
                'remote_path' => $remotePath,
                'deployed_at' => now(),
                'deploy_error' => null,
            ]);

            return $offer->fresh();
        } catch (\Throwable $e) {
            $offer->update([
                'status' => 'failed',
                'deploy_error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    public function settingsReady(?UserSetting $settings): bool
    {
        return $settings
            && filled($settings->deploy_host)
            && filled($settings->deploy_username)
            && filled($settings->deploy_password);
    }

    /**
     * @return array{host: string, port: int, username: string, password: string, path_template: string|null}
     */
    private function configFromSettings(UserSetting $settings): array
    {
        return [
            'host' => (string) $settings->deploy_host,
            'port' => (int) ($settings->deploy_port ?? 22),
            'username' => (string) $settings->deploy_username,
            'password' => (string) $settings->deploy_password,
            'path_template' => $settings->deploy_path_template,
        ];
    }

    private function uploadDirectory(Filesystem $filesystem, string $localPath, string $remotePath): int
    {
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($localPath, RecursiveDirectoryIterator::SKIP_DOTS),
        );

        $count = 0;
        $localBase = rtrim(str_replace('\\', '/', $localPath), '/');

        foreach ($iterator as $file) {
            if (! $file->isFile()) {
                continue;
            }

            $absolute = str_replace('\\', '/', $file->getPathname());
            $relative = ltrim(substr($absolute, strlen($localBase)), '/');

            if ($this->shouldSkip($relative)) {
                continue;
            }

            $remote = rtrim($remotePath, '/').'/'.$relative;
            $this->ensureRemoteDirectory($filesystem, dirname($remote));

            $filesystem->write(
                $remote,
                (string) file_get_contents($file->getPathname()),
                self::UPLOAD_CONFIG,
            );
            $count++;
        }

        return $count;
    }

    private function ensureRemoteDirectory(Filesystem $filesystem, string $remoteDir): void
    {
        if ($remoteDir === '.' || $remoteDir === '/' || isset($this->knownRemoteDirs[$remoteDir])) {
            return;
        }

        $parent = dirname($remoteDir);
        if ($parent !== $remoteDir && $parent !== '.' && $parent !== '/') {
            $this->ensureRemoteDirectory($filesystem, $parent);
        }

        if (! $filesystem->directoryExists($remoteDir)) {
            try {
                $filesystem->createDirectory($remoteDir, self::UPLOAD_CONFIG);
            } catch (\Throwable $e) {
                if (! $filesystem->directoryExists($remoteDir)) {
                    throw $e;
                }
            }
        }

        $this->knownRemoteDirs[$remoteDir] = true;
    }

    private function shouldSkip(string $relativePath): bool
    {
        $basename = basename($relativePath);

        if (in_array($basename, self::SKIP_FILES, true)) {
            return true;
        }

        if (str_starts_with($relativePath, '.git/') || str_contains($relativePath, '/.git/')) {
            return true;
        }

        return false;
    }

    private function cleanRemoteDirectory(Filesystem $filesystem, string $remotePath): int
    {
        $remotePath = rtrim($remotePath, '/');
        $removed = 0;

        try {
            $listing = $filesystem->listContents($remotePath, false);
        } catch (\Throwable $e) {
            Log::warning('Deploy clean skipped — cannot list remote directory', [
                'path' => $remotePath,
                'error' => $e->getMessage(),
            ]);

            return 0;
        }

        foreach ($listing as $item) {
            $path = $item->path();

            try {
                if ($item->isDir()) {
                    $filesystem->deleteDirectory($path);
                } else {
                    $filesystem->delete($path);
                }

                $removed++;
            } catch (\Throwable $e) {
                Log::warning('Deploy clean item failed', [
                    'path' => $path,
                    'error' => $e->getMessage(),
                ]);
            }
        }

        return $removed;
    }

    private function updateManifest(string $localPath, Offer $offer, UserSetting $settings, string $remotePath): void
    {
        $manifestPath = $localPath.'/manifest.json';
        $manifest = [];

        if (File::exists($manifestPath)) {
            $decoded = json_decode(File::get($manifestPath), true);
            $manifest = is_array($decoded) ? $decoded : [];
        }

        $manifest = array_merge($manifest, [
            'status' => 'deployed',
            'deploy_panel' => $settings->deploy_panel_name ?? 'Hestia',
            'deploy_host' => $settings->deploy_host,
            'remote_path' => $remotePath,
            'deployed_at' => now()->toIso8601String(),
        ]);

        File::put(
            $manifestPath,
            json_encode($manifest, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)."\n",
        );
    }
}
