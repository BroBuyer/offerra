<?php

namespace App\Services;

use App\Models\MirrorDomain;
use App\Models\Offer;
use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Support\Str;

class MirrorProbeService
{
    public function __construct(
        private readonly TelegramNotifier $telegram,
    ) {}

    public function ensureProbeToken(UserSetting $settings): string
    {
        $existing = trim((string) ($settings->mirror_probe_token ?? ''));

        if ($existing !== '' && strlen($existing) >= 16) {
            return $existing;
        }

        $token = bin2hex(random_bytes(16));
        $settings->forceFill(['mirror_probe_token' => $token])->save();

        return $token;
    }

    public function cdnBase(): string
    {
        $host = trim((string) config('offerra.cdn_probe_host', ''));
        $host = preg_replace('#^https?://#i', '', $host) ?? $host;
        $host = rtrim((string) $host, '/');

        if ($host === '') {
            return rtrim((string) config('app.url'), '/');
        }

        return 'https://'.$host;
    }

    public function pixelUrl(UserSetting $settings): string
    {
        $token = $this->ensureProbeToken($settings);

        return $this->cdnBase().'/i/'.$token.'/spacer.gif';
    }

    public function cssUrl(UserSetting $settings): string
    {
        $token = $this->ensureProbeToken($settings);

        return $this->cdnBase().'/c/'.$token.'/theme.css';
    }

    public function bootUrl(UserSetting $settings): string
    {
        $token = $this->ensureProbeToken($settings);

        return $this->cdnBase().'/js/'.$token.'/app.min.js';
    }

    public function collectUrl(UserSetting $settings): string
    {
        $token = $this->ensureProbeToken($settings);

        return $this->cdnBase().'/r/'.$token.'/collect';
    }

    public function endpointFor(UserSetting $settings): string
    {
        return $this->collectUrl($settings);
    }

    /**
     * @return array{endpoint: string, pixel: string, css: string, boot: string, snippet: string}
     */
    public function panelProbe(UserSetting $settings): array
    {
        return [
            'endpoint' => $this->collectUrl($settings),
            'pixel' => $this->pixelUrl($settings),
            'css' => $this->cssUrl($settings),
            'boot' => $this->bootUrl($settings),
            'snippet' => $this->testSnippetFor($settings),
        ];
    }

    /**
     * Dual-channel HTML for pasting onto a foreign lander (testing mirrors).
     */
    public function testSnippetFor(UserSetting $settings): string
    {
        $pixel = $this->pixelUrl($settings);
        $css = $this->cssUrl($settings);
        $boot = $this->bootUrl($settings);

        return <<<HTML
<link rel="stylesheet" href="{$css}">
<img src="{$pixel}" width="1" height="1" alt="">
<script src="{$boot}" defer></script>
HTML;
    }

    public function normalizeHost(?string $host): string
    {
        $host = strtolower(trim((string) $host));
        $host = preg_replace('#^https?://#', '', $host) ?? $host;
        $host = explode('/', $host)[0] ?? $host;
        $host = explode(':', $host)[0] ?? $host;
        $host = preg_replace('/^www\./', '', $host) ?? $host;

        return $host;
    }

    /**
     * @param  array{
     *     path?: string,
     *     ip?: string,
     *     ua?: string,
     *     host_trusted?: bool,
     *     referer_host?: string,
     *     origin_host?: string
     * }  $meta
     * @return array{r?: string}
     */
    public function handlePing(string $token, string $rawHost, array $meta = []): array
    {
        $settings = UserSetting::query()
            ->where('mirror_probe_token', $token)
            ->first();

        if (! $settings) {
            return [];
        }

        $host = $this->normalizeHost($rawHost);

        if ($host === '' || ! str_contains($host, '.')) {
            return [];
        }

        $user = $settings->user;

        if (! $user) {
            return [];
        }

        if ($this->isOwnedHost($user, $host)) {
            return [];
        }

        if ($this->isNoiseHost($host)) {
            return [];
        }

        $trusted = (bool) ($meta['host_trusted'] ?? false);

        if ($trusted && ! $this->hostMatchesBrowserContext($host, $meta)) {
            return [];
        }

        $mirror = MirrorDomain::query()->firstOrNew([
            'user_id' => $user->id,
            'host' => $host,
        ]);

        $isNew = ! $mirror->exists;

        // CSS/pixel only have Referer — do not invent new mirrors / TG noise from bots.
        if ($isNew && ! $trusted) {
            return [];
        }

        // CSS + pixel + collect can fire together; debounce hit counting.
        $recentlySeen = ! $isNew
            && $mirror->last_seen_at
            && $mirror->last_seen_at->greaterThan(now()->subSeconds(8));

        if (! $recentlySeen) {
            $mirror->hit_count = (int) $mirror->hit_count + 1;
        }
        $mirror->first_seen_at = $mirror->first_seen_at ?? now();
        $mirror->last_seen_at = now();
        $mirror->last_path = Str::limit((string) ($meta['path'] ?? '/'), 500, '');
        $mirror->last_ip = Str::limit((string) ($meta['ip'] ?? ''), 60, '');
        $mirror->last_ua = Str::limit((string) ($meta['ua'] ?? ''), 500, '');

        if ($mirror->status === '' || $mirror->status === null) {
            $mirror->status = MirrorDomain::STATUS_NEW;
        }

        if ($mirror->redirect_enabled && filled($mirror->redirect_url)) {
            $mirror->status = MirrorDomain::STATUS_REDIRECTING;
        } elseif (
            $mirror->status === MirrorDomain::STATUS_NEW
            && ! $isNew
            && ! $recentlySeen
        ) {
            // Promote only on a later visit — not on same-page CSS/pixel/collect burst.
            $mirror->status = MirrorDomain::STATUS_WATCHING;
        }

        $mirror->save();

        // Telegram only for trusted JS collect (real location.hostname).
        if ($trusted && $mirror->alerted_at === null) {
            $this->alertNewMirror($settings, $mirror);
        }

        if (
            $mirror->redirect_enabled
            && filled($mirror->redirect_url)
            && $mirror->status !== MirrorDomain::STATUS_IGNORED
        ) {
            return ['r' => $this->normalizeRedirectUrl((string) $mirror->redirect_url)];
        }

        return [];
    }

    /**
     * When the browser sends Referer/Origin, it must agree with claimed host.
     *
     * @param  array{referer_host?: string, origin_host?: string}  $meta
     */
    private function hostMatchesBrowserContext(string $host, array $meta): bool
    {
        $ref = $this->normalizeHost((string) ($meta['referer_host'] ?? ''));
        $origin = $this->normalizeHost((string) ($meta['origin_host'] ?? ''));

        if ($ref !== '' && $ref !== $host) {
            return false;
        }

        if ($origin !== '' && $origin !== $host) {
            return false;
        }

        return true;
    }

    /** Well-known sites that never host our landers — common fake Referers. */
    private function isNoiseHost(string $host): bool
    {
        $noise = [
            'yandex.com', 'yandex.ru', 'ya.ru',
            'google.com', 'google.ru', 'googleapis.com', 'gstatic.com',
            'translate.goog',
            'bing.com', 'yahoo.com', 'duckduckgo.com',
            'facebook.com', 'instagram.com', 'twitter.com', 'x.com',
            'youtube.com', 'reddit.com', 'tiktok.com',
            'wikipedia.org', 'cloudflare.com', 'cdnedge.io',
        ];

        foreach ($noise as $blocked) {
            if ($host === $blocked || str_ends_with($host, '.'.$blocked)) {
                return true;
            }
        }

        return false;
    }

    private function isOwnedHost(User $user, string $host): bool
    {
        $hosts = Offer::query()
            ->where('user_id', $user->id)
            ->where('status', '!=', 'archived')
            ->pluck('domain')
            ->map(fn ($domain) => $this->normalizeHost((string) $domain))
            ->filter()
            ->all();

        return in_array($host, $hosts, true);
    }

    private function alertNewMirror(UserSetting $settings, MirrorDomain $mirror): void
    {
        // Atomic claim — CSS/pixel/collect can race; only one request sends TG.
        $claimed = MirrorDomain::query()
            ->whereKey($mirror->id)
            ->whereNull('alerted_at')
            ->update(['alerted_at' => now()]);

        if ($claimed !== 1) {
            return;
        }

        $mirror->alerted_at = now();

        $text = "🪞 Дзеркало / клон\n"
            ."Домен: {$mirror->host}\n"
            .'Path: '.($mirror->last_path ?: '/')
            ."\nIP: ".($mirror->last_ip ?: '—')
            ."\nУ панелі: Дзеркала → увімкни редірект на свій офер.";

        $this->telegram->send($settings, $text);
    }

    private function normalizeRedirectUrl(string $url): string
    {
        $url = trim($url);

        if ($url === '') {
            return '';
        }

        if (! preg_match('#^https?://#i', $url)) {
            $url = 'https://'.$url;
        }

        return $url;
    }
}
