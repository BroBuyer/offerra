<?php

namespace App\Services;

use App\Models\FunnelAlertEvent;
use App\Models\FunnelAlertSetting;
use App\Models\Offer;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class FunnelAlertService
{
    public function __construct(
        private readonly TelegramNotifier $telegram,
    ) {}

    public function ensureWebhookToken(FunnelAlertSetting $settings): string
    {
        $existing = trim((string) ($settings->webhook_token ?? ''));

        if ($existing !== '' && strlen($existing) >= 16) {
            return $existing;
        }

        $token = bin2hex(random_bytes(16));
        $settings->forceFill(['webhook_token' => $token])->save();

        return $token;
    }

    public function postbackUrl(FunnelAlertSetting $settings): string
    {
        $token = $this->ensureWebhookToken($settings);
        $base = rtrim((string) config('app.url'), '/');

        return "{$base}/api/funnels/postback";
    }

    public function bearerToken(FunnelAlertSetting $settings): string
    {
        return $this->ensureWebhookToken($settings);
    }

    /**
     * @param  array<string, mixed>  $input
     * @return array{ok: bool, reason?: string, duplicate?: bool}
     */
    public function handle(string $bearerToken, array $input): array
    {
        $settings = FunnelAlertSetting::current();
        $expected = trim((string) ($settings->webhook_token ?? ''));

        if ($expected === '' || ! hash_equals($expected, trim($bearerToken))) {
            return ['ok' => false, 'reason' => 'invalid_token'];
        }

        $brand = trim((string) ($input['brand'] ?? ''));
        $geo = strtoupper(trim((string) ($input['geo'] ?? '')));
        $lang = strtolower(trim((string) ($input['lang'] ?? '')));
        $externalId = trim((string) ($input['id'] ?? $input['external_id'] ?? ''));
        $event = trim((string) ($input['event'] ?? 'funnel.created'));
        $eventAt = $this->parseTimestamp($input['ts'] ?? $input['event_at'] ?? null);

        if ($brand === '' || $geo === '' || $lang === '') {
            return ['ok' => false, 'reason' => 'missing_fields'];
        }

        if ($externalId !== '') {
            $duplicate = FunnelAlertEvent::query()->where('external_id', $externalId)->exists();

            if ($duplicate) {
                return ['ok' => true, 'duplicate' => true];
            }
        }

        $matchKey = FunnelAlertEvent::matchKey($brand, $geo, $lang);
        $offerFound = $this->offerExists($brand, $geo, $lang);

        $record = FunnelAlertEvent::create([
            'external_id' => $externalId !== '' ? $externalId : null,
            'event' => $event !== '' ? $event : 'funnel.created',
            'brand' => $brand,
            'geo' => $geo,
            'lang' => $lang,
            'match_key' => $matchKey,
            'offer_found' => $offerFound,
            'event_at' => $eventAt,
            'payload' => $input,
        ]);

        if ($offerFound) {
            return ['ok' => true];
        }

        $alreadyNotified = FunnelAlertEvent::query()
            ->where('match_key', $matchKey)
            ->whereNotNull('notified_at')
            ->exists();

        if ($alreadyNotified) {
            return ['ok' => true];
        }

        $result = $this->notifyMissingOffer($settings, $brand, $geo, $lang);

        if ($result['ok'] ?? false) {
            $record->forceFill(['notified_at' => now()])->save();
        } else {
            Log::warning('FunnelAlert: telegram send failed', [
                'brand' => $brand,
                'geo' => $geo,
                'lang' => $lang,
                'error' => $result['error'] ?? null,
            ]);
        }

        return ['ok' => true];
    }

    /**
     * @return array{ok: bool, sent: int, failed: int, error?: string, results: list<array{id: int, brand: string, ok: bool, error?: string}>}
     */
    public function retryPending(): array
    {
        $settings = FunnelAlertSetting::current();
        $token = trim((string) ($settings->tg_bot_token ?? ''));
        $chatIds = $settings->chatIds();

        if ($token === '' || $chatIds === []) {
            return [
                'ok' => false,
                'sent' => 0,
                'failed' => 0,
                'error' => 'telegram_not_configured',
                'results' => [],
            ];
        }

        $events = FunnelAlertEvent::query()
            ->where('offer_found', false)
            ->whereNull('notified_at')
            ->orderBy('id')
            ->limit(50)
            ->get();

        $sent = 0;
        $failed = 0;
        $results = [];

        foreach ($events as $event) {
            $result = $this->notifyMissingOffer($settings, $event->brand, $event->geo, $event->lang);

            if ($result['ok'] ?? false) {
                $event->forceFill(['notified_at' => now()])->save();
                $sent++;
                $results[] = [
                    'id' => $event->id,
                    'brand' => $event->brand,
                    'ok' => true,
                ];
            } else {
                $failed++;
                $results[] = [
                    'id' => $event->id,
                    'brand' => $event->brand,
                    'ok' => false,
                    'error' => $result['error'] ?? 'telegram_failed',
                ];
            }
        }

        return [
            'ok' => $failed === 0,
            'sent' => $sent,
            'failed' => $failed,
            'results' => $results,
        ];
    }

    private function offerExists(string $brand, string $geo, string $lang): bool
    {
        $brandKey = mb_strtolower(trim($brand));

        return Offer::query()
            ->where('status', '!=', 'archived')
            ->whereNull('archived_at')
            ->whereRaw('LOWER(brand) = ?', [$brandKey])
            ->where('geo', strtoupper(trim($geo)))
            ->where('lang', strtolower(trim($lang)))
            ->exists();
    }

    /**
     * @return array{ok: bool, error?: string}
     */
    private function notifyMissingOffer(FunnelAlertSetting $settings, string $brand, string $geo, string $lang): array
    {
        $token = trim((string) ($settings->tg_bot_token ?? ''));
        $chatIds = $settings->chatIds();

        if ($token === '' || $chatIds === []) {
            return ['ok' => false, 'error' => 'telegram_not_configured'];
        }

        $base = rtrim((string) config('app.url'), '/');
        $query = http_build_query([
            'fresh' => 1,
            'brand' => $brand,
            'geo' => $geo,
            'lang' => $lang,
        ]);
        $link = "{$base}/offers/create?{$query}";

        $safeBrand = htmlspecialchars($brand, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        $safeGeo = htmlspecialchars($geo, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        $safeLang = htmlspecialchars($lang, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        $safeLink = htmlspecialchars($link, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

        $text = implode("\n", [
            '⚠️ Воронка без ленда',
            "brand: <b>{$safeBrand}</b>",
            "geo: <code>{$safeGeo}</code> · lang: <code>{$safeLang}</code>",
            "<a href=\"{$safeLink}\">Створити оффер</a>",
        ]);

        return $this->telegram->sendRawResult($token, $chatIds, $text, 'HTML');
    }

    private function parseTimestamp(mixed $value): ?Carbon
    {
        if ($value === null || $value === '') {
            return null;
        }

        try {
            return Carbon::parse((string) $value);
        } catch (\Throwable) {
            return null;
        }
    }
}
