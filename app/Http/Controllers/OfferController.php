<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOfferRequest;
use App\Models\Offer;
use App\Models\User;
use App\Services\DeployService;
use App\Services\OfferGenerator;
use App\Services\TemplateCatalog;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class OfferController extends Controller
{
    public function index(DeployService $deploy): Response
    {
        $user = auth()->user();
        $settings = $user->settings;

        $deploy->resetStuckDeploys();

        $query = Offer::query()
            ->with('user')
            ->orderByDesc('created_at');

        if (! $user->isAdmin()) {
            $query->where('user_id', $user->id);
        } elseif (request()->filled('user')) {
            $query->where('user_id', request()->integer('user'));
        }

        $offers = $query
            ->get()
            ->map(fn (Offer $offer) => array_merge($offer->toPanelArray(), [
                'deploy_ready' => $deploy->settingsReady($offer->user?->settings),
            ]));

        return Inertia::render('Panel/Offers/Index', [
            'offers' => $offers,
            'canDeploy' => app(DeployService::class)->settingsReady($settings),
            'showUserColumn' => $user->isAdmin(),
            'users' => $user->isAdmin()
                ? User::query()->orderBy('name')->get(['id', 'name', 'email'])
                : [],
            'selectedUserId' => $user->isAdmin() && request()->filled('user')
                ? request()->integer('user')
                : null,
            'dateFilters' => [
                'today' => ($today = now())->toDateString(),
                'yesterday' => $today->copy()->subDay()->toDateString(),
                'weekStart' => $today->copy()->startOfWeek()->toDateString(),
                'monthStart' => $today->copy()->startOfMonth()->toDateString(),
            ],
        ]);
    }

    public function create(TemplateCatalog $catalog): Response
    {
        $settings = auth()->user()->settings;
        $ready = $settings
            && filled($settings->crm_api_key)
            && filled($settings->tg_bot_token);

        return Inertia::render('Panel/Offers/Create', [
            'settingsReady' => $ready,
            'hasKeitaroApiKey' => filled($settings?->keitaro_api_key),
            'affiliateTag' => $settings?->affiliate_tag ?? 'BRO',
            'geoPresets' => config('offerra.geo_presets'),
            'currencies' => config('offerra.currencies'),
            'templates' => $catalog->forWizard(),
            'fresh' => request()->boolean('fresh'),
            'initialTemplate' => request()->string('template')->toString() ?: null,
        ]);
    }

    public function store(StoreOfferRequest $request, OfferGenerator $generator): RedirectResponse
    {
        try {
            $result = $generator->generate($request->user(), [
                'brand' => $request->string('brand')->toString(),
                'domain' => strtolower($request->string('domain')->toString()),
                'min_deposit' => $request->string('min_deposit')->toString(),
                'currency' => strtoupper($request->string('currency')->toString()),
                'geo' => strtoupper($request->string('geo')->toString()),
                'lang' => strtolower($request->string('lang')->toString()),
                'phone' => strtolower($request->string('phone')->toString()),
                'template' => $request->string('template')->toString(),
                'create_keitaro' => $request->boolean('create_keitaro'),
            ]);
        } catch (\Throwable $e) {
            return redirect()
                ->route('offers.create')
                ->withErrors(['generate' => $e->getMessage()]);
        }

        $message = ! empty($result['already_existed'])
            ? "Оффер вже існує: {$result['folder']}"
            : "Оффер згенеровано: {$result['folder']}";

        if ($result['offer']->keitaro_campaign_id) {
            $message .= " · Keitaro #{$result['offer']->keitaro_campaign_id}";
        }

        return redirect()
            ->route('offers.index')
            ->with('success', $message);
    }

    public function deploy(Offer $offer, DeployService $deploy): RedirectResponse
    {
        $authUser = auth()->user();

        if ($offer->user_id !== $authUser->id && ! $authUser->isAdmin()) {
            abort(403);
        }

        $offer->loadMissing('user');

        try {
            $deploy->deploy($offer->user, $offer);
        } catch (\InvalidArgumentException|\RuntimeException $e) {
            return redirect()
                ->route('offers.index')
                ->withErrors(['deploy' => $e->getMessage()]);
        } catch (\Throwable $e) {
            return redirect()
                ->route('offers.index')
                ->withErrors(['deploy' => 'Деплой не вдався: '.$e->getMessage()]);
        }

        return redirect()
            ->route('offers.index')
            ->with('success', "Задеплоєно: {$offer->domain} → {$offer->fresh()->deploy_panel_name}");
    }

    public function updateIndexing(Offer $offer): RedirectResponse
    {
        $user = auth()->user();

        if ($offer->user_id !== $user->id && ! $user->isAdmin()) {
            abort(403);
        }

        $submitted = request()->boolean('submitted_for_indexing');

        $offer->update([
            'submitted_for_indexing' => $submitted,
            'indexed_at' => $submitted ? now() : null,
        ]);

        return redirect()->back();
    }
}
