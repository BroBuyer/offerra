<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFunnelAlertIgnoredBrandRequest;
use App\Http\Requests\UpdateFunnelAlertSettingsRequest;
use App\Models\FunnelAlertEvent;
use App\Models\FunnelAlertIgnoredBrand;
use App\Models\FunnelAlertSetting;
use App\Services\FunnelAlertService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class FunnelAlertController extends Controller
{
    public function index(FunnelAlertService $alerts): Response
    {
        $settings = FunnelAlertSetting::current();
        $token = $alerts->ensureWebhookToken($settings);

        $ignoredBrands = $alerts->ignoredBrands();
        $ignoredKeys = collect($ignoredBrands)
            ->map(fn (array $row) => FunnelAlertIgnoredBrand::keyFor($row['brand']))
            ->all();

        $events = FunnelAlertEvent::query()
            ->where('offer_found', false)
            ->latest('id')
            ->limit(200)
            ->get()
            ->map(fn (FunnelAlertEvent $event) => [
                'id' => $event->id,
                'external_id' => $event->external_id,
                'event' => $event->event,
                'brand' => $event->brand,
                'geo' => $event->geo,
                'lang' => $event->lang,
                'offer_found' => $event->offer_found,
                'ignored' => in_array(FunnelAlertIgnoredBrand::keyFor((string) $event->brand), $ignoredKeys, true),
                'notified_at' => $event->notified_at?->format('Y-m-d H:i:s'),
                'event_at' => $event->event_at?->format('Y-m-d H:i:s'),
                'received_at' => $event->created_at?->format('Y-m-d H:i:s'),
            ]);

        return Inertia::render('Panel/FunnelAlerts/Index', [
            'settings' => [
                'postback_url' => $alerts->postbackUrl($settings),
                'webhook_token' => $token,
                'has_tg_bot_token' => filled($settings->tg_bot_token),
                'tg_bot_token' => (string) ($settings->tg_bot_token ?? ''),
                'tg_chat_ids' => $settings->chatIds() ?: [''],
            ],
            'ignoredBrands' => $ignoredBrands,
            'events' => $events,
        ]);
    }

    public function update(UpdateFunnelAlertSettingsRequest $request, FunnelAlertService $alerts): RedirectResponse
    {
        $settings = FunnelAlertSetting::current();

        $chatIds = collect($request->input('tg_chat_ids', []))
            ->map(fn ($id) => trim((string) $id))
            ->filter(fn (string $id) => $id !== '')
            ->values()
            ->all();

        $payload = [
            'tg_chat_ids' => $chatIds,
        ];

        if ($request->filled('tg_bot_token')) {
            $payload['tg_bot_token'] = $request->string('tg_bot_token')->toString();
        }

        $settings->forceFill($payload)->save();

        return redirect()
            ->route('funnel-alerts.index')
            ->with('success', 'Налаштування збережено');
    }

    public function retryTelegram(FunnelAlertService $alerts): RedirectResponse
    {
        $result = $alerts->retryPending();

        if (($result['error'] ?? null) === 'telegram_not_configured') {
            return redirect()
                ->route('funnel-alerts.index')
                ->withErrors(['telegram' => 'Спочатку збережи bot token і chat ID групи.']);
        }

        if (($result['sent'] ?? 0) === 0 && ($result['failed'] ?? 0) === 0) {
            return redirect()
                ->route('funnel-alerts.index')
                ->with('success', 'Немає очікуючих алертів для Telegram.');
        }

        if (($result['failed'] ?? 0) > 0) {
            $error = $result['results'][0]['error'] ?? 'telegram_failed';

            return redirect()
                ->route('funnel-alerts.index')
                ->withErrors(['telegram' => 'Telegram не прийняв повідомлення: '.$error]);
        }

        return redirect()
            ->route('funnel-alerts.index')
            ->with('success', 'Надіслано в Telegram: '.$result['sent']);
    }

    public function ignoreBrand(StoreFunnelAlertIgnoredBrandRequest $request, FunnelAlertService $alerts): RedirectResponse
    {
        $result = $alerts->ignoreBrand($request->string('brand')->toString());

        return redirect()
            ->route('funnel-alerts.index')
            ->with('success', $result['created']
                ? "Бренд «{$result['brand']}» додано в ігнор — Telegram більше не піде"
                : "Бренд «{$result['brand']}» уже в ігнорі");
    }

    public function unignoreBrand(FunnelAlertIgnoredBrand $ignored, FunnelAlertService $alerts): RedirectResponse
    {
        $brand = $ignored->brand;
        $alerts->unignoreBrand($ignored);

        return redirect()
            ->route('funnel-alerts.index')
            ->with('success', "Бренд «{$brand}» прибрано з ігнору");
    }

    public function regenerateToken(FunnelAlertService $alerts): JsonResponse
    {
        $settings = FunnelAlertSetting::current();
        $token = bin2hex(random_bytes(16));

        $settings->forceFill(['webhook_token' => $token])->save();

        return response()->json([
            'webhook_token' => $alerts->bearerToken($settings->fresh()),
        ]);
    }
}
