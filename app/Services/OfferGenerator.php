<?php

namespace App\Services;

use App\Models\Offer;
use App\Models\User;
use Illuminate\Support\Facades\File;
use InvalidArgumentException;
use RuntimeException;

class OfferGenerator
{
    public function __construct(
        private readonly OfferConfigBuilder $configBuilder,
        private readonly KeitaroClient $keitaroClient,
        private readonly TemplateCatalog $templateCatalog,
        private readonly OfferVerificationFileService $verificationFiles,
        private readonly string $offersPath,
        private readonly string $templatesPath,
    ) {}

    /**
     * @param  array<string, mixed>  $input
     * @return array{folder: string, path: string, offer: Offer}
     */
    public function generate(User $user, array $input): array
    {
        $settings = $user->settings;

        if (! $settings || ! $settings->crm_api_key || ! $settings->tg_bot_token) {
            throw new InvalidArgumentException(
                'Спочатку збережіть CRM API key і Telegram bot token у налаштуваннях.',
            );
        }

        $template = $input['template'];
        $templateLangForSource = $template === 'multilang' ? 'en' : (string) $input['lang'];
        $templatePath = $this->templateCatalog->resolveSourcePath($template, $templateLangForSource);

        if (! File::isDirectory($templatePath)) {
            throw new InvalidArgumentException("Шаблон «{$template}» ({$input['lang']}) не знайдено на диску.");
        }

        $affiliateTag = $this->normalizeAffiliateTag($settings->affiliate_tag);
        $input['affiliate_tag'] = $affiliateTag;

        $folder = $this->buildFolderName($input);
        $targetPath = rtrim($this->offersPath, DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR.$folder;

        if (File::isDirectory($targetPath)) {
            return $this->resolveExisting($user, $folder, $targetPath);
        }

        $keitaro = null;

        if (! empty($input['create_keitaro'])) {
            $keitaro = $this->keitaroClient->createCampaign($settings, $input);
            $input['keitaro_token'] = $keitaro['token'];
            $input['keitaro_campaign_id'] = $keitaro['id'];
        }

        try {
            File::copyDirectory($templatePath, $targetPath);
            $this->syncSharedIntegrationFiles($targetPath, $template);

            if ($template === 'multilang') {
                $this->pruneMultilangDuplicates($targetPath);
            }

            $config = $this->configBuilder->build($input, $settings);
            File::put($targetPath.'/includes/config.php', $config);

            $manifest = [
                'brand' => $input['brand'],
                'domain' => $input['domain'],
                'geo' => strtoupper($input['geo']),
                'lang' => strtolower($input['lang']),
                'phone' => strtolower($input['phone']),
                'phone_countries' => $this->configBuilder->phoneCountriesCsv($input),
                'min_deposit' => (string) $input['min_deposit'],
                'currency' => strtoupper((string) $input['currency']),
                'template' => $template,
                'status' => 'generated',
                'keitaro_campaign_id' => $keitaro['id'] ?? null,
                'keitaro_alias' => $keitaro['alias'] ?? null,
                'owner_id' => $user->id,
                'created_at' => now()->toDateString(),
                'folder' => $folder,
            ];

            File::put(
                $targetPath.'/manifest.json',
                json_encode($manifest, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)."\n",
            );

            $offer = Offer::create([
                'user_id' => $user->id,
                'folder' => $folder,
                'brand' => $input['brand'],
                'domain' => $input['domain'],
                'geo' => strtoupper($input['geo']),
                'lang' => strtolower($input['lang']),
                'phone' => strtolower($input['phone']),
                'phone_countries' => $this->configBuilder->phoneCountriesCsv($input),
                'min_deposit' => (string) $input['min_deposit'],
                'currency' => strtoupper((string) $input['currency']),
                'template' => $template,
                'status' => 'generated',
                'keitaro_campaign_id' => $keitaro['id'] ?? null,
                'keitaro_alias' => $keitaro['alias'] ?? null,
                'provision_infrastructure' => ! empty($input['provision_infrastructure']),
                'infra_status' => ! empty($input['provision_infrastructure']) ? 'pending' : null,
            ]);
        } catch (\Throwable $e) {
            if (File::isDirectory($targetPath)) {
                File::deleteDirectory($targetPath);
            }

            throw $e;
        }

        return [
            'folder' => $folder,
            'path' => $targetPath,
            'offer' => $offer,
            'already_existed' => false,
        ];
    }

    /**
     * @return array{folder: string, path: string, offer: Offer, already_existed: bool}
     */
    private function resolveExisting(User $user, string $folder, string $targetPath): array
    {
        $existing = Offer::query()
            ->where('folder', $folder)
            ->where('user_id', $user->id)
            ->first();

        if ($existing) {
            return [
                'folder' => $folder,
                'path' => $targetPath,
                'offer' => $existing,
                'already_existed' => true,
            ];
        }

        $manifestPath = $targetPath.'/manifest.json';

        if (File::exists($manifestPath)) {
            $manifest = json_decode(File::get($manifestPath), true);

            if (is_array($manifest)) {
                $offer = Offer::create([
                    'user_id' => $user->id,
                    'folder' => $folder,
                    'brand' => $manifest['brand'] ?? '',
                    'domain' => $manifest['domain'] ?? '',
                    'geo' => strtoupper($manifest['geo'] ?? ''),
                    'lang' => strtolower($manifest['lang'] ?? ''),
                    'phone' => strtolower($manifest['phone'] ?? ''),
                    'phone_countries' => $manifest['phone_countries'] ?? strtolower($manifest['phone'] ?? ''),
                    'min_deposit' => (string) ($manifest['min_deposit'] ?? '250'),
                    'currency' => strtoupper((string) ($manifest['currency'] ?? 'EUR')),
                    'template' => $manifest['template'] ?? 'default',
                    'status' => $manifest['status'] ?? 'generated',
                    'keitaro_campaign_id' => $manifest['keitaro_campaign_id'] ?? null,
                    'keitaro_alias' => $manifest['keitaro_alias'] ?? null,
                ]);

                return [
                    'folder' => $folder,
                    'path' => $targetPath,
                    'offer' => $offer,
                    'already_existed' => true,
                ];
            }
        }

        throw new RuntimeException("Папка вже існує: {$folder}");
    }

    /**
     * @param  array<string, mixed>  $input
     */
    public function buildFolderName(array $input): string
    {
        $brandSlug = preg_replace('/\s+/', '-', trim($input['brand']));
        $date = now()->format('Y-m-d');
        $affiliate = $this->normalizeAffiliateTag($input['affiliate_tag'] ?? null);

        return sprintf(
            '%s_%s_%s_%s_%s_%s',
            strtoupper($input['geo']),
            strtolower($input['lang']),
            $affiliate,
            $brandSlug,
            strtolower($input['domain']),
            $date,
        );
    }

    private function normalizeAffiliateTag(?string $tag): string
    {
        $tag = strtoupper(trim((string) $tag));

        return $tag !== '' ? $tag : 'BRO';
    }

    public function ensureLocalFolder(Offer $offer): string
    {
        $targetPath = rtrim($this->offersPath, DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR.$offer->folder;

        $needsRebuild = false;

        if (File::isDirectory($targetPath) && $this->folderIsComplete($targetPath)) {
            // For multilang we rely on language switcher assets under `static/img/flags/*`.
            // If the folder was generated previously from `langs/<code>` (without root `static/`),
            // those files may be missing while the generic required files are still present.
            if ($offer->template === 'multilang' && ! File::isFile($targetPath.DIRECTORY_SEPARATOR.'static'.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'flags'.DIRECTORY_SEPARATOR.'gb.png')) {
                $needsRebuild = true;
            }
        } else {
            $needsRebuild = true;
        }

        if (! $needsRebuild) {
            if ($offer->template === 'multilang') {
                $this->pruneMultilangDuplicates($targetPath);
            }

            return $targetPath;
        }

        return $this->rebuildLocalFolder($offer);
    }

    /**
     * @return list<string>
     */
    public function requiredRelativePaths(): array
    {
        return [
            'index.php',
            'contacts.php',
            'product.php',
            'offer.php',
            'faq.php',
            'sign.php',
            'privacy.php',
            'conditions.php',
            'includes/footer.php',
            'includes/head.php',
            'includes/form.php',
            'includes/config.php',
            'includes/helpers.php',
            'includes/schema.php',
            'integration/validation.js',
            'integration/visitor-geo.php',
            'integration/send.php',
            'integration/default-integration.css',
            'static/css/main.css',
        ];
    }

    private function folderIsComplete(string $targetPath): bool
    {
        foreach ($this->requiredRelativePaths() as $relativePath) {
            if (! File::isFile($targetPath.DIRECTORY_SEPARATOR.$relativePath)) {
                return false;
            }
        }

        return true;
    }

    public function rebuildLocalFolder(Offer $offer): string
    {
        $settings = $offer->user?->settings;

        if (! $settings || ! $settings->crm_api_key || ! $settings->tg_bot_token) {
            throw new InvalidArgumentException(
                'Налаштування користувача не знайдено або не заповнені CRM/Telegram ключі.',
            );
        }

        $templateLangForSource = $offer->template === 'multilang' ? 'en' : $offer->lang;
        $templatePath = $this->templateCatalog->resolveSourcePath($offer->template, $templateLangForSource);
        $targetPath = rtrim($this->offersPath, DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR.$offer->folder;

        if (File::isDirectory($targetPath)) {
            File::deleteDirectory($targetPath);
        }

        File::copyDirectory($templatePath, $targetPath);
        $this->syncSharedIncludeFiles($targetPath, $offer->template);
        $this->syncSharedIntegrationFiles($targetPath, $offer->template);

        if ($offer->template === 'multilang') {
            $this->pruneMultilangDuplicates($targetPath);
        }

        $keitaroToken = '';

        if ($offer->keitaro_campaign_id) {
            $campaign = $this->keitaroClient->getCampaign($settings, (int) $offer->keitaro_campaign_id);
            $keitaroToken = $campaign['token'] ?? '';
        }

        $input = [
            'brand' => $offer->brand,
            'domain' => $offer->domain,
            'min_deposit' => $offer->min_deposit ?: '250',
            'currency' => $offer->currency ?: 'EUR',
            'geo' => $offer->geo,
            'lang' => $offer->lang,
            'phone' => $offer->phone ?: $offer->lang,
            'phone_countries' => $offer->phone_countries ?: $offer->phone ?: $offer->lang,
            'keitaro_token' => $keitaroToken,
            'keitaro_campaign_id' => $offer->keitaro_campaign_id,
        ];

        File::put($targetPath.'/includes/config.php', $this->configBuilder->build($input, $settings));

        $manifest = [
            'brand' => $offer->brand,
            'domain' => $offer->domain,
            'geo' => strtoupper($offer->geo),
            'lang' => strtolower($offer->lang),
            'phone' => strtolower($offer->phone ?? $offer->lang),
            'phone_countries' => $offer->phone_countries ?: strtolower($offer->phone ?? $offer->lang),
            'min_deposit' => $offer->min_deposit ?: '250',
            'currency' => strtoupper($offer->currency ?: 'EUR'),
            'template' => $offer->template,
            'status' => $offer->status,
            'keitaro_campaign_id' => $offer->keitaro_campaign_id,
            'keitaro_alias' => $offer->keitaro_alias,
            'owner_id' => $offer->user_id,
            'folder' => $offer->folder,
            'deploy_panel' => $offer->deploy_panel_name,
            'remote_path' => $offer->remote_path,
            'deployed_at' => $offer->deployed_at?->toIso8601String(),
        ];

        File::put(
            $targetPath.'/manifest.json',
            json_encode($manifest, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)."\n",
        );

        $this->migrateLegacyAssets($targetPath);

        $this->verificationFiles->syncToOfferFolder($offer);

        return $targetPath;
    }

    public function refreshConfig(Offer $offer): void
    {
        $settings = $offer->user?->settings;

        if (! $settings) {
            throw new InvalidArgumentException('Налаштування користувача не знайдено.');
        }

        $targetPath = $this->ensureLocalFolder($offer);
        $configPath = $targetPath.'/includes/config.php';

        $keitaroToken = '';

        if ($offer->keitaro_campaign_id) {
            $campaign = $this->keitaroClient->getCampaign($settings, (int) $offer->keitaro_campaign_id);
            $keitaroToken = $campaign['token'] ?? '';
        }

        if ($keitaroToken === '' && File::exists($configPath)) {
            $config = File::get($configPath);

            if (preg_match("/define\('KEITARO_CAMPAIGN_TOKEN',\s*'([^']*)'\)/", $config, $matches)) {
                $keitaroToken = $matches[1];
            }
        }

        $input = [
            'brand' => $offer->brand,
            'domain' => $offer->domain,
            'min_deposit' => $offer->min_deposit ?: '250',
            'currency' => $offer->currency ?: 'EUR',
            'geo' => $offer->geo,
            'lang' => $offer->lang,
            'phone' => $offer->phone ?: $offer->lang,
            'phone_countries' => $offer->phone_countries ?: $offer->phone ?: $offer->lang,
            'keitaro_token' => $keitaroToken,
            'keitaro_campaign_id' => $offer->keitaro_campaign_id,
        ];

        File::ensureDirectoryExists(dirname($configPath));
        File::put($configPath, $this->configBuilder->build($input, $settings));
        $this->syncSharedIncludeFiles($targetPath, $offer->template);
        $this->syncSharedIntegrationFiles($targetPath, $offer->template);
        $this->migrateLegacyAssets($targetPath);
        $this->verificationFiles->syncToOfferFolder($offer);
        $this->syncManifestFromOffer($offer, $targetPath);
    }

    /**
     * @param  array<string, mixed>  $input
     */
    public function updateSettings(Offer $offer, array $input): Offer
    {
        $offer->loadMissing('user.settings');
        $settings = $offer->user?->settings;

        if (! $settings) {
            throw new InvalidArgumentException('Налаштування користувача не знайдено.');
        }

        $phone = strtolower((string) $input['phone']);
        $phoneCountriesCsv = $this->configBuilder->phoneCountriesCsv([
            'phone' => $phone,
            'phone_countries' => $input['phone_countries'] ?? [],
        ]);

        $updates = [
            'phone' => $phone,
            'phone_countries' => $phoneCountriesCsv,
        ];

        if (! empty($input['create_keitaro']) && ! $offer->keitaro_campaign_id) {
            $keitaro = $this->keitaroClient->createCampaign($settings, [
                'brand' => $offer->brand,
                'domain' => $offer->domain,
                'geo' => $offer->geo,
                'lang' => $offer->lang,
                'affiliate_tag' => $settings->affiliate_tag,
            ]);

            $updates['keitaro_campaign_id'] = $keitaro['id'];
            $updates['keitaro_alias'] = $keitaro['alias'];
        }

        $offer->update($updates);
        $offer->refresh();

        $this->refreshConfig($offer);

        return $offer->fresh();
    }

    private function syncManifestFromOffer(Offer $offer, string $targetPath): void
    {
        $manifestPath = $targetPath.'/manifest.json';

        if (! File::exists($manifestPath)) {
            return;
        }

        $manifest = json_decode(File::get($manifestPath), true);

        if (! is_array($manifest)) {
            return;
        }

        $manifest['phone'] = strtolower($offer->phone ?? '');
        $manifest['phone_countries'] = $offer->phone_countries ?? strtolower($offer->phone ?? '');
        $manifest['keitaro_campaign_id'] = $offer->keitaro_campaign_id;
        $manifest['keitaro_alias'] = $offer->keitaro_alias;

        File::put(
            $manifestPath,
            json_encode($manifest, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)."\n",
        );
    }

    /**
     * Multilang pages load assets from offer root (`/static/*`, `/integration/*`).
     * Per-lang copies under langs/{code}/static and langs/{code}/integration are unused bloat.
     */
    public function pruneMultilangDuplicates(string $targetPath): void
    {
        $langsRoot = $targetPath.DIRECTORY_SEPARATOR.'langs';

        if (! File::isDirectory($langsRoot)) {
            return;
        }

        foreach (File::directories($langsRoot) as $langDir) {
            foreach (['static', 'integration'] as $sub) {
                $path = $langDir.DIRECTORY_SEPARATOR.$sub;

                if (File::isDirectory($path)) {
                    File::deleteDirectory($path);
                }
            }
        }
    }

    /**
     * helpers.php / keitaro.php — єдине джерело в templates/{id}/includes/.
     * Мовні копії в langs/{code}/includes/ часто застарілі.
     */
    public function syncSharedIncludeFiles(string $targetPath, string $templateId = 'default'): void
    {
        $source = rtrim($this->templatesPath, DIRECTORY_SEPARATOR)
            .DIRECTORY_SEPARATOR.$templateId
            .DIRECTORY_SEPARATOR.'includes';

        if (! File::isDirectory($source)) {
            return;
        }

        $destination = $targetPath.DIRECTORY_SEPARATOR.'includes';
        File::ensureDirectoryExists($destination);

        foreach (['helpers.php', 'keitaro.php'] as $filename) {
            $src = $source.DIRECTORY_SEPARATOR.$filename;

            if (File::isFile($src)) {
                File::copy($src, $destination.DIRECTORY_SEPARATOR.$filename);
            }
        }
    }

    /**
     * LeadProcessor / send.php — єдине джерело в templates/{id}/integration/.
     * Мовні копії та старі offers/ можуть мати застарілий код без TG group тощо.
     */
    public function syncSharedIntegrationFiles(string $targetPath, string $templateId = 'default'): void
    {
        $source = rtrim($this->templatesPath, DIRECTORY_SEPARATOR)
            .DIRECTORY_SEPARATOR.$templateId
            .DIRECTORY_SEPARATOR.'integration';

        if (! File::isDirectory($source)) {
            return;
        }

        $destination = $targetPath.DIRECTORY_SEPARATOR.'integration';
        File::ensureDirectoryExists($destination);

        foreach (File::files($source) as $file) {
            File::copy($file->getPathname(), $destination.DIRECTORY_SEPARATOR.$file->getFilename());
        }
    }

    /** Старі оффери з папкою assets/ — один раз перед деплоєм. */
    public function migrateLegacyAssets(string $targetPath): void
    {
        if (! File::isDirectory($targetPath.DIRECTORY_SEPARATOR.'assets')) {
            return;
        }

        $this->rewriteStaticAssetPaths($targetPath);
        $this->normalizeStaticAssets($targetPath);
    }

    public function rewriteStaticAssetPaths(string $targetPath): void
    {
        $includes = $targetPath.DIRECTORY_SEPARATOR.'includes';

        if (! File::isDirectory($includes)) {
            return;
        }

        foreach (File::files($includes) as $file) {
            if ($file->getExtension() !== 'php') {
                continue;
            }

            $content = File::get($file->getPathname());
            $updated = preg_replace(
                [
                    "/asset\('assets\//",
                    '/asset\("assets\//',
                    "/'\/assets\//",
                    "/'assets\//",
                ],
                [
                    "asset('static/",
                    'asset("static/',
                    "'/static/",
                    "'static/",
                ],
                $content,
            );

            if ($updated !== null && $updated !== $content) {
                File::put($file->getPathname(), $updated);
            }
        }
    }

    public function normalizeStaticAssets(string $targetPath): void
    {
        $assets = $targetPath.DIRECTORY_SEPARATOR.'assets';
        $static = $targetPath.DIRECTORY_SEPARATOR.'static';

        if (! File::isDirectory($assets)) {
            return;
        }

        if (File::isDirectory($static)) {
            File::deleteDirectory($static);
        }

        if (! @rename($assets, $static)) {
            File::copyDirectory($assets, $static);
            File::deleteDirectory($assets);
        }
    }

    private function readConfigConstant(string $config, string $name): ?string
    {
        if (preg_match("/define\('{$name}',\s*'([^']*)'\)/", $config, $matches)) {
            return $matches[1];
        }

        return null;
    }
}
