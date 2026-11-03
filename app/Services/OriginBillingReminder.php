<?php

namespace App\Services;

use App\Models\OriginServer;
use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class OriginBillingReminder
{
    public function __construct(
        private readonly TelegramNotifier $telegram,
        private readonly OriginServerSync $sync,
    ) {}

    /**
     * @return array{reminded: int, skipped: int}
     */
    public function remind(?Carbon $now = null): array
    {
        $now = $now ?? now();
        $reminded = 0;
        $skipped = 0;

        foreach (OriginServer::query()->orderBy('host')->get() as $server) {
            if (! $server->dueForBillingReminder($now)) {
                $skipped++;

                continue;
            }

            if ($this->notify($server, $now)) {
                $server->forceFill([
                    'paid_until_alerted_for' => $server->paid_until?->toDateString(),
                ])->save();
                $reminded++;
            }
        }

        return ['reminded' => $reminded, 'skipped' => $skipped];
    }

    public function alertText(OriginServer $server, ?Carbon $now = null): string
    {
        $days = $server->daysUntilPaid($now);
        $host = trim((string) $server->host);
        $label = $server->displayLabel();
        $until = $server->paid_until?->format('d.m.Y') ?: '—';
        $hoster = trim((string) ($server->hoster ?? ''));
        $offers = $this->offerCountOnHost($host);

        $when = match (true) {
            $days === 1 => 'завтра',
            $days === 0 => 'сьогодні',
            is_int($days) && $days < 0 => 'прострочено '.abs($days).' дн.',
            default => 'через '.$days.' дн.',
        };

        return implode("\n", array_filter([
            '💳 Треба оплатити origin',
            "Сервер: {$host}".($label !== $host ? " ({$label})" : ''),
            $hoster !== '' ? "Хостер: {$hoster}" : null,
            "Оплачено до: {$until} ({$when})",
            "Оферів на цьому хості: {$offers}",
        ]));
    }

    private function notify(OriginServer $server, Carbon $now): bool
    {
        $text = $this->alertText($server, $now);
        $sent = false;

        $admins = User::query()->where('role', User::ROLE_ADMIN)->with('settings')->get();
        foreach ($admins as $admin) {
            $settings = $admin->settings;
            if (! $settings instanceof UserSetting) {
                continue;
            }
            if (! filled($settings->tg_bot_token)) {
                continue;
            }
            if (! filled($settings->tg_chat_id) && ! filled($settings->tg_group_chat_id)) {
                continue;
            }

            if ($this->telegram->send($settings, $text)) {
                $sent = true;
            }
        }

        if (! $sent) {
            Log::warning('Origin billing reminder had no admin Telegram to send to', [
                'host' => $server->host,
            ]);
        }

        return $sent;
    }

    private function offerCountOnHost(string $host): int
    {
        $counts = $this->sync->offerCountsByHost();
        $normalized = $this->sync->normalizeHost($host);

        return (int) ($counts[$normalized] ?? 0);
    }
}
