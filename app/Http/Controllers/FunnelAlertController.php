<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateFunnelAlertSettingsRequest;
use App\Models\FunnelAlertEvent;
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

        $events = FunnelAlertEvent::query()
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
                'notified_at' => $event->notified_at?->format('Y-m-d H:i:s'),
                'event_at' => $event->event_at?->format('Y-m-d H:i:s'),
                'received_at' => $event->created_at?->format('Y-m-d H:i:s'),
            ]);

        return Inertia::render('Panel/FunnelAlerts/Index', [
            'settings' => [
                'postback_url' => $alerts->postbackUrl($settings),
                'webhook_token' => $token,
                'has_tg_bot_token' => filled($settings->tg_bot_token),
                'tg_chat_ids' => $settings->chatIds() ?: [''],
            ],
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
