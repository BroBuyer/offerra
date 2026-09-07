<?php

namespace App\Services;

use App\Models\Offer;
use App\Models\OriginServer;
use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Support\Carbon;

class OriginHealthMonitor
{
    public const FAIL_STREAK_ALERT = 3;

    public const DEGRADED_STREAK_ALERT = 2;

    public const ALERT_COOLDOWN_MINUTES = 30;

    public function __construct(
        private readonly OriginHealthProbe $probe,
        private readonly TelegramNotifier $telegram,
        private readonly OriginServerSync $sync,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function check(UserSetting $settings, bool $alert = true, ?string $password = null): array
    {
        $result = $this->probe->probe($settings, $password);

        return $this->applyToSettings($settings, $result, $alert);
    }

    /**
     * @return array<string, mixed>
     */
    public function checkServer(OriginServer $server, bool $alert = true, ?string $password = null): array
    {
        if ($server->hasSshCredentials() || filled($password)) {
            $result = $this->probe->probeServer($server, $password);
        } else {
            $result = $this->probe->probeHttpOnly((string) $server->host);
        }

        return $this->applyToServer($server, $result, $alert);
    }

    /**
     * @param  array<string, mixed>  $result
     * @return array<string, mixed>
     */
    public function applyToSettings(UserSetting $settings, array $result, bool $alert = true): array
    {
        $health = $this->buildHealthState(
            is_array($settings->origin_health) ? $settings->origin_health : [],
            $result,
            $alert,
        );

        $alertKind = $health['_alert_kind'] ?? null;
        unset($health['_alert_kind']);

        if ($alertKind !== null && $this->shouldSendAlertsForSettings($settings)) {
            $this->telegram->send($settings, $this->alertTextForSettings($settings, $result, $alertKind));
            $health['last_alert_at'] = now()->toIso8601String();
            $health['last_alert_kind'] = $alertKind;
        }

        $settings->origin_health = $health;
        $settings->save();

        $result['origin_health'] = $settings->originHealthForPanel();
        $result['alert'] = $alertKind;

        return $result;
    }

    /**
     * @param  array<string, mixed>  $result
     * @return array<string, mixed>
     */
    public function applyToServer(OriginServer $server, array $result, bool $alert = true): array
    {
        $health = $this->buildHealthState(
            is_array($server->health) ? $server->health : [],
            $result,
            $alert,
        );

        $alertKind = $health['_alert_kind'] ?? null;
        unset($health['_alert_kind']);

        if ($alertKind !== null && $alert && ($server->alerts_enabled ?? true)) {
            $this->notifyServerAlert($server, $result, $alertKind);
            $health['last_alert_at'] = now()->toIso8601String();
            $health['last_alert_kind'] = $alertKind;
        }

        $server->health = $health;
        $server->save();

        // Mirror into matching user settings (default deploy host) for Settings UI.
        $this->mirrorHealthToMatchingSettings($server, $health);

        $result['origin_health'] = $server->healthForPanel();
        $result['alert'] = $alertKind;

        return $result;
    }

    /**
     * @param  array<string, mixed>  $previous
     * @param  array<string, mixed>  $result
     * @return array<string, mixed>
     */
    private function buildHealthState(array $previous, array $result, bool $alert): array
    {
        $prevStatus = (string) ($previous['status'] ?? 'unchecked');
        $failStreak = (int) ($previous['fail_streak'] ?? 0);
        $degradedStreak = (int) ($previous['degraded_streak'] ?? 0);
        $status = (string) ($result['status'] ?? 'down');

        if ($status === 'down') {
            $failStreak++;
            $degradedStreak = 0;
        } elseif ($status === 'degraded') {
            $degradedStreak++;
            $failStreak = 0;
        } else {
            $failStreak = 0;
            $degradedStreak = 0;
        }

        $now = now();
        $alertKind = $alert
            ? $this->decideAlert($prevStatus, $status, $failStreak, $degradedStreak, $previous, $now)
            : null;

        return [
            'status' => $status,
            'checked_at' => $now->toIso8601String(),
            'fail_streak' => $failStreak,
            'degraded_streak' => $degradedStreak,
            'message' => $result['message'] ?? null,
            'metrics' => $this->panelMetrics($result),
            'last_alert_at' => $previous['last_alert_at'] ?? null,
            'last_alert_kind' => $previous['last_alert_kind'] ?? null,
            '_alert_kind' => $alertKind,
        ];
    }

    /**
     * @param  array<string, mixed>  $previous
     */
    public function decideAlert(
        string $prevStatus,
        string $status,
        int $failStreak,
        int $degradedStreak,
        array $previous,
        ?Carbon $now = null,
    ): ?string {
        $now ??= now();
        $lastAlertAt = isset($previous['last_alert_at'])
            ? Carbon::parse($previous['last_alert_at'])
            : null;
        $lastAlertKind = (string) ($previous['last_alert_kind'] ?? '');
        $cooledDown = $lastAlertAt === null || $lastAlertAt->lte($now->copy()->subMinutes(self::ALERT_COOLDOWN_MINUTES));

        if ($status === 'ok' && in_array($prevStatus, ['down', 'degraded'], true)) {
            if (in_array($lastAlertKind, ['down', 'degraded'], true)) {
                return 'recovery';
            }

            return null;
        }

        if ($status === 'down' && $failStreak >= self::FAIL_STREAK_ALERT && $cooledDown) {
            return 'down';
        }

        if ($status === 'degraded' && $degradedStreak >= self::DEGRADED_STREAK_ALERT && $cooledDown) {
            return 'degraded';
        }

        return null;
    }

    /**
     * Keep Settings UI health in sync when host matches.
     *
     * @param  array<string, mixed>  $health
     */
    private function mirrorHealthToMatchingSettings(OriginServer $server, array $health): void
    {
        $host = $this->sync->normalizeHost((string) $server->host);

        UserSetting::query()
            ->whereNotNull('deploy_host')
            ->where('deploy_host', '!=', '')
            ->get()
            ->each(function (UserSetting $settings) use ($host, $health): void {
                if ($this->sync->normalizeHost((string) $settings->deploy_host) !== $host) {
                    return;
                }
                $settings->origin_health = $health;
                $settings->save();
            });
    }

    private function shouldSendAlertsForSettings(UserSetting $settings): bool
    {
        if ($settings->origin_health_alerts === false) {
            return false;
        }

        return $this->settingsHasTelegram($settings);
    }

    private function settingsHasTelegram(UserSetting $settings): bool
    {
        if (! filled($settings->tg_bot_token)) {
            return false;
        }

        return filled($settings->tg_chat_id) || filled($settings->tg_group_chat_id);
    }

    /**
     * @param  array<string, mixed>  $result
     */
    private function notifyServerAlert(OriginServer $server, array $result, string $kind): void
    {
        $text = $this->alertTextForServer($server, $result, $kind);
        $sent = false;

        $server->loadMissing('owner.settings');
        $ownerSettings = $server->owner?->settings;
        if ($ownerSettings && $this->settingsHasTelegram($ownerSettings) && ($ownerSettings->origin_health_alerts !== false)) {
            $sent = $this->telegram->send($ownerSettings, $text) || $sent;
        }

        // Always try admin TG as well (dedupe if same settings).
        $admins = User::query()->where('role', User::ROLE_ADMIN)->with('settings')->get();
        foreach ($admins as $admin) {
            $settings = $admin->settings;
            if (! $settings || ! $this->settingsHasTelegram($settings)) {
                continue;
            }
            if ($ownerSettings && $settings->id === $ownerSettings->id) {
                continue;
            }
            $this->telegram->send($settings, $text);
            $sent = true;
        }

        if (! $sent) {
            // Fallback: any user settings with TG that currently points deploy_host here.
            UserSetting::query()
                ->whereNotNull('deploy_host')
                ->where('deploy_host', '!=', '')
                ->get()
                ->each(function (UserSetting $settings) use ($server, $text): void {
                    if ($this->sync->normalizeHost((string) $settings->deploy_host) !== $this->sync->normalizeHost((string) $server->host)) {
                        return;
                    }
                    if (! $this->settingsHasTelegram($settings) || $settings->origin_health_alerts === false) {
                        return;
                    }
                    $this->telegram->send($settings, $text);
                });
        }
    }

    /**
     * @param  array<string, mixed>  $result
     */
    private function alertTextForSettings(UserSetting $settings, array $result, string $kind): string
    {
        $settings->loadMissing('user');

        $buyer = trim((string) ($settings->user?->name ?? '—'));
        $host = trim((string) $settings->deploy_host);
        $panel = trim((string) ($settings->deploy_panel_name ?: $host ?: 'server'));
        $offers = $this->offerCountOnHost($host, $settings->user_id);
        $issues = is_array($result['issues'] ?? null) ? $result['issues'] : [];
        $detail = $issues !== [] ? implode(', ', $issues) : (string) ($result['message'] ?? '');

        return match ($kind) {
            'down' => implode("\n", array_filter([
                '🔴 Origin недоступний',
                "Баєр: {$buyer}",
                "Сервер: {$host}".($panel !== '' && $panel !== $host ? " ({$panel})" : ''),
                $detail !== '' ? $detail : 'SSH не відповідає',
                "Оферів на цьому хості: {$offers}",
                '→ Перевірте сервер або змініть origin у налаштуваннях.',
            ])),
            'degraded' => implode("\n", array_filter([
                '⚠️ Origin з проблемами',
                "Баєр: {$buyer}",
                "Сервер: {$host}".($panel !== '' && $panel !== $host ? " ({$panel})" : ''),
                $detail !== '' ? $detail : 'Сервер живий, але є проблеми',
                "Оферів на цьому хості: {$offers}",
                '→ Перевірте диск, nginx/php-fpm або змініть origin.',
            ])),
            default => implode("\n", [
                '✅ Origin знову доступний',
                "Баєр: {$buyer}",
                "Сервер: {$host}".($panel !== '' && $panel !== $host ? " ({$panel})" : ''),
                "Оферів на цьому хості: {$offers}",
            ]),
        };
    }

    /**
     * @param  array<string, mixed>  $result
     */
    private function alertTextForServer(OriginServer $server, array $result, string $kind): string
    {
        $host = trim((string) $server->host);
        $label = $server->displayLabel();
        $offers = $this->offerCountOnHost($host);
        $issues = is_array($result['issues'] ?? null) ? $result['issues'] : [];
        $detail = $issues !== [] ? implode(', ', $issues) : (string) ($result['message'] ?? '');
        $owner = trim((string) ($server->owner?->name ?? ''));

        return match ($kind) {
            'down' => implode("\n", array_filter([
                '🔴 Origin недоступний',
                "Сервер: {$host}".($label !== $host ? " ({$label})" : ''),
                $owner !== '' ? "Власник: {$owner}" : null,
                $detail !== '' ? $detail : 'SSH/HTTP не відповідає',
                "Оферів на цьому хості: {$offers}",
                '→ Перевірте сервер у розділі Origin-сервери.',
            ])),
            'degraded' => implode("\n", array_filter([
                '⚠️ Origin з проблемами',
                "Сервер: {$host}".($label !== $host ? " ({$label})" : ''),
                $owner !== '' ? "Власник: {$owner}" : null,
                $detail !== '' ? $detail : 'Сервер живий, але є проблеми',
                "Оферів на цьому хості: {$offers}",
                '→ Перевірте диск, nginx/php-fpm або SSH-креди.',
            ])),
            default => implode("\n", array_filter([
                '✅ Origin знову доступний',
                "Сервер: {$host}".($label !== $host ? " ({$label})" : ''),
                $owner !== '' ? "Власник: {$owner}" : null,
                "Оферів на цьому хості: {$offers}",
            ])),
        };
    }

    private function offerCountOnHost(string $host, ?int $userId = null): int
    {
        $host = $this->sync->normalizeHost($host);

        if ($host === '') {
            return 0;
        }

        $query = Offer::query()
            ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
            ->where(function ($q) use ($host) {
                $q->where('infra_meta->deploy_host', $host)
                    ->orWhere('deploy_panel_name', $host);
            });

        if ($userId) {
            $query->where('user_id', $userId);
        }

        return $query->count();
    }

    /**
     * @param  array<string, mixed>  $result
     * @return array<string, mixed>
     */
    private function panelMetrics(array $result): array
    {
        $metrics = is_array($result['metrics'] ?? null) ? $result['metrics'] : [];
        $ssh = is_array($result['ssh'] ?? null) ? $result['ssh'] : [];
        $http = is_array($result['http'] ?? null) ? $result['http'] : [];

        return array_merge($metrics, [
            'ssh_ok' => (bool) ($ssh['ok'] ?? false),
            'ssh_ms' => $ssh['latency_ms'] ?? null,
            'http_ok' => (bool) ($http['ok'] ?? false),
            'http_ms' => $http['latency_ms'] ?? null,
            'http_status' => $http['status'] ?? null,
        ]);
    }
}
