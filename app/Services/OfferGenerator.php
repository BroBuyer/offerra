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
        private readonly string $offersPath,
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
        $templatePath = $this->templateCatalog->resolveSourcePath($template, (string) $input['lang']);

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

            $config = $this->configBuilder->build($input, $settings);
            File::put($targetPath.'/includes/config.php', $config);

            $manifest = [
                'brand' => $input['brand'],
                'domain' => $input['domain'],
                'geo' => strtoupper($input['geo']),
                'lang' => strtolower($input['lang']),
                'phone' => strtolower($input['phone']),
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
                'template' => $template,
                'status' => 'generated',
                'keitaro_campaign_id' => $keitaro['id'] ?? null,
                'keitaro_alias' => $keitaro['alias'] ?? null,
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

    public function refreshConfig(Offer $offer): void
    {
        $settings = $offer->user?->settings;

        if (! $settings) {
            throw new InvalidArgumentException('Налаштування користувача не знайдено.');
        }

        $targetPath = rtrim($this->offersPath, DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR.$offer->folder;
        $configPath = $targetPath.'/includes/config.php';

        if (! File::isDirectory($targetPath) || ! File::exists($configPath)) {
            throw new RuntimeException("Папка оффера не знайдена: {$offer->folder}");
        }

        $keitaroToken = '';
        $config = File::get($configPath);

        if (preg_match("/define\('KEITARO_CAMPAIGN_TOKEN',\s*'([^']*)'\)/", $config, $matches)) {
            $keitaroToken = $matches[1];
        }

        $input = [
            'brand' => $offer->brand,
            'domain' => $offer->domain,
            'min_deposit' => $this->readConfigConstant($config, 'MIN_DEPOSIT') ?: '250',
            'currency' => $this->readConfigConstant($config, 'CURRENCY') ?: 'EUR',
            'geo' => $offer->geo,
            'lang' => $offer->lang,
            'phone' => $offer->phone,
            'keitaro_token' => $keitaroToken,
            'keitaro_campaign_id' => $offer->keitaro_campaign_id,
        ];

        File::put($configPath, $this->configBuilder->build($input, $settings));
        $this->migrateLegacyAssets($targetPath);
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
