<?php

namespace App\Services;

use App\Models\Offer;
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
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function check(UserSetting $settings, bool $alert = true, ?string $password = null): array
    {
        $result = $this->probe->probe($settings, $password);

        return $this->apply($settings, $result, $alert);
    }

    /**
     * @param  array<string, mixed>  $result
     * @return array<string, mixed>
     */
    public function apply(UserSetting $settings, array $result, bool $alert = true): array
    {
        $previous = is_array($settings->origin_health) ? $settings->origin_health : [];
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

        $health = [
            'status' => $status,
            'checked_at' => $now->toIso8601String(),
            'fail_streak' => $failStreak,
            'degraded_streak' => $degradedStreak,
            'message' => $result['message'] ?? null,
            'metrics' => $this->panelMetrics($result),
            'last_alert_at' => $previous['last_alert_at'] ?? null,
            'last_alert_kind' => $previous['last_alert_kind'] ?? null,
        ];

        if ($alertKind !== null && $this->shouldSendAlerts($settings)) {
            $this->telegram->send($settings, $this->alertText($settings, $result, $alertKind));
            $health['last_alert_at'] = $now->toIso8601String();
            $health['last_alert_kind'] = $alertKind;
        }

        $settings->origin_health = $health;
        $settings->save();

        $result['origin_health'] = $settings->originHealthForPanel();
        $result['alert'] = $alertKind;

        return $result;
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

        // Recovery only after we actually notified about a problem — not after a 1-min SSH blip.
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

    private function shouldSendAlerts(UserSetting $settings): bool
    {
        if ($settings->origin_health_alerts === false) {
            return false;
        }

        if (! filled($settings->tg_bot_token)) {
            return false;
        }

        if (! filled($settings->tg_chat_id) && ! filled($settings->tg_group_chat_id)) {
            return false;
        }

        return true;
    }

    /**
     * @param  array<string, mixed>  $result
     */
    private function alertText(UserSetting $settings, array $result, string $kind): string
    {
        $settings->loadMissing('user');

        $buyer = trim((string) ($settings->user?->name ?? '—'));
        $host = trim((string) $settings->deploy_host);
        $panel = trim((string) ($settings->deploy_panel_name ?: $host ?: 'server'));
        $offers = $this->offerCountOnHost($settings);
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

    private function offerCountOnHost(UserSetting $settings): int
    {
        $host = trim((string) $settings->deploy_host);

        if ($host === '' || ! $settings->user_id) {
            return 0;
        }

        return Offer::query()
            ->where('user_id', $settings->user_id)
            ->whereNotIn('status', ['archived', 'archiving'])
            ->where(function ($query) use ($host) {
                $query->where('infra_meta->deploy_host', $host)
                    ->orWhere('deploy_panel_name', $host);
            })
            ->count();
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
