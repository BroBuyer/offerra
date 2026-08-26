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
use RuntimeException;

class DeployService
{
    private const DEPLOY_TIMEOUT = 600;

    /** Per-host deploy slot TTL — must exceed slow uploads. */
    private const HOST_DEPLOY_LOCK_SECONDS = 720;

    private const HOST_DEPLOY_LOCK_WAIT = 3600;

    /** @var array<string, true> */
    /** @var list<string> */
    private const SKIP_FILES = [
        'dev-server.ps1',
        'router.php',
        '.gitignore',
    ];

    public function __construct(
        private readonly OfferGenerator $generator,
        private readonly OriginHostService $origin,
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

        $offer->update(['deploy_error' => null]);

        DeployOfferJob::dispatch($offer->id);
    }

    public function enqueueDeployAfterInfra(Offer $offer): bool
    {
        $offer->loadMissing('user.settings');

        if (! $offer->user || ! $offer->provision_infrastructure) {
            return false;
        }

        if ($offer->infra_status !== 'ready') {
            return false;
        }

        if (in_array($offer->status, ['deploying', 'archived', 'archiving'], true)) {
            return false;
        }

        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];

        if (($meta['origin'] ?? '') !== 'done') {
            return false;
        }

        if (! $this->shouldAutoDeployAfterInfra($offer, $meta)) {
            Log::info('Auto-deploy after infra skipped — already deployed on target origin', [
                'offer' => $offer->id,
                'domain' => $offer->domain,
            ]);

            return false;
        }

        try {
            $this->enqueueDeploy($offer->user, $offer->fresh());

            return true;
        } catch (InvalidArgumentException|RuntimeException $e) {
            Log::info('Auto-deploy after infra skipped', [
                'offer' => $offer->id,
                'domain' => $offer->domain,
                'reason' => $e->getMessage(),
            ]);

            return false;
        }
    }

    public function needsDeploy(Offer $offer): bool
    {
        $offer->loadMissing('user.settings');

        if (! $offer->user || $offer->infra_status !== 'ready') {
            return false;
        }

        if (in_array($offer->status, ['deploying', 'archived', 'archiving'], true)) {
            return false;
        }

        $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];

        if (($meta['origin'] ?? '') !== 'done') {
            return false;
        }

        return $this->shouldAutoDeployAfterInfra($offer, $meta);
    }

    public function assertCanDeploy(User $user, Offer $offer): void
    {
        $settings = $user->settings;

        if (! $settings || ! $this->settingsReady($settings)) {
            throw new InvalidArgumentException(
                'Заповніть SSH-налаштування в розділі «Server».',
            );
        }
    }

    public function deploy(User $user, Offer $offer): Offer
    {
        @set_time_limit(0);
        ignore_user_abort(true);

        $this->resetStuckDeploys();

        $offer->loadMissing('user.settings');
        $settings = $user->settings;

        if (! $settings) {
            throw new InvalidArgumentException('Заповніть SSH-налаштування в розділі «Server».');
        }

        $hostLock = $this->acquireDeployHostSlot($settings);

        $lock = Cache::lock('offer-deploy-'.$offer->id, self::DEPLOY_TIMEOUT + 60);

        try {
            $lock->block(5);
        } catch (LockTimeoutException) {
            $hostLock->release();

            throw new RuntimeException(
                'Деплой цього оффера вже виконується. Зачекайте кілька хвилин і спробуйте знову.',
            );
        }

        try {
            return $this->runDeploy($user, $offer);
        } finally {
            $lock->release();
            $hostLock->release();
        }
    }

    public function deployDirect(User $user, Offer $offer): Offer
    {
        @set_time_limit(0);
        ignore_user_abort(true);

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
        $this->generator->syncSharedStaticFiles($localPath, $offer->template, $offer->lang);
        $this->generator->migrateLegacyAssets($localPath);

        $offer->update([
            'status' => 'deploying',
            'deploy_error' => null,
        ]);

        try {
            $settings = $user->settings;

            $remotePath = $this->origin->deployArchive(
                $settings,
                $offer->domain,
                $localPath,
                self::SKIP_FILES,
            );

            Log::info('Deploy upload finished', ['offer' => $offer->id]);

            $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
            unset($meta['needs_redeploy']);
            $meta['deploy_host'] = trim((string) $settings->deploy_host);

            $offer->update([
                'status' => 'deployed',
                'deploy_panel_name' => trim((string) $settings->deploy_host) ?: ($settings->deploy_panel_name ?? null),
                'remote_path' => $remotePath,
                'deployed_at' => now(),
                'deploy_error' => null,
                'infra_meta' => $meta,
            ]);

            if (config('offerra.purge_local_after_deploy', true)) {
                $this->purgeLocalFolder($localPath, $offer);
            }

            // Trigger DNS recheck now that files are on the server.
            $fresh = $offer->fresh();
            if ($fresh->provision_infrastructure && ($fresh->infra_meta['dns'] ?? null) === 'pending') {
                \App\Jobs\RecheckInfrastructureDnsJob::dispatch($fresh->id)->delay(now()->addSeconds(10));
            }

            return $fresh;
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

    private function deployHostLockKey(UserSetting $settings): string
    {
        $host = strtolower(trim((string) $settings->deploy_host));

        return 'origin-deploy-host-'.md5($host !== '' ? $host : 'unknown');
    }

    /**
     * @param  array<string, mixed>  $meta
     */
    private function shouldAutoDeployAfterInfra(Offer $offer, array $meta): bool
    {
        if (($meta['needs_redeploy'] ?? false) === true) {
            return true;
        }

        if ($offer->status !== 'deployed') {
            return true;
        }

        if (! filled($offer->remote_path)) {
            return true;
        }

        $settings = $offer->user?->settings;
        $currentHost = trim((string) ($settings?->deploy_host ?? ''));
        $deployedHost = trim((string) ($meta['deploy_host'] ?? ''));

        if ($currentHost !== '' && $deployedHost === '') {
            return true;
        }

        if ($currentHost !== '' && $deployedHost !== '' && $currentHost !== $deployedHost) {
            return true;
        }

        return false;
    }

    private function acquireDeployHostSlot(UserSetting $settings): \Illuminate\Contracts\Cache\Lock
    {
        $slots = max(40, (int) config('offerra.deploy_concurrency_per_host', 40));
        $base = $this->deployHostLockKey($settings);
        $deadline = time() + self::HOST_DEPLOY_LOCK_WAIT;

        while (time() < $deadline) {
            for ($slot = 1; $slot <= $slots; $slot++) {
                $lock = Cache::lock($base.'-slot-'.$slot, self::HOST_DEPLOY_LOCK_SECONDS);

                if ($lock->get()) {
                    return $lock;
                }
            }

            sleep(2);
        }

        throw new RuntimeException(
            'Черга деплою на цей сервер зайнята. Спробуйте пізніше.',
        );
    }
}
