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

    public function endpointFor(UserSetting $settings): string
    {
        $token = $this->ensureProbeToken($settings);

        return rtrim((string) config('app.url'), '/').'/api/v1/telemetry/'.$token;
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
     * @param  array{path?: string, ip?: string, ua?: string}  $meta
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

        $mirror = MirrorDomain::query()->firstOrNew([
            'user_id' => $user->id,
            'host' => $host,
        ]);

        $isNew = ! $mirror->exists;

        $mirror->hit_count = (int) $mirror->hit_count + 1;
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
        } elseif ($mirror->status === MirrorDomain::STATUS_NEW && ! $isNew) {
            $mirror->status = MirrorDomain::STATUS_WATCHING;
        }

        $mirror->save();

        if ($isNew || $mirror->alerted_at === null) {
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
        $text = "🪞 Дзеркало / клон\n"
            ."Домен: {$mirror->host}\n"
            .'Path: '.($mirror->last_path ?: '/')
            ."\nIP: ".($mirror->last_ip ?: '—')
            ."\nУ панелі: Дзеркала → увімкни редірект на свій офер.";

        if ($this->telegram->send($settings, $text)) {
            $mirror->forceFill(['alerted_at' => now()])->save();
        }
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
