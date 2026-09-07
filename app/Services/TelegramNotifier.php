<?php

namespace App\Services;

use App\Models\UserSetting;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class TelegramNotifier
{
    public function send(UserSetting $settings, string $text, ?string $parseMode = null): bool
    {
        $token = trim((string) ($settings->tg_bot_token ?? ''));
        $chatId = trim((string) ($settings->tg_chat_id ?? ''));
        $groupId = trim((string) ($settings->tg_group_chat_id ?? ''));

        if ($token === '' || ($chatId === '' && $groupId === '')) {
            return false;
        }

        $targets = array_values(array_unique(array_filter([$chatId, $groupId])));
        $ok = false;

        foreach ($targets as $target) {
            try {
                $payload = [
                    'chat_id' => $target,
                    'text' => $text,
                    'disable_web_page_preview' => true,
                ];

                if ($parseMode !== null && $parseMode !== '') {
                    $payload['parse_mode'] = $parseMode;
                }

                $response = Http::timeout(12)->asForm()->post(
                    "https://api.telegram.org/bot{$token}/sendMessage",
                    $payload,
                );

                if ($response->successful()) {
                    $ok = true;
                } else {
                    Log::warning('TelegramNotifier failed', [
                        'chat_id' => $target,
                        'status' => $response->status(),
                        'body' => Str::limit($response->body(), 200),
                    ]);
                }
            } catch (\Throwable $e) {
                Log::warning('TelegramNotifier exception: '.$e->getMessage());
            }
        }

        return $ok;
    }

    /**
     * @param  list<string>  $chatIds
     */
    public function sendRaw(string $token, array $chatIds, string $text, ?string $parseMode = null): bool
    {
        return (bool) ($this->sendRawResult($token, $chatIds, $text, $parseMode)['ok'] ?? false);
    }

    /**
     * @param  list<string>  $chatIds
     * @return array{ok: bool, error?: string}
     */
    public function sendRawResult(string $token, array $chatIds, string $text, ?string $parseMode = null): array
    {
        $token = trim($token);
        $targets = array_values(array_unique(array_filter(array_map(
            static fn ($id) => trim((string) $id),
            $chatIds,
        ), static fn (string $id) => $id !== '')));

        if ($token === '' || $targets === []) {
            return ['ok' => false, 'error' => 'empty_token_or_chat'];
        }

        $ok = false;
        $errors = [];

        foreach ($targets as $target) {
            try {
                $payload = [
                    'chat_id' => $target,
                    'text' => $text,
                    'disable_web_page_preview' => true,
                ];

                if ($parseMode !== null && $parseMode !== '') {
                    $payload['parse_mode'] = $parseMode;
                }

                $response = Http::timeout(12)->asForm()->post(
                    "https://api.telegram.org/bot{$token}/sendMessage",
                    $payload,
                );

                if ($response->successful()) {
                    $ok = true;
                } else {
                    $description = (string) ($response->json('description') ?? Str::limit($response->body(), 180));
                    $errors[] = $description;

                    Log::warning('TelegramNotifier failed', [
                        'chat_id' => $target,
                        'status' => $response->status(),
                        'body' => Str::limit($response->body(), 200),
                    ]);
                }
            } catch (\Throwable $e) {
                $errors[] = $e->getMessage();
                Log::warning('TelegramNotifier exception: '.$e->getMessage());
            }
        }

        if ($ok) {
            return ['ok' => true];
        }

        return [
            'ok' => false,
            'error' => $errors[0] ?? 'telegram_failed',
        ];
    }
}
