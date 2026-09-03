<?php

namespace App\Http\Controllers;

use App\Http\Requests\BulkOfferActionRequest;
use App\Http\Requests\StoreBulkOffersRequest;
use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Jobs\RebindOfferDnsJob;
use App\Jobs\RecheckInfrastructureDnsJob;
use App\Models\Offer;
use App\Models\User;
use App\Services\DeployService;
use App\Services\InfrastructureProvisioner;
use App\Services\OfferGenerator;
use App\Services\OfferTeardownService;
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
                'templates' => (clone $baseQuery)->reorder()->whereNotNull('template')->where('template', '!=', '')->distinct()->orderBy('template')->pluck('template')->values()->all(),
                'panels' => (clone $baseQuery)->reorder()->whereNotNull('deploy_panel_name')->where('deploy_panel_name', '!=', '')->distinct()->orderBy('deploy_panel_name')->pluck('deploy_panel_name')->values()->all(),
            ],
            'createdCounts' => $this->createdCounts($baseQuery, $today),
            'perPageOptions' => self::PER_PAGE_OPTIONS,
            'canDeploy' => app(DeployService::class)->settingsReady($settings),
            'hasKeitaroApiKey' => filled($settings?->keitaro_api_key),
            'geoPresets' => config('offerra.geo_presets'),
            'currencies' => config('offerra.currencies'),
            'templates' => app(TemplateCatalog::class)->forWizard(),
            'brandTemplateUsage' => $this->brandTemplateUsage($user),
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
     * Active (non-archived) offers: lowercase brand → template_id → usage count.
     *
     * @return array<string, array<string, int>>
     */
    private function brandTemplateUsage(User $user): array
    {
        $rows = Offer::query()
            ->where('user_id', $user->id)
            ->whereNotIn('status', ['archived', 'teardown_failed'])
            ->whereNotNull('template')
            ->where('template', '!=', '')
            ->get(['brand', 'template']);

        $map = [];

        foreach ($rows as $row) {
            $brand = mb_strtolower(trim((string) $row->brand));
            $template = trim((string) $row->template);

            if ($brand === '' || $template === '') {
                continue;
            }

            $map[$brand][$template] = ($map[$brand][$template] ?? 0) + 1;
        }

        return $map;
    }

    /**
     * @return array<string, mixed>
     */
    private function indexFilters(User $user): array
    {
        $perPage = request()->integer('per_page', 30);

        return [
            'brand' => trim(request()->string('brand')->toString()),
            'domain' => $this->normalizeDomainFilter(request()->string('domain')->toString()),
            'geo' => strtoupper(request()->string('geo')->toString()),
            'lang' => strtolower(request()->string('lang')->toString()),
            'template' => trim(request()->string('template')->toString()),
            'panel' => trim(request()->string('panel')->toString()),
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

    private function normalizeDomainFilter(string $domain): string
    {
        $domain = strtolower(trim($domain));
        $domain = preg_replace('#^https?://#', '', $domain) ?? $domain;
        $domain = preg_replace('#^www\.#', '', $domain) ?? $domain;

        return rtrim($domain, '/');
    }

    private function resolvePerPage(int $perPage): int
    {
        return in_array($perPage, self::PER_PAGE_OPTIONS, true) ? $perPage : 30;
    }

    private function offerScopeQuery(User $user, bool $archived = false): Builder
    {
        $query = Offer::query()
            ->with('user')
            ->orderByDesc($archived ? 'archived_at' : 'created_at');

        if ($archived) {
            $query->whereIn('status', ['archived', 'teardown_failed']);
        } else {
            $query->whereNotIn('status', ['archived', 'teardown_failed']);
        }

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

        if ($filters['domain'] !== '') {
            $query->where('domain', 'like', '%'.$filters['domain'].'%');
        }

        if ($filters['geo'] !== '') {
            $query->where('geo', $filters['geo']);
        }

        if ($filters['lang'] !== '') {
            $query->where('lang', $filters['lang']);
        }

        if ($filters['template'] !== '') {
            $query->where('template', $filters['template']);
        }

        if ($filters['panel'] !== '') {
            $panel = $filters['panel'];
            $query->where(function (Builder $builder) use ($panel) {
                $builder->where('deploy_panel_name', $panel)
                    ->orWhere('infra_meta->deploy_host', $panel);
            });
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
            'brandTemplateUsage' => $this->brandTemplateUsage(auth()->user()),
            'fresh' => request()->boolean('fresh'),
            'initialTemplate' => request()->string('template')->toString() ?: null,
            'initialBrand' => request()->string('brand')->toString() ?: null,
            'initialGeo' => request()->string('geo')->toString() ?: null,
            'initialLang' => request()->string('lang')->toString() ?: null,
            'initialFromSearch' => request()->boolean('from_search'),
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
                'vitals_enabled' => $request->boolean('vitals_enabled'),
                'from_search_team' => $request->boolean('from_search_team'),
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
            $provisioner->enqueue($result['offer']->fresh());
            $message .= ' · інфраструктура запущена у фоні';
        }

        return redirect()
            ->route('offers.index')
            ->with('success', $message);
    }

    public function storeBulk(
        StoreBulkOffersRequest $request,
        OfferGenerator $generator,
        InfrastructureProvisioner $provisioner,
    ): RedirectResponse {
        $shared = [
            'brand' => $request->string('brand')->toString(),
            'min_deposit' => $request->string('min_deposit')->toString(),
            'currency' => strtoupper($request->string('currency')->toString()),
            'geo' => strtoupper($request->string('geo')->toString()),
            'lang' => strtolower($request->string('lang')->toString()),
            'phone' => strtolower($request->string('phone')->toString()),
            'phone_countries' => $request->input('phone_countries', []),
            'create_keitaro' => $request->boolean('create_keitaro'),
            'vitals_enabled' => $request->boolean('vitals_enabled'),
            'from_search_team' => $request->boolean('from_search_team'),
                        'infra_cloudflare_zone' => $request->boolean('infra_cloudflare_zone'),
            'infra_cloudflare_dns' => $request->boolean('infra_cloudflare_dns'),
            'infra_dynadot_ns' => $request->boolean('infra_dynadot_ns'),
            'infra_cloudflare_ssl' => $request->boolean('infra_cloudflare_ssl'),
            'infra_cloudflare_https' => $request->boolean('infra_cloudflare_https'),
            'infra_cloudflare_www_redirect' => $request->boolean('infra_cloudflare_www_redirect'),
        ];

        /** @var list<array{domain: string, template: string}> $items */
        $items = $request->input('items', []);
        $created = [];
        $failed = [];
        $infraQueued = 0;

        foreach ($items as $item) {
            $domain = strtolower((string) ($item['domain'] ?? ''));
            $template = (string) ($item['template'] ?? '');

            try {
                $result = $generator->generate($request->user(), [
                    ...$shared,
                    'domain' => $domain,
                    'template' => $template,
                ]);

                if ($result['offer']->provision_infrastructure) {
                    $provisioner->enqueue($result['offer']->fresh());
                    $infraQueued++;
                }

                $created[] = [
                    'domain' => $domain,
                    'folder' => $result['folder'],
                    'already_existed' => ! empty($result['already_existed']),
                ];
            } catch (\Throwable $e) {
                $failed[] = [
                    'domain' => $domain,
                    'message' => $e->getMessage(),
                ];
            }
        }

        if ($created === [] && $failed !== []) {
            $firstError = $failed[0]['message'] ?? 'Не вдалося згенерувати офери.';

            return redirect()
                ->route('offers.create')
                ->withErrors(['generate' => $firstError]);
        }

        $parts = [];
        $parts[] = 'Згенеровано '.count($created).' з '.count($items).' оферів';

        if ($created !== []) {
            $parts[] = collect($created)
                ->map(static fn (array $row) => $row['domain'].($row['already_existed'] ? ' (вже був)' : ''))
                ->implode(', ');
        }

        if ($failed !== []) {
            $parts[] = 'Помилки: '.collect($failed)
                ->map(static fn (array $row) => "{$row['domain']} — {$row['message']}")
                ->implode('; ');
        }

        if ($infraQueued > 0) {
            $parts[] = "інфраструктура запущена у фоні ({$infraQueued})";
        }

        return redirect()
            ->route('offers.index')
            ->with($failed === [] ? 'success' : 'warning', implode(' · ', $parts));
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

    public function bulkAction(
        BulkOfferActionRequest $request,
        DeployService $deploy,
    ): RedirectResponse {
        $authUser = $request->user();
        $action = $request->string('action')->toString();
        $ip = trim((string) $request->input('ip', ''));

        $query = Offer::query()
            ->with('user.settings')
            ->whereIn('id', $request->input('ids'))
            ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed']);

        if (! $authUser->isAdmin()) {
            $query->where('user_id', $authUser->id);
        }

        $offers = $query->get();

        if ($offers->isEmpty()) {
            return redirect()
                ->back()
                ->withErrors(['bulk' => 'Немає доступних офферів серед обраних.']);
        }

        $queued = 0;
        $skipped = 0;
        $failed = [];

        foreach ($offers as $offer) {
            if ($action === 'redeploy') {
                try {
                    if (! $offer->user) {
                        $skipped++;
                        $failed[] = $offer->domain.': немає власника';
                        continue;
                    }
                    $deploy->enqueueDeploy($offer->user, $offer);
                    $queued++;
                } catch (\InvalidArgumentException|\RuntimeException $e) {
                    $skipped++;
                    $failed[] = $offer->domain.': '.$e->getMessage();
                }
                continue;
            }

            try {
                RebindOfferDnsJob::dispatch($offer->id, $ip);
                $queued++;
            } catch (\Throwable $e) {
                $skipped++;
                $failed[] = $offer->domain.': '.$e->getMessage();
            }
        }

        $parts = [];

        if ($action === 'redeploy') {
            $parts[] = "Редеплой у черзі: {$queued}";
        } else {
            $parts[] = "A-запис → {$ip} у черзі: {$queued}";
        }

        if ($skipped > 0) {
            $parts[] = "пропущено {$skipped}";
        }

        if ($failed !== []) {
            $parts[] = implode('; ', array_slice($failed, 0, 8));
        }

        $level = $queued > 0 ? ($failed === [] ? 'success' : 'warning') : 'warning';

        return redirect()
            ->back()
            ->with($level, implode(' · ', $parts));
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

        if ($wasDnsRecheck) {
            RecheckInfrastructureDnsJob::dispatchSync($offer->id);

            return redirect()
                ->back()
                ->with('success', "DNS для {$offer->domain} перевірено.");
        }

        $provisioner->enqueue($offer->fresh());

        return redirect()
            ->back()
            ->with('success', "Інфраструктура для {$offer->domain} запущена у фоні.");
    }

    public function update(
        UpdateOfferRequest $request,
        Offer $offer,
        OfferGenerator $generator,
        DeployService $deploy,
    ): RedirectResponse {
        $createKeitaro = $request->boolean('create_keitaro');
        $autoRedeploy = $request->boolean('auto_redeploy', true);
        $hadKeitaro = (bool) $offer->keitaro_campaign_id;

        try {
            $offer = $generator->updateSettings($offer, [
                'brand' => $request->string('brand')->toString(),
                'geo' => $request->string('geo')->toString(),
                'lang' => $request->string('lang')->toString(),
                'template' => $request->string('template')->toString(),
                'min_deposit' => $request->string('min_deposit')->toString(),
                'currency' => $request->string('currency')->toString(),
                'phone' => $request->string('phone')->toString(),
                'phone_countries' => $request->input('phone_countries', []),
                'create_keitaro' => $createKeitaro,
                'vitals_enabled' => $request->boolean('vitals_enabled'),
            ]);
        } catch (\Throwable $e) {
            return redirect()
                ->back()
                ->withErrors(['edit' => $e->getMessage()]);
        }

        $message = 'Оффер оновлено.';

        if ($createKeitaro && ! $hadKeitaro && $offer->keitaro_campaign_id) {
            $message .= " Keitaro #{$offer->keitaro_campaign_id}.";
        }

        if ($autoRedeploy) {
            try {
                $deploy->enqueueDeploy($offer->user, $offer->fresh());
                $message .= ' Деплой запущено у фоні.';
            } catch (\InvalidArgumentException|\RuntimeException $e) {
                $message .= ' Натисніть «Деплой», щоб застосувати на сервері. ('.$e->getMessage().')';
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

    public function archiveIndex(DeployService $deploy): Response
    {
        $user = auth()->user();
        $filters = $this->indexFilters($user);
        $baseQuery = $this->offerScopeQuery($user, archived: true);

        $query = clone $baseQuery;
        if ($filters['brand'] !== '') {
            $query->where('brand', 'like', '%'.$filters['brand'].'%');
        }
        if ($filters['domain'] !== '') {
            $query->where('domain', 'like', '%'.$filters['domain'].'%');
        }

        $offers = $query
            ->paginate($filters['per_page'], ['*'], 'page', $filters['page'])
            ->withQueryString()
            ->through(fn (Offer $offer) => $offer->toPanelArray());

        return Inertia::render('Panel/Offers/Archive', [
            'offers' => $offers,
            'filters' => $filters,
            'perPageOptions' => self::PER_PAGE_OPTIONS,
            'showUserColumn' => $user->isAdmin(),
            'users' => $user->isAdmin()
                ? User::query()->orderBy('name')->get(['id', 'name', 'email'])
                : [],
        ]);
    }

    public function archive(Offer $offer, OfferTeardownService $teardown): RedirectResponse
    {
        $this->authorizeOfferManagement($offer);

        try {
            $teardown->enqueueArchive($offer, auth()->user());
        } catch (\Throwable $e) {
            return redirect()
                ->back()
                ->withErrors(['archive' => $e->getMessage()]);
        }

        return redirect()
            ->back()
            ->with('success', "Архівація запущена: {$offer->domain}. Origin і Cloudflare будуть прибрані, домен лишиться в Dynadot.");
    }

    public function retryArchive(Offer $offer, OfferTeardownService $teardown): RedirectResponse
    {
        $this->authorizeOfferManagement($offer);

        if ($offer->status !== 'teardown_failed') {
            return redirect()->back()->withErrors(['archive' => 'Повтор доступний лише для офферів з помилкою архівації.']);
        }

        try {
            $teardown->enqueueArchive($offer->fresh(), auth()->user());
        } catch (\Throwable $e) {
            return redirect()
                ->back()
                ->withErrors(['archive' => $e->getMessage()]);
        }

        return redirect()
            ->back()
            ->with('success', "Повтор архівації: {$offer->domain}.");
    }

    private function authorizeOfferManagement(Offer $offer): void
    {
        $user = auth()->user();

        if ($offer->user_id !== $user->id && ! $user->isAdmin()) {
            abort(403);
        }
    }
}
