<?php

namespace App\Console\Commands;

use App\Models\Offer;
use App\Models\User;
use App\Models\UserSetting;
use App\Services\KeitaroClient;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ImportOffersFromKeitaro extends Command
{
    protected $signature = 'offers:import-from-keitaro
        {--dry-run : Лише показати, без запису}
        {--fix-tags : Виставити affiliate_tag BRO/EGO/JEL за email}
        {--limit=0 : Ліміт кампаній (0 = усі)}';

    protected $description = 'Імпорт офферів з Keitaro за назвою кампанії SEO {GEO} {TAG} {Brand} ({d.m.Y}) {domain}';

    public function handle(KeitaroClient $keitaro): int
    {
        if ($this->option('fix-tags')) {
            $this->fixAffiliateTags();
        }

        $dryRun = (bool) $this->option('dry-run');
        $limit = max(0, (int) $this->option('limit'));

        $usersByTag = $this->usersByAffiliateTag();
        if ($usersByTag === []) {
            $this->error('Немає users з affiliate_tag. Спочатку --fix-tags або вистав tags у Settings.');

            return self::FAILURE;
        }

        $this->info('Tags: '.collect($usersByTag)->map(fn (User $u, string $tag) => "{$tag}→#{$u->id}")->implode(', '));

        $settings = UserSetting::query()
            ->whereNotNull('keitaro_api_key')
            ->where('keitaro_api_key', '!=', '')
            ->orderBy('user_id')
            ->first();

        if ($settings === null) {
            $this->error('Немає Keitaro API key у user_settings');

            return self::FAILURE;
        }

        $this->info('Завантаження кампаній з '.$settings->keitaro_url.' …');
        $campaigns = $keitaro->listCampaigns($settings);
        $this->info('Кампаній у Keitaro: '.count($campaigns));

        $created = 0;
        $skipped = 0;
        $unparsed = 0;
        $unknownTag = 0;
        $samples = [];

        foreach ($campaigns as $campaign) {
            if ($limit > 0 && ($created + $skipped + $unparsed + $unknownTag) >= $limit) {
                break;
            }

            $parsed = $this->parseCampaignName((string) ($campaign['name'] ?? ''));
            if ($parsed === null) {
                $unparsed++;
                continue;
            }

            $tag = $parsed['tag'];
            $user = $usersByTag[$tag] ?? null;
            if ($user === null) {
                $unknownTag++;
                if (count($samples) < 15) {
                    $samples[] = "unknown_tag {$tag}: {$campaign['name']}";
                }
                continue;
            }

            $exists = Offer::query()
                ->where(function ($q) use ($campaign, $parsed) {
                    $q->where('keitaro_campaign_id', (int) $campaign['id'])
                        ->orWhere('domain', $parsed['domain']);
                })
                ->exists();

            if ($exists) {
                $skipped++;
                continue;
            }

            $geoMeta = $this->geoMeta($parsed['geo']);
            $createdAt = $parsed['created_at']->copy()->timezone(config('app.timezone'))->startOfDay();
            $folder = $this->buildFolder($parsed, $geoMeta['lang'], (int) $campaign['id']);

            if ($dryRun) {
                $created++;
                if ($created <= 8) {
                    $this->line("[dry] #{$campaign['id']} {$tag} {$parsed['geo']} {$parsed['domain']} → user#{$user->id} folder={$folder}");
                }
                continue;
            }

            DB::transaction(function () use ($user, $campaign, $parsed, $geoMeta, $createdAt, $folder): void {
                $offer = new Offer([
                    'user_id' => $user->id,
                    'folder' => $folder,
                    'brand' => $parsed['brand'],
                    'domain' => $parsed['domain'],
                    'geo' => $parsed['geo'],
                    'lang' => $geoMeta['lang'],
                    'phone' => $geoMeta['phone'],
                    'phone_countries' => $geoMeta['phone'],
                    'min_deposit' => $geoMeta['min_deposit'],
                    'currency' => $geoMeta['currency'],
                    'template' => 'pending',
                    'status' => 'deployed',
                    'deployed_at' => $createdAt,
                    'keitaro_campaign_id' => (int) $campaign['id'],
                    'keitaro_alias' => ($campaign['alias'] ?? '') !== '' ? $campaign['alias'] : null,
                    'keitaro_campaign_token' => ($campaign['token'] ?? '') !== '' ? $campaign['token'] : null,
                    'vitals_enabled' => true,
                    'from_search_team' => false,
                    'provision_infrastructure' => true,
                    'availability_status' => 'unchecked',
                ]);
                $offer->created_at = $createdAt;
                $offer->updated_at = $createdAt;
                $offer->save();
            });

            $created++;
        }

        $this->newLine();
        $this->table(
            ['metric', 'count'],
            [
                ['created'.($dryRun ? ' (dry)' : ''), $created],
                ['skipped existing', $skipped],
                ['unparsed name', $unparsed],
                ['unknown tag', $unknownTag],
            ],
        );

        foreach ($samples as $line) {
            $this->warn($line);
        }

        return self::SUCCESS;
    }

    private function fixAffiliateTags(): void
    {
        $map = [
            'admin@offerra.local' => 'BRO',
            'fuegodorn@gmail.com' => 'EGO',
            'jellyfish.tdt@gmail.com' => 'JEL',
        ];

        foreach ($map as $email => $tag) {
            $user = User::query()->where('email', $email)->first();
            if ($user === null) {
                $this->warn("user not found: {$email}");
                continue;
            }
            $settings = $user->settings;
            if ($settings === null) {
                $this->warn("no settings: {$email}");
                continue;
            }
            $settings->affiliate_tag = $tag;
            $settings->save();
            $this->info("tag {$email} → {$tag}");
        }
    }

    /**
     * @return array<string, User>
     */
    private function usersByAffiliateTag(): array
    {
        $out = [];
        foreach (User::query()->with('settings')->get() as $user) {
            $tag = strtoupper(trim((string) ($user->settings?->affiliate_tag ?? '')));
            if ($tag === '') {
                continue;
            }
            $out[$tag] = $user;
        }

        return $out;
    }

    /**
     * @return array{geo: string, tag: string, brand: string, created_at: Carbon, domain: string}|null
     */
    private function parseCampaignName(string $name): ?array
    {
        $name = trim($name);
        if ($name === '') {
            return null;
        }

        if (! preg_match(
            '/^SEO\s+([A-Za-z]{2})\s+([A-Za-z0-9]+)\s+(.+?)\s+\((\d{2}\.\d{2}\.\d{4})\)\s+([A-Za-z0-9][A-Za-z0-9.-]*\.[A-Za-z]{2,})$/u',
            $name,
            $m,
        )) {
            return null;
        }

        try {
            $createdAt = Carbon::createFromFormat('d.m.Y', $m[4], (string) config('app.timezone', 'UTC'));
        } catch (\Throwable) {
            return null;
        }

        return [
            'geo' => strtoupper($m[1]),
            'tag' => strtoupper($m[2]),
            'brand' => trim($m[3]),
            'created_at' => $createdAt->startOfDay(),
            'domain' => strtolower($m[5]),
        ];
    }

    /**
     * @return array{lang: string, phone: string, currency: string, min_deposit: int}
     */
    private function geoMeta(string $geo): array
    {
        $geo = strtoupper($geo);
        $presets = config('offerra.geo_presets', []);
        $lang = 'en';
        $phone = strtolower($geo);
        $currency = 'EUR';

        foreach ($presets as $preset) {
            if (strtoupper((string) ($preset['code'] ?? '')) !== $geo) {
                continue;
            }
            $lang = (string) ($preset['lang'] ?? $lang);
            $phone = (string) ($preset['phone'] ?? $phone);
            $currency = (string) ($preset['currency'] ?? $currency);
            break;
        }

        return [
            'lang' => strtolower($lang),
            'phone' => strtolower($phone),
            'currency' => strtoupper($currency),
            'min_deposit' => 250,
        ];
    }

    /**
     * @param  array{geo: string, tag: string, brand: string, created_at: Carbon, domain: string}  $parsed
     */
    private function buildFolder(array $parsed, string $lang, int $campaignId): string
    {
        $brandSlug = preg_replace('/\s+/', '-', trim($parsed['brand'])) ?: 'brand';
        $date = $parsed['created_at']->format('Y-m-d');

        $base = sprintf(
            '%s_%s_%s_%s_%s_%s',
            $parsed['geo'],
            strtolower($lang),
            $parsed['tag'],
            $brandSlug,
            $parsed['domain'],
            $date,
        );

        if (! Offer::query()->where('folder', $base)->exists()) {
            return $base;
        }

        return $base.'_kt'.$campaignId;
    }
}
