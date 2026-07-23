<?php

namespace App\Services;

use App\Models\UserSetting;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class TelegramNotifier
{
    public function send(UserSetting $settings, string $text): bool
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
                $response = Http::timeout(12)->asForm()->post(
                    "https://api.telegram.org/bot{$token}/sendMessage",
                    [
                        'chat_id' => $target,
                        'text' => $text,
                        'disable_web_page_preview' => true,
                    ],
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
}
