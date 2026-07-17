<?php

namespace App\Services;

use App\Jobs\DeployOfferJob;
use App\Models\Offer;
use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Contracts\Cache\LockTimeoutException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;
use League\Flysystem\Filesystem;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RuntimeException;

class DeployService
{
    private const DEPLOY_TIMEOUT = 600;

    /** @var array<string, true> */
    private array $knownRemoteDirs = [];

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

    public function resetStuckDeploys(int $minutes = 8): int
    {
        $stuck = Offer::query()
            ->where('status', 'deploying')
            ->where('updated_at', '<', now()->subMinutes($minutes))
            ->get();

        foreach ($stuck as $offer) {
            $offer->update([
                'status' => $offer->deployed_at ? 'deployed' : 'failed',
                'deploy_error' => 'Деплой перервано (таймаут або збій з\'єднання). Спробуйте ще раз.',
            ]);
        }

        return $stuck->count();
    }

    public function enqueueDeploy(User $user, Offer $offer): void
    {
        $this->assertCanDeploy($user, $offer);

        if ($offer->status === 'deploying') {
            throw new RuntimeException(
                'Деплой цього оффера вже виконується. Зачекайте кілька хвилин і оновіть сторінку.',
            );
        }

        if (in_array($offer->status, ['archived', 'archiving'], true)) {
            throw new RuntimeException('Архівний оффер не можна деплоїти.');
        }

        $offer->update([
            'status' => 'deploying',
            'deploy_error' => null,
        ]);

        DeployOfferJob::dispatch($offer->id)->afterResponse();
    }

    public function assertCanDeploy(User $user, Offer $offer): void
    {
        $settings = $user->settings;

        if (! $settings || ! $this->settingsReady($settings)) {
            throw new InvalidArgumentException(
                'Заповніть SFTP-налаштування в розділі «Деплой на Hestia».',
            );
        }
    }

    public function deploy(User $user, Offer $offer): Offer
    {
        @set_time_limit(0);
        ignore_user_abort(true);

        $this->resetStuckDeploys();

        $lock = Cache::lock('offer-deploy-'.$offer->id, self::DEPLOY_TIMEOUT + 60);

        try {
            $lock->block(5);
        } catch (LockTimeoutException) {
            throw new RuntimeException(
                'Деплой цього оффера вже виконується. Зачекайте кілька хвилин і спробуйте знову.',
            );
        }

        try {
            return $this->runDeploy($user, $offer);
        } finally {
            $lock->release();
        }
    }

    private function runDeploy(User $user, Offer $offer): Offer
    {
        $this->knownRemoteDirs = [];

        $offer->loadMissing('user.settings');

        $this->generator->refreshConfig($offer);

        $localPath = $this->generator->ensureLocalFolder($offer);

        if (! File::isFile($localPath.'/index.php')) {
            throw new RuntimeException("Локальний index.php не знайдено: {$offer->folder}");
        }

        $this->generator->syncSharedIntegrationFiles($localPath, $offer->template);
        $this->generator->migrateLegacyAssets($localPath);

        $offer->update([
            'status' => 'deploying',
            'deploy_error' => null,
        ]);

        try {
            $settings = $user->settings;
            $config = $this->configFromSettings($settings);
            $filesystem = $this->connection->connect($config, self::DEPLOY_TIMEOUT);
            $remotePath = $this->connection->resolveExistingRemotePath(
                $filesystem,
                $config['path_template'],
                $config['username'],
                $offer->domain,
            );

            if ($remotePath === null) {
                $tried = implode(', ', $this->connection->resolveRemotePathCandidates(
                    $config['path_template'],
                    $config['username'],
                    $offer->domain,
                ));

                throw new RuntimeException(
                    "Папка на сервері не знайдена. Перевірені шляхи: {$tried}. Створіть домен у Hestia.",
                );
            }

            Log::info('Deploy started', ['offer' => $offer->id, 'domain' => $offer->domain, 'remote' => $remotePath]);

            if (! File::isDirectory($localPath) || ! File::isFile($localPath.'/index.php')) {
                $localPath = $this->generator->ensureLocalFolder($offer->fresh());
            }

            $removed = $this->cleanRemoteDirectory($filesystem, $remotePath);

            if ($removed > 0) {
                Log::info('Deploy cleaned remote directory', ['offer' => $offer->id, 'removed' => $removed]);
            }

            $this->knownRemoteDirs = [$remotePath => true];

            $uploaded = $this->uploadDirectory($filesystem, $localPath, $remotePath, $offer);

            if ($uploaded === 0) {
                throw new RuntimeException('На сервер не завантажено жодного файлу.');
            }

            $remoteIndex = rtrim($remotePath, '/').'/index.php';

            if (! $filesystem->fileExists($remoteIndex)) {
                throw new RuntimeException('index.php не знайдено на сервері після деплою.');
            }

            $this->verifyRequiredRemoteFiles($filesystem, $localPath, $remotePath);

            try {
                $this->connection->chmodPublicRecursive($config, $remotePath, self::DEPLOY_TIMEOUT);
            } catch (\Throwable $chmodError) {
                Log::warning('Deploy chmod skipped', [
                    'path' => $remotePath,
                    'error' => $chmodError->getMessage(),
                ]);
            }

            Log::info('Deploy upload finished', ['offer' => $offer->id, 'files' => $uploaded]);

            $offer->update([
                'status' => 'deployed',
                'deploy_panel_name' => $settings->deploy_panel_name ?? 'Hestia',
                'remote_path' => $remotePath,
                'deployed_at' => now(),
                'deploy_error' => null,
            ]);

            if (config('offerra.purge_local_after_deploy', true)) {
                $this->purgeLocalFolder($localPath, $offer);
            }

            return $offer->fresh();
        } catch (\Throwable $e) {
            $offer->update([
                'status' => $offer->deployed_at ? 'deployed' : 'failed',
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

    private function uploadDirectory(Filesystem $filesystem, string $localPath, string $remotePath, Offer $offer): int
    {
        if (! File::isDirectory($localPath) || ! File::isFile($localPath.'/index.php')) {
            $localPath = $this->generator->ensureLocalFolder($offer->fresh());
        }

        if (! File::isDirectory($localPath)) {
            throw new RuntimeException("Локальна папка оффера не знайдена: {$localPath}");
        }

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
            );
            $count++;
        }

        return $count;
    }

    private function verifyRequiredRemoteFiles(Filesystem $filesystem, string $localPath, string $remotePath): void
    {
        $missing = [];

        foreach ($this->generator->requiredRelativePaths() as $relativePath) {
            $localFile = $localPath.DIRECTORY_SEPARATOR.$relativePath;
            $remoteFile = rtrim($remotePath, '/').'/'.$relativePath;

            if (! File::isFile($localFile)) {
                throw new RuntimeException("Локально відсутній обов'язковий файл: {$relativePath}");
            }

            if (! $filesystem->fileExists($remoteFile)) {
                $missing[] = $relativePath;
            }
        }

        if ($missing !== []) {
            throw new RuntimeException(
                'Після деплою на сервері бракує файлів: '.implode(', ', $missing),
            );
        }
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
                $filesystem->createDirectory($remoteDir);
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

        // Multilang: langs/{code}/static|integration are unused duplicates of offer root.
        if (preg_match('#^langs/[a-z]{2}/(static|integration)(/|$)#', $relativePath)) {
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

    private function purgeLocalFolder(string $localPath, Offer $offer): void
    {
        if (! File::isDirectory($localPath)) {
            return;
        }

        File::deleteDirectory($localPath);

        Log::info('Deploy purged local offer folder', [
            'offer' => $offer->id,
            'folder' => $offer->folder,
            'path' => $localPath,
        ]);
    }
}
