<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Jobs\RecheckInfrastructureDnsJob;
use App\Models\Offer;
use App\Models\User;
use App\Services\DeployService;
use App\Services\InfrastructureProvisioner;
use App\Services\OfferGenerator;
use App\Services\TemplateCatalog;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Inertia\Inertia;
use Inertia\Response;

class OfferController extends Controller
{
    private const PER_PAGE_OPTIONS = [10, 30, 50, 100];

    public function index(DeployService $deploy): Response
    {
        $user = auth()->user();
        $settings = $user->settings;

        $deploy->resetStuckDeploys();

        $today = now();
        $filters = $this->indexFilters($user);
        $baseQuery = $this->offerScopeQuery($user);

        $query = clone $baseQuery;
        $this->applyOfferFilters($query, $filters, $today);

        $offers = $query
            ->paginate($filters['per_page'], ['*'], 'page', $filters['page'])
            ->withQueryString()
            ->through(fn (Offer $offer) => array_merge($offer->toPanelArray(), [
                'deploy_ready' => $deploy->settingsReady($offer->user?->settings),
            ]));

        return Inertia::render('Panel/Offers/Index', [
            'offers' => $offers,
            'filters' => $filters,
            'filterOptions' => [
                'geos' => (clone $baseQuery)->reorder()->distinct()->orderBy('geo')->pluck('geo')->values()->all(),
                'langs' => (clone $baseQuery)->reorder()->distinct()->orderBy('lang')->pluck('lang')->values()->all(),
            ],
            'createdCounts' => $this->createdCounts($baseQuery, $today),
            'perPageOptions' => self::PER_PAGE_OPTIONS,
            'canDeploy' => app(DeployService::class)->settingsReady($settings),
            'hasKeitaroApiKey' => filled($settings?->keitaro_api_key),
            'geoPresets' => config('offerra.geo_presets'),
            'showUserColumn' => $user->isAdmin(),
            'users' => $user->isAdmin()
                ? User::query()->orderBy('name')->get(['id', 'name', 'email'])
                : [],
            'dateFilters' => [
                'today' => $today->toDateString(),
                'yesterday' => $today->copy()->subDay()->toDateString(),
                'weekStart' => $today->copy()->startOfWeek()->toDateString(),
                'monthStart' => $today->copy()->startOfMonth()->toDateString(),
            ],
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    private function indexFilters(User $user): array
    {
        $perPage = request()->integer('per_page', 30);

        return [
            'brand' => trim(request()->string('brand')->toString()),
            'geo' => strtoupper(request()->string('geo')->toString()),
            'lang' => strtolower(request()->string('lang')->toString()),
            'indexing' => request()->string('indexing')->toString(),
            'created' => request()->string('created')->toString(),
            'created_from' => request()->string('created_from')->toString(),
            'created_to' => request()->string('created_to')->toString(),
            'user' => $user->isAdmin() && request()->filled('user')
                ? (string) request()->integer('user')
                : '',
            'per_page' => $this->resolvePerPage($perPage),
            'page' => max(1, request()->integer('page', 1)),
        ];
    }

    private function resolvePerPage(int $perPage): int
    {
        return in_array($perPage, self::PER_PAGE_OPTIONS, true) ? $perPage : 30;
    }

    private function offerScopeQuery(User $user): Builder
    {
        $query = Offer::query()
            ->with('user')
            ->orderByDesc('created_at');

        if (! $user->isAdmin()) {
            $query->where('user_id', $user->id);
        } elseif (request()->filled('user')) {
            $query->where('user_id', request()->integer('user'));
        }

        return $query;
    }

    /**
     * @param  array<string, mixed>  $filters
     */
    private function applyOfferFilters(Builder $query, array $filters, Carbon $today): void
    {
        if ($filters['brand'] !== '') {
            $query->where('brand', 'like', '%'.$filters['brand'].'%');
        }

        if ($filters['geo'] !== '') {
            $query->where('geo', $filters['geo']);
        }

        if ($filters['lang'] !== '') {
            $query->where('lang', $filters['lang']);
        }

        if ($filters['indexing'] === 'yes') {
            $query->where('submitted_for_indexing', true);
        } elseif ($filters['indexing'] === 'no') {
            $query->where('submitted_for_indexing', false);
        }

        match ($filters['created']) {
            'today' => $query->whereDate('created_at', $today),
            'yesterday' => $query->whereDate('created_at', $today->copy()->subDay()),
            'week' => $query->whereDate('created_at', '>=', $today->copy()->startOfWeek()),
            'month' => $query->whereDate('created_at', '>=', $today->copy()->startOfMonth()),
            'custom' => $this->applyCustomDateFilter(
                $query,
                (string) $filters['created_from'],
                (string) $filters['created_to'],
            ),
            default => null,
        };
    }

    private function applyCustomDateFilter(Builder $query, string $from, string $to): void
    {
        if ($from !== '' && preg_match('/^\d{4}-\d{2}-\d{2}$/', $from)) {
            $query->whereDate('created_at', '>=', $from);
        }

        if ($to !== '' && preg_match('/^\d{4}-\d{2}-\d{2}$/', $to)) {
            $query->whereDate('created_at', '<=', $to);
        }
    }

    /**
     * @return array{today: int, yesterday: int, week: int, month: int}
     */
    private function createdCounts(Builder $baseQuery, Carbon $today): array
    {
        $clone = fn (): Builder => clone $baseQuery;

        return [
            'today' => $clone()->whereDate('created_at', $today)->count(),
            'yesterday' => $clone()->whereDate('created_at', $today->copy()->subDay())->count(),
            'week' => $clone()->whereDate('created_at', '>=', $today->copy()->startOfWeek())->count(),
            'month' => $clone()->whereDate('created_at', '>=', $today->copy()->startOfMonth())->count(),
        ];
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
            'hasDynadotApiKey' => filled($settings?->dynadot_api_key),
            'hasDynadotContactId' => filled($settings?->dynadot_contact_id),
            'domainSearchTlds' => config('offerra.domain_search_tlds', []),
            'affiliateTag' => $settings?->affiliate_tag ?? 'BRO',
            'geoPresets' => config('offerra.geo_presets'),
            'currencies' => config('offerra.currencies'),
            'templates' => $catalog->forWizard(),
            'fresh' => request()->boolean('fresh'),
            'initialTemplate' => request()->string('template')->toString() ?: null,
            'canProvisionInfrastructure' => InfrastructureProvisioner::settingsReady($settings),
        ]);
    }

    public function store(
        StoreOfferRequest $request,
        OfferGenerator $generator,
        InfrastructureProvisioner $provisioner,
    ): RedirectResponse {
        try {
            $result = $generator->generate($request->user(), [
                'brand' => $request->string('brand')->toString(),
                'domain' => strtolower($request->string('domain')->toString()),
                'min_deposit' => $request->string('min_deposit')->toString(),
                'currency' => strtoupper($request->string('currency')->toString()),
                'geo' => strtoupper($request->string('geo')->toString()),
                'lang' => strtolower($request->string('lang')->toString()),
                'phone' => strtolower($request->string('phone')->toString()),
                'phone_countries' => $request->input('phone_countries', []),
                'template' => $request->string('template')->toString(),
                'create_keitaro' => $request->boolean('create_keitaro'),
                'infra_hestia' => $request->boolean('infra_hestia'),
                'infra_cloudflare_zone' => $request->boolean('infra_cloudflare_zone'),
                'infra_cloudflare_dns' => $request->boolean('infra_cloudflare_dns'),
                'infra_dynadot_ns' => $request->boolean('infra_dynadot_ns'),
                'infra_cloudflare_ssl' => $request->boolean('infra_cloudflare_ssl'),
                'infra_cloudflare_https' => $request->boolean('infra_cloudflare_https'),
                'infra_cloudflare_www_redirect' => $request->boolean('infra_cloudflare_www_redirect'),
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

        if ($result['offer']->provision_infrastructure) {
            try {
                set_time_limit(300);
                $provisioner->provision($result['offer']->fresh());
                $result['offer']->refresh();
            } catch (\Throwable $e) {
                return redirect()
                    ->route('offers.create')
                    ->withErrors(['generate' => 'Інфраструктура: '.$e->getMessage()]);
            }

            if ($result['offer']->infra_status === 'failed') {
                return redirect()
                    ->route('offers.create')
                    ->withErrors(['generate' => 'Інфраструктура: '.($result['offer']->infra_error ?: 'невідома помилка')]);
            }

            $message .= ' · інфраструктура налаштована';

            if ($result['offer']->dnsStatus() === 'pending') {
                $message .= ' · DNS поширюється';
                RecheckInfrastructureDnsJob::dispatch($result['offer']->id);
            }
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
            $deploy->enqueueDeploy($offer->user, $offer);
        } catch (\InvalidArgumentException|\RuntimeException $e) {
            return redirect()
                ->back()
                ->withErrors(['deploy' => $e->getMessage()]);
        } catch (\Throwable $e) {
            return redirect()
                ->back()
                ->withErrors(['deploy' => 'Деплой не вдався: '.$e->getMessage()]);
        }

        return redirect()
            ->back()
            ->with('success', "Деплой запущено у фоні: {$offer->domain}. Статус оновиться автоматично.");
    }

    public function provision(
        Offer $offer,
        InfrastructureProvisioner $provisioner,
    ): RedirectResponse {
        $authUser = auth()->user();

        if ($offer->user_id !== $authUser->id && ! $authUser->isAdmin()) {
            abort(403);
        }

        $wasDnsRecheck = $offer->dnsStatus() === 'pending' && in_array($offer->infra_status, ['ready', 'dns_propagating'], true);

        $offer->update([
            'provision_infrastructure' => true,
            'infra_status' => $wasDnsRecheck ? 'ready' : 'pending',
            'infra_error' => null,
        ]);

        try {
            if ($wasDnsRecheck) {
                RecheckInfrastructureDnsJob::dispatchSync($offer->id);
            } else {
                set_time_limit(300);
                $provisioner->provision($offer->fresh());
            }
        } catch (\Throwable $e) {
            return redirect()
                ->back()
                ->withErrors(['provision' => $e->getMessage()]);
        }

        return redirect()
            ->back()
            ->with('success', $wasDnsRecheck
                ? "DNS для {$offer->domain} перевірено."
                : "Інфраструктура для {$offer->domain} налаштована.");
    }

    public function update(
        UpdateOfferRequest $request,
        Offer $offer,
        OfferGenerator $generator,
        DeployService $deploy,
    ): RedirectResponse {
        $createKeitaro = $request->boolean('create_keitaro');
        $shouldAutoDeploy = $createKeitaro && ! $offer->keitaro_campaign_id;

        try {
            $offer = $generator->updateSettings($offer, [
                'phone' => $request->string('phone')->toString(),
                'phone_countries' => $request->input('phone_countries', []),
                'create_keitaro' => $createKeitaro,
            ]);
        } catch (\Throwable $e) {
            return redirect()
                ->back()
                ->withErrors(['edit' => $e->getMessage()]);
        }

        $message = 'Оффер оновлено.';

        if ($createKeitaro && $offer->keitaro_campaign_id) {
            $message .= " Keitaro #{$offer->keitaro_campaign_id}.";

            if ($shouldAutoDeploy) {
                try {
                    $deploy->enqueueDeploy($offer->user, $offer->fresh());
                    $message .= ' Деплой з токеном Keitaro запущено у фоні.';
                } catch (\InvalidArgumentException|\RuntimeException $e) {
                    $message .= ' Натисніть «Деплой», щоб застосувати токен на сервері.';
                }
            } else {
                $message .= ' Натисніть «Деплой», щоб застосувати на сервері.';
            }
        } else {
            $message .= ' Натисніть «Деплой», щоб застосувати на сервері.';
        }

        return redirect()
            ->back()
            ->with('success', $message);
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

    private function authorizeOfferManagement(Offer $offer): void
    {
        $user = auth()->user();

        if ($offer->user_id !== $user->id && ! $user->isAdmin()) {
            abort(403);
        }
    }
}
