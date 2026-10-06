<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\User;
use App\Services\StaleDeadOfferService;
use App\Services\TemplateCatalog;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class OfferStatsController extends Controller
{
    private const PER_PAGE_OPTIONS = [30, 50, 100, 200];

    /** @var list<string> */
    private const SORTABLE = [
        'brand',
        'domain',
        'geo',
        'lang',
        'template',
        'clicks_geo_count',
        'last_click_geo_at',
        'leads_count',
        'last_lead_at',
        'deposits_count',
        'last_deposit_at',
        'indexed_at',
        'google_indexed_at',
        'deployed_at',
    ];

    public function index(Request $request, StaleDeadOfferService $staleDead, TemplateCatalog $catalog): Response
    {
        $user = $request->user();
        $filters = $this->filters($request, $user);
        $baseQuery = $this->scopedOffers($user);

        $query = clone $baseQuery;
        $this->applyFilters($query, $filters);

        $sort = $filters['sort'];
        $dir = $filters['dir'] === 'asc' ? 'asc' : 'desc';

        if (in_array($sort, ['clicks_geo_count', 'last_click_geo_at', 'leads_count', 'last_lead_at', 'deposits_count', 'last_deposit_at'], true)) {
            $query->leftJoin('offer_stats', 'offer_stats.offer_id', '=', 'offers.id')
                ->select('offers.*')
                ->orderBy("offer_stats.{$sort}", $dir)
                ->orderByDesc('offers.id');
        } else {
            $query->orderBy("offers.{$sort}", $dir)->orderByDesc('offers.id');
        }

        $rows = $query
            ->with(['stats', 'user:id,name,email'])
            ->paginate($filters['per_page'], ['offers.*'], 'page', $filters['page'])
            ->withQueryString()
            ->through(fn (Offer $offer) => $this->toRow($offer, $user->canSeeAllOffers(), $catalog));

        return Inertia::render('Panel/Offers/Stats', [
            'rows' => $rows,
            'filters' => $filters,
            'templateTotals' => $this->templateTotals($baseQuery, $filters, $catalog),
            'filterOptions' => [
                'geos' => (clone $baseQuery)->reorder()->distinct()->orderBy('geo')->pluck('geo')->values()->all(),
                'langs' => (clone $baseQuery)->reorder()->distinct()->orderBy('lang')->pluck('lang')->values()->all(),
                'templates' => (clone $baseQuery)->reorder()
                    ->whereNotNull('template')->where('template', '!=', '')
                    ->distinct()->orderBy('template')->pluck('template')
                    ->map(fn (string $id) => ['id' => $id, 'name' => $catalog->label($id)])
                    ->values()->all(),
            ],
            'perPageOptions' => self::PER_PAGE_OPTIONS,
            'showUserColumn' => $user->canSeeAllOffers(),
            'users' => $user->canSeeAllOffers()
                ? User::query()->orderBy('name')->get(['id', 'name', 'email'])
                : [],
            'staleDeadHint' => $staleDead->hintFor($user),
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    private function filters(Request $request, User $user): array
    {
        $sort = trim($request->string('sort')->toString());
        if (! in_array($sort, self::SORTABLE, true)) {
            $sort = 'leads_count';
        }

        $dir = strtolower(trim($request->string('dir')->toString()));
        if (! in_array($dir, ['asc', 'desc'], true)) {
            $dir = 'desc';
        }

        $perPage = $request->integer('per_page', 50);
        if (! in_array($perPage, self::PER_PAGE_OPTIONS, true)) {
            $perPage = 50;
        }

        return [
            'brand' => trim($request->string('brand')->toString()),
            'domain' => strtolower(trim($request->string('domain')->toString())),
            'geo' => strtoupper(trim($request->string('geo')->toString())),
            'lang' => strtolower(trim($request->string('lang')->toString())),
            'template' => trim($request->string('template')->toString()),
            'user' => $user->canSeeAllOffers() ? $request->integer('user', 0) : 0,
            'sort' => $sort,
            'dir' => $dir,
            'per_page' => $perPage,
            'page' => max(1, $request->integer('page', 1)),
        ];
    }

    private function scopedOffers(User $user): Builder
    {
        $query = Offer::query()
            ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed']);

        if (! $user->canSeeAllOffers()) {
            $query->where('user_id', $user->id);
        }

        return $query;
    }

    /**
     * @param  array<string, mixed>  $filters
     */
    private function applyFilters(Builder $query, array $filters): void
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
        if (! empty($filters['user'])) {
            $query->where('user_id', (int) $filters['user']);
        }
    }

    /**
     * Totals per template under the current filters. The template filter itself
     * is ignored here, so picking one template still leaves the others visible
     * to compare against.
     *
     * @param  array<string, mixed>  $filters
     * @return list<array<string, mixed>>
     */
    private function templateTotals(Builder $baseQuery, array $filters, TemplateCatalog $catalog): array
    {
        $filters['template'] = '';

        $query = (clone $baseQuery)->reorder();
        $this->applyFilters($query, $filters);

        $rows = $query
            ->leftJoin('offer_stats', 'offer_stats.offer_id', '=', 'offers.id')
            ->whereNotNull('offers.template')
            ->where('offers.template', '!=', '')
            ->groupBy('offers.template')
            ->selectRaw(implode(', ', [
                'offers.template as template',
                'COUNT(*) as offers_count',
                'COALESCE(SUM(offer_stats.clicks_geo_count), 0) as clicks',
                'COALESCE(SUM(offer_stats.leads_count), 0) as leads',
                'COALESCE(SUM(offer_stats.deposits_count), 0) as deposits',
            ]))
            ->toBase()
            ->get();

        return $rows
            ->map(fn ($row) => [
                'template' => (string) $row->template,
                'label' => $catalog->label((string) $row->template),
                'offers_count' => (int) $row->offers_count,
                'clicks' => (int) $row->clicks,
                'leads' => (int) $row->leads,
                'deposits' => (int) $row->deposits,
            ])
            ->sortByDesc('leads')
            ->values()
            ->all();
    }

    /**
     * @return array<string, mixed>
     */
    private function toRow(Offer $offer, bool $showUser, TemplateCatalog $catalog): array
    {
        $stats = $offer->stats;

        $row = [
            'id' => $offer->id,
            'brand' => $offer->brand,
            'domain' => $offer->domain,
            'geo' => $offer->geo,
            'lang' => $offer->lang,
            'template' => (string) $offer->template,
            'template_label' => $offer->template ? $catalog->label((string) $offer->template) : '',
            'status' => $offer->status,
            'indexed_at' => $offer->indexed_at?->format('Y-m-d H:i:s'),
            'google_index_status' => (string) ($offer->google_index_status ?? ''),
            'google_indexed' => (bool) $offer->google_indexed_at,
            'google_indexed_at' => $offer->google_indexed_at?->format('Y-m-d H:i:s'),
            'deployed_at' => $offer->deployed_at?->format('Y-m-d H:i:s'),
            'clicks_geo_count' => (int) ($stats?->clicks_geo_count ?? 0),
            'last_click_geo_at' => $stats?->last_click_geo_at?->format('Y-m-d H:i:s'),
            'leads_count' => (int) ($stats?->leads_count ?? 0),
            'last_lead_at' => $stats?->last_lead_at?->format('Y-m-d H:i:s'),
            'deposits_count' => (int) ($stats?->deposits_count ?? 0),
            'last_deposit_at' => $stats?->last_deposit_at?->format('Y-m-d H:i:s'),
            'is_protected' => (bool) ($stats?->is_protected ?? false),
        ];

        if ($showUser) {
            $row['user_name'] = $offer->user?->name;
            $row['user_email'] = $offer->user?->email;
        }

        return $row;
    }
}
